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
define('DB_NAME', 'heroku_1c468420a264ace'); 

/** MySQL database username */
define('DB_USER', 'b1d4a8874d4b99');

/** MySQL database password */
define('DB_PASSWORD', '4ac90e9f');

/** MySQL hostname */
define('DB_HOST', 'us-cdbr-iron-east-03.cleardb.net');

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
define('AUTH_KEY',         'zVGZ]viK*qoY&ZY81yn5Zo!3ufq?}ELz08<|!/7B(U.#g0w%K$P7A<(o?dw&6,el');
define('SECURE_AUTH_KEY',  'TK.+;g|JSzF7q[/m^TlB_Ig3pkn2H$Qyy=elLhw#>):u=,i,]e|Tv)|;hS}fMmS)');
define('LOGGED_IN_KEY',    'sUsEZ[=Hb hM$+%zjlqWBJZg[uB5ji?t?w6_GMD1~FoFaXRJaK7N9>[ngEDW_WZD');
define('NONCE_KEY',        '[O)e+qyoxiro+Eol+<IR_V8K[z(,qf,T||:G9?(CjBS[~~nqs*$xNLvG9C[?[/30');
define('AUTH_SALT',        'Shaf9~X~UpE>m]#!+(n^2C#ayaHpLaqaNpo1xDAbcB)`e+@P_QD_gn4dOZMyPY5z');
define('SECURE_AUTH_SALT', 'IJ6q:%}J]w8ur22:0FIrDeS1<H{*7t8f4YxP&fbR:wpc+v e#CzVkSDq!vvpnL9e');
define('LOGGED_IN_SALT',   's4E)E]W&]kiAi[7}ZQH *!O_zJG~=7$_<r0=i,1fS{B6f~$F?fIGZ|VE Th3[iV+');
define('NONCE_SALT',       '?&uz&V6g&$uNQHJ)X/GbrigL<,PK6h1Iy9-ptBYIWELzJJeTUxmFQfK!=iR(ykTS');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
