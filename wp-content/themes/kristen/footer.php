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
      <form>
        <input type="text" placeholder="Enter Your Email Id">
        <input type="text" placeholder="Zip Code">
        <div class="submit_newsletter">
          <input type="submit" value="submit">
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
          <ul>
            <li class="active"><a href="">A Record of Success</a></li>
            <li><a href="">A Plan for the Future</a></li>
            <li><a href="">Kristen's Blog</a></li>
            <li><a href="">You Can Help </a></li>
            <li><a href="">Gallery</a></li>
            <li><a href="">Contact</a></li>
          </ul>
          <div class="social_icon"> <a href=""><span class="fb_icn"></span></a> <a href=""><span class="tw_icn"></span></a> <a href=""><span class="ytube_icn"></span></a> </div>
        </nav>
        <div class="full_width allright"> © 2014 Mayor Kristen Brown 5 All Rights Reserved. </div>
      </div>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
</body></html>