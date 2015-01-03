<?php
get_header(); 
?>
<section class="full_width">
  <div class="main_container">
    <div class="main_inner">
      <?php
        // Start the Loop.
        while ( have_posts() ) : the_post();
            // Include the page content template.
            get_template_part( 'content');
        endwhile;
        ?>
    </div>
  </div>
</section>
<?php
get_sidebar();
get_footer();
?>