<?php
/**
 * Constants class.
 *
 * @package NutriCoach
 * @since 1.0.0
 */

namespace NutriCoach;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Constants class.
 */
class Constants {

	/**
	 * Product key for the theme.
	 *
	 * @var string
	 */
	const PRODUCT_KEY = 'nutri_coach';

	/**
	 * Product slug for the theme.
	 *
	 * @var string
	 */
	const PRODUCT_SLUG = 'nutri-coach';

	/**
	 * Cache keys used throughout the theme.
	 *
	 * @var array
	 */
	const CACHE_KEYS = array(
		'dismissed-welcome-notice' => 'nutri_coach_dismissed_welcome_notice',
	);

	/**
	 * Text domain for the theme.
	 *
	 * @var string
	 */
	const TEXT_DOMAIN = 'nutri-coach';
}
