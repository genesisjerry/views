<?php
include ('includes/header.php');
       
?>
<br /><br /><br /><br /><br />
<section id="" class="mainpage">
	<div id="shop-main-area" class='m-area'>
		<div><div class="input-control text" data-role="input">
		    <input type="text" id='searchbox'>
		    <button class="button"><span class="mif-search">Meet</span></button>
		</div>
		<div id="livesearch" style="width:100%;border:none;"></div></div>
		<div id="users">
			<h5>Meet people In Your Community</h5>
			<?php //$select->users(); ?>
		</div>
	</div>
	<div class="left-over">
		<div>
	      <p style="padding:2px;text-align:left;border-bottom:1px solid silver"><span class='mif-earth mif-ani-spin fg-blue'></span> NEWS TODAY</p>
	      <?php //$select->postBlog(); ?>
	    </div>
	</div>
</section>
</body>
</html>