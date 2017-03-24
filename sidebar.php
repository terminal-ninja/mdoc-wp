<!-- sidebar -->
<aside class="sidebar" role="complementary">

	<?php get_template_part('partials/recent-posts'); ?>
	
	<div class="subscribe">
  	<h1 class="side-heading">Submit your questions here</h1>
  	 <?php 
        if ( is_page_template( 'template-buyers.php' ) ) {
            echo '<div class="_form_3"></div><script src="https://ahprop.activehosted.com/f/embed.php?id=3" type="text/javascript" charset="utf-8"></script>';
        } elseif ( is_page_template( 'template-sellers.php' ) ) {
            echo '<div class="_form_5"></div><script src="https://ahprop.activehosted.com/f/embed.php?id=5" type="text/javascript" charset="utf-8"></script>';
        }
           
      ?>
    


	</div>
  
  <?php if ( is_page_template( 'template-agent-advice.php' ) ) { ?>
           <div class="usefull-links">
             <h1 class="side-heading">More from the Adrienne Hersch brand</h1>
               <a href="">Franchise Opportunities</a>
               <a href="">Career Opportunities</a>
               <a href="">Adrienne Hersch Properties</a>
           </div>
       <?php } else {?>

  <div class="contact">
    <h1 class="side-heading">Submit your questions here</h1>
      <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-1')) ?>
  </div>
  <?php } ?>
  <?php echo do_shortcode('[custom-facebook-feed]'); ?>
</aside>
<!-- /sidebar -->
