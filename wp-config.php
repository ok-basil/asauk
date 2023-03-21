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
define( 'DB_NAME', 'asauk' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define( 'AUTH_KEY',         'l:&g<hMOpb-O36MFxWW1yHzC[94MXV(R?ufcBPbOu_5XGI6Aq),7lQcytF15/^^5' );
define( 'SECURE_AUTH_KEY',  'h1+L`%r}oQ9rtna.4_{c+@itCyWC[<$Xpmc6,^@X6GSCK$zU_p/n!q]5EH`*So$h' );
define( 'LOGGED_IN_KEY',    'k?I4SaH73r^MhQ6nDN23HlRCbgyjk5MyQT57gq[mC^ghI7!2c+<)w5Y{^N|$|aZ}' );
define( 'NONCE_KEY',        '@2ahEM;YDLee{4,Ab_)h_(.`IBSsC%*96K<{lkVC|k|OO54eawMHw.f@xxM@KuKi' );
define( 'AUTH_SALT',        ';QxI|V*YN95aj9Tk&$|[<G/fI4z@n qM7~EKGhr!j8}v,P/heZYR(Zvnw2MM8Wbu' );
define( 'SECURE_AUTH_SALT', '*?@!VA0LP49qmjyBJ7),!5@e~[yF~}p=2;sNzT3/L6<G@-i6|*>a5x.H8q>V2gG[' );
define( 'LOGGED_IN_SALT',   '&Bl`o=+1S}bvl[W} <p3;G/=+shTk?G>lA#3ONnEV:{+}BD:Iz?G-[W V`$Apagt' );
define( 'NONCE_SALT',       'AJ7Q1_,{j@ihv3%&:HGl&_xGDCmPj7-/!K]gsQuO<}o]F1&a!D-rxVE-Z-z68m!P' );

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
