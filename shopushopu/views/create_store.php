<?php include 'includes/header.php';?>
<br><br><br><br><br>
<p></p>
<p><input type="text" id="storename" placeholder="Name of your store"></p>
<p><i>www.quick.ng/</i><input type="text" id="storeuid" placeholder="Your quicklink (no space or special characters)" maxlength="20" pattern="[A-Za-z0-9]{20}" /></p>
<p><select id="storetype">
	<option disabled selected>Store Type</option>
	<option value='s'>MarketPlace</option>
	<option value='a'>Hostel Agency</option>
	<option value='r'>Restaurant</option>
</select></p>
<p><textarea style="width:100%" type="text" id="description" placeholder="Describe your store"></textarea></p>
<p><input type="text" id="returnpolicy" placeholder="Your Return Policy eg (0, 1 day, 2days, 1 week)" /></p>
<p><input style="width:49%" type="text" id="bank" placeholder="Name of Bank" />
<input style="width:49%" type="number" pattern="[0-9]{10}" id="nuban" placeholder="Bank Account Number" /></p>
<p><input type="text" id="accountname" placeholder="Name of Bank Account" /></p>
<input type="button" value="Create Store" id='createStore' class="finebutton">
<input type="button" value="Cancel" class="close_">
