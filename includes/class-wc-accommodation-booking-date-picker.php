<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Hooks into the Bookings Date Picker so we can customize it a bit.
 */
class WC_Accommodation_Booking_Date_Picker {

	/**
	 * Hooks into WooCommerce Bookings...
	 */
	public function __construct() {
		add_filter( 'woocommerce_bookings_date_picker_start_label', array( $this, 'start_label' ) );
		add_filter( 'woocommerce_bookings_date_picker_end_label', array( $this, 'end_label' ) );
	}

	/**
	 * Changes the start label to "Check-in"
	 * @param  string $label
	 * @return string
	 */
	public function start_label( $label ) {
		return __( 'Check-in', 'woocommerce-accommodation-bookings' );
	}

	/**
	 * Changes the end label to "Check-out"
	 */
	public function end_label( $label ) {
		return __( 'Check-out', 'woocommerce-accommodation-bookings' );
	}

}

new WC_Accommodation_Booking_Date_Picker;
