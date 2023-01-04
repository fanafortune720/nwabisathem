<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'nwabisa' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'v<8Tn(op8s=bT+.hEFS!>I|jN>O%HK-sY47n35h$hq?G!1L;pF2FMA6p)/*3@bXW' );
define( 'SECURE_AUTH_KEY',  'YkR:5/Z+%#U$e$wf*E#yHSKkd5g#~g8N&KaCfh`)L)wlTpB}:CfZ|Bqd]CI(l4lN' );
define( 'LOGGED_IN_KEY',    'j7tb,I[]7xfaF I^3#E(aq~`M,?;[).{P[tLip}e_0m(xznk?TclFp`p$OU{~G*S' );
define( 'NONCE_KEY',        'qEvj_O#~3^?GhiT(3xk~<.r]+o`BvfF-q0f2XjVx_B7U[-wBKa>eM6I$V$y Yx]x' );
define( 'AUTH_SALT',        '0U*Ov1mI=b6g*F+ +c~K~6Pp-0>*}:2=FOuMNZ!8rlM8gU}^1 Jl/Xf{YUo<%qI1' );
define( 'SECURE_AUTH_SALT', '4OL|0uM^3J2FbVa5?`tPLu*+f`$4ybs`w+iwMMjz3B$GBp hBRe2?OfinX+-z%X5' );
define( 'LOGGED_IN_SALT',   'L:L2pX)-8.rq58ih1wwSg9Le32BdQ< lMQWmE7u84[#UNAjuX=ecYx=@>O<A}@[)' );
define( 'NONCE_SALT',       '0+:dYGpCqbn4_.=et iG)>9k1FjE3RktX#6xKCTcM=Br~b24nb5Wm?j4X!HKMn;)' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
