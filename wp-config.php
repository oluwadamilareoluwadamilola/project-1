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
define( 'DB_NAME', 'project-1_db' );

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
define( 'AUTH_KEY',         'W|>7gLk`gX.;uFcNuvfyX.~+oh6FSCwHSZgjvS6Zjw ~+H}:#Iof#?E%kGi{gW6R' );
define( 'SECURE_AUTH_KEY',  '}7D^`wIE!,XG9Dgd)x*25i;E#r.{,CFDbHX}>yCG$R>Ln Ck} &UBeSLNW_JXi(f' );
define( 'LOGGED_IN_KEY',    'rE03Dg?m@5%W2x$K~,XJRo-t1I=!!?5cyNJC$s*<6L((3Mr6cn^,*kr8p8Hxg}ld' );
define( 'NONCE_KEY',        '*-nS+<U8-DC{}-qG-Pp&e,h$B4<P4SBk{1/y0&oI,#=bJnl?6!t#{&gzo<lWV/[1' );
define( 'AUTH_SALT',        'boXzTW&U,^)b0V1{da+<[bF^2KJ7(^M5eepK4VtjW:GYEt}/$$W.{we}L35Klp?M' );
define( 'SECURE_AUTH_SALT', 'C|CNct7i $m}b:NZij]6|jD9@B1g;U5_fMI2atW7gdi>3^k{{rht`*B JgBQmZP?' );
define( 'LOGGED_IN_SALT',   'L?fi|aE0q-=BTbDu=cuz9,Wp^^h_U<zt-j!JAFr[mW~xs,/4{bvdQ(:b+uNU(_CL' );
define( 'NONCE_SALT',       '$!*<O~zpe<Js5/@G#8CJSLnvw]HopvNNTV6(.=jzgEiQKwh?kOpYy./oR3Nnh.?|' );

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
