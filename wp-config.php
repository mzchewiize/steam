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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'mbdevtec_team');

/** MySQL database username */
define('DB_USER', 'mbdevtec_team');

/** MySQL database password */
define('DB_PASSWORD', 'team2016!');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'us!;>% 1FSf(%QwRp_Z%oD?71uc$:kpmtD-FuAyz+~3NqE3=K6K}2AoXwIc)x>)3');
define('SECURE_AUTH_KEY',  'N9cDbO41yZV[l65]i2zJw^.v3=n=_cK*57z~`oPRSxl(0@fyEJrpdeY^oP|um s/');
define('LOGGED_IN_KEY',    'x}Nt56Lpb`te}EW2`5Id-r(aH^l]r yl(  Ach?.Z 3G:Q_TOdH!~;bu0=rF_Q*7');
define('NONCE_KEY',        'h$fu#bO:bV gis:8IACFwe_U71k|)nD!S<<T:<ub<-0$H2,VL)AggJ:8p/&GR.St');
define('AUTH_SALT',        'b]|ELf(i5:=mD;^C!V`4]NWpF=h4~7o*-RUQhaJy~K1u->{v7*`K/(R)myw%#D+<');
define('SECURE_AUTH_SALT', '11bW(.~(LBY>q9:C&kD(Pj1M*I6Ss&mm$&,*T<jrU+s.[<Z`C)D aOPHY|%,0=3y');
define('LOGGED_IN_SALT',   '!#i*,X9/v!9og$qm)==6${$aeiB?b3}Vz*gkePH; *7n$hESWP&V^9,ZPvP6/n3 ');
define('NONCE_SALT',       '22&Z<Sx/CO=&|)5A{bGEBFNP[`{B]fwr~&OPvVlv?o(NfZ&}E kGgszxMl1Q;zw?');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'tb_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', true);
define( 'WP_DEBUG_DISPLAY', true );
define( 'WP_DEBUG_LOG', true );
define('WP_MEMORY_LIMIT', '512M');
define( 'WP_MAX_MEMORY_LIMIT', '512M' );



/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
