<?php

//Begin Really Simple SSL Load balancing fix
if ((isset($_ENV["HTTPS"]) && ("on" == $_ENV["HTTPS"]))
|| (isset($_SERVER["HTTP_X_FORWARDED_SSL"]) && (strpos($_SERVER["HTTP_X_FORWARDED_SSL"], "1") !== false))
|| (isset($_SERVER["HTTP_X_FORWARDED_SSL"]) && (strpos($_SERVER["HTTP_X_FORWARDED_SSL"], "on") !== false))
|| (isset($_SERVER["HTTP_CF_VISITOR"]) && (strpos($_SERVER["HTTP_CF_VISITOR"], "https") !== false))
|| (isset($_SERVER["HTTP_CLOUDFRONT_FORWARDED_PROTO"]) && (strpos($_SERVER["HTTP_CLOUDFRONT_FORWARDED_PROTO"], "https") !== false))
|| (isset($_SERVER["HTTP_X_FORWARDED_PROTO"]) && (strpos($_SERVER["HTTP_X_FORWARDED_PROTO"], "https") !== false))
|| (isset($_SERVER["HTTP_X_PROTO"]) && (strpos($_SERVER["HTTP_X_PROTO"], "SSL") !== false))
) {
$_SERVER["HTTPS"] = "on";
}
//END Really Simple SSL
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
define('DB_NAME', 'u870481335_infl');

/** MySQL database username */
define('DB_USER', 'u870481335_inflms');

/** MySQL database password */
define('DB_PASSWORD', '2]K0rU6bfB:');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('DISABLE_WP_CRON', true);



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'adskmviwuy660w1dulgcldnprxczsh6wstbiot2zi47emvxq3afpe5mugdujxoqj');
define('SECURE_AUTH_KEY',  'lbkvnbc0bdknq8ua6ma50ge9wxildf66rvxndk8h0ymlkdnhalklwhymttzx5bjt');
define('LOGGED_IN_KEY',    'xhykzgcbh4uwxhg7hza4qcpiyhvrfosr85kot2swlzrwi3ehdfjvlbwx9z3ucdug');
define('NONCE_KEY',        '5msqzyum20vwjdj1bmbmla3ytj2xeovo2fgvclsqxjdoaccin7pg1vymxvgiqwxo');
define('AUTH_SALT',        'cixqueimvqhnq3lnqxam5ps4tqrgexdwpwsrnihocky7s5mjsk28dq96nlj8jzhy');
define('SECURE_AUTH_SALT', '5ysi8nbtbejwx8zzrz5wrwebl3h6x9lrgyihzms8bfoabtpfwjgpin1yxuhh7xri');
define('LOGGED_IN_SALT',   'y1lhrfhattpqvpqwb9ygkj936kvw5pjcnawrzvszndmgfzsur7n6a2qsy2cmgwdm');
define('NONCE_SALT',       'sbgpqd6dquc8lwetuyboiz4ywglozg2mibbdut6lytms9bfvvm22zaaoumd6xycp');

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
//define( 'WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');