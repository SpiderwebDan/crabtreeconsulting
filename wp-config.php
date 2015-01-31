<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'spiderweb_crabtree');

/** MySQL database username */
define('DB_USER', 'general');

/** MySQL database password */
define('DB_PASSWORD', 'general');

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
define('AUTH_KEY',         'C|MW36+}<YileP0TcEX c]cToU[JURvef#.<Wm]N|k2Xiy#6D5rwR@7khr<%|<W7');
define('SECURE_AUTH_KEY',  '{qP|i8Rjk%ff4Gy-]W8_D*1h2|uG;S:PJTM[-^5qJ-e3J9yoD@rT!J#WxN~3b[{+');
define('LOGGED_IN_KEY',    'c7t6-]n O-Dq4F;~+3*Ee2Kg+HBov/c ~oC5G{tjd1%L^JCx:<x/cb^4*3]|i<O,');
define('NONCE_KEY',        'D,#2W]SY3HfiI=F}TXxSyv^s-m++]Y>R.l?{ASpc/*7&R3;vZE{/ECIU,=9:=_$=');
define('AUTH_SALT',        'F$Pt~cjP!V*4;6->&C)m<Kwem7VsG8Qoz45,my/gZ!r!}^.(T}*+;>%4z-L:+aWL');
define('SECURE_AUTH_SALT', '1Y-esE+0bx+5WG%8UbFuR@^<:imEOAE5y-CNWOfv6kwT7`1$2EGu(B~#?V{^: Mi');
define('LOGGED_IN_SALT',   '|b%]#ZHX_yK-eLyu>CM.ef kQ5^6-Zuaz;A[7E(}g=tM:c)]`+kVF%.r3GI?H%:O');
define('NONCE_SALT',       '@Nf2,L}W=8xQI*}dfaMLA+ADBC:36tLw^|}zl}xF5/A+Y3xcGx(7E+U-lCT}4&pY');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'sw_';

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
