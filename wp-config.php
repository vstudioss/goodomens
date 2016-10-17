<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

define('WP_REDIS_HOST', 'findingomens-001.c4yvp2.0001.usw1.cache.amazonaws.com');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'FindingOmens');

/** MySQL database username */
define('DB_USER', 'phpMyAdmin');

/** MySQL database password */
define('DB_PASSWORD', 'phpMyAdmin');

/** MySQL hostname */
define('DB_HOST', 'phpmyadmin.cw637ad2cjeo.us-west-1.rds.amazonaws.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'O,6&^xeC1?Zuhro7-oWP IFAvw*!heF|kLjg+z~hiHm-0%;FXI-E]u&:DJY22di#');
define('SECURE_AUTH_KEY',  'BJ6~B/eAVVsn^1-2Dn,N<AdRCo==C)&FXM@7]lTXvz~Qa7i)ds/-aHg_mMf2eM<3');
define('LOGGED_IN_KEY',    'Gw+v`k!&+I7LSWrk8(6[D.h-ZvqIj5;iTV|,Y%!UK{-5(v>+{nSPF}&AFWG#2+IJ');
define('NONCE_KEY',        '4B!n@,9],!ebP~GQPe2p&;==2?`)V6 Ss?:@~CIGA:/}s-K(?jgMh(.<,~  (~im');
define('AUTH_SALT',        'm|&.BC_(8u5-iT_DL~;}|8N{UXL&8:#(-H5p%SrK Gu2x#`M[=>M+Ibr2I>G`{YS');
define('SECURE_AUTH_SALT', 'DZj7HodF5~)>W,r$o8`8Cg#a^t`MAu6;~Q)AoE/}AJJ(n-s;AB?2+y^_,sX!G3*o');
define('LOGGED_IN_SALT',   'WL^+5W7*XdxRX5IB%(&d@bkZ/qeNAi=Yf6]hDw}lg+|.2|y-Zc5y 9S*%>5p7>xN');
define('NONCE_SALT',       '<ulV)t59am|#5`bi07]hL1xOfT8p*:|;v0>,;:uBud,5h7QSJ=P2-+<Wl1b8?spn');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'GoodOmens_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
