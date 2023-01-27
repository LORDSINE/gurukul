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
define( 'DB_NAME', 'test1' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '#+S!#{e5L:Pc)q_J~D[ru`|p#.#H?s=N,4g-tuu0%Nyu>|}Rx!pUxX9$!V9B5sZ0' );
define( 'SECURE_AUTH_KEY',  '}+WGbB:]A735%!TqBn*!=V6[OGe=c>Er.%-jILbKHl74.R:1$~tJ#c[(R:stmoA{' );
define( 'LOGGED_IN_KEY',    '3cH86ZC1`/v.,4f&rIw!!bur&Ep}YWu|3MCK@yAWhn`hj[--?=TVxT+Fq00ts>JE' );
define( 'NONCE_KEY',        'blul%I_9t,/.L:>4KjjPlSGl4]eVC6QUp-)wx<MJAA);>sYTAG` ME?j*yRfhI<k' );
define( 'AUTH_SALT',        '.[+9WIs`D-eWh,b(|&1i58ESMv<GK-e8oZN(UssR7)/?k:Xm:#jW5t8 Ow$4E@EN' );
define( 'SECURE_AUTH_SALT', 'TSLi:48Fu /&vlVumVlp-[)6|a-rze<^Q<5$+s_,Knz} [NPR|KZ1z#VhDk^4/&=' );
define( 'LOGGED_IN_SALT',   '86CLmF.d,tvZvR]2v!UEUD7KCO<%HLrZ;O~a`(Of; :5UyNc/xf4imgdveR|vK0|' );
define( 'NONCE_SALT',       ';V/yk+z<Z $:XoKW}i0!wHzZRmPEI~ m;s 0[+Z^[Hjm7dE#VgJ@%N]CnW62aR_f' );

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
