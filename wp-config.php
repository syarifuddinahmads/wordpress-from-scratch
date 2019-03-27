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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'udin' );

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
define( 'AUTH_KEY',         'jql<M[VRrnDp@%R${tHtJ~]&tNN2V0x7W}#n+a}_xC|~Ecvdx7X.DHa02p1n(:@q' );
define( 'SECURE_AUTH_KEY',  'JQX$V~8P#c ^~-1]hC3=VqMbicC7K&2]hT+U3p4wn/rqV`{y@Dx5;n~Um/jY9SI5' );
define( 'LOGGED_IN_KEY',    'DwR3odxul1aeM5gzgNBsThY@o/*TB!)pw*|ZWOSY/k|rvb2Z0+,#<)7x!EZ{J4Ah' );
define( 'NONCE_KEY',        '.wbo%s<RqQ>dnZ{|Lgog5yk:rUwRVR}8W}OV6-tG**P|H4HwjL5^ o:<J4/@|=pD' );
define( 'AUTH_SALT',        'Rf7E50X-w64r^Gj=y,>dbCrR|SD4E6X5rW5tC0mGAg|,yJ={Nzk>[CU<fJ<TL;*F' );
define( 'SECURE_AUTH_SALT', 'H0DLXlyh0JMkOCV:Juio5+ts?ylH/y~1V,zf((53cI+HXCJ{V<m|,AffaDeL?#ix' );
define( 'LOGGED_IN_SALT',   'oybs``(F-3W$J!.=~z,X/A$nr>VfRPv:%;7@z?pnbNWU/!7 .Os,*,&uX}V>JTt%' );
define( 'NONCE_SALT',       '^g(avHXN%w[,7%=B{sf[ude+c1{SN}peGOJ~TTki3S>%>9nP2k~-tf Z*H,@=]+d' );

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

/** Bypass or Direct Method */
define('FS_METHOD','direct');