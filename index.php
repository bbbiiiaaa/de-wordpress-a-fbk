<?php
/*
Plugin Name: EL CULTIVO - Facebook comments
Plugin URI: http://elcultivo.mx
Description: Comentarios de Fbk
Version: 0.1
Author URI: http://elcultivo.mx
*/

add_action( 'admin_menu', 'registrar_pagina_fbk_comments' );
add_action( 'wp_head', 'imprime_fbk_app_id');

//Imprime la página para configurar los comentarios
function registrar_pagina_fbk_comments(){
    add_menu_page( 'Comentarios de Facebook', 'Comentarios de Facebook', 'manage_options', 'cultivo-fbk-comment/configuracion.php');
}

//Imprime el APP ID de FBK en el head del front
function imprime_fbk_app_id(){
	echo '<meta property="fb:app_id" content="';
	echo get_option('cltvo_fbk_app_id');
	echo '" />';
}

function muestra_comentarios_fbk($id){
	if ( ! post_password_required($id) && comments_open() ){
		echo '<div id="fb-root"></div>'
			. '<script src="http://connect.facebook.net/es_ES/all.js#xfbml=1"></script>'
			. '<fb:comments href="http://localhost:8888/lab/fbk_comments/?p=1" width="880"></fb:comments>';
	}
}
?>