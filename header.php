<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package BoldGrid
 */
?><!DOCTYPE html>
<?php do_action( 'boldgrid_html_before' ); ?>
<html <?php language_attributes(  ); ?>>
<head>
<?php
	do_action( 'boldgrid_head_top' );
	wp_head(  );
	do_action( 'boldgrid_head_bottom' );
?>
</head>

<body <?php body_class(  ); ?> <?php BoldGrid_Framework_Schema::body( true ); ?>>
<?php do_action( 'boldgrid_body_top' ); ?>
<div id="page" class="hfeed site">
<?php do_action( 'boldgrid_header_before' ); ?>

	<div class="left-triangle"></div>
	<div class="right-triangle"></div>
	<header id="masthead" class="site-header" role="banner" <?php BoldGrid_Framework_Schema::header( true ); ?>> 
		<?php BoldGrid::skip_link(  ); ?>
		<?php do_action( 'boldgrid_header_top' ); ?>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<?php do_action( 'boldgrid_menu_secondary' ); ?>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-4">
					<div class="site-branding">
						<?php do_action('boldgrid_site_title'); ?>
						<?php do_action('boldgrid_print_tagline'); ?>
					</div>
				</div>
        		<div class="col-sm-8">
        			<?php do_action('boldgrid_menu_social'); ?>
        			<?php if ( has_nav_menu( 'primary' ) ) : ?>
	        			<nav id="site-navigation" class="navbar navbar-default" role="navigation">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#primary-navbar">
									<span class="sr-only">Toggle navigation</span>
	                	    		<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>
							<?php do_action( 'boldgrid_menu_primary' ); ?>
						</nav>
					<?php endif; ?>
				</div>
			</div>
			<?php dynamic_sidebar( 'boldgrid-widget-2' ); ?>
			<?php do_action( 'boldgrid_menu_tertiary' ); ?>
			<?php do_action( 'boldgrid_header_bottom' ); ?>
		</div><!-- .container -->
	</header><!-- .site-header -->
	<?php do_action( 'boldgrid_header_after' ); ?>
	<div id="content" class="site-content">
		<div class="container">
