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
define( 'DB_NAME', 'appn' );

/** MySQL database username */
define( 'DB_USER', 'sabbir' );

/** MySQL database password */
define( 'DB_PASSWORD', '1234' );

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
define( 'AUTH_KEY',         ',b;e$(Be%c6F!J$W7F$Dp><_>2Gi!36A|^a$8d/8CK*;<U`Hnq-qp_Hp/y0~d/it' );
define( 'SECURE_AUTH_KEY',  '&j{Xo8 t&x|Ii;Ro$j5wfFx#6[FrUKZb|8A=x&C2AMFI/8wqy5h#krpi}W|We)06' );
define( 'LOGGED_IN_KEY',    '2MbLmlWVe`2$MGb0/W:GSM@w7{k0(ADTm`AG<^KxSe|610dpWVmL dVu >.Z5&l&' );
define( 'NONCE_KEY',        '*=yp^]McVRNzq.Jq8Fs=!O9T7=U>;I|G:baiB:l9!w[RXfNmbU0rR@Y$?^<<`*K(' );
define( 'AUTH_SALT',        'a~W{,_a=SfIenD>yR[`=q$O-cB`^(8m!X{~l(Q@{}d:djd~I`m*EIr=BHVR?^{#7' );
define( 'SECURE_AUTH_SALT', 'pH;DSb+04*P-Q_pH(#sP6/|=OEF`)L>@qhSRw*@(0Z_)so)_+K4~Wxw*OnNw[.RF' );
define( 'LOGGED_IN_SALT',   'XgU|1Hrzr-nnXvUKUv+yEP@z646y@|{kSxln<g5x$:#aqPqY`dV+ny4%l8oqv[I%' );
define( 'NONCE_SALT',       'Y<^m|!eD($|iV+^DA;P./-gM-7ytA/h@!j=FfBT=(=Gw`E6xqvwF*5T(]E<*_U v' );

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
