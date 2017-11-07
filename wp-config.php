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
define('DB_NAME', 'lakesidecity');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'steve18286');

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
define('AUTH_KEY',         'g(c9QL:TU2_^9E]uD%Hw=Ea^EHB6wm @ub{&|-yNgeR&>I~#UwwK+-p;|Mab3|yU');
define('SECURE_AUTH_KEY',  'GLXE!P7l.p&c+c|t8bn<{~bj&27Kt*i4D/0|72Au>HUbV&VrOR$`.q}:PA(sB^#i');
define('LOGGED_IN_KEY',    'Pld+&Tgz<: m:yVd7^]MYn2VHtJ8ntHxLWzlibO%Cx9qFm#g^_x$xs+hL:?h]N%Y');
define('NONCE_KEY',        'b(p=.dk@/s7J0$Lhq:K<+drQ c+rJKHB|bGh FWS0A3 mA!x>w1%{,AP{`uewl}_');
define('AUTH_SALT',        '28#6/u/!~qkY+^njdP>N9+4WL^un%9^7WP0M#sB5dH7Ey:R(M#i} ji$sV*1r=+9');
define('SECURE_AUTH_SALT', 'OYBuzV$N6#/(I]GwYL:C,x`6NHH/)gqr#oj$GZ`}Vx4NhuNF,VDo,cE69f/~1,^,');
define('LOGGED_IN_SALT',   '47g(A[hG~j<wP?eFd2%|{Q3mB-JL8Pvsyd&/_rCWF33,MB68E~KFL34h/f1s[6sy');
define('NONCE_SALT',       '?lK9af6[G$@xo4QU##5Ts;5uJAoDu&_uxCu_^+&cq4zM;42H^o W9V6Eq|Ia!O;*');

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
