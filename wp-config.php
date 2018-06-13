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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         '}F8p0U%$Uz$ahC)+RMs0c]TIU4T]0&F<_ 8qBCB!T#mCmG^4dteSqvgVg}zI8qEB');
define('SECURE_AUTH_KEY',  'dcGyw`0l(z`<Udtsmxx<!#`D&eUXkhRL0K.8+gOnP~^b`?b!:v2OqO5Hf:3y<fZs');
define('LOGGED_IN_KEY',    'B@<j2s~:CEYT=A}Qpn.&6R2*%.sSR>z1]&I8uK}9P?U{#v=o,Zf5@^yyE%=.|siO');
define('NONCE_KEY',        'Kd.}?Vb65 VZ(;dR5^-g58W:u:8,,i3u]}?$49;CG&Ehpt`.|0NW3}lQ30qg-5PR');
define('AUTH_SALT',        '*29d23:aiU/Ywt!xD`d|n+rBczZ]V`w<-z>]E;z!D._qR1!*4:,`aDkGv3zT.n}O');
define('SECURE_AUTH_SALT', '!s[7U%CpiPhjgcsRs~J:G0IO-]_6@:4ri>3Y %3==Csup!F*GH)^]uT?dupg^_Zd');
define('LOGGED_IN_SALT',   'bU$9hro@hn@Q~*.0TfTCh=m)km_fH;YXro@OSVM4YX9c_<,T H@aqx!+15N^!JPj');
define('NONCE_SALT',       'g!>kIqL@Fe)9<^1?Z@C{Et{~=bapw>15/f wRo4jw>O]aZ9OJ2Qi$8fRrc,2ekej');

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
