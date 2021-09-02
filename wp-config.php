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
define( 'DB_NAME', 'rashiartstation_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '6h<&56=]2O@32!T4f`x3_le:.xksIGjgT*<eg4*^5)qM)E1]J<0Cl^Dp|T _klgM' );
define( 'SECURE_AUTH_KEY',  '=Wr>HbpX2j+95tE>g=J5}ssae-hYA(z?deA+Qs9$G&5D9!_w0[!xd2~)AD7p#X|O' );
define( 'LOGGED_IN_KEY',    'X9B+O/PQC-mA1TQtQdqM0h1::?4lFuex0KC.x]t> n[J!oKz<(Gg:<(wW_>l[wxU' );
define( 'NONCE_KEY',        ' 2S;Gq4aCA2y$u}.E+2TB5HyWe-~@ZXNdHr^U<HZXv,T9.mY4%?!*]tM_#WH<Gzk' );
define( 'AUTH_SALT',        'qbyOxZBuaIp80;>Wm6:I~9)i}t@TDdrBiZ<w Wfdl3)tI<Wh[z?sVAX$wm`6].~m' );
define( 'SECURE_AUTH_SALT', 'lo@Ibn5p~90i}]V=#2Rg0%:t;RQj{Wvv<Hhaw_1Qje&CC36;D9XeVMOsr<i{m`)S' );
define( 'LOGGED_IN_SALT',   'EfQV !5K(tIviB(0BC?o&9>LCdJT@S|9-c*gkTLZAX~SCTG@E#npgvIY:q(&7x!N' );
define( 'NONCE_SALT',       'KFx{X[!T[MVm/jgfvi+94<K*_vL,;LOYaZ1(X5ne9JG/kupMTdc@7#?*$uR([,8m' );

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
