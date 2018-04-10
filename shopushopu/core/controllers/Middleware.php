<?php 
namespace Core\controllers;

use \Controllers\LoginController;
use \Controllers\SessionController;
use \Models\EmployersModel;


class Middleware
{
	private $param = array();
	private $loginController;
	
	function __construct()
	{
		$this->loginController = new LoginController;
		$this->param[SessionController::UID] = SessionController::getID();
		$this->param[SessionController::CATEGORY] = SessionController::getCategory();
	}

	public function add($key, $value)
	{
		$this->param[$key] = $value;
	}

	public function checkID($key)
	{
		if (isset($this->param[$key]) && !empty($this->param[$key])) {
			return true;
		}
		else {
			$this->loginController->logout();
			exit;
		}
	}

	public function checkLogin($key){
		// var_dump($this->param[$key]); die;
		if ($this->param[$key] !== false) {
			header('Location: '.URL.'learner/dashboard');
			exit;
		} 
	}

	public function checkUser($key)
	{
		// var_dump($key); 
		// var_dump($this->param);
		// var_dump(SessionController::getCategory());
		// die;
		if($key === SessionController::getCategory()) {
			// die('here');
			return true;
		} else {
			if (SessionController::getCategory() === BaseController::EMPLOYER) {
				$result = (new EmployersModel)->getSingleEmployer(SessionController::getID());
				(new LoginController)->redirectEmployer($result['type']);
			} elseif (SessionController::getCategory() === BaseController::LEARNER) {
				header("Location: ".URL."learner/dashboard");
			} else {
				$this->loginController->logout();
				exit;
			}
		}
	}



}