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
define( 'DB_NAME', 'rrblogs' );

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
define( 'AUTH_KEY',         '!V: mq1[ruS>(!$(X0tA:F>V1XJ|:O6U?CPAaN4qx!K<.]#?<F7&C)n>Zf7/kGHR' );
define( 'SECURE_AUTH_KEY',  'nD9nWl2>dB2WtfGTjc14O)`+&MqoV#3ZODzR>i<R/IoVe``!=F|o~I{uyawy:kw=' );
define( 'LOGGED_IN_KEY',    '>.b(mMfa`;4`uE[WfK)g=3]KF@nOwIKl8 HRnkKtMq.DRU$}E<{RR FL{^PXz_ 9' );
define( 'NONCE_KEY',        '/z$O4HIf%w,egdB.bM#T?n:c_r<T4|:4N|H,UUr5=T;Pl6Wjmwp^xKMfB0q]@YQm' );
define( 'AUTH_SALT',        'h;|bV7[>xI?nu1TROd 1.-n-o}>`477X%RSZvP)VsV;pozBY%>:$A?N.3LFNY6lY' );
define( 'SECURE_AUTH_SALT', 'b3S!bPb[*;p?!4{Y^G>)f;E}b`F52,IJ;hc/nB{3.f_~7qS G;f?5m5dUt7Ol6B:' );
define( 'LOGGED_IN_SALT',   'I<)VUy7kmi`o-j)>#tLt:%wvY,FS_1Txj#[7+Rl[r,q`NsZ`,B7s0hK?xr[_fQ<v' );
define( 'NONCE_SALT',       'zOevpO.=*v/.E9jF50LM6S?y|]WdhH4}y15upQ&_WOH/kHLn;[BfFOH:~IcrEQ*=' );

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
