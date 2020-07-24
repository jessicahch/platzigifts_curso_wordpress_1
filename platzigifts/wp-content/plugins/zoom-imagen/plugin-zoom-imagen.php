<?php

//Plugin name: Zoom Imagen
//Description: Activa el zoom imagen
//version: 1.0
//Author: Jessica Huancollo Chambi
//Author URI: https:/github.com/ramitaenlarama

function assets_plugin()
{
	$url_raiz = plugin_dir_url(__FILE__); //URL del directorio del proyecto plugin

	//ejecutando el estilo
	wp_enqueue_style('zoom_imagen',$url_raiz.'/assets/css/estilos.css', '', '1.0', 'all');

	//ejecutando el script
	wp_enqueue_script('custom', $url_raiz.'/assets/js/custom.js',array('jquery'), '1.0', true);

}

add_action('wp_enqueue_scripts','assets_plugin');

