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
define('DB_NAME', 'orientalproduce');

/** MySQL database username */
define('DB_USER', 'orientalproduce');

/** MySQL database password */
define('DB_PASSWORD', 'vietnam@123');

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
define('AUTH_KEY',         'ww_xr;T/mXE1pSX_5Kt_)x@3i>t?}VEebpPw;UF>2+[=dU|L+{ cM8?7#~]TaCMd');
define('SECURE_AUTH_KEY',  '1I$/(f%Sz_z9HnUL0GCf6BRDsI6)ZjU.f/ !_M;R@;hgynp0Cr!1@kIt~>:Z>Idb');
define('LOGGED_IN_KEY',    'a 7Xp)I9M&?RAfVA@3XGp7/BYpT?bz|@.0+`A@l,{)3NS0LcP|A. o?4D#jVQtLt');
define('NONCE_KEY',        'luo[rsopv*&;f_kFtGd%rc,G#hmh}0cF/T{!c`dk_%PQL2x{Ego6!<cHUND}LJP=');
define('AUTH_SALT',        'AW29[8KAet+PO}N~K|myU>54kP*)ir-q;LySj=ZH)MfxeVVoG|.Yi_r04Lv^kQL-');
define('SECURE_AUTH_SALT', 'nZHwN35,b]FY`)YtUM@Qoc>ZZOuy}zd~F~[~BYFEag6bRJc],%ba|TZq|Jzt}Aq6');
define('LOGGED_IN_SALT',   'AI[snV5][U2KOFvq*7$CyI$gogNv:8B_ {kNN2ynh.fO20qC/^j8AIn-+e:i}^wd');
define('NONCE_SALT',       '9O^])g<oJ@&cbeiVo!Z[TmIei  Xrk2@cB),l`ZyH7Vr0GGrhDaxb058g3A]3%LK');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'oriental_';

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
/** Set the filesize upload limits. */
define('WP_MEMORY_LIMIT', '256M');
