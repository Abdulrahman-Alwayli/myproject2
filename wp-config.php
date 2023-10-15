<?php
define( 'WP_CACHE', true );

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
define( 'DB_NAME', '2sec' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '{jaY*}o`!AFLa_O!Q?RAu.GMkyRL=$B!AfeApO<4m/ i7V|~;YP~{@molOHzFn%q' );
define( 'SECURE_AUTH_KEY',  '3=XMXJ0JQ[|7E34ueB`%S2r7ElQd^ns,VCEl2r#h](Z&kX*H=oP_b?4YW}[bW26_' );
define( 'LOGGED_IN_KEY',    'd7zf$@doeE~<Gwwk|oKD?<dYV+<y&3FJg8GNqGyMJ@H%$bE4*!Jt$X{CuP}>mK@B' );
define( 'NONCE_KEY',        '1hCX7ByJlB}>Bjk4&69oV!I~TK70H&S*#U&)_>T!35/H }XYXGVsNWjg46d>KUGe' );
define( 'AUTH_SALT',        '&tUF0yi6LIxR[n-}2:^}H+{xhts*FVY+jd.w~NJjM0S? >&zJ5Sd&ub 6LQ%bB>c' );
define( 'SECURE_AUTH_SALT', 'eS]*CF]|Tp![aP5$Plp]6#dQnc+xRv1H!rp(gHW1b=N?`0FQ:9T?SiHiNxb/2,=C' );
define( 'LOGGED_IN_SALT',   '2x>]hW;3afB29|,mbw2!LR3L`Ge9xk&%7}$E#*{g|bH_CerE-g 22cHjiZnHTPJL' );
define( 'NONCE_SALT',       '1fScXgm((C*4$TN,K<!].Et G7Tls0@V#+J)dG}(/|dJL<mf>w/$%beJFzsTR| w' );

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
