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
define('AUTH_KEY',         'z|Z60cb6f{%>D2+a@SX/jbq{vqWMRYvDSet|5zJ+bA?(_DhBp`k*Q#V`2v#sqg$>');
define('SECURE_AUTH_KEY',  'n=G<wo#w7$G^-Xy!i)p%qYoPw8sCoyOBy_.%C*g&8(eB~+$lA- ?=y2g3;},e/z|');
define('LOGGED_IN_KEY',    'x?f-Whas$w8A-Fk!I1>iCJTOQQh+5upE/O|[Xd!Uy8e6c]VCVk0wB9TAWQWMzw@j');
define('NONCE_KEY',        '%MxMyd$ujg{zL5;fh<zQ&25hNEofLVHH:^>AwXcwr-QN2qool{d|e-5nxB.^cbe~');
define('AUTH_SALT',        'm)_EW}DL+mA5Q&I,`?+9?`QWH|lAg!Uj$(Z>)i63iBmbhFL}k]Xa6)V.Ic.>oA*B');
define('SECURE_AUTH_SALT', 'SAGfF>x1tQ-lxud9G:S@FeXhi#+CH}Otn57)|ZJ&+>{R;mX{8?r o720}0:=qvN@');
define('LOGGED_IN_SALT',   'brhV#*wE5]6HQvO1-C-|_-OLwSNx[)g3x:|qD@?TxR@BSI7AW,I^AB-Mzb M->-x');
define('NONCE_SALT',       '?8w-QytXYG+uIcLR6hFakDb#U:jjZ#dh$Pgdk2;OsHvoZ#;ue}|^;#yic8-lFK5q');

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

