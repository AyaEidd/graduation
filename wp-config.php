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
define( 'DB_NAME', 'landing_page' );

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
define( 'AUTH_KEY',         'T1/]aW&;?mvJ#3&;u%!*V#=MuQ)ySlA_gl5duVs[;/r?u^/Gy,^eP,xytE vE|*8' );
define( 'SECURE_AUTH_KEY',  '0HYz}}>PP,/sw+Bt2#Vh-K`>q F~|cP.F`jfgK5H.D].z4/YPS=@HMsMK|o>D[3f' );
define( 'LOGGED_IN_KEY',    '*5g^:v5C&/a?YR3<S4Kc&K2eYo%XAq&>tNwa=!GW,]piz;aDl9A%wr6!Y-&oNgQq' );
define( 'NONCE_KEY',        'g%Kc5]} F~#zaw*/}UN@@K^B!gMRz)d<srlK{-D*ri~q$r8:8THX5{B_ED/~+{@d' );
define( 'AUTH_SALT',        '8}2f&1;p<p1T0s-`mQX[F-Ldo0onnkO5MNV-CU8ny$CBNe3w@&Y8r4>5.pucAaOV' );
define( 'SECURE_AUTH_SALT', '?wF`MmfyC~d/LVp9SaU4BE$pk<QHF?~Kt:MJHc3CV& J Cf+Q]%|!6|A(Wg$E:0f' );
define( 'LOGGED_IN_SALT',   'nFPPWgy_&i)T2@^WP[i`/=Id.>m;ypUy0`;N=/n&NZPagm wU/4wYuw$0:2fAvP9' );
define( 'NONCE_SALT',       '~nz/Y)L/u2gi~,K?VZ*y4}u(0.^~1R|]#ajvEE1Kk24L$!tCp]CvaOQz`+X+$WX[' );

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
