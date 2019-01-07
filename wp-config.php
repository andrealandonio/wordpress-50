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

// Database settings
define('DB_NAME', 'wordpress_50');
define('DB_USER', 'root');
define('DB_PASSWORD', 'admin');
define('DB_HOST', 'localhost');
define('DB_CHARSET', 'utf8mb4');
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
define('AUTH_KEY',         'L*&AS.iZKPy:+LL~Y^ZfyCNGQ]RD<=D?0z&3uGj-Aiy XfKsoDon/KOOqH2lT/TW');
define('SECURE_AUTH_KEY',  'SMsE9F~,WKKa; sSTY*Q#Y^&~9TeX%~)Zj?;4p}(8c!bJlfr=<E<2r(9Tar2>:!N');
define('LOGGED_IN_KEY',    'C9/)[2rANQ2w]o=y]O=CwBQBD n Fc5a7?*5<*PbZr&i^c4Q<^T?,9b(c-BW;*Iy');
define('NONCE_KEY',        '!^Bz8?a_fjVEsUCsfUf6 bvo1SO]~8h]m@CbWW1  mIPQxJ%!(%.[Du3SGY|L>~*');
define('AUTH_SALT',        '7P]$*II[|Zhi-qmgDWdkqPBHh3.ouE]*hZJqR WC9!wcJ.BLd[/vQ$/@OagFQ.j`');
define('SECURE_AUTH_SALT', '*f*9VH0]V#@6OJJ}a[_4([+t{fllS-i*QX$cyMXe}g{rP*p:8wb,vSiJMjX1V-32');
define('LOGGED_IN_SALT',   '(92PVe-FV%:+oGI2W (`UKE/FBzljm$Nf[`!>jWya6 9fbFa^%,A03?E_899%K5z');
define('NONCE_SALT',       '+T|w,YeNrHxXSbFE,QC[0rZ86v_q%,~lBa(%[X{25m{(h2a9EZmQU>+G11E(plHB');

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

// Custom settings
define('AUTOMATIC_UPDATER_DISABLED', true);
define('WP_POST_REVISIONS', 0);
define('AUTOSAVE_INTERVAL', 1800);
define('WP_AUTO_UPDATE_CORE', false);

// Network settings
define('WP_ALLOW_MULTISITE', true);
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', true);
define('DOMAIN_CURRENT_SITE', 'wordpress50.local');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') ) define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');