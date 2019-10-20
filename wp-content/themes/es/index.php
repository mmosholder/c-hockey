<?php
use Timber\Timber;
$context = Timber::get_context();

if ( is_single() ) :

  $post = Timber::query_post();
  $context['post'] = $post;

  if ( post_password_required( $post->ID ) ) {
    Timber::render( 'core/single-password.twig', $context );
  } else {
    Timber::render( array(
      'core/single-' . $post->post_type . '.twig',
      'core/single.twig' ),
      $context
    );
  }

elseif ( is_page() ) :

  $post = new TimberPost();
  $context['post'] = $post;

  Timber::render( array(
    'core/page-' . $post->post_name . '.twig',
    'core/page.twig' ),
  $context );

elseif ( is_search() ) :

  $templates = array('pages/search.twig', 'pages/archive.twig', 'pages/index.twig');
  $context['search_title'] = 'Search results for ' . get_search_query();
  $context['posts'] = Timber::get_posts();

  Timber::render($templates, $context);

elseif (is_404() ) :

  Timber::render(array(
    'pages/404.twig'
  ), $context);

endif;
