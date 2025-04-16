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
define( 'DB_NAME', 'shivram_group' );

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
define( 'AUTH_KEY',         'aH0b3|tr{/cOsl~:ZS,+3})*dxc/mV3=:~9]4pp(u8#oH<b,Q2#7ZF[R=w=?K3Lu' );
define( 'SECURE_AUTH_KEY',  '6#p_5X}gBDziSn[xT-URJKxz|v/U7y^v|RO*VUk?G7wc_nFdE9T#G_8!g;wK3K^>' );
define( 'LOGGED_IN_KEY',    '~Irmw6TD$.XDP,S1cY1}rF~|_})E0w/9j=-)rV{VN ~+B9,GiE+OpT,xZ/(oJJUg' );
define( 'NONCE_KEY',        'P^`i{KifC.D<2>.*y!m^PWyb78)Sgzr 9*WwF[E{LUT{XQ#1<=mHIJDBCUj-q$g_' );
define( 'AUTH_SALT',        '5c~qTJ_7a.A%A[RJ`Y^hfsFro8EC{L3<BkqNxyKZ:xvV3FPJavltqJVW7J.;D;.E' );
define( 'SECURE_AUTH_SALT', 'b_a%WXTVsEDdXoT +;&1/4lS=1qk!m4W6pf0OO:A|gr7:DRPa=sm*Rd.O*gCrJcj' );
define( 'LOGGED_IN_SALT',   'cy+;YU7@{lg1}OOUp=f2!>T^0UkW>N1Ob!X$9v7S;P%{HcDm^oY}vRlT;4{-AapB' );
define( 'NONCE_SALT',       '7jlH<~G|P.G RHPg0X!|NoOux P;_lFD~u-|:_fsHx=#=[7bZeJwfu~rWpN:YZ]Q' );

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
