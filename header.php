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
	</header><!-- #masthead -->
