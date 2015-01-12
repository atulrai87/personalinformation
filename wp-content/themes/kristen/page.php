<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
get_header(); ?>
<div class="min-width">
<section class="full_width index_body">
<div class="main_container">
<div class="main_inner">
		
      <?php
		while ( have_posts() ) : the_post();
		the_content();
			//get_template_part( 'content', 'page' );
		endwhile;
		?>
    </div>
  </div>
</section>
</div>
<?php
get_footer(); ?>
