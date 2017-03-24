<?php /* Template Name: Portal Page Template */ //get_header(); ?>

<?php if (have_posts()): while (have_posts()) : the_post(); ?>

<?php the_content(); // Dynamic Content ?>

<?php endwhile; ?>

<?php else: ?>

				<!-- article -->
				<article>

					<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

				</article>
				<!-- /article -->

			<?php endif; ?>
<?php get_footer(); ?>
