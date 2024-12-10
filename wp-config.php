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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mstech' );

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
define( 'AUTH_KEY',         'z5w[_E(uVW}%6<|tM9o*&!d(?t2:8qD%vcpth7IwN_m?IXv6k{#::<|>6tV) m!h' );
define( 'SECURE_AUTH_KEY',  'SWa%oHhQWi<Gy=3INv$Z]FhgivJ]c(axFQ3mhy6-A&LDgp52]>wYi /SFqexIU]#' );
define( 'LOGGED_IN_KEY',    'PGHgm~pL8#:JN?oA}z{{r]%%t-,_J*oEW`_SL~CJN.%w3!AX(>/}7EuY#19W>(_P' );
define( 'NONCE_KEY',        '|:zE*^CJw?$}dej[_Iuw .3.L$4XH)^p,s7!QP{0qW]H(zjrrsjU_TZUD-bnI%Qt' );
define( 'AUTH_SALT',        ' IALxr1mw5(J}|#qAmIS&uO`EhQmFLH&|vOK2-hagzqr4Wq!=J;4PbpF%`lZ,(`2' );
define( 'SECURE_AUTH_SALT', 'IGaa_Q4hGLp;m,fct1u{knuf}q!!z:5eD!qcO[fF!T|w<Wl/,l:dTGH{KW_5q8sT' );
define( 'LOGGED_IN_SALT',   'q`{uyyaX|j$~Um35YBZ99Q=n/iFdH@#iRHRt_{k03]{C/7FJNBw,{Y=`{^SpT.&h' );
define( 'NONCE_SALT',       '^Z.M(*p R_bjHcXrOA^!/tf3oTSpx}y$cKCl+]#UY2w6!#]_LyTbN9GP+NL_uGrX' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
