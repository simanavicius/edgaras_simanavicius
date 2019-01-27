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
define('DB_NAME', 'coktai_1203es');

/** MySQL database username */
define('DB_USER', 'coktai_1203es');

/** MySQL database password */
define('DB_PASSWORD', 'TukstantinisKarkalyti');

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
define('AUTH_KEY',         '_^[E/(e(Lwmr;Cw!#@@I`Bw62e6:J,PHcIwEjqYN z=oDSG9pg?A^mV+5-aI%BE5');
define('SECURE_AUTH_KEY',  '9uuc|#q?lXvFAEG_([1t>Ro6GZJNF};XF:bYy*)yT|gbErPp x,K:vi=N%IeeuMI');
define('LOGGED_IN_KEY',    '0kni=UyZhB0aHsO8n$E+.C6f5La3/s7;758&S/jv{9z=l8/I}C6Vcpq,z5lWUi}~');
define('NONCE_KEY',        'wA{ROMcgdbl7uq93r lrr!B~rP[oUrSV0nq`Yw}nkVmb4Qfb5F*I%W7ULwYf%m@y');
define('AUTH_SALT',        '[>&t)7 `p/Oa@xpz@jyJ9=y6@gx>POv>0h8s0X-v%SL)fD*b8y7wtU3NOl:tfs!&');
define('SECURE_AUTH_SALT', 'h>?vU[CjP<dD={G|v}hRad9=q#Sph&:g~,g{>!6GKCpS!@?Pl-7A.4v(SmJBj.>O');
define('LOGGED_IN_SALT',   'MINj_Pw>mOBP9Bijsm `DL( [}A9n#qTeR0X3IIA)dtQiTH-y}V=;W/2?hCG8hwJ');
define('NONCE_SALT',       '_`/AmOLro74r-j/<_o_U>GZYEJ<|u]7xspxMp(u1}%kJ|^].&oG6&c_-4/?jq|Tc');

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
