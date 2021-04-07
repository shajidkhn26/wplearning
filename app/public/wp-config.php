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
define('AUTH_KEY',         'wHW54opEySlG+hq6UBOyDfFra8xcSFUI68tsd7DCVIr6SavdJO2tXENuAst9QsNtUNC1in6WTfP4d4WVtdcETA==');
define('SECURE_AUTH_KEY',  'l1W17w3QDwrXK5E2+AxVEgJqDcyEjvsONtpgSc2i+CHk4UoFQu5QOGFcj0IM/DkOLGGiva+2c+flMcGFO09W8A==');
define('LOGGED_IN_KEY',    'az1Kb+Yt55UYrsXExtu5p99oSK07SbY6Vw3yAuwELZ+LWl9yq464Q/DK/HISuhf88rdIu0EtKVs/du835DRtaA==');
define('NONCE_KEY',        'MWdGEjHjdWu11sdYFd3qxR/YEyRRLTzNCqcxNhyuwevQxmQ9RpyqlDrMqos2WmBB2KG6AiBgYPyN2bp3vYFJzw==');
define('AUTH_SALT',        'uGmkdmEcUwCE2A4f1q596cEmLVkEH/7GZT8BrYPQxdhIOeJ0JHehYlTqkBJ5fGjPQp80eQTM7mYHrSPviT5Ffg==');
define('SECURE_AUTH_SALT', '7HE4H2hlbzXreYGnSvHogZEq49x4pbZmQr/9KDNubAriCjl7OrHGKfVm0ioUCIaeXphd/HpJYrA61UMH0263hA==');
define('LOGGED_IN_SALT',   '08mTnIvBCV663qxmrPUAfH3DqNXhxcCY3kepcqsRTmjEDTsYYkxg6ce4iRUY1mSoyprloXtdCZxOGiobMnZ73Q==');
define('NONCE_SALT',       'PlzVgronpVRcxMsCxTpwGe+866TUcuP/MteEm7h8ywGULQ19Mly5Kk97vKbmDpxBw3RWBYHXvDMaBG7mlDr1Rw==');

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
