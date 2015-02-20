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
define('DB_NAME', 'brown');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '123456');

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
define('AUTH_KEY',         'Rh*R|0|FdT:qKAiU]Zl^+yNeU{H|Na>EW~1X{^S,-MPUb(f{ymx|O=W-$dBQKvp+');
define('SECURE_AUTH_KEY',  '@^Tbcn^CZ&ULT&^-?W4hFQX-s?ceqDU7nQ;)MZYmG&|r*})^(CVwnGb{LyTucWC^');
define('LOGGED_IN_KEY',    '{ec|1[f[b{0Lv6 RCAaOTlSiuo+#tZMHi2;xC.+oc/vxNF%@A#^UF>VoC=9 k3#-');
define('NONCE_KEY',        '.B9jW0?|gbj.Xi}@|fT32q[fXn-fln]bz<q$w_*T);I :h8#+r|+Bnm6X$_fthlr');
define('AUTH_SALT',        '*uH{uqeuk]fyne-a@ju.-u*mQ+-1*xCU6O(I[N.I/boE#UA:MOr={>>_,J|3%k-I');
define('SECURE_AUTH_SALT', 'Nx29V]g0BE:{k;^C7r-PS.aYX[-!@8p|?&!c42l/n*3;lJtp*7Cb*f kOXMk77`G');
define('LOGGED_IN_SALT',   'kI)=@|,`Y(cA-&IA%b?y|g|9@!KaS0h-jEOSZr1WiYrM4w>%dusXf1KBWdurb-P-');
define('NONCE_SALT',       'd6y+Yhb/}8?{lFH>Ft=[_LIOl0XbG-|b^WRYZc9wnq*>uK5o/|XGY7-[t9au*+P*');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
