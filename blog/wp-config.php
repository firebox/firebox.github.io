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
define('DB_NAME', 'blog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'nobble12');

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
define('AUTH_KEY',         'sgqV6e>Y:J4%c#K)~yY9YL4onCOa*qtfY%=Fad_2jtf(I)o(2Q:jNw5maD*F%E`q');
define('SECURE_AUTH_KEY',  '-_Wp{n5&P .ois1lp>db3z%4fGrjISk&Q9lBav_xrb}$Fw5jjU-J2v/ske^&!(y ');
define('LOGGED_IN_KEY',    '>8|qLB#O(F#O{q?#]bmg^tl^+L.y4>229&4|N/=SjNvl^IjrgUL*H|&>BFWnh$6`');
define('NONCE_KEY',        '*!C1m@t*!?St.k6Cc>C|WWZtF:~7bdi=rbM1pJl@N6QuN^lbHa65aND}AfZCKkGS');
define('AUTH_SALT',        '@mS$^s#S,j0<U?`TYz{?@/aJ7><42/rqN8S=q?LNu[?G1@@hE$FHkb>5!k(:XGBP');
define('SECURE_AUTH_SALT', 'yWMEevT?yTWSJE=`Vk[38^Fa{8L?;30.v.r8p*8Mxz.-lB6sarjw|%7 59%IBwP0');
define('LOGGED_IN_SALT',   '/q(krK5B7:zl9O+!a?GSNy|/tSR_XGg.iJe2|KI%f3gDmI!U!SrD9l.CF@iNDdyr');
define('NONCE_SALT',       '&M5T%p$k!v-*-EIYK=`mnpiQF?PHWUiu)+4-!9.Y~c16h[-d}8bOkOIb<p_ba3k2');

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
