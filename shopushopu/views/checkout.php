<?php
include 'includes/header.php';
?>
<br><br><br>

    <div class='col-sm-7' id='address_form' style='padding:10px;background:#fff;box-shadow: 0 0 2px lightgray; margin:20px;'>
        <form method='POST' action='' id='order_address_form'>
        <table>
        <tr>
        <td>
        	<h4>Your details</h4>
        	<span class='response'></span>
        </td>
        </tr>
        <tr>
        <td><input class="col-xs-6 col-sm-6" id='firstname' type='text'placeholder='First Name'/>

<input class="col-xs-6 col-sm-6" id='lastname' type='text'   placeholder='Last Name'/></td>
        </tr>
        <tr>
        <td><input class="col-xs-6 col-sm-6" id='email' type='email'placeholder='add an email address'/>

           <input class="col-xs-6 col-sm-6" id='phone' type='text' minlength='11' maxlength='11' placeholder='add a phone number'/></td>
        </tr>
        <tr>
        <td><input list='school' id='school' type='text'   placeholder='which school community is closest to you'/>
                <datalist id='school'>
                </datalist></td>
        </tr>
        <tr>
        <td><input class="col-xs-6 col-sm-6" id='location' type='text' placeholder='Which area do you stay?'/>

            <input class="col-xs-6 col-sm-6" id='bustop' type='text' placeholder='What is your nearest bustop'/></td>
        </tr>
        <tr>
        <td><input id='lodge' type='text'  placeholder='Hostel / Lodge / House address'/>
            <input name='justorder' type='hidden' value='order' />
        </td>
        </tr>
    
</table>
</form>
</div>
<div class='col-sm-4' style='padding:10px;background:#fff;box-shadow: 0 0 2px lightgray; margin-top:20px;'>
<input type='hidden' id='total_order_amount' value='<?php //echo $_POST['tp']; ?>' />

<form>

<p>Clicking on the "Complete Purchase" button would take you to a portal where you can pay for your item.</p>
<p><button id='order_complete_button' type='button' class='radios finebutton' style='width:100%;padding:10px;' >Complete Purchase</button></p>
</form>

</div>
<?php
include "includes/footer.php";
?>