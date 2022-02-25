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
define( 'DB_NAME', 'rummystore' );

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
define( 'AUTH_KEY',         '@ZU2Pv4E]Pw/55ZQC!6b]m9Kg[&ivC/70mmS2uoT R~!/_t(b9E{p/z5GjHbKuz[' );
define( 'SECURE_AUTH_KEY',  'H%sZOrtWSXK{2bc@v*;b<]7y`>4IR#YEkQAR{iEZ|o%}]Exh}};H}=^o{TlxW)(.' );
define( 'LOGGED_IN_KEY',    'PuyRw!AWyb MJANeYfq$%9vqiy0l3%m4jo.V`#8kw=Ne0]aORWGe/AlXq%EO32a}' );
define( 'NONCE_KEY',        'A]Vr6P%9#s${Cig[(x|h.WE<S/BF]5<AWJcn{ol@$0#uFg`bjKuJkBiW 8P -lbJ' );
define( 'AUTH_SALT',        'hxeVh:t)XT8eOz?,BPpr$2!vjxbgpCw,1ft}CF2~`&!e>*.uB@#nOTUzo*>SU Is' );
define( 'SECURE_AUTH_SALT', 'q3!ad~}/FBAc;/PA}_jw1{6i-+} ^obb`3*$nWjnN_g.,JGAdHRdRiP`@JuLlYlz' );
define( 'LOGGED_IN_SALT',   'Gm^qic@qU}I0vEsTx_T~5;(?[I~ZiQ$C.Q[-v=b.6D)Q-uh)LIS,/r)TQHQE^T/c' );
define( 'NONCE_SALT',       'o>[@<OeM+7K<XATK<F>v;3U2qUgrka)MIvYf4ZHu.7!wUYUye6Tl%tN]@UI;]EfX' );

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
