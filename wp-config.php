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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'little-store' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          'U}RbZE*_] M;.%HR2HVtFty<uR^Rg-8z0V|-@8wUVZI(k}`yZK5JazK%3f1fcF[,' );
define( 'SECURE_AUTH_KEY',   '^Y*)ahZXyO;WAM-4Yp]Umq?K1!ebhf]kII!.7.(4!@$.0Oq7k`K*pwQZbUbh(+kU' );
define( 'LOGGED_IN_KEY',     'sC&YT;iq_5UOr*sp$[e*&>v`O<;}@`U*C|O.`U/z;!zS`_gM(s8JTpzKe, 7wf$!' );
define( 'NONCE_KEY',         'EuH/NkECpYWSa{|d^$_@3F7RY^2C>%d$^QJH:ze<X# aR<TRP5l8SG;^TaEt/XK&' );
define( 'AUTH_SALT',         'w!,~UChT(>9fh66YWt0eQYK>8oaC524V4|D(y4M_JWb4qBvwP1D|*|`.!z]m/6F?' );
define( 'SECURE_AUTH_SALT',  'BIyn]7E{Vii)B]bP9T*9kG~$nv&0uPiM7b5Y.9t$,1RLIaoM(mXexLV4cSf_HbS3' );
define( 'LOGGED_IN_SALT',    't*m,Oy9/GouH^W!3z #HX9F:Y@7RXOXY+,43:wZYrfRdO} l...2B9,CCSMP:8mm' );
define( 'NONCE_SALT',        '-RcOVj5-U2!ajydrPtu}7`edo{[=Vo>E$4>| 6gub-kvMRiW,+F`rSzJ&@{`Y}bC' );
define( 'WP_CACHE_KEY_SALT', 'ani;aohIL6Dk#^N-->!,v,eL7h%%/3r@RQgs5XwO[;jLEP{@U[!4/.L?m;c;L,L1' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'stor_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', true );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
