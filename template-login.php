<?php /* Template Name: Login Page Template */ get_header(); ?>
<div class="login">
  <section class="hero">
      <div class="full">
          <h1 class="white">
              Login to your account
          </h1>
      </div>
  </section>

  <section class="form">
    <div class="inner">
      <div class="two-thirds loginform">
        <div class="email-input">
          <div class="icon">
            <img src="<?php echo get_template_directory_uri(); ?>/images/login/emailicon.png" alt="">
          </div>
          <input type="email" placeholder="Email">
        </div>
        <div class="password-input">
          <div class="icon">
            <img src="<?php echo get_template_directory_uri(); ?>/images/login/passwordicon.png" alt="">
          </div>
          <input type="password" placeholder="Password">
        </div>
        <div class="controls">
          <div class="three-quarter">
            <input type="checkbox" id="rememberme">
            <label for="rememberme">Remember me</label>
            <a href="">Forgot Password</a>
          </div>
          <div class="quarter">
            <div class="button">
              <button class="primary">Login</button>
            </div>
          </div>
        </div>
        <!-- <div class="divider">
          <figure>
            <img src="<?php echo get_template_directory_uri(); ?>/images/login/divider.png" alt="">
          </figure>
        </div>
        <div class="full social">
          <div class="half">
            <div class="button">
              <button class="facebook">
                <i class="fa fa-facebook"></i>
                <p>Login with facebook</p>
              </button>
            </div>
          </div>
          <div class="half">
            <div class="button">
              <button class="twitter">
                <i class="fa fa-twitter"></i>
                <p>Login with Twitter</p>
              </button>
            </div>
          </div>
        </div> -->
      </div>
    </div>
  </section>
</div>

<?php get_footer(); ?>
