<?php /* Template Name: Blog Page Template */ get_header(); ?>
<div class="blog">
  <section class="hero">
      <div class="full">
          <h1 class="white">
              Blog
          </h1>
      </div>
  </section>

  <section class="posts">
    <div class="inner">
      <h5>Latest Posts</h5>
      <?php 
        $args = array(
          'post_type' => 'post'
        );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post(); ?>

        <div class="three-quarter">
          <a href="<?php the_permalink(); ?>">
            <div class="half">
              <figure>
                <!-- <div class="image" style="background-image: url('<?php// echo get_template_directory_uri(); ?>/images/blog/post1.png');"></div> -->
                <?php the_post_thumbnail('large'); ?>
              </figure>
            </div>
            <article class="half col-2">
              <h4>
                <?php the_title(); ?>
              </h4>
              <div class="date-time-author">
                <?php post_date(); ?><span>By <?php the_author(); ?></span>
              </div>
                <?php html5wp_excerpt('html5wp_index'); ?>
              <div class="readmore">
                Read Full Article
              </div>
            </article>
          </a>
        </div>
        <?php endwhile; ?>
    </div>
  </section>  
</div>

<?php get_footer(); ?>



