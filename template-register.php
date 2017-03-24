<?php /* Template Name: Register Page Template */ get_header(); ?>
<div class="login">
  <section class="hero">
      <div class="full">
          <h1 class="white">
              Register an account
          </h1>
      </div>
  </section>

  <section class="form">
    <div class="inner">
      <div class="two-thirds loginform">
        <form method="post" action="<?php echo site_url(); ?>/client">
          <input type="hidden" name="register" value="1">
        <div class="email-input">
          <div class="icon">
            <!-- <img src="<?php echo get_template_directory_uri(); ?>/images/login/emailicon.png" alt=""> -->
          </div>
          <input type="text" name="fname" placeholder="First Name">
        </div>
        <div class="email-input">
          <div class="icon">
            <!-- <img src="<?php echo get_template_directory_uri(); ?>/images/login/emailicon.png" alt=""> -->
          </div>
          <input type="text" name="lname" placeholder="Last Name">
        </div>
        <div class="email-input">
          <div class="icon">
            <!-- <img src="<?php echo get_template_directory_uri(); ?>/images/login/emailicon.png" alt=""> -->
          </div>
          <input type="email" name="email" placeholder="Email">
        </div>
        <div class="password-input">
          <div class="icon">
            <!-- <img src="<?php echo get_template_directory_uri(); ?>/images/login/passwordicon.png" alt=""> -->
          </div>
          <input type="password" name="password" placeholder="Password">
        </div>
        <div class="password-input">
          <div class="icon">
            <!-- <img src="<?php echo get_template_directory_uri(); ?>/images/login/passwordicon.png" alt=""> -->
          </div>
          <input type="password" name="confpassword" placeholder="Confirm Password">
        </div>
        <div class="controls">
          <div class="three-quarter">

          </div>
          <div class="quarter">
            <div class="button">
              <button class="primary">Register</button>
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
        </form>
      </div>
    </div>
  </section>
</div>

<?php get_footer(); ?>
