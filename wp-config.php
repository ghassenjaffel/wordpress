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
define('DB_NAME', 'ghaston');

/** MySQL database username */
define('DB_USER', 'ghastonuser');

/** MySQL database password */
define('DB_PASSWORD', '123456');

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
define('AUTH_KEY',         'kJi0-8iLs=IFzDInbFfoPj_k}`bMF{QWXYWG,xh@p-o*Ip$MV^E2> 7*3ok-oq#v');
define('SECURE_AUTH_KEY',  '`|~C.k?sWO{Nn|iLzp+s MU4C)~|g.mBfX-+Xn~<1#[O$+{A]vr++L#@Vhu,+nrC');
define('LOGGED_IN_KEY',    '|i]2s_H}3q.g@+byer2DR)gu/{MkoF1QN@@7FpF=f{#1P:};kqld+30-|^fgJz^-');
define('NONCE_KEY',        '}L:T:<Zb+LfScCaR%8II+vez?`9k|yS?q0Zko<7UCFO| |9&F%2.]oAXUbc.EB%3');
define('AUTH_SALT',        'h_<HO+Kp8AFjP#<V6+XZO No/K77k`Ft&+Bj*5+FFVl>$L-sQp-rCcO_K0T--57*');
define('SECURE_AUTH_SALT', 'Chtr%q$Ga;;/GhacEd`-G!8`=XE1PVT3ofEM9T8oY,@2+>$=|&SjAS%joxr-|e51');
define('LOGGED_IN_SALT',   'unGIOyi.?s>;$pzwXpnq0G_UY/)O8&k(1u:[oTTS*NV1,^@,4yRJ=h_QP{HGsJ`b');
define('NONCE_SALT',       'w[rc0T(W;&.e^Zv*%)=IbNr5wfpJFB:8Kj=#@&|Ju{h{}+ZUzYa>I-`JBcr>wD*`');
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
