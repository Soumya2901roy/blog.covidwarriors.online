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
define( 'DB_NAME', 'wp-covid_db' );

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
define( 'AUTH_KEY',         'IDK,*)n|.TsLeW|uRfEB?N-L)=83v?aviJx(3px)CiO{LmolCSV1D0sC<JBV!Z-=' );
define( 'SECURE_AUTH_KEY',  'hf2WV@H%|G+^J<}ZZ!|KIM)h^=t>EK84p(dOLUQ>dr>Ou*q$d=esqmyC_6_dIc$?' );
define( 'LOGGED_IN_KEY',    'D)z@9GXi%KJ/CgJcNn+W%{|?Gw!?I3hF~R@<+=^;/U7EFmb}Bd8A1yrW#y#+B;ag' );
define( 'NONCE_KEY',        'X1l]5?RuweX4d5^QP3ocP<Tim#;FjHY:Ki<D_}{_`3x9=LyR011{DYbQNP0I0Y#j' );
define( 'AUTH_SALT',        '{.<V+yW;;W7jLv,^$B5,q:Pxj`Hxf>aLZ<6A.s*JX?c{)Tjvw>w_}.g>UuWSgMD^' );
define( 'SECURE_AUTH_SALT', 'e{e913?<P#D5v3wBxcq pN4V`)KkI`!||Jou*JQ7Te0m+#H93P)PO1JZY(N&07mF' );
define( 'LOGGED_IN_SALT',   '}R4%x$(V(PdltXnO},*D)Hcnc,tNH{HM<=q_-8P#w<weH L_Jt+uv[hWqB$.]RVD' );
define( 'NONCE_SALT',       'm:d%bOSs{9Hb}^Qgft7+_!C4/4:PmUF jR;0,&SP%u[crFIHMlw{1>`fJRolZ8*)' );

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
