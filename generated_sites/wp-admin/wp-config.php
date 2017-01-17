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
define( 'DB_NAME', 'wp-plugin' );

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
define('AUTH_KEY',         '/DoW Gh``|+GM.<B$.2{W:TkvGyt]LiHU,+87kDec0L*Muz&aE:K*v)Dtx-nAHqB');
define('SECURE_AUTH_KEY',  'HKnPf~@y;?L^f2@>xMaz0bHO(&BU}HriX~tMLzMN~XBWavL^>XT/d3R9|_>zD&1T');
define('LOGGED_IN_KEY',    'Bl.m-F0GONONxc>8.Z.UcMw$$Qf]6pnQ7G(fr?IxuL-GYwlt9bH!Wu`@g$2@yKng');
define('NONCE_KEY',        '[K7%z.9I7-A4-UD+-6_+b8<h,Fpg6|TSdm[,kez}q=D$G9]{8D+NMsOHlIEm}(iU');
define('AUTH_SALT',        '5^b+XK,j8SnI,e-s|+~U#?/DhKXG-Yt+-4nj=x-;Z:QSa,O(h-L+b|SHIGeJb-n-');
define('SECURE_AUTH_SALT', '`F2.,erL-9W(sAbMtP_LM7w:7I-*:S%iG-MP/-wUNE?|m`QKKvVm~^J||a}-cm%G');
define('LOGGED_IN_SALT',   'UqL!EzC[J/5}xe&^ym7Nz||[pM.!w5>d|+BN>rNyYl!$Jr0$m=7>IglK[4cHJXU/');
define('NONCE_SALT',       '9+1)H+O+%n4woo?>g<$cKbs<vqy+~w<*+O~4M$38)pw]d)xHvpD](s FvM[jtIsz');


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
