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


define('WP_MEMORY_LIMIT', '64M');
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp' );

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
define( 'AUTH_KEY',         'gPW$EN*V}:v.hl{+N>8,|,onH2/<y1bH_|N]jWuu%<]_n7/+X)<Z3yMdUMe9hCfM' );
define( 'SECURE_AUTH_KEY',  ']]O3wtTcL#{sPb3Inx.:HiNJogVy/UKGK;5LsnpvVg?w_EGRk=RV7Fp+DmN1tUre' );
define( 'LOGGED_IN_KEY',    '5FXH0NBS`bO+kj+VA)p*nOp`z=O7*1N Csr66g?4ql+KQoPt~J%V Sj~<AT{swK-' );
define( 'NONCE_KEY',        '-b&}Ko+NX,/C,Kz#,M:&`/c.UAl=wcJ2;=_?zz_w^]Te2;2LC}&OR!<ztKZRLzZs' );
define( 'AUTH_SALT',        '{Q26m9./5OL7$]h{>QfS>BWHpnghYiKnMPXGiaQcANy7%I>jceC$k!Apr{T;>n@R' );
define( 'SECURE_AUTH_SALT', '1@wnO>//)*RlR>G,&Z4!j 9v^QbW$q15Y{8~/+wT)*#C I!{QXk1(,gRh7eo?2I8' );
define( 'LOGGED_IN_SALT',   '~CpcL/=F@h:I<C8Bkq>K-7uf,?xu_v$q2Y/{!Y{WuePk4j]FDhc9n{piI <xTMW1' );
define( 'NONCE_SALT',       'B6MVaYtE:`)^b1%URN#PCDsrTpJ8! dXu;(:QY+5/3D39)!|v;0$}jUq,i>+O8W4' );

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
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
