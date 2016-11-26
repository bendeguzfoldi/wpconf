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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'bendi');

/** MySQL database password */
define('DB_PASSWORD', '6ab89f55@');

/** MySQL hostname */
define('DB_HOST', '10.174.248.69');

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
define('AUTH_KEY',         ')^k..Q?h/uAVhrgn/xa+:Gw{qJ<al[wuT[bMdQ)!R/-Dd<C]Sx1VG`gPzKJ!&XkN');
define('SECURE_AUTH_KEY',  'v{c[|rY{u*)kBH.ru3v c^kAaO|UE~V;2}~at4Af~p[B]qODWAf27S?woRDWe2c~');
define('LOGGED_IN_KEY',    '3GpbG]_s:P|Aj*!puR+H5nh[[lFJU{nu==&a9PLk3FONmEk*IrE([b&l{A}~WdXS');
define('NONCE_KEY',        'E$wv!YWB,)5LjXBn.levS<c2+:^b?)HYJ|ieGKh3Z6gjo~eUstjeIgBlSU f`Xkk');
define('AUTH_SALT',        '9]I20*s!B@>1+Rho2$iuUjzv?D,ZSv3uAMrD~uk-~{DKPg{[*!-k7XAd7D7ZWnJL');
define('SECURE_AUTH_SALT', 'HiVghcB9K`[Du3lxqLW_2u*18mS;fhx1_`@a!R#wMm1#Q]_rPaZ9c6K2BUP[u/!^');
define('LOGGED_IN_SALT',   'ZiIxBlJ{OS_y2)K2vJdH^j|la#D`HN/b-u@QciM^4v<>Kfv*KOorPii8kL$Z{{9|');
define('NONCE_SALT',       '@zk#P5T1Qr,;T%hqQCh{;jQv@ua>(1p#*e]Kn6LTtO{AL_/FTU)6Uh~E,muERVlr');

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
