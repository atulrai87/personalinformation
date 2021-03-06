<?php
/**
 * @package WordPress
 * @subpackage Kristen
 * @since Kristen 1.0
 */
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>
<?php wp_title( '|', true, 'right' ); ?>
</title>
<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/ngg.js"></script> 
	<![endif]-->
<?php wp_head(); ?>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/media.css"/>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery-min-2.1.3.js"></script>
<script>
if($(window).width() <= 960){ 
	$(document).ready(function(){
		$(".toggle_btn").click(function(){
			$(".topNav_Ul").toggle();
			$(".topNav_Ul").toggleClass("active_menu");
		});
		
		 $(".menu-item-has-children").click(function(e){
			 console.log($(e.target));
			 console.log($(e.target).find("ul.sub-menu"));
			$(e.target).find(".sub-menu").toggle();
			$(e.target).toggleClass('active_sb');
		});
		
	});
}
else{}
</script>
</head>
<body <?php body_class(); ?>>
<header class="full_width topheader">
  <div class="main_container">
    <div class="main_inner">
      <figure class="logo_top"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_header_image();?>" alt="<?php echo( get_bloginfo( 'title' ) ); ?>" /></a></figure>
      <div class="navSearch_w">
        <div class="search_box">
          <?php //get_search_form(); ?>
        </div>
        <nav class="nav_top full_width">
        <div class="toggle_btn"><img src="<?php bloginfo('template_directory'); ?>/images/toggle_btn.png"/></div>
          <?php $defaults = 
	    array('menu'  => 'Header Menu', 'container' => '', 'echo' => true, 'items_wrap' => '<ul class="topNav_Ul full_width">%3$s</ul>',);
		wp_nav_menu( $defaults );
		?>
        </nav>
      </div>
    </div>
  </div>
</header>
<div class="clear"></div>