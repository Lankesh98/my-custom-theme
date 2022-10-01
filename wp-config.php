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
define( 'DB_NAME', 'wp_test' );

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
define( 'AUTH_KEY',         'p%z/rqc!Qc^jfQ3.eEe%-i[2yB``a3VU(/rf6C86kV#@t/6,~Stg4O(5+#6Xgs*=' );
define( 'SECURE_AUTH_KEY',  '` &6;+P(b|&i>t NLr-_4D:P[L[(A>$Sf1C]&y::+ddusS,rS[awx~svp{1ly>*Q' );
define( 'LOGGED_IN_KEY',    'lrssZQZ9qGhrDi SnE`$9xyzShgFp9ufC/l[R9{%b^g]D:iQ2uz3..$o[K!hu:xr' );
define( 'NONCE_KEY',        'z:$GeI]aw4;jg3x{hBtR^APKV/Fr7VaMq,9u#gn{3]rJ=X&eRvP=0p7?Ud~AF~]~' );
define( 'AUTH_SALT',        'WH(BGf%X&<zogzAs5Rd->KfC;Nh9dxB=rR~d0Jjp+{G`vrMs^fEc1;SS)6Fi&(hh' );
define( 'SECURE_AUTH_SALT', 'PT>Z?X.XdRo+}SJM2vQLXz#1U!l9qniuIm!#+FLCy6|EksLg%GObA#=h&Q;!;Nnk' );
define( 'LOGGED_IN_SALT',   '?z!u%2%nV/+OFX[;9.7(^Awm6FgMcj9<&!7lIlteTuTJRn_Y$uX+#mzaHBtK9bnc' );
define( 'NONCE_SALT',       '00/$W]L*]Leb]})$Wgkf5^ob4K^KVo2t3X9L$v`g=6UOH2KE,qZPSHdku8>X%Ay|' );

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
// Enable WP_DEBUG mode
define( 'WP_DEBUG', true );

// Enable Debug logging to the /wp-content/debug.log file
define( 'WP_DEBUG_LOG', true );

// Disable display of errors and warnings
define( 'WP_DEBUG_DISPLAY', false );
@ini_set( 'display_errors', 0 );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
