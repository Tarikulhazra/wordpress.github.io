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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp19' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         'k4+}VeY{6!LQ) yk).=w#t{}mP4s{Y_8HI&>mZax>eDu/(?yw_@]iG?KFFdLnkV*' );
define( 'SECURE_AUTH_KEY',  '<6L%y/^K3_<$yUcR)^5qMig7_TQJTmZ;c7lO`o]D;.Qe~3e^ZwBSxxa[|di< .+B' );
define( 'LOGGED_IN_KEY',    '+yAGi]uV^!?FQh-KN7-F7G}g_U3U/($*vnLqLg`jTJ45;YW}ccwQ/;4]kJH;<x/7' );
define( 'NONCE_KEY',        'J{B}vdHQ(jxDI))/d3 6Va1bD7ys+7jt<9#)(m)=O_WhlWK&NIct?ihR.]P=0~Ik' );
define( 'AUTH_SALT',        '7zU&CXWwyZhH547neRayg((WDq0DHTW:;f>aJ|8t3+xTjyVOpd!9&* {8N$]]MP^' );
define( 'SECURE_AUTH_SALT', 'lNx)><;eg7o[1V*#JMOPTl`^1A}si4@C_I:rkEW%+M&e*add *[lS1cCD2D^`6b(' );
define( 'LOGGED_IN_SALT',   'c(OlGUBX2]>$ycm ?O;Ul+cF^+2ZDZEcgGw)s*3v%dV5DpK3L`sXo2/+c0EFaYtL' );
define( 'NONCE_SALT',       'jq(UK;9|~9,(ZS}LfLGwb|*}gMV={U@{N;3Hz:9nR<R~PC7o@K9=_mkhlaE*:BUO' );

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
