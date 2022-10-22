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
define( 'DB_NAME', 'dev_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '`T-[;[~pn;>KXA5HiU?z]Ja}4XTK1zQJcPw#l=2Kc ,M;1xTL}( -&%3ocHcMc?n' );
define( 'SECURE_AUTH_KEY',  'K):A$: ok8.Nx?fWqS?,7aE!c6Uga<wLSr70m=LK7`RqdjticR*itC~1!&#{M Sg' );
define( 'LOGGED_IN_KEY',    '_~o0y@E?4gO(sMK4P54~g 5m!TFT0b@$.e6mtboKl[n^2PzCS,en*^r=K8w;Wf0y' );
define( 'NONCE_KEY',        'e%g?ag?$jFmQ#U3{X#CO3j1=+BH)&c[Ac-_~;_RtytcBzw mR)ge_x&~`e{:V<L5' );
define( 'AUTH_SALT',        '^8]gk9r?l}a!lf{4 1+v)]GF~XK|,z$R95;0lcHtP%NP2*y^!p:@vL<$F;R%*nfG' );
define( 'SECURE_AUTH_SALT', 'OS!Q5H6,4zxDi1~N*,}Sf:1=@L$E0l&cAHXJ];GQdqGj&T8E*Znnv064Sx{nITea' );
define( 'LOGGED_IN_SALT',   '5?5|%qxZ}oPP&+bJ#nk& uT=B*Dupe{:3e9Gt)kTz<i]POn@5<NDh2IOF|<=K%rz' );
define( 'NONCE_SALT',       'E(r=2{7t<yl{m.ynmfs#MQ.(no7ZVL}r%$:Y_i DrSmv54Y)lsvhhtdSt[OMe,Ot' );

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
