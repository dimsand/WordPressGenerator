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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp2' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'H_y5Bq?1,|FobPb=mtCc|tc[p}:k9kB=*O?gaN5Wd5s4YU;j]d :4]5cD(5NDHCO');
define('SECURE_AUTH_KEY',  ' NW&JTrV-]yzSj,WGR|+O^RC1uTO9||(3yI_xS)`a$sK2GY-[mef,|{{[tGBl^PL');
define('LOGGED_IN_KEY',    'uwA;R7n*?KD**WkztvM;g(FLgYZj-S~+Y^jQA@u{eQ8|x9R:i?fH+_x`Q[Xs/%&Z');
define('NONCE_KEY',        'hL5]ZY0p{J7A:x^qpMaMAP{XvH5]2HRr~),ILBTU?~&S|Gw a;-4TB}B~97N{R04');
define('AUTH_SALT',        'xYNlhC-&+WmZ!N:0v:!}+9LQP(:ggi```UEEwQ~nL!9PD.=^qLrP* |tWmjWx05&');
define('SECURE_AUTH_SALT', '@NX~{~4;iI=+-uz1=TPRafM_f++||b|oa_N8d)AL>{pzWY/,(c|s;?$;p!J7u^$0');
define('LOGGED_IN_SALT',   'dZRiYWxH~1EQ)&;.~? V:R!K6AUdb|0IAsO9i~jD*L{SS?z{8xWRgaIy;q=o(g!l');
define('NONCE_SALT',       '5a6NM0uF&*,_-hdPmLg~&`g+?FT@az4%,C3D[fU|vN(?lMq&i^<j+5/>Q=eI-]t%');


/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
