<?php 
/* Desde aqui se ingresan las tablas para*/

function DK_figureImagenDb() {
	global $wpdb;
	$salto = '
';
	$sql = '';

	$tablas = $wpdb->prefix . 'figureimagen'; 
	$charset_collate = '';

	if ( ! empty( $wpdb->charset ) ) {
		$charset_collate = "DEFAULT CHARACTER SET {$wpdb->charset}";
	}

	if ( ! empty( $wpdb->collate ) ) {
		$charset_collate .= " COLLATE {$wpdb->collate}";
	}

	$sql = "CREATE TABLE IF NOT EXISTS " . $tablas . "cuadro (
		id int(100) NOT NULL AUTO_INCREMENT,
		fecha date DEFAULT '0000-00-00',
		hora time DEFAULT '00:00:00',
		opciones text,
		estado boolean,
		UNIQUE KEY id (id)
		) " . $charset_collate . ";";

/*
	$sql .= $salto . "CREATE TABLE IF NOT EXISTS " . $tablas . "imgs (
		id int(100) NOT NULL AUTO_INCREMENT,
		titulo text,
		url text,
		opciones text,
		UNIQUE KEY id (id)
		) " . $charset_collate . ";";
	/* fin de la tabla */

	require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
	dbDelta( $sql );
	/*
	$s = 'SELECT * 
	FROM ' . $wpdb->prefix . 'DK_torneos_TipoTorneo
	WHERE nombre LIKE "Tennis" LIMIT 1';
	$r = $wpdb->get_row( $s , ARRAY_A );
	if( !isset( $r ) ){
		$wpdb->insert( 
			$wpdb->prefix . 'DK_torneos_TipoTorneo', 
			array(
				'nombre' 			=> "Tennis", 
				'minTipoP' 			=> 4, 
				"TipoPuntuacion" 	=> '{["set#":{0:P1,1:P2}]}'
				) 
			);	
	}
	*/

	add_option( 'db_DK_figureImagenDb_version', "1.0" );
}
/* fin de la creacion de tablas en la base de datos */