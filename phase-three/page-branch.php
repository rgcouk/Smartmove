<?php
/*
 * Template Name: Branch
 */

 $context = Timber::get_context();
 $args = array(
 // Get post type project
 'post_type' => 'branch',
 // Get all posts
 'posts_per_page' => -1,
 // Order by post date
 'orderby' => array(
     'date' => 'DESC'
 ));

 $context['branch'] = Timber::get_posts( $args );
