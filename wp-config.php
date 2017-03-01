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
$db_hostname = getenv('DATABASE_NAME');
$sr_hostname = getenv('DOMAIN_NAME');
define('WP_HOME', 'http://'.$sr_hostname);
define('WP_SITEURL', 'http://'.$sr_hostname);


// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'pdr');

/** MySQL database username */
define('DB_USER', 'swimjones');

/** MySQL database password */
define('DB_PASSWORD', 'magnum1998');

/** MySQL hostname */
define('DB_HOST', $db_hostname);

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
define('AUTH_KEY',         'qe00u8xSim4k2P489780M7JM5516gyX6');
define('SECURE_AUTH_KEY',  '6mZZDWYEIBJQTFH423hoVX9dqp8pV2qZ');
define('LOGGED_IN_KEY',    '5v5Cv2AvLQquB66K8qq6S204Jr3Mla6X');
define('NONCE_KEY',        '8jChW3Ua767jG7u9AgoTHtg97Xmx1X55');
define('AUTH_SALT',        'BQEAK6OOuNsB07Tz7L1IH14BcK1PkmfA');
define('SECURE_AUTH_SALT', '1UymaCdlt14V9xt149YP03v4PK1r5Zn1');
define('LOGGED_IN_SALT',   'MJq2cxXK2QFy4I7kl2nEKeqB04zbVCMO');
define('NONCE_SALT',       'MJq2cxXK2QFy4I7kl2nEKeqB04zbVCMO');

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
