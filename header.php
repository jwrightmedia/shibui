<?php
/**
 * The header for our theme
 *
 * @package bodyslug
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="theme-color" content="#fafafa">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="apple-touch-icon" href="icon.png">
	<?php wp_head(); ?>
	<!--[if lt IE 9]>
    	<script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.min.js"></script>
	<![endif]-->
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'bodyslug' ); ?></a>
	<header id="masthead" class="site-header">
		<!-- FOR BOOTSTRAP 3 ONLY -->
		<div class="container">
			<div class="site-branding">
				<div class="navbar-header">
		          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-mob" aria-expanded="true" aria-controls="navbar">
		            <span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		          </button>
				</div>
				<div class="logo">
					<div class="navbar-inner">
						<div class="nav-center">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="navbar-brand">
							</a>
						</div>
					</div>
				</div>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation">
				<div id="navbar-collapse" class="collapse navbar-collapse">
					<?php
				        wp_nav_menu( array(
				        'menu'              => 'primary',
				        'theme_location'    => 'primary',
				        'depth'             => 2,
				        'menu_class'        => 'nav navbar-nav',
				        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
				        'walker'            => new wp_bootstrap_navwalker())
				        );
				    ?>
			    </div>
			</nav><!-- #site-navigation -->
		</div>
		<!-- FOR BOOTSTRAP 4 ONLY -->
		<nav class="navbar navbar-expand-md" role="navigation">
		  <div class="container">
		    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'bodyslug' ); ?>">
		        <span class="navbar-toggler-icon"></span>
		    </button>
		    <a class="navbar-brand" href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.jpg" class="img-fluid" alt="Business Name"/></a>
		        <?php
		        wp_nav_menu( array(
		            'theme_location'    => 'primary',
		            'depth'             => 2,
		            'container'         => 'div',
		            'container_class'   => 'collapse navbar-collapse',
		            'container_id'      => 'bs-example-navbar-collapse-1',
		            'menu_class'        => 'nav navbar-nav ml-auto',
		            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
		            'walker'            => new WP_Bootstrap_Navwalker(),
		        ) );
		        ?>
		    </div>
		</nav>
	</header><!-- #masthead -->
