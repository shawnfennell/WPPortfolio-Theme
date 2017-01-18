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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wpportfoliodb2');

/** MySQL database username */
define('DB_USER', 'sfennellwppdb');

/** MySQL database password */
define('DB_PASSWORD', 'qvOJ03mAYP3N');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'h]_8Xa?DrY,>1$#GxMG<]lB6VHh+X/U;QjfTuPGLu(E%7UR!w9Cg(PZ@?4A0snD&');
define('SECURE_AUTH_KEY',  'qO+|T)Zr]=o7W}nxtQBW4z}A.tIO!q|>=<.5*|e*JF~r<`=q?-%|wLwI;mHc7Sb5');
define('LOGGED_IN_KEY',    'bryU4zUU3StZk^MHtlHNTpY7Z [S0Le%I3E#&KTJ4Y@V{okeG{jTE9uY(Jw4OND ');
define('NONCE_KEY',        'pX ~W&UOxk%H*{|k-kNuD*!N8BIu^gA]Q#wh+}//c6Dgm^Mr{1%RXYV%hr.h:GTo');
define('AUTH_SALT',        '~$~Bzv9[-Lnr`-VJKa6ac{cOr*jk#zpl{aAKlxZk+*f8i*!WGV9N)^),W|yn1kWJ');
define('SECURE_AUTH_SALT', 'R^_e8qH1(^E>|r}tuCjg$3>gf!DPY-Fn0U|oACbG8pm.QM.t6Wf%,Pq{}o9bQDcB');
define('LOGGED_IN_SALT',   'E0+)nI02XZb~`fm@Uyrp;d2V~TMBw-6^7_G&LyqpuO.O*6r{ #pfsX,:8S~Y9EAi');
define('NONCE_SALT',       'IZ5acT_6O*Fc4UB*u{rK2CIE6vg| <F>N#MiTi!o7X{r+k%owc]$fy)/5S;lc4bB');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
