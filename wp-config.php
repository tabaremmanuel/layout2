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
define( 'DB_NAME', 'ilf_layout2' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'q;)mjZ2IaP|) NBAuhhq@bZ>|=D@CB`HCTkR{*2km4x.H/{25QOY`C|TkBKxWhe~' );
define( 'SECURE_AUTH_KEY',  'd:0ycz#L@;=by~r1r!_&nD .nrrCCgY/iQ0[_G&b%<Vrvt]t}_dHBhDBB=@~h-u8' );
define( 'LOGGED_IN_KEY',    'w-69PleEq~hQ{|8;:@dW7t_r_{ qUkivyc^#hG*[ab0/RogZswH69?XG.ZMO Z3L' );
define( 'NONCE_KEY',        'r%Zyo/#a_[QNqL}*#e-U?EaU9^Rf>J^8:HQ=bYDs3yP<zKJGNe3k@}Y3!oP[ELHm' );
define( 'AUTH_SALT',        '&6s]UY@>0SKd2;)4x1S^!,Sq@KbgAnl=N/>:q=ESGZ8&Z5&bKP#1Z5OIbo5Z43L5' );
define( 'SECURE_AUTH_SALT', '9+ 9SN$SWewM#FLadGCKpnj_>`M*`XaS?u<]-.@.=zy#^kSjo(2wA<V~k~aHG<MA' );
define( 'LOGGED_IN_SALT',   'cRI,rWjUV-T5WIcb/hbl;7jd_HpC_C`k3uqb^7kxkVHVZ%9[Z``L17KJdA.-REIf' );
define( 'NONCE_SALT',       'RGb90%d!|CpsrH}8&yu$^{Gi{ydAmbPE#`75YI:gmoqN}J/-ptm?ngMzeH+2Mr:t' );

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
