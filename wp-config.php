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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress123#');

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
define('AUTH_KEY',         'BvhfYire=o4V (0;G%py{ :gv<7CaG?5ulzlvO [h[w)a;]J=Cd>dq$KgXE}TzS ');
define('SECURE_AUTH_KEY',  'emb*l`$-ohj2ipchrKg^wFmG$LB )=ucvf${1L-$%8)zKk/v.U1{f=MqRN3rr.~H');
define('LOGGED_IN_KEY',    '3Lvo2R({sayZ67O##i(M+;cDjOO I<pwf#X]{46:W$tLl[V4D`G{:2p-c$156@s8');
define('NONCE_KEY',        'c$!QwrLr^$UnWNYe>tsf~+F%.8Q/GTTBUoH<XDZ|V#fhQ5>00Gr,`1[HMqU&x;y.');
define('AUTH_SALT',        'px}Om -Q&I[/}}N~$=aR?{dxq6s.}O!%aIP-cy|P^#{?EUoa+8#/3;;kV6+G_4nV');
define('SECURE_AUTH_SALT', 'W:u38pFHp*uf1%!DiCGSm-c+YtWP#$8T8SBo[8xgsPM@fe}waKiuG:~..g1!o][k');
define('LOGGED_IN_SALT',   'Hx{5?]iA!*Imfolh<RbD3;dyx5:)Dl-w2051-WA2[J,QyVz2udkkK^G17C|bZ-.i');
define('NONCE_SALT',       '=pIdwG&X0,j~z]t}0x8r*H!pNj}fmh_N%&qj&[U*<%iY,)@|W:}#psW|VAUWW1,U');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

