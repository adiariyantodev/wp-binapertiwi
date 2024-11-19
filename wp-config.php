<?php
define('WP_CACHE', true); // Added by SpeedyCache

 // Added by SpeedyCache

/** Enable W3 Total Cache */


/** Enable W3 Total Cache */

 // Added by SpeedyCache

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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'binaper1_productsbp' );

/** Database username */
define( 'DB_USER', 'binaper1_productsbp' );

/** Database password */
define( 'DB_PASSWORD', 'o2Se5@pI@0' );

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
define( 'AUTH_KEY',         'bdqo02u6ghyqnpndgwm9hrelqt2hm1yv9u0djikfsjuvrrfozdioilnmfheyozey' );
define( 'SECURE_AUTH_KEY',  '1dfbpxvouirvecsafam0rnoup2yxafnwzyk2bqbskhafqrkxbet7c5stibqvx79i' );
define( 'LOGGED_IN_KEY',    'vqqny1cg755vp51az7muu33widdrsfi02tp0hxvqfd0k9xcdbycd0uqyrvsnpujx' );
define( 'NONCE_KEY',        'nl3izvlzghjby9lpcuh1gyp8rxeldwzwm7fbuh8zmgnvfhpulbfnkl3no5lfnexq' );
define( 'AUTH_SALT',        '0p3o2vqm66fnzad1iqysmk7wambepr9lxr8tqubhcqh3bagpbfsucbyll5mmqwze' );
define( 'SECURE_AUTH_SALT', 'rel2nzdfg3xcgc2fcopva5holltnjenqtdvjur6xlyyfdd6rrr0vunh5bhhtupfy' );
define( 'LOGGED_IN_SALT',   'w9ubnqjpthgl8f8mvqg5cfma3q9jnbdtbaboicpdpbms6lkdwlrxmuga3nk6vubn' );
define( 'NONCE_SALT',       'pjepjnzc2qpi6odggx0nle3ura74hhgys9v7dra2ztwu3kzwboqybkgjs9aejpvo' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = '';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
