<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wp');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'd9xC-.,&%:G2Q7mV}jFRm/q.SWRie?.j$}{y6Jn}V@ +|gm7q4yaSv]1+N_e/MCN');
define('SECURE_AUTH_KEY',  'Dr`UChq}V6)imb>^hokACy2pz^d033rEQU!M[r[gD&zl-b]|pgv4(E4LzL`jbT.G');
define('LOGGED_IN_KEY',    'XlZ11-1L7/r$p0S+-aZ9 leCDaw-3iG+ux_(<QD/Eu:K8}{]odiWjh+?Db>N~$X$');
define('NONCE_KEY',        'EcW^TBjs0s-V=#]E;TR-i~*~Yuk0xp=NZ=2[jjZTYA_@>-}f!,p1<;dY%Gwm8[}%');
define('AUTH_SALT',        'OrG<bJd{+X,%,w-P2C#(?_qeY%Kh$Z1&$=~@(!Yrt]xWh@&#gi2@syK,=q5B R@d');
define('SECURE_AUTH_SALT', '.00n/Xk3+3(6H*0vONY@U]?(&A@tF(Y3n(w)1{-ZUg#&oW a p_n8~CMpklecqtD');
define('LOGGED_IN_SALT',   '3p4e7i(FVM6i& l]Rb`!Y~r[DieL&:@8XR]`lf*_)qI69>I51Fxz.JhUVp>I&=}M');
define('NONCE_SALT',       ' MmgcBAjIO(5Cwg<DQ_Q(g@j@v_uVp?^;)QG|eE0FUxR7e<7~;@TC4W5m9+emz|M');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
//define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
