<?php 
/* Agregando menu en la cuenta de administración */
function dk_admin(){
	global $dirTemplates; 
	global $urlFigureImagen;
	global $urlPlug;

	return add_menu_page( 
		"Titulo", 
		"Figure Imagen", 
		"manage_options", 
		$dirTemplates . "plantilla.html", 
		"", 
		"",
/*		$urlPlug . "img/FigureImagen.png", */
		57 
		);
}

/* Agrega archivos css en la cabecera de la plantilla del administrador */
function dk_admin_css() {
	global $urlPlug;
	echo '<link href="' . $urlPlug . 'css/estiloAdmin.css" rel="stylesheet" type="text/css" />';
}

/* Agrega archivos javascript al final del pie de la plantilla del administrador*/
function dk_admin_script(){
	global $urlPlug;
	echo '<script type="text/javascript" src="' . $urlPlug . 'js/appFigureImagen.js"></script>';
}
