<?php /* Template Name: How it Works Page Template */ get_header(); ?>
<div class="howitworks">
    <section class="hero">
        <div class="full">
            <h1 class="white">
                How It Works
            </h1>
            <p class="white">
                Leveraging QI and digital technology to manage chronic disease in Africa
            </p>
            <div class="button">
                <a href="modc/register" class="button secondary">Get Started</a>
            </div>
        </div>
    </section>

    <section class="approach prime-color3-background">
        <div class="inner">
            <div class="one-third">
                <figure>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/howitworks/edu.png" alt="" style="width:100px">
                </figure>
                <!-- <h2>Lorem ipsum</h2> -->
                <p><br>
                    Education and self-management tools for lifestyle modification
                </p>
            </div>
            <div class="one-third">
                <figure>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/howitworks/tools.png" alt="" style="width:100px">
                </figure>
                <!-- <h2>Lorem ipsum</h2> -->
                <p><br>
                    Search tool via mDoc Navi map to find licensed providers when in-person care is needed
                </p>
            </div>
            <div class="one-third">
                <figure style="background-color:white;">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/howitworks/track.png" alt="" style="width:100px">
                </figure>
                <!-- <h2>Lorem ipsum</h2> -->
                <p><br>
                    QI and clinical capability building of providers through mDoc's virtual learning platform (MQN)
                </p>
            </div>
        </div>
    </section>

    <section class="howitworks">
        <div class="inner">
          <h1>How mDoc Works</h1>
          <div class="half">
              <h2>mDoc makes it easier to live a healthier, happier life.</h2>
              <p>
                  Managing an illness or a long-term disease such as Diabetes or Hypertension can be challenging especially when you are confronted with the realities of daily living in the African context. Using evidence-based person-centered approaches, mDoc has developed a platform of 24/7 support for you. From helping you keep a secured centralized repository of your healthcare information, to connecting with different types of practitioners such as nutritionists and coaches to help with your health goals to helping you navigate where to find quality in-person healthcare we have got you covered.
              </p>
          </div>
          <div class="half">
              <figure>
                  <img src="<?php echo get_template_directory_uri(); ?>/images/howitworks/mainimage.png" alt="">
              </figure>
          </div>
        </div>
    </section>

    <section class="newsletter prime-color1-background">
        <div class="inner">
            <h1 class="white">Sign up for our newsletter</h1>
            <p class="centered white">
                We’ll keep you up-to-date on the best practices for managing your chronic disease and for living a heather, happier life.
            </p>
            <div class="form">
                <input type="text" placeholder="Email Address" />
                <div class="button">
                    <button class="tertiary">Get Started</button>
                </div>
            </div>
        </div>
    </section>
</div>


<?php get_footer(); ?>
