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
define( 'DB_NAME', 'fictionaDBdpm5d');

/** MySQL database username */
define( 'DB_USER', 'fictionaDBdpm5d');

/** MySQL database password */
define( 'DB_PASSWORD', 'Oz7OIcWoiz');

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1');

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
define( 'AUTH_KEY', 'm*mx2D*+<HTP;PaqmQcYjYnzv^n@>,0,0}7YEAQbrfu^$<v^${7>,3Ef[|0GhGVR');
define( 'SECURE_AUTH_KEY', 'r,}Zp~:w_S;DSeHWlhxds!1-4KV1GCSdGhs_Peaq*et.D*{A6L{AbqWSit;x#5L#6');
define( 'LOGGED_IN_KEY', 's4z4}8YR-1:9WSDOGhZlOHhal_~p-x;91[|COGhZ8VOohsWSp-s[#w_-5:9uq<2{L');
define( 'NONCE_KEY', ',{FQ3Bbr4KGVhVkwo@kws~8@-|4VFRNYzYokz,gv0G|!0CR#51DS5WlxSOep*t_2');
define( 'AUTH_SALT', 'mu3<73I6nuqA.;]AL2ETPbEeu*+JYk,nz>,3r}BN0}7NoYjyv,jy3I^}BMQfr84');
define( 'SECURE_AUTH_SALT', '8~9aq*et.2;q*;A.DTiSet_l-x_1t;DP2;DOe{MXnjIjy.fbn$7^{B7I2Iiybmiy.');
define( 'LOGGED_IN_SALT', 'v>}<6XT6Tqr$q${<Eokv0C8@8JFR8KGRsVgws@z,^}N}B7JkB8JkvYRr@z,St~-]p');
define( 'NONCE_SALT', 'S+bXnyb${7yu,Q{7MnTPfq{qmx<I.<6XPITqi84RJgrkUNng@>!kczv}|C!z0}JC');

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
define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
