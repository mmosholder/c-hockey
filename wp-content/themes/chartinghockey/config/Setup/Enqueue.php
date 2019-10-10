<?php

namespace GC\Setup;

/**
 * Enqueue.
 */
class Enqueue
{
  /**
   * register default hooks and actions for WordPress
   * @return
   */
  public function register()
  {
    add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_scripts' ) );
  }

  public function enqueue_scripts()
  {
    // Deregister the built-in version of jQuery from WordPress
    if ( ! is_customize_preview() ) {
      wp_deregister_script( 'jquery' );
    }

    // CSS
    wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/app.css', array(), '1', 'all' );

    // JS
    wp_enqueue_script( 'app', get_template_directory_uri() . '/assets/js/app.js', array(), '1', true );

    // Extra
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
      wp_enqueue_script( 'comment-reply' );
    }
  }
}
