<?php
/** Enable W3 Total Cache */

/** Enable W3 Total Cache */

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
define( 'DB_NAME', 'neuron' );

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
define( 'AUTH_KEY',         'l-6:m(oD*J]j^QHfu!){ZML1+n88*~F-z7HhbEb4RriYG0<s[XdXq[xF>]@s `aq' );
define( 'SECURE_AUTH_KEY',  'Yb$EBh]0uzgbTNsN7O+#&^bzfe0lq+<&J&jFpE]L@($*mp=tHF&~$+$1#-`X)KM>' );
define( 'LOGGED_IN_KEY',    'v*d1OUjdswzArK0#H[qedp-*Eih7xBvPW*WB!ImX^ECnke]5= 1K `Ab3#T!Cm8!' );
define( 'NONCE_KEY',        '!^6![9yNOu.gP1`VLKX6Fx6`XwKXD`s}iA*@eAzEe4WaATh9cuB7uWlK9}8Zmhy4' );
define( 'AUTH_SALT',        '{mmGS!gFnn+(dfxKr<Mc)SdlM9X[bw[Kd^bCoG6f.U?|;/Om01r6nffIWC/F(TeE' );
define( 'SECURE_AUTH_SALT', '@|/=uV7FLwR^,V)mN7,08BhFQH7`p-H!<VAy233[|# ||y)*l9JWbyg*p=Bmo~G*' );
define( 'LOGGED_IN_SALT',   'W^dqj~}zExxOhk-[1BgI{II&@n/[P|#%.okqQxMy&v%o^>ZF-]cbGRiADa#7:)dr' );
define( 'NONCE_SALT',       'Q_ICxE{5zqO_$@>fUa6-i~ZA[?a0qPMWb@4G,]a+_#m^E@r_LdP!JDbQ;wJUhi _' );

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
