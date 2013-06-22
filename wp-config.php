<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'local_wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost:8889');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '<@8K$R/,T-+ueINM}K8K(tw+Z`+T>SvOEk:xi{sTIYKt+o`5;yQ4 Qr<tAJP@Ec|');
define('SECURE_AUTH_KEY',  '4*F[,aw-YA6qGRU$Qn0GwNtF-4-on]8@h{ZN#cKIA94g:_R-@$#>wCmg^Ddm4Igh');
define('LOGGED_IN_KEY',    'Xg)Ie!u{PVU/lx!TvU$N6C_7ra+3/OB:mAsPdy3Ke{uyHj%-9j{sesq2}*9ST;g#');
define('NONCE_KEY',        '<Q?81M&Ps$`4N}l!O2s~%H2p#{x_&Dd8=gsfyz0}v-kK9gxb-,|.0|t(vK-t;-EQ');
define('AUTH_SALT',        '2/Fo|&w%`gYYLWZ=K.W{:W,5n-eWB9G8T+I%+H*f1y;LZZM+]zveh/YQ.?|9!@T9');
define('SECURE_AUTH_SALT', '|ZpI4X@o@~etzX>7UL_z3 !^R-:O8MELA.*48u Dc8|`ase|<08N+jr!cBy/n^5-');
define('LOGGED_IN_SALT',   '~!-Jr?,UZ:kual-cuE(Lr67RsfD=LG&+@y.K}e!~<.rr|rmq945P7k-(}e{#(ect');
define('NONCE_SALT',       'lT +yd.w4?qaQd9#{+-F*:$^+jZx#<)9^JjeP#,,;9|k*i;Jm*`Oi~=ja)tQ Nr+');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
