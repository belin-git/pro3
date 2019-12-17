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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp3' );

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
define( 'AUTH_KEY',         'i%3wv99&~6e]QSAX+A%5LkxC}qY^LXK^`F-6)7LB7/*?#F_#0]]>gX_c|f<$q-7,' );
define( 'SECURE_AUTH_KEY',  'Cozh-l>%=wm8*&yrhc^b[yx`x6k>tg]C+/q[x2CJip >U6Ephw[}N!Ey<5Ve!OWs' );
define( 'LOGGED_IN_KEY',    's[| 3A:DXqzzsxpe5CZ/=M}xMXZFn|a7qyDy42Z }gSS4$:0 _&iI:7TZE8s,qwl' );
define( 'NONCE_KEY',        'ee 5pmFR4MktX9uk);~6H4r1Sm8|W?7Ow96sQaooA{^<=m7O_Qf}/Kansei]YS_t' );
define( 'AUTH_SALT',        'p=S%~hE#gSMX(3UVK_l}NzA>)SNzV:3NIy)C`oek+]Ds+XCZ{KCzj?%3ewlh$d#m' );
define( 'SECURE_AUTH_SALT', 'u6H$wt?8tRNl7,Iyg}HU;:O,L()}ro&g!hJV~O)oavGS4}m=Dp!ynv5zS%oY78X6' );
define( 'LOGGED_IN_SALT',   'q9Y[,/b( $23~p^yAdm.6,yshOo7;>+r)awtXB{b#.X6K_#zs3g+C}$hGH5N/6!u' );
define( 'NONCE_SALT',       'sOMR]|p6UbC&EHOQDE:x4uH4>~<n5X=8c3TtfuTH.1Ic~&!)?:Y27P6h95[tq[@Y' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
