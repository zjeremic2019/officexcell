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
define( 'AUTH_KEY',          '5j]{c-zGvqw`W+Q+1PZ %~ft[_]h]6ixpQB(GvFI^Xf]tUq]NE/tg+G S+<7PnVk' );
define( 'SECURE_AUTH_KEY',   '7cvoUqVe@E!`^<yNp9UOoP.;i=_@~5Sq;A?qizsUo:0,:1j6u9GOA-P Q-kC9b<m' );
define( 'LOGGED_IN_KEY',     '#Rf/j;BR1}DR}TpgXZ}DDz24 ^LgS^n4v)Rw@j^AO/2ANjus)6VB;4ms96N<yPUv' );
define( 'NONCE_KEY',         ':*sydL1X}}o3zwV)Noos[zTs}3J[K<}~r{T#]YjH[^rJwnE&U0C256LNiTTM(5@*' );
define( 'AUTH_SALT',         'b`gFq@xuwg:jBFl7yR$wd-_wYNYk^.I2!q7O-6:/:YGYk6Cf{aNJ:qp4?N8K4(;>' );
define( 'SECURE_AUTH_SALT',  'Wt&m*#}N=$ Z+$~0IrSN%o16,OAr&AnJ1mPUQXZzexQ@Aw?HUZ(ME>{ =GiuA=$2' );
define( 'LOGGED_IN_SALT',    'WZ/qirkSmBLWg$uKcuZ)CAjLN<MVm]+3s8CV!lD@9)7!rD}* qYGoy<L*x=E$q|]' );
define( 'NONCE_SALT',        'W@l[pO&*#wsT^8iv.i;o&<qP b+a2/vji(%c[rpE=Y}c-uZCEjOl4gZ,_L+IQ~`0' );
define( 'WP_CACHE_KEY_SALT', '4F5n`EzEUc[}0>sr|jjnBP?od|*LAPsoBN=.6Ma.pl^EKCns}[i;;J9GL{@Dg#NL' );


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
