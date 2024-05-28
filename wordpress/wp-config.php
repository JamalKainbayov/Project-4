<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'AUTH_KEY',         'wZN^VbpUnG;3Enmd*#NFoA1-$^?pX4?3N`4G8-qBorK8HwJ u}XK17*g4a uGCi+' );
define( 'SECURE_AUTH_KEY',  'a2>)KIm4O^Z[D0,?&w?%j&]!<T5+Ew<qpvy)_ujmcA17RO%jZFegPAOn[4CF^N|6' );
define( 'LOGGED_IN_KEY',    '>gni`FbL_kIhx>pv&DJ}rd.!gw{s0u<$;C?TILVz*r.^7=N//Z}/AMEO0*4vH{6i' );
define( 'NONCE_KEY',        'q;FuEpAK8|fDREzTF{NAkR?%d/1B_0<sQGg5FaMz@UAN-NPC#HCdAQcw7XB,8c7k' );
define( 'AUTH_SALT',        'k-|jW*/+;?{!;ol:l|J>zy!H%evI$xwVmCB7^SS}#$l)+}GJl!(F}g8r?15p-p!!' );
define( 'SECURE_AUTH_SALT', 'Z&)POc.bRx{vb{r0jiu~sx,yZhvp<&[Y2=# qF^tE7^MUSX=+um<nx!4F{!pX2pR' );
define( 'LOGGED_IN_SALT',   'W[uyC5&SGcTrm/q%*K7Ew(slW]__}eCe%H)pXLJ5~C->nVNMGdKU6?c~}[^7!wp-' );
define( 'NONCE_SALT',       'Put#`z7K#Nb)f |>@n?E;jlgAu>Wiq!@Rc$BF&9F@oisd5f }QY^,KiIXTtx;H|`' );

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
