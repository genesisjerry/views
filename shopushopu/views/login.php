<!DOCTYPE html>
<html>
<head>
	<title><?php //echo $select->getPageTitle($path); ?></title>
	<meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
	<meta name="keywords" content="<?php //echo $select->getPageKeywords($path); ?>" />
	<script src='<?php echo URL?>assets/js/jquery.min.js'></script>
	<script src='<?php echo URL?>assets/js/metro.min.js'></script>
	<script src='<?php echo URL?>assets/js/main.js'></script>
    <link rel='stylesheet' href='<?php echo URL?>assets/css/bootstrap.min.css'/>
    <link rel='stylesheet' href='<?php echo URL?>assets/css/metro-icons.min.css'/>
	<link rel='stylesheet' href='<?php echo URL?>assets/css/main.css'/>
	<link rel='stylesheet' href='<?php echo URL?>assets/css/container.css'/>
</head>
<body class="flex" style="background-color:#66CC99">
<div id='reg' class="col-xs-12 col-md-4">
<div class="col-xs-12 flex"><div><a href='/'><img id='regimg' src='util/images/logo.png' alt='Quick.ng logo'/><span style='font-size:20px;color:ghostwhite;font-weight:bold'>ShopuShopu</span></a></div></div>
<div id='regform' class="col-xs-12">
<table>
	<form method='post' action='user.php?users=login'>
		<tr><td><h3>Sign In</h3></td></tr>
		<tr><td><input type='text' name='email' placeholder='Email or Display Name' value='<?php if(isset($_GET['my_email'])) echo $_GET['my_email']; ?>' /></td></tr>
		<tr><td><br/><input type='password' name='password' placeholder='Password'/></td></tr>
		<tr><td><br/><br/><input style='background-color: #0080C0; color:#fff' type='submit' value='Login' name='login' /></td></tr>
		<tr><td><span><a href='<?php echo URL?>ForgotPassword' style='color: #0080C0'>Forgot Passsword?</a></span></td></tr>
		<tr><td><span><a href='<?php echo URL?>register' style='color: #0080C0'>Not yet a member?</a></span></td></tr>
	</form>
</table>
</div>
<p style="color:white">
<a href='<?php echo URL?>GetStarted'>&nbsp;&nbsp;&nbsp;&nbsp;Home &nbsp;.&nbsp;</a>
<a href='<?php echo URL?>LearnMore'>FAQ &nbsp;.&nbsp;</a>
<a href='<?php echo URL?>Contacts'>Contact Us</a></p>
</div>
</body>
</html>
