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
define('DB_NAME', 'api.mw');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');
define('WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST']);
define('WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST']);

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
define('AUTH_KEY',         'Az6zpByE2gs4QQ633JzJMdQFWP3DU0xBy4qcj4F4ZVISRYd65wRpmuJQJ0ICxxFq');
define('SECURE_AUTH_KEY',  'Y68FX5EUm0KhJtmvRCV1eFJkhQn8R6UvJqoUInan6DD1cCLmkTojtr2rwbYoJlF5');
define('LOGGED_IN_KEY',    'vJQ8uMXdZjZttcN5Wy28puAhsxDu51B3Xcnb6pChd0a1C7HegwaB0cLNymk8nMBQ');
define('NONCE_KEY',        'PAc5eXn4eSuuPoChSDgEybjesgpN7wDviBVRGRJmj03Z8dvgEbpysrGGRwmic9Pe');
define('AUTH_SALT',        'agS6nMC7w6n7WOE8f94yRLC3D9ZHBflG4tG4Hf2yqwry37bpXIiYE2iUp8ZhIerf');
define('SECURE_AUTH_SALT', 'wWz8wBS0PjgJ5dHWCCQr0kVQO1yB7X3ROlrfHEkKwSP8XZRzhebpRCU0XIDgej5g');
define('LOGGED_IN_SALT',   '1VCqg1v4laJJhvGhNJQP3pB5EqfOpupWea2vhNoqDFjYxW3claEJIFhNv3KovieN');
define('NONCE_SALT',       'tVFJ1q9WQ1bJtNEBZRQcVtgjvQV2I2M2DYBLRWt7KtNP8TdPq694zHDs3lSxLhok');

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
