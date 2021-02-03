<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'rrsala_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Ie>3*p{_l_W^<b:> $>}22g$4kmwznO2dn31QNhI`z/,spEVw;@M`bwnP8LUWL>T' );
define( 'SECURE_AUTH_KEY',  '45+2=T{UvTjD .kY=eyj%{jU>[TC53po$WIyZ;JKnV%%2FvG`i(DPv3hu0((%1_v' );
define( 'LOGGED_IN_KEY',    'djyPc)VV Cyn7B-,VYUMQ5S+;KxlJSKD2&l)]p^9rkOfp#A`)65I!ok/Wg `m[r[' );
define( 'NONCE_KEY',        '?CHQpO!ZmA+!2[QM2~1oo>$3d5SoW[m+U{N$vlX<|X|5M66&$q<0+OUbKo7mbayT' );
define( 'AUTH_SALT',        '@Y-~;+Bnl_V]<XBOsXpf1c5.#eTWp$a<Bu! xBir>0pt`J1F!D9KPHbYko%oBg|E' );
define( 'SECURE_AUTH_SALT', ';|]ZQ!/ID,}C>P)u)mqyeT0PP>Mnf:eT|{kO,<PL~#e1Rvu=`}Y0Qh9zG5(>tiO=' );
define( 'LOGGED_IN_SALT',   'C8xi*InyZJ`2jkx&3}Ay&wM0]/m6a|y!~@U>9X@DJfrOyfLB.WM`0`-*mMXXbn3V' );
define( 'NONCE_SALT',       '<}[~#EL}Gjw*y- mg_MQV.yTS/S7%J`U~T!.I.LT{0s[]?U2Pfz#K/mk2v(4_,xo' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
