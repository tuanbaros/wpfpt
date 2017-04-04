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
define('DB_NAME', 'lapmangint_db');

/** MySQL database username */
define('DB_USER', 'lapmangint_tung');

/** MySQL database password */
define('DB_PASSWORD', 'thanhtung');

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
define('AUTH_KEY',         'ctwCwIeQHN0yDJUBgaJASnbSS5Ukhog4GvZUiunJXQPcSoVOozvKgRHHKHOgpZgH');
define('SECURE_AUTH_KEY',  'mss9t1CGq6ZlIqxL2JQlPInaHntUzfEHU23cJlzEggZicqRKLYahTjcQpGRQpMkx');
define('LOGGED_IN_KEY',    'AvuKa8w8V8RMkM9xxzN7sJ408IbC1KpmjFgQhfwVmiVlbkGZSDgNixdl6DmWIEwv');
define('NONCE_KEY',        'u1yRN1m8s6gOebhydD63UstcrGtCkqRkrPrkWj5ZM3Wy9tj1DDSv4ixAcNQsdKWD');
define('AUTH_SALT',        'xZ148xAarIy5gCB1pEnbtRKOg9qPE7PHMru83ZnvBANLPUCYAuMqY45fjxOyZqzN');
define('SECURE_AUTH_SALT', 'f3kLS1HfBc8ospMBgZsT6CQQAEkCKPhfxZ4CSJLASBt8d88REquYesgX0pb18T3W');
define('LOGGED_IN_SALT',   'zPnaOyRyfGN20rXOFNcdrU8bLLtvuvOwr7KwZwM8cvvGiF8xgDHz1s3NzoQLixHO');
define('NONCE_SALT',       'eAljWEKoLZBMGAGfoLuxIkx4WqOePbQBgnW5j0MCEJLJsggdhn89xdlJ2SWl7PGV');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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

define('WP_HOME', 'http://localhost/fpt/');
define('WP_SITEURL', 'http://localhost/fpt/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
define('WP_MEMORY_LIMIT', '1024MB');
