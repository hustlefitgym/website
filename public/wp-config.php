<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define('DB_NAME', 'wordpress_229');

/** MySQL database username */
define('DB_USER',       'wordpress_b8');

/** MySQL database password */
define('DB_PASSWORD',       '#7HbvM03yB');

/** MySQL hostname */
define('DB_HOST', '198.71.227.86:3306');

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
define('AUTH_KEY',       'F5W(wT3oM2MuRbbZeCjiZUaLT76A9(aXVtcBpTsXjqoGrus9EWntt&l@v2rTMwfd');
define('SECURE_AUTH_KEY',       'BD0p0WEk%LgNB8PDxFn)IV(*bLxSwRKgB8W&sucZnyr&R&Kh)TYQLy9sPVKI6Use');
define('LOGGED_IN_KEY',       'z(Sa(J@46Rvf)BIKAToSsMd!XJWfU503Vc0bK8wOzT9EIDI8hDqOtotuOXqDMFIM');
define('NONCE_KEY',       'F)YVH8Y@WH(^ETz7X6H^H@&IA3zEhl8PJjI#w4X0xxwN%uAJ(VO9IR!mc%Q4QjuH');
define('AUTH_SALT',       'KdnK@y3E0FMJr1SGAWVRHtMXlh*)B8pg&4pBYGs8&ywH&HCvwI!17z7DpWQm^0*X');
define('SECURE_AUTH_SALT',       'Di2x(H0V%i1nkKsDR1p!#5zrG#meY0tW#w55NF3zc#VW4BP6#0rOFRWa^JlbD3KB');
define('LOGGED_IN_SALT',       'XlQF!^!p3)s5ke9UjsNcn(!AkVl3eScH#9IPHDDt2Zfa@FFv@5Xubtp%N4GkslLj');
define('NONCE_SALT',       'mBZVl1#Z1fdaR4lh301rQQWOB1PAx*(@H&yhRS#ej^KpbkviL!t41EC@LgKYYZu5');
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

define( 'WP_ALLOW_MULTISITE', true );

define ('FS_METHOD', 'direct');
