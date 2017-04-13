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
define('AUTH_KEY',         'S7O@7Bo6Cg;W/n}mQbMmywGGn=v63o];u (?gXOkP|&27[~SX,;0)wz!*YE0s8!|');
define('SECURE_AUTH_KEY',  'JH}ltV,%n:UU|){M`2Mh<lx;j,o(bNu1Fh64[(e/t=T|MPq(Q{SUxX2-J^B}~.(,');
define('LOGGED_IN_KEY',    '^3nZ=Gl}:S(K@]H#@GtMmWA@/n^R$)R3:bz<n2s]?5ki:O{pZZ*82$u&j00n1E(2');
define('NONCE_KEY',        'GlC}Jq&q@^X.Ssb.~TiPgr,hJ:#fPnto~n8K^3/N88-0fd*o=H6%Ucb$3?*,1.? ');
define('AUTH_SALT',        's/iX^h4i4=~FG.)&}eRd%o*WGS9U4O-)Ra o/I&c}sYg9j41]NqYPev!@o/&[S)^');
define('SECURE_AUTH_SALT', 'u=S5 `zC]ud{;rWg<O4.;c<P|{o<D!zeVyZ CFx+fXx|;eWVdqXI~%@@)^#J(tT-');
define('LOGGED_IN_SALT',   'FU%~&TlUA|R5 ?Z-KNblpEnml1g8FgRg,PQ,tEVs<WfDxA!H.A`LS|Q,Cv.x6`)p');
define('NONCE_SALT',       '-&$OP&,I:aaW*_9%tmQ?JQ<FRnJS<-KfA%7X{43 k,}.,G2uI%iiXJ^,<Aj=n+t0');

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
