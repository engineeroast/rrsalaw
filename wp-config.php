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
define( 'DB_NAME', 'rrsalaw_db' );

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
define( 'AUTH_KEY',         'T3S7XD[+P%^EMSE/mmPY,b@;$6;g{89}vQF%)X8YzqDD.6t#7;%bm~UgbS4Xx!ul' );
define( 'SECURE_AUTH_KEY',  '#tNCd:],w-Ko|{kG|gpn5`n2A/coz7HUyD?ngHZ&u{y[<p`Y@JRnCDh%Q[G(2p:6' );
define( 'LOGGED_IN_KEY',    'rihH=+vMJrXBT.GZw]%IC<4:Is5U.9b=%dla3L-=SXj; 8#).OvY~fpK|=lPZ|$ ' );
define( 'NONCE_KEY',        'P)C !FRcyC.*E&}<9BKm6EKr)k^7?Av,kS70r+d(1Rkj@F3N=pLZ:g@]AUPagyd{' );
define( 'AUTH_SALT',        'Yv5ZLFe dj2qTkvM$?efofEli?`#3B6g8CKC^O^AGJIgn#GOAdHh&CwRD4~.m,P~' );
define( 'SECURE_AUTH_SALT', 'B?hA/bmk<9r3=57j+%+p%9UEhyAgO7-3wVaKJ9tFa/xXQ!#,U1qx.sfJiR+4jJ0u' );
define( 'LOGGED_IN_SALT',   '=~V,`?cJv*-!=.huh;?(9?[O~! F{wt.W#^i9NB&ArAi UK]^mk]KAG^7eQA%t)e' );
define( 'NONCE_SALT',       'ZA+<{ukw@mlN=d`njBdL_([(Z*JP[P>t)k)XWS3Kj2VB51zn3nPb|Q%[[DM7$/$Q' );

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
