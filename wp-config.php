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
define('DB_NAME', 'wp-plugin');

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
define('AUTH_KEY',         '2.9@#ggVq%32Hwx@nYR8N24~CX`BmA2t;LThnj3es)u[Ro!xRyTcKV`:Va eaZ~-');
define('SECURE_AUTH_KEY',  '6xL$M7nv_RQGo67>5+:M7U?sON$esC+2}zgp7Qv)h(i,_($iiOB!t)5l/jM2f}Uq');
define('LOGGED_IN_KEY',    'Bxa+qi[tFn{Nyg6`vsj3ELgyaa5DZ>HSCaq42p%d&}7t&Z;zh:;UwX}UgoaBF80A');
define('NONCE_KEY',        '7aP<tCz=Q[Kn8p>)tO4/^@IeN6{Ag<=yv%hr5Y583=Hf@6^u.nepzuqR.ny9Ha$ ');
define('AUTH_SALT',        '^~yS>8x@0HBty ;%HH= #QK%t*bOz)Q/43K(fxq6FLjW(.t9X&?qgp18|Un?BR~y');
define('SECURE_AUTH_SALT', 'O` }hL>/|7=gPpGI/Xl$A>ZySDhfrfc/Tv8z-Hx_v*<Y^U4Y)}J./>wM9dhf)xY<');
define('LOGGED_IN_SALT',   'IpWUiH6psqx0VW?cmV4r8EJVm|e*@r$sR~#.7WQ;0*Z]1zM@VJ_%Wb*<`<OCjIh$');
define('NONCE_SALT',       'CvdcWBKrKse-f`vpO_DW<beW7]7D!/j4=2Ah+z?4TzIiwaCi5d43j8E0*w^j$/p9');

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
