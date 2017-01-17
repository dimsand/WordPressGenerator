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
define( 'DB_NAME', 'wpTEST' );

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
define('AUTH_KEY',         'fAmU3z 9f-xkb8waYpTJe-x^p=R+3aDT,SGB[dvqGu@ g.@eb5IMq@Eny{PE~9Qs');
define('SECURE_AUTH_KEY',  'hl+Ca?=A!q+r37:3>zP/-BdoWpJB>)XeZJM(S-<Hm=:>- frQY<+@(E%T6o5M@)Q');
define('LOGGED_IN_KEY',    '%R>qud]Ys>;N&HS6|B;;$U6o]j^>uvjan#BP5v+u&yQ~MVi|zPT|d+. q[h|q40l');
define('NONCE_KEY',        'fR^1|3RL!@z^e?iL8Y=L@7!RUn*1wAm;vy]XqXeeLLQ(GI(1wE+2`Dg siEs--;^');
define('AUTH_SALT',        '|G*z8/sp5fTu% }*v& %>#=o?)]Dme-_SPMExBJ]v:a&jngXr1t*C~ZdkNFm}PF*');
define('SECURE_AUTH_SALT', ':82`|v)5,*NO|w.f4`,5F@4SoX+/4`D$*!,.%U+9pL<Qh;Tvl:f!7-j,r``3uTJS');
define('LOGGED_IN_SALT',   'Jg++qsi><qT]#`PXNb}|>>k;tt|1.acm|e,%N0qtP;a0rP0kYOH+8SecGMl-IBM]');
define('NONCE_SALT',       'M(l2YU||6]<mN:~%/rd2/v`Ui!(7zVfm(|5~j>9^|<zZCV}mZxKp8[kDn#q;.W55');


/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpi_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
