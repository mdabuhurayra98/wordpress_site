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
define( 'DB_NAME', 'mannan_sir' );

/** MySQL database username */
define( 'DB_USER', 'mannan_sir' );

/** MySQL database password */
define( 'DB_PASSWORD', 'W2Drsy2ljTS41TUn' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '$!*HkZ5G5&8=F=.#f-~_%,A@~6KB5*]v+s )5*VP?lrPI*,SVK=e7uj%u/x)ejq7' );
define( 'SECURE_AUTH_KEY',  '8t7FHK?9[u0bNa)DRbqoE`cNs4 |b3hg%/D1G5*kx1oNU~nBlR,~p%1)ANyO H-*' );
define( 'LOGGED_IN_KEY',    'C%S0yUk@  r[AVc6y|D$k:TA8ca4{mO>o@7OLkaJO$F%i>kYvlx{}b7N|46l8hT-' );
define( 'NONCE_KEY',        'm5Xuls(%Fj4ho#S>RvFUkN;}/Mv!Mbiy}H$qnps}v`Udtx>]_+ ,lrVAzQs*7r}l' );
define( 'AUTH_SALT',        '-q3z5}K;)b ( R8eIttDQn>PMk17 5_:043(D8!sp3XbmEZXjW*xb*d@`nMGgO&X' );
define( 'SECURE_AUTH_SALT', 'dA+L!WEltQ.X_K;nzi(.Yxrv`S/,z2e+;~X9eQzw( VM62vc@=wQU!R*eA$6y%?p' );
define( 'LOGGED_IN_SALT',   '{~aWW95PJ&!1A=3= uc%&B/7Hq;|40gc%g>vV $gPQLUzab1?rbaqx7F][,cm)+v' );
define( 'NONCE_SALT',       'j+id%8g?MokSyI`$VvC y#:9c%C)pr/X!mOua2&e6%`3My5_Sj;<QKc3bepK$rGw' );

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
