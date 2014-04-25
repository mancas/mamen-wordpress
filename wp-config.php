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
define('DB_NAME', 'mamen');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'root');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY', '1*^zJ{j-%|KSL}E/tF&_XaNA|19zZo-&kj9C;-x)U7]tFw`YWnPc:Jd|NJ$+~P6k'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_KEY', 'Dt )+74R@DuG!dp3/z5Pb4|zo&2]A-a_or*pe%w|>7!*v)eBir_<ou[B%;IfE#e;'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_KEY', '[`9Ac-%tzQnQ3jy|6P@ENIy3i>KE&-L-9&0JJ;}:V#s$OxI/]A.W|x1[H.tk;i?('); // Cambia esto por tu frase aleatoria.
define('NONCE_KEY', 'E8QOob<%Jpo(iQDDZ|l=&Vo9-9?!|)PO*a@O?ndsYKmp+[N?=d2H:8DXSYIe|$hp'); // Cambia esto por tu frase aleatoria.
define('AUTH_SALT', 'z5:32Qi:o2kBAi5hU;KL|g,F-+ow@35K#)I.Nhs`Q6h|%K@1$c+lcD5gH|onN&_t'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_SALT', 'oD36_|BsNe&@SCRIjsdFV,^#VNVa%8pwKPtPyj974vU@>&r|-z7?mh-L|fJ{e=tV'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_SALT', '+^b),~=?<G#7s+A;GthI[P>b0.r_B5->sWQ0VP,=A6R<zbNk=YV;Wv{]-?NabI[Y'); // Cambia esto por tu frase aleatoria.
define('NONCE_SALT', 'U2~Zv9@F:I]HQQTI>HXq8|a,`y5P+SDlo57l u%y#z5=7T[3>/mt:Yy L42i_e8['); // Cambia esto por tu frase aleatoria.

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';

/**
 * Idioma de WordPress.
 *
 * Cambia lo siguiente para tener WordPress en tu idioma. El correspondiente archivo MO
 * del lenguaje elegido debe encontrarse en wp-content/languages.
 * Por ejemplo, instala ca_ES.mo copiándolo a wp-content/languages y define WPLANG como 'ca_ES'
 * para traducir WordPress al catalán.
 */
define('WPLANG', 'es_ES');

/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

