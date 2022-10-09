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

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'www_lcpfte_com' );

/** Database username */
define( 'DB_USER', 'www_lcpfte_com' );

/** Database password */
define( 'DB_PASSWORD', 'www_lcpfte_com' );

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
define( 'AUTH_KEY',         'qS5xHDoKA*ppN`bpQ^o]}.IV37m{!D&D/*Qg!AO$.i %1b*q.)dRL*:rtD|s>Uq_' );
define( 'SECURE_AUTH_KEY',  '*)KrI)Vv9)8H}X$Pe]mM:zzjed$x4]Kfy:v9y1!G5,BRNF6}oZ%UB|gq`w)<Dr`/' );
define( 'LOGGED_IN_KEY',    'Ezu:TmEH^&j1{fILf+9yJ{FBMI2U]mzvbWPa)6TTv?KZd@t)bLIyN>0tDR2#{*h!' );
define( 'NONCE_KEY',        ':e18kE.QSG@Yyrm,668N^Zu+it2kHa,4~v=EC|m;,C pT.MMPo0PSwsu%V-):X~m' );
define( 'AUTH_SALT',        ',@2E%bx_RNNxfNg*f];+L9Wr Y|~I|mpD)a=+T,EK>&.^=ZA!3HdJX}>4I[+DSvE' );
define( 'SECURE_AUTH_SALT', 'f*Mtr^|fVu(_nPyKw646Z6u ANtc)q<)I8Wg-~p^`aV#15v`h-dnjvTj^5M!?),y' );
define( 'LOGGED_IN_SALT',   'Q-;Umj$9{EGuqGhk4C72|j.1pnL*,TbbL?Y;se;:0UB{hL/3X|`s>D]#8uJ=`V([' );
define( 'NONCE_SALT',       'I*Llw`z{*7HCbkZ+!niw?FTR{P:t_]xY!iPy1y87Ppd0tsFe[cM?EY/L.MeMAn}>' );

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
