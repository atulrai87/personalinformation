<div style="clear: both;"></div>
<?php
if(!get_option(xyz_em_hidepmAds))
{ 
?>
<div id="xyz-wp-newsletter-premium">

	<div style="float: left; padding: 0 5px">
		<h2 style="vertical-align: middle;">
			<a target="_blank"
				href="http://xyzscripts.com/wordpress-plugins/xyz-wp-newsletter/features">Fully
				Featured XYZ WP Newsletter Premium Plugin</a> - Just 29 USD
		</h2>
	</div>
	<div style="float: left; margin-top: 3px">
		<a target="_blank"
			href="http://xyzscripts.com/members/product/purchase/XYZWPNLM"><img class="hoverImages"
			src="<?php  echo plugins_url("newsletter-manager/images/orange_buynow.png"); ?>">
		</a>
	</div>
<div style="float: left; padding: 0 5px">
	<h2 style="vertical-align: middle;text-shadow: 1px 1px 1px #686868">
			( <a 	href="<?php echo admin_url('admin.php?page=newsletter-manager-about');?>">Compare Features</a> ) 
	</h2>		
	</div>
</div>
<?php 
}
?>

<div style="clear: both;"></div>
<div style="clear: both;"></div>

<div style="width: 100%;">
		
    <div class="xyz_feedback">

   
   <a target="_blank" href="http://xyzscripts.com/donate/1" class="xyz_donate">Donate a dollar</a> - 
   <a target="_blank" href="http://wordpress.org/support/view/plugin-reviews/newletter-manager" class="xyz_star">Rate this plugin</a> -   
   <a target="_blank" href="http://xyzscripts.com/support/" class="xyz_suggest">Suggestions</a> - 
   <a target="_blank" href="http://facebook.com/xyzscripts" class="xyz_fbook">Like us on Facebook</a> -   
   <a target="_blank" href="http://twitter.com/xyzscripts" class="xyz_twitt">Follow us on Twitter</a> -   
   <a target="_blank" href="https://plus.google.com/+Xyzscripts/" class="xyz_gplus">+1 us on Google+</a> -  
   <a target="_blank" href="http://www.linkedin.com/company/xyzscripts" class="xyz_linkedin">Follow us on LinkedIn</a>
   
    </div>
    
   <p></p>
    
<div class="xyz_subscribe">

<script language="javascript">
function check_email(emailString)
{
    var mailPattern = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
    var matchArray = emailString.match(mailPattern);
    if (emailString.length == 0)
    return false;
       
    if (matchArray == null)    {
    return false;
    }else{
    return true;
    }
}

   
function verify_lists(form)
{
   
    var total=0;
    var checkBox=form['chk[]'];
   
    if(checkBox.length){
   
    for(var i=0;i<checkBox.length;i++){
    checkBox[i].checked?total++:null;
    }
    }else{
       
    checkBox.checked?total++:null;
       
    }
    if(total>0){
    return true;
    }else{
    return false;
    }

}
   
function verify_fields()
{

    if(check_email(document.email_subscription.email.value) == false){
    alert("Please check whether the email is correct.");
    document.email_subscription.email.select();
    return false;
    }else if(verify_lists(document.email_subscription)==false){
    alert("Select atleast one list.");
    }
    else{
    document.email_subscription.submit();
    }

}
</script>
<?php global $current_user; get_currentuserinfo(); ?>
<form action=http://xyzscripts.com/newsletter/index.php?page=list/subscribe method="post" name="email_subscription" id="email_subscription" >
<input type="hidden" name="fieldNameIds" value="1,">
<input type="hidden" name="redirActive" value="http://xyzscripts.com/subscription/pending/XYZWPNLM">
<input type="hidden" name="redirPending" value="http://xyzscripts.com/subscription/active/XYZWPNLM">
<input type="hidden" name="mode" value="1">
   
<b>Stay tuned to our updates :</b>  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

Name  : 
<input style="border: 1px solid #3fafe3; margin-right:10px;" type="text" name="field1" value="<?php  
if ($current_user->user_firstname != "" || $current_user->user_lastname != "") 
{
	echo $current_user->user_firstname . " " . $current_user->user_lastname; 
} 
else if (strcasecmp($current_user->display_name, 'admin')!=0 && strcasecmp($current_user->display_name , "administrator")!=0 ) 
{
	echo $current_user->display_name;
} 
else if (strcasecmp($current_user->user_login ,"admin")!=0 && strcasecmp($current_user->user_login , "administrator")!=0 ) 
{
	echo $current_user->user_login;	
}
?>"  >

Email Address : 
<input style="border: 1px solid #3fafe3;" name="email"
type="text" value="<?php 	echo $current_user->user_email; ?>" /><span style="color:#FF0000">*</span>           

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input id="submit_em"  type="submit" value="Subscribe" name="Submit"  onclick="javascript: if(!verify_fields()) return false; " />

<input type="hidden" name="listName" value="1,3,"/>
</form>
				


</div>   


    <div style="clear: both;"></div>
 <div style="width: 100%">

<div class="xyz_our_plugins">
Our Plugins : 
	<a target="_blank"	href="http://wordpress.org/extend/plugins/lightbox-pop/">Lightbox Pop</a> ★
	<a target="_blank"	href="http://wordpress.org/extend/plugins/full-screen-popup/">Full Screen Popup</a> ★
	<a target="_blank"	href="http://wordpress.org/extend/plugins/popup-dialog-box/">Popup Dialog Box</a> ★
	<a target="_blank"	href="http://wordpress.org/extend/plugins/quick-bar/">Quick Bar</a> ★
	<a target="_blank"	href="http://wordpress.org/extend/plugins/quick-box-popup/">Quick Box Popup</a> ★
	<a target="_blank"	href="http://wordpress.org/extend/plugins/insert-html-snippet/">Insert HTML Snippet</a> ★
	<a target="_blank"	href="http://wordpress.org/extend/plugins/contact-form-manager/">Contact Form Manager</a> ★
	<a target="_blank"	href="http://wordpress.org/extend/plugins/social-media-auto-publish/">Social Media Auto Publish</a>
	<a target="_blank"	href="http://wordpress.org/extend/plugins/facebook-auto-publish/">Facebook Auto Publish</a> ★
	<a target="_blank"	href="http://wordpress.org/extend/plugins/linkedin-auto-publish/">Linkedin Auto Publish</a> ★
	<a target="_blank"	href="http://wordpress.org/extend/plugins/twitter-auto-publish/">Twitter Auto Publish</a> ★
	<a target="_blank"	href="http://wordpress.org/extend/plugins/insert-php-code-snippet/">Insert PHP Code Snippet</a> ★
	<a target="_blank"	href="http://wordpress.org/extend/plugins/newsletter-manager/">Newsletter Manager</a>
		
</div>
</div>   
<div style="padding-top: 10px;float:left; text-align: center; width: 100%;">
Powered by <a href="http://xyzscripts.com" target="_blank">XYZScripts</a>
</div> 
    <div style="clear: both;"></div>

</div>
    <p style="clear: both;"></p>
