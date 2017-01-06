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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'computoolsglobal_blog');

/** MySQL database username */
define('DB_USER', 'root'); //computoolsglobal

/** MySQL database password */
define('DB_PASSWORD', ''); //hZ#U-F}GetBq

/** MySQL hostname */
define('DB_HOST', '192.168.0.253');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '/nS?IIQaa<vbr|#1eppKY-dg{D-=~YOG1v^R~$-zX|U*yZ,M$n9*Oci+qBt=:uP!');
define('SECURE_AUTH_KEY',  'S,nTrO~+N$_]N{i8?>&1~-+O>])y3#vys760oe=vPm x/aA+ukN23`=W.alMl64>');
define('LOGGED_IN_KEY',    '@Ez$A,7Or}$?j$f6s_el(L-<MvJ%/Z? {-hR1rS(dBI_Ot?tT)g!*Y?R2@n/>RbR');
define('NONCE_KEY',        '8e&|TV,$x)y@k#bAA/zz7G_X_ikW|fXq{H[:SqZJo&+z&Gt.Q7,yui~1: u2q--+');
define('AUTH_SALT',        '2OcOe&D=$v}a`k}}~y8D9Y3(;Pa&s7xWal{?Yf8aU`,&`bv41F/DR+7>9UMJMEEa');
define('SECURE_AUTH_SALT', '0J0-?WJ!--^2#,9kj6P;eP05KSM[io3?kWJ_|&`jCVZ(4~kw|,6}<~pE?;f4P-|r');
define('LOGGED_IN_SALT',   '+.v/T;(Eg?_/7:d:7L+V:={6Eh+Qn#? ?lY0<&_@(DH4##Pc>M#G$$+Hn2=NscRd');
define('NONCE_SALT',       ';~m%@<gxF!+W1Csp.g+{6s`V2C{+Pz7}3nS3VA7P%A:@oet{zd(lC9<aWDM4A*S+');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_blog_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);
define('WP_SITEURL','http://compy/blog/');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
