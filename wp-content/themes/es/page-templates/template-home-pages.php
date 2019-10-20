<?php

/**
 * Template Name: Home Pages Template
 **/

$context = Timber::get_context();
$post = new TimberPost();
$context['post'] = $post;
$context['sp'] = new TimberPost(get_field('speakers_presenters'));
// $context['speakers'] = Timber::get_posts(array('post_type' => 'speaker', 'orderby' => 'menu_order'));
Timber::render('pages/home-pages.twig', $context);
