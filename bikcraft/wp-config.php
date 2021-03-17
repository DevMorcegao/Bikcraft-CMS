<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define( 'DB_NAME', 'wpdb_bikcraft' );

/** MySQL database username */
define( 'DB_USER', 'wpdb_user' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         '9U,$IGkBOO_Vk4FosUsllC.GCCYe/gMF? LM5nRrv8c)&Gh1rlLwqWA^.B4Bn6zj' );
define( 'SECURE_AUTH_KEY',  '=[=c,fa5zvRurAiBd;GZ8z|N3*IVv9y !0kTL6.0fjb`A48%Y?gsAHwKhRM[02VB' );
define( 'LOGGED_IN_KEY',    'v&wS: 3H% *(DP%:+ZK(JM#nw&eV?uD1/*&meao1t_g7E1M7<B8i_$?KyZ?_V`M3' );
define( 'NONCE_KEY',        'pA/AG^3=YT_ZEkDuqo}1 @]Zz[;kTw#U#!((BFD}+UysaWJ+%Xk?%|3LNYF4Hhqf' );
define( 'AUTH_SALT',        ';n_Ts|b1>?d%SumMxmm&[iD9>Q).{`_Vj^/G+WYtaXX]Y9DG7;c~K SGEo%[>Hoi' );
define( 'SECURE_AUTH_SALT', 'uPeXXp6m7PS>vEJqv/Bl>M)W=b/VQIeGXPSbwQi3m<Pi[IeH2U/1a^:1r1~P-v R' );
define( 'LOGGED_IN_SALT',   '<WtUHBImWmFeMHwanD}Idfm8-Y6g~I/Do.?5-%r1izC[hlxXxm{i#.`wlW~rv5ZU' );
define( 'NONCE_SALT',       'sD/`]fF_XORm5|@:)3M2U^*DBIkOT}TZ:_=Kc~Cryzsgw({J^ouA2;AGyFm.x8qs' );

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
