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
define( 'DB_NAME', 'cointree' );

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
define( 'AUTH_KEY',         'H4FeF<<NIp!}!b[-p$9uT60UH6]9.!}Hg~a;+tG+LW|tL~58[|vGyJS5i=qa9Hx9' );
define( 'SECURE_AUTH_KEY',  '?1MmT)CtACeSIRf_xt8i[LGOX2;Y<? hu:]e!};g]IZ+X7Ox(1J&p.E**1G|dklN' );
define( 'LOGGED_IN_KEY',    'Pl58|S3eEy6+S)!Iaqw@?2g&nCru*J#czQZif!nW`uHjXmC&V1^c|y5m_)d}?vzm' );
define( 'NONCE_KEY',        '+RCR,<wO(xQVZ4/h1^fnLeq8EL8T~}F}d!7%r4#<Dv*o[l;KMO~%`Nf52y$ox>n%' );
define( 'AUTH_SALT',        'y(>IEIn@;kUg_oQ!4iurN+%ixh/c}S<--E`Uo-*k=p=kSshw.BYy&0! p+Ns`6gx' );
define( 'SECURE_AUTH_SALT', 'asHiu>vZ5Tv!vs<suS|=1ubj_z9,yGz$U0`qEHL.aTYmf3sFOlw5W!IIDM*~WS(0' );
define( 'LOGGED_IN_SALT',   '__%t 0#xku%bV6oKB,iT~KyqXZkH2gQMB~&jV>7}40l.R/H}s7s#8-3kuMbM9o;{' );
define( 'NONCE_SALT',       'b?0!=TSjAC(#lS7`l%}T_-&w^ 1BE,gx.TB&Fn2X>Arqy(HAq|da M+wGijw9$]6' );

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
