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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          'G39{-p^1V-F^B{. gw<xX4W;,+R!=15<.3[qd5c`67g0tQO,0vgz9#2q~OPVG2R0' );
define( 'SECURE_AUTH_KEY',   'hBB0e57fNmJ;-**t75Hkf-*x{ip]]Zy&c^H&BbK8KTtF^w@C[)JxEYg^YTA@^TA2' );
define( 'LOGGED_IN_KEY',     '/p!*^9VMZxYtk<PW7? KQbw7OdQ,>*=B~%ZqO=T/9g:~pjq;OW_;F!a.Fj054g0f' );
define( 'NONCE_KEY',         'J$& )T=3?3-Vp2kI,3S<@/ZF8Z+wWTy#eO}#X$KKyUSzx,O}O!-3O{hrLF f!ooh' );
define( 'AUTH_SALT',         'U0%lM wo_JOH3;KnIV8mw|LKOD)Lvcp}H]?k,OyIkp)L8Af1x:OkzU$qyW*.S^^K' );
define( 'SECURE_AUTH_SALT',  'S2&MG^8~,xU<qFWAZ T<ne.BGH,.$)I/<k|Z^s!203BBLb7$m6PoeUSXXR Boe.?' );
define( 'LOGGED_IN_SALT',    ':LieOW?&8~=S/O`vyAy8%tTB=6R3K%hLd8D{ouLqRvkKV!-&3ePa1x{`|f<qHVXI' );
define( 'NONCE_SALT',        'wG*bi-;je3ai30:+T*vK*CozfWifps:X SD<<8y|G0cOQrzN5H@4.zpD?Qw-O0H$' );
define( 'WP_CACHE_KEY_SALT', '!DZAMj_*=Y! H33W^ 8B*y(_ ]jW={T)TeTfuW1K:2U(3|gx!ogTUm51}!?//9w^' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
