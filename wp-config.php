<?php
//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings

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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wpilv' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'MK.=6&=16;x4swoG dzh=ccfY+&h ,ZLp?/kw?UWUCm8}SX;;*1i@hdvy$ Q>YY]' );
define( 'SECURE_AUTH_KEY',  'V_geNkZyr+),|`&WAMp*lk(gp-|`t:x2o0{`mm<0PUBSM0olv]Ax1X6m}L=Qymr*' );
define( 'LOGGED_IN_KEY',    'P(xa3>=rlh>Q@{(9vkRw3BL|l.x}2*D>URSIk=2FG_<9nNN:w1S;Yw:YK#S,=hbi' );
define( 'NONCE_KEY',        'e#Mi(?H%!ur^SR1k5o9aVpL~&|k<=_gGF@Y,@uk:@}nO4f; U0Va=cdn>2jaoQ79' );
define( 'AUTH_SALT',        'JetfnJZUM?9Vt.M8)]%Wi_MvX:<q4JrL7B?ebrVL%g:<Y4VHrm7onnxt!X31K^*K' );
define( 'SECURE_AUTH_SALT', 'DOqu _QP.%.rm=:n=z:`NKt%`(k-[d?Im!rg46>@)cRwTqCccJ{pq]A./QsB-Dw}' );
define( 'LOGGED_IN_SALT',   '4fRW!p(2-ht!~ob>0UQU-$xY#JZac[mixly0t(7I;(3 <dE^wMD@52;8f2,BD$t;' );
define( 'NONCE_SALT',       '11~)oSV6lf+Lz #L|ZH|unFCB`r5!VHKVy!9 f#bFX&TS-~+}#C6aLi{E&5uFt$L' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
