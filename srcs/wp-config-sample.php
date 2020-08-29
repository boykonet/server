<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress_user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'gkarina42' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */

define('AUTH_KEY',         'y{(G3=D6bP1Qt8m,~%6*l@&.~*T|}CiG_P.xp+2!IA,8>}V =Ylhi}4ud>ejz=rZ');
define('SECURE_AUTH_KEY',  '5{ JR!vVeskPJ@J4r+M j ?8i$+QvtGtq`e!o:iE`DA]AY/?9hM{r#:w_#]MYg^Z');
define('LOGGED_IN_KEY',    'lQ%K[|4ZEl;^0@g~-n2VLXnYg*bH73K^d(l}WU--D8tr&3VzBNxC%3sd~SM8=!=^');
define('NONCE_KEY',        'Fe($:+o;l$L?Id[ haf@Q^>wD1<$1Tvy>m-|$,e33+|hBpF]eUd9krOw/=+5]S_[');
define('AUTH_SALT',        '>g&@J(m%y3D>w,ypq71t?XSMITpoW(n;hQ.0>8sV#s(6#t52734E]JhjU.iduB>`');
define('SECURE_AUTH_SALT', '62V;r3Xa#6I=/|% AONEf#lzr9b deA[D&@] LN *-Euxr|p2J 6-. 2f!7`0A%,');
define('LOGGED_IN_SALT',   'PiJ0)~f3ch>o2}(EAt,b-]@+wr{O=UuO(CvFib[%].d/|k~^Pk 7.|YjBZq>AmdC');
define('NONCE_SALT',       '{Xj-aC&m+#^h{v7YjD+/cyJ$?ao*9&nKmH(5RRCy1rYNsyP4wUF-RmZ9^ab+h.;+');

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
