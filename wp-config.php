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
define( 'DB_NAME', 'wp_coffeeshop' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         '=SQW&cnlj0M6RqCl;cTG2/8QH8en+r8/Ck`@5:Tw)?nlIahF.4w+BMI,p5m,N2OD' );
define( 'SECURE_AUTH_KEY',  'nzF&9^7+5`?qA{8MpGBuzu:&x3^=62%K^^qSao8KG:c)0I9!>F8/Gxdl0FE3Sd`m' );
define( 'LOGGED_IN_KEY',    'Xm*B m4s|Z8L?eZ%>9x%5@^k=R.@T_akWhiw5:=t{8lyfWi~yvw^g9SCvG,2-aA!' );
define( 'NONCE_KEY',        'PX1HRp$x=C0PDL)%r2pmb,}w|zYMB@HBCTr:O}wpQvG5_[p3.C/FJghC-](ZC>p]' );
define( 'AUTH_SALT',        'pKL5~Gz^l9j9gRalAVT_11}~qM,C%NudEkFt3TAZDJ&mc@!pH^U/rc% F bvfR39' );
define( 'SECURE_AUTH_SALT', '}IHjc(_Janypl*L>qUf))W#8jsm%)a/=D9n2>,2F0{81{4kEa.:k ++Zs)JA!zJz' );
define( 'LOGGED_IN_SALT',   '^|VarAw^47)!mvSpjtcOkXH6tM3#Al=0-[E|@_[.w92Bc[KuA5_dd2Aa_`SPt9X;' );
define( 'NONCE_SALT',       'i|(nSJe Yq>bM-h&}1t^.~Tj@,>X#:iIQxCI+:f~AR06/Sc;T>47#xe]8k &6Z,:' );

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
