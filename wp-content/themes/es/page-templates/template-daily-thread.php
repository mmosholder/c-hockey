<?php
use Timber\Timber;
/**
 * Template Name: The Daily Thread Archive Page
 **/

$context = Timber::get_context();
$post = new TimberPost();
$context['post'] = $post;
$context['posts'] = Timber::get_posts('category_name=the-daily-thread');
$context['title'] = 'Daily Threads';

Timber::render('pages/daily-threads.twig', $context);
