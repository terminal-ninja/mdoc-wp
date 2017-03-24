<?php get_header(); ?>

	<section class="hero"></section>
	<!-- section -->
	<section class="content">

		<div class="inner">
			<?php if (have_posts()): while (have_posts()) : the_post(); ?>

				<!-- article -->
				<article class="" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<h1>
						<?php the_title(); ?>
					</h1>

					<!-- post thumbnail -->
					<?php //if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
							<figure class="one-third"><?php //the_post_thumbnail(); // Fullsize image for the single post ?></figure>
					<?php //endif; ?>
					<!-- /post thumbnail -->

					<!-- /post details -->

					<div class="text"><?php the_content(); // Dynamic Content ?></div>
				</article>
				<article class="one-third 2-col">
					<?php //get_sidebar(); ?>
				</article>

			<?php endwhile; ?>

			<?php else: ?>

				<!-- article -->
				<article>

					<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

				</article>
				<!-- /article -->

			<?php endif; ?>
		</div>

	</section>
	<!-- /section -->

  




<?php get_footer(); ?>
