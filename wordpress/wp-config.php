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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'najwa' );

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
define( 'AUTH_KEY',         'AJI78d!@uv%&>_y~!KT@iLkY{#6R*T%17`q@.5.y]FQlb7LaW# WX4#4.>%Kkn$#' );
define( 'SECURE_AUTH_KEY',  'KR/}1rKJhS1Nga0xn-yWa$G+h)8k09q)$D.%6At7@bQnka@nhTDE[|X(&>0z_`nj' );
define( 'LOGGED_IN_KEY',    ' S1nH2Hjo1[i)71OGGfvMAV7)R@8j33U1durZbA+bnRN}x]){MaMV:5$}mPf`7Nm' );
define( 'NONCE_KEY',        '=$#k5wqfN`!x)2Cl83a#R?7DRX/*}[>>e{si/oYwdZ1#sEn*BPbF/#8;|_c2sURJ' );
define( 'AUTH_SALT',        '+^K&:[a(-6|xfS=) :i}*t9#x`,d[-dz#}V;=tc<kQ#((hM{i4v$~U{I69iWBd+n' );
define( 'SECURE_AUTH_SALT', '2&U?>61>K,utv|uQj==fo1j5] UnPk|3e`U7[pBDISydtHTC1N06?w1Mmw{W{w~ ' );
define( 'LOGGED_IN_SALT',   '~7cn(A.yVlHYV-qvO%$![piGo_wM@2.k&:YO5!gD%I8J]Lf%Er-k.YY;|??ve:o2' );
define( 'NONCE_SALT',       '4iQ^y)]&|Lk6 q2m.HAhQl,f|ww_c9|}9<Wg{tI+~RnD8I6d` $/]q6vKL%RQv0C' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
