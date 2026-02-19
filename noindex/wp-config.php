<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'gnathosface_wp869' );

/** Database username */
define( 'DB_USER', 'gnathosface_wp869' );

/** Database password */
define( 'DB_PASSWORD', '-S)4q66p7U' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'phgwheobojwenya220tbvcmmfxvqnkfksifmy5ep566eqcjuzpt8uxhuerzlj2kj' );
define( 'SECURE_AUTH_KEY',  'e5rvtrqre6zotvmdxbolpikwliiuy1fgc9iaryrtj5q41jpqjehnwunxvwp12fru' );
define( 'LOGGED_IN_KEY',    'yh18mh8h0chuoa8gklbfevlng8cmejpmjwxhqyxpq3phbwywvymk3o2qfemlkzc0' );
define( 'NONCE_KEY',        'ye63eisa4nzcllisjloid6hum1rq1obhbuo2tgaawcur3hzdql833zbycqpoaecz' );
define( 'AUTH_SALT',        'oud7nvsfgvoyzjkh2n0drbfyxtatawu8m7un9zborkd0vhdftuswtkldta3fxho7' );
define( 'SECURE_AUTH_SALT', 'oqcd1x5jnmmnxrmeukk07dd2pqlrbk4irqfickmaubkvyj5qnoa7cifyizffrjbt' );
define( 'LOGGED_IN_SALT',   'cuezwzj17naltcl2tb6yknq4poyijxvz131k3zmsguwlrpusprgktkkld9thkzcl' );
define( 'NONCE_SALT',       'ad31p1wwgxlaihcfd3vkfbw5itcaf0okous6g6ntewxt70gttgbnsnrogyvvppnn' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wp9m_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
