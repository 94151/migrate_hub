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
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/var/www/html/visa/news/wp-content/plugins/wp-super-cache/' );
define('DB_NAME', 'migrate_blog');

/** MySQL database username */
define('DB_USER', 'migrate');

/** MySQL database password */
define('DB_PASSWORD', 'Migrate@sgit.io');

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
define('AUTH_KEY',         '6< BA=g8xDKnRjw5)(JsD+or7G/i4%kE8GSbT*$Q~0Az7vuiQrcQ4OA+`+@]ff@e');
define('SECURE_AUTH_KEY',  'K>rzzaOC_g/#a<uH3Njos0BzsCJY7kSf2N %^]<Qb!yO>B8T/*+$I?K6T#*e_[p?');
define('LOGGED_IN_KEY',    '!b&%AFolru02qQgi%xV5S00Xa,_v$UxNSuu.ew[_0qJ-sL2j<o{h0$V>{F}2mk)c');
define('NONCE_KEY',        '=sm:u`B|jF>=Ho{B*x$CR3^~F4p&::;vw,P>` R2ha*VudY4 ^qoxp;TN[}#,+D]');
define('AUTH_SALT',        '9Zw<f>0N&K~ {Ff7#xjE?b&F~O@OI+0rDmA*Z_e,Su 9q?Wvli$nx`^Ro^gHeC#T');
define('SECURE_AUTH_SALT', 'Z=h3?O*/|{tn|o2P7De;z~~a@o:(xSi|qYO-<KFt7snc%po)Y4X;JsAz.8^tfP?/');
define('LOGGED_IN_SALT',   '/HP-GdOJVj#LPz<n*{!^&w#YnMIl6{$,v3{_WrRm;(}|@F{ M~@5luz`p0TPMKlA');
define('NONCE_SALT',       '9x#`Ox-iZtfp)4z_*wn4fLM1kO$vCO0D2K8>x7#5%0#o:U7|t46OA],EXG{Krj5s');

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
