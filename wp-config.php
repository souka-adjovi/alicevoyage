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
define( 'DB_NAME', 'alicevoyage' );

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
define( 'AUTH_KEY',         'h.y0s|@zbG`&wS]Mq2wIY}=}=mz!s#^)/vf&A-&)FgLC#Fm3*[+!ml$OqHEWl7G}' );
define( 'SECURE_AUTH_KEY',  'yuX?!#.0-YZSmfnIg{ww;b~`DH0Mer=FP`&C3?)z?dG*ZT}I&7nVGz,KKV:UV9eY' );
define( 'LOGGED_IN_KEY',    'l:1&AM73LG-_$?6X>.6M.|%Y%. ir`!45bq|sw[Et`G58+6{U~e:PVXOFMFyhroI' );
define( 'NONCE_KEY',        'k2>1(i3}71*38I_F[Q*Mb}7K5Q>D 2!h%IZfn{a(HNXPgG=u%%?[]{fsq#O=#og_' );
define( 'AUTH_SALT',        '>(,* fXxq}Mj[GpBl?,fxTk1)q^GNa5v?qxWqvspm;I]$f{x_e,p::@0@,L]0YOE' );
define( 'SECURE_AUTH_SALT', 'VJRKDFgg[Bh,QRGj989_j%)LEG=T6u>-t+%GMoQ{5w|=rba2(!sHPw(0%FAV*xb?' );
define( 'LOGGED_IN_SALT',   '.N#o&_`g6!QjLkM=L)k[B.QQ$LJ1D&}29`yl60,RLy/T0pJT.&gf_&Z,(A&(pJO1' );
define( 'NONCE_SALT',       'T~G</- 5vr{n+7RPF5[,:cFc9J_>WCrXmD|fdbm^Z~-JC%7aD$gmFB_rBx`0dq?]' );

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
