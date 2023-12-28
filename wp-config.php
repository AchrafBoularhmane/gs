<?php
define( 'WP_CACHE', true );
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

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'GS' );

/** Database username */
define( 'DB_USER', 'GSUSER' );

/** Database password */
define( 'DB_PASSWORD', 'GSDATABASE' );

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
define( 'AUTH_KEY',         'vw`36LHy-*}RP{{E,`)Y^9M?$;kG.l4XeLGu1eu<3GcG<|GQfdX#G)l^23!&/}2%' );
define( 'SECURE_AUTH_KEY',  '8LdIQ505Ox3AKKl6y_xl?^eyZ{XFjpFwa,9cI$)Ms70:dtZu7N8s cj?Hb4vHM@W' );
define( 'LOGGED_IN_KEY',    'A.[}*idj.rE&I,7RrPBq&mb]Mf?Gs|FsJo[ V.8Mz4)s;16wBYM0(B=E2pT?rR*T' );
define( 'NONCE_KEY',        'rhRTY}H6yLwEk,=U8L;eh)r7;++yd?<]>vR?d`kG=V10c)]u~)3C|DEb=d|8r,P ' );
define( 'AUTH_SALT',        'zMT3eG|f*1*k%0*Sr^O!I+!OgbpAYh<?9?!wB)b,2+J8>awOo`U2OO6NsIq/tc3n' );
define( 'SECURE_AUTH_SALT', ' zV.J,?<&.Wezr;jZc0]:V+%(T/WgH|{|vXWk8a< : B.d+~)hu~mh]%~LU5h:A,' );
define( 'LOGGED_IN_SALT',   'CE3~Jc,rq^;4nnS}{(F[43?whgyxa3^EXY>_Q78!sV|6=$PhnJ:]|qS_9oeyhvHA' );
define( 'NONCE_SALT',       ' h)gQB:uLPK*nsWiF+!D_O#G9$}<a4(ofZi[cBqc4O/24Ky/V;VX+E<,gh-XqWBS' );

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
