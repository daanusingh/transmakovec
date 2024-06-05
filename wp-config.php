<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'i9769842_oshm1' );

/** Database username */
define( 'DB_USER', 'i9769842_oshm1' );

/** Database password */
define( 'DB_PASSWORD', 'U.Uxn0LZBjXFlM6LLwd37' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'HwvAjxvsgEXhAjmycTh4Hsxf5AyeMqXv3XPLPpn2ym71Xa5Grn4IDaSQAj44UDFg');
define('SECURE_AUTH_KEY',  'y2n2xbgEqg7PPs9iwxmQ50ZSsjkaZK64PgiLMnylVyQdQjxa2focrQ5pg7oqZDCG');
define('LOGGED_IN_KEY',    'FRuhFHQLvrvQ0rqpFDkgZbB0X7tm5AjSmD6jA2erhYkVG42FSAPIkbVBPDxT1zO1');
define('NONCE_KEY',        'RQHOba1k7cWH9JIE1eUQh39Gm2bOmwylN5uouiZeqQ4TsCZKeYj3X5NJFdGJWgo0');
define('AUTH_SALT',        '9lu35BHvsgFUdu0ucSDktfwI6zsZ2bWcyyzwoNSVzEufBgTyXKXjyd6ntM2lrZmg');
define('SECURE_AUTH_SALT', 'jICzYDK7uEJ95zCxHDv3JqFOuAPbATnRQBOnp7sLzTBmAyPLoCCplZBPpvsYD1BS');
define('LOGGED_IN_SALT',   '5SoEynmJjehrDTg7vbCI4PgRbRNKWAUQywxN7PYJbBRuhxFWSukU066fnG32zzWy');
define('NONCE_SALT',       'V4udqzYQYMjnptZaOGpPIff0yGKW73fBbgNaHYs4xvSBRWnPVXoHAvaWeGPkQnbW');

/**
 * Other customizations.
 */
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'lsgd_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */
define('WP_MEMORY_LIMIT', '256M');


/* That's all, stop editing! Happy publishing. */


/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
