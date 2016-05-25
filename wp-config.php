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
define('DB_NAME', 'pandatownsville');

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
define('AUTH_KEY',         'TvJB)EK4s+6#Q^hYGjiPt>Yw*W*-Z K>A-%8W2tc|?O0,xHT6_+zDYMua`qf+2rD');
define('SECURE_AUTH_KEY',  ';?k>TGy&-[ABG}m)?/f3m6/b?UT|]C}&.:H7--x-p{!3aipH#y3#pg?A~rD)7 I)');
define('LOGGED_IN_KEY',    '#$j]}|DhEl.V<>7cR{DJ<c}O(7e~Pd>;v;<^C$^?RS;=#ts0]Qku!EhU=i4b KfP');
define('NONCE_KEY',        '{3&prjgT142O0**f=.|:gQ0#Vd7>[2Bap|w5v*-$&A+gUr-@g) mc):-i~i?6Hf=');
define('AUTH_SALT',        'r_>R?vdAvX/Fwh,0n!rCP-:3w2)5|lV(M3y)SM]EFTMOJ@q[uKxhcK6E1][nH8P)');
define('SECURE_AUTH_SALT', 'p&u<2dT@7*)4ZP,@qoqwOoS72#l]pBz191F* %tsC1*w+.xlxv84g<yw>w_J)C5}');
define('LOGGED_IN_SALT',   '_(7M(nx: 2-8_Ny>he?{Bp ?X2Y`?c#lS:0Yi_-81>fe}1ejs%2ds+*lm?]@-c->');
define('NONCE_SALT',       '`~}D1!~_@x];l5 q(xw3Q 4Cm|lYph+_/Ij_O7b/u`hdgcl+N.B#{Kn`#uw/,%yY');

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
