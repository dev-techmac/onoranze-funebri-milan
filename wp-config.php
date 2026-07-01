<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
// Local Windows configuration
// define('DB_NAME', 'wp_funeral');
// define('DB_USER', 'wp_web_admin');
// define('DB_PASSWORD', '123456789');
// define('DB_HOST', '127.0.0.1');

// Original remote hosting configuration
define('DB_NAME', 'wordpress-3530303503a4');
define('DB_USER', 'wordpress-3530303503a4');
define('DB_PASSWORD', '3d54dc18acc2');
define('DB_HOST', 'sdb-53.hosting.stackcp.net');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '/cCfFM/sPIGTOxr8VYr6UqMV5qrN4Znv');
define('SECURE_AUTH_KEY',  'iyGVx6E74YrzSjTq7hUNEhA/LlPQinwm');
define('LOGGED_IN_KEY',    '1J6aZJyt8HolIlMmozpzKxMpYQlnxcom');
define('NONCE_KEY',        'AqVbeUWNiULSKND/6fAjKjbmRKyAnXeU');
define('AUTH_SALT',        'Qb6wZnPK7z619sdWlTkyaW5wCcduAykA');
define('SECURE_AUTH_SALT', 'Kwlc3Zw/6/avl/MvFH/rlmqWq4T56swv');
define('LOGGED_IN_SALT',   'wrRgmasV4zbDVxftEhXaUZQZQwAY9yQE');
define('NONCE_SALT',       'dssQHaohY+rat7t1s+pVHpG3R7wVa2Es');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = '34_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

define( 'FS_METHOD', 'direct' );

// URL overrides for production environment
define( 'WP_HOME', 'http://onoranzefunebrimilan.it' );
define( 'WP_SITEURL', 'http://onoranzefunebrimilan.it' );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
