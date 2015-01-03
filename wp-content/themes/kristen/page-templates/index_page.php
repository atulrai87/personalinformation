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
    <div class="main_inner"> <img src="<?php bloginfo('template_directory');?>/images/banner_image.png"> </div>
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
      <div class="index_about_mayor"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
        <div class="mayor_name full_width">- Kristen</div>
      </div>
      <div class="index_Blog_links">
        <div class="blog_title_index full_width"> Blog Update </div>
        <div class="blog_title_index blog_postLi_index full_width">
          <h2>Recent Posts</h2>
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
      </div>
    </div>
  </div>
</section>
<?php
get_footer();
?>
