<?php
if ( file_exists( dirname( __FILE__ ) . '/vendor/autoload.php' ) ) :
  require_once dirname( __FILE__ ) . '/vendor/autoload.php';
endif;

if ( class_exists( 'GC\\Init' ) ) :
  GC\Init::register_services();
endif;

add_theme_support( 'menus' );
