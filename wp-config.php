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
define( 'DB_NAME', 'btc' );

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
define( 'AUTH_KEY',         '>M%%V8F1zgjF:Cg`pGDK#j%+*b~n:/8F6QYn)L@+.tb&+gX(OCPn:7:sCdr[y@oH' );
define( 'SECURE_AUTH_KEY',  '!Kfy;2QQT6,;<c]vPLfsQ,.h0D([wfp:2~{2mS9o>r,-;2KzHZgM.td5Q0QCu%^+' );
define( 'LOGGED_IN_KEY',    'g0^]>95A].J/TBRxP_jB=A@85fmx,|maG:s6/X#NDciq7O0T1N>#S+.ES+B gpD5' );
define( 'NONCE_KEY',        'B{2@=Y^?=LMtR2_R*?9I@~_>D*|Aj?#;@w=XD~Q/M+^,LRFv=ED4ZRA4[HOb>5$r' );
define( 'AUTH_SALT',        '>vL5#fYv|x5z+dc>+H>e^ObQ5`nG6HMk2r+WUM,Yn6auFUhN^Oxs.c^S_K`k3BRK' );
define( 'SECURE_AUTH_SALT', 'F/pX+@b}oLD6{vE$r$U].DBfTfL[S$sRky&Zzu||2N`HHmT.6Dd&z~I+SS1X?tBz' );
define( 'LOGGED_IN_SALT',   'TQ:a>@q2a>RN3|OU[kc7O9$3o},bh@Nr;}$f#*-nt.u[l!5lAv+,oD]>29KDa+{N' );
define( 'NONCE_SALT',       'r$4WA_w]eSg.CHiH<I)W[Jx1SFg@$:MYC^eRP:7T/UCpQ|q(`bwvgIiD!!BUA.Gm' );

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
