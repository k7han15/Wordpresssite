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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpressuser' );

/** Database password */
define( 'DB_PASSWORD', 'Cloud@11' );

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
define( 'AUTH_KEY',         'VMf`6&(HjIR;p!E~j0 NfQ6<|z6lT`URF10_qQD%1!([tN+O@v+LUehM|aeV&o5)' );
define( 'SECURE_AUTH_KEY',  'P.TOIj NkojbZ>{M7~ushzA[?7M8_HT_jXYt#&5jKwR~K^PC#UX%;l!Y;;^JO,UL' );
define( 'LOGGED_IN_KEY',    'P [@T[U};V@(V@Riohy?/_i}IlO_ce9|FQH)MHe+-.5uiin?Q[).yN]EI*j65OK-' );
define( 'NONCE_KEY',        'qBKv{Ny$cZSq~7T|ZY*b2+?y7(T5:U1J1|s_4+4D*41v-PL_yk-o0$wrAVm}0 /S' );
define( 'AUTH_SALT',        'bT1y3&ZR0hxmUInL2_$kq>w%gr;6bYtPTY0]r]H!KdHcp.,=~*E>K_jPQmJ~LX1w' );
define( 'SECURE_AUTH_SALT', 'J#pJ3/P6d4H18bD6RU5MSpcE*QZFL7|R.=B%%wK0.c^# 5VCOp>:xn8:6 Rz]9)V' );
define( 'LOGGED_IN_SALT',   '5x{V]hUSZ}[jrq*H9u8Pn,_6w>=Nr%D8Es<krw[Ck:}&Hkd2Y,oYr[o6ugq1aaV;' );
define( 'NONCE_SALT',       '?&Ne<,GU4hjl#ilJF4pG%]h%1 zf#?Xvn+|qV|WM37fu=]Fm&DeZuYXuWos05mmk' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
