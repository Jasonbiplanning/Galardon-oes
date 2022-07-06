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
define( 'DB_NAME', 'galardon-oes' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3307' );

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
define( 'AUTH_KEY',         '/=Yvm:1TS985fR$-m)_1l)n|9KmHZG1Lr!YL{M<9=k@%ZGH)pi~]qbYe^qo7s^%K' );
define( 'SECURE_AUTH_KEY',  'NiSQI6J{zob]|_?6o)nuz3;Mp}{ZXla<v-&Rr;m4VVXwlsc6f6?fh%6AWa&zD?l^' );
define( 'LOGGED_IN_KEY',    '5./N|I)Et_Bc{x<z4UG9KqGAc=ETMk$[C?`h/oJ0f7!+0sj8MGU3sUIz7gsQeoob' );
define( 'NONCE_KEY',        'W}K5RPA_@0>@yYnZT/|^J}vin+UKE_Q<|.SoA]E>vSo##+&3~-%,7uxNa+52xLaO' );
define( 'AUTH_SALT',        'CO%Y(AO`hLL-dB/c?m!6hH=XZHyk=KgPs5Zua5NA3tnNDa|~]c,Gj<:IfKjb]BnR' );
define( 'SECURE_AUTH_SALT', '=C.< MP(o324~sOO 5kqEC^{~qHV=T{$B#4*vEbhu {4#&(rW^e2Yv&7/)o=%1(i' );
define( 'LOGGED_IN_SALT',   '_A}S.Kw-5al0kw:5_!H{[.@<p3CDu.rfi>)GE3;/6q`$1y+$t@BQ+a7GIm34^PlD' );
define( 'NONCE_SALT',       '0vf.5Az#Y4/qZIS9iHX(yv7=tcvNh@eOwN30nZgcv[5TGU2jzNT^!9t_`5k:X<%y' );

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
