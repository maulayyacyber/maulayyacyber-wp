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
define('DB_NAME', 'maulayyacyber');

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
define('AUTH_KEY',         '%=kd)O6=NOYbH[005K$VrHO>=~555*>0A:RA&B^:U<QC`x^Y3WoDl:UIXR-{`$FG');
define('SECURE_AUTH_KEY',  ',;:Dt= m6lBt6I1;e*RSt*MrjN#3>$h~S+KZ<<A 8ba=QT6WMYT>daad)rqQ+{#@');
define('LOGGED_IN_KEY',    'avD/p4m8Q=y-PEHHHOxJi8Tp2<6&m$pSy-.if5zD<yhr>~R+gKM|G2oWQ!R^dD,:');
define('NONCE_KEY',        'Mg@csexM(|<gfo5MYv@<w*z|V7p~Yh:]qi2f<a:daFm.e(w7 9I0I!`K[R^Z~9-l');
define('AUTH_SALT',        'uLd/@T8#zgsRXs5uLN*uH.%/v_lJ[[OuYDpdj0b`]$bE=VOMj3T<VD&mLs-S*V.D');
define('SECURE_AUTH_SALT', 'i<**Edz6.PNLKj~T*(j3B^A`NJ&W8B3>[H;:ygH3FZ>[!-KR~<XKQh1S:2AigO/>');
define('LOGGED_IN_SALT',   'E~6l~zbXcnQY1uAEePGE#A`GH8y i#5xB&kk.}lV4!HcSXvyBnSk$7l_|h1[Fm%I');
define('NONCE_SALT',       'c c-3[Yx:Roi/,$OeePEM76]#e`H.@BnDTDMo)h&gALI~ihV {1frF/-z(?3`.68');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'maulayyacyber_';

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
