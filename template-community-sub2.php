<?php /* Template Name: Community Sub2 Page Template */ get_header(); ?>
<div class="community single-post">
  <section class="hero">
      <div class="full">
          <h1 class="white">
              Community Forum
          </h1>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas tristique nisl non ipsum rutrum varius. Nunc ultricies vitae tellus at pretiutm.
          </p>
      </div>
  </section>

    <section class="search-topics prime-color1-background">
        <div class="inner">
            <div class="half">
                <h1 class="white">Find Someone</h1>
                <p class="white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque diam ante, vestibulum a placerat eu.</p>
                <div class="form">
                    <input type="text" placeholder="Email Address" />
                    <div class="button">
                        <button class="tertiary">Search</button>
                    </div>
                </div>                    
            </div>
            <div class="half white-background">
                <h1>Browse Topics</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque diam ante, vestibulum a placerat eu.</p>
                <div class="form">
                    <input type="text" placeholder="Email Address" />
                    <div class="button">
                        <button class="primary">Search</button>
                    </div>
                </div>                    
            </div>
        </div>
    </section>

    <section class="forum-block">
        <div class="inner">
            <div class="post full">
                <div class="reply">
                    <div class="quarter">
                        <p class="date">02/07/2017 | 11:32 AM</p><br />
                        <p class="username">Syndey James</p><br />                    
                        <figure><img src="<?php echo get_template_directory_uri(); ?>/images/community/userimage.jpg" alt=""></figure><br />                    
                        <p class="location">Johannesburg</p>
                        <p class="posts">1541 Forum Posts</p>
                    </div>
                    <div class="three-quarter">
                        <div class="title">
                            App has been updated
                        </div>
                        <article class="content">
                            The App has been updated! Yay!
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>


<?php get_footer(); ?>
