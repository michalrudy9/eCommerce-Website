<?php

define('WP_CACHE', true);

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
define( 'AUTH_KEY',          'EeVWDFDQcu&5<igcM>6kb|42N*[rHIq )<-Yi^Ys}{dJkI1%Qo4Sm08|6~Bvbf,[' );
define( 'SECURE_AUTH_KEY',   'uZM%cIIFUL|^]J<*?>PNu,o-|*U1=G`knWS@{<*/jDw`A<t35q&cxg!N$0iwxa^2' );
define( 'LOGGED_IN_KEY',     'zd6-x#`(`J0yr_TjW:-Xm~%v>ZmEi3B OzDcVhC*u?f;%Ec4kSPJ1lXp8=d-ue,Q' );
define( 'NONCE_KEY',         'g)q{iE(i%KlKF/3NDr8,+zapUX2EZ7_D:u&>zhxu{]}ae2=tDL0=3GJgJD*BL.Q5' );
define( 'AUTH_SALT',         '_wqrwR@[nZr|oI]Lni#Oese+Y;hQ(_i4lwh&Z.M6Z}3:N{#H[LoHRHAdmuIhAdIa' );
define( 'SECURE_AUTH_SALT',  '6,!3wliYX6KoF,ic)G4lK/utw GefI:nR}gbt]E;?)nJ&g)ZGNLxQG<)(msK :<j' );
define( 'LOGGED_IN_SALT',    '_U %V(y,AP)!p(35a+jptRvaq1*o>?G5*,zJQ4kjX4gfzCyydV8aLEI4pCK6)-|5' );
define( 'NONCE_SALT',        '0Vvnh6QG(Y&ngzD4b1-Xv}c0aV/~2kk<O<d(MDUBv6tZ&|DK!V# tGGN6kG!^n3j' );
define( 'WP_CACHE_KEY_SALT', '*5kchx390#E`6O?RQ4.0XOWQg[=+/)~5[_nTF3E~bd>2%%r3}|?for{xnh !u+$p' );


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
