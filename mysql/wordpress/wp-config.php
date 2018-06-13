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
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'bmtisawesome');

/** MySQL hostname */
define('DB_HOST', 'bmtclub.vergil.u.washington.edu:34567');

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
define('AUTH_KEY',         'Rtjw_liXGzkStZ{!?]M<5!sC$]gVKY>eAntNR{4o/,`?d~FxM_6~}.CigimFi3`q');
define('SECURE_AUTH_KEY',  'lfSA34*P)28*LJaTSW8lHsP@BIYw=2skPQ{^BDi^o 07UZQjDD%eFcUtUN KN;XK');
define('LOGGED_IN_KEY',    'kaQwTdC4,ED4y2l*xAL_!jf6nfmf;<1}]>`=BC4(pp:,x$lW<ni:WC1  KV7d${<');
define('NONCE_KEY',        '?!~.z^Lqa/p:!57@1M,ha[b9M?yUSg6~ki7<&CD+ZVS($7/iiQ?#X8n8@vP_fv|Y');
define('AUTH_SALT',        'WIoG;fSK|sdE}dM=sqo]tj&3l@0JsQf~Jt884uEmCREiqFYg$Wl.4-D<^S&A=+D8');
define('SECURE_AUTH_SALT', '9AM~+zy(c#V%G_!:[8a9r{&TMkCyd_kG9!AJ/B!4`MD@0[/Df=D~SY|JKoA.uRee');
define('LOGGED_IN_SALT',   'nhdam`sPhqo^1{A=cH,Y=e8VAyQHy{lvm$ryPl:7()D=T73`1=nHm]#e3/An0ni2');
define('NONCE_SALT',       'I?CIRjs- d1_DTEtZte[spi_NJs/}lTG`gBhPq>tRUkwXiaamqqD8Tq#(pbO3V(l');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpmain_';

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
