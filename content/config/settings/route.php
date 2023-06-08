<?php 
	
	namespace config\settings;

	/**
	 * 
	 */
	class Route
	{
		public $uri;
		public $controller;
		public $method;
		public $params;
		public $request;

		public function __construct($request)
		{
			if(empty($request['url'])){$request['url']="";}
			$this->request = $request['url'];
			$this->setUri();
			$this->setController();
			$this->setMethod();
			$this->setParam();
		}
		public function setUri(){
			$this->uri = explode('/', $this->request);
		}
		public function setController(){
			$this->controller = $this->uri[0] == '' ? 'perfil' : $this->uri[0];
		}
		public function setMethod(){
			$this->method = !empty($this->uri[1]) ? $this->uri[1] : 'exec';
		}
		public function setParam(){
			$this->params = !empty($this->uri[2]) ? $this->uri[2] : '';
		}
		public function getUri(){
			return $this->uri;
		}
		public function getController(){
			return $this->controller;
		}
		public function getMethod(){
			return $this->method;
		}
		public function getParam(){
			return $this->params;
		}
	}

?>