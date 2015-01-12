<?php
/**
 * The template for displaying Category pages
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

	<section class="full_width index_body">
<div class="main_container">
<div class="main_inner">

			<?php if ( have_posts() ) : ?>
			<?php $cat=single_cat_title( '', false ); ?>
			<?php query_posts('category_name='.$cat.'&showposts=6');
				while (have_posts()) : the_post();
				  // do whatever you want

				?>
          <div class="blog_inner_part">
           <!-- <p class="blue_h_abt">Arc hive for the "Information for Parents – Princeton Jct. & Montgomery" Category</p>-->
           <p class="orng_h_abt"><a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></p>
            <p><?php $content = get_the_content(); $content =strip_tags($content);echo substr($content, 0, 300);?></p>
            <div class="blog_innerPage_btm">
              <div class="date_left"><?php the_time('d M Y') ?> </div>
              <div class="middle_line_blog_part"></div>
              <div class="Category_mid"> <a href=""><?php $cat=single_cat_title( '', false );?></a></div>
              <div class="middle_line_blog_part"></div>
              <!--<div class="date_left">Comments Off</div>-->
            </div>
          </div>
          <div class="blog_btmLine"></div>
          <?php
				endwhile;
				?>
		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>
		</div>
  </div>
</section>

<?php
get_footer();
