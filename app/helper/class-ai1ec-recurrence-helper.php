<?php

/**
 * Handles parsing of ICS recurrence rules
 *
 * @author Time.ly Network, Inc.
 * @since  1.10.3
 */
class Ai1ec_Recurrence_Helper
{

	/**
	 * @var string Parsed rule copy
	 */
	public $rrule;

	/**
	 * @var array Map of parsed rule keys and values
	 */
	protected $_properties = array();

	/**
	 * @var array Replacement keys to use in rules cleanup
	 */
	protected $replacements = array(
		'from' => array( '\\,', '\\n', '\\;', '\\:', '\\"',), 
		'to'   => array( ',',   "\n",  ';',   ':',   '"',  ),
	);

	/**
	 * @var array Map of properties possibly having comma-separated values
	 */
	protected $comma_separated_properties = array(
		'bysecond'   => true,
		'byminute'   => true,
		'byhour'     => true,
		'byday'      => true,
		'bymonthday' => true,
		'byyearday'  => true,
		'byyearno'   => true,
		'bymonth'    => true,
		'bysetpos'   => true,
	);

	/**
	 * Constructor
	 *
	 * @param string $rrule Recurrence rule to initiate with
	 *
	 * @return void Constructor does not return
	 */
	public function __construct( $rrule ) {
		$this->parse_recurrence_rule( $rrule );
	}
	
	/**
	 * Parse arbitrary recurrence rule into keys and values
	 *
	 * @param string $rrule Recurrence rule to initiate with
	 *
	 * @return void Method doesn't return
	 */
	public function parse_recurrence_rule( $rrule ) {
		$this->_properties = array();
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
			$property = trim( $property );
			if ( empty( $property ) ) {
				continue;
			}
			// it's always name=value
			$exploded_property = explode( '=', $property );

			$property_name  = strtolower( $exploded_property[0] );
			$property_value = $exploded_property[1];

			//split up the list of values into an array (if it's a list)
			if ( isset( $this->comma_separated_properties[$property_name] ) ) {
				$property_value = explode( ',', $property_value );
			}
			$this->_properties[$property_name] = $property_value;
		}
	}

	/**
	 * Return the value for requested property
	 *
	 * @param string $property Name of property to get
	 * @param mixed  $default  Value to return when property doesn't exist [optional=false]
	 *
	 * @return mixed Value or $default
	 */
	public function get_property( $property, $default = false ) {
		if ( isset( $this->_properties[$property] ) ) {
			return $this->_properties[$property];
		}
		return $default;
	}

}