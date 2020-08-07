<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<script src="https://kenwheeler.github.io/slick/slick/slick.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/new-styles.css';?>"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<!-- <a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentynineteen' ); ?></a> -->

		<header id="masthead" class="site-header">
		<div class="row">
		<div class="container-full-main">
				<div class="header-main">
					<div class="col-md-5 logo">
						<div class="header-logo">
							<div class="logo-image">
								<img src="<?php echo get_template_directory_uri() . '/images/kandk-logo.jpg'; ?>" alt="">
							</div>
						</div>
					</div>
					<div class="col-md-2">
						<div class="first-section">
							<ul>
								<li>
									<i class="fa fa-headphones" aria-hidden="true"></i><span class="headphones">Call Us</span> 
								</li>
								<li>
									<span class="details"><a href="tel:023 8065 0650">023 8065 0650</a></span>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-md-2">
						<div class="second-section">
								<ul>
									<li>
										<i class="fa fa-mobile" aria-hidden="true"></i><span class="mobile">Call Us Anytime</span> 
									</li>
									<li>
										<span class="details"><a href="tel:07775 756180">07775 756180</a></span>
									</li>
								</ul>
							</div>
						</div>
					<div class="col-md-2">
							<div class="third-section">
								<ul>
									<li>
										<i class="fa fa-envelope" aria-hidden="true"></i><span class="email">Email Us</span> 	
									</li>
									<li>
										<span class="details"><a href="mailto:info@kandkschooltransport.co.uk">info@kandkschooltransport.co.uk</a></span>
									</li>
								</ul>
							</div>
						</div>
					</div>	
				</div>	
		</div>
			
		<div class="container-main">
			<div class="nav-box">
				<div class="container-full-main">
					<div class="navigation">
						<nav>
							<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
						</nav>
						<div class="social-nav">
							<div class="facebook-icon">
								<a href="https://www.facebook.com/kkhireltd/"><i class="fa fa-facebook-f"></i></a>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
			
		</header><!-- #masthead -->

	<div id="content" class="site-content">
