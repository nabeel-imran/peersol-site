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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'hi$@S~.Mw]rwt*4&B7Bm2#Zo<x#H@vDftQ,8G>2&U2zs3nyl,7@O %ZMdd#:VLyV' );
define( 'SECURE_AUTH_KEY',  '}!Y[;(:L`}E2I#`,zVda9NPB5{TnqcVznM4EF$;g.bj=Iz<MD;:>P/Ry_9ak{|Xy' );
define( 'LOGGED_IN_KEY',    'h!,pe!YXH#apkI0D. .#Ow$75Z_h2hKpcip$:`Dj%CZ3}mtWFLYX;Hq<B{De{nc`' );
define( 'NONCE_KEY',        'q1jd8&xjfgv?ppBJJ`p?+RdbKHyX#SZH4cI)H-=>3i<m-zv&CkU#Z;TyUtkVLB8T' );
define( 'AUTH_SALT',        'M/,1+tvmXRi^Byz=E|W[LK0;qh~|f]AVKgGO 7OSeA(553jm3<X$hwh7@p3AzrRl' );
define( 'SECURE_AUTH_SALT', '(U;All1-#0&r]<6*JWtyB})i~cK)+d02aj#.ra&&W#Kv.=iWwT@o86,R]Vs&78M*' );
define( 'LOGGED_IN_SALT',   '2mlU^fhT^yN3CUa%=y ?2Dkv@*ND6l^d_8{]nz)O%K5sQTnoE[>2mXh(IKh&zA[6' );
define( 'NONCE_SALT',       'id_8D$#J@!M^!>/^4ois$5Zyg7y|[12O8UGpPycWy|Xs?-(5d[I~FLNr]FAACbZ&' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
