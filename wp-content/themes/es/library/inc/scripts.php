<?php
function es_equeue()
	{
	if (!is_admin()) {
		wp_register_style( 'es-styles', get_stylesheet_directory_uri() . '/library/css/app.css', array(), '', 'all' );
		wp_register_script( 'app', get_template_directory_uri() . '/library/js/app.js', array('jquery'), '1', true );

		wp_enqueue_style( 'es-styles' );
		}
		wp_enqueue_script( 'app' );
    wp_enqueue_script( 'modal' );
	}
	add_action('wp_enqueue_scripts', 'es_equeue');
?>
