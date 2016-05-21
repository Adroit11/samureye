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
define('DB_NAME', 'samureye');

/** MySQL database username */
define('DB_USER', 'gabebehave');

/** MySQL database password */
define('DB_PASSWORD', 'skittles17');

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
define('AUTH_KEY',         '8vl9f I=e1&K>X[Eg?#hN->Q@S]kgb0+?*W.v>}>i!42?dA3-Q{k79s@u)>O5u)`');
define('SECURE_AUTH_KEY',  '@},{9[@&:nZlQc;65G+5Q.}>pr#UJ@]^)9H]AJL+NF[2,Eh>!rK&H{[k-3N-JX-}');
define('LOGGED_IN_KEY',    '[DaDm+c5qtH >MDY-BV|{i>^d=q8ZFHc*A@f9jG+3!m6L0]9`+I3Yec-y;)tq[6]');
define('NONCE_KEY',        'OSZ]J!fE@2XEhuf-`B..+~fuvEQkfM-ZM*i~/6c8Yc8xDUKu?kcUu+%>d-+y`*a=');
define('AUTH_SALT',        'HD[Q{/eQ#X&]w_3-A0TTF=~[z;!OI52a}`l[5Ii~Wjd5q1[A,y+Y~+b!qnSMbt.u');
define('SECURE_AUTH_SALT', 'rLd:+PNK6*B=9E)[t<R%A<Fw p:kPYtv?1P.&|SD^4g!wxd+CnZyq*LSN*+2z|- ');
define('LOGGED_IN_SALT',   's,KWLv)P|Z_:lW{QW6OLPD~M Ner8B(a:.alLUed53H{2K^H-3&5|:S{vt2C|d1w');
define('NONCE_SALT',       '<pt-<Jd/+8$b`,`kxVMQE;s/U4|9}@uN.JR?}$Q_;5@U<ntC|Ch`U*7g){B{]>^]');

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
