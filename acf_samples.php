<?php /*		
* Advanced Custom Fields Samples
*
* Examples to save time from having to Google them.
*
*/?>

<!-- If/Else and endif -->
<?php if ( get_field( 'page_hero_img' ) ): ?>
	<img src="<?php the_field('page_hero_img'); ?>" class="img-responsive" alt="<?php the_title()?>"/>
	<div class="hero-title">
		<?php the_title( '<h1 class="page-title">', '</h1>' ); ?>
	</div>
<?php else: ?>
	<div class="hero-title no-img">
		<?php the_title( '<h1 class="page-title no-img">', '</h1>' ); ?>
	</div>
<?php endif; ?>	

<!-- the_field from another page or, in this example, the Option page. -->

<a href="<?php the_field('facebook_link', 'option'); ?>" target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>

<!-- if have_rows -->

<?php if( have_rows('gallery') ): ?>
    <div class="masonry">
    <?php while ( have_rows('gallery') ) : the_row(); ?>
    	<div class="masonry-item">
    		<a href="<?php the_sub_field('image'); ?>" data-lightbox="masonry">
	    		<img src="<?php the_sub_field('image'); ?>" class="img-responsive" alt="<?php the_sub_field('alt_text'); ?>">
	    	</a>
		</div>
    <?php endwhile; ?>
    </div>
<?php else : ?>
    <p>No images found.</p>
<?php endif; ?>

<!-- if have_rows for videos w/ a Play button -->

<?php if( have_rows('video_gallery') ): ?>
    <div class="row">
    <?php while ( have_rows('video_gallery') ) : the_row(); ?>
    	<div class="col-sm-4">
    		<a href="<?php the_sub_field('video_url'); ?>" class="playBut" target="_blank">
				<svg version="1.1"
					 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
					 x="0px" y="0px" width="213.7px" height="213.7px" viewBox="0 0 213.7 213.7" enable-background="new 0 0 213.7 213.7"
					 xml:space="preserve">

				<polygon class='triangle' id="XMLID_18_" fill="none" stroke-width="7" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
					73.5,62.5 148.5,105.8 73.5,149.1 "/>
				  
				<circle class='circle' id="XMLID_17_" fill="none"  stroke-width="7" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" cx="106.8" cy="106.8" r="103.3"/>
				</svg>
	    		<img src="<?php the_sub_field('video_image'); ?>" class="img-responsive" alt="<?php the_sub_field('video_alt_title'); ?>">
	    	</a>
		</div>
    <?php endwhile; ?>
    </div>
<?php else : ?>
<?php endif; ?>

<!-- Two usages of custom breadcrumbs -->

<div class="container bread-contain"> 
	<div class="breadcrumbs">
		<?php custom_breadcrumbs(); ?> <!-- if completely controlled by custom function in functions.php or Constitutional Functions plugin -->
	</div>
</div>

<div class="container bread-contain"> <!-- for special circumstances when you need to fake it -->
	<div class="breadcrumbs">
		<ul id="breadcrumbs" class="breadcrumbs">
			<li class="item-home"><a href="/" class="bread-link bread-home">Home</a></li>
			<li class="separator separator-home"> › </li>
			<li class="item-parent"><a href="/venue/">Rental</a></li>
			<li class="separator separator-child"> › </li>
			<li class="item-current item-child"><?php the_title( '<strong>', '</strong>' ); ?></li>
		</ul>
	</div>
</div>

<!-- have_rows for Bootstrap Carousel -->

<section class="home-section hero">
	<?php if( have_rows('rotating_header_images') ): ?>
	    <div id="gallery-carousel" class="carousel slide" data-ride="carousel">
	        <!-- Wrapper for slides -->
	        <div class="carousel-inner hero-img" role="listbox">
	            <?php
	            $active = 'active';
	            while ( have_rows('rotating_header_images') ) : the_row();
	                ?>
	                <div class="item <?php echo $active ?>">
	                	<img src="<?php the_sub_field('header_image'); ?>" class="img-responsive" alt="<?php the_sub_field('header_alt_text'); ?>"/>
	                </div><!-- /item -->
	                <?php $active = '';
	            endwhile;
	            ?>
	        </div>
	    </div>
	<?php endif; ?>
</section>

<!-- Eyebrow container for a page, using Site Option/Setting page data for universal use -->

<?php if ( get_field( 'black_bar_text', 'option' ) ): ?>
<div class="eyebrow-callout">
	<div class="container">
		<p><?php the_field('black_bar_text', 'option'); ?></p>
	</div>
</div>
<?php endif; ?>	

<!-- do_shortcode gravity form w/ get_field-->

<div class="row">
	<div class="col-sm-12">
		<?php echo do_shortcode( '[gravityform id="'.get_field('form_shortcode').'" title="false" description="false" ajax="true"]'); ?>
	</div>
</div>

<!-- do_shortcode gravity form w/ get_field from Site Option/Setting page-->

<div class="row">
	<div class="col-sm-12">
		<?php echo do_shortcode( '[gravityform id="'.get_field('form_shortcode', 'option').'" title="false" description="false" ajax="true"]'); ?>
	</div>
</div>