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
define('DB_NAME', 'dqqlrnfm_sh');

/** MySQL database username */
define('DB_USER', 'dqqlrnfm_sh');

/** MySQL database password */
define('DB_PASSWORD', '7o1l4v``');

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
define('AUTH_KEY',         'HgsTJrFHF9{ue&ccgIx$K0yg15,ynq7*5~t #B!BVv8-nT[fmma2<<8XaWiTHIE+');
define('SECURE_AUTH_KEY',  ' wPPO)mbG<u%V=Dqepicgq.[ob]8y{wz1^rX.mB8smcq[v5RB$4>=6BSf#aOn[=p');
define('LOGGED_IN_KEY',    'J@^3(}/B;!8/bd|,^W1rBpNF0OIlbIU0iEXRxMg)}5L]^Ktqg-Gd~/H]O Q=Lusn');
define('NONCE_KEY',        '/!AB|Ds;?9[YGj2H+REz+A .|WO_$PV:MmtB7U:6?gF/hok+|{KiZHO6G+oxc;f/');
define('AUTH_SALT',        '2WDckQHbu_EU &oRh5)>{E]+~R%*9E@ekdre+ENpH?|EQFn[LC#M9t8H*VU4+M%K');
define('SECURE_AUTH_SALT', ' 8v,5e,?-5Z=nl9D1jI9*!`85,%I84-UlK)>*}dt^0r4i/0bx[|TI1)04lsu|o&j');
define('LOGGED_IN_SALT',   'vQ8Alv*mKdhV=XypF@ah<<x,xhDE7rImq`|%/bsP;x;KI^^7vfSXp9c}yb@t[u|-');
define('NONCE_SALT',       'nsy><%Ve_Jebb{,XXN8(O_TgFn5{7YnnPG8JK_&Q^N.K>oog8e _vu@[/BeEO2&u');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_soihoang';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
