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
define('DB_NAME', 'psychics');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'qwerty');

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
define('AUTH_KEY',         'u<a W:<x&JQd%e|dl#E[d@Z/l7TOcd[D.}(Z)EOBwTGQ#iVm}S:*=3Js=`tgmvEr');
define('SECURE_AUTH_KEY',  'WaxB{i2.t0Uv^@F1GxqHLYZ!>n9r0Nr|j@x}<ZfLZ,p/<m3-vNqj6*)#]-,]O`3o');
define('LOGGED_IN_KEY',    '{Z(LpB%e4UoY;pF<Z P^jcO_a cY2V(D5ZRT~S*;LrU((C]z[]qt@XC-h7<7Xp:b');
define('NONCE_KEY',        ')4s;(*6^[VAXx9I6JFSe1qR_jK<#k?i0E| ttqmlDab:<^<Po*>^9t9Wvz$`Ok88');
define('AUTH_SALT',        'dLE;vwR-|,u^MH&#1:9?VxV!wR2qFPYm*bC.U7E_4M.o,O%?`8Ci|]B:%}aCt;2K');
define('SECURE_AUTH_SALT', 'C Td^w+e#=YHYp>@_@zb1@s4s`KJ#0o,;B$1vsC6wPA34[GRR0NT|Gi.S$iNOX04');
define('LOGGED_IN_SALT',   'wF=[gRs>;0oA2%,fW<=3~KLFCyu#?v0s?3i$xIi7A<%S^iWfz(Nu$76DlW/mfR+d');
define('NONCE_SALT',       'a_Kfqt?Q,d WxRJvMzOQvok-MYG.e46!r6 e}igi&.+hE4jX jHsd04^^b{`,+Xd');

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

