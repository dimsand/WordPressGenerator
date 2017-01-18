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
define( 'DB_NAME', 'wp' );

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
define('AUTH_KEY',         '>_iMb%}:^<WGFlKsoBXS;WM!m+HBuwI:?quY4kr5!6%f--vj|[1GJxd^h)dKQ@&,');
define('SECURE_AUTH_KEY',  'A(<?qb1ur!w.+V:}SYi}*sjAP]okW~p(22,Y_J=C*.&*G&<9F9K*1m9t0rwI51Y2');
define('LOGGED_IN_KEY',    'CYDgO /wqltK{{UpG8.B|0Zh+<k$. ComWlrpRt94T8~rIr-O2K(*F0PL~{6H dV');
define('NONCE_KEY',        '^lBi+0-y3{K:99Za!x|S%sk]73{p$?fxxQ,fBU@ap*4%Mcz(-X?H#a-FiAszNrZj');
define('AUTH_SALT',        '_{p0/E@sc>7O)f-4R!N)0|=Ver.++bs{2Sfi!,L(P1;scu8(90)!80O7<TdR9XAO');
define('SECURE_AUTH_SALT', '|RluJ|16}vl?U$VKiH/;<AK9- b.r&mN+z|1}mt4Zm-VSv!OMWT`|OdbX/rRs!nQ');
define('LOGGED_IN_SALT',   'aV$|-Z|DlYvkJg:^Vv@`&I+k!Y+IP?-&DO|+G!|SZWVx,~}1WUN;u+!EF,1C9}6x');
define('NONCE_SALT',       'PEo+=sAcrft6VU(][0+J<ZY,_Q=!c2I??ez%RDq3gP^nZFHvSrQpY*QqTEOWuK=f');


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
