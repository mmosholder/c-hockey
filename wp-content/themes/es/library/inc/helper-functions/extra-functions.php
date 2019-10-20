<?php
// Content Width
function os_content_width() {
  $GLOBALS['content_width'] = apply_filters( 'es_content_width', 640 );
}

// Add Options Page
if( function_exists('acf_add_options_page') ) {
  acf_add_options_page();
}

// Add Body Class 
function es_body_classes( $classes ) {
  $classes[] = 'es-main-container';
  // if ( is_page_template('page-templates/template-cardform.php') ) {
  //   $classes[] = 'affiliate';
  // }
  return $classes;
}
add_filter( 'body_class', 'es_body_classes' );

// Remove silly emoji thingy
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );

// Remove query string from static files
function remove_cssjs_ver( $src ) {
  if( strpos( $src, '?ver=' ) )
  $src = remove_query_arg( 'ver', $src );
  return $src;
}
add_filter( 'style_loader_src', 'remove_cssjs_ver', 10, 2 );
add_filter( 'script_loader_src', 'remove_cssjs_ver', 10, 2 );

// Admin Styles
add_action('admin_head', 'es_admin_styles');
function es_admin_styles() {
  echo '<style>
    .acf-fc-popup {
      margin-left:15px;
      margin-top:15px;
    }
    .acf-fc-popup ul {
      column-count: 2;
    }
  </style>';
}

// Filter Yoast SEO Metabox Priority
add_filter( 'wpseo_metabox_prio', 'es_filter_yoast_seo_metabox' );
function es_filter_yoast_seo_metabox() {
  return 'low';
}

// Helpful Responsive fuction for resizing images
function es_acf_responsive_image($image_id,$image_size,$max_width){
  // check the image ID is not blank
  if($image_id != '') {
    // set the default src image size
    $image_src = wp_get_attachment_image_url( $image_id, $image_size );
    // set the srcset with various image sizes
    $image_srcset = wp_get_attachment_image_srcset( $image_id, $image_size );
    // generate the markup for the responsive image
    echo 'src="'.$image_src.'" srcset="'.$image_srcset.'" sizes="(max-width: '.$max_width.') 100vw, '.$max_width.'"';
  }
}
?>
