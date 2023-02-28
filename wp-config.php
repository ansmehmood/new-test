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
define( 'DB_NAME', 'wscubethemedb' );

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
define( 'AUTH_KEY',         '}k&zBkb,Qx(G{#E+m&lH:%mrV^1q!c,^@21^3{*j[i}ie9Q`nBq)}zG1WElg6t;d' );
define( 'SECURE_AUTH_KEY',  'w,]Cb =Z#6V<@DnqNBmB$9-VPWG#cXJ1<Sd(Y/!(u:SKp%s/FBj9i*Y3|%_+}kti' );
define( 'LOGGED_IN_KEY',    'wjZRynH*tt)JyAb6NPy:2,]I]#B,m~=ze/EI3 >/XMA5WcNR-gw(Bg5vE*6@eJQE' );
define( 'NONCE_KEY',        'Aqw;wVm^pt%NPL8,DR~Am IhMB=<>M^X ;Tf7{CP+nmb;+$?L7T![md`~$N89kUy' );
define( 'AUTH_SALT',        '+#B>@V`myxngR,^@I$,9iH~F.n:v_f6]HpN*; >$.0=m|@9(ZUTS`d{VjpkzoWHN' );
define( 'SECURE_AUTH_SALT', 'J?RMMyjA/l/gowqOr+<q#?}7&4s=)q9l!oaJ3?6cvp$CR=A({N|GU[w./}3=5RWj' );
define( 'LOGGED_IN_SALT',   '1($W8n=l0L6G[FR6,t;3!q&G gSN|e6Li@9tukX)aI3@c0t#7A{{e[`_z-P7CkY[' );
define( 'NONCE_SALT',       '){YD2otm/]H4Ry}T;@~x%b.NnBz,WJLVw`fT+^NOM|7Y2go=r10j#/C}Z!F30^?O' );

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
