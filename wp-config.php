<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '5_t.L9lMc d(Y:F%@)! >/lDeSV,;<-8u3G}Y?#.+St)}WBj`p(#}IPOnX`4=+Qe' );
define( 'SECURE_AUTH_KEY',   'Ge+t2r HR$}5 $mJ_T{RhY83)3y!JBS<_1,P28pMH7X;W>$D!|:p[!;Pe&:T:oR1' );
define( 'LOGGED_IN_KEY',     'djQ7RpW~])}g[ u?_qJg^3gu<o*,tXZ,qpUuVJ%rnPs~9PVeM?5q@LK(@;Hlo]<^' );
define( 'NONCE_KEY',         'rNe!R#bhj`N8.9Cxj:ydN9>~{U-a-@JGl$rY:?CR77G>1N*O4~MadHWjZx^+3}(F' );
define( 'AUTH_SALT',         'B]w_{(d*qvPmEMjxIuR7q:)Yx;}*xni3{M,PMNy)$idD,Ki!o]T#O67^cV fv}gJ' );
define( 'SECURE_AUTH_SALT',  'GOEKMxM|[sFugmzp-An2VzrMexs_z=w`3`;GhqFHBDOt>/&y{:ok}X~a?<;Wt4A2' );
define( 'LOGGED_IN_SALT',    'tUc(i|>!1%Y1+ 883eTJoQQ[/j<&KR;.8YW?!U=~m><q,-:4m[4A5#YY*&QK_Qp#' );
define( 'NONCE_SALT',        'UOsmEEx6X~aZPn^Oks)26sxI$!_Up{Zv[($0%4sMJ<lL=KO)(<h{&rJy5:W2J$/@' );
define( 'WP_CACHE_KEY_SALT', '.17;3Y_+.qP0)maXhu?;6rr@rNm=;~UaE#;x<x0_LlNOr(Q9Bu|+> )s$XrJ2Y t' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
