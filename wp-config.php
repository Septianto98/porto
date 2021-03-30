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
define( 'DB_NAME', 'portoporto_db' );

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
define( 'AUTH_KEY',         '8>jB.[9erxAG%Z:IU+DBIMYJy:hs`x@&iyKJs+#)ZRl@v=_V(Lq;r>[#nsPb>t@L' );
define( 'SECURE_AUTH_KEY',  'Fo{/E}a6>v@d[s$|E,(gPkV1k8~5I@a2N6vP,eX%pt.JeM]x<puqmAI$,2GI^@D#' );
define( 'LOGGED_IN_KEY',    '@n5KJN#9*j|{UL[rty_z(*zvek~uff8g-U#bz6Ih}m7;Ac/+z-.+)29[~>jWq/g4' );
define( 'NONCE_KEY',        'bH-;9}pJUH0 Cn4q<h[dKAD%  tP$]i~aZVy)~{+xH4EYA64EV:Coa`w.1+5i|?0' );
define( 'AUTH_SALT',        '*a*`dIJVa1PlQDE(XQxtCvPbSF|N*B}LCGI-+IjY{M?!Jc8g*e!h(l4G3I%|G[`4' );
define( 'SECURE_AUTH_SALT', 'a^Z.dr*6&51>7tFrN ;iN&n=#!}]Q)K|vbp!:.F+fp8zZ:dRR<(I~TpJ2HNa><3:' );
define( 'LOGGED_IN_SALT',   '30brQaY7f+OPM$YRs ,MN.og~?79C_andQPAED5[&AMmy9ah$ceWQL`9MHns+#Je' );
define( 'NONCE_SALT',       'pJ8/Fj6bS74KeM!8?Fyk(UvAG&#`Qd}L?*[95e$)_N BEo8g6Ng$@8hAn:GE5Oij' );

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
