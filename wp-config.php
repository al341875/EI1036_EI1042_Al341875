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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'id7171976_shopingdb' );

/** MySQL database username */
define( 'DB_USER', 'id7171976_jordi' );

/** MySQL database password */
define( 'DB_PASSWORD', 'shoping' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '.+Ttl$z3P}LqKDq4#*9&jH$u}IwP8st@.F1RIVFk#.td!fLtg9+tQU^6Ru`&@OjH' );
define( 'SECURE_AUTH_KEY',  '*AulA|Ezuw>X[%YQ4?s8l6(eS=DkEB=Pu&!mc7~i6WDR]77`kmm4<BrAYa<x6WIu' );
define( 'LOGGED_IN_KEY',    'T2X|!xUqTq4_a[*O5Ynbh?33g#8XVmcV_y*]5{_!3p(8jlBk`XR1}P,.W(cD7wDv' );
define( 'NONCE_KEY',        'dJqD,.NXoB$t1-?Z$WE>yd@p:N4Byb+4L?xQV(h7o6|i$LK9}qVqD([W6waPrPB]' );
define( 'AUTH_SALT',        'uEqtC/03CyWEkVjG@fH@BbrU&:R^03^*tlUw{>dX3rTUd.QcZD<u4$/5>GjkUlO&' );
define( 'SECURE_AUTH_SALT', '^Bi/3D)/CVA8UN-X_ X&<+R`lw[sTxSmR41,;eVd4]]oFwWfoX5U1`w;nSv>!DY;' );
define( 'LOGGED_IN_SALT',   'Xow<<+.z6TE2Jf`nhU}MrN(P!NE&0 s1g1o.5pdP%5}D?=t,&rs*K.3|X<.RDl8/' );
define( 'NONCE_SALT',       '_V2gP4:ddB+y.?MpH(,JbD!c,$I u6&fm& ?b#%A[Pr~iKjuR5L^:z)1r&?RUGg4' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
