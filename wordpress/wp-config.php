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
define( 'DB_NAME', 'healthiswealth' );

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
define( 'AUTH_KEY',         'jLmBz3poI~_8f.:<}e?G)(K<4=<J`gJYH8jQG`<W8lg0xj=1Z_!mg(#o<:ZEVcI%' );
define( 'SECURE_AUTH_KEY',  'rNCAw6pJ7:B1.b6 Z%6@DS!WW0Hf^*t`?xHt[p[}mxO}Ro[nZJDSei<SU=,yBURc' );
define( 'LOGGED_IN_KEY',    '_JNjC4FT.u`Zo4TZb(P1*//o_a8z/k:I9w1`b_r=*:!(?z03cQ^*$1qeW1i~^#qu' );
define( 'NONCE_KEY',        'kLEQZ_F-%Sl1Jf)7r9h-Q9`d/HI^nen-HHfsHZ[6tw|$]YhJ4/Mn!&5,U{^)em{%' );
define( 'AUTH_SALT',        'o$~~>H u2j0!~`Sk|[iPha*T$HX@|;fs7t/g4x.w{jS|2RUrUnln=3+_i(ke<Gs9' );
define( 'SECURE_AUTH_SALT', 'Z&9e+,4GhyQQ +&=D-0LI|rc/`zIF]|kLz.$As|rLP 2,RQc8{Ie`CM>u7+$(f{G' );
define( 'LOGGED_IN_SALT',   '?!&4/=RcfrcYNRq:/Ivrj>Y(k[Ry<96!+>,XUnNkl|Yw{QbgHeE&)A.sRj$Yqx$R' );
define( 'NONCE_SALT',       'e;~;tmUq4k]/vqGWYSpSR!h1x3F$jZF$C~zmH#=Q.{)u0%4D+k{ko9b{3 2i-pti' );

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
