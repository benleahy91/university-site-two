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

// ** MySQL settings ** //
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
define('AUTH_KEY',         'e3Alu/Ws0j0fb5Azv0GxwR92EcEUZigdKehw3aJr6bGQkm50su1jb1vGiWuJ1btfLiOCSzEnnxCqqvSvcE3OwA==');
define('SECURE_AUTH_KEY',  'CfZJF59wCHU3Jvc0VoqS/Wsn3UVb2a1vhAW2qoOhnnXjZOjpYW4desUsSGrav8oCdm4pRqsH87b61pSNyFkn3g==');
define('LOGGED_IN_KEY',    '/+WZyOtTq8dnx0MwtPYfksC7in8LpsAEz2R+4O7z6L2s5ppel8K7hPe1x6e4rjC4KXjg+mTULL8ltv8J7fe2qg==');
define('NONCE_KEY',        'FZRTTTgJvzYtuS4hojY4Fi1BUBCdxsIbrzpdSgKshiGu/SmKS7XzguDDcXpuA9BI+JD3SMRew9BXRnVnQpOM3Q==');
define('AUTH_SALT',        'WE1WwfsQgmCGTHOtIq0OIZednyf0dBHh+unbrHeZJBBWMAlOhst5jl1CoUV9IlJ3820bWR011hvOmPQmKlP96g==');
define('SECURE_AUTH_SALT', 'LE3ffH2f4kqf3hw4iQOnRzxYiMUiQbs0SI639fFKbdu7cnCF5CIBVcvpM/CM8b7N1vXVnE/z3rXSAbGyEm/dqw==');
define('LOGGED_IN_SALT',   'KqaWeuxpVfPEjnNsV2CedkckKnahXiaAQJ4lHHor5UhBFpDCgFXCohhg+t+lZShgsm5+Gke+CU0eQr/zd1MTWw==');
define('NONCE_SALT',       'M9lCpVx7ENehuYRwEJivXz+0FhOnC23bOO2DZ8yibgXV3XR3uROuNTwZY3FMTe5CJ4gWVfsvAH3dnTzFoqlG7A==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
