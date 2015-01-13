<?php
/**
 Template Name: You Can Help
 */
get_header(); ?>

<section class="full_width index_body">
<div class="main_container">
<div class="main_inner">
		
      <?php
		while ( have_posts() ) : the_post();
		the_content();
			//get_template_part( 'content', 'page' );
		endwhile;
		?>
		<div class="main_heading full_width">
			<h1 class="red_color ">Help Kristen</h1>
			<div class="main_headingBorder"></div>
			</div>
		<div class="plan_inner_part full_width top_margin">
		<div class="inner_blue_container">
	
<p>I WOULD LIKE TO HELP KRISTEN BY:</p>
<form action="" method="post">
<p><input type="checkbox" name="ch1" value="PLACING A YARD SIGN IN MY YARD"> PLACING A YARD SIGN IN MY YARD</p>
<p><input type="checkbox" name="ch2" value="GOING DOOR TO DOOR"> GOING DOOR TO DOOR</p>
<p><input type="checkbox" name="ch3" value="MAKING PHONE CALLS"> MAKING PHONE CALLS</p>
<p><input type="checkbox" name="ch4" value="OTHER ACTIVITIES IF AVAILABLE"> OTHER ACTIVITIES IF AVAILABLE</p>
</div>
</div>

<div class="form_part full_width top_margin">
<div class="form_left">
<div class="full_width form_left_container">
<div class="form_text"><p>First Name<span>*</span></p></div>
<div class="form_input_box"><input type="text" name="fname"></div>

</div>
<div class="full_width form_left_container">
<div class="form_text"><p> Street Address<span>*</span></p></div>
<div class="form_input_box"><textarea type="text" name="saddress"></textarea></div>

</div>
<div class="full_width form_left_container">
<div class="form_text"><p>Email<span>*</span></p></div>
<div class="form_input_box"><input type="text" name="email"></div>

</div>
</div>


<div class="form_right">
<div class="full_width form_left_container">
<div class="form_text"><p>Last Name<span>*</span></p></div>
<div class="form_input_box"><input type="text" name="lname"></div>

</div>
<div class="full_width form_left_container">
<div class="form_text"><p>Zip Code<span>*</span></p></div>
<div class="form_input_box"><input type="text" name="zipcode"></div>

</div>
<div class="full_width form_left_container top_padding">
<div class="form_text"><p>Phone<span>*</span></p></div>
<div class="form_input_box"><input type="text" name="phone"></div>

</div>
</div>
<div class="form_botton1">
<input type="submit" value="Submit" name="submit">
</form>
</div></div>
<div class="btn_blue_container"><div class="btn_part"><div class="donate_btn"><img src="<?php bloginfo('template_directory')?>/images/brown_donate_button_small.gif"></div><div class="btn_right_part"><p>To donate, please click here</p></div></div></div>
    </div>
  </div>
</section>
<?php
get_footer(); ?>

<?php

// check for form submission - if it doesn't exist then send back to contact form
if (isset($_POST["submit"])) {
   // header("Location: you-can-help.php"); exit;


// get the posted data
$ch1=$_POST['ch1']."/".$_POST['ch2']."/".$_POST['ch3']."/".$_POST['ch4'];
$fname=$_POST['fname'];
$saddress=$_POST['saddress'];
$email=$_POST['email'];
$lname=$_POST['lname'];
$zipcode=$_POST['zipcode'];
$phone=$_POST['phone'];

// write the email content
$header .= "MIME-Version: 1.0\n";
$header .= "Content-Type: text/html; charset=utf-8\n";
$headers .= "From:" . $email;

$message = "HELP KRISTEN: $ch1\n";
$message = "First Name: $fname\n";
$message = "Last Name: $lname\n";
$message .= "Email ID: $email\n";
$message .= "Phone: $phone\n";
$message .= "Zipcode: $zipcode\n";
$message .= "Message: $saddress";

$subject = "Help Kristen";
$subject = "=?utf-8?B?" . base64_encode($subject) . "?=";

$to = "arvind.enthuons@gmail.com";

// send the email
if(wp_mail($to, $subject, $message, $header))
{
echo "<script>alert('Thank you for your interest in advancing Columbus! The campaign team will be in touch with you soon');</script>";
}

// send the user back to the form
//header("Location: you-can-help.php?s=".urlencode("Thank you for your message.")); exit;
}
?>