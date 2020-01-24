<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'medprep_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'U+LN!e[,!FV%E/cjGIF0wM>hbB5Y_Ty2Dd!$}rZE3nI.g8B+<):R8U#NtWeahNI~' );
define( 'SECURE_AUTH_KEY',  'g,Xo$y>I86Qt)L/zH@Xg1@+7}>:$K^&ET|}cXR{ePA9&gX[}<=#54%_3})n}OGee' );
define( 'LOGGED_IN_KEY',    'NzO3Jmgk|9jmPv{JM:9df&ClY+m|V{3xlRy#0Y_9aePyIU3]:Rmc ?F;|s-`.mT1' );
define( 'NONCE_KEY',        '@5u$Sg8]xa<C^2tvP73C.7lR19+vO%E Rcd,ZBBnhFu-7VWYa]%z*lRW5BV7?sF`' );
define( 'AUTH_SALT',        '*OK7HAme; JQ6.v!(g:12*d?F&4~d[){2OA4,}-Lts_0{W^]L<{]eguAR5m76=To' );
define( 'SECURE_AUTH_SALT', '@C|{H|f#:<VZ1{Q5)tV>OnKtI^G*+Z].k=qKF^U>U0E8=25yb>3/&?`] v9}ig7a' );
define( 'LOGGED_IN_SALT',   's>&8Im+8B87,&9,XLb2Ljoe#m3a~/`NxZ-%yhlgPx0paw23`Jm^e7o]oE@t;k gN' );
define( 'NONCE_SALT',       'cA2E*K>W?wP.mgtdbu,Fv<EyZ1z9/FtrmUe%4SwPdKp<F1:W>pa;4F,hF|7XOa.s' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
