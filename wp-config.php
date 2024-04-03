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
define( 'DB_NAME', 'blogmutuo' );

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
define( 'AUTH_KEY',         ' ,:Z/t!=zeAU`>1m:V%s|LO=L~J(uD$8Sz2YrAuz%1FwiAXwp$eIs,Vt_{h~q_T1' );
define( 'SECURE_AUTH_KEY',  'Pha)7S&Mrp#t8g6$<Qg0E^zZo^,3bij[6lb`+lzgYL<]h^c0wVm)[^3VAuSW_fPM' );
define( 'LOGGED_IN_KEY',    'b(@u0ehiz_v1MZEl+HP7vT22;z2y&VhfxI>g5+Cu<zC7%F;&b.O?5zr@5O5oqf]:' );
define( 'NONCE_KEY',        '}m%MKEhYrv5*Jt*&ZB{fR*U$A?PV2Te!MhMvv=af(FNfx3^T7,n6my$Jg~x!=JT=' );
define( 'AUTH_SALT',        'Y42@A?!.AZ~s+u^5D,~QGSEwA3KYmGasQN]f|L6td*/Qkb}J sCb1xg~5UeZ?:CT' );
define( 'SECURE_AUTH_SALT', '_ co%weD~)rBn+6Qv`lO=;E%US?4-V4[y$^AS](J^WqI_@rA[Hu+p iD$]LvTNCt' );
define( 'LOGGED_IN_SALT',   'tb5Kd6VKK!}5{@nG_WloXv,+kZ@ -HB:0Ya5^YkFsyVerHRQDizs+pAFohtLBNLu' );
define( 'NONCE_SALT',       'z*];AN~1JzA}G-x&T`-kL1V>d{nTsgf]br!YKv|VNp_)igPk`tAu4,a[$(Jop_G8' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'mt_';

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
