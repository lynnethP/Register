<?php 
namespace content\controllers;

class homeController extends Controller
{
	public function __construct()
	{
		// $params = array('nombre'=>'Carlos');
		// $this->render(__CLASS__, $params);
		$this->render(__CLASS__);
	}

}

?>