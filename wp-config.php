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
define( 'DB_NAME', 'u590096023_hrsaluglaze' );

/** Database username */
define( 'DB_USER', 'u590096023_hrsaluglaze' );

/** Database password */
define( 'DB_PASSWORD', 'y1K*Zg#GJ' );

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
define( 'AUTH_KEY',         'E&S_`]<hAa_8!?Gp[wR`iE)Bvm9{-p;L#L^=uhk}`kE/< 7^M0eUP9Gh6yhHig*I' );
define( 'SECURE_AUTH_KEY',  'i59rcuGN&FnHo+6:6`~-~$S3otDA@#19@-J^cfDrL^J&~Qp=>kz4ECb9tZEn Chh' );
define( 'LOGGED_IN_KEY',    '{FI9>n u{_^n7RhX>O])kH}V`Ty0[iH>:<1Yc-X)+7?MzDG7jP@ ; R 0bEDst3%' );
define( 'NONCE_KEY',        'X?-lQ 5bCe585k+48(M+;_~5D_<@MU`TG;r-3g7?[n]K.GP-GpZZ3Q${ o+{X7tU' );
define( 'AUTH_SALT',        '(EX4Qr7K{bNQNc=O_daQN`dyJ9MK2 L;jgJ{7`di+F}Y&F1GdQyO+*Xw~(xy$rH4' );
define( 'SECURE_AUTH_SALT', '>/:hr+vEuR8CI3#ENL-:9U;UpV9jCJ7T5+k$(~Lp}Syw(+#dwzDqfckJ(Ir]x3>[' );
define( 'LOGGED_IN_SALT',   ';fQ@0B;wB/H4pr.d4Ip4;L+.i>KE~$mR7`w,R:uB2#Skf,2^!1,>#BGS$Tu]mO@0' );
define( 'NONCE_SALT',       'tJS&h#F7w1q8hn0d*OFrhu7PGe;,PSF;,<73R+ls8]%,}3(*67G%U76f2@@B1sUx' );

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
