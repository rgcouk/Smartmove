<?php
/*
 * Template Name: Branch
 */

$context = Timber::get_context();
$context['posts'] = Timber::get_posts(array('post_type' => array('branch'), 'post_per_page' => 12 ));
Timber::render('pages/branch.twig', $context);
