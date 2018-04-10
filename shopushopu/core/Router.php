<?php 
namespace Core;

class Router
{
	
	private $navigate = array();

	private $notFound;

	private $namspace;

	public function __construct(){   
    	$this->notFound = function($url){            
    		 echo "404 - $url was not found!"; 
    		//echo file_get_contents(URL.'views/404/index.php');       
    	};    
    }

    public function setNamespace($namespace){
    	$this->namespace = $namespace;
    }

	public function add($url, $route)
	{
		$this->navigate[$url] = $route;
	}

	public function dispatch()
	{
		// var_dump($this->navigate);
		// die("here");
		if(!empty($this->navigate))
		{
			foreach ($this->navigate as $url => $send) {
				$check = $this->matchable($url);
				if ($check['url'] != null) {
					// var_dump($check);
					if (is_callable($send)) return $send();
					
					$newRoute = explode('@', $send);
					
					if (class_exists($newRoute[0])) {
						// echo "exists";
						if (isset($newRoute[1]) and method_exists(new $newRoute[0], $newRoute[1])) {
							
							$md = $newRoute[1];
							// var_dump($check);
							return (new $newRoute[0])->$md($check['parameters']);
						} else return (new $newRoute[0])->index();
					} else echo "class does not exist";
					
				}
			}

			call_user_func_array($this->notFound,[$_SERVER['REQUEST_URI']]);    
		}
	}


	public function matchable($url){

		$added_url = explode('/', trim($url,'/'));
		$server_url = explode('/', trim($_SERVER['REQUEST_URI'], '/'));
		$parameters = [];
		$matched = [];
		$length = count($added_url);
		if ($length == count($server_url)) {
			for ($i = 0; $i < $length; $i++) {
				if ($added_url[$i] == $server_url[$i]){
					$matched [] = true;
				}else{

					if(preg_match('/\{(.+)\}/', $added_url[$i], $match)){
						$matched [] = true;
						$parameters[$match[1]] = $server_url[$i];
						
					}
				}
				
			}
				// var_dump($match);
			if (count($matched) == $length) {
				return ['url' => $server_url, 'parameters' => $parameters];
			} else {
				return ['url' => null, 'parameters' => null];
			}

		} else {
			return ['url' => null, 'parameters' => null];
		}

		

	}


}
?>