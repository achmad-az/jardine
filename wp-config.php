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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'jardine_db' );

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
define( 'AUTH_KEY',         'X<*I2(z3QI=Gfd|#43z;7]#Ruf:JrX!Dcagp38z-.xe]D_orwc>ai7K^+gt{ZHlx' );
define( 'SECURE_AUTH_KEY',  '*/mga&B8C^+qAq7NfOwQ-Fyq4I0ZCXod|$A;d[xj@r]t(*N*PW~EHlc57T [:F]?' );
define( 'LOGGED_IN_KEY',    '|k9AR[HdPL.)i{tM_J>ueNrG[!E+k<?9fHUEIz[t2Q}Vct19ua9?WL.*hD4&F(pR' );
define( 'NONCE_KEY',        'n4]X:SWNNt>}B7n@b0{(>#v?G|UIJ/xv5NF<ovF#<}!b{p=F]tGQk8VUs 5f+xom' );
define( 'AUTH_SALT',        'Yqga*J7Ld749|~J^ 5K{oN?Mm:F<(X>Y$]F$.f7,)FG@x|6ge}fH!++6YtM3a,<(' );
define( 'SECURE_AUTH_SALT', 'Oqqn0vOk!feW0dcshANEmUUgG+D=b/;nMhErzq.QM[!I/}V* B:{Kca>;bu9B$LX' );
define( 'LOGGED_IN_SALT',   'R~(ds 7#LSh ([WNP3|0`B!LDicpp4D5B]d&VH1Vg;==K7q+JsX[,=RM?5#Cq++2' );
define( 'NONCE_SALT',       'LW;jZy5Q#W^+BnNvFoOsNp|U0gy_gpsZ)<PZZ Nw. Hx~M~8-:jbd#D|%zu +7/`' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'jar_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
