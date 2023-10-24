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
define( 'DB_NAME', 'apnadental' );

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
define( 'AUTH_KEY',         '7&D.HQBVg3Ui?8@=;]tN9Z)ZLn..g{h<q_{{&7i_JF9<kP-Fe#uQiQBveUm(/hnj' );
define( 'SECURE_AUTH_KEY',  'P8E`A NNWu)xIDa}>k5,Y0qfPaC=)8>JI4Lm_%if*sEL+d}Pj5D+FT8axNhuZ`lN' );
define( 'LOGGED_IN_KEY',    'mzUMYh)QuQ[J:AIDT7lP#RBJp,1ki+1lyXMG%2Cr=@il_|mtF&`Y]F|aJ#>EI./+' );
define( 'NONCE_KEY',        'z.m2#v=A6M!u9nt~] KU]xMqkno>pQMC&iq}TS_H(IJQ50hg8p@2)i~_3y|lHLTS' );
define( 'AUTH_SALT',        '=iM`Dykt~Mg>seg.n@.t5O]G>ZI*j$5!r`-66O|Ip=.&PU]/6q9K%k*U6,g`dT!f' );
define( 'SECURE_AUTH_SALT', '(D,?6?P!Xl{%;Ka.k;B9/RBH3=;)^c5v0kW[$sx}iRjZJ/46$~a<w~/ `E^T^#v ' );
define( 'LOGGED_IN_SALT',   '{B;n;lN1MD+@+4ozEUv(@J&}dl^Uneh/GXnRz[MC/FzGtGlPT#u%h_3g}]t0Grqh' );
define( 'NONCE_SALT',       '^kPQO[U8#}+y1:/V-2ks:Zwv,F<+]i#^@cVv6`,|:(xgLu8T{jJ-X*1MPBP*jAp4' );

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
