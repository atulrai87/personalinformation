<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

	<section class="full_width index_body">
<div class="main_container">
<div class="main_inner">
			<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();

					the_title();
					the_content();
					//get_template_part( 'content', get_post_format() );

					
				endwhile;
			?>
		</div>
  </div>
</section>
<?php
//get_sidebar( 'content' );
//get_sidebar();
get_footer();
