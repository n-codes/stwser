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
define('DB_NAME', 'wptestwp1');

/** MySQL database username */
define('DB_USER', 'wptestwp1');

/** MySQL database password */
define('DB_PASSWORD', 'a)P995S1]K');

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
define('AUTH_KEY',         '3woe2crs1qtv7g0gxqd6vuqjedfa79gx0btizeo6nxtlyhakfe7kgsdeavixwnlx');
define('SECURE_AUTH_KEY',  'dp5ehjl9l37ars3gvdxwcsywe8031c515ah2x7vwwmbhzscsalqgsctrmgcvuvu4');
define('LOGGED_IN_KEY',    'ycbkqadjxlutlgyus7zkoiar3m9fplemystmrt7cjtwaar0kt05shmtcdo5ntbcn');
define('NONCE_KEY',        'smdndhmdxq4topos3v7zoj4t2yfia08vvngaoxmoglok2vsvgus43ff027zcfjik');
define('AUTH_SALT',        'qi1fcj1zcjdvlhkxamybv0zim9x0oo2dtmzydrmmoqcco4apxbij7yvl7tviuorr');
define('SECURE_AUTH_SALT', 'nvbvafograuidmfcfrnavy5uylqxcpudp3uutxd5yeqdcvtsiriqncuvjpabyzdz');
define('LOGGED_IN_SALT',   'ucs9j69nfn4gcwjuzkvpjusqpowrkwz6rjk78z3wnseiva1hatgn4hsjwotkrl8i');
define('NONCE_SALT',       'hntva0ledprwicdjntpaiituqikmqbwdo4egaxqqgubroflyy6keymrymlpqdqcf');

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
