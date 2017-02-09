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
define('DB_NAME', 'april');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'password');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         '&p[c%AXz7E|2m9rYqVD8cAl<Et:E*#POA>uYN$)F[rX6l/23crE4b[xzC_ !_=1[');
define('SECURE_AUTH_KEY',  'Mzdv&rBXJw* nrT)aleu*ZE0QGY0h#<a:r8Kg(IKaIuKSK8P6wb:AB=oib4;/(Qy');
define('LOGGED_IN_KEY',    '^(<n `Puj9K:7XM}W6upnL9=ok$JhJ~t^c$<:}mmM9e!e<@I=gt3m=`R0S@Z>0+q');
define('NONCE_KEY',        'o:ZmO(iU>x+8U!?0-I*PYmWkfR2cxonxs ^Wes% 13yy 2W.LN1qZVbzlj,&<t=S');
define('AUTH_SALT',        'pY@&3=ZuMpBJx*W9]PxF ?0I*?23JcLn|Z8uvrEgceSro y_(.me`}{`*7mdp5 2');
define('SECURE_AUTH_SALT', '7-{52ZXC4B3)E AA&$BwsC4t7LN]#uI7DPQ1>Wrxw6#trs7.8 cbG{Uu97.kl<Wc');
define('LOGGED_IN_SALT',   '4f,8=oF}/&4{W/5.[@-Bso<`g|u;/0@o5!n:8#k@4)W_}%%M>r-,aN%IUZG[AquX');
define('NONCE_SALT',       'X$[/qR4:>oHl5t^u,JzA)ds=/u@0`kGBLD1NU#iDcW|kKSYc(r,$O?@Sx[06N7^s');

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

