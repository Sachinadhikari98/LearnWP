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
define( 'DB_NAME', 'learnwp' );

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
define( 'AUTH_KEY',         'psR(}]uBR=?}AUwPEx)Uoc6O.tDx&{#K*$L]@0)oVt ++KF}>A,k6,^WHbv# X=-' );
define( 'SECURE_AUTH_KEY',  '0!-1:jXJ#Kg4/D)HA3|U<=Vd`J1D9Rrr*-CPf62A_TjmAm KJi~005e|BVw[Vv5:' );
define( 'LOGGED_IN_KEY',    'ur4GPK1/01%IY^38FJFK1/YR!^On_YQkJ:dP,)APc_Fa3t$Qt:AH*9tQ//@pHM+U' );
define( 'NONCE_KEY',        ')U*4rf|dL]iVku?Nq9^2,1$rUUBvq,gle]IWq<| .V]*Ki<^Y5.K%w*7=)uRwcos' );
define( 'AUTH_SALT',        '<|+*frG>Pp~4@g.]j.h$7xqOqWX;L7]o&qb+j0vE&GscT|{iW.a{K=?spiLly4S(' );
define( 'SECURE_AUTH_SALT', 'Ey]Tbm}::g?Y^_Aq;{^,zw#4sFd)I&svzu_-Uc3{kf8w&kFxglmxJi!nFO:4m6ie' );
define( 'LOGGED_IN_SALT',   'lj0Gd%KQ9%L!*O8Ayo(;4O/GNW^fhGB$;V&)?6^rIxQ*&OWbG,<5OdS%y-x3ryeZ' );
define( 'NONCE_SALT',       '[AU$V;7Rn;$`wwymUZWwRwP6XJDe)IzQi[AOafI`>Wdf,#HeW]yy?&Ni?iqDitK3' );

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
