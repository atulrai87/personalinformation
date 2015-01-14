<?php
/*  Template Name: Overview */
?>
<?php get_header();?>

<script src="<?php bloginfo('template_directory')?>/js/jquery-1.8.0.min.js"></script>
<script>
$(document).ready(function(e) {
    $('.gradient_color.full_width').click(function(){    
        var isYoyoApplied = $(this).hasClass("show_ans_faq");
        $(".gradient_color.full_width").removeClass("show_ans_faq");
        $(".gradient_color.full_width").next().slideUp();
        if(!isYoyoApplied) {
            $(this).addClass("show_ans_faq");
            $(".show_ans_faq").next().slideDown();
        }
        
    });
});
</script>

<section class="full_width index_body">
  <div class="main_container">
    <div class="main_inner">
      <div class="main_heading full_width top_margin">
        <h1 class="red_color ">A Record of Success Overview</h1>
        <div class="main_headingBorder"></div>
      </div>
      <div class="inner_text_container full_width">
        <p class="top_margin">Under Mayor Kristen Brown’s leadership, the City of Columbus has made the following advancements and done so after elimination of the mandatory trash fees and with no increase in taxes and no incremental new debt.</p>
        <img src="<?php bloginfo('template_directory');?>/images/overview.png" class="top_margin full_width"> </div>
      <div class="gradient_color full_width ">
        <div class="left_gradient_txt  togglelink">Repaired and Rebuilt Our Roads</div>
      </div>
      <div class="over_show_text full_width btm_padding1 toggle">
        <ul>
          <li>Completed the largest road repair project in the city’s history by investing nearly $10 million to reconstruct and resurface 40 miles of crumbling streets. </li>
          <li>Completed or began six major road improvement projects for a combined investment of $20 million.</li>
        </ul>
        <div class="more_text full_width">
          <p> <a href="">Read More</a></p>
        </div>
      </div>
      <div class="gradient_color full_width ">
        <div class="left_gradient_txt togglelink">Restored and Improved Our Parks and Community Facilities</div>
      </div>
      <div class="over_show_text full_width btm_padding1 toggle">
        <ul>
          <li>Embarked on an aggressive program to invest 5.5 million public and private dollars to preserve and improve our existing parks and community facilities, including Hamilton and Donner Centers.  </li>
          <li>Reversed years of neglect and deterioration of our community’s most cherished facilities and ensured they are safe and inviting outdoor and indoor spaces enjoyed by today’s and future generations.  </li>
        </ul>
        <div class="more_text full_width">
          <p> <a href="">Read More</a></p>
        </div>
      </div>
      <div class="gradient_color full_width">
        <div class="left_gradient_txt  togglelink">Made Columbus Safer, Protected You and Your Family</div>
      </div>
      <div class="over_show_text full_width btm_padding1 toggle">
        <ul>
          <li>Put more police officers on our streets than any time in our city’s history and established a dedicated community policing unit. </li>
          <li>Choked the flow of <span class="li_red_color">dangerous drugs into our community</span> by cracking down on a threefold increase in the number of dealers of methamphetamine and heroin.   </li>
          <li>Cut violent crime nearly in half and cut property crime 23%. </li>
          <li>Improved ambulance service and, at the same time, savedtaxpayers nearly $1 million every year.  </li>
           <li>Dramatically advanced rescue, disaster and extreme weather response capabilities, thwarting the myriad of threats we face. </li>
        </ul>
        <div class="more_text full_width">
          <p> <a href="">Read More</a></p>
        </div>
      </div>
      <div class="gradient_color full_width">
        <div class="left_gradient_txt  togglelink">Revitalized and Strengthened Our Neighborhoods</div>
      </div>
      <div class="over_show_text full_width btm_padding1 toggle">
        <ul>
          <li>Made our neighborhoods safer, stronger and prouder through community policing, neighborhood cleanup projects, concentrated code enforcement and significant blight elimination efforts.  </li>
          <li>Completed the State Street Corridor Revitalization Plan and began implementation efforts.   </li>
          <li>Partnered with private developers who are planning to remediate and redevelop the Golden Casting foundry site, a decade-long source of blight.   </li>
        </ul>
        <div class="more_text full_width">
          <p> <a href="">Read More</a></p>
        </div>
      </div>
      <div class="gradient_color full_width">
        <div class="left_gradient_txt  togglelink">Encouraged Job Growth</div>
      </div>
      <div class="over_show_text full_width btm_padding1 toggle">
        <ul>
          <li>Set all-time records for jobs and employment, second lowest unemployment rate in the state. </li>
          <li>Reaffirmed Cummins’ commitment to Columbus with announcement of 500 new jobs.   </li>
          <li>Encouraged the creation and retention <span class="li_red_color">of another 600 industrial jobs</span> and investments of exceeding $250 million.</li>
        </ul>
        <div class="more_text full_width">
          <p> <a href="">Read More</a></p>
        </div>
      </div>
      <div class="gradient_color full_width">
        <div class="left_gradient_txt  togglelink">Ushered in New Era of Good Government</div>
      </div>
      <div class="over_show_text full_width btm_padding1 toggle">
        <ul>
          <li>Operated transparently, responsively, ethically and with accountability.   </li>
          <li>Dissolved the City’s private corporation, CDI, and stopped spending taxpayer money behind closed doors.   </li>
          <li>Began live and on-demand broadcasting of public meetings on the internet.  </li>
          <li>Passed comprehensive code of ethical conduct.   </li>
          <li>Attained national accreditation by the Columbus Police Department. </li>
        </ul>
        <div class="more_text full_width">
          <p> <a href="">Read More</a></p>
        </div>
      </div>
      <div class="gradient_color full_width">
        <div class="left_gradient_txt  togglelink">Made the Tough Calls and Got Our Fiscal House in Order</div>
      </div>
      <div class="over_show_text full_width btm_padding1 toggle">
        <ul>
          <li>Eliminated mandatory trash fees, returning $1.4 million to residents every year.</li>
          <li>Championed the return of $3 million of TIF property tax revenues to the taxpayers to reduce property tax rates.</li>
          <li>Changed spending priorities to advance your priorities.</li>
          <li>Saved taxpayers money with numerous cost-saving measures.</li>
          <li>Maintained strong cash reserves and City’s strong credit rating.</li>
        </ul>
        <div class="more_text full_width">
          <p> <a href="">Read More</a></p>
        </div>
      </div>
      <div class="gradient_color full_width">
        <div class="left_gradient_txt  togglelink">Met Demand for Expanded Services With No Tax Increase</div>
      </div>
      <div class="over_show_text full_width btm_padding1 toggle">
        <ul>
          <li>Began no-fee residential curbside recycling program.</li>
          <li>Achieved 100-percent adoption rate for healthy dogs the last three years.</li>
          <li>Added a fifth transit route to and from the ever-growing west side.</li>
          <li>Dedicated police officers to the schools to keep our kids safe.</li>
          <li>Began cost-sharing program with homeowners to repair sidewalks and curbs.</li>
        </ul>
        <div class="more_text full_width">
          <p> <a href="">Read More</a></p>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer();?>
