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
define('DB_NAME', 'ubu_wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'vaishnavi');

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
define('AUTH_KEY',         'ZZDt0cGpJ=AwT-d:p}Zih4 w5(qYMU9R>&do[ht&e!<8m@b0p]xy?|Qwbd(@83Kt');
define('SECURE_AUTH_KEY',  '%[b>^N X+@|TZ=; o%>;Z5JW+13]7;&Ky Y<@.QJ7f#MhW:7b_-n[b[y8|KNO&Y~');
define('LOGGED_IN_KEY',    'Io(4[O.pg5:XMg7[#4)C`o<;hCFl*#H|R?h44i&M*|b=x[pe[*t=(:na}U*UqB3v');
define('NONCE_KEY',        'SB/SGbN;Jfue/HB#`_.f+ujm#R92O|d?4hlK@03^g%I4V1%*|j`$!a[O4a[0R+c<');
define('AUTH_SALT',        '+ !R-a--+*h/p^XR$5Z-^@(K~KH&+*>#H_}Xcid5N70*+((Go XCw7yYZ/g:D9(c');
define('SECURE_AUTH_SALT', 'v:u2:l]m{E}2r6XOh^SZSeA ||@/Yd9ZIEVx|{]2B5IMQFj(0n[[hxcDAxBiAhz-');
define('LOGGED_IN_SALT',   ',:<-dAjh05!jF-5g)vu<`.{dQhpKkg4usX}FNj-vb!d4K^mlLAvakank~bRFjo-0');
define('NONCE_SALT',       'ynY<$h*,8n1hOAg/O<n3spr8j;Ja08=X(3m_D$QHzr+z!ng!O&~%^e3cuOFfYa>4');

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

