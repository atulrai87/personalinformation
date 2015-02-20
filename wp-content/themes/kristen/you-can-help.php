<?php
/**
 Template Name: You Can Help
 */
get_header(); ?>
<div class="min-width">
<section class="full_width index_body">
  <div class="main_container">
    <div class="main_inner">
      <?php
		while ( have_posts() ) : the_post();
		the_content();
			//get_template_part( 'content', 'page' );
		endwhile;
		?>
<<<<<<< HEAD
		<div class="main_heading full_width">
			<h1 class="red_color ">Help Kristen</h1>
			<div class="main_headingBorder"></div>
			</div>
			<form action="" method="post" name="form1" onsubmit="return validation();">
		<div class="plan_inner_part full_width top_margin">
		<div class="inner_blue_container">
	
<p>I WOULD LIKE TO HELP KRISTEN BY:</p>

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
<input type="submit" value="Submit" name="sub">
</form>
</div>

=======
      <div class="main_heading full_width">
        <h1 class="red_color ">Help Kristen</h1>
        <div class="main_headingBorder"></div>
      </div>
      <div class="plan_inner_part full_width top_margin">
      <div class="inner_blue_container">
      <p>I WOULD LIKE TO HELP KRISTEN BY:</p>
      <form action="" method="post">
        <p>
          <input type="checkbox" name="ch1" value="PLACING A YARD SIGN IN MY YARD">
          PLACING A YARD SIGN IN MY YARD</p>
        <p>
          <input type="checkbox" name="ch2" value="GOING DOOR TO DOOR">
          GOING DOOR TO DOOR</p>
        <p>
          <input type="checkbox" name="ch3" value="MAKING PHONE CALLS">
          MAKING PHONE CALLS</p>
        <p>
          <input type="checkbox" name="ch4" value="OTHER ACTIVITIES IF AVAILABLE">
          OTHER ACTIVITIES IF AVAILABLE</p>
        </div>
        </div>
        <div class="form_part full_width top_margin">
          <div class="form_left">
            <div class="full_width form_left_container">
              <div class="form_text">
                <p>First Name<span>*</span></p>
              </div>
              <div class="form_input_box">
                <input type="text" name="fname">
              </div>
            </div>
            <div class="full_width form_left_container">
              <div class="form_text">
                <p> Street Address<span>*</span></p>
              </div>
              <div class="form_input_box">
                <textarea type="text" name="saddress"></textarea>
              </div>
            </div>
            <div class="full_width form_left_container">
              <div class="form_text">
                <p>Email<span>*</span></p>
              </div>
              <div class="form_input_box">
                <input type="text" name="email">
              </div>
            </div>
          </div>
          <div class="form_right">
            <div class="full_width form_left_container">
              <div class="form_text">
                <p>Last Name<span>*</span></p>
              </div>
              <div class="form_input_box">
                <input type="text" name="lname">
              </div>
            </div>
            <div class="full_width form_left_container">
              <div class="form_text">
                <p>Zip Code<span>*</span></p>
              </div>
              <div class="form_input_box">
                <input type="text" name="zipcode">
              </div>
            </div>
            <div class="full_width form_left_container top_padding">
              <div class="form_text">
                <p>Phone<span>*</span></p>
              </div>
              <div class="form_input_box">
                <input type="text" name="phone">
              </div>
            </div>
          </div>
        </div>
        <div class="form_botton1">
          <input type="submit" value="Submit" name="submit">
        </div>
      </form>
      <div class="btn_blue_container">
        <div class="btn_part">
          <div class="btn_right_part">
            <p>To donate, please click here</p>
          </div>
          <div class="donate_btn"><img src="<?php bloginfo('template_directory')?>/images/brown_donate_button_small.gif"></div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
get_footer(); ?>
<?php
>>>>>>> c7c7c772d6246409cc169684125b5dd6a1796322

</div>
<!--<p class="top_margin text_align" >Thank you for your interest in advancing Columbus! The campaign team will be in touch with you soon</p>-->

</div>
<div class="btn_blue_container"><div class="btn_part"><div class="donate_btn">
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">

<input type="hidden" name="cmd" value="_s-xclick">

<input type="hidden" name="hosted_button_id" value="B5EW8MUC9GWBG">

<input type="image" src="http://techtrenz.com/dev/brown-for-columbus/wp-content/uploads/2015/01/brown_donate_button_small.gif" width="100" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">

<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">

</form>
</div><div class="btn_right_part"><p>To donate, please click here</p></div></div></div>
    </div>
  </div>
</section>
</div>
<?php
get_footer(); ?>

<?php
if(isset($_POST["sub"])) 
{
	$ch=$_POST['ch1'].",".$_POST['ch2'].",".$_POST['ch3'].",".$_POST['ch4'];
	$fname=$_POST['fname'];
	$saddress=$_POST['saddress'];
	$email=$_POST['email'];
	$lname=$_POST['lname'];
	$zipcode=$_POST['zipcode'];
	$phone=$_POST['phone'];

	$header .= "MIME-Version: 1.0\n";
	$header .= "Content-Type: text/html; charset=utf-8\n";
	$headers .= "From:" . $email;
	
	$message = "HELP KRISTEN: $ch \n";
	$message = "Last Name: $lname \n";
	$message = "First Name: $fname \n";
	$message = "Email ID: $email \n";
	$message = "Phone: $phone \n";
	$message = "Zipcode: $zipcode \n";
	$message = "Message: $saddress \n";
	$message="
	HELP KRISTEN		:	$ch
	
	LAST NAME		:	$lname
	
	FIRST NAME		:	$fname
	
	EMAIL ID		:	$email
	
	PHONE			:	$phone
	
	ZIPCODE			:	$zipcode
	
	MESSAGE			:	$saddress
	";
	
	$subject = "Help Kristen";
	$subject = "=?utf-8?B?" . base64_encode($subject) . "?=";
	
	//$to = "campaign@brownforcolumbus.com";
	$to = "arvind.enthuons@gmail.com";

	if(wp_mail($to, $subject, $message, $header))
	{
		echo "<script>alert('Thank you for your interest in advancing Columbus! The campaign team will be in touch with you soon');</script>";
	}	
}
?>
<<<<<<< HEAD
<script type = 'text/javascript'>
	function validation()
	{
		var fname=document.form1.fname.value;
		if(fname == "" || fname==null )
		{
			 alert( "Please enter your first name!" );
			 document.form1.fname.focus() ;
			 return false;
		}
		var letters = /^[A-Za-z]+$/;
		if(!fname.match(letters))
		{
			 alert("Only alphabet allow!" );
			 document.form1.fname.focus() ;
			 return false;
		}
		var saddress=document.form1.saddress.value;
		if(saddress == "" || saddress==null )
		{
			 alert( "Please enter your address!" );
			 document.form1.saddress.focus() ;
			 return false;
		}
		var email=document.form1.email.value;
		if(email == "" || email==null )
		{
			 alert( "Please enter your email!" );
			 document.form1.email.focus() ;
			 return false;
		}
		var filter1 = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
		if(!filter1.test(email) )
		{
			 alert( "Please provide a valid email address!" );
			 document.form1.email.focus() ;
			 return false;
		}
		var lname=document.form1.lname.value;
		if(lname == "" || lname==null )
		{
			 alert( "Please enter your last name!" );
			 document.form1.lname.focus() ;
			 return false;
		}
		var letters1 = /^[A-Za-z]+$/;
		if(!lname.match(letters1))
		{
			 alert("Only alphabet allow!" );
			 document.form1.lname.focus() ;
			 return false;
		}
		var zipcode=document.form1.zipcode.value;
		if(zipcode == "" || zipcode==null )
		{
			 alert( "Please enter your zipcode!" );
			 document.form1.zipcode.focus() ;
			 return false;
		}
		var numbers = /^[0-9]+$/;
		if(!zipcode.match(numbers))
		{
			 alert( "Only Number allow!" );
			 document.form1.zipcode.focus() ;
			 return false;
		}
		var phone=document.form1.phone.value;
		if(phone == "" || phone==null )
		{
			 alert( "Please enter your phone no!" );
			 document.form1.phone.focus() ;
			 return false;
		}
		var numbers1 = /^[0-9]+$/;
		if(!phone.match(numbers1))
		{
			 alert( "Only Number allow!" );
			 document.form1.phone.focus() ;
			 return false;
		}
		//return true;
		//document.form1.submit();
	}
</script>
=======
>>>>>>> c7c7c772d6246409cc169684125b5dd6a1796322
