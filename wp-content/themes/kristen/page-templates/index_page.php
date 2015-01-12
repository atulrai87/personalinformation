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
<div class="min-width">
<section class="full_width banner_area">
  <div class="main_container">
    <div class="main_inner"> <?php if ( function_exists( 'meteor_slideshow' ) ) { meteor_slideshow(); } ?> </div>
  </div>
</section>
<div class="clear"></div>
<section class="full_width index_body">
  <div class="main_container">
    <div class="main_inner">
      <div class="full_width get_latest_w">
        <h1 class="get_the_latest">GET THE LATEST</h1>
      </div>
      <div class="clear"></div>
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
</div>
<?php
get_footer();
?>
