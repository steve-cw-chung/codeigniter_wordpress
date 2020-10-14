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
define( 'DB_NAME', 'test' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '!370amapola' );

/** MySQL hostname */
define( 'DB_HOST', '192.168.0.7' );

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
define( 'AUTH_KEY',         '@M=r)M=>:VqN]=ia&?z.@%;C}T0CRGH 3gY^HlPOsTBg >`zZ]?j,;p9ik-o)Psu' );
define( 'SECURE_AUTH_KEY',  '#L3dRNt=jY;r{^,erbKcI!B6t=TY-pwdHd*>N4x>SBc~QHblx`!XU,Y.mA.z@{Tf' );
define( 'LOGGED_IN_KEY',    'ASo|q#$h2Rg_JB=ez(!4l}BAP0Wz;b->!!a>m+[y)pwhO]ZW%u`ZH,%{mr,!;72(' );
define( 'NONCE_KEY',        'Cat&Q G E1__ ,WH)M^XB1vK1QHoPT]dfVFL%{vm>;q+A(Gg,Pn|N!z/t70nV$bC' );
define( 'AUTH_SALT',        'v%K3F^3r{&v-=ju4uxac/}*<QX(|NPvgNB3I48*#=^;%k6#ubHy&*{[|jCs`EGZ<' );
define( 'SECURE_AUTH_SALT', 'WD14-$pvLhszH=rr?Gz>lO|YxF,T4y&<$Fz+=W9?0gu`kF8g5&N=U[&Dbw&,.$VR' );
define( 'LOGGED_IN_SALT',   '({.i*)150a[W6-tctxw;Z(*531rT5>xPkQ=h_CteY:@.&)K83j/HbXz[9^s~4T99' );
define( 'NONCE_SALT',       'YEai4QO4f,h>me!Ic5ZX.na=7<zw!m?Hg=kSLU3LEGOtOeZ0VK~v0WVcGGa(LfgI' );

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
