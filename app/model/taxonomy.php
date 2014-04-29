<?php

/**
 * Model used for storing/retrieving taxonomy.
 *
 * @author     Time.ly Network, Inc.
 * @since      2.0
 * @package    Ai1EC
 * @subpackage Ai1EC.Html
 */
class Ai1ec_Taxonomy extends Ai1ec_Base {

	/**
	 * Re-fetch category entries map from database.
	 *
	 * @return array Map of category entries.
	 */
	public function fetch_category_map() {
		$category_map = array();
		$records      = (array)$this->_registry->get( 'dbi.dbi' )->select(
			'ai1ec_event_category_meta',
			array( 'term_id', 'term_image', 'term_color' )
		);
		foreach ( $records as $row ) {
			$image = $color = null;
			if ( $row->term_image ) {
				$image = $row->term_image;
			}
			if ( $row->term_color ) {
				$color = $row->term_color;
			}
			$category_map[(int)$row->term_id] = compact( 'image', 'color' );
		}
		return $category_map;
	}

	/**
	 * Get cached category description field.
	 *
	 * @param int    $term_id Category ID.
	 * @param string $field   Name of field, one of 'image', 'color'.
	 *
	 * @return string|null Field value or null if entry is not found.
	 */
	public function get_category_field( $term_id, $field ) {
		static $category_meta = null;
		if ( null === $category_meta ) {
			$category_meta = $this->fetch_category_map();
		}
		$term_id = (int)$term_id;
		if ( ! isset( $category_meta[$term_id] ) ) {
			return null;
		}
		return $category_meta[$term_id][$field];
	}
	
	/**
	 * Returns the color of the Event Category having the given term ID.
	 *
	 * @param int $term_id The ID of the Event Category.
	 *
	 * @return string|null Color to use
	 */
	public function get_category_color( $term_id ) {
		return $this->get_category_field( $term_id, 'color' );
	}

	/**
	 * Returns the image of the Event Category having the given term ID.
	 *
	 * @param int $term_id The ID of the Event Category.
	 *
	 * @return string|null Image url to use.
	 */
	public function get_category_image( $term_id ) {
		return $this->get_category_field( $term_id, 'image' );
	}

}