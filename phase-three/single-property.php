<?php
/*
 * Template Name: property
 */

 $context = Timber::get_context();
 $context['property'] = Timber::get_post();
 Timber::render('pages/property.twig', $context);
