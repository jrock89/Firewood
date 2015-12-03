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
define('DB_NAME', 'Firewood');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
 define('AUTH_KEY',         ';Gw1`^!9T3W2|8+d]xhdq6#~/k6b2#`0H~-pBX+D+ `odH]6&N<2TnqL;8SqNg<+');
 define('SECURE_AUTH_KEY',  '+/&C0{0),%6 (#:kwE2d?y[=WzMM--ctickcW++Z+)e8WV`_4^Wv/wT=3E|,_L3<');
 define('LOGGED_IN_KEY',    '8Z|{92(1lyK|X8kj,[eQsV^YL~:FMT[KYeM0j=PCc]-~n-O PEr+y-[:t#!.]4@V');
 define('NONCE_KEY',        '(SVlr_!?8_6lNSL+y-0c65+%<UWoH{2p(kn,s(*KiJ7|ZqP0[~+AHAI&4#}#azo-');
 define('AUTH_SALT',        '9DZkjedcPDqF+)H^%fCwNU?G;3,L1fRo~3WtC4h.Ip&eX04O[TGAHaGaRf)qGR7#');
 define('SECURE_AUTH_SALT', 'qt_{9a>(kmN>O(nIR{8mpN=3m~|z=|/t1,LB+/59-FV@K<74UM%aNgMWI5k.-s@H');
 define('LOGGED_IN_SALT',   'z+-]rVrlBl|Q{TVMM{Nf/,Pe+)gJpEZ+ I7}KX&8>BdQ-av<]ifr-rkCRs&au2W7');
 define('NONCE_SALT',       '^QF<wbLVeY,3$wKT>~C}ZJ<%IAuy%x]NEd89R31[x|YC~ hBw+DX<v`;-T09Hq*t');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'firewood_db_';

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
