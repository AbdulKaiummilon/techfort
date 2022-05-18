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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ako' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '`Ub:/!^;V0jua{^EOQYKPWY({[5Ifx)8zsC=%X?!`C+1%J:,.SIPS[..-=!3QGb ' );
define( 'SECURE_AUTH_KEY',  'zf}uWiE6lrGxn](Z$NvZ=7.8<a68{OJ4f4g;Bbkon/nsfPFbl.%zl?^OLsX~j-PQ' );
define( 'LOGGED_IN_KEY',    'RmCYL+^}pR:HA.Oo^w/oZX[L^(3*>%Ax5:<wa9|U:^8x)X]+kV.$./k**RK{L0Y ' );
define( 'NONCE_KEY',        'qQzJ6eFs@]B,U4xZO)6lcd6N`1h1xJPXeQAet1kaN]e~Aj_XX%z@zbx$F9*Sks5;' );
define( 'AUTH_SALT',        ']6jy2nSa_wmnOR;9bywM)ZC#.Lxj{|6(Y4et1v[kAtE!C<~h=kC^E^54LuLUDa6/' );
define( 'SECURE_AUTH_SALT', 'kMvZOi3d2|8#n{VSAPW>B@VkOsbA:)$1Wm(ZhA%;zs0Bi~8ET}H%r#c)gE/WmUb&' );
define( 'LOGGED_IN_SALT',   'y(?QwH^-:lDYk;A{]%~7NJ8X#$,G!c+;$~v$RsSIGY3_3T3 S5dx$(4&?v@[Lq;O' );
define( 'NONCE_SALT',       '-%@x/zmF6@l}>yNE&nLOFr!D/&2]F`g:@uOJ4DeD-Z9*!Cw`bv}P6$+?gObI%)h+' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
