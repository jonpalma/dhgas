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
define('DB_NAME', 'wp_dhgas');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'YB(c rH}LK1?3{7L=G`3-roPVt@S>79pXIQ LwO]$0/Az5c|h&phhkt9SQS84wN/');
define('SECURE_AUTH_KEY',  '76:vm#-J3Wy+t+0EoY,<8xx7Yjs6L>@yGhL1,bG2bYpdFP%?R!*O/qglKTKuI7zp');
define('LOGGED_IN_KEY',    '|!9lXzXAz^fakbDnTuR`%HbU*60[!1d7na@NybN>^#LJa}t}D7z?>R%r5?^bz]R#');
define('NONCE_KEY',        'Rl1db+.-GaOhJsLzqIg7x*=8ZG84_Gpu<X@.g65f?f!SnKf$P>8z]*cP9xkL%xH8');
define('AUTH_SALT',        'gWhLBcUuXfLN}s>1:^<,1B?e`)r1kG4r;MZ~ND_acvAm|*uM0DulpW!l= TD(btt');
define('SECURE_AUTH_SALT', '3T:)x&`EhY,ED56dUCN$s<Zy1)iHN|}%N(v,|SVXEVm3kFF6BU4dAw!R&^MBKsR7');
define('LOGGED_IN_SALT',   'v2Zf%Q69#.=IO13;%7&CHL(D8=@i:|eY(g$mRborIhB_m4#5rC#/~p9=Wyt8pfI[');
define('NONCE_SALT',       'w$bU&[xYr8r<2#!XNW$I$(r,?_@abzb$}n$LYlP|qcD#sq:U9z4CuF>O[sj<df*G');

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
