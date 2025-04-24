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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'Password123.' );

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
define( 'AUTH_KEY',         '>BBX4]vn``!`erS&vQ3}jE*XeBJMT)[A^R*,KFHX0X_heztcRCK ~PkF.gYEW*r=' );
define( 'SECURE_AUTH_KEY',  'CnCrKOFQ@p]]Vvjh@GZ>V39fxFY]8,0@[R+0&+fWM#_r2T1|/*`8]`uP6:Td1y_c' );
define( 'LOGGED_IN_KEY',    '2%<!KQ/%_pW_Kw_J-:<i`q?*RMCry}`aqk5{K[;$M=C<_+2Vyl<~6nNOy-EAf7#,' );
define( 'NONCE_KEY',        '/}R%AqL thfX8=4}QqL6_b@<t|A/wiP!)ae0Bf-sT;1~;nPr<T+9YA /XjZ(8|xf' );
define( 'AUTH_SALT',        'q?}1,pb#MEBVa-IVhrk.1H{y7i#-gq,}F!LHAyw`L3 ?`k@L~#p.9^a!y<w19.iJ' );
define( 'SECURE_AUTH_SALT', 'mB<cmd{Ih.9Q5@[4@Zws[!, l[{II]kt!(8RRO-VPa`VfVbh;:[3((m/p{8]ZBb1' );
define( 'LOGGED_IN_SALT',   '3CX8O4xyAF<KC:>a4r*w;qT-Px}X ]0o.A]w{;aZp`>,F#0z-ND]aoSyRJ^~tk}^' );
define( 'NONCE_SALT',       'DNVI3]{L(Y4PElJ6kD/#?gmwi|{!fnF%45^t CYmrWxGgTxcv3Sv6$wqxLE!(`*X' );

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
