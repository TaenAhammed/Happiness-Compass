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
define( 'DB_NAME', 'happiness-compass' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'ZB7`^JI6P&@8L 817X/h`#!ql-x;QpE([xWDwc%&osOJVk}4n59{h~uOf=``I2{;' );
define( 'SECURE_AUTH_KEY',  'WHq%x :&k=4&,<aZ2X#Z`#-]?>#jV 8Zfpx>6 JY.>!C-8J=K}1%6|m-}qLW!OR2' );
define( 'LOGGED_IN_KEY',    'g7*UNq tBci*~J8=9mP3~ZR)q!RU3+|AJUOs0a>M,9Y?PZgX$kCANGCWsYWU]C[V' );
define( 'NONCE_KEY',        '8,22c*P;DY9P9uMjQ.3m+vDuKGgmkmT;:N?Q!ur=:%`uS!M|GH@O,kZ{n~y5z4(i' );
define( 'AUTH_SALT',        'M6<3163HMtk+JKW>*[(?2!0.,q6c:Zdo`Mq7!t/i$g a{WfW2IbCW].*#5J[kj=&' );
define( 'SECURE_AUTH_SALT', 'z5ir_ H_wU1f73y.+sHcuX(x{g,7O%0#Dq1~q=xy!-;MR09s$#fuKe5i6O3$ lu+' );
define( 'LOGGED_IN_SALT',   '.A`@3}onk`]tE$6kO@ZfCHF_0,8+0kh#fn1Ss&7:Y>),? {PvruK~@Q%}.F`{w<c' );
define( 'NONCE_SALT',       '+G$o$,]58P9S]>,;fx,cyxGPu&s()@sKH^!A|eoKZQ/uh@Edr!F-=(gcb0|+0mQ(' );

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
