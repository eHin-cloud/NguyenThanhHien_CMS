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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_nguyenthanhhien' );

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
define( 'AUTH_KEY',         '*aZ!qx&#/>pe_5cfjpy)dwd!npqHu?]8~-1Hm$qb@</~Ls/}phH&ZN%mTDGXgu/+' );
define( 'SECURE_AUTH_KEY',  'i9g^z+DckR|`R^6F<5, bXHN!%mUy `$:CI@6_Wn=Iy6bnF6}1k/*?{hiw%%JOjo' );
define( 'LOGGED_IN_KEY',    'n*7Alfmy{cJ)Uz#YE~8oLO{(wTAcxHGPj(:[Ne2aPZ:VJ2ix!CJ]Y_geC^@tA+O@' );
define( 'NONCE_KEY',        'YRe?|$r}Cf+RQ%1p`U{_FFl5[RP{d>7Ds%5&Cy%V_]CJaa&[oH0[[#E6f-S[n]),' );
define( 'AUTH_SALT',        'RpR}n]%gth@db$@LJ74`xV3Ux=j$@z0S{WY=-uJe|*os3P-6D!yEYpU%E;* @q,r' );
define( 'SECURE_AUTH_SALT', 'Yn%A1=zkZ_S`QlK[YiL&0yx#|v3c#?k5n[ ftU`ZwckjsfrUF-h..2x,T!:D[mR`' );
define( 'LOGGED_IN_SALT',   'm0@ie^w*Ho=g_0!V}q$zDGFB>* (pEyeMCJxYkjBsmkg6)Li[7+c}x4*pP1-J?R&' );
define( 'NONCE_SALT',       '}AnO[{OD<t+/n*rp 4yWU5x?[!urM[EVBmKkKBL.^Gm]hNba~P%Ci`lJE)~<1^eD' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
