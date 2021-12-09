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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'fi.EH3IvX4vS.=iGgpne=u]#0:!-w>Z{kApQYfZ5%yDp0X$jOmyMA]x=YYI+1jxA' );
define( 'SECURE_AUTH_KEY',  '@Vy%4;T}nC)eDsrYTj*a(aOK swF-A_|REk8ht@&SE7cHQil0j-aaL[H3t,qs0ro' );
define( 'LOGGED_IN_KEY',    ';N&I&;`lH4Fh)4|sRd[BgO~!hDdQ@H4DD)g+sgxO7Hp{]M,k:T6op(e,WIp7b!IL' );
define( 'NONCE_KEY',        'RslF|9s{b1OBk;D&f;2A~&9AL<%MhFjR,8cRIFylig>gFtZ[!N1 B-8t3lml$npL' );
define( 'AUTH_SALT',        'eb[Z<Z2CKCNix@c(vFtFGbBT:M=ZO/S]z0d.Wa(6g@gUND#jD+zDBCg=1cO%f4A.' );
define( 'SECURE_AUTH_SALT', 'SY]]/Bj)]I<RPjIbzH4x-KDC^T(@$i29%##Q4O*(I3RF~KT&cJXu^cZiHX@&4N6R' );
define( 'LOGGED_IN_SALT',   'l{qfz=[M[fnEQH9xH>k|HK0w8j@x0r&BiM=wa*o%~ud[9tJ?(U6@=w2>bNEueZP3' );
define( 'NONCE_SALT',       'FA.(VllT~cDelnt-iP/3%b1@UtPR{#pb+y^XT*$wT6bIWdql.)wP44~RC}`duG&8' );

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
