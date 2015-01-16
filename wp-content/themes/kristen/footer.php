<?php
/**
 * @package WordPress
 * @subpackage Kristen
 * @since Kristen 1.0
 */
?>

<div class="clear"></div>

<div class="subscribe_news_letter full_width">
  <div class="main_container">
    <div class="main_inner">
      <div class="subscribe_blog_head">Subscribe To The Blog </div>
      <?php //dynamic_sidebar('news letter');?>
      <form method="POST" name="subscription" action="<?php echo site_url();?>/index.php?wp_nlm=subscription">
        <input  name="xyz_em_email" type="text" placeholder="Enter Your Email Id">
        <input  name="xyz_em_name" type="text" placeholder="Zip Code">
        <div class="submit_newsletter">
         <input name="htmlSubmit"  id="submit_em" class="button-primary" type="submit" value="Subscribe" onclick="javascript: if(!xyz_em_verify_fields()) return false; "  />
        </div>
      </form>
    </div>
  </div>
</div>
<footer class="full_width footer_main">
  <div class="main_container">
    <div class="main_inner">
      <div class="footer_logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_header_image();?>" alt="<?php echo( get_bloginfo( 'title' ) ); ?>" /></a></div>
      <div class="footer_right">
        <nav class="footer_nav full_width">
          <?php $defaults = 
	    array('menu'  => 'Secondary menu in left sidebar', 'container' => '', 'echo' => true, 'items_wrap' => '<ul>%3$s</ul>',);
		wp_nav_menu( $defaults );
		?>
          <div class="social_icon"> <a href="https://www.facebook.com/" target="_blank"><span class="fb_icn"></span></a> <a href="https://twitter.com/" target="_blank"><span class="tw_icn"></span></a> <a href="https://www.youtube.com/" target="_blank"><span class="ytube_icn"></span></a> </div>
        </nav>
        <div class="full_width btm_footer_txt">
        <div class="allright"> <?php dynamic_sidebar('Footer Widget Area')?> </div><div class="allright1">Paid for by Friends of Kristen Brown</div></div>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body></html>
<script>
function xyz_em_verify_fields()
{
var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
var address = document.subscription.xyz_em_email.value;
if(reg.test(address) == false) {
	alert('Please check whether the email is correct.');
return false;
}else{
//document.subscription.submit();
return true;
}
}
</script>
