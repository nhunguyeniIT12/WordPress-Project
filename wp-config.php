<?php
define('WP_AUTO_UPDATE_CORE', 'minor');// This setting is required to make sure that WordPress updates can be properly managed in WordPress Toolkit. Remove this line if this WordPress website is not managed by WordPress Toolkit anymore.
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
define( 'DB_NAME', 'wp_mpcug' );

/** MySQL database username */
define( 'DB_USER', 'anhngugrow' );

/** MySQL database password */
define( 'DB_PASSWORD', 'x1(M!!Y-2Dp1Kc_5g' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define('AUTH_KEY', '0g|Hdr&kr6)5c*s/o5rD(BsCY7c32lt~_NPH513lOpq1zCAP8n~4|F)jBaRH43T~');
define('SECURE_AUTH_KEY', 'Z37*g-2[N(~08]#[:ky7K0W#LBcM!U&ZI9;%7/H|u8Z7Kv|tW46Lr-6(%H230v12');
define('LOGGED_IN_KEY', 'L]x@~+72Kx1xXqI8B;*!8B];udK;%ke1!6v9v56cE7M)%j91IzZT)(mFV(2#~XDK');
define('NONCE_KEY', '6]|RlTADct:!WJ6I!O03ND0PiujFqQXE4P-H02/r*iG5C|L3#t|7(95hm+nB9Xym');
define('AUTH_SALT', '4o8E[qEHp8[7R0TL9b+4L8;d0pb7jl788(f_/11dpR8mFzv;p2z4H%k:@!+~7m|E');
define('SECURE_AUTH_SALT', '!9oj(8f9y6_/7+99F3#]#XfqZKAi+*40AiS7@7e]HM(Ow~mhrcQB~|UC;&/bq2%s');
define('LOGGED_IN_SALT', '769w(fm2gw3k|id9e6y6c4y%%@6Gut3_%~F)7%]]thGtMK1OV;&e!6NUKu26Ccxa');
define('NONCE_SALT', 'Kp]%_LLa1](_01&khKEW)~95s+8]RFfOh3_4]o46dg[&bzk5#45rp_4Q~S_a9n_N');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = '1k34x_';




define( 'FS_METHOD', 'direct' );
define( 'WP_DEBUG', false );
define( 'WP_HOME', 'https://anhngugrow.server2.trinchera.dev' );
define( 'WP_SITEURL', 'https://anhngugrow.server2.trinchera.dev' );
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
