<?php 
/**
 * Kindly add the Namespace name Controllers as already used below when adding you controllers
 * All controllers are found in the Controllers namespace as defined in composer.json
 *
 **/
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$router->add(SUB.'blog/add/post', 'Controllers\BlogController@post');
}else{
	$router->add(SUB.'blog/dashboard', 'Controllers\BlogController@dashboard');
	
	$router->add(SUB.'memberships', function() use ($view){
		$view->display('memberships.php');
	});

///////This is the default page/////////////////////	
	$router->add(SUB.'', function() use ($view){
		$view->display('index.php');
	});

/////////////////The Registration page ///////////////
	$router->add(SUB.'register', function() use ($view){
		$view->display('user.php');
	});

//////////////////// Login page ///////////////////		
	$router->add(SUB.'login', function() use ($view){
		$view->display('login.php');
	});

///////Forgot password page /////////////////////////
	$router->add(SUB.'ForgotPassword', function() use ($view){
		$view->display('resetP.php');
	});

/////getstarted was seperated from the dashboard////////////
$router->add(SUB.'GetStarted', function() use ($view){
		$view->display('home.php');
	});

////////back office is the main dashboard//////////////	
$router->add(SUB.'backoffice', function() use ($view){
		$view->display('dash.php');
	});

////// shop ///////////////
	$router->add(SUB.'shop', function() use ($view){
		$view->display('shop.php');
	});


/////////////This page was gotten from shop category////////////	
	$router->add(SUB.'shopcat', function() use ($view){
		$view->display('shopcat.php');
	});	

///////////This is the profile page///////////
$router->add(SUB.'Profile', function() use ($view){
		$view->display('profile.php');
	});

//////////////Contact Admin page//////////////////	
	$router->add(SUB.'Contacts', function() use ($view){
		$view->display('contact.php');
	});

/////////////Community page//////////////////////	
	$router->add(SUB.'Community', function() use ($view){
		$view->display('community.php');
	});

/////////////For Creating store////////////////////
	$router->add(SUB.'CreateStore', function() use ($view){
		$view->display('create_store.php');
	});

/////////////This page is when u click on buy from shop////////////	
	$router->add(SUB.'buy', function() use ($view){
		$view->display('shopgett.php');
	});

////this page is for Cart //////////////////
	$router->add(SUB.'Cart', function() use ($view){
		$view->display('cart.php');
	});

////This is the check out page/////////////
$router->add(SUB.'Checkout', function() use ($view){
		$view->display('checkout.php');
	});

///this page is when u click on manage cat////////////
	$router->add(SUB.'ManageCart', function() use ($view){
		$view->display('mngcat.php');
	});

////////////this page is when u click on add cat//////////
	$router->add(SUB.'addcart', function() use ($view){
		$view->display('addcat.php');
	});

/////////////This page is for Editing of cart ///////////////
$router->add(SUB.'EditCart', function() use ($view){
		$view->display('editcart.php');
	});

/////////////This page is for Viewing of added cart ///////////////
$router->add(SUB.'viewCart', function() use ($view){
		$view->display('viewCart.php');
	});

///////////This page has the full content of the app's info, though i separted them from each other in the next partilas////////
$router->add(SUB.'LearnMore', function() use ($view){
		$view->display('help.php');
	});

////////////This page talks about the app/////////////////////
$router->add(SUB.'aboutUs', function() use ($view){
		$view->display('about.php');
	});

////////////This page talks about the products and services/////////////////////
$router->add(SUB.'Products', function() use ($view){
		$view->display('products.php');
	});

////////////This page talks about the terms and Conditions/////////////////////
	$router->add(SUB.'Terms', function() use ($view){
		$view->display('terms.php');
	});
}
