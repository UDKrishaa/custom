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
define( 'DB_NAME', 'custom' );

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
define( 'AUTH_KEY',         ';T?TZhnN!i k))UYC:4/2&fxJxNE4a!I%r{Yn*2m/t((>|I#,DKH=)]#h:<w|{tc' );
define( 'SECURE_AUTH_KEY',  'p+hGsRl>>+!Ny9Zb$[3ptsVrI:snGH8%ErV6sroy7RF4(T|0iG #=jvlrON166.$' );
define( 'LOGGED_IN_KEY',    'c2[]a^w(pMO=#U->e3ycLG^3~-oe[8n>_^/?%7SL-M@PeXSD)B,b&4fp#?g.]MS5' );
define( 'NONCE_KEY',        ')GrRyemZL_~1yC~K-~LzmTrW:99&c8s],d6M[iQ5<I!>uH85+r!_>oOPBu]*h1;Y' );
define( 'AUTH_SALT',        'q%H9A7Ja~v@.b67j59W.PjHA2WrpAxd7R9LtVtl?Fzt&pHpR=%Q;zkkPj =fXr@A' );
define( 'SECURE_AUTH_SALT', 'Dz4vy#qlY3Gprg`(,`E#X^AWv0?WF/M[Oh0Z[Jq=80-b%*rm9SxlDQczJ0HB[u1%' );
define( 'LOGGED_IN_SALT',   'PjZ149eu$FW`El7!`Qyn%A];Qv&uDcJ*M]4g.>wz_c?iI6*5=*hx5UA6-C#(09b}' );
define( 'NONCE_SALT',       '+/.^s4Yk4QV.^IMyk?ko9B4vXlx12_U_i7othnyW3MeMO0Wwhz1t:k()7U#>*s,J' );

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
