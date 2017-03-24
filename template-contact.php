<?php /* Template Name: Contact Page Template */ get_header(); ?>
<div class="contact">
  <section class="hero">
      <div class="full">
          <h1 class="white">
              Contact Us
          </h1>
      </div>
  </section>

  <section class="form">
    <div class="inner">
      <div class="two-thirds contactform">
        <?php echo do_shortcode('[caldera_form id="CF58d26ad8336c2"]'); ?>
      </div>
    </div>
  </section>  

  <div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.4945349193817!2d3.3874539143643183!3d6.458852395327375!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b8b0d617dc475%3A0x1d2e7057d28f554b!2s17+Adeyinka+Oyekan+Ave%2C+Lagos%2C+Nigeria!5e0!3m2!1sen!2sza!4v1485494866681" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>
</div>

<?php get_footer(); ?>

