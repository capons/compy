<?php
/**
 * The template for displaying all single posts.
 *
 * @package Sydney
 */

get_header(); ?>

	<?php if (get_theme_mod('fullwidth_single')) { //Check if the post needs to be full width
		$fullwidth = 'fullwidth';
	} else {
		$fullwidth = '';
	} ?>

	<div id="primary" class="content-area col-md-9 <?php echo $fullwidth; ?>">
		<main id="main" class="post-wrap" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>
			<!-- function for wp-postviews -->
			<!--<?php if(function_exists('the_views')) { the_views(); } ?>-->
			<!-- -->
			<?php sydney_post_navigation(); ?>

			<?php
			/* Uncomment this to make comments possible */
				// If comments are open or we have at least one comment, load up the comment template
				/*if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;*/
			?>
		<!-- Views: <?php echo get_post_meta ($post->ID,'views',true); ?> -->
		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php if ( get_theme_mod('fullwidth_single', 0) != 1 ) {
	get_sidebar();
} ?>

<?php get_footer(); ?>
