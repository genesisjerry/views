<?php 
namespace Core\controllers;

// $directory = $_SERVER['DOCUMENT_ROOT'] . '/learnershub/';
// define('DIR', $directory);


class ViewController 
{

	protected $viewRoute;

	protected $params = array();
	
	function __construct()
	{
		$this->viewRoute = DIR.'/views/';
	}

	public function display($route, $params = [])
	{
		
		if (file_exists($this->viewRoute.$route)) {
			// die($this->viewRoute.$route);
			
			extract($params);

			// echo $this->viewRoute.$route;

			include($this->viewRoute.$route);
			return;
			// return $this->viewRoute.$route;

			// return;
		}

    	throw new Exception("View does not exist: ".$this->viewRoute.$route);    

	}

	public function displayForControllers($route, $params)
	{

		if (file_exists($this->viewRoute.$route)) {
			clearstatcache();
			extract($params);
			// var_dump($params);
			// $forumdata =$params;
			include($this->viewRoute.$route);
			return;
		}

    	throw new Exception("View does not exist: ".$this->viewRoute.$route);    

	}
}

?>