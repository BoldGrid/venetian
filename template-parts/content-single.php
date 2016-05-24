<?php
/**
 * @package BoldGrid
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title"><span>', '</span></h1>' ); ?>

		<div class="entry-meta">
			<?php boldgrid_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php 
		if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
			the_post_thumbnail();
		} 
		?>
		
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'boldgrid' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php boldgrid_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
