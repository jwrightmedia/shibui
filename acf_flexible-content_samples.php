<?php /*		
* Advanced Custom Fields Samples - Flexible Content
*
* Examples specific to Flexible Content
*/?>

<!-- Main template -- includes global override -->

<?php
/**
 * Template Name: Page Builder 
 *
 * @package bodyslug
 */

get_header();

$override = get_field('use_global_content_override');

if (have_rows('page_builder')) : ?>
<div class="<?php the_field('sample_field'); ?>">
	<?php while (have_rows('page_builder')) : the_row();

		if (get_row_layout() == 'builder_hero') : // Hero
			get_template_part('template-parts/page-builder/builder-hero');

		elseif (get_row_layout() == 'builder_hero_cta') : // Hero with CTA
			get_template_part('template-parts/page-builder/builder-hero-cta');

		elseif (get_row_layout() == 'how_it_works') :

            if($overrideHow) {
                get_template_part('template-parts/global-how-it-works');
            } else {
                get_template_part('template-parts/services-details/services-details-how-it-works');
            }		

		endif;

	endwhile; ?>
</div>
<?php else :
endif;
get_footer(); ?>

<!-- global flexible content template example - remove 'option' for showing content unique to a page -->

<?php if (have_rows('how_it_works_global_content', 'option')) : ?>
    <div class="how-wrapper">
	<?php while (have_rows('how_it_works_global_content', 'option')) : the_row(); ?>
	    <div class="how-inner">
	    	<!-- Content -->
	    	<?php the_sub_field('cta_text'); ?>
	    </div>
	<?php endwhile; ?>
    </div>
<?php endif; ?>