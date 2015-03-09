<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'inbattle');

/** MySQL database username */
define('DB_USER', 'inbattle');

/** MySQL database password */
define('DB_PASSWORD', 'inbattle');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '+j-oM)Z<X0a3zB9:3.k;}Zm~-yqh]qDhYl~MaEcv4^:1aZzqx_G07Z9P^8*5?dk~');
define('SECURE_AUTH_KEY',  ',m#MEYjM+AJ8Bsy0.wN};g1OoH]22?Jxd20p~x:)-b~0y^AdlOc7fo0sWnRF4Jlu');
define('LOGGED_IN_KEY',    'i#YS>.yaYmxr=_+G<f QR3016elCb(Oc>~];ReQBM$MF%G,1FeX#0wKWw_j-{9X+');
define('NONCE_KEY',        '0,zFOhNhLLEo7Cp}H}r|y49c1z?^sB~V@t*DpHfY@ZtVEmH`x[!oX{SXtl7!LY5x');
define('AUTH_SALT',        'S4se?cUahgl!XI*e<g:tPXSr^f8|l~9Ge)WL`O?=9h-|V;QoOE-:hj_XU-z|sM};');
define('SECURE_AUTH_SALT', 'J%;r+`coR^DrM+G@J:@7QN|`2[}$l1#?Gue/WoWj|b7Zdg!N9alwXj+EXSn8 5v|');
define('LOGGED_IN_SALT',   '*.vt-#YN[,xPGSwE)PG3.{[1H!Z/i?l`9Bp#;&gMp9MCOP*`KcS,>&ortJ>NR9O[');
define('NONCE_SALT',       'oY6MZ=o:kg4^L-RM+0wxd|b?aS*+4pa*mY~Xo3KE]UJU%*}pHhR}puKN|X6fPq^}');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'inbattle_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
