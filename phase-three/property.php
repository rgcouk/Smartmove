<?php
/*
 * Template Name: Properties Layout
 */

 $context = Timber::get_context();
 $args = array(
 // Get post type project
 'post_type' => 'property',
 // Get all posts
 'posts_per_page' => -1,
 // Order by post date
 'orderby' => array(
     'date' => 'DESC'
 ));
 $context['property'] = Timber::get_posts( $args );
 Timber::render( 'pages/properties.twig', $context );
