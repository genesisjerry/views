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
	<form method='POST' action='<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>'>
		<tr><td><h3>Sign Up</h3></td></tr>
		<tr>
		<td>
	<input id='firstname' style='width:49%' name='firstname' type='text' value='<?php if(isset($_POST['firstname'])){echo $_POST['firstname'];} ?>' placeholder='First Name (Required)' required/>
			<input id='lastname' style='width:49%' name='lastname' type='text' value='<?php if(isset($_POST['lastname'])){echo $_POST['lastname'];} ?>' placeholder='Last Name (Required)' required/>
		</td>
		</tr>
		<tr>
		<td><input required name='email' type='email' value='<?php if(isset($_POST['email'])){echo $_POST['email'];} ?>' placeholder='Email Address (Required)' title='Ensure you give a valid email address ' /></td>
		</tr>
		<tr>
		<td><input id='phone' name='phone' type='text' pattern='[0-9]{11}' value='<?php if(isset($_POST['phone'])){echo $_POST['phone'];} ?>' placeholder='Phone Number (Required)' title='A valid phone number of 11 characters' required/></td>
		</tr>
		<tr>
		<td><input name='password' type='password' value='<?php if(isset($_POST['password'])){echo $_POST['password'];} ?>' placeholder='Password' title='You are advised to use a password of 8 or more character combinations' required /></td>
		</tr>
		<tr>
		<td><input name='rpassword' type='password' value='<?php if(isset($_POST['rpassword'])){echo $_POST['rpassword'];} ?>' placeholder='Re-type Password' required /></td>
		</tr>
		<tr>
		<td class='flex'><span><input id='m' class="radios" name='type' type='radio' value='m'/></span> <label for='m'>Male &nbsp;</label> <span><input id='f' class="radios" name='type' type='radio' value='f'/></span> <label for='f'>Female &nbsp;</label> 
		</tr>
		<tr>
		<tr>
		<td><br/><input type='submit' name='register' style='background-color: #0080C0; color:#fff' value='Register Me' /></td>
		</tr>
		<tr>
		<td><span>Already registered? <a href='<?php echo URL?>login' style='color:#0080C0'>Sign in</a></span></td>
		</tr>
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





