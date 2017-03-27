<?php get_header(); ?>

    <section class="hero"></section>
		<!-- section -->
		<section>
      <div class="inner">
  			<h1><?php echo sprintf( __( '%s Search Results for ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>

  			<?php get_template_part('loop'); ?>

  			<?php get_template_part('pagination'); ?>        
      </div>
		</section>
		<!-- /section -->



<?php get_footer(); ?>
