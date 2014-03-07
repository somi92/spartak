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
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'blogData2013');

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
define('AUTH_KEY',         '?)mk;)<X;3cPi60>{AtH>ALweU@S:)^d[*?F3|V4aB4`|va+<K#^){|` ,:.kf?-');
define('SECURE_AUTH_KEY',  '[J))SF}1?C~K%&r,s.?F|]O/ao/0p%S2KXb&f@[iMcoJ=L,hACXx`Pe sv&3YR>-');
define('LOGGED_IN_KEY',    'FRx)W-60jcsu+:q})dz;6G2&)-;bz$0|8ae+I-?,59&D2S]R&}G{KO8:G@-[ae/J');
define('NONCE_KEY',        'tnT$}^~3L$l;!=qT@xj, (/4(t*~t|*lgg>IA|@_o-!$[VKBE3hT2+i~^F+N@<HN');
define('AUTH_SALT',        'Ofn^B@s=tQx4:?gl.1dlF^RDY$`5Qi d|-(bAAsdtmsXm&L?CZ)Rn WI(SC?v$O#');
define('SECURE_AUTH_SALT', '|M];pYP:,jha<kQXC)l YD=Y2;JL|i|4zD[.;ubCf|W{}a?T:yKE Zw.;_(kZ{YQ');
define('LOGGED_IN_SALT',   'djpMi2jA}D<4~H*l^;ju@:$!LjdAa/2L+&}g74C:cu:jd/JTu%9K4xutlV-JaT_D');
define('NONCE_SALT',       'z-ZM^y#I[a-i&hfd8[,h3h,3@z*Mockee=SpCLKKj2cK@{>crp;L@O]gf=v!_rb1');

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
define('WPLANG', 'sr_RS');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');


