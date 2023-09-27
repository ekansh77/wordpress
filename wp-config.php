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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '~k@E&Ns@/eT@}AF~&JSM*ju;%?$zyau}Dd0a]aJ7z9{6|w}}~~Dt_YN{uEz]l:xA' );
define( 'SECURE_AUTH_KEY',  'iV%0tD!;4@WNX!H&*s14s[<Iqp3E_:jJi|??wn}~IK/)MWUGQry%n}D6mDp}5;oB' );
define( 'LOGGED_IN_KEY',    'hzL$-]u`!dm*M`|>`@E?@%lG}t8L>8}]?iIvcgzuFgLN+]rn5n4/7wKQ`Y KeU@*' );
define( 'NONCE_KEY',        'D:GP6?OMaNBPmy;`H8kk<.<nN*W4o:0KO5GK6n?ORD*QG+]x*?.>MWgB@~lzCb;;' );
define( 'AUTH_SALT',        'TNI :I;qI6m&6k,w08&,TE1vJBfC_D6*]aA0P3TM8:#i8ZTzO|p/VKX~TvWPp8g#' );
define( 'SECURE_AUTH_SALT', 'rzCNFsa_@xd+TAa3>p[n9By:@`p#]]wvsY!z$&0@zur1swF9K>,{Ex|!;qVCE1&i' );
define( 'LOGGED_IN_SALT',   '}^;BKrg#.E!n9sf?jK(P0|GJa4O/bi$iyf3lXG4vn?lY*5*dI3M;902~v9;]r-KM' );
define( 'NONCE_SALT',       '`L1b!g:PSc<4WO)K?C[EY)<m5V2=}gAh wQOkc}}Bmaw&n,RdYvs!iRspbi%*Ugb' );

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
