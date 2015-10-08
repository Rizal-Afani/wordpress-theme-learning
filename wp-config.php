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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'i_Cxs1ZR.>]W*(;O-QaJt$1.Q|@&fN`r+a/4{5|g.~Y (fsMv0[?~.OaK>MCh)O]');
define('SECURE_AUTH_KEY',  '4rdo1wq*W#&W~LU$0J{^=+]f182J]&}y8PULQ6VHghvTm)Oa _d!fN>3oy&OuJ:4');
define('LOGGED_IN_KEY',    '%,2Jr37<;^zF^hMbnho!C2(l )V+]B6%44GNkA(5o[bJnYV@db,1V[xD5f5$bzK>');
define('NONCE_KEY',        '*[eg;[eEOE]g_UgE?Dkt{5qP-d%[f|bw-o:VM5/D<L1i!X:3mh>jleVbN):G~mzI');
define('AUTH_SALT',        's[[pr9^BhaYUbMI}_Wz?#X:gN?Y/O_u(=<MJ+dC+.JnX,u,q/1$v@Ll8w(^uCF/{');
define('SECURE_AUTH_SALT', 'y.eo3ZjGRTI_T fp$}D,& li=qX>0fatS=fX^QH0(]fpNXEcNaU.K}6L,?j,:&q`');
define('LOGGED_IN_SALT',   'U4UD9$rUYj1Fgl/7A^RWMK8vH}*9WuC}xt}N}8V>2uMk WOhD:#RAws38UAf/MQ|');
define('NONCE_SALT',       '9IhU7:mx`SZ cC~$raJ>UOZ75_h}QBa|L@JZ$SeY,@$kV6;mg@[x!ByG|Yva!hry');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
