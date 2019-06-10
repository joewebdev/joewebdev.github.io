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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'agency' );

/** MySQL database username */
define( 'DB_USER', 'joewebdev' );

/** MySQL database password */
define( 'DB_PASSWORD', 'TkVjV5ZMzdGU4z9' );

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
define( 'AUTH_KEY',         ']S]~2<Fqp:^%qD )avb! C=8IRI?Xbr(Hl`D0F{@V490sUn#7iwH O$Q&cd8d`W!' );
define( 'SECURE_AUTH_KEY',  'wwB%^x2cBm/^Eym#+P$]kx]M8Xh+:s I:r9c|h [Ls<$v@bb*Bk?_O%_5&X8B.1=' );
define( 'LOGGED_IN_KEY',    'u*~> h@D@4!i~BaRtIMP710k+t2#,[TNgB1_Ta1!I%tO2uf,`K;lKDHSb7!fC2R*' );
define( 'NONCE_KEY',        '{pMN|M7mZS<<*lVTa_>/P;77:4wfa)Qmo)4t.Nl>X#I-U#tP$go<=t)2mn`GM%{-' );
define( 'AUTH_SALT',        '-wyYLrXh5Q6JzShsKG:6wHk,ojgZUI~M-e nC2idZ-X!z[JZ?1GaTyoehHW8RNVG' );
define( 'SECURE_AUTH_SALT', 'SxZJ5x@X}B6_Ylf/7RX:J*;UX[W[O$]:XJ!Mr =k=6Luo6)}*(aVeDep%TV7&hCS' );
define( 'LOGGED_IN_SALT',   'zSV-MyXJ#H.hQ-,6CRc}%nM>>w3.2AHxbGzXwf/(T0xLdtWXT,Bbs(Y):ep+kG9v' );
define( 'NONCE_SALT',       '`Z<cN2*cyw`+fj)C:DKG+AIljee5zauSs=e`#rUSR,6|MyV:cFjBb3TYbi*$~DI7' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
