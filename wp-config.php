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
define('DB_NAME', 'wp101');

/** MySQL database username */
define('DB_USER', 'wp101');

/** MySQL database password */
define('DB_PASSWORD', 'wp101dk!');

/** MySQL hostname */
define('DB_HOST', '10.100.51.14');

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

define('AUTH_KEY',         'e`G/6@94^NR4CkY`SFg!z9hsxxi?F]@2c~x_V(daqK6~|M6&9^ES=]Z0_NJ-VpVI');
define('SECURE_AUTH_KEY',  '{k~::+z8E4Stf+-N2g@05he+=^R<|+tQU)g5T#J^O|?Y+.|P}+6I@$WP8NX{=+t]');
define('LOGGED_IN_KEY',    'QOT0hJM?&rK<YYJ|gQ;:ACBfGBWWr~6YS+4Dd^=bWs5(eezA|e-)$@>Cu2BoJN(k');
define('NONCE_KEY',        ']Sfsk2ko)G%0~CPMh|v&ShK7g`c{:VbgBzP]RrO`?=LrbX?qU>n6{rkynw,@I~[@');
define('AUTH_SALT',        '0MB6+WbkU/Yk|ST X|6|B_x3w%)K|X (r06BeS+x5?+PE;?0HlCo0]QGQX8],KS{');
define('SECURE_AUTH_SALT', 'C}x9D4-j*Ge74+,^Vw_QAmg+e>+#]]V4B>Xf:#}]~>Dji+|b,W0h^{JB?^k]pbJ?');
define('LOGGED_IN_SALT',   'mc~#d!e]PH9|DAc-C2jc.n/u6zA1t1l-XJ;;~#o!gC%Zl-dm&7?M.n){PSWxzyT+');
define('NONCE_SALT',       '-$vF66UP9g{8z@R=|}:ZJzbuJf+RlJ3P2++Tv<iRtB{!#%,r{<5}Fkm&4T3-h1m)');

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
