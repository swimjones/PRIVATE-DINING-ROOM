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

$hostname = getenv('DOMAIN_NAME');
$database = getenv('DATABASE_NAME');
$password = getenv('DB_PASSWORD');

define('WP_HOME', 'http://'.$hostname.'/');
define('WP_SITEURL', 'http://'.$hostname.'/');
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'pdr');

/** MySQL database username */
define('DB_USER', 'swimjones');

/** MySQL database password */
define('DB_PASSWORD', $password);

/** MySQL hostname */
define('DB_HOST', $database);

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('FS_METHOD', 'direct');


/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '*tC`xT4%~Bmp~oad&:7X9n(3?6T|Dn{?U(5ES73[eB~!5($+m(mYPJv%>ko-!7Lf');
define('SECURE_AUTH_KEY',  '$H/0{ZrF} R]W/6bd5RqEYJme@DI:?i_#FD}Lo2cm5}Ai<?KX$N-W:yD^C?`.[o6');
define('LOGGED_IN_KEY',    'V1]Fo?+}c+f)R{d/tWUZjz<;T`P<KDh_LS!{NmE;?:o#B{u0p_zh X3|xKlS=mB,');
define('NONCE_KEY',        '-h=Zt#[9P*tt> s|m>^#oaO)(|oM$(Dr Nt80;~crxY_CmB0}J=cIH|}i;t(X-py');
define('AUTH_SALT',        '+!nro-_/v7%<;$O%HCWpV?1mi.dQ5$UqWtJFI7pY];8[i:hS![;NYTw-45M>zHai');
define('SECURE_AUTH_SALT', 'ggq9F{fHn3e-|KR>W&5tkCbw7)9`u EJ`|YCQlC>t2>B;W 4MwFxO%_`C@1+C08}');
define('LOGGED_IN_SALT',   'bWQ-=>zX+LxD6m9_*W1Yu) OqN{Y3)S._FBUY 5,i:q-@|i7rMbH[r*d]3>N0v+I');
define('NONCE_SALT',       'Xx]^K&| zat]e`Ulo|V1<;M/3:$Ul{06-+ia$TJ#U.K#S#OtY#G6}^A:iae!zzW-');

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
define('WP_ALLOW_REPAIR', true);
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
