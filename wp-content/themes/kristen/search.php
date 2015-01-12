<?php get_header(); ?>
<!--content-->

	<section class="full_width index_body">
<div class="main_container">
<div class="main_inner">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <!-- post -->
    <div class="single_post" id="post-<?php the_ID(); ?>"> 
    <h2 class="post_title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
       <?php
	$title 	= get_the_title();
	$keys= explode(" ",$s);
	$title 	= preg_replace('/('.implode('|', $keys) .')/iu',
		'<strong class="search_excerpt">\0</strong>',
		$title);
?>
        <?php echo $title; ?> </a>
        </a></h2>
     <!-- post meta -->
    <div class="post_meta"><span class="post_date">
        <?php the_time('F d, Y') ?> / 
        </span><span class="post_comments">
        <?php comments_popup_link(__('0 Comments','framework'), __('1 Comment','framework'), __('% Comments','framework')); ?>
        </span></div>
        <!-- post meta end -->
      <div class="clear"></div>
      <!-- post thumbnail -->
      <?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) : /* if post has post thumbnail */ ?>
      <div class="portfolio_large_thumb_shadow">
      <div class="post_thumb">
        <?php   
$image_id = get_post_thumbnail_id();  
$image_url = wp_get_attachment_image_src($image_id,'portfolio-large-thumbnail');  
$image_url = $image_url[0]; 
?>
        <img src="<?php echo $image_url; ?>" alt="" title="" />
        <div class="thumb_shadow_overlay"></div>
        </div>
        </div>
      <?php endif; ?>
      <!-- post thumbnail end-->
      
      
      <!-- post excerpt -->
      <p class="excerpt"> <?php echo substr(get_the_excerpt(), 0, 500); ?>
        <?php if(strlen(get_the_excerpt()) > 500) : ?>
        ...
        <?php endif; ?>
      </p>
      <a class="read_more" rel="nofollow" href="<?php the_permalink() ?>#more-<?php the_ID(); ?>">
      <span><?php _e('Read More', 'framework') ?></span></a> 
      <!-- post excerpt end--> 
    </div>
    <div class="image_divider"></div>
    <!--post-end-->
    
    <?php endwhile; ?>
    <?php else : ?>
    <div class="no-posts">
      <h2>
        <?php _e('No posts found. Try a different search?', 'framework') ?>
      </h2>
      <p><img src="<?php echo get_template_directory_uri(); ?>/images/noresults.png" alt="No results found" title="No results found" /></p>
    </div>
    <?php endif; ?>
  </div>
  <!--left-col-end--> 
  
  <!-- sidebar -->
  <?php //get_sidebar(); ?>
  <!-- sidebar end--> 
</div>
<!--content-end--> 
<!--pagination-->
<?php if (function_exists("emm_paginate")) {
    emm_paginate();
} ?>
</div>
  </div>
</section>
<!--wrapper-end-->
<?php get_footer(); ?>
