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
define('DB_NAME', 'demo1');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'P#9C>w|+5J(FNybY0hOl#S8=c*8ZH.{6|FGT3)*!l+U==iLAqyUF|,sc8+cXu9ct');
define('SECURE_AUTH_KEY',  '-6cNF!2g(2Hcx@JpOLL1S3EurdM%lg=Y~N[P%J2|-[ZlUtfLrfm++u07kTVy:Db-');
define('LOGGED_IN_KEY',    '_8[h4fd})JksGv<8 oH%t8yoV(?+{_9[D^!3x?}5hB=.V(Er3HUra?<a_`%!_2z:');
define('NONCE_KEY',        '-N>ajJ|lPt!u+XvzBdn3v<LkYZLK+0{V_p|>jf=,[gO2|mh,$(?.|k%25B@r +jU');
define('AUTH_SALT',        'XHA4F}c0+aa4*35Tzg3~WEJx914M:l$Lg&*(c3~Nc-v+[J`Qk6(Tx#;|x,xYHw#&');
define('SECURE_AUTH_SALT', 'zV9pyU;$VXX9]Bl)&iFo# e/h])l^5D6NSM1Ra7#i-;143P-%NUsHz+zLdan-Dp`');
define('LOGGED_IN_SALT',   '#A-=K;B-z#oZ?(8j$kH]Aco>Ud.2C;/DE-B`4#u+0pG#[CUGfVo+U)fALk5RcVJJ');
define('NONCE_SALT',       'g1KFc-a7Nj,EtTm_kA~pj0u9-bm[%{]p{%6QHuA]X3+.h-Z/}flU?P/vyTlfJg*v');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
