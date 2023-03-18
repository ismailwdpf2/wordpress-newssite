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
define( 'DB_NAME', 'news_today' );

/** Database username */
define( 'DB_USER', 'newstoday' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         '7~wxu!lHNtP]M|pg@:QiR}&#Aaw[?ea:l`JU^WC(V:zS4t% DH]:B66m9t1.]i~`' );
define( 'SECURE_AUTH_KEY',  '~(-(s-C/OUGP*rlR&NOxQ(#vV&If[fN,2IG0JF.~)K~*D~_.}T%MmBfk2PNqz/z2' );
define( 'LOGGED_IN_KEY',    'u%g5D]HZ%zPhb6%7W@<*@%zC[=b7sf<Qjggi[HL])WU7gXQ]uP@0_i+b,m2#~-6g' );
define( 'NONCE_KEY',        '-WY0j=bk~K&BZp}@l(|Z_V@#c(}6`FeF>1kF;j3+B)$#JY,Ul[(MV`L[)h.?=8Fj' );
define( 'AUTH_SALT',        'Z/xMCZ^FzJjCKNRSak()[EP5gGcj1f#rALQd4bM-KlzEy/+qKkR~2sCTN$?U_0$$' );
define( 'SECURE_AUTH_SALT', '!s%wb90]){-no.H2dY/Hjn0fhlJ84rPuSS&U6XdM-|0&f<[]S0t7s2q^Xh+_vtl>' );
define( 'LOGGED_IN_SALT',   ']+BAnIC{Z1Ab4-=slz_#8by{f=O_G&C d<V8c~vonu9~sWkeh*0rYYnbo=ecN5>V' );
define( 'NONCE_SALT',       '-a5iF&V|Vj9_[yG4kqD%|~lQ[(pj_w4GhCLo72uEC+R?W.}cKO0.D1C+(^FsRWbj' );

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
