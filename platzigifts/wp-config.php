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
define( 'DB_NAME', 'platzigifts' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '-%f+4!u4G33Rie>|i>f2np5|i -t`N]?GUB|q;[|- E`QTdP0yZyk9alNA+I{Pvn');
define('SECURE_AUTH_KEY',  'wI=Rj_/tv{mx^mUk(6_{ZHs1hG>E/l<Lucco9MNP6@}+h&.rtL`s2R,d%V_t&:sP');
define('LOGGED_IN_KEY',    '1rF]Ei|!f<TnO|A)<K&PFwPaYHWU1<HVeMy91:sg9D9eO[n$OEK[|Afn^uF+m{|L');
define('NONCE_KEY',        'Z9v,kIfy5UHY+>{P[-+?/,@p16zv6bKkHm e+O1H8upwsAj5+0B)PCy@ WLRu)NM');
define('AUTH_SALT',        '?15/+]),k-,Bk/X;U)mlGDBs~&b^xp+lk2b|_l2h_ffcCQ9RbQeZ +!)o& d+Yx!');
define('SECURE_AUTH_SALT', '+9R=SjP*;&huMi<2li&yi~1)JAu$ PVvkMU_ZKce?{_aEg{MU8,MCDqDu=Q5%f:]');
define('LOGGED_IN_SALT',   'It+,&Qq]g3Nkoi(ZwghChbg%c:4]x^^0<1w>v b)qO^py|D|NA=+Gxu);lTCx]85');
define('NONCE_SALT',       '@UH1SqN(.rR<8:Vv6 Ee>ZH8v-0Emq^GuVL->^8y~SA|w<;y48lji;3,+#<Bn1;B');

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
