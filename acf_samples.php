<?php /*		
* Advanced Custom Fields Samples
* ==============================
* Examples to save time from having to Google them.
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

<!-- If/Else without the "else" -->

<?php if ( get_field( 'lineup_numbers_graphic' ) ): ?>
	<img src="<?php the_field('lineup_numbers_graphic'); ?>" alt="Rockin' the River with your favorite bands!" class="img-responsive center-block hidden-xs">
<?php else: endif; ?>

<!-- If/Else based on an toggled option - field from options/settings page -->

<?php if(get_field('no_tubing_events', 'option') == "hide") { ?>
	<!-- Empty aka don't show anything -->
<?php } ?>		
<?php if(get_field('no_tubing_events', 'option') == "show") { ?>			
	<div class="events-nav">
		<div class="container">
			<div class="col-sm-12">
				<a href="<?php echo get_home_url(); ?>/events/" class="btn btn-eventnav">All Events</a> <a href="<?php echo get_home_url(); ?>/tag/tubing/" class="btn btn-eventnav">Tubing Events</a>
			</div>
		</div>
	</div>
<?php } ?>	

<!-- the_field from the Option page. -->

<a href="<?php the_field('facebook_link', 'option'); ?>" target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>

<!-- the_field from a specific page  -->

<a href="<?php the_field('facebook_link', 7); ?>" target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>

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

<style>
.circle {
  stroke: #ffdf5d;
  stroke-dasharray: 650;
  stroke-dashoffset: 650;
  -webkit-transition: all 0.5s ease-in-out;
  opacity: 0.3;
}

.playBut {
  display: inline-block;
  -webkit-transition: all 0.5s ease;
}

.playBut svg {
  position: absolute;
  top: -10px;
  left: 34%;
  max-width: 110px;
}

.playBut .triangle {
  -webkit-transition: all 0.7s ease-in-out;
  stroke-dasharray: 240;
  stroke-dashoffset: 480;
  stroke: #7dd7f8;
  transform: translateY(0);
}

.playBut:hover .triangle {
  stroke-dashoffset: 0;
  opacity: 1;
  stroke: #ffdf5d;
  animation: nudge 0.7s ease-in-out;
}

@keyframes nudge {
  0% {
    transform: translateX(0);
  }
  30% {
    transform: translateX(-5px);
  }
  50% {
    transform: translateX(5px);
  }
  70% {
    transform: translateX(-2px);
  }
  100% {
    transform: translateX(0);
  }
}

.playBut:hover .circle {
  stroke-dashoffset: 0;
  opacity: 1;
}
</style>

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

<!-- do_shortcode with whole shortcode in field -->

<?php echo do_shortcode( get_field('shortcode_for_mailchimp', 'option') );?>

<!-- Row fix for repeaters -->

<section class="home-page-selling-points container-fluid">
    <?php $i = 1; ?>
    <div class="row">
        <?php
        if (have_rows('selling_points')) :
            while (have_rows('selling_points')) : the_row();
        ?>
        <div class="col-sm-3">
            <img src="<?php echo get_sub_field('selling_point_icon')['url'] ?>" alt="">
            <h3><?php the_sub_field('selling_point_title'); ?></h3>
            <p><?php the_sub_field('selling_point_text'); ?></p>
        </div>
        <?php
                if ($i == 4) {
                    echo '</div><div class="row">';
                    $i = 0;
                }
                $i++;
            endwhile;
        endif;
        ?>
    </div>
</section>

<!-- Counter for unique id/classes -->
<?php if (have_rows('square_box')) : ?>
    	<?php $i = 0; ?>
    <?php while (have_rows('square_box')) : the_row();?>
    	<?php $i++; ?>
    <article id="<?php the_sub_field('unique_id'); ?>" class="card sq-<?php echo $i; ?>">
    <?php if (get_sub_field('internal_or_external_link') == "internal") { ?>
    	<a href="<?php the_sub_field('box_link'); ?>">
	<?php } ?>	            		
    <?php if(get_sub_field('internal_or_external_link') == "external") { ?>
    	<a href="<?php the_sub_field('external_link'); ?>" target="_blank">
	<?php } ?>
			<div class="card-img">
				<img src="<?php the_sub_field('top_image'); ?>" class="img-responsive" alt="<?php the_sub_field('title'); ?>">
			</div>
        	<div id="act" class="card-content">
        		<h2><?php the_sub_field('title'); ?></h2>
        	</div>
        </a>
    </a></article>
<?php endwhile; endif; ?>

<!-- ACF Table Field Generator https://wordpress.org/plugins/advanced-custom-fields-table-field/ -->
<?php $table = get_sub_field( 'investment_requirements' );
if ( ! empty ( $table ) ) {
    echo '<table class="investment-table" border="0">';
        if ( ! empty( $table['caption'] ) ) {
            echo '<caption>' . $table['caption'] . '</caption>';
        }
        if ( ! empty( $table['header'] ) ) {
            echo '<thead>';
                echo '<tr>';
                    foreach ( $table['header'] as $th ) {
                        echo '<th>';
                            echo $th['c'];
                        echo '</th>';
                    }
                echo '</tr>';
            echo '</thead>';
        }
        echo '<tbody>';
            foreach ( $table['body'] as $tr ) {
                echo '<tr>';
                    foreach ( $tr as $td ) {
                        echo '<td>';
                            echo $td['c'];
                        echo '</td>';
                    }
                echo '</tr>';
            }
        echo '</tbody>';
    echo '</table>';
}?>