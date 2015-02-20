<?php 
/**
 * Template Name: Index Page Template
 *
 * @package WordPress
 * @subpackage Kristen
 * @since Kristen 1.0
 */
get_header(); 
?>

<section class="full_width banner_area">
  <div class="main_container">
    <div class="main_inner">
    <div class="banner_txt_part"><p >The Mayor for ALL of Columbus</p></div>
     <?php if ( function_exists( 'meteor_slideshow' ) ) { meteor_slideshow(); } ?> </div>
  </div>
</section>
<div class="clear"></div>
<section class="full_width index_body">
  <div class="main_container">
    <div class="main_inner">
      <!--<div class="full_width get_latest_w">
        <h1 class="get_the_latest">GET THE LATEST</h1>
      </div>
      <div class="clear"></div>-->
      <div class="home_page_top_btn full_width ">
        <div class="left_top_Volunteer">
          <div class="Volunteer_icon"><a href="<?php echo site_url();?>/you-can-help"><img src="<?php bloginfo('template_directory');?>/images/Volunteer_icon.png" /></a></div>
          <div class="Volunteer_text">Volunteer</div>
        </div>
        <div class="left_top_request">
          <div class="Volunteer_icon"><a href="<?php echo site_url();?>/you-can-help"><img src="<?php bloginfo('template_directory');?>/images/request_icon.png" /></a></div>
          <div class="request_text">Request A Sign</div>
        </div>
        <div class="left_top_donate">
          <div class="Volunteer_icon"><a href="https://www.paypal.com/us/cgi-bin/webscr?cmd=_flow&SESSION=tGIx7b_PAPlMTC1t1y_UPbKmoB-pwWc8ex1puiYF0xXdYQ3u4YvHHUlV-UC&dispatch=5885d80a13c0db1f8e263663d3faee8da8649a435e198e44a05ba053bc68d12e" target="_blank"><img src="<?php bloginfo('template_directory');?>/images/donate.png" /></a></div>
          <div class="donate_text">Donate</div>
        </div>
      </div>
      <?php dynamic_sidebar('Content Sidebar');?>
      <!--<div class="index_Blog_links">
        <div class="blog_title_index full_width"> Blog Update </div>
        <div class="blog_title_index blog_postLi_index full_width">
			<?php //dynamic_sidebar('blog area');?>
         <!-- <h2>Recent Posts</h2>
          <ul>
            <li><a href="">Recent Posts - 1</a></li>
            <li><a href="">Recent Posts - 1</a></li>
            <li><a href="">Recent Posts - 1</a></li>
          </ul>
          <h2>Categories</h2>
          <ul>
            <li><a href="">Categories - 1</a></li>
            <li><a href="">Categories - 1</a></li>
            <li><a href="">Categories - 1</a></li>
          </ul>
        </div>
      </div>-->
    </div>
  </div>
</section>

<?php
get_footer();
?>
