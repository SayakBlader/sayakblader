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
define('DB_NAME', 'sayakblader_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '9u_R:]&}{I!q_Sn)<$5P SzVw%]w!NaE!tq$xxiVx aaDE|&PWbH-1[`=n~90$pa');
define('SECURE_AUTH_KEY',  'o`m1]FZ#2+F9BeYXC]9{]=qJBd6irEdw5SjI^)d2M`WXAy8c]nU?wS&`{;vwp::Z');
define('LOGGED_IN_KEY',    'qrew7:DKIy%!Kf1_fdU.-wGyQ?Cmex<?f%y<dZZs|,9oO^rhk}1)@$x1!vEBe99k');
define('NONCE_KEY',        '+4ve-p&VlR=U`ZNQT&Z`-FC/QC:_xl%{<k*Bzgam&}wT`,DO)cxG{y|YO!TE@=Z&');
define('AUTH_SALT',        '%8X:a]FW/.o]UWivz.S1_(L!L.dZC0)r?M%|Y(tY*Q6 (1NviE[L!qX~.sp4TE )');
define('SECURE_AUTH_SALT', '0.K}60>~2{KZicTMyzY{cl&?C~]JH26WP|/hR9v4}HOi<+5.qpv^<0L:qrkir~+v');
define('LOGGED_IN_SALT',   '5yPp]DNTm]ik$T39!)08E}PW7@WoP gW3,=-P6sX:?_h$/U5?bE?j+`*7Th?/`Vu');
define('NONCE_SALT',       'fjLs7/kRB!_4pbWt4;x^c(8@19wTD[UUh22 +OD[Q8ITX?dp@(Rz3F8k|Xv{3LaN');

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
