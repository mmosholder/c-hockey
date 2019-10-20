<?php

/**
 * Template Name: Viz and Tools Template
 **/

$context = Timber::get_context();
$post = new TimberPost();
$context['post'] = $post;
$context['current_user'] = new Timber\User();
$context['is_patreon'] = false;

$user = $context['current_user'];

// Check how much patronage the user has
$user_patronage = Patreon_Wordpress::getUserPatronage();
// Check if user is a patron whose payment is declined
$declined = Patreon_Wordpress::checkDeclinedPatronage($user);

if ( ( $user_patronage < 10 OR $declined ) AND !current_user_can( 'manage_options' )) {
  // Generate the unlock interface wherever it is
  Timber::render('pages/tools-viz.twig', $context);
  // the first param (7) and direct_unlock param set the unlock value for this interface. Both need to be provided and be the same
} else {
  $context['is_patreon'] = true;
  Timber::render('pages/tools-viz.twig', $context);
}

