<?php
/*
 * Template Name: Properties Layout
 */

 $context = Timber::get_context();

 $city = $_GET['city'];
 $p_type = $_GET['property_type'          ];

 $args = array(
 // Get post type project
 'post_type' => 'property',
 // Get all posts
 'posts_per_page' => -1,
 // Order by post date
 'orderby' => array(
     'date' => 'DESC'
 ),
 'meta_query' => array (
    'key' => 'city',
    'value' => $city,
    'compare' => '='
 ),
 array (
    'key' => 'property_type',
    'value' => $p_type,
    'compare' => '='
 )
);
 $context['property'] = Timber::get_posts( $args );
 $context['post'] = Timber::get_post();
 Timber::render( 'pages/properties.twig', $context );
