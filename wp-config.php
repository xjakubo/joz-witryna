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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'vixa123' );

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
define( 'AUTH_KEY',         '^/gE.P)3B%kD&}!fdXF5m|=7,^} = =4ROXP5<R<WvJrM[o0&^;UJzOn]55`RLE)' );
define( 'SECURE_AUTH_KEY',  'db1M0^?5mo i)I{G~W:%.hbO =k.CyW?+8OjK2mF>tqNTa)_{-2WJ_b&8&Kj_~SR' );
define( 'LOGGED_IN_KEY',    'aattOy.F.tv-R36/<y1S?7 f4X.tHDD_a/r(ni^MXI{aQ-V<JkMM)F)FrA{bQ?gT' );
define( 'NONCE_KEY',        'aa`O9&.4;{/mtz;n2%UZlP)JemgDB~ACV)@<Jt,+#uB;Z3<~-{]aa @HAUI5YKc}' );
define( 'AUTH_SALT',        '9/;NCx7@8PS] la@&D[BTN*<~yZ5nV45/(if}|38GwQ2rFd:DyBt@,,(ckD;I9kg' );
define( 'SECURE_AUTH_SALT', 'c6~]K7)e`hdcOd1jTkdUUxm=zv0u;,Y^9}{Ru})h-Prc~{IE5^1QL?u&6{uaE5Kd' );
define( 'LOGGED_IN_SALT',   '2Tm.0OB8.Ndm4XX0;f@{*tCrfBBAq,3<*}R{Ky;|sM|J,y-7kw4h=Tu@ # >j8Rf' );
define( 'NONCE_SALT',       '@KqWQ6S=|@hKD]_F)LWuCFM 6nl%->ze<SBWCtKidw0m V0S-BKE4<]x3WLH{AeV' );

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


