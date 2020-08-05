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
define('DB_NAME', 'kkhireltd_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'FP*.DWUo_=gAOt?2B <3Ntq-e?@QVDD46CF&6JSKMHx%.E)t^Yo`!Ol?Zqdg>xYZ');
define('SECURE_AUTH_KEY',  '~(BUna r:xE-d|hqq]ebvgbE*<MOwoc,7 9vE`,j<%3%~9gJt)2U[Z85r53v-OpR');
define('LOGGED_IN_KEY',    'GA72InE>:sL n@&_HHJ*.9V:V*L!E2x6[vY;{kV]3D?i|6E=~b4ieYb&9;Ppf:>S');
define('NONCE_KEY',        '*rhkuB!sR=osW2yT!xL $|+Qq:a)PH&@-8+$*[ZX{rDDoJEMlS(@F/bR5vUr,b;`');
define('AUTH_SALT',        'e9,Qw<5I.mZW_D(sa~-JliOa+.}n+O^ogTIbg+X-69}:M-/o8b2e7GK+0Cd`poG)');
define('SECURE_AUTH_SALT', ']1}{YK3@bP(0E7[Eo0G) ;5.W2E{h#B3$3SH]_O2u,2 T3t^=rz}5 g~WCfVaax1');
define('LOGGED_IN_SALT',   'mk4|}KU^b-fqW:/G9_g+dZp0d9tAfnQ <*5]`XLw|eX&g80Ndz%*~|TjTsV~GE.a');
define('NONCE_SALT',       '|}9e(dOc)Mt/(Q~$Qxf^AAmFs|?h?R1KB:y$V^$2[ Oho~/))~r&T~&{2Cv5f7y/');

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
