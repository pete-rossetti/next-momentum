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
define('DB_NAME', 'petethep_wp721');

/** MySQL database username */
define('DB_USER', 'petethep_wp721');

/** MySQL database password */
define('DB_PASSWORD', '5pmb.-S65A');

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
define('AUTH_KEY',         'j8miqqhqyoy7hgdguyxvkva4lxpfmpyfvtko8d84junnz0dleaytld6wqkkbz3yx');
define('SECURE_AUTH_KEY',  'gkgxajckvlg6qcsyajqsopclakzpxukzpqzdip646ajgyjbe9sfpduhhlc5hdoxj');
define('LOGGED_IN_KEY',    'fivimnsf47mzjjbiualfc37k6usufcdri6l68emekktqbqzpouohuxyo6ats1plk');
define('NONCE_KEY',        'otqvmwyhbw3qquz48gnliltq4igvfoterzabsrfx6xl4uempb3etjzuctwqvoca8');
define('AUTH_SALT',        '1ub189yvzkguudy7fkyzcxwszyhg67qmdx5xszt2b7fye2vzazjxzhodcf0dh8t0');
define('SECURE_AUTH_SALT', 'igss3vo0q8dbh4puubvbkfhodduxgmu6cpgsvkt44prisyiyrsjwgfvc26qgxzq5');
define('LOGGED_IN_SALT',   'dmnvlqhygg5u3s8k8pqwhkumhvux7behoq24jehstpxzjzd54bzei4fhvitvyyz9');
define('NONCE_SALT',       'iasmxgvw5ffqyay1bt6a83qfpmkigvngugcy0njowshrdun7mjpr7yaagmfpwyf5');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpa4_';

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
define( 'WP_MEMORY_LIMIT', '128M' );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

# Disables all core updates. Added by SiteGround Autoupdate:
define( 'WP_AUTO_UPDATE_CORE', false );
