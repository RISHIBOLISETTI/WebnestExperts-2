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
define( 'DB_NAME', 'webnestexperts' );

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
define( 'AUTH_KEY',         'wSr+Y1c&+XQ?u_UP 1oZ0Tq-qd1aY6oDlNn^1,nCV!C2Rp XOG)]Bt:B]aFvx;^|' );
define( 'SECURE_AUTH_KEY',  ':):e=W3xykJUp*-M<e t4t%n|3T&pU:,&&3)hS5Xk[aK-Hkr!t+Y:h1)>hx)aPV,' );
define( 'LOGGED_IN_KEY',    'p9FqhYp8rJ2Iuc0]&>2>>TDO+ckeQ9v/q(DQP[6<$3dHa1]#AvMNma7kHrbSmc)c' );
define( 'NONCE_KEY',        'n0h2PKN<@Tc~$?{wzUDAI66V)%/x`o?H$@GnYS^BRafU!]*.-Oc5-l*#R}q!|$LS' );
define( 'AUTH_SALT',        '=D.tKOwb*:!(6|*R*Y[Ui`m@+SR=wvuAObLMs;/i4`laK%mkmdW?)ZA}nWYv`L%`' );
define( 'SECURE_AUTH_SALT', 'yFPFZ<_.yj?FeF-]*_#LXmLFcK=_KWxvs?k&oTh%[UAK8F>)O?o-q$v9t(|mHD_z' );
define( 'LOGGED_IN_SALT',   '~s:l-h#59$:%|zv>],CF:PtHH>@jfUR01rgDuOgZr]s U<u]>_F+}/^E8Oat2~3y' );
define( 'NONCE_SALT',       'cUAnZz(]SXd;I2ahE1Rad!*Lm3zG1~T=6,7Oz`<y}vAc1~Is5K@+pThiyYq NGlX' );

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
