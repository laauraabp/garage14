<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'rootroot' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '.^O|FR:yYB2KxrzG(%]HiLOioSg^EnOKaP9@l]>sT#Q4x/fe@DFaWY:QE^QOK0^`' );
define( 'SECURE_AUTH_KEY',  'cYHhuQQJB+J3>V4I4BRWAT4|*GPbIl >lqwpz.+mXnQA@:KOJ ;4r@8m](t%!bLh' );
define( 'LOGGED_IN_KEY',    'p2Icql>$<n5C),6TP:5dB=N(Q@/T 8n4}Ve/}&LYpl]5ki%@%c8g)r? OP$M4Cz?' );
define( 'NONCE_KEY',        'KWfni3dtH4Mmyz;#(&=WAmZv:FsKz[:9>3eEHcm7NsIX7Hdk(JUKgh0JMk/q09(9' );
define( 'AUTH_SALT',        'czV@b@z,&fu.SDi%{8+?Zv6iay+qa<k!>D|F; afOY,X>~mERHpI8K`K9+2227kR' );
define( 'SECURE_AUTH_SALT', '`wa/!R?/!Ov)3J6++~x8ZpO7L4MKBAo,uMVfcYo(<RSdGIM?$F8<ITysz^0M^X9)' );
define( 'LOGGED_IN_SALT',   '+sxp}+6r4#3Ou1[7~O}4sS@Y!K{&_lPisbF};)5ImOqcRi@_1My-f@#t].atE.QL' );
define( 'NONCE_SALT',       'xXkh%h7l!1X_mtlp&T~:Z2F0CdDrk1D%n`Zp6V@ZHK}.QW[& &;o^xxZM4>K/cp]' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
