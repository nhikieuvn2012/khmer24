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
define('DB_NAME', 'mydevjob_khmer24');

/** MySQL database username */
define('DB_USER', 'mydevjob_khmer24');

/** MySQL database password */
define('DB_PASSWORD', '123456a');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'r_HRrAnvJEr0$WRl*kIa=sR7`B*2u ;;{LU1!t`RpJ9Z^c}y$|_n=,#U}lHFHr;O');
define('SECURE_AUTH_KEY',  'Yf{*n>]~Pmthj;Usg%2KFI^@=Z^BpukYWXgAeRvG5-Hs!+L:i#1/tF_Stok|O%xf');
define('LOGGED_IN_KEY',    'I*+T&c>GmBNJk;4!HQk>[Uk@Fr2xcuF8sG+KRGD^*2Nkm:0KvltFe.eq+@wI(-/k');
define('NONCE_KEY',        '#/)/p]w[mBl>ObE}-.$(tR(le6:I-]+Z|n)_6 $w4@Y=IeW,X0<t!+ZFXj%?OA~+');
define('AUTH_SALT',        'k6|E/#n*{HT3--0a{j,`[r| li.T1Vr_@g&m2uRf3=X _Vk[1<<<pKY35di3;8g,');
define('SECURE_AUTH_SALT', 'a8VC2jaH aIw<|4+Rk7qL7;~jQ*#S>`@%Vf nbED*%JJs))(S]qal<5I.O?ocS?V');
define('LOGGED_IN_SALT',   'y>u5C}5beq#DF`!a7w15?CFv|t-DC`jQ(Gp+LH>`6WSL@/e^u5wDu-=KD ;wP*aU');
define('NONCE_SALT',       'nLg9C`Ch3q}k_~r|C|yV?u[nim+3Cd^yf/+urR(bC*,<}=^*xGDj*6U>>c`t@qwv');

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
