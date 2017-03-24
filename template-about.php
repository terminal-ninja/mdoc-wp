<?php /* Template Name: About Page Template */ get_header(); ?>
<div class="about">
  <section class="hero">
      <div class="full">
          <h1 class="white">
              ABOUT US
          </h1>
          <p>
            Leveraging QI and digital technology to manage chronic disease in Africa
          </p>
      </div>
  </section>

  <section class="whoarewe">
    <div class="inner">
      <h1>Who we are</h1>
      <p class="centered long">
        mDoc is a digital health company focused on sub-Saharan Africa which provides people living with chronic disease with 24/7 access to integrated care support through a network of providers via mobile and web platforms. mDoc aims to further build capability and to support physicians to provide education and tools to patients to improve self-management. Our ethos is etched in the belief that augmenting the healthcare &amp; technology landscape is paramount to helping Africa unlock its true potential.
      </p>
    </div>
  </section>

  <section class="missionvision">
    <div class="overlay">
      <div class="inner">
        <div class="half" id="mission">
          <figure>
            <img src="<?php echo get_template_directory_uri(); ?>/images/aboutus/mission.png" alt="">
          </figure>
          <h1>Mission</h1>
          <p>To dramatically reduce the double burden of disease in Sub- Saharan Africa by harnessing digital health to improve access to person-centered, quality management of chronic disease.</p>
        </div>
        <div class="half col-2" id="vision">
          <figure>
            <img src="<?php echo get_template_directory_uri(); ?>/images/aboutus/vision.png" alt="">
          </figure>
          <h1>Vision</h1>
          <p>
            mDoc harnesses virtual technology platforms to increase access to chronic disease healthcare services by lower middle to upper-income patients in sub-Saharan Africa and enable employers and physicians alike to provide more integrated solutions of clinical support necessary for the average patient living with a chronic disease such as hypertension, diabetes or mental illness.
          </p>
        </div>
      </div>
    </div>
  </section>

  <section class="ourteam" id="team">
    <div class="inner">
      <div class="full">

        <?php 
          $modalLabel = 1;
          $modalContent = 1;
            if( have_rows('modal') ):
              while ( have_rows('modal') ) : the_row(); ?>

              <div class="one-third col-3">
                <a class="js-open-modal" data-modal-id="popup<?php echo $modalLabel++; ?>">
                  <div class="content">
                      <div class="image-wrapper"><?php $image = get_sub_field('image'); 
                          echo '<figure><img src="' . $image['url'] . '" alt="' . $image['alt'] . '" /></figure>';
                        ?></div>
                    <div class="name-title">
                      <h3><?php the_sub_field('modal_name'); ?></h3>
                      <p><?php the_sub_field('modal_title'); ?></p>
                      <p>
                        <?php echo modal_bio_excerpt(); ?>
                      </p>
                    </div>
                    <div class="full">
                      <div class="half">
                        <?php if (get_sub_field('modal_ld') ): ?>
                          <a  target="_blank" href="<?php the_sub_field('modal_ld'); ?>"><i class="fa fa-linkedin"></i></a>
                        <?php endif; ?>
                        
                        <?php if (get_sub_field('modal_twitter') ): ?>
                          <a  target="_blank" href="<?php the_sub_field('modal_twitter'); ?>"><i class="fa fa-twitter"></i></a>
                        <?php endif; ?>

                        <?php if (get_sub_field('modal_fb') ): ?>
                          <a  target="_blank" href="<?php the_sub_field('modal_fb'); ?>"><i class="fa fa-facebook"></i></a>
                        <?php endif; ?>
                      </div>
                      <div class="half">
                        <div class="readmore">Read More</div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                  </div>
                </a>
              </div>

        <?php endwhile; endif; ?>

        <!-- Modal Content -->

        <?php
          if( have_rows('modal') ):
            while ( have_rows('modal') ) : the_row();
        ?>
            <div id="popup<?php echo $modalContent++; ?>" class="modal-box">
              <header> <a class="js-modal-close close">×</a>
                <h3><?php the_sub_field('modal_title'); ?></h3>
              </header>
              <div class="modal-body">
                <?php the_sub_field('modal_bio'); ?>
              </div>
              <footer> <a class="btn btn-small js-modal-close">Close</a> </footer>
            </div>
        <?php 
            endwhile;
          else :
            // no rows found
          endif;
        ?>

      
      </div>
  </section>
</div>

<?php get_footer(); ?>
