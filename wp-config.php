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
define( 'DB_NAME', 'hike' );

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
define( 'AUTH_KEY',         'X;tHf&`3b+p_-3i(V%. ;rc^CT.0<MjxCMs3qNYnPuk$*yk~w4]FfHM=>I7uSp#(' );
define( 'SECURE_AUTH_KEY',  'I]nZh,!D8;rh`lV_M$9t5iJsL)WqcO&!>_~}3w=MT!BL#=K U]u0IwsL`ej*d VQ' );
define( 'LOGGED_IN_KEY',    'yHUE|YW/CDgNG:lZgD,~n0pRNvn=VzJD1U5d1^E<fO?Rp7IkcQgedY+7|d<SyS)h' );
define( 'NONCE_KEY',        '_!DY[h&<Rt(`H94 Y,AVj7G{8LW5rMzrxc&Qqe+LYSozwHx+nP_}rYlv;#S&:-m~' );
define( 'AUTH_SALT',        'E{DWyh9lib}j=g;X^r)o`J .6}q6eE;!v)XUXje|CD5hhC]bW`Zd*WRs8cnR5c>p' );
define( 'SECURE_AUTH_SALT', 'fL8G;e=-w+;Sj,uKq>9UNThxr~!1zO$U#Qq`R`_M_gbyp2}<$e39^Fp*Tu*7D$=^' );
define( 'LOGGED_IN_SALT',   '|n$]93NeX(vv^Vq2}nQoYjl%t o?XE1e2`0U7$yf.S:;Pb6H5!XXmpYPGA^R6??$' );
define( 'NONCE_SALT',       'VD&F;RDt#P]=YUqq];hpY;=<&A.D!l;I4f[NT{sN?>rkZVQ^=pt?U(xYwwS?BOM=' );

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
