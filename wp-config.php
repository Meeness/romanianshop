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
define( 'DB_NAME', 'henrijs_com' );

/** MySQL database username */
define( 'DB_USER', 'henrijs_com' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Y6ov4XFAXQfFKVWdJQynCbEx' );

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
define( 'AUTH_KEY',         'mM!z&[dp`dNcifvU!%[Q~piTOoPd[#%QWG*}[Q4CKh.m@s%L/sW-he>t-T;NxfDc' );
define( 'SECURE_AUTH_KEY',  'AX.}2I?STV}}_!W6~$ ~[zH?kdw[R]%_X:JKjIi,&3H$ggNrb,R/KG<B)qRCQllv' );
define( 'LOGGED_IN_KEY',    'vyi$Oc_tK4W}v-||[2~&CNAg<_)WS+OAL}cIS)qGE =NICV2[`!]ydyNAb+o 28:' );
define( 'NONCE_KEY',        'D9AHN1]S!F[c#CpY^!j^B7jyS}#m  Tq]28a71@ **MXb.X8?,yg-r7>3v;Uqe2V' );
define( 'AUTH_SALT',        'sd8nC=!(E&-KS^=cT;[*c2=rkMQPi.NR^ThEVym<e<o}gCiWC:id/rLiVpT.%5Y-' );
define( 'SECURE_AUTH_SALT', '`B*^?K{:1.h+fL{PVlZ+L~40md-R`Mhf34XEDXy0bHRu%g1u%IE{5B$64>,M]E!N' );
define( 'LOGGED_IN_SALT',   '5<Uwz%}3.gh8>L q5An<h,`yb f2|6c KGgU;`I_&c_~|tj< k-]_oo%P<B4|ZRt' );
define( 'NONCE_SALT',       'w<>PkSd`:VD5?+=XUa&rgKZ{|;$#XfPU~ZoG&]J~(]+T}3~zUbVlhp-EuR>a(^&)' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_romanianshop';

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
