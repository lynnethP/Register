<?php 
namespace content\controllers;

class loginController extends Controller
{
	public function __construct()
	{
		$params = array('directory'=>parent::getDirectory());
		$this->render(__CLASS__, $params);
	}

}

?>