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
define('DB_NAME', 'wordpress_skillcrush');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '3Pab?V9N@;jXHT|M44b(.$YomgZ%JsxfM+H;7_z4nJ=cM4#P~wJ9}o~]$ob*K8!a');
define('SECURE_AUTH_KEY',  '[&q~#w$O$Q62hFV``4rD46=ZY7RcPZgDJFV8@v(4gB!<W-OP,]L0iZdd+!fyNlj`');
define('LOGGED_IN_KEY',    '; .FZ?ak:sqd?N-tP;< e}Vr;5^Z]zsDbkjTKgQv~012y+e1@C3%[5r?iw>2>]5K');
define('NONCE_KEY',        'WM)W*X],8*p9W3_@ EP+5B1gLf(~ISo2_d;Qp1hlm3hhWo=nI<]&mN}DcP7&Z*R,');
define('AUTH_SALT',        '|<U}*byS*jT`Nlt=#mJq9&T~Qk4;fkkBuOwy ,4D^bE<3tp|w.xEB#?PkMA4C`sw');
define('SECURE_AUTH_SALT', 'zwF&i`QDl-X#Zd<X}(q3U4)D@c4QVgJUvI-|<)q*iT?|F5Db8*4S3Br4qwQPJ#<d');
define('LOGGED_IN_SALT',   '^`$R5`D9I4,?ph3Ius@FWy)fRmXz]Mu4Wc.2]8x6HL8LAWBXrJXh&5(E?.dRpgga');
define('NONCE_SALT',       ' ;-QNX<r2Ge-U|r7+j;oiI8GA5U*15H[w:pI F5I_UNr1Dl0c5A!@:) DYJT4Q1y');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
