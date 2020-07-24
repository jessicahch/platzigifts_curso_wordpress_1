<?php

//Plugin name: Modo Oscuro
//Description: Activa el modo oscuro
//version: 1.0
//Author: Jessica Huancollo Chambi
//Author URI: https:/github.com/ramitaenlarama


function estilos_plugin()
{
	$estilos_url = plugin_dir_url(__FILE__); //la raíz principal del archivo

	//ejecutando el estilo
	wp_enqueue_style('modo_oscuro',$estilos_url.'/assets/css/estilo.css', '', '1.0', 'all');

}

add_action('wp_enqueue_scripts','estilos_plugin');