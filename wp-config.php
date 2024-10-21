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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'desteur' );

/** Database username */
define( 'DB_USER', 'Desteur' );

/** Database password */
define( 'DB_PASSWORD', 'Sergent1#' );

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
define( 'AUTH_KEY',         'Mrt%}m)D%1;|QZ/mBs^&@WK{B?Gr} X3..6p03VsVy>]ZCT{`<cY<dkt?xO-$IIg' );
define( 'SECURE_AUTH_KEY',  'rtqT;,PQzA]TKtZ`V^XL^nyk{0(xiiiR~gRl;Q}mr0$]rfERI(H8NZ+I0j/vchX`' );
define( 'LOGGED_IN_KEY',    '|+Di[4[roj Nh6Czzl5K[LFc-I2?e_da+vZ[9#[tI*L-b~^6dLW%M-dT<`j:df1a' );
define( 'NONCE_KEY',        '!0;58n*EHQBYKxfPd&Owe9b9QER/X!sP?,>K#IC*Ud3W~h_i4L1dz;&UP`JX[C?F' );
define( 'AUTH_SALT',        '$$9|`UlNlFBsI{6X|41Hh;q7:5Kf3}_;8nK*_l/q[YZ;mwV{%2+H( 2! Sqt0G!j' );
define( 'SECURE_AUTH_SALT', '$mU`JgvOU-OPqsq&O(-m>%GP3X5_Bgbz[&qV9UP}9e{Yy6<OJZ^*nO.s7)I)f~gu' );
define( 'LOGGED_IN_SALT',   'IAPC(8RZa)CU|dY~}H{.`ZAx^30]R4XpUco[.QPtTB_GIA>-i^N.Jc>(RSj|<^=v' );
define( 'NONCE_SALT',       'Afb]z|<&W-R6Hr)jNwy/dp>r.);mmc~>{AH>M1}>&j2p/oG|y3[TUm!&8O68T8-}' );

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
