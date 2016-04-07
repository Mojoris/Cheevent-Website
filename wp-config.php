<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'cheeventug86');

/** MySQL database username */
define('DB_USER', 'cheeventug86');

/** MySQL database password */
define('DB_PASSWORD', 'Cheevent2015');

/** MySQL hostname */
define('DB_HOST', 'cheeventug86.mysql.db');

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
define('AUTH_KEY',         'w:#Xv.!@cD3%lG*@3)#Wl{Rl|Wr#_~N(T+95s<>}t81-xqgD18J0oISDAjG&abS ');
define('SECURE_AUTH_KEY',  '@mJ<J+9}S9z0*UzbKJrG9bE!7_=yKZ304u<U+<)+z2-N/YQ|&IJz)XraJ9*p.=s<');
define('LOGGED_IN_KEY',    'Lk,M.(:XhT~FT}I.5B3>N~W8Wr,1]zHW9CCh-#{RU>p1rmiHD>1OYv$B?E-M+{{U');
define('NONCE_KEY',        'Ut<4.mI->=Dz!GXx|%|h_B1}0yp#|9S@|-52N(K<EjDoLUsi-*IH54!PP#F%_B+p');
define('AUTH_SALT',        '{YTF>]/Y4~51076+|@w/}oZ73rIbLf:7u|p7;q9vUf6-?uhEcFsAWenUj4H$4;Cy');
define('SECURE_AUTH_SALT', '8)Mvkdh-d}JV+#vDC6]qhfG$r+fWM2bw%Cns>q|{s;(|=EKN/VA<Kws#/Yf!:<)%');
define('LOGGED_IN_SALT',   '/Eiq+D?6[xH-t}794YzGxSP?rV56oZIT%|:y$!Ge?[p_3~5JD@8!ThOX{Fh=]`d/');
define('NONCE_SALT',       'i vQNT?0wwRdy&L7`f4~N.=<-E[Z2uu>%0o9oP_0s`,[4%64[Y-jA-]8wiSCy}3d');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'che_';

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
