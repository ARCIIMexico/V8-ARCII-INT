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
define( 'DB_NAME', 'dbs6704964' );

/** MySQL database username */
define( 'DB_USER', 'dbu1371245' );

/** MySQL database password */
define( 'DB_PASSWORD', 'LUISgamer123+' );

/** MySQL hostname */
define( 'DB_HOST', 'db5008054855.hosting-data.io' );

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
define( 'AUTH_KEY',         '%tOa_v/y;2Gh4U1okUbq/4Rov([~PCb >#oi*u>!#aXs)cV`KrPRbBBCIB]dU;@H' );
define( 'SECURE_AUTH_KEY',  ']cH(z>-2?6.t&|c_r5OUMY=G4W0soFB{M8t55]s~ljuK:n}:9zQm5Ygf2nY/K 2R' );
define( 'LOGGED_IN_KEY',    'y @z--%S-d*9#3~U-)y>[hD0VVId/)}om24v>`wCLY5VN,Il@:^CTKXC!hyLqE!u' );
define( 'NONCE_KEY',        'j7xOt;hEhS<r,@SI53o:*A8%:LA<.@kO/9x(i`f4u_yv5{(29r6iv_wI99ql{B=y' );
define( 'AUTH_SALT',        ';39^w1*,C.ZU)Jn[ZOu?[j}&D>3LqngV3W+o:;BM39Nt:3=4J[GTfqnRBl,,%l$;' );
define( 'SECURE_AUTH_SALT', 'wU%YY=vfZU6}<sHy@4Yj1aiAyzO8Qt%7cV?U-Fp#OI@JNmco|.#9P})=#KQnsm~~' );
define( 'LOGGED_IN_SALT',   '%BX-D$@M$7!X{/zTR4va$8CD^V .D-:/ZnR/+Cl$wjD/=2~2oOP2B;1Tsb}z^(@a' );
define( 'NONCE_SALT',       'ht[;sUH~<mVimOw/;kqcP1l$J<;@h:e|Sc4,t*?0R&]7($8k36nVXc1YLHT0dV#o' );

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
define ('WP_ALLOW_MULTISITE', 1);
define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', true );
define( 'DOMAIN_CURRENT_SITE', 'arcii.com.mx' );
define( 'PATH_CURRENT_SITE', '/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
