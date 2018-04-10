<?php include DIR."includes/header.php"; ?>
<div id='dash_container'>
  <aside id="dashboard_aside" class='col-sm-3' style='overflow-y: auto;'>

    <ul>
      <li><a href='/'><b>Dashboard</b></a></li>
      <li><a href='index.php?pr=notif'>Notifications&nbsp;<i class='badge' id='tnotif'></i></a></li>
      <li><a href='index.php?pr=msg'>Messages&nbsp;<i class='badge' id='tmsg'></i></a></li>
      <li><a href='<?php echo URL?>Profile'>My Profile</a></li>
      <br/><li><b>My Store()</b></li>
            <li class='_createStore pointer'><a href='<?php echo URL?>CreateStore'>Create Store</a></li>


      <br><li id='AddServices'><b>My Services</b></li>
      <li><a id='add_shop_item' class='pointer' >Sell Your Stuffs</a></li>
      <li><a href='index.php?pr=services&s=shareroom'>Share room</a></li>
      <li><a href='index.php?pr=services&s=sublet'>Sublet your room</a></li>
      <li><a href='<?php echo URL?>ManageCart'>Manage Category</a></li>
      <li><a href='index.php?pr=product'>Manage Products</a></li>
      <li><a href='index.php?pr=services&s=hostel'>Add accommodation</a></li>
      <li><a href='index.php?pr=services&s=hostel'>Add Food</a></li>

      <br><li><b>Get Services</b></li>
      <li><a href='hostel/'><span>Rent An Apartment</span></a></li>
      <li><a href='shop/'><span>Buy Cool Stuffs</span></a></li>
      <li><a href='food/'><span>Explore Restaurants</span></a></li>
      <li><a href='/hostel/roommate.php'>Find Roommate</a></li>
    </ul>
  </aside>
  <section class='col-sm-9 col-xs-12' style='float:right;min-height:500px;padding-top:8px;'>
  <div class='alert alert-info alert-dismissible' role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  We noticed that there's an issue with uploading items on <strong>mozilla firefox browser</strong>, it will be resolved soon. kindly use another browser. Thank you. 
  </div>
 <div>
  <a id='add_shop_item'><button class='col-xs-12 finebutton'> Upload Item now</button></a><br/>
    <ul class='col-sm-6' style='text-align: center'>
      <li class='col-sm-11' style='background: #fff;width:100%;height: 300px;'><p>User Review (coming soon)</p><img src='util/images/dash_analytics.png' max-width="300px" height="200px" /></li>
      <li class='col-sm-11' style='background: #fff;width:100%;height: 300px;'><p>Product Review (coming soon)</p><img src='util/images/dash_analytics.png' max-width="300px" height="200px" /></li>
    </ul>
    <div class='col-sm-5' style='background: #fff;height: 500px;'>
      <h6>Overview</h6>
      <p>Last Login:</p>
      <br/><p>Total Likes : 
       </p>
      <br/><p>Subscribers :
      </p>
      <br/><p>Recent Comments : 
      <br/><p>Total Numbers of Subscribers</p>
    </div>
  </section>
</div>
        <div style="width:100%; float:left; padding:20px; background-color:rgb(245,245,245);color:rgb(120,120,120); text-align:center;">
            <p class="mif-location"><span id="sch_location"></span></p><br><br>
            <p>&copy; Quick.NG</p>
            <!-- <img src="util/images/pay-methods.png"> -->
        </div>
</div>
</body>
</html>