<?php
/*
 * Template Name: Properties
 */

$context = Timber::get_context();
$context['posts'] = Timber::get_posts(array('post_type' => array('property'), 'post_per_page' => 12 ));
Timber::render('pages/property.twig', $context);
