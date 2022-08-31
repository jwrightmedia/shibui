<?php /*		
* WP Snippet Samples
*
* Examples to save time.
*
*/?>

<!-- Get Site URL -->

<a href="<?php echo get_site_url(); ?>/this-page/this-content/">Click here</a>

<!-- Get Stylesheet URI -->

<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/aternus.png" alt="" width="" height="" />

<!-- PHP include -->

<?php include (get_template_directory() . '/inc/venue-footer.php'); ?>

<!-- For usage with ECS shortcode, https://wordpress.org/plugins/the-events-calendar-shortcode/ -->

<div class="row">
	<?php echo do_shortcode( "[ecs-list-events limit='3' thumb='true' thumbsize='full' contentorder='thumbnail, title, date' viewall='true']" );?>
</div>

<!-- Use get_post_thumbnail for post/page hero / header -->

<div class="page-hero">
    <figure class="page-hero-text">
        <img typeof="foaf:Image" class="img-responsive desktop-hero" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>" alt="<?php the_title();?>">
    	<div class="hero-title">
    		<h1><?php the_title(); ?></h1>
    	</div>
    </figure>
</div>

<!-- Get blog / post type on a particular page (homepage used here as an example) -->

<section class="home-section home-news">
	<?php 
        $args = array (
         'post_type'              => 'post',
         'post_status'            => 'publish',
         'pagination'             => false,
         'paged'                  => (get_query_var('paged') ? get_query_var('paged') : 1),
         'posts_per_page' 		  => 1,
         'orderby' 				  => 'date', 
         'order'                  => 'DSC',
         'meta_key'        		  => 'meta-checkbox',
    	 'meta_value' 			  => 'yes' 
       ); 
    ?>
    <?php $my_query = new WP_Query($args); ?>
    <?php if ($my_query->have_posts()): ?>
	    <?php while($my_query->have_posts()): $my_query->the_post() ?>
            <div <?php post_class('home-blog'); ?>>
            	<a href="/news/">
                <img src="<?php the_field('home_featured_image'); ?>" class="img-responsive" alt="<?php the_title(); ?>"/>
                    <div class="home-blog_text">
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    	<p><a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More</a></p>
                  </div>
                  </a>
           </div>
	    <?php endwhile; ?>
	    <?php else : ?>
	      <p><?php __('No Blog Posts'); ?></p>
	    <?php endif; wp_reset_query(); ?>
</section>

<!-- Display blog posts for blog home  - includes sidebar-->

<div class="row">
	<div class="blog-archive-container col-sm-8">
	    <?php 
	        $args = array (
	         'post_type'              => 'post',
	         'post_status'            => 'publish',
	         'pagination'             => true,
	         'paged'                  => (get_query_var('paged') ? get_query_var('paged') : 1),
	         'posts_per_page' 		  => 6,
	         'orderby' 				  => 'date',
	         'order'                  => 'DSC', 
	       ); 
	    ?>
	    <?php $my_query = new WP_Query($args); ?>
	    <?php if ($my_query->have_posts()): ?>
	      <?php while($my_query->have_posts()): $my_query->the_post() ?>
	        <?php if ( get_field( 'external_url_link' ) ): ?>
				<a href="<?php the_field('external_url_link'); ?>" target="_blank">
		            <div class="col-sm-12 blog-blogpost">
		                <div <?php post_class(); ?>>
		                    <div class="blog-image col-md-4 col-sm-12">
		                        <?php the_post_thumbnail('full', array('class' => 'img-responsive') ); ?>
		                    </div>
		                    <div class="blog-text col-md-8 col-sm-12">
		                        <div class="blog-text_text">
		                            <h2 class="blk"><?php the_title(); ?></h2>
		                            <p class="blk"><?php if($post->post_excerpt) {
		                                the_excerpt(array( 'class' => 'blk' ));
		                                echo '<span class="btn btn-primary">Read More ></span>';
		                                } else {
		                                    the_excerpt(array( 'class' => 'blk' ));
		                                } ?>
		                            </p>
		                        </div>
		                    </div>
		                </div>
		            </div>
		        </a>
			<?php else: ?>
		        <a href="<?php the_permalink(); ?>">
		            <div class="col-sm-12 blog-blogpost">
		                <div <?php post_class(); ?>>
		                    <div class="blog-image col-md-4 col-sm-12">
		                        <?php the_post_thumbnail('full', array('class' => 'img-responsive') ); ?>
		                    </div>
		                    <div class="blog-text col-md-8 col-sm-12">
		                        <div class="blog-text_text">
		                            <h2 class="blk"><?php the_title(); ?></h2>
		                            <p class="blk"><?php if($post->post_excerpt) {
		                                the_excerpt(array( 'class' => 'blk' ));
		                                echo '<span class="btn btn-primary">Read More ></span>';
		                                } else {
		                                    the_excerpt(array( 'class' => 'blk' ));
		                                } ?>
		                            </p>
		                        </div>
		                    </div>
		                </div>
		            </div>
		        </a>
			<?php endif; ?>	
	    <?php endwhile; ?>
        <nav class="pagination">
            <?php previous_posts_link('Newer Posts', $my_query->max_num_pages); ?>
            <?php next_posts_link('Older Posts', $my_query->max_num_pages); ?>
        </nav>
	    <?php else : ?>
	      <p><?php __('No Blog Posts'); ?></p>
	    <?php endif; wp_reset_query(); ?>
	</div>
	<div class="col-sm-4">
		<?php get_sidebar();?>
	</div>
</div>