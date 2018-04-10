<?php require ('includes/header.php'); ?>

<section style='width:85%;margin:auto;'>
<h3 style="padding:5px 0px 0px 10px;" >Contact Us</h3><hr/>
<div id="contactform" class="col-md-6">
<h5 style="color:DimGray;">Quick Feedback</h5>
<table style="width:98%;">
	<form method="POST" action="<?php //$_SERVER['PHP_SELF']; ?>">
		<input type='text' name='contactname' placeholder='Full Name'  />
		<input type='email' name='contactemail' placeholder='Email'  />
		<input type='text' name='contactsubject' placeholder='Subject'>
		<textarea rows='8' cols='12' placeholder='Lets hear it all (Message)' name="contactmsg"></textarea>
		<button type="submit" class="btn btn-primary" name='contactform'>Submit</button>
	</form>
</table>
</div>
<div class="col-md-5 col-xs-12" id="c_247">
	<h5 style="margin:0px 0px 10px 0px;">Connect With Us</h5>
	<table>
	<tr><td><span class='mif-alarm mif-2x'></span> Customer Care Operating hours: 24/7</td></tr>
	<tr><td><span class='mif-phone-in-talk mif-2x fg-orange'></span> 08138505291 08122285720</td></tr>
	<tr><td><a href="#"><span class='mif-mail mif-2x fg-pink'></span></a>connect@quickhostel.com</td></tr>
	<tr><td><a href="#"><span class='mif-facebook mif-2x fg-teal'></span></a>facebook.com/quickNG</td></tr>
	<!-- <tr><td><a href="#"><p class='mif-google-plus mif-2x fg-red'></p></a></td><td>plus.google.com/quickhostel</td></tr> -->
	<!-- <tr><td><a href="#"><p class='mif-twitter mif-2x fg-blue'></p></a></td><td>twitter.com/quickhostel</td></tr> -->
	</table>
</div>
</section>
<?php //include "includes/footer.php"; ?>