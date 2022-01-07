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
define( 'DB_NAME', 'wp-max' );

/** MySQL database username */
define( 'DB_USER', 'wp_admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wp_admin' );

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
define( 'AUTH_KEY',         '+@rdEf_hU5_wB]mz:%>-R3D4Q^*YdEHU]#rcK48Xs~$hrVLY1Yf[h<wge}I!J}=}' );
define( 'SECURE_AUTH_KEY',  '5%VDq,z#zbK=M<[n=8?f}N7Ti@W`x=0`?ME+mjB_bd xv)|D{Xn[k3O=PCV_^(N|' );
define( 'LOGGED_IN_KEY',    'Oc LtrcW=?h2es#V_rMBRRT5.wq#w;UP=B~N@s;43[h0k}21fUV0Lc`3*:y>M>m+' );
define( 'NONCE_KEY',        ' @)nkd<xNC7N#@tF[g/j(PnLiA{CA{h2*4nt<F2T!wVs.}+ mWE691KKV5O/E+u.' );
define( 'AUTH_SALT',        'l~eC ~WT{#!hK/9tp5v&}>JhGQ.]T!#4=oc(H/$%Sc,<yE;}|a`<YKR.FEPij=vg' );
define( 'SECURE_AUTH_SALT', ';n(u2dfsg*>dBMt5isMJJJMjBC4 y88/=WpIq#e E25N*`;;(&ow#piJ&3.F4d,S' );
define( 'LOGGED_IN_SALT',   '.FC|tK4&_uUAbRk]*n:rr{87mmUeW|k7~_GV$fz-D/+,<R-[RdXp-TX!7@yC|Lnl' );
define( 'NONCE_SALT',       'nkN#eMj%&DJ&=0/l1,>P:DU:<mEDb&:) 8:/;slptU&z`r7KjV<mxN;VExTn+dnT' );

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
