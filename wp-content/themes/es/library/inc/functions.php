<?php
if ( ! function_exists( 'es_setup' ) ) :
function es_setup() {
  load_theme_textdomain( 'es', get_template_directory() . '/languages' );
  add_theme_support( 'automatic-feed-links' );
  add_theme_support( 'title-tag' );
  add_theme_support( 'post-thumbnails' );
  // Add custom image sizes
  add_image_size( 'featured-content', 1168, 700, TRUE);
  // Register nav menus
  register_nav_menus( array(
    'primary' => esc_attr__( 'Primary', 'es' )
  ) );
  // Add theme support for various features
  add_theme_support( 'html5', array(
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
  ) );
}
endif;
add_action( 'after_setup_theme', 'es_setup' );

// Let's check if Timber plugin is installed

if ( ! class_exists( 'Timber' ) ) {
  add_action( 'admin_notices', function() {
    echo '<div class="error"><p>Timber not activated. Make sure you activate the plugin in <a href="' . esc_url( admin_url( 'plugins.php#timber' ) ) . '">' . esc_url( admin_url( 'plugins.php') ) . '</a></p></div>';
  });

  add_filter('template_include', function($template) {
    return get_stylesheet_directory() . '/static/no-timber.html';
  });

  return;
}

// Add Body Class
function es_body_classes( $classes ) {
  $classes[] = 'es-main';

  return $classes;
}
add_filter( 'body_class', 'es_body_classes' );


// Hook contact form to GA
function hook_contact_form_ga() {
    ?>
        <script>
        document.addEventListener( 'wpcf7mailsent', function( event ) {
            ga('send', 'event', 'Contact Form', 'submit');
        }, false );
        </script>
    <?php
  }
add_action('wp_head', 'hook_contact_form_ga');
?>
