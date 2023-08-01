<?php
/**
 * Template Name: Homepage
 * Note: Below using ACF Flexible Content
 * @package THEMENAME
 */
get_header();

if( have_rows('home') ):

    while ( have_rows('home') ) : the_row();

        if (get_row_layout() == 'hero'):

            include('template-parts/home/hero.php');

        elseif( get_row_layout() == 'diagram' ):

            include('template-parts/home/diagram.php');

        endif;

    endwhile;

else :
endif;

get_footer(); ?>