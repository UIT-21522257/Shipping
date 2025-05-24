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
define( 'DB_NAME', 'shipping' );

/** Database username */
define( 'DB_USER', 'shipping' );

/** Database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         'W19ptqo<)6?Xe:e*43{YPAVaPp=17E?g][]{B.)@IKhI.GtKQyAI-sO4:](6ZzKr' );
define( 'SECURE_AUTH_KEY',  'r^GyD|[]8Hf4#84`v:T|,77K[y,!-XdXK>*]]I*YPNS:_09R7RlU##XhK?1|SWhQ' );
define( 'LOGGED_IN_KEY',    'to@o)fy-t^^x=+(2Xks(/A30W?[ BuCO=0;G1&6|VabB%-,-/hu&`@/$R9JMP4g)' );
define( 'NONCE_KEY',        '<PM<A48USV#~}Exp~1 H;<0}}-mD{Bb0@S@dyc++m36g-^@<-$(X,C=Hs9YlvU% ' );
define( 'AUTH_SALT',        '%g$f_:E,vNvB84tFqc/#E%Ucbon!,US[d_X@;8on+b1okeAf^,6*&Ty!}KCCNl1X' );
define( 'SECURE_AUTH_SALT', 'Q0:.C+Q_)o0I+Wu!!R`NUE3A_<-fN9slY%:0O&0?D(YIQr6HQi9/U9+ID+=Ps`5B' );
define( 'LOGGED_IN_SALT',   '5Z}9G/Nh.tCZ4OQ_ii#bMcWsV8;KLzgw#X,7QhMelVeeO!fb@&{Md0^Yf9Lf<Q^(' );
define( 'NONCE_SALT',       'RKl!./F{bFJBHnW$V/mcTaI)6i9=+1= L(PO{Eg5[~20|nPN2FEKgW%*L<H7C;yj' );

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
$table_prefix = 'sh_';

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
