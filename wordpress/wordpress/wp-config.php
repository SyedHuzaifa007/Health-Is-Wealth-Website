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
define( 'AUTH_KEY',         'x]SJV^}W{`)B9dOy3bh_id!%lMN:9Ott &DN&JQdTpbsbupT(5{c-<D3ti<&Z?Xx' );
define( 'SECURE_AUTH_KEY',  'a]_fX!nSV4]qlC*<w3! c>.~9m4s2<D3W5?:=`!V0:)dKwTSL6Q^s^n)E_h|jEv)' );
define( 'LOGGED_IN_KEY',    '4}Y>p*qX?4$SuX?a$;Vo)ymm%#L8uaz[^pX/fp1sTWTa/mA H2_!Xa>MutUaz.pA' );
define( 'NONCE_KEY',        'MuKKy$kK6>v=>N3V>.klj+M0|RY4Ot#j-}D3eOdPn}W[QQd|)%qB48/-69zbF/aM' );
define( 'AUTH_SALT',        'VH*,eMIu4jx3A]wGXr*qi#,q{JHu#wvTR`IAw1+Pa-}Br^pLiqU@(I]*QH>6b_&t' );
define( 'SECURE_AUTH_SALT', 'ywWnss;CS|+LvdnX$q>k/&!2baC<S.eeQ;PpVG@bj2,+)?-LyJ&jaeY=d34OHOC,' );
define( 'LOGGED_IN_SALT',   'W];R4VmK@HuW+zACY)w:z=<P?2z)GIcw7_TH*by*][R<k|*`-)vRh(2wH9p{/1Af' );
define( 'NONCE_SALT',       '<~ _V#9`OIgZ[. KO~~3b. U:D6_M/AHD,G`p:}:iFowHV7G98yVsbbbmlzEkS=U' );

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
