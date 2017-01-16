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
define( 'DB_NAME', 'wpcli10' );

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
define('AUTH_KEY',         '87o|W2VqmrmR#+Y|RIK.3<RO/O?ShQ~O;^7>,{r=/{1$N0m:&Ea:(lnsx7yRA[(@');
define('SECURE_AUTH_KEY',  'UgBViCTUU0zK~EE^oDo~?IRG+,^rG<9;$7W^Jau)O=(ez%@tX[3W3*2r- Oh%+k~');
define('LOGGED_IN_KEY',    'XbfVT-lGEqLEJHXb[6BU-|c7M>-vXe[)<3KMVMg1}n~{(!4CH&g|2FKaq(f/^M,|');
define('NONCE_KEY',        '. &rHi<H>)I)J<s-6qE|b,de-:b(!Z+=r6bC6ImoY:lM:SJu8xCugYVCCVX)2GT#');
define('AUTH_SALT',        '+u]],|_T&0XxTiNqs??Rt/O+9.cJ !sYuPpt.NSl+J<(!~@TYSzcA;E+)E>?_G@}');
define('SECURE_AUTH_SALT', '];|@OLn;,xmpIfF]}X9.1|<cK0?~B[:lY|Gg9^Fj`f|@d*c[e!}$vsE@0zCXkB4S');
define('LOGGED_IN_SALT',   'CN6PYagON|Nu6b?_n}D.6~g:#AgUYvc8Kt217Cmr|-_|FJdn53%V|egNiTM-H+T+');
define('NONCE_SALT',       '5:g+_Ej;|D,-nVL#ZYapCn{U{zmHIcT`xS0u!mVz9:SZianXI/-%* -=K<*dRF@b');


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
