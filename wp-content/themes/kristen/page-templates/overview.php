<?php
/*  Template Name: Overview */
?>
<?php get_header();?>
<script src="<?php bloginfo('template_directory')?>/js/jquery-1.8.0.min.js"></script>
<script>
$(document).ready(function () {
	$('.togglelink').css("font-weight", "normal");
    $('.toggle').hide();
    $('.togglelink').on('click', function (e) {
        e.preventDefault();
        var elem = $(this).next('.toggle')
        $('.toggle').not(elem).hide('slow');
        elem.toggle('slow');
        $("h1,h2,p").addClass("blue");
        console.log($(this));
        if($($(this).prev().children()[0]).attr("src") == "<?php bloginfo('template_directory');?>/images/overview_arrow.png"){
			$($(this).prev().children()[0]).attr("src","<?php bloginfo('template_directory');?>/images/overview_arrow1.png");
			$(this).css("font-weight", "normal");
		}else{
			$($(this).prev().children()[0]).attr("src","<?php bloginfo('template_directory');?>/images/overview_arrow.png");
			$('.togglelink').css("font-weight", "normal");
			$(this).css("font-weight", "bold");
		}
    });
});
</script>
<section class="full_width index_body">
<div class="main_container">
<div class="main_inner">
<div class="main_heading full_width">
  <h1 class="red_color ">A Record of Success Overview</h1>
  <div class="main_headingBorder"></div>
</div>
<div class="inner_text_container full_width">
<p class="top_margin">Under Mayor Kristen Brown’s leadership, the City of Columbus has made the following advancements and done so after elimination of the mandatory trash fees and with no increase in taxes and no incremental new debt.</p>
<img src="<?php bloginfo('template_directory');?>/images/overview.png" class="top_margin full_width">
</div>
<div class="main_page_tab full_width">
<div class="gradient_color ">
	<div class="right_img"><img src="<?php bloginfo('template_directory');?>/images/overview_arrow1.png"></div>
<div class="left_gradient_txt bold_txt togglelink">Restored and Improved Our Parks and Community Facilities</div>
<div class="over_show_text full_width btm_padding1 toggle" style="display:none;">
<ul>
<li>Completed the largest road repair project in the city’s history by investing an unprecedented $10 million to reconstruct and 
resurface 40 miles of crumbling streets.</li>
<li>Completed or began six major road improvement projects for a combined investment of $20 million.</li>
</ul>
</div>
</div></div>
<div class="main_page_tab full_width">
<div class="gradient_color ">
	<div class="right_img"><img src="<?php bloginfo('template_directory');?>/images/overview_arrow1.png"></div>
<div class="left_gradient_txt bold_txt togglelink">Restored and Improved Our Parks and Community Facilities</div>
<div class="over_show_text full_width btm_padding1 toggle" style="display:none;">
<ul>
<li>Completed the largest road repair project in the city’s history by investing an unprecedented $10 million to reconstruct and 
resurface 40 miles of crumbling streets.</li>
<li>Completed or began six major road improvement projects for a combined investment of $20 million.</li>
</ul>
</div>
</div></div>
<div class="main_page_tab full_width">
<div class="gradient_color ">
	<div class="right_img"><img src="<?php bloginfo('template_directory');?>/images/overview_arrow1.png"></div>
<div class="left_gradient_txt bold_txt togglelink">Made Columbus Safer, Protected You and Your Family</div>
<div class="over_show_text full_width btm_padding1 toggle" style="display:none;">
<ul>
<li>Completed the largest road repair project in the city’s history by investing an unprecedented $10 million to reconstruct and 
resurface 40 miles of crumbling streets.</li>
<li>Completed or began six major road improvement projects for a combined investment of $20 million.</li>
</ul>
</div>
</div></div>
<div class="main_page_tab full_width">
<div class="gradient_color ">
	<div class="right_img"><img src="<?php bloginfo('template_directory');?>/images/overview_arrow1.png"></div>
<div class="left_gradient_txt bold_txt togglelink">Revitalized and Strengthened Our Neighborhoods</div>
<div class="over_show_text full_width btm_padding1 toggle" style="display:none;">
<ul>
<li>Completed the largest road repair project in the city’s history by investing an unprecedented $10 million to reconstruct and 
resurface 40 miles of crumbling streets.</li>
<li>Completed or began six major road improvement projects for a combined investment of $20 million.</li>
</ul>
</div>
</div></div>
<div class="main_page_tab full_width">
<div class="gradient_color ">
	<div class="right_img"><img src="<?php bloginfo('template_directory');?>/images/overview_arrow1.png"></div>
<div class="left_gradient_txt bold_txt togglelink">Encouraged Job Growth</div>
<div class="over_show_text full_width btm_padding1 toggle" style="display:none;">
<ul>
<li>Completed the largest road repair project in the city’s history by investing an unprecedented $10 million to reconstruct and 
resurface 40 miles of crumbling streets.</li>
<li>Completed or began six major road improvement projects for a combined investment of $20 million.</li>
</ul>
</div>
</div></div>
<div class="main_page_tab full_width">
<div class="gradient_color ">
	<div class="right_img"><img src="<?php bloginfo('template_directory');?>/images/overview_arrow1.png"></div>
<div class="left_gradient_txt bold_txt togglelink">Ushered in New Era of Good Government</div>
<div class="over_show_text full_width btm_padding1 toggle" style="display:none;">
<ul>
<li>Completed the largest road repair project in the city’s history by investing an unprecedented $10 million to reconstruct and 
resurface 40 miles of crumbling streets.</li>
<li>Completed or began six major road improvement projects for a combined investment of $20 million.</li>
</ul>
</div>
</div></div>
<div class="main_page_tab full_width">
<div class="gradient_color ">
	<div class="right_img"><img src="<?php bloginfo('template_directory');?>/images/overview_arrow1.png"></div>
<div class="left_gradient_txt bold_txt togglelink">Made the Tough Calls and Got Our Fiscal House in Order</div>
<div class="over_show_text full_width btm_padding1 toggle" style="display:none;">
<ul>
<li>Completed the largest road repair project in the city’s history by investing an unprecedented $10 million to reconstruct and 
resurface 40 miles of crumbling streets.</li>
<li>Completed or began six major road improvement projects for a combined investment of $20 million.</li>
</ul>
</div>
</div></div>
<div class="main_page_tab full_width">
<div class="gradient_color ">
	<div class="right_img"><img src="<?php bloginfo('template_directory');?>/images/overview_arrow1.png"></div>
<div class="left_gradient_txt bold_txt togglelink">Met Demand for Expanded Services With No Tax Increase</div>
<div class="over_show_text full_width btm_padding1 toggle" style="display:none;">
<ul>
<li>Completed the largest road repair project in the city’s history by investing an unprecedented $10 million to reconstruct and 
resurface 40 miles of crumbling streets.</li>
<li>Completed or began six major road improvement projects for a combined investment of $20 million.</li>
</ul>
</div>
</div></div>
</div>
  </div>
</section>
<?php get_footer();?>
