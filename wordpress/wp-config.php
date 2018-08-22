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
define('DB_NAME', 'dbmxpone');

/** MySQL database username */
define('DB_USER', 'nicoletta');

/** MySQL database password */
define('DB_PASSWORD', 'vineri2011');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '<WG3I`SoSA~Lh}H [IhaT>e0O!!vw^Gb$zu:6:Hs.[7bcu~lzRvpM_c(q#CyECO ');
define('SECURE_AUTH_KEY',  'y+-sPJ([G[r{.3>2=OG73hD#XO_O|LOVkx*imL^~Zt&Mj6T=^7d;7{;uooAyLz%;');
define('LOGGED_IN_KEY',    'sX:p Q57@Ym]7lYq@(Jkp_9;DbZsad?K-<9v6A{xmZ2{ GjE/Q^]B|;COVN}&]m ');
define('NONCE_KEY',        'YJZE>0^MAJv1RKZu51cKqhCrwHB}Vsy@bmtGgy|~XBs7W]aB)@q2ZnBovCQ51I9y');
define('AUTH_SALT',        '<vJ(q)CwGBK4/g(g1-xhX39;p?<!y>%{A+6|oP7?~5L*M&Vlk^i:*`F YUOD&~1P');
define('SECURE_AUTH_SALT', '_Tpa@!lxs&!AxR!%KmWYi^/h@?*2|7p8@{cg=3s[Z<~A0 l72?$8y#a!BX9EB0;u');
define('LOGGED_IN_SALT',   'X&mGc(u;mo7]ndScF_=8HA*bl(MymJIz0dNsuOYJz6M3/%r$+e+_FWBI.gUDQt}w');
define('NONCE_SALT',       'f!n$42SnpL,bZHiN4=Rv:MP&)_kqIsmKp}h?>r@eD+-HxK&l3S!G2~v(#NchY9I(');

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
