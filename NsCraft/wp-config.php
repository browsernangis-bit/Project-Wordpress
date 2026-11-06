<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'nscraft' );

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
define( 'AUTH_KEY',         '|/rRT~0C~Z is +&?xKQ>])$Qz>d~){y#4U&mv|l`^[/T?mTW0wv,?-=I#IMZ-!i' );
define( 'SECURE_AUTH_KEY',  ' =[rlJM2kKkTfUGscj|7_ vrIh2IkfFaH6-/] JgQ-l{>CM[4*hFubo!{qjw?pKr' );
define( 'LOGGED_IN_KEY',    'FGKHAx<Y]]qW*y4I<$N;e~VyuSG)t2*#c9hQ6_yEk1J3%W:i %%EwUb2^I`_rt7b' );
define( 'NONCE_KEY',        '=Zc)G7qrF^2G6rReP9$0<mAT|(vdK%Iv(@Gz$pR(b_?1;:w+rrN8U1GDv_/Hl(cv' );
define( 'AUTH_SALT',        'vV5-}GF@(/C8gnXK?2Pg;Acq)~o/x$Wtn~I*49lnfI{n?pp>VWmFp9@.Yu4:UU}8' );
define( 'SECURE_AUTH_SALT', 'v7{mQ*9Kaa:v@$c@7Y1&p(@Y8nJW[|NHINL,mFS` e`RU)mk<dM}zd.2cd>o;:Y=' );
define( 'LOGGED_IN_SALT',   '_c&FCYDtpI$8&~hL4MaJ5Hpm[qR|2+yyNR.1Qubw4`biiJ,6+^*^b[8XdDB^rl8M' );
define( 'NONCE_SALT',       'l:ON/6IwzmHq-(?!0&~j UHvCG0ox/MC2KGRuA3GD1EOZv:_8nSnMz&Rn7 mRWFG' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
