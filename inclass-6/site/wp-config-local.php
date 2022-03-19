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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'ky3Y2vyoJWzEvBbI56HWwSxsl3Oz4EzxqyEW9wi0gyJ7JybbjLh329JKhMKXkxxZb7+EzOL+1AGGf/RLePpWyQ==');
define('SECURE_AUTH_KEY',  'Q+TvTCqnpRG5pNMqHgkZTYI610vGRN3ApM+S8Og1cWWYxwtzp01a0GyxW3rtZpGnNaec+0IAaTFe9oV5mQBCOQ==');
define('LOGGED_IN_KEY',    'asYRFHi2QT5CiAbnS+AsQZvr6Mq9sZsAjRQhEcRit+/Jcdfsc3Mp6uiK16wQxZPew18dRF+NfHAhXchDdA9atg==');
define('NONCE_KEY',        'wU4x8TmHeplfTVKoXuiBYnuGONkwRLhgpI46NqWN+OtM3SexheaAnjS15ErpXHbBP4IBybW3zQan+K02ACiOPg==');
define('AUTH_SALT',        'dBTTxoZGD+un9dxKFtqwKjo8i2R/zaIs3xFuG24ui23JU7wtpK0CqoPxCxqmAnK1VHfiTBuSuU6dthdGp0oqYA==');
define('SECURE_AUTH_SALT', 'xrnTEwn/VG7ovnezRrXvctIjdYF08BPn+8H6a7JvNjEnehpye8Pkf80MhDiVUkNWDhCiCtFfjv4LCEbGXzRbgg==');
define('LOGGED_IN_SALT',   'ZAYYUFI456Kbn6KBw+GDsmzpMiZtr9FAV69mlUjT1Oukp6vS6iFRTOaKtep1iwXi8qg9CMiskfEaqPGRO+AlLg==');
define('NONCE_SALT',       'eHzzIsIwAsQCGTPOc0420ORQKMq0Vi3DgfszFvtifJIWvKph5iZk8KU7xbK2whX5aKlx8SzLkNITkbts6P+2+A==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define( 'WP_HOME', 'http://devlau00039mtm6303inlcass6.local' );
define( 'WP_SITEURL', 'http://devlau00039mtm6303inlcass6.local' );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
