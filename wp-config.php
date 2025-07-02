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
define( 'DB_NAME', 'local' );

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
define( 'AUTH_KEY',          '.iT#H((_-=Pz+SO}VeN$N5EPl:{T7D(^wJ`U9c{S1,jCE)hj6VRw-5@/LTDoiePS' );
define( 'SECURE_AUTH_KEY',   '5|9XE]d-BHKT2zGj*~+)!rn/.aTu>KJ%hb/f<$?lX_E[[n,{6d-zTEP7Y$Ni=tj3' );
define( 'LOGGED_IN_KEY',     'DZw<6}Bc%b^=X;Yd3S>X7@`W@f#I  {5&+K1#YFW`EF;~@wAjm$,Vrr@QNF-2R=t' );
define( 'NONCE_KEY',         'io_zmt=qS}KDr27/w8QH$kY)d7zL Z|?k# Ge_?.pQ<CdDpfW(P&_|>t;.lilgFY' );
define( 'AUTH_SALT',         'Ir@&HQx68A8k,iTAI/?o3mt1mH%? %&mhY{h/+Zvp  YFcW$el+%M;1ZGi(L!o<4' );
define( 'SECURE_AUTH_SALT',  '9Fd5?^q2ou,1)X>SQ H{aaeqdQsH+Bk<+A3h|nH{%0w g03xS6o,N{C3NkiCg8R3' );
define( 'LOGGED_IN_SALT',    'c5k=>zulk$8rv/2|0Hl-Je@,4o3<oAa$@;9!g%d6jT>XU>Kk9Oc5u,j#pmtRTQvz' );
define( 'NONCE_SALT',        '0<Yrk%%jD_oo[-;0u6}R%9Z;a(s7A.QQ%{Q5E!~tVwc5Y<[1`ZC!IbCy@`$3cu?8' );
define( 'WP_CACHE_KEY_SALT', '}O>TA3DZ%!@=(jL!}gvKl~fEs>vTfi5|I@T/i+p5e5<(0MH@Ljleor=!(KsdW7<`' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


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
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
