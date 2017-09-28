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
define('DB_NAME', 'vie-art');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'XXXX');

/** MySQL hostname */
define('DB_HOST', 'db');

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
define('AUTH_KEY',         'JJW#mEdhce*{Di&Rd{F3)Pb,+n`@K8*hfF]4=%d3LTB)2BoJJ{:n8]{AvAe[4bDk');
define('SECURE_AUTH_KEY',  'E35/T@+BuED_p/;prLJF&fh)xs!*BGWzds_yN*D/r-fyc]AV!3Gvn*3Vx@#w&@:t');
define('LOGGED_IN_KEY',    '|qc(|w ;1&#-$bG&tgsX_@,N*H,9Qbyq:nv(9L+iA~J JTvTL|wg^j@JQbu8^~%s');
define('NONCE_KEY',        '{8``:2e|!Z,Cas o}9+,,L-h[%eG;leW)eeOE`N*}w?Eb)z#40?SzGLg4PPdYZ$]');
define('AUTH_SALT',        'bXF?GN%?l)5g.< T#YeavwCvEM!*:E(goc-N=9tIx]CRx_W wwvzeC3m58EW5Jgz');
define('SECURE_AUTH_SALT', 'hMr}o|qQv)0+A]&6y:p5n_P1ZN!/9f_QLA1rh7D<sYzhh1g+0o~PY_1dqtpio84#');
define('LOGGED_IN_SALT',   '0Gb ){T_Spx`9){~z&,1~y)=&6&~daClNEkV9CUOc:iGL#W,3P3,Rj)<X<Zt@[{I');
define('NONCE_SALT',       '8J,>3XkV@Od)`:ML@&ItObx5Xj0hi8>^}hLJg`p})<~M}=^:o8rjN>)Ea<#4IaHM');

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

