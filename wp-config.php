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
define('DB_NAME', 'wordpressDB');

/** MySQL database username */
define('DB_USER', 'userwordpress');

/** MySQL database password */
define('DB_PASSWORD', '321');

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
define('AUTH_KEY',         '#i_c(! m7tXurPq)qC6x*H0LRN7vG@5,zC:9ST){C!80g@<#F-vxd,}vd}o6E1uR');
define('SECURE_AUTH_KEY',  'C x8*m,<]DPzM6vfS:):puh t^>4ZF_K{/`bRSD$Ug2 wCM16[$X{6qu<k36y6zl');
define('LOGGED_IN_KEY',    '*+aVhr[QN8&3p`N8}]W$,OPp.76I7&%4z(odkT^5+Nx7M/TI`hhhRPffr*`~]7(L');
define('NONCE_KEY',        'c9.M0^!E-T;c/eU3dh(fkgGpP-b!A[>/{vlg.+m<<hP-B}nSE&0t~-#6fj}<Ic/%');
define('AUTH_SALT',        'g@>NN~ ?w/0*QFcNIeQ_0%B?<TqTZT=1#Yzv2i0Rdn|x$S!;-ySeVcaEY!8={ykY');
define('SECURE_AUTH_SALT', 'C%3%7=?2uV`a&lv6l{Za-r^ph;SHNA8u>oLQUi0SEunk(M?eD1ce^w$W*^ CYG;,');
define('LOGGED_IN_SALT',   'dB@:9LoNv8f}{$c(yMGia[}_O$bs38dc7F5}(7u&pKf]rhP`nwC8H.8IgfU`f:L*');
define('NONCE_SALT',       'Xz.GJD%;*z_5xTPD{A1|CD:5}A kMXD3{aM2{73uaMBG~]iwGB)SbcMhTYb9@pZR');

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
