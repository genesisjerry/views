<?php
namespace Core\controllers;


// use \Carbon\Carbon;

class BaseController 
{
	
	function __construct()
	{
        $this->view = new ViewController;
		// $this->carbon = new Carbon;
	}

	public function index()
	{
		(new ViewController)->display('index.php');
	}
}