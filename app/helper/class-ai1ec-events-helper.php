<?php
//
//  class-ai1ec-events-helper.php
//  all-in-one-event-calendar
//
//  Created by The Seed Studio on 2011-07-13.
//

/**
 * Ai1ec_Events_Helper class
 *
 * @package Helpers
 * @author The Seed Studio
 **/
class Ai1ec_Events_Helper {
	/**
	 * _instance class variable
	 *
	 * Class instance
	 *
	 * @var null | object
	 **/
	private static $_instance = NULL;

	/**
	 * Constructor
	 *
	 * Default constructor
	 **/
	private function __construct() { }

	/**
	 * get_instance function
	 *
	 * Return singleton instance
	 *
	 * @return object
	 **/
	static function get_instance() {
		if( self::$_instance === NULL ) {
			self::$_instance = new self();
		}

		return self::$_instance;
	}

	/**
	 * get_event function
	 *
	 * Fetches the event object with the given post ID. Uses the WP cache to
	 * make this more efficient if possible.
	 *
	 * @param int $post_id  The ID of the post associated with the event
	 *
	 * @return Ai1ec_Event  The associated event object
	 **/
	static function get_event( $post_id )
 	{
		$event = wp_cache_get( $post_id, AI1EC_POST_TYPE );
		if( $event === false ) {
			$event = new Ai1ec_Event( $post_id );

			if( ! $event->post_id )
				throw new Ai1ec_Event_Not_Found( "Event with ID '$post_id' could not be retrieved from the database." );

			// Cache the event data
			wp_cache_add( $post_id, $event, AI1EC_POST_TYPE );
		}
		return $event;
	}

	/**
	 * get_matching_event function
	 *
	 * Return event ID by iCalendar UID, feed url, start time and whether the
	 * event has recurrence rules (to differentiate between an event with a UID
	 * defining the recurrence pattern, and other events with with the same UID,
	 * which are just RECURRENCE-IDs).
	 *
	 * @param int $uid iCalendar UID property
	 * @param string $feed Feed URL
	 * @param int $start Start timestamp (GMT)
	 * @param bool $has_recurrence Whether the event has recurrence rules
	 * @param int|null $exclude_post_id Do not match against this post ID
	 *
	 * @return object|null Matching event's post ID, or null if no match
	 **/
	function get_matching_event_id( $uid, $feed, $start, $has_recurrence = false, $exclude_post_id = null ) {
		global $wpdb;

		$table_name = $wpdb->prefix . 'ai1ec_events';
		$query = "SELECT post_id FROM {$table_name} " .
			"WHERE ical_feed_url = %s " .
			"AND ical_uid = %s " .
			"AND start = FROM_UNIXTIME( %d ) " .
		  ( $has_recurrence ? 'AND NOT ' : 'AND ' ) .
			"( recurrence_rules IS NULL OR recurrence_rules = '' )";
		$args = array( $feed, $uid, $start );
		if( ! is_null( $exclude_post_id ) ) {
			$query .= 'AND post_id <> %d';
			$args[] = $exclude_post_id;
		}

		return $wpdb->get_var( $wpdb->prepare( $query, $args ) );
	}

	/**
	 * delete_event_cache function
	 *
	 * Delete cache of event
	 *
	 * @param int $pid Event post ID
	 *
	 * @return void
	 **/
	function delete_event_cache( $pid ) {
		global $wpdb;

		$table_name = $wpdb->prefix . 'ai1ec_event_instances';
		$wpdb->query( $wpdb->prepare( "DELETE FROM $table_name WHERE post_id = %d", $pid ) );
	}

	/**
	 * cache_event function
	 *
	 * Creates a new entry in the cache table for each date that the event appears
	 * (and does not already have an explicit RECURRENCE-ID instance, given its
	 * iCalendar UID).
	 *
	 * @param object $event Event to generate cache table for
	 *
	 * @return void
	 **/
	function cache_event( &$event ) {
		global $wpdb;

		// Convert event's timestamps to local for correct calculations of
		// recurrence.
		// $gm_diff: Needed with SG_iCal_Freq, which doesn't use gm___ version of
		// PHP date functions and calculates wrong recurrences sometimes
		$gm_diff = mktime( 0 ) - gmmktime( 0 );
		$event->start = $this->gmt_to_local( $event->start ) + $gm_diff;
		$event->end = $this->gmt_to_local( $event->end ) + $gm_diff;

		$evs = array();
		$e	 = array(
			'post_id' => $event->post_id,
			'start' 	=> $event->start,
			'end'   	=> $event->end,
		);
		$duration = $event->getDuration();

		// Always cache initial instance
		$evs[] = $e;

		if( $event->recurrence_rules )
		{
			$count 	= 0;
			$start  = $event->start;
			$freq 	= $event->getFrequency();

			$freq->firstOccurrence();
			while( ( $next = $freq->nextOccurrence( $start ) ) > 0 &&
			       $count < 1000 )
			{
				$count++;
				$start      = $next;
				$e['start'] = $start;
				$e['end'] 	= $start + $duration;

				$evs[] = $e;
			}
		}

		// Make entries unique (sometimes recurrence generator creates duplicates?)
		$evs_unique = array();
		foreach( $evs as $ev ) {
			$evs_unique[ md5( serialize( $ev ) ) ] = $ev;
		}

		foreach( $evs_unique as $e )
		{
			// Find out if this event instance is already accounted for by an
			// overriding 'RECURRENCE-ID' of the same iCalendar feed (by comparing the
			// UID, start date, recurrence). If so, then do not create duplicate
			// instance of event.
			$matching_event_id = $event->ical_uid ?
					$this->get_matching_event_id(
						$event->ical_uid,
						$event->ical_feed_url,
						$start = $this->local_to_gmt( $e['start'] ) - $gm_diff,
						false,	// Only search events that don't define recurrence (i.e. only search for RECURRENCE-ID events)
						$event->post_id
					)
				: null;

			// If no other instance was found
			if( is_null( $matching_event_id ) )
			{
				$start_day = date( 'j', $e['start'] );
				$end_day = date( 'j', $e['end'] );

				// If event spans days, create instance for each spanning day
				if( $start_day != $end_day || $e['end'] - $e['start'] > 60 * 60 * 24 )
	        $this->create_cache_table_entries( $e, $gm_diff );
				// Else cache single instance of event
				else
				  $this->insert_event_in_cache_table( $e, $gm_diff );
			}
		}
	}

	/**
	 * insert_event_in_cache_table function
	 *
	 * Inserts a new record in the cache table
	 *
	 * @param array $event Event array
	 * @param int $gm_diff Different between local time and gmt time
	 *
	 * @return void
	 **/
	 function insert_event_in_cache_table( $event, $gm_diff ) {
     global $wpdb;

     // Return the start/end times to GMT zone
     $event['start'] = $this->local_to_gmt( $event['start'] )  - $gm_diff;
     $event['end']   = $this->local_to_gmt( $event['end'] )    - $gm_diff;

     $wpdb->query(
       $wpdb->prepare(
         "INSERT INTO {$wpdb->prefix}ai1ec_event_instances " .
         "       ( post_id,  start,               end                 ) " .
         "VALUES ( %d,       FROM_UNIXTIME( %d ), FROM_UNIXTIME( %d ) )",
         $event
       )
     );
	 }

	 /**
	  * create_cache_table_entries function
	  *
	  * Create a new entry for each day that the event spans.
	  *
	  * @param array $e Event array
	  * @param int $gm_diff Different between local time and GMT time
	  *
	  * @return void
	  **/
	  function create_cache_table_entries( $e, $gm_diff )
	  {
	  	// Decompose start dates into components
	  	$start_bits = getdate( $e['start'] );

	    // ============================================
	    // = Calculate the time for event's first day =
	    // ============================================
	    // Start time is event's original start time
			$event_start = $e['start'];
			// End time is beginning of next day
			$event_end = mktime(
				0,                       // hour
				0,                       // minute
				0,                       // second
				$start_bits['mon'],      // month
				$start_bits['mday'] + 1, // day
				$start_bits['year']      // year
			);
			// Cache first day
			$this->insert_event_in_cache_table( array( 'post_id' => $e['post_id'], 'start' => $event_start, 'end' => $event_end ), $gm_diff );

			// ====================================================
			// = Calculate the time for event's intermediate days =
			// ====================================================
			// Start time is previous end time
			$event_start = $event_end;
			// End time one day ahead
			$event_end += 60 * 60 * 24;
			// Cache intermediate days
			while( $event_end < $e['end'] ) {
			  $this->insert_event_in_cache_table( array( 'post_id' => $e['post_id'], 'start' => $event_start, 'end' => $event_end ), $gm_diff );
			  $event_start  = $event_end;    // Start time is previous end time
			  $event_end    += 24 * 60 * 60; // Increment end time by 1 day
			}

			// ===========================================
			// = Calculate the time for event's last day =
			// ===========================================
			// Start time is already correct (previous end time)
			// End time is event end time
			// Only insert if the last event instance if span is > 0
			$event_end = $e['end'];
			if( $event_end > $event_start )
				// Cache last day
				$this->insert_event_in_cache_table( array( 'post_id' => $e['post_id'], 'start' => $event_start, 'end' => $event_end ), $gm_diff );
	  }

	/**
	 * Returns the various preset recurrence options available (e.g.,
	 * 'DAILY', 'WEEKENDS', etc.).
	 *
	 * @return string        An associative array of pattern names to English
	 *                       equivalents
	 */
	function get_repeat_patterns() {
		static $options = array(
			' '        => 'No repeat',
			'DAILY'    => 'Daily',
			'MO'       => 'Mondays',
			'TU'       => 'Tuesdays',
			'WE'       => 'Wednesdays',
			'TH'       => 'Thursdays',
			'FR'       => 'Fridays',
			'SA'       => 'Saturdays',
			'SU'       => 'Sundays',
			'TU+TH'    => 'Tuesdays & Thursdays',
			'MO+WE+FR' => 'Mondays, Wednesdays & Fridays',
			'WEEKDAYS' => 'Weekdays',
			'WEEKENDS' => 'Weekends',
			'WEEKLY'   => 'Weekly',
			'MONTHLY'  => 'Monthly',
			'YEARLY'   => 'Yearly',
		);

		return $options;
	}

	/**
	 * Generates and returns repeat dropdown
	 *
	 * @param Integer|NULL $selected Selected option
	 *
	 * @return String Repeat dropdown
	 */
	function create_repeat_dropdown( $selected = null ) {
		ob_start();

		$options = $this->get_repeat_patterns();

		?>
		<select name="ai1ec_repeat" id="ai1ec_repeat">
			<?php foreach( $options as $key => $val ): ?>
				<option value="<?php echo $key ?>" <?php if( $key === $selected ) echo 'selected="selected"' ?>>
					<?php _e( $val, AI1EC_PLUGIN_NAME ) ?>
				</option>
			<?php endforeach ?>
		</select>
		<?php

		$output = ob_get_contents();
		ob_end_clean();

		return $output;
	}

	/**
	 * Returns an associative array containing the following information:
	 *   string 'repeat' => pattern of repetition ('DAILY', 'WEEKENDS', etc.)
	 *   int    'count'  => end after 'count' times
	 *   int    'until'  => repeat until date (as UNIX timestamp)
	 * Elements are null if no such recurrence information is available.
	 *
	 * @param  Ai1ec_Event  Event object to parse recurrence rules of
	 * @return array        Array structured as described above
	 **/
	function parse_recurrence_rules( &$event )
	{
		$repeat   = null;
		$count    = null;
		$until    = null;
		$end      = 0;
		if( ! is_null( $event ) ) {
			if( strlen( $event->recurrence_rules ) > 0 ) {
				$line = new SG_iCal_Line( $event->recurrence_rules );
				$rec = new SG_iCal_Recurrence( $line );
				switch( $rec->req ) {
					case 'DAILY':
						$by_day = $rec->getByDay();
						if( empty( $by_day ) ) {
							$repeat = 'DAILY';
						} elseif( $by_day[0] == 'SA+SU' ) {
							$repeat = 'WEEKENDS';
						} elseif( count( $by_day ) == 5 ) {
							$repeat = 'WEEKDAYS';
						} else {
							foreach( $by_day as $d ) {
								$repeat .= $d . '+';
							}
							$repeat = substr( $repeat, 0, -1 );
						}
						break;
					case 'WEEKLY':
						$repeat = 'WEEKLY';
						break;
					case 'MONTHLY':
						$repeat = 'MONTHLY';
						break;
					case 'YEARLY':
						$repeat = 'YEARLY';
						break;
				}
				$count = $rec->getCount();
				$until = $rec->getUntil();
				if( $until ) {
					$until = strtotime( $rec->getUntil() );
					$until -= 24 * 60 * 60; // Subtract 1 day (intuitively, last date is included)
					$end = 2;               // set end value 
				} else if( $count )
          $end = 1;               // set end value 
        else
          $end = 0;               // set end value 
			}
		}
		return array(
			'repeat'  => $repeat,
			'count'   => $count,
			'until'   => $until,
			'end'     => $end
		);
	}

	/**
	 * Generates and returns "End after X times" input
	 *
	 * @param Integer|NULL $count Initial value of range input
	 *
	 * @return String Repeat dropdown
	 */
	function create_count_input( $count = 100 ) {
		ob_start();

		if( ! $count ) $count = 100;
		?>
			<input type="range" name="ai1ec_count" id="ai1ec_count" min="1" max="100"
				<?php if( $count ) echo 'value="' . $count . '"' ?> />
			<?php _e( 'times', AI1EC_PLUGIN_NAME ) ?>
		<?php
		$output = ob_get_contents();
		ob_end_clean();

		return $output;
	}

	/**
	 * get_all_matching_posts function
	 *
	 * Gets existing event posts that are between the interval
	 *
	 * @param int $s_time Start time
	 * @param int $e_time End time
	 *
	 * @return Array of matching event posts
	 **/
	function get_all_matching_posts( $s_time, $e_time ) {
		global $ai1ec_calendar_helper;
		return $ai1ec_calendar_helper->get_events_between( $s_time, $e_time );
	}

	/**
	 * get_matching_events function
	 *
	 * Get events that match with the arguments provided.
	 *
	 * @param int | bool          $start      Events start before this (GMT) time
	 * @param int | bool          $end        Events end before this (GMT) time
	 * @param int | array | bool  $tags       Tag(s) of events
	 * @param int | array | bool  $categories Category(ies) of events
	 *
	 * @return array Matching events
	 **/
	function get_matching_events( $start = false, $end = false, $tags = false, $categories = false, $posts = false ) {
		$args = array(
			'post_type' 			=> AI1EC_POST_TYPE,
			'posts_per_page' 	=> -1
		);

		if( $categories !== false ) {
			// add categories
			if( strstr( $categories, ',' ) !== false ) {
				$categories = explode( ',', $categories );
				// prevent sql injection
				foreach( $categories as $key => $val ) {
					$categories[$key] = (int) $val;
				}
			}
			$args["tax_query"][] = array(
				'taxonomy' 	=> 'events_categories',
				'terms'			=> $categories,
				'field'			=> 'id'
			);
		}

		if( $tags !== false ) {
			// add tags
			if( strstr( $tags, ',' ) !== false ) {
				$tags = explode( ',', $tags );
				// prevent sql injection
				foreach( $tags as $key => $val ) {
					$tags[$key] = (int) $val;
				}
			}
			$args["tax_query"][] = array(
				'taxonomy' 	=> 'events_tags',
				'terms'			=> $tags,
				'field'			=> 'id'
			);
		}

		if( $posts !== false ) {
			// add posts
			if( strstr( $posts, ',' ) !== false ) {
				$posts = explode( ',', $posts );
				// prevent sql injection
				foreach( $posts as $key => $val ) {
					$posts[$key] = (int) $val;
				}
			}
			if( is_array( $posts ) )
				$args["post__in"] = $posts;
			else
				$args["p"] 				= $posts;
		}

		$loop = new WP_Query( $args );
		$events = array();
		foreach( $loop->posts as $post ) {
			try{
				$ev = new Ai1ec_Event( $post->ID );
			} catch( Ai1ec_Event_Not_Found $n ) {
				// The event is not found, continue to the next event
				continue;
			}
			// if there are recurrence rules, include the event, else...
			if( empty( $ev->recurrence_rules ) ) {
				// if start time is set, and event start time is before the range
				// it, continue to the next event
				if( $start !== false && $ev->start < $start )
					continue;
				// if end time is set, and event end time is after
				// it, continue to the next event
				if( $end !== false && $ev->end < $end )
					continue;
			}
			$events[] = $ev;
		}

		return $events;
	}

	/**
	 * fuzzy_string_compare function
	 *
	 * Compares string A to string B using fuzzy comparison algorithm
	 *
	 * @param String $a String to compare
	 * @param String $b String to compare
	 *
	 * @return boolean True if the two strings match, false otherwise
	 **/
	function fuzzy_string_compare( $a, $b ) {
		$percent = 0;
		similar_text( $a, $b, &$percent );
		return ( $percent > 50 );
	}

	/**
	 * get_short_time function
	 *
	 * Format a short-form time for use in compressed (e.g. month) views;
	 * this is also converted to the local timezone.
	 *
	 * @param int $timestamp
	 *
	 * @return string
	 **/
	function get_short_time( $timestamp ) {
		$timestamp = $this->gmt_to_local( $timestamp );
		$ampm = gmstrftime( '%p', $timestamp );
		$ampm = $ampm[0];
		$ampm = strtolower( $ampm );
		return gmstrftime( '%l:%M', $timestamp ) . $ampm;
	}

	/**
	 * get_short_date function
	 *
	 * Format a short-form date for use in compressed (e.g. month) views;
	 * this is also converted to the local timezone.
	 *
	 * @param int $timestamp
	 *
	 * @return string
	 **/
	function get_short_date( $timestamp ) {
		$timestamp = $this->gmt_to_local( $timestamp );
		return gmstrftime( '%b %e', $timestamp );
	}

	/**
	 * get_medium_time function
	 *
	 * Format a medium-length time for use in other views (e.g., Agenda);
	 * this is also converted to the local timezone.
	 *
	 * @param int $timestamp
	 *
	 * @return string
	 **/
	function get_medium_time( $timestamp ) {
		$timestamp = $this->gmt_to_local( $timestamp );
		$ampm = gmstrftime( '%p', $timestamp );
		$ampm = strtolower( $ampm );
		return gmstrftime( '%l:%M', $timestamp ) . $ampm;
	}

	/**
	 * get_long_time function
	 *
	 * Format a long-length time for use in other views (e.g., single event);
	 * this is also converted to the local timezone.
	 *
	 * @param int $timestamp
	 *
	 * @return string
	 **/
	function get_long_time( $timestamp ) {
		$timestamp = $this->gmt_to_local( $timestamp );
		$ampm = gmstrftime( '%p', $timestamp );
		$ampm = strtolower( $ampm );
		return gmstrftime( '%a, %B %e @ %l:%M', $timestamp ) . $ampm;
	}

	/**
	 * get_long_date function
	 *
	 * Format a long-length date for use in other views (e.g., single event);
	 * this is also converted to the local timezone.
	 *
	 * @param int $timestamp
	 *
	 * @return string
	 **/
	function get_long_date( $timestamp ) {
		$timestamp = $this->gmt_to_local( $timestamp );
		return gmstrftime( '%a, %B %e', $timestamp );
	}

	/**
	 * gmt_to_local function
	 *
	 * Returns the UNIX timestamp adjusted to the local timezone.
	 *
	 * @param int $timestamp
	 *
	 * @return int
	 **/
	function gmt_to_local( $timestamp ) {
		return $timestamp + get_option( 'gmt_offset' ) * 3600;
	}

	/**
	 * local_to_gmt function
	 *
	 * Returns the UNIX timestamp adjusted from the local timezone to GMT.
	 *
	 * @param int $timestamp
	 *
	 * @return int
	 **/
	function local_to_gmt( $timestamp ) {
		return $timestamp - get_option( 'gmt_offset' ) * 3600;
	}

	/**
	 * A GMT-version of PHP getdate().
	 *
	 * @param int $timestamp  UNIX timestamp
	 * @return array          Same result as getdate(), but based in GMT time.
	 **/
	function gmgetdate( $timestamp = null ) {
		if( ! $timestamp ) $timestamp = time();
		$bits = explode( ',', gmdate( 's,i,G,j,w,n,Y,z,l,F,U', $timestamp ) );
		$bits = array_combine(
			array( 'seconds', 'minutes', 'hours', 'mday', 'wday', 'mon', 'year', 'yday', 'weekday', 'month', 0 ),
			$bits
		);
		return $bits;
	}

	/**
	 * time_to_gmt function
	 *
	 * Converts time to GMT
	 *
	 * @param int $timestamp
	 *
	 * @return int
	 **/
	function time_to_gmt( $timestamp ) {
		return strtotime( gmdate( 'M d Y H:i:s', $timestamp ) );
	}

	/**
	 * get_gmap_url function
	 *
	 * Returns the URL to the Google Map for the given event object.
	 *
	 * @param Ai1ec_Event $event  The event object to display a map for
	 *
	 * @return string
	 **/
	function get_gmap_url( &$event ) {
		$location_arg = urlencode( $event->address );
		return "http://www.google.com/maps?f=q&hl=en&source=embed&q=$location_arg";
	}

	/**
	 * trim_excerpt function
	 *
	 * Generates an excerpt from the given content string. Adapted from
	 * WordPress's wp_trim_excerpt function that is not useful for applying
	 * to custom content.
	 *
	 * @param string $text The content to trim.
	 *
	 * @return string      The excerpt.
	 **/
	function trim_excerpt( $text )
 	{
		$raw_excerpt = $text;

		$text = strip_shortcodes( $text );

		$text = str_replace(']]>', ']]&gt;', $text);
		$text = strip_tags($text);
		$excerpt_length = apply_filters('excerpt_length', 55);
		$excerpt_more = apply_filters('excerpt_more', ' ' . '[...]');
		$words = preg_split("/[\n\r\t ]+/", $text, $excerpt_length + 1, PREG_SPLIT_NO_EMPTY);
		if ( count($words) > $excerpt_length ) {
			array_pop($words);
			$text = implode(' ', $words);
			$text = $text . $excerpt_more;
		} else {
			$text = implode(' ', $words);
		}
		return apply_filters('wp_trim_excerpt', $text, $raw_excerpt);
	}

	/**
	 * filter_by_terms function
	 *
	 * Returns a subset of post IDs from the given set of post IDs that have any
	 * of the given taxonomy term IDs. This is actually useful for all posts and
	 * taxonomies in general, not just event posts and event-specific taxonomies.
	 *
	 * @param array|string $post_ids  Post IDs as an array of ints or
	 *                                comma-separated string
	 * @param array|string $term_ids  Term IDs as an array of ints or
	 *                                comma-separated string
	 *
	 * @return array                  Filtered post IDs as an array of ints
	 **/
	function filter_by_terms( $post_ids, $term_ids )
	{
		global $wpdb;

		// ===============================================
		// = Sanitize provided IDs against SQL injection =
		// ===============================================
		if( ! is_array( $post_ids ) )
		 	$post_ids = explode( ',', $post_ids );
		foreach( $post_ids as &$post_id ) {
			$post_id = intval( $post_id );
		}
		$post_ids = join( ',', $post_ids );

		if( ! is_array( $term_ids ) )
		 	$term_ids = explode( ',', $term_ids );
		foreach( $term_ids as &$term_id ) {
			$term_id = intval( $term_id );
		}
		$term_ids = join( ',', $term_ids );

		$query =
			"SELECT DISTINCT p.ID " .
			"FROM $wpdb->posts p " .
				"INNER JOIN $wpdb->term_relationships tr ON p.ID = tr.object_id " .
				"INNER JOIN $wpdb->term_taxonomy tt ON tr.term_taxonomy_id = tt.term_taxonomy_id " .
			"WHERE p.ID IN ( " . $post_ids . " ) " .
				"AND tt.term_id IN ( " . $term_ids . " )";

		return $wpdb->get_col( $query );
	}

	/**
	 * get_category_color function
	 *
	 *
	 *
	 * @return void
	 **/
	function get_category_color( $term_id = 0 ) {
	  global $wpdb;
    
    $term_id = (int) $term_id;
	  $table_name = $wpdb->prefix . 'ai1ec_event_category_colors';
	  $color = $wpdb->get_var( "SELECT term_color FROM {$table_name} WHERE term_id = {$term_id}" );
	  return $color;
	}

	/**
	 * get_category_color_square function
	 *
	 *
	 *
	 * @return void
	 **/
	function get_category_color_square( $term_id ) {
	  $color = $this->get_category_color( $term_id );
	  if( ! is_null( $color ) && ! empty( $color ) )
	    return '<div class="ai1ec-category-color" style="background:' . $color . '"></div>';

	  return '';
	}

	/**
	 * get_event_category_color_style function
	 *
	 * Returns the style attribute assigning the category color style to an event.
	 *
	 * @return string
	 **/
	function get_event_category_color_style( $term_id, $allday = false ) {
	  $color = $this->get_category_color( $term_id );
	  if( ! is_null( $color ) && ! empty( $color ) ) {
	    if( $allday )
	      return ' style="background:' . $color . '"';
	    else
	      return ' style="color:' . $color . ' !important"';
	  }

	  return '';
	}

	/**
	 * get_event_category_colors function
	 *
	 * Returns category color boxes
	 *
	 * @return string
	 **/
	function get_event_category_colors( $cats ) {
    $sqrs = '';
	  foreach( $cats as $cat ) :
	    $tmp = $this->get_category_color_square( $cat->term_id );
	    if( ! empty( $tmp ) )
	      $sqrs .= $tmp;
	  endforeach;

	  return $sqrs;
	}
	
	/**
	 * create_end_dropdown function
	 *
	 *
	 *
	 * @return void
	 **/
	function create_end_dropdown( $selected = null ) {
    ob_start();

		$options = array(
		  0 => 'Never',
		  1 => 'After',
		  2 => 'On date'
		);

		?>
		<select name="ai1ec_end" id="ai1ec_end">
			<?php foreach( $options as $key => $val ): ?>
				<option value="<?php echo $key ?>" <?php if( $key === $selected ) echo 'selected="selected"' ?>>
					<?php _e( $val, AI1EC_PLUGIN_NAME ) ?>
				</option>
			<?php endforeach ?>
		</select>
		<?php

		$output = ob_get_contents();
		ob_end_clean();

		return $output;
	}
}
// END class
