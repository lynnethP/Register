<?php  

	namespace content\controllers;

	use config\settings\sysConfig as sysConfig;
	use config\settings\Route as Route;
	
	class frontController extends sysConfig
	{
		protected $controllerName;
		public function __construct($request)
		{
			$route = new Route($request);
			// $this->controllerName = $route->getController();
			$controller = $route->getController();
			$method = $route->getMethod();
			$params = $route->getParam();			
			// echo "<h1>Controlador: ".$controller."<br>Metodo: ".$method."<br>Parametros: ".$params."<br></h1>";
			$controllerClass = parent::getRootController().strtolower($controller)."Controller";
			$this->controllerName=$controllerClass;
			if(class_exists($controllerClass)){
				$controllers = new $controllerClass();
				// $controllers->$method();
			}else{
				die("Error no existe la clase {$controller}Controller");
			}
		}
		protected function getControllerName(){
			return $this->controllerName;
		}

	}

?>