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
define( 'DB_NAME', 'celinaka_wp519' );

/** MySQL database username */
define( 'DB_USER', 'celinaka_wp519' );

/** MySQL database password */
define( 'DB_PASSWORD', '941@5@DSpn' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'mo2nga5gr9kqr8kpxdygmrovddxaw5oisql7gbg278akkqvmf1zivgkowe4ubkmc' );
define( 'SECURE_AUTH_KEY',  'bmekenkuqqhghvj691npmsyt2ugmzyuvmaiwa9o5jywrwotoxd4idusejii6zjzd' );
define( 'LOGGED_IN_KEY',    'rcffkrjhl3aaj6xyyodbekfwrnhddbkckrbeocjwktlvostcyk1xbqf04afhiuhn' );
define( 'NONCE_KEY',        'p3mt4qxhviuryuajile2pfa91vmhbkkbujfudqxe1tqynav64fzzlczf9ybq2gfq' );
define( 'AUTH_SALT',        'or73fqywg2xua5yatvbvbsihf2sav6kwv8v43sknrwvjobxtb0ikgrevbsxwbuyr' );
define( 'SECURE_AUTH_SALT', 'vpjbyw2tl1tqjeahhymhblpwsutobhcd6ercmrbljtvfcbk6y8ghw7viaxszqfs1' );
define( 'LOGGED_IN_SALT',   'q5qlznuerl2ebcji6yi79r5u0qbasffygbqjc9rebormzmukehiwcpsluugzhwgk' );
define( 'NONCE_SALT',       'vkhjf08ortn5okxl47tzz5quxz4xw7deh7m6geishtankra4etllbpy1qum6zclu' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp3t_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
