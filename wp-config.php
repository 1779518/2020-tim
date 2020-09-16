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
define( 'DB_NAME', '2020-tim' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'FI$.vN/h^2 Q@Do~;y*a]T`$FE(M@g?!`aV}q~iFIm9hKR2Z{hc]4TR%{2.fp|W9' );
define( 'SECURE_AUTH_KEY',  '|bXw(0Sdw!3|-0qlQDQNWl3[yqRp MQDEI0n75biQPZ<8B(O-oSZaEZP)7H7plll' );
define( 'LOGGED_IN_KEY',    'NlIauyT#Y%!Adq!ICJ)v];EY-Xn@gS#c4C_Zl<ht{1d_P>2qb`qt`e2g]NLQ>K#;' );
define( 'NONCE_KEY',        '0y&J.+*xW:-K(2alOGfzGlO&f/M`(.$sTmfNg]tt^v-0Ob{~!;Y8:SQ7nrTn!6Uo' );
define( 'AUTH_SALT',        'Kzm3+<YdarfwG5/Un{<nI3rD{aPbf5&uJ`E{E7/{ILy7w+fd5VhGC&NH9-M`kyko' );
define( 'SECURE_AUTH_SALT', '8}Ty[: #r|  m%[X ^/ycqK`I6*h(]][Z/Uf;^BsZ.l~<771.w}=o{V2pR!Lq``|' );
define( 'LOGGED_IN_SALT',   'ZkJnqqz=!v>A4V.-}4.Trf.<P.tb*t,84&#rWm 5|j>+MW$eSN@XI[fd<C+n{9c*' );
define( 'NONCE_SALT',       'zAC@:$`vK~&oNXl|1,b3J];1zsqdNF1q4t1 JtP`bfwooq~jB +-t{gkunm}e@jf' );

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
