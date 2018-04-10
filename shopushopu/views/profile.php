<?php include "includes/header.php";?>
<br><br><br><br>
<section id='notif'>
    <div class='profile2'>    
        <div style="width:100%;display:block;background-color:#1C9E9A;padding:10px;margin-top:10px;"> <!-- #0080C0 -->
                    <div class='row'>
                        <div class="col-sm-3 col-xs-12 flex" style="">
                            <div style='border: 1px solid gray;background:#fff;padding:5px;text-align:center;width:130px;'>
                                <img style="width:100%; height:130px;" src="" />
                            </div>
                        </div>
                        <div class="col-sm-8 col-xs-12" style="color:#fff;padding-top:15%">
                            <h4></h4>
                        </div>
                        <div style="border-bottom:1px solid gainsboro;padding:10px;clear:both">
                            <span class='follow-owner pointer' id=""></span>&nbsp;&nbsp;
                            <span><a href="message.php?mm=">
                                <button class="finebutton mif-mail">Message</button>
                            </a></span>
                        </div>
                        <br/>
                    </div>
                    <div id='profiler'>
                        <span><a href="profile.php?p=&t=mystore">My Store</a></span>
                        <span><a href="profile.php?p=&t=about">About</a></span>
                        <span><a href="profile.php?p=&t=photos">Gallery</a></span>
                        <span><a href="profile.php?p=&t=following">Search</a></span>
                    </div>
            </div>
            <br/>
            <div style="width:100%;">
                <div id='profile_aside' class='col-sm-3'>
                    <ul>
                    <li><h6>CATEGORY</h6></li>
                   
                    </ul>    
                </div>
                <div class='col-sm-9 col-xs-12'>
               
                </div>
                <div style="width:100%; float:left;">
                </div>
            </div>
    </div>
    <div class="left-over"  style="background-color: #fff;">
            <div>
            </div>
    </div>
</section>
<?php
//include "includes/footer.php";
                ?>
            <form method="post" action="" enctype="multipart/form-data">
            <table>
             <tr><td><b>Basic Info</b></td><td></td></tr>
                <tr><td>Username:</td><td><input style='background: inherit;outline:none;padding:0px;' id="profile-nameid" name="nameid" type='text' value=""disabled/></td><td>
                    <span style='color:green' id="profile-name" class='mif-pencil'>edit</span>
                </td></tr>
                <tr><td>Name:</td><td><input style='background: inherit;outline:none;padding:0px;' id="profile-nameid" name="nameid" type='text' value""disabled/></td><td>
                </td></tr>
              
                <tr><td>First Name:</td><td><input style='background: inherit;outline:none;padding:0px;' id="profile-fnameid" name="fnameid" type='text' value=""disabled/></td><td>
                    <span style='color:green' id="profile-fname" class='mif-pencil'>edit</span>
                </td></tr>
                <tr><td>Last Name:</td><td><input style='background: inherit;outline:none;padding:0px;' id="profile-lnameid" name="lnameid" type='text' value=""disabled/></td><td>
                    <span style='color:green' id="profile-lname" class='mif-pencil'>edit</span>
                </td></tr>
               
                <tr><td>Email:</td> <td></td><td></td></tr>
                <tr><td>Phone:</td> <td><input style='background: inherit;outline:none;padding:0px;' id="profile-phoneid" name="phoneid" type='text' value="" disabled/></td><td>
                    <span style='color:green' id="profile-phone" class='mif-pencil'>edit</span>
                </td></tr>
                <tr><td>Gender:</td> <td></td><td></td></tr>
                <tr><td>Current Location:</td> <td></td><td></td></tr>
                <tr><td></td></tr>
                <tr><td><b>Community Info</b></td></tr>
                <tr><td>School:</td> <td></td></tr>
            </table>
            <div class='flex'><button class='finebutton profile-button' type="submit" name="updateProfile">Save</button></div>
            </form>

   