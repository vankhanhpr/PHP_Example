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
define( 'DB_NAME', 'mydatabase' );

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
define( 'AUTH_KEY',         ':q^R(~xE~*r :.:~tMB){]@_m<G|/-j&O0_^WS=YUssLn-O.yu1:sj{PKUI?O^)A' );
define( 'SECURE_AUTH_KEY',  '=WDVH|>7|{F=756,}hOT93[QJ}$)4(z;v;8%kY#etc`x%&{Zo}xVud&!0LL01X`}' );
define( 'LOGGED_IN_KEY',    '%zin35,a@_>xu2VmHN4[6h@IG}<j5Gf]xNo,i]4QF(2_`PX4;A8Lgo@zpAeBv$a.' );
define( 'NONCE_KEY',        'P?5R8@E>K?W~M~JC?|9BOD#>fnhrrAgrUc8<@}psMYEoTELo)PuV}?|L;=@[snC@' );
define( 'AUTH_SALT',        'V:}^(MTkl~i>!j(6n3`pO~%zMX0cOihy4F?#qsTuVt^NIS/[}GIa5r?&yb1XWj]=' );
define( 'SECURE_AUTH_SALT', 'X7 ({9hI3^OXCE1~.Z`UxH`%,_1+XV}/T/;/|I({zZm##^lv-Cws^;[5ZIR./fD%' );
define( 'LOGGED_IN_SALT',   'x3O}zgo]qGy0dUdWOrJeNq|*rh%JUwU/|Dv7/vNEBF- M&v]+swf}=)f2Hf)[%0(' );
define( 'NONCE_SALT',       'p!z6iAw!sK<2&9]Y?ciM**@S`DLiJuMp-HH:[A;-Wh7O^269{+[.GCl@4$:G5v]!' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
