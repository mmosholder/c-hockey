<?php

/**
 * Template Name: Non Patreon Content Viz and Tools Template
 **/

$context = Timber::get_context();
$post = new TimberPost();
$context['post'] = $post;
$context['is_patreon'] = true;
Timber::render('pages/tools-viz.twig', $context);
