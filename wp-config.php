<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/hermes/walnacweb07/walnacweb07ah/b1243/pow.prestasimplemx/webpyme/wp-content/plugins/wp-super-cache/' );
define('DB_NAME', 'Wordpress');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'H$#5v,1mI25(m!y)l}ds(^Y$:/qE$AGt(]9v6++rwTE:;xCjbeUpq~L-V-=1GKwM');
define('SECURE_AUTH_KEY', ';6I<EkfRjTud0%8Wnr5oX~8H#;KgaY)<hqO680:oJ*Nn8i@} #EsouUXGh{CRbw7');
define('LOGGED_IN_KEY', 'Iz8-Xxx?q4i;*A}:^8?dEEazY^WGWE0?wvDW]w6Oo`-W`4GF#7-6VKiad,Ju/]aI');
define('NONCE_KEY', 'vR6QI[N4AN|sWioYj`,#z?e|I!iXW^eF@:@B<&<R&2!$6R{qNtQYj[Zx:OP5w//K');
define('AUTH_SALT', 'kB0h:9SMJan4EYS1>ywpy8Gk8>vq@ r9jY;_+$wOMNIWgAmiL@j|@M/;c84Cl>}C');
define('SECURE_AUTH_SALT', '(rg[{Cm5EAbL3~wh3fD!T[ %i.ix5R;?>syS2le$Hk5S[J:Z!IMH?b}N  (D_K#C');
define('LOGGED_IN_SALT', 'Xjj|~oM`K]u+fcr]$n@k2s%BM|G$#;B#RDCdz$)a@( 2By7kr){x4K2]%#:[hy2l');
define('NONCE_SALT', 'uO2: }jJne0H5(hAj*!2K%`0;(Q=M.Q*.YCAZrV{-Pc&@/RWwv6/3%zrF%(avf0E');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_2017';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('ADMIN_COOKIE_PATH', '/');
define('COOKIE_DOMAIN', '');
define('COOKIEPATH', '');
define('SITECOOKIEPATH', '');
/* ¡Eso es todo, deja de editar! Feliz blogging */
define('RELOCATE',false);

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

