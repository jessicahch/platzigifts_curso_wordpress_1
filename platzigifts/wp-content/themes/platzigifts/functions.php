<?php

function init_template()
{

	//permmite añadir la opción de la imagen destacada en las entradas
	add_theme_support('post-thumbnails');

	//para imprimir en el header el título de documento
	add_theme_support('title-tag');

	//aparezca la opción de menú en la administración
	register_nav_menus(
		array
		(
			'top_menu' => 'Menú Principal' //localización
		)
	);

}

add_action('after_setup_theme','init_template');

//para manejo de librerías css
function assets()
{

	//nombre de css, source, dependencia, versión, en qué dispositivos se cargarán
	wp_register_style('bootstrap','https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css','','4.5.0','all');

	wp_register_style('montserrat','https://fonts.googleapis.com/css2?family=Montserrat&display=swap','','1.0','all');


	wp_enqueue_style('estilos',get_stylesheet_uri(),array('bootstrap','montserrat'),'1.0','all');


	wp_register_script('popper','https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js','','1.16.0',true);

	//true: se carga en footer, sino en header
	wp_enqueue_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js', array('jquery','popper'), '4.5.0', true);

	//librería dinámica
	wp_enqueue_script('custom', get_template_directory_uri().'/assets/js/custom.js', '', '1.0', true);

}

add_action('wp_enqueue_scripts','assets');

//usando widget
function sidebar()
{

	//aparezca la opción de widget en la administración
	register_sidebar(
		array
		(
			'name' => 'Pie de Página',
			'id' => 'footer',
			'description' => 'Zona de Widgets para pie de páginas',
			'before_title' => '<p>', //c/widget tiene title y contenido
			'after_title' => '</p>',//etiqueta para title
			'before_widget' => '<div id="%1$s" class="%2$s">',//sobre el contenido, wp le dará un id/clase por el widget seleccionado 
			'after_widget' => '</div>'
		)
	);
}

add_action('widgets_init','sidebar');

//creando un tipo de contenido personalizado (basado en single.php), preparando la opción en el panel de administración de Wordpress
function productos_type()
{
	//más detalles
	$labels = array(
		'name' => 'Productos', //Nombre del Post Type
		'singular_name' => 'Producto', //Nombre en singular
		'menu_name' => 'Productos' //Título de la opción en el panel de administración
	);

	//detalles del post type
	$args = array(
		'label' => 'Productos', //nombre por defecto de una etiqueta
		'description' => 'Productos de Platzi',
		'labels' => $labels, //+ detalles
		'supports' => array('title','editor','thumbnail','revisions'), //tendrá imagen destacada, historial
		'public' => true, //al publicarse será true = publicada, false= borrador
		'show_in_menu' => true, //en las opciones se pueda agregar la url permanente
		'menu_position' => 5, //ubicación en el menú es de 5 en 5 en el panel de administración, después de opción entrada es 5, de la siguiente es posición 10 ...
		'menu_icon' => 'dashicons-cart', //icono de la opción en e panel de administración
		'can_export' => true, //permite exportar el contenido
		'publicly_queryable' => true, //se permite el loop personalizado
		'rewrite' => true, //tenga una url asignada
		'show_in_rest' => true //para trabaje con el editor de Gutenberg, el último editor de Wordpress
	);

	//nombre de post type es buena práctica en singular y en $args se definirán los detalles
	register_post_type('producto',$args);
}

//init se ejecuta después de after_setup_theme
add_action('init','productos_type');
