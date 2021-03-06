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
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'f6928bfc2d7acba4e53de662315ca4b203134996');

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
define('AUTH_KEY',         'iw3}[?T&.&EDgf_(8Lh{6f#[^0|&q@./1EEf?@uzN~+2Km$8m-e]Qhb^qdCRGW4=');
define('SECURE_AUTH_KEY',  'h0~nax}<]g+B9VHLJGRjb/s &xcqDj-CE5fM*fE3~/Kca*xH_*ub{||Y!}<tXqxW');
define('LOGGED_IN_KEY',    '-lv{c|BqIOI3-1-c>gXuKYL2VRf=sL~p/>%WTt<N^pSixbU.H9+1M.HXMP.efVJX');
define('NONCE_KEY',        '<W8-_8uadWfs|s&,m(egjWgu[/|u?p.kQ-[pP<{KarY*pT%{3*];=$m+@)n55_rY');
define('AUTH_SALT',        'a_S:HGmjKdVK15Z_~/H[RenY3Afe7U(BK?PV%b]bA%|$kpW{mebX/^>[,w|(ZULD');
define('SECURE_AUTH_SALT', '`3]CdDH_d[AsPQR$ |}{G&I0W/k!:>:N]*05,pu#SzZ3{b}Nf>X*;c] +a_M|9d|');
define('LOGGED_IN_SALT',   '_ O:BSUe-$rSm#<}R;()7<j6iDq:{=Z_Aqb%1U!k@}]tgv_qKL0ZVNvYu^^jf%b*');
define('NONCE_SALT',       '@c X -O% nNLz(?|b?]v*eBdGem,PAK+ ?b>M+Dn~X.@|&E@GdAIL_O? C&:pf~%');

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
define('FS_METHOD', 'direct');
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);
define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
