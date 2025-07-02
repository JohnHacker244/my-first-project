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
define( 'DB_NAME', 'john-database' );

/** Database username */
define( 'DB_USER', 'j0hn' );

/** Database password */
define( 'DB_PASSWORD', '@dm!n_j0hn' );

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
define('AUTH_KEY',         's`|@m$4T06Oa*Jm=f4FM1bgYZFj<rfFM1-gAK-1wJ1!LfPj!G(-|o[(p~}s&$2I+');
define('SECURE_AUTH_KEY',  'R<JKzvKwZ<azO8#*z~MX]p,LB)Wb|M+X0X6%M}%T}_l[pLm&Xvp/0j-r<EedV#Bv');
define('LOGGED_IN_KEY',    'GpPRk<nQJx+Y5nqoz6NY@-W6ZGuoA|%2O=&Q<G|6{&jOY~F6EczYoB4/k8Bd0vhT');
define('NONCE_KEY',        'K=yL+>Kj$@4AvAOM)Tx^e-kgxOo{j>ZnB+WZk_|Z%uJz2Y)^W9Q^@tAe|?8o3m|[');
define('AUTH_SALT',        'M&8bwr=Z1RwAEw0^GR2FsMb|TzWeay9XsRGscP/#fIMWD}C-t$7+=1F/N3&9l3jF');
define('SECURE_AUTH_SALT', 'Dd]QBt&Bm#9iOFgq^%@ApNGu5(l!2j4.<9h4jG9Vv$h5O8)yUs3GzO5|Wk[%eW)-');
define('LOGGED_IN_SALT',   '7/x[?LHKU){SeR`=-}KD(_k9A@_u}U3KO}KULK=1vBP+7uOQ#=*6~`+h3-!Z@]Z-');
define('NONCE_SALT',       '@{EF4xo6H1D)fU@ZCWe!Cz-QE&_ZTrsG>Tgfv<}#qZB9j6&Z0gJ|Fe0hDOaNiQWh');

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
