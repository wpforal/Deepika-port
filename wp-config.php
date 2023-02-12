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
define( 'DB_NAME', 'personalport' );

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
define( 'AUTH_KEY',         ') lu,Dl/,`VTe$Uo._s}^A =tNRK&.Rf,oP^DkQYZz(LD}@I4?7`DY~wa=Z@OqPp' );
define( 'SECURE_AUTH_KEY',  'M|rt{k8[#Zw]bXgNko@vv[n$:9S9T:?(W`E3c&Jg?On;XU*A}9HGjhkjM7P&];VI' );
define( 'LOGGED_IN_KEY',    '$PyJ-#C;}|kKo%I[@0_v/Hf/&^~9RP5~U*?4!S:CCTn))I^b<Yv;3%Kq?e&~af2Z' );
define( 'NONCE_KEY',        ',:~?{WO6F]y!zllN|[;e7++1|e]tty1e)~tt3IHKw0^d@/$6,Fr.sRS>8w9c2(FF' );
define( 'AUTH_SALT',        'rZ%p{A,:BCi%UeqR^NcX<_:UMHT1DaUS<w#xD;l[>#[->IeWy_KBma^,^s%b~6~$' );
define( 'SECURE_AUTH_SALT', 'trhU}`&ZIqe]nAWFgh+j)DN3k^[PY?CX3nY~[s$9Ok_Ily5=B 0vv@8{}9MwA%}A' );
define( 'LOGGED_IN_SALT',   'ry8Ll2$M`Jy/k$.!p]Wg&l8}o]Sl`EK37!|(Fw4kCZ$D6_b=QR{-A(V@_&O#v&Pe' );
define( 'NONCE_SALT',       'nXv0dtKG<^lZoPlm+*=uLdU]qps9aFGXpe&B|,)m/%%<#[*XcDQ<%m>JS9{| VOV' );

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
