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
define('DB_NAME', 'staging-wordpress');

/** MySQL database username */
define('DB_USER', 'yingremoteuser');

/** MySQL database password */
define('DB_PASSWORD', 'LqTMsuPTqRM4dZ');

/** MySQL hostname */
define('DB_HOST', 'jasonyingling.me');

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
define('AUTH_KEY',         '}-kX-A<<KH<3PU@(I]^8%itV<${B@~x[@7`3Q-*^oj2nO>sa*68n;87ZOOYZ&kbp');
define('SECURE_AUTH_KEY',  'Yn+Vl~%jE%:@QOgzi`e,Qumn/&ouF-l5rmDga8W6.q5jjT KE=%d @NQ/G[&ZA;v');
define('LOGGED_IN_KEY',    '>]]{MT1N+Mw`d|BuZOVf&Oj&_+)HN[@%g{0}ls9Yi*[dVaT1#RS:~k*TS.;q+SC`');
define('NONCE_KEY',        '!Y6sG6?BLkGk~e.(n:2:Mrn`q0eUN+VJl-ec>47UR0^`})<7c<&]ZY#ZmTd<#~|L');
define('AUTH_SALT',        'mR|`y3 lDoYqfr8.Mxo<G`dAb*D>Uhgh9g7Tg* -L(gA,-11I{lR6Y93!s5.]e@0');
define('SECURE_AUTH_SALT', '+J*BB|B/|+-pP0A+o5:]f+RWI$_-}-)Y][-`5YAJGc7_G:4|-O|&ewB1[n*[!U-}');
define('LOGGED_IN_SALT',   '+6`,jMY5Kwwm+/]_d3nGvRz-Ksb)9?;.u=j2>~LIx16btC+&{Y{DUFAgtSL4u|AO');
define('NONCE_SALT',       '(25d,=k(fT1iNPa{uq>ih0 )2mW1rW+5;uKt81T9=I-o-H5xh{r)1BtsP|Ow-FA%');

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

define('WP_HOME', 'http://' . $_SERVER['HTTP_HOST']);
define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST']);
define('WP_CONTENT_URL', '/wp-content');
define('DOMAIN_CURRENT_SITE', $_SERVER['HTTP_HOST']);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
