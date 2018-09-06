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
define('DB_NAME', 'wp_partyoffice_06092018');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '*VNfJqn?Y4?Q6T~Z,jU<|$quKA3g{}m~}`f(Q;U-DU*Q}Z75|%C,Z<09![cut&ZE');
define('SECURE_AUTH_KEY',  'i4abTo-g`lyUJ5&)rnQ;5I*dzS_eh89waK/{:eu-t=J%^!ncMM#zGh>,YGjNCTpF');
define('LOGGED_IN_KEY',    '3AY0BoL60Q@83#>$E@Z!baYNVtJT9-3@fh*4A.qK[LYIf`H;oCn?gU6;Iw}2ybv<');
define('NONCE_KEY',        't` H:o?O{8!PCrfcAH[5SP;9:SApOQWPRmfY0xOXgI&isB^TB2@IcN_V.sXXkuHq');
define('AUTH_SALT',        'U&?QMj1+mR4fO_#n5/-zVn1:U)!+FdCa_4-skE+jnIWS^/t2a_6I8<.DiHQFQqL{');
define('SECURE_AUTH_SALT', '[A6T [ 6q@<AGh9C3Mb8_E=gp3QMH3^XB:D}:whpH&Q~H[ya+H=PmTjPJIoxIQDS');
define('LOGGED_IN_SALT',   '>bUJe?~8x8YlThv[-iE7^b/cQv5`{<@<1Z|%:roBo<S<1VsZEy^7#fkA@)B}vv*U');
define('NONCE_SALT',       '?rVAfBBcFcra:ny1<PH}a?zk($Q$%+8di,7/t;Wq2oFY*KP<4FRBV>$MJQC0luLW');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'po_';

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
