<?php
/**
 *
 * @author Timely Network Inc
 * 
 * This class handles parsing of recurrence rules.
 */
class Ai1ec_Recurrence_Helper {

	public $rrule;
	
	protected $freq;
	protected $until;
	protected $count;
	protected $interval;
	protected $bysecond;
	protected $byminute;
	protected $byhour;
	protected $byday;
	protected $bymonthday;
	protected $byyearday;
	protected $byyearno;
	protected $bymonth;
	protected $bysetpos;
	protected $wkst;
	
	protected $replacements = array(
		'from'=>array('\\,', '\\n', '\\;', '\\:', '\\"'), 
		'to'=>array(',', "\n", ';', ':', '"')
	);
	
	/**
	 * A list of the properties that can have comma-separated lists for values.
	 * @var array
	 */
	protected $comma_separated_properties = array(
		'bysecond', 'byminute', 'byhour', 'byday', 'bymonthday',
		'byyearday', 'byyearno', 'bymonth', 'bysetpos'
	);

	/**
	 * 
	 * @param string $rrule
	 */
	public function __construct( $rrule ) {
		$this->parse_recurrence_rule( $rrule );
	}
	
	public function parse_recurrence_rule( $rrule ) {
		// some clean up
		$rrule = trim( $rrule );
		$rrule = str_replace(
			$this->replacements['from'], 
			$this->replacements['to'], 
			$rrule
		);
		
		$this->rrule = $rrule;
		$recurrence_rule_properties = explode( ';', $rrule );

		foreach ( $recurrence_rule_properties as $property ) {
			if ( empty( $property ) ) {
				continue;
			}
			// it's always name=value
			$exploded_property = explode( '=', $property );

			$property_name = strtolower( $exploded_property[0] );
			$property_value = $exploded_property[1];
		
			//split up the list of values into an array (if it's a list)
			if ( in_array( $property_name, $this->comma_separated_properties ) ) {
				$property_value = explode(',', $property_value);
			}
			$this->$property_name = $property_value;
		}
	}
	
	/**
	 * Return the requested property if exists or false.
	 * 
	 * @param string $property
	 * @return boolean
	 */
	public function get_property( $property ) {
		if( isset( $this->$property ) ) {
			return $this->$property;
		}
		return false;
	}
}