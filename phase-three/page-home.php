<?php
/*
 * Template Name: Home
 */

$context = Timber::get_context();
$context['posts'] = Timber::get_posts(array('post_type' => array('post'), 'post_per_page' => 5 ));
$content['is_front_page'] = 'true';
Timber::render('pages/home.twig', $context);
