<?php include 'includes/header.php';?>
<br><br><br><br><br>

<table>
	<form method="post" action="user.php?users=resetpassword">
		<tr>
			<td>New Password</td>
			<td>
				<input type="hidden" name="useremail" value="">
				<input type="password" name="newpass" placeholder='New Password' /></td>
		</tr>
		<tr>
			<td>Confirm Password</td>
			<td><input type="password" name="cnewpass" placeholder='Re-type Password' /></td>
		</tr>
		<tr><td></td><td><input type="submit" name="resetpassword" value="Reset Password" /></td></tr>
	</form>
	</table>