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
define('DB_NAME', 'wp_liuanhuska');

/** MySQL database username */
//define('DB_USER', 'ncadmin');
define('DB_USER', 'liuanAdmin');

/** MySQL database password */
//define('DB_PASSWORD', '123');
define('DB_PASSWORD', '?EyLU@AKie^6');

/** MySQL hostname */
//define('DB_HOST', 'localhost');
define('DB_HOST', '107.180.27.240');

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
define('AUTH_KEY',         '7:ct)DbKFG{5MD_X o~s=7UItB(g6H#n%E/]o*rfent=OgzPpk@2v{(b >!8@%0x');
define('SECURE_AUTH_KEY',  'AX$k_O&>S!KTQD6WJJ6dU ^er`wXUe0aq?3!0iSK!sAd/O,o7*`iLK7(flkBa>`L');
define('LOGGED_IN_KEY',    '[i11q!$6>UV}rgyk8LIyfH}(M@+/+Zs*eqyU&qrY<R#,x+Lf4tzByJP:rWK8RLY~');
define('NONCE_KEY',        '9SXP<qgkk%.eScO{`ghM;E,RM#A`;A#!x].Ih%|KHY/9l4muazdEY~%4ou<1ii+>');
define('AUTH_SALT',        ';79P~ 46&r,Uni$^Olw[zF5Y)CD#-^p/v^9:P<*bAe]Y(^<b4On~|#=Pqu21/vBU');
define('SECURE_AUTH_SALT', '}Li3SjfX*]nigZTM63om9g?,_o]&G`*h5Sy73XW:byX25ClzsBy|[Q+:CB@LTb^6');
define('LOGGED_IN_SALT',   '}t7s<0CuM.A.aNy@Bj!P}M9 `ZusL *;S-c$}EW~ap?4lqoQ@zCv<CvUBO[B]<b{');
define('NONCE_SALT',       'Q[>qg$c!>&EDPlP_rc9jC;ol4]S<cLjeBmEbFZ3^5_jH;8-_~oy3^-PfupY!i[sD');

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
