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
define( 'DB_NAME', 'dnXhPnUkPz' );

/** MySQL database username */
define( 'DB_USER', 'dnXhPnUkPz' );

/** MySQL database password */
define( 'DB_PASSWORD', 'XJwXh4BL3J' );

/** MySQL hostname */
define( 'DB_HOST', 'remotemysql.com' );

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
define( 'AUTH_KEY',         'bvg&hNn<h,)Z,3^XVy x{ck8_v;7V6E8X?~Ju@+o@kouD{>)]78zh/~;E#y)JWuZ' );
define( 'SECURE_AUTH_KEY',  '!k-##UeZRmS2?})jiU5)W)6&Q};Oy{hi+;.Ch5t;B9*<Y;.!N%XOm;^Hgcc#/nV&' );
define( 'LOGGED_IN_KEY',    'C60tpV#`i+:Nz_qbAF>G*(!pBg;-E{+BB&~h!&{C:7#r|4tZX7zOr&8$L}bAC2jA' );
define( 'NONCE_KEY',        'A[u`&#Z1McCt8_uLa4C)c:7=X@kUe}:WrXr[7Mg+5Y5l0j8!]-#]DYx:eC;[gH/s' );
define( 'AUTH_SALT',        '2]bMc1.L_|YcUVGOH8rf0MQ#gtA(0#dwJG_&n1f6jCs*SoY$/I22CE#M0-/eRxZg' );
define( 'SECURE_AUTH_SALT', 'NWw&9>+zub|OmT$DF7(e9E.i2]-qkgoSPX,fs<d4[2@XfR+hK[cMPEmn@nS96L5A' );
define( 'LOGGED_IN_SALT',   '/8Zs^U+~+%K[tQI~/HQMP=8cob0l3ak;@)[qh>^VRqrB`d lbl11~i>P-3!O1ZnO' );
define( 'NONCE_SALT',       'Ja*g),[gZ3F1AMZoP54Gzu%[CPCP@.LuTffa$}`;yziGCPzlCkWB8M3Nq,g4)uf0' );

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
