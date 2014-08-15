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
 
// Include local configuration
if (file_exists(dirname(__FILE__) . '/local-config.php')) {
	include(dirname(__FILE__) . '/local-config.php');
}

// Global DB config
if (!defined('DB_NAME')) {
	define('DB_NAME', 'shakes');
}
if (!defined('DB_USER')) {
	define('DB_USER', 'root');
}
if (!defined('DB_PASSWORD')) {
	define('DB_PASSWORD', 'root');
}
if (!defined('DB_HOST')) {
	define('DB_HOST', 'localhost');
}

/** Database Charset to use in creating database tables. */
if (!defined('DB_CHARSET')) {
	define('DB_CHARSET', 'utf8');
}

/** The Database Collate type. Don't change this if in doubt. */
if (!defined('DB_COLLATE')) {
	define('DB_COLLATE', '');
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '|PAA}y#T>cQOXy$(sH).q7|>,)k6~SA.[)jW$-#@@BY.a$)3sj{asdp?=}> J:% ');
define('SECURE_AUTH_KEY',  'b&)/^D8=;[+eD5w:|*YWFI9L8hiW+=spE;VgWD6Q2Yr}^:c!3fy5de85N9m/,j15');
define('LOGGED_IN_KEY',    'L>vX?D }lSplm:9Co@K7l:9^ a]Je>0!%xH~)8-ZRU|w[H~qdYc+rl@TMInMS%SS');
define('NONCE_KEY',        'ci;H J,y:d9K0&c#63`^MzGY6>1lu1+,t1+o1uTWiVevL/p+<x6a2oT@9OA]uWk)');
define('AUTH_SALT',        '3+VKW|#]Zcf(>tx;97_XIq1wMeTK35[=nox@3z+d1Qjx-<2j;+nw:&v<?)fMXZju');
define('SECURE_AUTH_SALT', '+gRpA)Jf/9#U/inSJ}$9%s*@CWb>g?ESLjHWL&^S1c{6;]lQqO5<N/T7Q6i|1,|[');
define('LOGGED_IN_SALT',   '0VtgBCV(Hk2>@6pw7fg-2y8N`|H.7XfNQmk,0yjTF:Vq[>Dt=&Cw(:^ZQ4<pX_?}');
define('NONCE_SALT',       '])!28aNpJEV6d)Oo%TDSY!f:G>60wNDx-i|VU;ZD=kO^mY[<x7P-vNlu,4X|W]FN');

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
if (!defined('WP_DEBUG')) {
	define('WP_DEBUG', false);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
