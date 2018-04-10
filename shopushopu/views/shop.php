<?php 
//include_once 'classes/Shop.php';
include ('includes/header.php');
	?><br><br><br><br><br><br>
<section class="allbox">
		<div class="side-area">
	    </div>
	    <div class="centrebox" style='background: #f8f8f8;width: 100%' >
	    	<div id='shop_search_bar' style='background: #00cc99; padding:20px; border-radius:3px; min-height:180px;width: inherit;'>
						<h3 style='color:#fff'>Quick Search</h3>
						<p style='color:#fff'><b>Lets help you find your item quickly. What do you want to buy?</b></p><br>
						<div>
							<div style="background:#fff;margin-right:0px;width:87%;float:left>
							<input type='hidden' id='' />
							&nbsp;<span class="mif-search"></span>
							<input type="text" id='searchshop' placeholder="Search for any item on Quick.ng stores" 
							style="height:30px;margin:0px;outline:0px;color">
							</div>
							<div style='float:left; margin-left:5px;'><button style='background: #fff;color:#333' class="finebutton" id='submit-shop-search'>Go</button></div>

						</div>
						<div class="col-md-12 col-xs-12" id="liveshopsearch" style="z-index:10;max-height:400px;overflow-y:auto background: #fff"></div>
					</div><br/><br/>
			<!--div id='shop-cate-div'>
			<h6 style='color:#00cc99'>POPULAR CATEGORIES</h6>
				<div><div-->
				
				<!--/div></div>
			</div-->

			
             <br/><p class="" style="clear:both;width:100%;text-align:center">
              <a href="">
             <a href="shop/campaign.php">
             <img style="max-height:350px;width:90%;" src="" /></a></p><br/>
                    
   			<br/><!--div style="clear:both">
			<h6 style='color:#00cc99'>POPULAR SUB-CATEGORIES</h6>
					<div><?php //$select->shopCategoryPreview(); ?><!--/div-->
				<!--/div-->

			</div>
		<div class="left-over2">
			<div>
				<div>
					
				</div>
			</div>
			
		</div>
	</section>
	<div id='shop_bar_group' style='background: #fff; clear:both; height:100px;width:100%;margin-bottom:50px;'>
		<div class='flex' style='padding: 10px;'>
			<div style='width:200px;text-align:center'>
			<a href='<?php echo URL?>shopcat'><span><img style='width:55px;height:55px;' src='util/images/category.png' /><br>View Categories</span></a></div>
			<div style='width:200px;text-align:center'><a href='shop/index.php#mostserached'<span><img style='width:55px;height:55px;' src='util/images/mostsearched.png' /><br>Most Searched</span></a></div>
			<div style='width:200px;text-align:center'><a href='shop/index.php#popularstores'<span><img style='width:55px;height:55px;' src='util/images/popularstores.png' /><br>Popular Stores</span></a></div>
			<!--div style='width:200px;text-align:center'><a href='#'<span><img style='width:55px;height:55px;' src='util/images/book.png' /><br>Create Store</span></a></div-->
		</div>
	</div>
		


	