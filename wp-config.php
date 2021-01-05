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
define( 'DB_NAME', 'cactus_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '@Piros1Feher2Zold3!' );

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
define( 'AUTH_KEY',         'W8%(tu*DSHnOm]5%3q!BRqQe6w/o9+uLfbktfJzFa:t !;S(9R%.O,{AQ|BE(gKv' );
define( 'SECURE_AUTH_KEY',  'bo2CO2F}Qej]$f%M]vnX-~*L`LRz]<jF  J*L>Q$|,R(#6~O(3ZK&ohg::B)`(=y' );
define( 'LOGGED_IN_KEY',    '<!pcS3ppI_RnVa,hiw!BAf<XPt4f3nt]2p:f+@Cg747m#:jLoKT{i3tun;!o9}zA' );
define( 'NONCE_KEY',        ':f&#A6]UX0NBKk+}Y}Rl<=7gzR9VcP)i(vV.L$HS/yJub hc7dnz%Vs!d52N1L*<' );
define( 'AUTH_SALT',        'j+eY.NOb$^P+TpkV}({fR{.;mjg|9+YK> ~<HNW5QZO`8k@YhaTGnzp=VE,4$)Im' );
define( 'SECURE_AUTH_SALT', 'zhzTP}!h4OViIH:)X|Dxpo9Z]4p-O!(f*k41n?jHo[3{/,WpsrhD|V/n5cxj&S0b' );
define( 'LOGGED_IN_SALT',   ';+/W B1]Q?*q+c,GR^Q&*sg`&uL3J!M3gY(=vuizr<2s!a]^iOO25t#0D9V? I8[' );
define( 'NONCE_SALT',       '9aN%?  3449q0vNn.Y>){/*7N<)*%F n[`=6ZSJcO2O.SHO@`SvCl[jk24N`A=t%' );

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
