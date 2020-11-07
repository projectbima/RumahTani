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
define( 'DB_NAME', 'sql12375079' );

/** MySQL database username */
define( 'DB_USER', 'sql12375079' );

/** MySQL database password */
define( 'DB_PASSWORD', 'BGbJDAca9D' );

/** MySQL hostname */
define( 'DB_HOST', 'sql12.freesqldatabase.com' );

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
define( 'AUTH_KEY',         ':b[bo~g<9X_;cJJ`t[wQE{76aPfuurK5{1?l<p3(hw#%-)daEnmJ5aDB)0bk2@O*' );
define( 'SECURE_AUTH_KEY',  'i_-K]#V[aft4c{r~M7A[MN&@-@#Y2:i*5{s1[2af%<(7px/=3anyWkCc>b(MKUHN' );
define( 'LOGGED_IN_KEY',    'DaO(33;Ws|X`9s%&G.dc{NI{h//e]$0XV>G#~/#B;R/nX%B 22$@/x2wILl(8bG5' );
define( 'NONCE_KEY',        '687Ssifk]>bPKL*NA@ASU99<1n&83Ja6R:>tY:K f@og#)>B8l+Z:p3VCNKe3s05' );
define( 'AUTH_SALT',        ' :UCv5*>.:I|bZ^U&<QsMYt) <Q<rrCfw(kLV1IgOtNXisj]/u>/<QnQT@[DiJ4j' );
define( 'SECURE_AUTH_SALT', '`.a4#EaxW;8SD1FqRqda5acEP]mbR!W.8dRW-;_4^C;Q8q%y;|>Bg6S4d hry.nw' );
define( 'LOGGED_IN_SALT',   'tB7$#|;I_g5) 0DooFFrUJdr`[h.|=b,KuIt7D [^>YH7,1J8VRC9Lhd:X1bRJw[' );
define( 'NONCE_SALT',       '.~o|!kBL+e0TZTvrV58zLPOHe5.tRI63xE16Hog<dyxrBDI!!ry`<M|6h<uG7X>-' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
