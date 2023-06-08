<?php 
namespace content\controllers;

class registroController extends Controller
{
	public function __construct()
	{
		// $params = array('nombre'=>'Carlos');
		// $this->render(__CLASS__, $params);
		$params = array('directory'=>parent::getDirectory());
		$this->render(__CLASS__, $params);
	}

}

?>