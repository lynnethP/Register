<?php 
namespace content\controllers;
use config\settings\View;

class Controller extends frontController
{
	private $view;
	function __construct()
	{

	}
	protected function render($controller, $params = array())
	{
		$this->view = new View($controller, $this->getRootController(), $params);
	}
}
?>