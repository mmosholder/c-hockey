<?php
use Timber\Timber;
$context = Timber::get_context();
$context['options'] = get_fields('options');

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

elseif ( is_archive() ) :

  $templates = array( 'archive.twig', 'index.twig' );
  $context['talks'] = new TimberPost(get_field('talks'));
  $context['title'] = 'Archive';

  if ( is_day() ) {
    $context['title'] = 'Archive: ' . get_the_date( 'D M Y' );
  } else if ( is_month() ) {
    $context['title'] = 'Archive: ' . get_the_date( 'M Y' );
  } else if ( is_year() ) {
    $context['title'] = get_the_date( 'Y' );
  } else if ( is_tag() ) {
    $context['title'] = single_tag_title( '', false );
  } else if ( is_category() ) {
    $context['title'] = single_cat_title( '', false );
    array_unshift( $templates, 'archive-' . get_query_var( 'cat' ) . '.twig' );
  } else if ( is_post_type_archive() ) {
    $context['title'] = 'Archive: ' . post_type_archive_title( '', false );
    array_unshift( $templates, 'archive-' . get_post_type() . '.twig' );
  }

  // here we have different templates for speaker and talk year archives
  if ( is_year () && is_post_type_archive('speaker') ) :
  Timber::render('core/archive-year-speaker.twig', $context);
  elseif ( is_year () && is_post_type_archive('talk') ):
    Timber::render('core/archive-year-talk.twig', $context);
  else :
  Timber::render( array(
    'core/archive-' . $post->post_type . '.twig',
    'core/archive.twig'),
  $context);
  endif;

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
