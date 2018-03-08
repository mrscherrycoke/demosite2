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
define('DB_NAME', 'wp101intra');

/** MySQL database username */
define('DB_USER', 'wp101intra');

/** MySQL database password */
define('DB_PASSWORD', 'wp101intra!');

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

define('AUTH_KEY',         '*E`Rp}x+19jI)0`~aKc)aCqQh;X9x~t,_j^T]L.g-X+d-Kp#)XqwYhQJ*`|N<Qwb');
define('SECURE_AUTH_KEY',  'gEg#^[x-`RC4g#J=w+QY@t8vDf( :HpHN-?XyQJy3?`h,TLNFTwr-K6!rI-X6mZH');
define('LOGGED_IN_KEY',    'T--x e`4H.ZDME^t)JkSqD0m|H$j Es-i!Ni|2du:.x~?}*Qrv<-G);N^H4+%xgn');
define('NONCE_KEY',        'Bg9nu^Nid+mq$C[znS|`gBF:_xW~4~HNy`WHRGhj-Z8sQR-#-xL|rR5(e+i2/lPc');
define('AUTH_SALT',        '}g@Ue|ILL-qoj>L{V%3-+,A8L?|[)AO|QE+gP Iau=)sEubUg#AC4EC#5o#E-NQN');
define('SECURE_AUTH_SALT', 'T6bSZ|%hAvI1Im>FcHe)Klv<znRKq>+9psg&x?l90Gf?+Y:ADW<aQ4G5bXNJk>fH');
define('LOGGED_IN_SALT',   '$(G[zum&QO~KpBCC(~!~mf!p^R8/p5&ysUE2IRU)Lu,V]6/ya*6U&P%;M:6<v:OX');
define('NONCE_SALT',       '8kq?<Dex6PH1E{ok8nj{*0&,/hAOT)pQc+kQ@IRoq||f)?JJ{J~nj:ob/*]D+K?z');

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
