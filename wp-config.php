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
define('DB_NAME', 'wpblog2');

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
define('AUTH_KEY', 'E=B?BF$BF&>U;D#OM?);*6DfG+/!.I|B~*gMm$4& ,!U],3&nDS(R0z44=! y^~B');
define('SECURE_AUTH_KEY', '&rM+Z2-k%5@XXjwpw&U2y;ql:U_x^E)U-@h,Rg1tQ@52Ew+6f;/ZV^#]3P-$R4#v');
define('LOGGED_IN_KEY', '*!h^(TJ!/TYv{K^FRL:(xx+`TY~$V0aUrAhr<#m[Jplb?yd?U.i!Irvym3@qa*.Y');
define('NONCE_KEY', '9FtRrmyh+k%A%.,3*3P1eSD OS*zKd26/8-vn6p^0Cy=bq>BGPdF;*m@^=;=1A&u');
define('AUTH_SALT', 'NQA*9w2&AJ Q(MAEP{,EtuffXeowY7}2W!v`a*^<Re>=,(k=^t,U;:1k!?#)Hhz@');
define('SECURE_AUTH_SALT', 'O4X_V|I7 MImv-@XoB3%YoBdLh<C&I+$}YB<tXQxClZ,(xK~Dd!AY8p>G6(%Kq>A');
define('LOGGED_IN_SALT', '`8>J!GQbOF<0uL;3zy$Q@C0HYv8Z{L7*;hYXo]kDHnt$f&TA<5u:844gtuY9EE?0');
define('NONCE_SALT', '(mN:yG(]jCh-$K*?KsXNcbqFY_oG6<A:DVyWRkv A0%|2q;2$BbLnd5&k<eBX&Oc');

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
if (!defined('ABSPATH')) {
    define('ABSPATH', dirname(__FILE__) . '/');
}

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
