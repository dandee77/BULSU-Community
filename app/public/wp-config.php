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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'JRAib)EMH-^3v%^we_3<1t>injfrv1GBln{eREOf[hN9,/un2294e(jtP,Do8#mo' );
define( 'SECURE_AUTH_KEY',   '?> Dd8+dpNM!8Q++U^(E;{; n;e!|DzWH<6C WxGH{)gvik)b&:4*cp;5r}QNDQL' );
define( 'LOGGED_IN_KEY',     'PF/ur?OQ$d4~o?)(&v(%@FdH$X5W3nHy?*{kKsDh3APb$T8hd5.w}K8{hheV1ZIS' );
define( 'NONCE_KEY',         'd/t5E)nFlmbSPILC}I;m[+466~`i~Qv@iG+02 %+iD^^$L1< /GDJ<yyS0i%2yJ&' );
define( 'AUTH_SALT',         'x5LEaf.hl5#g~3vCA>m}B:{Tg1S{(TtJDi3K:aW(^R-od8Xdv9Qw^Doch{u{tDhf' );
define( 'SECURE_AUTH_SALT',  '_2v}n,/_Ai~gIgw(4x1VF(apVl1n-Q]2I(Q4G<okt,*2jY8`&+tqfymK%^<Vy07z' );
define( 'LOGGED_IN_SALT',    'z%OmOMGy#ur:&8wuudV4GG.ej8bLZNtJ&$b)q/eqV;-[D89x|pUtgTRQsdAT%JUT' );
define( 'NONCE_SALT',        'zDfBKsu`Ts>1,V/yN(j{#-y0C>Y7(zmp8Kujpy9;[w&`,-Oj@F%U5JXQ*N=D6CfR' );
define( 'WP_CACHE_KEY_SALT', '&2BEwZl6Ys3}?}D*EnNqO.;j>AWQ]3vHIj[d12A#hu+V3|Z.!Vp@,t*aWJ),=*(V' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
