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
define( 'DB_NAME', 'dimitri' );

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
define('AUTH_KEY',         '|-zMRLf)<@4BudrJ6e(;%O/nzRANw-%?|#Nk&B+6b?hlB;k{gB0<$t?^aK)b?yi]');
define('SECURE_AUTH_KEY',  'G;(S/PGlzcAX<-4IBMuVQ-MGg,cZDN)-we#`J(}&6LZdcX=!T)&TYe:m,*N*tO:[');
define('LOGGED_IN_KEY',    'H8Xx=4O2to5/1#-s2C-h<U|UCg>M]dr!uiK^HS[hiyG{&b++KU_T-~}TPM!=Y[;8');
define('NONCE_KEY',        '7Z_R6x{:+1)ud>J+m6ejB-/$0ttG/.f:n:kNe,%N*}[wQ0+7#1sb1K4AiXz(cP[@');
define('AUTH_SALT',        '1A6kb5H +xuciV^UmXB(m+2ha>)B,PX<W8J+P!%E`N[t-*53%XR7&:>z}tA6<%}s');
define('SECURE_AUTH_SALT', 'p+$okotYK?y+at.qsI%rdV:<UV?No1=`3J|A.1j8}FDqf,+]2_BT4F4sQ)=9 {-N');
define('LOGGED_IN_SALT',   '(YAwIz{HUSU/[#|;t`|/mQ8/F.<#76&0ro,m87Ncp<);zwnj/J@*z%MhLL49UK&4');
define('NONCE_SALT',       '{mp6<8/Y08}ORO4to3`(Fe1R6=76ULJe11P g+x@Cd;mE-&~VP.Q:1gGW.9M+ea5');


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
