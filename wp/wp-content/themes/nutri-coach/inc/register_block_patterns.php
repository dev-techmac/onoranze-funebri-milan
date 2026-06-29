<?php
/**
 * Block patterns
 *
 * @package nutri-coach
 * @since 1.0.0
 */

defined( 'ABSPATH' ) || exit;

/**
 * Register block patterns.
 *
 * @since 1.0.0
 * @package nutri-coach
 */
function nutri_coach_register_block_patterns() {

	/**
	 * Block pattern categories.
	 *
	 * @since 1.0.0
	 * @package nutri-coach
	 */
	$block_pattern_categories = apply_filters(
		'nutri_coach_block_pattern_categories',
		array(
			'nutri-coach' => array( 'label' => __( 'Nutri Coach', 'nutri-coach' ) ),
		)
	);

	// Register pattern categories.
	if ( ! empty( $block_pattern_categories ) ) {
		foreach ( $block_pattern_categories as $category_name => $category_properties ) {
			register_block_pattern_category(
				$category_name,
				$category_properties
			);
		}
	}

}

add_action( 'init', 'nutri_coach_register_block_patterns' );