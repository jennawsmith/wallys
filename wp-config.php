<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define('DB_NAME', 'wallys_wp');

/** MySQL database username */
define('DB_USER', 'wallys');

/** MySQL database password */
define('DB_PASSWORD', 'MMC6145Summer');

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
define('AUTH_KEY',         '}u7a>q@69qT+#iiSp,-rn*7*YG<0UhcL1dcK>_ }7)}R}>W=[4Lv)]DNkK2Mam*{');
define('SECURE_AUTH_KEY',  '@r!w-!YPl%4r*L:AikiJ@Y,#CfaB0d%Uk*t9?[N!RAO WXbO&&&, a]<p_yl!]M2');
define('LOGGED_IN_KEY',    'ZVK<oxgEOwH@+Aef.%lmp*1i~c-+SXU lkK-hzl|HDc@,{*NCUUtU VB7mfn2dLL');
define('NONCE_KEY',        '/bh!gs7421`<ffg,2wh::M6^RFr=Q+p_/AVsNdsVopm1s~3%WT5cQ@[-!&w)V[fx');
define('AUTH_SALT',        'r=U-!L~D|5MJ]IAar-^L:8/+>e6.$#=`qql3cC!E,)]_5|Z/E!lmek~-$=,_9gSf');
define('SECURE_AUTH_SALT', 'g##JNLR}Y61;5e]lE$|LWq[8J0MNGAYZ9rAk2/kbTia<}6<Zp.ElxS<{8#v>Zdyi');
define('LOGGED_IN_SALT',   'i]b6rD:sfidtZvAH;n-yR`jg_6R/#ZBv`*83<R,}S4}@ZddKfjpPcw@<K*TxF3eb');
define('NONCE_SALT',       'k*uR9M:~xj(<q)`-A/~RJ_TbIFtfWy~o=E3g:+GJAg`r{(>n1btse}^bD_myNaaW');

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
