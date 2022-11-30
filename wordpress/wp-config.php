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



/** render */

// /** The name of the database for WordPress */
// define( 'DB_NAME', 'mysql' );

// /** Database username */
// define( 'DB_USER', 'mysql' );

// /** Database password */
// define( 'DB_PASSWORD', 'eGNaWGKboSk7IGtSaNYgDN75yJXF7CSg' );

// /** Database hostname */
// define( 'DB_HOST', 'klaudiatolman-mysql-wordpress' );

// /** Database charset to use in creating database tables. */
// define( 'DB_CHARSET', 'utf8' );

// /** The database collate type. Don't change this if in doubt. */
// define( 'DB_COLLATE', '' );



/** railway.app */

// /** The name of the database for WordPress */
// define( 'DB_NAME', 'railway' );

// /** Database username */
// define( 'DB_USER', 'root' );

// /** Database password */
// define( 'DB_PASSWORD', '98lNffHrZiRPZYUiH6kw' );

// /** Database hostname */
// define( 'DB_HOST', 'containers-us-west-137.railway.app:6547' );

// /** Database charset to use in creating database tables. */
// define( 'DB_CHARSET', 'utf8' );

// /** The database collate type. Don't change this if in doubt. */
// define( 'DB_COLLATE', '' );



/** docker */

/** The name of the database for WordPress */
define( 'DB_NAME', 'wp' );

/** Database username */
define( 'DB_USER', 'wp' );

/** Database password */
define( 'DB_PASSWORD', 'secret' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

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
// define( 'AUTH_KEY',         'put your unique phrase here' );
// define( 'SECURE_AUTH_KEY',  'put your unique phrase here' );
// define( 'LOGGED_IN_KEY',    'put your unique phrase here' );
// define( 'NONCE_KEY',        'put your unique phrase here' );
// define( 'AUTH_SALT',        'put your unique phrase here' );
// define( 'SECURE_AUTH_SALT', 'put your unique phrase here' );
// define( 'LOGGED_IN_SALT',   'put your unique phrase here' );
// define( 'NONCE_SALT',       'put your unique phrase here' );

define( 'AUTH_KEY',         'u0do6*I&C~Z~9i[)b242!0h0[12HvX;%25[H_4C!-3k0!/09(]zWdf;23(pE_9:R' );
define( 'SECURE_AUTH_KEY',  'Z39[s1Yz8!d~R5s2F9ZPT@UF*wx5J)r[P6CjsP8YAr#iG~5k6C+OLmh07@tkT!2-' );
define( 'LOGGED_IN_KEY',    'fIpc1t_x7|8wiXgr5UK55A09E+CsT[Tnqud(#JY]eeJbL:1u5w_ZSjp&_g0L1A73' );
define( 'NONCE_KEY',        '07*Y5iZB+Db34v]j9g&RT3wg]Nb*210tAcINA98w9SN)R|V94%Alo1al1/4H43]e' );
define( 'AUTH_SALT',        'z-;0yJkt#_:[5@|D933xr[yhp+0azwjlOs(kHZQaOjqsZ(16n2!Je)[|14%1_O]m' );
define( 'SECURE_AUTH_SALT', 'vl]M@l4[M[cAI5C22Pl+]2fpRP(25ZG&Q(2QB-1+[~Fb&LkSh5/@1x5(08m2-Ae-' );
define( 'LOGGED_IN_SALT',   '!d#81tS%GB~_|nQ4v-%4b4_&Mz0AQ2QCUS+i2U-8k+t%m+:|HrQX-wn0A92357EY' );
define( 'NONCE_SALT',       ':31!YT~6AlY-f*IQIu3zV6/W37f7:Z@@wM0;q2S|U9z0*1ebV45t6dvrzv;4%065' );

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
