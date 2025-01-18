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
define( 'DB_NAME', 'services' );

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
define( 'AUTH_KEY',         'i`B6#F ~dTVA_oK{:,q2J6-vRc:;sT$0|V6x{BfsCQqW|Cd|1+!8=VWaJ|b8A%UH' );
define( 'SECURE_AUTH_KEY',  ';(-dC0+GyqAa*X,Id%#p$xn-N 6pue,5PVO{sTM{L;G#a)f/d`$C2y%e1mIh#D;*' );
define( 'LOGGED_IN_KEY',    'l| k(yG]Pn*MjZ|R LYdA=*Ffl:Uz#Vw]PfH?P=%!@[`(oQ5- +:c%H*q~NTLK;p' );
define( 'NONCE_KEY',        'h pXwC`fSzCU}AKB}:r4H,ZsE|k</`%j3A;;J/3:jl_0!<%b[I^Nk)gBEX_gBQ;=' );
define( 'AUTH_SALT',        'z|N*K2326`bwfnj ZRFz#*3{$:ugW7tzk8@N0=8!^0/hvR.+QbPx_BS7n?&pOG#x' );
define( 'SECURE_AUTH_SALT', 'bs7F}yI73C=U{}s6j^#WEe1G*FCL#{$]FCp6 zk`9AnDip?666M!?^/n7~P3y8ib' );
define( 'LOGGED_IN_SALT',   '}`g7{ETCBc@wOoZ~qU@#5pZDX23#%K(/!YI D7}s>?r8,o_e}+;Yi-KHKrR?Vocc' );
define( 'NONCE_SALT',       '@(?6@NZ7dqq Eu(2Q&fu,5s.6k#(}Y.c-tyNXBln]$=i[)4YgD}QJ,PwQG_!y5o0' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
