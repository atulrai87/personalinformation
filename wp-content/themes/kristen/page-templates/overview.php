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
<div class="left_gradient_txt bold_txt togglelink">Repaired and Rebuilt Our Roads</div>
<div class="over_show_text full_width btm_padding1 toggle" style="display:none;">
<ul>
<li>Completed the largest road repair project in the city’s history by investing an unprecedented $10 million to reconstruct and resurface 40 miles of crumbling streets.</li>
<li>Completed or began six major road improvement projects for a combined investment of $20 million.</li>
</ul>
<div class="more_text full_width"><p> <a href="">Read More</a></p></div>
</div>
</div></div>
<div class="main_page_tab full_width">
<div class="gradient_color ">
	<div class="right_img"><img src="<?php bloginfo('template_directory');?>/images/overview_arrow1.png"></div>
<div class="left_gradient_txt bold_txt togglelink">Restored and Improved Our Parks and Community Facilities</div>
<div class="over_show_text full_width btm_padding1 toggle" style="display:none;">
<ul>
<li>Embarked on an aggressive program to invest 5.5 million public and private dollars to preserve and improve our existing parks and community facilities, including Hamilton and Donner Centers.</li>
<li>Reversed years of neglect and deterioration of our community’s most cherished facilities and ensured they are safe and inviting outdoor and indoor spaces enjoyed by today’s and future generations.</li>
</ul>
<div class="more_text full_width"><p> <a href="">Read More</a></p></div>
</div>
</div></div>
<div class="main_page_tab full_width">
<div class="gradient_color ">
	<div class="right_img"><img src="<?php bloginfo('template_directory');?>/images/overview_arrow1.png"></div>
<div class="left_gradient_txt bold_txt togglelink">Made Columbus Safer, Protected You and Your Family</div>
<div class="over_show_text full_width btm_padding1 toggle" style="display:none;">
<ul>
<li>Put more police officers and paramedic firefighters on our streets than any time in our city’s history. </li>
<li>Took a major bite out of crime by aggressively choking the supply of dangerous drugsinto our community and increasing community policing. </li>
<li>Improved ambulance service and, at the same time, saved significant taxpayers nearly $1 million every year.   </li>
<li>Dramatically advancedrescue, disaster and extreme weather response capabilities, thwarting the myriad of threats we face.</li>
</ul>
<div class="more_text full_width"><p> <a href="">Read More</a></p></div>
</div>
</div></div>
<div class="main_page_tab full_width">
<div class="gradient_color ">
	<div class="right_img"><img src="<?php bloginfo('template_directory');?>/images/overview_arrow1.png"></div>
<div class="left_gradient_txt bold_txt togglelink">Revitalized and Strengthened Our Neighborhoods</div>
<div class="over_show_text full_width btm_padding1 toggle" style="display:none;">
<ul>
<li>Made our neighborhoods safer, stronger and prouder through community policing, neighborhood cleanup projects, concentrated code enforcement and significant blight elimination efforts. </li>
<li>Completed the State Street Corridor Revitalization Plan and began implementation efforts.  </li>
<li>Partnered with private developers to remediate and redevelop the Golden Casting foundry site, a decade-long source of blight.    </li>
</ul>
<div class="more_text full_width"><p> <a href="">Read More</a></p></div>
</div>
</div></div>
<div class="main_page_tab full_width">
<div class="gradient_color ">
	<div class="right_img"><img src="<?php bloginfo('template_directory');?>/images/overview_arrow1.png"></div>
<div class="left_gradient_txt bold_txt togglelink">Encouraged Job Growth</div>
<div class="over_show_text full_width btm_padding1 toggle" style="display:none;">
<ul>
<li>Setall-time records for jobs and employment, second lowest unemployment rate in the state.</li>
<li>Reaffirmed Cummins’ commitment to Columbus with announcement of 500 new jobs.  </li>
<li>Encouraged the creation of more than another 500 new industrial jobs and investments of nearly $250 million.</li>
</ul>
<div class="more_text full_width"><p> <a href="">Read More</a></p></div>
</div>
</div></div>
<div class="main_page_tab full_width">
<div class="gradient_color ">
	<div class="right_img"><img src="<?php bloginfo('template_directory');?>/images/overview_arrow1.png"></div>
<div class="left_gradient_txt bold_txt togglelink">Ushered in New Era of Good Government</div>
<div class="over_show_text full_width btm_padding1 toggle" style="display:none;">
<ul>
<li>Operated transparently, responsively, ethically and with accountability.  </li>
<li>Dissolved the City’s private corporation, CDI, and stopped spending taxpayer money behind closed doors.  </li>
<li>Began live and on-demand broadcasting of public meetings on the internet. </li>
<li>Passed comprehensive code of ethical conduct.   </li>
<li>Attained national accreditation by the Columbus Police Department.</li>
</ul>
<div class="more_text full_width"><p> <a href="">Read More</a></p></div>
</div>
</div></div>
<div class="main_page_tab full_width">
<div class="gradient_color ">
	<div class="right_img"><img src="<?php bloginfo('template_directory');?>/images/overview_arrow1.png"></div>
<div class="left_gradient_txt bold_txt togglelink">Made the Tough Calls and Got Our Fiscal House in Order</div>
<div class="over_show_text full_width btm_padding1 toggle" style="display:none;">
<ul>
<li>Eliminated mandatory trash fees, returning $1.4 million to residents every year.</li>
<li>Championed the return of $3 million of TIF property tax revenues to the taxpayers to reduce property tax rates.</li>
<li>Changed spending priorities to advance your priorities.</li>
<li>Saved taxpayers money with numerous cost-saving measures.</li>
<li>Maintained strong cash reserves and City’s strong credit rating.</li>
</ul>
<div class="more_text full_width"><p> <a href="">Read More</a></p></div>
</div>
</div></div>
<div class="main_page_tab full_width">
<div class="gradient_color ">
	<div class="right_img"><img src="<?php bloginfo('template_directory');?>/images/overview_arrow1.png"></div>
<div class="left_gradient_txt bold_txt togglelink">Met Demand for Expanded Services With No Tax Increase</div>
<div class="over_show_text full_width btm_padding1 toggle" style="display:none;">
<ul>
<li>Began no-fee residential curbside recycling program.</li>
<li>Achieved 100-percent adoption rate for healthy dogs the last three years.</li>
<li>Added a fifth transit route to and from the ever-growing west side.</li>
<li>Dedicated police officers to the schools to keep our kids safe.</li>
<li>Began cost-sharing program with homeowners to repair sidewalks and curbs.</li>
</ul>
<div class="more_text full_width"><p> <a href="">Read More</a></p></div>
</div>
</div></div>
</div>
  </div>
</section>
<?php get_footer();?>