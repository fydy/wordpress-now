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
define('DB_NAME', $_ENV['DB_NAME']);

/** MySQL database username */
define('DB_USER', $_ENV['DB_USER']);

/** MySQL database password */
define('DB_PASSWORD', $_ENV['DB_PASSWORD']);

/** MySQL hostname */
define('DB_HOST', $_ENV['DB_HOST']);

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
define('AUTH_KEY',         '3#F%l{%gkMt+*ULAQ07|njsJTVZ&|ZePoP R.}jey;^$K}OThAE<|#d#3U~C]}+&');
define('SECURE_AUTH_KEY',  's$3@Be+YFk|DY!`t3vzF)Lax1UWJFRcER&!7gY.ywpV-+.t|-@{;P~);EeC0/QRB');
define('LOGGED_IN_KEY',    'z//!i-/?#E>A2;Dl{bsZ_.[<1|sQmQ&^j?_8c6dbTYE<&)ui5#Yfue=Q_OU|v@vC');
define('NONCE_KEY',        ':ejb}3M_~,XA>|^{>+6b4ZG2|#8(+Q5OH|U9KI`jOX*onD-T^S*z:3Ha%nU}YZ+B');
define('AUTH_SALT',        'Y}{6]RV{rhegQgc!q-.9;S.4&okub/IHfHf0`4$raoJpD5I7cz9ju$N`3=a]f:s^');
define('SECURE_AUTH_SALT', 'Tdh~yk*$+2+<WD++b|~Pa?m6v9#^-`r}]ZkNm!zFpaXL%OJND,u]75}ka}p%K.=W');
define('LOGGED_IN_SALT',   'yoR0xweUDTPsmoeP 1T-TU]>aT+fn5iIlPhq2L5n[8)]9caQjH=$(+OX`S9?{Nb%');
define('NONCE_SALT',       ' [6+Lc4fg7E+n>(YL.k@R+]AZb%%N2pkS-|!!Wc;[G9{:3M=N-8/ct{$bnFwp>Ko');

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

define( 'WP_SITEURL', 'https://' . $_SERVER['HTTP_HOST'] );
define( 'WP_HOME', 'https://' . $_SERVER['HTTP_HOST'] );
define( 'WP_CONTENT_URL', 'https://' . $_SERVER['HTTP_HOST'] . '/wp-content' );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
        define('ABSPATH', dirname(__FILE__) . '/');

define( 'MYSQL_SSL_CA', ABSPATH . 'ca.pem' );
define( 'MYSQL_CLIENT_FLAGS', MYSQLI_CLIENT_SSL );

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');