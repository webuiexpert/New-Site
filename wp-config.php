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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'website1-db' );

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
define( 'AUTH_KEY',         ',0S-{f!SB:b[bY XwM->Gp^!Z<Ly8LN`x9c62`l+eGz<[q|%wC85 q@C]7sMa!^8' );
define( 'SECURE_AUTH_KEY',  'ZFXG=nEWJ_{?RnIao}LX#@;&B<u^S8#qeG)+d S%btRb/vixX2-h{FK5%)hL*O5=' );
define( 'LOGGED_IN_KEY',    'P?jq4524`$P~H|d1Cf8cK:*rP, x6h1]ck&Y#Kk Ywy2q2?h#zi=y%q/.s3zF_@<' );
define( 'NONCE_KEY',        'G8<(dMU$2axY0<cTTYJS,0-<,xcv,&:r$xSUu)cUpVsd74r_wiE:1Pfk#&l{7(zh' );
define( 'AUTH_SALT',        'B#F~Eh2m.oI878/v-9sbni27%yl^&qauZmP$W-*8FZPGa@8OqY`;C:l,Cc:IEpwe' );
define( 'SECURE_AUTH_SALT', 'sEa7s,S?,LBcneJTQ+C,U(}{`Z0osk|5q:QF*{<e&|ZZX6h^jWxn]TmZ13y46^=l' );
define( 'LOGGED_IN_SALT',   'e??7GIWe)Y@h5d.7;O5v&,9mKO5Hmx>xo }W%Zx?GoTuy=bh<SN%![EJ!`h-l[qU' );
define( 'NONCE_SALT',       'R;$:P9O}VeCdrmS&Z<}OLIe|fL1i)r{faO:^/|<oeTFeCpD<gAh}Yx&M!QT-; fG' );

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
