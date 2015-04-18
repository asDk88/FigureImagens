<?php 
/*
Plugin Name: Figure Imagen ( Dk )
Description: Este plugin te permite "recortar" una imagen, luego publicarla en una pagina .
Version: 0.2
Author: Dickson Morales
Contributors: 
License: http://creativecommons.org/licenses/by/3.0/
*/
$urlFigureImagen = ABSPATH . 'wp-content/plugins/dk_figureImagen/';
$dirTemplates = 'dk_figureImagen/templates/';
$urlPlug = plugin_dir_url( __FILE__ );

include_once( $urlFigureImagen . 'inc/db.php' );
include_once( $urlFigureImagen . 'inc/admin.php' );

/* Activando la funcion para crear las tablas en la base de datos */
register_activation_hook( __FILE__, 'DK_figureImagenDb' );	

/* llamando a las funciones de admins */
add_action( 'admin_menu', 'dk_admin' );
add_action( 'admin_head', 'dk_admin_css' );
add_action( 'admin_footer', 'dk_admin_script' );