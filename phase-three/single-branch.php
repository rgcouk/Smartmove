<?php
/*
 * Template Name: Branch
 */

 $context = Timber::get_context();
 $context['branch'] = Timber::get_post();
 Timber::render('pages/branch.twig', $context);
