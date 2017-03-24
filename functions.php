<?php
/*
 *  Author: Todd Motto | @toddmotto
 *  URL: html5blank.com | @html5blank
 *  Custom functions, support, custom post types and more.
 */

/*------------------------------------*\
	External Modules/Files
\*------------------------------------*/

// Load any external files you have here

/*------------------------------------*\
	Theme Support
\*------------------------------------*/

// Enable WP_DEBUG mode
//define( 'WP_DEBUG', false );

// Enable Debug logging to the /wp-content/debug.log file
//define( 'WP_DEBUG_LOG', false );

//Disable display of errors and warnings
// define( 'WP_DEBUG_DISPLAY', false );
// @ini_set( 'display_errors', 0 );
// ini_set('display_errors', 'Off');
// error_reporting(E_ALL);

// Use dev versions of core JS and CSS files (only needed if you are modifying these core files)
//define( 'SCRIPT_DEBUG', false );


if (!isset($content_width))
{
    $content_width = 900;
}

if (function_exists('add_theme_support'))
{
    // Add Menu Support
    add_theme_support('menus');

    // Add Thumbnail Theme Support
    add_theme_support('post-thumbnails');
    add_image_size('large', 700, '', true); // Large Thumbnail
    add_image_size('medium', 250, '', true); // Medium Thumbnail
    add_image_size('small', 120, '', true); // Small Thumbnail
    add_image_size('custom-size', 700, 200, true); // Custom Thumbnail Size call using the_post_thumbnail('custom-size');

    // Add Support for Custom Backgrounds - Uncomment below if you're going to use
    /*add_theme_support('custom-background', array(
	'default-color' => 'FFF',
	'default-image' => get_template_directory_uri() . '/img/bg.jpg'
    ));*/

    // Add Support for Custom Header - Uncomment below if you're going to use
    /*add_theme_support('custom-header', array(
	'default-image'			=> get_template_directory_uri() . '/img/headers/default.jpg',
	'header-text'			=> false,
	'default-text-color'		=> '000',
	'width'				=> 1000,
	'height'			=> 198,
	'random-default'		=> false,
	'wp-head-callback'		=> $wphead_cb,
	'admin-head-callback'		=> $adminhead_cb,
	'admin-preview-callback'	=> $adminpreview_cb
    ));*/

    // Enables post and comment RSS feed links to head
    add_theme_support('automatic-feed-links');

    // Localisation Support
    load_theme_textdomain('html5blank', get_template_directory() . '/languages');
}

/*------------------------------------*\
	Functions
\*------------------------------------*/

// HTML5 Blank navigation
function html5blank_nav()
{
    wp_nav_menu(
    array(
        'theme_location'  => 'header-menu',
        'menu'            => '',
        'container'       => 'div',
        'container_class' => 'menu-{menu slug}-container',
        'container_id'    => '',
        'menu_class'      => 'menu',
        'menu_id'         => '',
        'echo'            => true,
        'fallback_cb'     => 'wp_page_menu',
        'before'          => '',
        'after'           => '',
        'link_before'     => '',
        'link_after'      => '',
        'items_wrap'      => '<ul class="slimmenu">%3$s</ul>',
        'depth'           => 0,
        'walker'          => ''
        )
    );
}
// sub-nav
function sub_nav()
{
    wp_nav_menu(
    array(
        'theme_location'  => 'sub-menu',
        'menu'            => '',
        'container'       => 'div',
        'container_class' => 'menu-{menu slug}-container',
        'container_id'    => '',
        'menu_class'      => 'menu',
        'menu_id'         => '',
        'echo'            => true,
        'fallback_cb'     => 'wp_page_menu',
        'before'          => '',
        'after'           => '',
        'link_before'     => '',
        'link_after'      => '',
        'items_wrap'      => '<ul class="submenu">%3$s</ul>',
        'depth'           => 0,
        'walker'          => ''
        )
    );
}
// sub-nav
function member_nav()
{
	wp_nav_menu(
	array(
		'theme_location'  => 'sidebar-menu',
		'menu'            => '',
		'container'       => 'div',
		'container_class' => 'menu-{menu slug}-container',
		'container_id'    => '',
		'menu_class'      => 'menu',
		'menu_id'         => '',
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'items_wrap'      => '<ul class="membermenu">%3$s</ul>',
		'depth'           => 0,
		'walker'          => ''
		)
	);
}

// Load HTML5 Blank scripts (header.php)
function html5blank_header_scripts()
{
    if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {

    	wp_register_script('conditionizr', get_template_directory_uri() . '/js/lib/conditionizr-4.3.0.min.js', array(), '4.3.0'); // Conditionizr
        wp_enqueue_script('conditionizr'); // Enqueue it!

        wp_register_script('modernizr', get_template_directory_uri() . '/js/lib/modernizr-2.7.1.min.js', array(), '2.7.1'); // Modernizr
        wp_enqueue_script('modernizr'); // Enqueue it!

        //wp_register_script('html5blankscripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.0.0'); // Custom scripts
        //wp_enqueue_script('html5blankscripts'); // Enqueue it!
    }
}

// Load HTML5 Blank conditional scripts
function html5blank_conditional_scripts()
{
    if (is_page('pagenamehere')) {
        wp_register_script('scriptname', get_template_directory_uri() . '/js/scriptname.js', array('jquery'), '1.0.0'); // Conditional script(s)
        wp_enqueue_script('scriptname'); // Enqueue it!
    }
}

// Load HTML5 Blank styles
function html5blank_styles()
{
    wp_register_style('normalize', get_template_directory_uri() . '/normalize.css', array(), '1.0', 'all');
    wp_enqueue_style('normalize'); // Enqueue it!

    wp_register_style('html5blank', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
    wp_enqueue_style('html5blank'); // Enqueue it!
}

// Register HTML5 Blank Navigation
function register_html5_menu()
{
    register_nav_menus(array( // Using array to specify more menus if needed
        'header-menu' => __('Header Menu', 'html5blank'), // Main Navigation
        'sidebar-menu' => __('Sidebar Menu', 'html5blank'), // Sidebar Navigation
        'sub-menu' => __('Extra Menu', 'html5blank') // Extra Navigation if needed (duplicate as many as you need!)
    ));
}

// Remove the <div> surrounding the dynamic navigation to cleanup markup
function my_wp_nav_menu_args($args = '')
{
    $args['container'] = false;
    return $args;
}

// Remove Injected classes, ID's and Page ID's from Navigation <li> items
function my_css_attributes_filter($var)
{
    return is_array($var) ? array() : '';
}

// Remove invalid rel attribute values in the categorylist
function remove_category_rel_from_category_list($thelist)
{
    return str_replace('rel="category tag"', 'rel="tag"', $thelist);
}

// Add page slug to body class, love this - Credit: Starkers Wordpress Theme
function add_slug_to_body_class($classes)
{
    global $post;
    if (is_home()) {
        $key = array_search('blog', $classes);
        if ($key > -1) {
            unset($classes[$key]);
        }
    } elseif (is_page()) {
        $classes[] = sanitize_html_class($post->post_name);
    } elseif (is_singular()) {
        $classes[] = sanitize_html_class($post->post_name);
    }

    return $classes;
}

// If Dynamic Sidebar Exists
if (function_exists('register_sidebar'))
{
    // Define Sidebar Widget Area 1
    register_sidebar(array(
        'name' => __('Widget Area 1', 'html5blank'),
        'description' => __('Description for this widget-area...', 'html5blank'),
        'id' => 'widget-area-1',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));

    // Define Sidebar Widget Area 2
    register_sidebar(array(
        'name' => __('Widget Area 2', 'html5blank'),
        'description' => __('Description for this widget-area...', 'html5blank'),
        'id' => 'widget-area-2',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
}

// Remove wp_head() injected Recent Comment styles
function my_remove_recent_comments_style()
{
    global $wp_widget_factory;
    remove_action('wp_head', array(
        $wp_widget_factory->widgets['WP_Widget_Recent_Comments'],
        'recent_comments_style'
    ));
}

// Pagination for paged posts, Page 1, Page 2, Page 3, with Next and Previous Links, No plugin
function html5wp_pagination()
{
    global $wp_query;
    $big = 999999999;
    echo paginate_links(array(
        'base' => str_replace($big, '%#%', get_pagenum_link($big)),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages
    ));
}

// Custom Excerpts
function index_long($length) // Create 20 Word Callback for Index page Excerpts, call using html5wp_excerpt('html5wp_index');
{
    return 25;
}

// Custom Excerpts
function html5wp_index($length) // Create 20 Word Callback for Index page Excerpts, call using html5wp_excerpt('html5wp_index');
{
    return 18;
}

// Create 40 Word Callback for Custom Post Excerpts, call using html5wp_excerpt('html5wp_custom_post');
function html5wp_custom_post($length)
{
    return 40;
}

// Create the Custom Excerpts callback
function html5wp_excerpt($length_callback = '', $more_callback = '')
{
    global $post;
    if (function_exists($length_callback)) {
        add_filter('excerpt_length', $length_callback);
    }
    if (function_exists($more_callback)) {
        add_filter('excerpt_more', $more_callback);
    }
    $output = get_the_excerpt();
    $output = apply_filters('wptexturize', $output);
    $output = apply_filters('convert_chars', $output);
    $output = '<p>' . $output . '</p>';
    echo $output;
}

// Custom View Article link to Post
function html5_blank_view_article($more)
{
    global $post;
    // return '... <a class="view-article" href="' . get_permalink($post->ID) . '">' . __('Read full article', 'html5blank') . '</a>';
    return '...';
}

// Remove Admin bar
function remove_admin_bar()
{
    return false;
}

// Remove 'text/css' from our enqueued stylesheet
function html5_style_remove($tag)
{
    return preg_replace('~\s+type=["\'][^"\']++["\']~', '', $tag);
}

// Remove thumbnail width and height dimensions that prevent fluid images in the_thumbnail
function remove_thumbnail_dimensions( $html )
{
    $html = preg_replace('/(width|height)=\"\d*\"\s/', "", $html);
    return $html;
}

// Custom Gravatar in Settings > Discussion
function html5blankgravatar ($avatar_defaults)
{
    $myavatar = get_template_directory_uri() . '/img/gravatar.jpg';
    $avatar_defaults[$myavatar] = "Custom Gravatar";
    return $avatar_defaults;
}

// Threaded Comments
function enable_threaded_comments()
{
    if (!is_admin()) {
        if (is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
            wp_enqueue_script('comment-reply');
        }
    }
}

// Custom Comments Callback
function html5blankcomments($comment, $args, $depth)
{
	$GLOBALS['comment'] = $comment;
	extract($args, EXTR_SKIP);

	if ( 'div' == $args['style'] ) {
		$tag = 'div';
		$add_below = 'comment';
	} else {
		$tag = 'li';
		$add_below = 'div-comment';
	}
?>
    <!-- heads up: starting < for the html tag (li or div) in the next line: -->
    <<?php echo $tag ?> <?php comment_class(empty( $args['has_children'] ) ? '' : 'parent') ?> id="comment-<?php comment_ID() ?>">
	<?php if ( 'div' != $args['style'] ) : ?>
	<div id="div-comment-<?php comment_ID() ?>" class="comment-body">
	<?php endif; ?>
	<div class="comment-author vcard">
	<?php if ($args['avatar_size'] != 0) echo get_avatar( $comment, $args['180'] ); ?>
	<?php printf(__('<cite class="fn">%s</cite> <span class="says">says:</span>'), get_comment_author_link()) ?>
	</div>
<?php if ($comment->comment_approved == '0') : ?>
	<em class="comment-awaiting-moderation"><?php _e('Your comment is awaiting moderation.') ?></em>
	<br />
<?php endif; ?>

	<div class="comment-meta commentmetadata"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>">
		<?php
			printf( __('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?></a><?php edit_comment_link(__('(Edit)'),'  ','' );
		?>
	</div>

	<?php comment_text() ?>

	<div class="reply">
	<?php comment_reply_link(array_merge( $args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
	</div>
	<?php if ( 'div' != $args['style'] ) : ?>
	</div>
	<?php endif; ?>
<?php }

/*------------------------------------*\
	Actions + Filters + ShortCodes
\*------------------------------------*/

// Add Actions
add_action('init', 'html5blank_header_scripts'); // Add Custom Scripts to wp_head
add_action('wp_print_scripts', 'html5blank_conditional_scripts'); // Add Conditional Page Scripts
add_action('get_header', 'enable_threaded_comments'); // Enable Threaded Comments
add_action('wp_enqueue_scripts', 'html5blank_styles'); // Add Theme Stylesheet
add_action('init', 'register_html5_menu'); // Add HTML5 Blank Menu
add_action('widgets_init', 'my_remove_recent_comments_style'); // Remove inline Recent Comment Styles from wp_head()
add_action('init', 'html5wp_pagination'); // Add our HTML5 Pagination

// Remove Actions
remove_action('wp_head', 'feed_links_extra', 3); // Display the links to the extra feeds such as category feeds
remove_action('wp_head', 'feed_links', 2); // Display the links to the general feeds: Post and Comment Feed
remove_action('wp_head', 'rsd_link'); // Display the link to the Really Simple Discovery service endpoint, EditURI link
remove_action('wp_head', 'wlwmanifest_link'); // Display the link to the Windows Live Writer manifest file.
remove_action('wp_head', 'index_rel_link'); // Index link
remove_action('wp_head', 'parent_post_rel_link', 10, 0); // Prev link
remove_action('wp_head', 'start_post_rel_link', 10, 0); // Start link
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // Display relational links for the posts adjacent to the current post.
remove_action('wp_head', 'wp_generator'); // Display the XHTML generator that is generated on the wp_head hook, WP version
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);

// Add Filters
add_filter('avatar_defaults', 'html5blankgravatar'); // Custom Gravatar in Settings > Discussion
add_filter('body_class', 'add_slug_to_body_class'); // Add slug to body class (Starkers build)
add_filter('widget_text', 'do_shortcode'); // Allow shortcodes in Dynamic Sidebar
add_filter('widget_text', 'shortcode_unautop'); // Remove <p> tags in Dynamic Sidebars (better!)
add_filter('wp_nav_menu_args', 'my_wp_nav_menu_args'); // Remove surrounding <div> from WP Navigation
// add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> injected classes (Commented out by default)
// add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> injected ID (Commented out by default)
// add_filter('page_css_class', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> Page ID's (Commented out by default)
add_filter('the_category', 'remove_category_rel_from_category_list'); // Remove invalid rel attribute
add_filter('the_excerpt', 'shortcode_unautop'); // Remove auto <p> tags in Excerpt (Manual Excerpts only)
add_filter('the_excerpt', 'do_shortcode'); // Allows Shortcodes to be executed in Excerpt (Manual Excerpts only)
add_filter('excerpt_more', 'html5_blank_view_article'); // Add 'View Article' button instead of [...] for Excerpts
add_filter('show_admin_bar', 'remove_admin_bar'); // Remove Admin bar
add_filter('style_loader_tag', 'html5_style_remove'); // Remove 'text/css' from enqueued stylesheet
add_filter('post_thumbnail_html', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to thumbnails
add_filter('image_send_to_editor', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to post images

// Remove Filters
remove_filter('the_excerpt', 'wpautop'); // Remove <p> tags from Excerpt altogether

// Shortcodes
add_shortcode('html5_shortcode_demo', 'html5_shortcode_demo'); // You can place [html5_shortcode_demo] in Pages, Posts now.
add_shortcode('html5_shortcode_demo_2', 'html5_shortcode_demo_2'); // Place [html5_shortcode_demo_2] in Pages, Posts now.

// Shortcodes above would be nested like this -
// [html5_shortcode_demo] [html5_shortcode_demo_2] Here's the page title! [/html5_shortcode_demo_2] [/html5_shortcode_demo]

/*------------------------------------*\
	Custom Post Types
\*------------------------------------*/

/*------------------------------------*\
	ShortCode Functions
\*------------------------------------*/

// Shortcode Demo with Nested Capability
function html5_shortcode_demo($atts, $content = null)
{
    return '<div class="shortcode-demo">' . do_shortcode($content) . '</div>'; // do_shortcode allows for nested Shortcodes
}

// Shortcode Demo with simple <h2> tag
function html5_shortcode_demo_2($atts, $content = null) // Demo Heading H2 shortcode, allows for nesting within above element. Fully expandable.
{
    return '<h2>' . $content . '</h2>';
}

//Ninja Page Slider
// function ninja_slider()
// {

//     $field = get_field('hero_image');
//     if( have_rows('custom_slider') )
//     {
//       get_template_part('custom-slider');
//     }
//      else if (!empty ($field))
//      {
//         get_template_part('hero-image');
//      }
//     else
//     {
//         echo "";
//        //get_template_part('image-slider');
//     }
// }

//[loop-single]
function loop_single( $atts ){
    // $pull_quote_atts = shortcode_atts( array(
    //     'id' => '1',
    // ), $args );
    //print_r ($atts);
    //$pull_quote_atts = array ('id' => $args ['id']);

    $args = array( 'post_type' => 'leadership', 'posts_per_page' => 1, 'p' => $atts ['id'] );
    $loop = new WP_Query( $args );
    //print_r($loop);
    $loop->the_post();
    //print_r ($loop);
    //if ( $loop->have_posts() ) {
        // The Loop
        //while ( $query1->have_posts() ) {
            //$loop->the_post();

            echo  '<h3>' . get_the_title() . '</h3>';
            echo get_the_content();
        //}
    //}

}
add_shortcode( 'loop-single', 'loop_single' );





//
// Custom search function for News page
//
 function template_chooser($template)
{
  global $wp_query;
  $post_type = get_query_var('post_type');
  if( $wp_query->is_search && $post_type == 'news-post' )
  {
    return locate_template('archive-search.php');  //  redirect to archive-search.php
  }
  return $template;
}
add_filter('template_include', 'template_chooser');





//
//ACF custom Filter for posts
//


// array of filters (field key => field name)
$GLOBALS['my_query_filters'] = array(
    'field_57f60f2a80472'   => 'region',
    'field_57f61079c378b'   => 'specialization',
    'field_57f6109d78cc6'   => 'years_of_experience'

);


// action
add_action('pre_get_posts', 'my_pre_get_posts', 10, 1);

function my_pre_get_posts( $query ) {

    // bail early if is in admin
    if( is_admin() ) {

        return;

    }


    // get meta query
    $meta_query = $query->get('meta_query');


    // loop over filters
    foreach( $GLOBALS['my_query_filters'] as $key => $name ) {

        // continue if not found in url
        if( empty($_GET[ $name ]) ) {

            continue;

        }


        // get the value for this filter
        // eg: http://www.website.com/events?city=melbourne,sydney
        $value = explode('&', $_GET[ $name ]);


        // append meta query
        $meta_query[] = array(
            'key'       => $name,
            'value'     => $value,
            'compare'   => 'IN',
        );

    }


    // update meta query
    $query->set('meta_query', $meta_query);

}

function login_form_custom ( $atts ){
    echo '
    <section class="form">
    <div class="item three-quarter grey">
      <h3 class="sub-heading">Login to your account</h3>
      <div class="inner">
        ' ;
    wp_login_form(array( 'label_username' => 'Username') );

    echo '
      </div>
      <div class="lost">
        <a href="' ;
    echo wp_lostpassword_url();
    echo '" title="Forgot Password">Forgot Password?</a>
      </div>
      <div class="register">
        <a href="' ;
    echo wp_registration_url();
    echo '">Register</a>
      </div>
    </div>
  </section>';
}

add_shortcode( 'login-form-custom', 'login_form_custom' );

// Login scrreen customize
function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/logo/login-logo.jpg);
            padding-bottom: 10px;
            width: 243px;
            background-size: cover;
        }
        #login #wp-submit {
          text-shadow: none !important;
        }
        #wpbody-content .button:visited {
          background: #333333 !important;
        }
         #wpbody-content .button:active {
          background: #333333 !important;
        }
    </style>
<?php }

add_action( 'login_enqueue_scripts', 'my_login_logo' );


add_filter( 'auth_cookie_expiration', 'wploop_never_log_out' );

   function wploop_never_log_out( $expirein ) {
       return 1421150815; // 40+ years shown in seconds
   }

function post_date() {
   $date = get_the_time('F j, Y');
   echo '<time datetime="' . $date . '">' . $date . '</time>';
}

function site_header ()
{
  ?>
  <header class="navigation" role="banner">
      <div class="top-nav">
          <div class="inner">
              <a href="<?php echo get_site_url() ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" class="logo" alt=""></a>
              
                  <?php html5blank_nav('header-menu'); ?>
              
              <div class="actionbar">
                  <?php if (empty ($_SESSION ['login'])) { ?>
                  <a href="<?php echo site_url('register'); ?>">Register</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="<?php echo site_url('client'); ?>">Login</a>
                  <?php } else echo "<a href='mdoc/client'>Client Portal</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href='<?php echo site_url('client'); ?>?pt_page=logout'>Logout</a>" ?>
                  <!-- <div class="search">
                      <input type="text" placeholder="Search"/>
                      <button><i class="fa fa-search"></i></button>
                  </div> -->
              </div>
          </div>
      </div>
  </header>
  <?php
}

// function remove_menus(){

//   remove_menu_page( 'edit.php' );                   //Posts


// }
// add_action( 'admin_menu', 'remove_menus' );




/*------------------------------------*\
    Dynamic Excerpt Lengths
\*------------------------------------*/
// shorten excerpt length based on title length.
function gds_dynamic_excerpt( $title_chars_per_line, $excerpt_chars_per_line, $excerpt_length ) {
//get length of title
$title_len = strlen(get_the_title());
//get the number of the title covers, rounded up
$title_lines = round($title_len / $title_chars_per_line, 0, PHP_ROUND_HALF_UP);
// get the remaining length
$rem_len =  $excerpt_length - ($excerpt_chars_per_line * $title_lines);
// get the content and remove any shortcodes
$content = strip_shortcodes(get_the_content());
// remove any <styles>...</style> embedded in the content
$content = preg_replace('/(<(script|style)\b[^>]*>).*?(<\/\2>)/s', "$1$3", $content);
// remove any html entities, formattting etc.
$content = strip_tags($content);
// truncate excerpt to fit remaining space
$trunc_ex = substr($content, 0, $rem_len);
// find position of last space in the excerpt (so we can remove anything after this)
$pos = strrpos($trunc_ex, " ", -1);
// strips of the characters upto the last space, so we're left with a complete word on end of excerpt
$trunc_ex = substr($trunc_ex, 0, -($rem_len-$pos));
// add on the dots if the excerpt isn't the complete post
if(strlen($trunc_ex) < strlen($content)) $trunc_ex = $trunc_ex . "...";
//return the excerpt
return $trunc_ex;
}

add_filter( 'wp_feed_cache_transient_lifetime', create_function('$rssfix', 'return 1800;') );




// Custom Excerpt function for Advanced Custom Fields
function modal_bio_excerpt() {
    global $post;
    $text = get_sub_field('modal_bio'); //Replace 'your_field_name'
    if ( '' != $text ) {
        $text = strip_shortcodes( $text );
        $text = apply_filters('the_content', $text);
        $text = str_replace(']]&gt;', ']]&gt;', $text);
        $excerpt_length = 20; // 20 words
        $excerpt_more = apply_filters('excerpt_more', ' ' . '...');
        $text = wp_trim_words( $text, $excerpt_length, $excerpt_more );
    }
    return apply_filters('the_excerpt', $text);
}


function mc_sign_up() {
    ?>
    <!-- Begin MailChimp Signup Form -->
        <div class="form">
            <div id="mc_embed_signup">
                <form action="//mymdoc.us9.list-manage.com/subscribe/post?u=3caaf5f69af9a287b7a6e291d&amp;id=f50337d372" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                
                <input type="email" value="" placeholder="Email Address" name="EMAIL" class="required email" id="mce-EMAIL">
                
                    <div id="mce-responses" class="clear">
                        <div class="response" id="mce-error-response" style="display:none"></div>
                        <div class="response" id="mce-success-response" style="display:none"></div>
                    </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
            
                    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_3caaf5f69af9a287b7a6e291d_f50337d372" tabindex="-1" value=""></div>
            
                    <div class="button">
                        <input type="submit" value="Get Started" name="subscribe" id="mc-embedded-subscribe" class="tertiary">
                    </div>
                </form>
            </div>
        </div>

        <!--End mc_embed_signup-->
    <?php
}
?>
