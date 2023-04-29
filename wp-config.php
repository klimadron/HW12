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
define( 'DB_NAME', 'wordpress_db' );

/** Database username */
define( 'DB_USER', 'wpuser' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

/** Database hostname */
define( 'DB_HOST', '192.168.101.2' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
define ('DISALLOW_FILE_EDIT', false  );
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
define( 'AUTH_KEY',         '}v8 qqDym6*Llb>rO_pV#Hmd+|EP%j_Z`@wgDJ>;+n#:l]Vm2GLt<JsA#@s5.%Pn' );
define( 'SECURE_AUTH_KEY',  ':^/-mRjc)yeqp*NC}6$u0(>-sF8h@kPxi08:e/FC r<]! 3{>CVze680F{#xFj&_' );
define( 'LOGGED_IN_KEY',    '#7[4A>j6_0W2-xuA:&Z;:DV89==sOAKCM-n#vH?`k;bP,?8n6:5caIe[E%(bILc9' );
define( 'NONCE_KEY',        '5m[Ev*C}d`1CK|kJ|WWT8f]p#|)8hr80ZIz#_~t7C[5G[U+$Pkhk_)W~SHYDe1$&' );
define( 'AUTH_SALT',        ',zQj_Kd@8==%xuj NW:sjhwMh{5oMkx`CRLX~lJK 6$oWT7(PqA$7!cbeh!*@x)(' );
define( 'SECURE_AUTH_SALT', '.RY}?Niw >hwx]=r%ih2Rb9NPQ>4M10HXU-}KL;7Cxk]VUP`q:771()RNEWE0pyq' );
define( 'LOGGED_IN_SALT',   '@7+YLc6@V6?p;=B/%o]W]s)JB0ya [vPb ;YdUHh.^qe,h3dAug@nZd=/[.ayM_P' );
define( 'NONCE_SALT',       'E!OjVhH,su(A-fOMHf3`.OrY63>x41:Q;+R~dZdzt8A48@FQkEmAITV eE3pKj8M' );

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
