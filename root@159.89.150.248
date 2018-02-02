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
define('DB_NAME', 'celsocas');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'Tino1018');

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
define('AUTH_KEY', 'FM)mP&Lai|%}JW}oa{,e@o6qJK6b3$3!f]PW5z~SX7.>&z>c$.:)L*O,-!C~UjYf');
define('SECURE_AUTH_KEY', 'f0VKV0}{{7RwGa!aott7pJ3q:tMgmOx/x-!cTV!{6.`m&)M6<wwj:G0uQXb46bbJ');
define('LOGGED_IN_KEY', '$ZIi8(k4U)+2y$`$h]iPIXFZ:@6z8#WHaalC{zmR<h^Xnr<KKAd@r|ub{4~ci/XJ');
define('NONCE_KEY', '2R1E+C^M/;05j!J0xVO#D,:D1t&w<Mg6G#7tm$X.TBL-3#?Gi+8R4cH3=z= :t;_');
define('AUTH_SALT', '<5((Erro9|c+a1E.IQP@%a!s`fjClKt-R-x>+X*j_}Paf*o=QsX>H+t01#G8DPxG');
define('SECURE_AUTH_SALT', '1#_C^]Q@*bBg0q>@b{FC!|gH<Pq~f0vy`UIgHb}T>?8^=*GXeJ3QE|a):lLj32P&');
define('LOGGED_IN_SALT', '7I1sb+.C<=g=sLNRFQPKKs5BKa|m<@/.beDE$>zxI`m-&_K9#{xUza< xy|ivd1n');
define('NONCE_SALT', '=1K5*]oso6:*?^:rwsLOtx-auNO@DJy}MJgTnPe3R0s]nN#X&xYxV/@BPKju@hS(');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wpcc_';


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

