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
define( 'DB_NAME', 'openlab_wp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'Esg9d(!w[)X8Y$umFO;Xl(jz1)Dg}1..=FSJ$/SK9)DPSW=E0-VNzoKml-Kh1?|v' );
define( 'SECURE_AUTH_KEY',  'I/Z]>~OU#OqQ o+gRLBQAe:A{wWvea|LUbGTMp1IFI=>p0#ugV-_tSBE0*`D.z9`' );
define( 'LOGGED_IN_KEY',    '4,{?!^l&$}hSZ@src:5gjl^^)gJik;2X-jR%FnfOgq)aJ3F{P-N&g0oIwtrco@g$' );
define( 'NONCE_KEY',        '<9,[Gp,,8~[2mAHkrvNc@AWCCPy,FV}=VO!b^PU/Jdf_2jTsH2I$YWY0@up,%C( ' );
define( 'AUTH_SALT',        '5^?YoFsH9.)R5xkGv1ua}5v+%d`ymt4+f> oj%9,|.#xCME2a+W+Ib8q]Gc,Gv9l' );
define( 'SECURE_AUTH_SALT', '8Ye56~|u)?}9o;cn1NE0#i*T-Jd?.}^]1qotyT!D#R|LmRkL;o5%7kCd_>K0r)/@' );
define( 'LOGGED_IN_SALT',   'U?MK y^/TnxIW5skc$?R/l)&iavUrZ0(o|>/< |D>bAfQrF=Z`n[<2g%g{{R3Plc' );
define( 'NONCE_SALT',       't%Bc;$w2uR|l$r?[t;Kc6qJuGu[bD>,P7aPEkLsvd?H0km4P>rfp~V`jKP/wbMyu' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp';

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
