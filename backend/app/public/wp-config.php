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
define('AUTH_KEY',         'y8+xiT0xEdRjP6ks4FONKt2tCnk58FqXhzpROCX7X8Fz1IN/o8uTqHGFW9PDTtnOKOFjPdef4Z+EcWEGGRCUMQ==');
define('SECURE_AUTH_KEY',  'h0ODBG90+ICtNhLREyZvuTOMQA1FivgidHOSKXw2QzL6TG6icXjs+cPpT5VO0k56H/B3y6TvLDcBOYRYNfOn9w==');
define('LOGGED_IN_KEY',    'pvzZLbq8Esa+ZP4+fnoeGbhQMd0jDFEPhe/M98jIuC1JTe9T43AUo3dt2GvNx84dlD9IKdssJWA6nspC/Rxc7Q==');
define('NONCE_KEY',        'z5hxhd/oYUXRUdPruBq/SRTGTZ7s0Tcfv1wv2nIv61HmUxdk0k89UxSX8eqcuJZtoiYgosahSKGEVTGpHPbspA==');
define('AUTH_SALT',        '4ZQP9OHZJxqk9yXLGaBzBBfZe0qPTd9ZJopEQdeDQgNkVsS/PB5UNnIB4qOfUvdBDmhmh44pwqVRYgbTP1PJOw==');
define('SECURE_AUTH_SALT', '9yK8so9XfByX1MaOroBfcsQ6nV7T1ms0of6R9Ux22mqEkrS7owzCUAdof77lfTcb9rWLcEjyF7rydUQ3dD5ZXw==');
define('LOGGED_IN_SALT',   'vNbd5NqNkP7gvVFpYC1gpWlwEahWkMpXNYV24W9stQTPEKqvbc69dgKeynP14Ba1pEs8mRzul87xsB/y5N39Gg==');
define('NONCE_SALT',       'PCrL2jPmicor8J96t5huHVTDTjsLoWtQInwPzY8p83/kqexWlmq4hwes6l27RvdDkoyMGs9M8ixbSXLrG0LHDA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
