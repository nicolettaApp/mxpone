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
define('DB_NAME', 'WpFirstProject');

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
define('AUTH_KEY',         'uHS5_-L&^Ta3Zn`&RyIblu7,)r9ZhiUQ!^<R:Z=b1g>)(UBerGc}l^HMm[j*=[Tb');
define('SECURE_AUTH_KEY',  'UqvA)AxDI&4daQVKQGRkO7,4bne}+d[7vK[=(iJ=f#)&{.O(7bRc*qr,xo~EvX`8');
define('LOGGED_IN_KEY',    '}<MiE-m;;] kt>UFYD!*1:9,OQ0C>i[Yuw!2@f}v#oil3.@HanP8K6WmNyt|4}+B');
define('NONCE_KEY',        '0IJ^@k`BINz-fh^l/vRMCw:#s/^C5*42H9aB[9ucp;sg%SVR7vFIo*/l*SUA-E(L');
define('AUTH_SALT',        'Y:&@~co&DAmA% 1^f+R)UaI32U UKIQ%2yO[(6~x^dpETg}0.gHW~6JM{8%c PB|');
define('SECURE_AUTH_SALT', ',nhRC7l!<_KbQUPlXy4&5auZT}^&knT^N YH1Lo=CN(#^]-:1PG}0f&{/Fk^r3`I');
define('LOGGED_IN_SALT',   ']R~2bMSTZf*VfJldMzo1a2.oV>oEC/QM(qifgz?4!3VG#btY?0Fun#J(7p+1&CSe');
define('NONCE_SALT',       '1b0iYNpmeDjoD|FlxV>|zdxyVt:B&VkGHZMH _m-^8-[DsI&Pfs7up{j@ga[n=><');

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
