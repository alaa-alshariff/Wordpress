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
define( 'DB_NAME', 'Recipes' );

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
define( 'AUTH_KEY',         ']wQF=<y~(vmdHh){+ILAjcH SKuH2H7m:S }MAwno13OmKZ@kI&`g6V.EA!t6]PC' );
define( 'SECURE_AUTH_KEY',  '[)fk[ZPY4g(coY9(;P4]rnvMd%aZ)OT4j,xX9-ec8_D]r^lDg#yE?+B;*=@>v1>+' );
define( 'LOGGED_IN_KEY',    '.H a<!FM+7{Gv_H]Ac[Lj ;gYFd1PUg}{<%wr.o;&6my:g_tj4+]W_d02<~M4X,M' );
define( 'NONCE_KEY',        ':K.SC%.#n)u?OVA%6mY9msto5bYsed@KYiwpbW.w.)&iS%I][cJvZ/fJ<!d2>)!w' );
define( 'AUTH_SALT',        '%z},xnjFTux^6+Cdf#zwQ$KpXR:Wih1iq)xWZ2DROnN1fs3qz#Qj7P-K#4L&>y59' );
define( 'SECURE_AUTH_SALT', ']}1RCQWu,A_:wlq4Oe=-ySdm5:8K1aQm5*tyb7zz^t$WEb7+j/CeTAS|;T1e#6@1' );
define( 'LOGGED_IN_SALT',   'o^m/8,=#)wY9<=t9*Wa8-VOP*1lRKTZ3JEc.um1W{y./.A jh{;0b$Pe~JOYi8:s' );
define( 'NONCE_SALT',       ' |9C$l4;*|^89Q^/i~AXc#(;{d}wzkwZVlRalozZ]>:2RQ:vD)TDxn+2ndN:Nqhg' );

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
