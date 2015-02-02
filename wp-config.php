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
define('DB_NAME', 'bridge_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'Be1f7 r9m]6NRV/B|-ufV?4 63}1E_BPlG~qPiz~bZ~-A9|<[mDC%b8r*K9=.x_h');
define('SECURE_AUTH_KEY',  'hyNZ-c1@W)M$;-^8^gm{wd)A+=C&8mhKo3G}&kWh8o3sk[w7I.0~ASNQq^R]]~p<');
define('LOGGED_IN_KEY',    '[-w?!S#$-4J+>41(:2eVo|zY5PspF~t|%cypsuR3pv0[kd4r+w2R=rX2I+,(iJM-');
define('NONCE_KEY',        '_m4^/m2@Sy&.,lj`6xJoYw%i]}AX_9^4~c/M]o(,]~cyg558)_FMk6Ku[>:u*X,|');
define('AUTH_SALT',        '@]Ih8fu@j_-O<z$k`B*J{63zna4I=AnFAp78u_=o8QYouE^5LQT$b]}?aN/YYXgj');
define('SECURE_AUTH_SALT', 'qok&|T+HB[j]nB&o=|*6/2<mM1L9`z)(|S+hKX^qw`Ny&b89Ba7s,v}BN521rQF ');
define('LOGGED_IN_SALT',   'wZ,xi 0W{ov~Ky;&-9D6W)OAA4u=Iy4}9ba;riZF2sgddY,~c=L@f*36Z.+UU<OS');
define('NONCE_SALT',       's.5.?0q5CQ<k-9+CaG{Hq>|#iWv-5oDA(&mmof<R)Mykpwu:L)W<AB2)#{Azh06 ');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
