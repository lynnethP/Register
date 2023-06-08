<?php 

namespace config\settings;

class View
{
	protected $template;
	protected $controller;
	protected $routeController;
	protected $params;
	function __construct($controller, $routeController, $params = array())
	{
		$this->controller = $controller;
		$this->routeController = $routeController;
		$this->params = $params;
		$this->render();
	}

	protected function render()
	{
		if(class_exists($this->controller))
		{
			$file = str_replace('Controller', '', str_replace($this->routeController, '', $this->controller));
			$this->template = $this->getContentTemplate($file);
			echo $this->template;
		}else{
			die("Error no existe {$this->controller}");
		}
	}

	protected function getContentTemplate($file){
		$file_path = $file."View.php";
		if(is_file(_VIEW_.$file_path))
		{ 
			// $this->params += $this->load_style($this->params);
			extract($this->params);
			ob_start();
			require_once _VIEW_.$file_path;
			$template = ob_get_contents();
			ob_end_clean();
			return $template;
		}else{
			die("Error no existe el archivo {$file_path}");
		}
	}
	/*protected function load_style($param){
		$style=$this->render_style(_ASSETS_."css/css.css");
		$bootstrap=$this->render_style(_ASSETS_."css/bootstrap.min.css");
		$params['style'] = $bootstrap.$style;
		return $params;
	}
	protected function render_style($file){
		$var = "";
		if(is_file($file)){
			ob_start();
			require_once $file;
			$var = ob_get_contents();
			ob_end_clean();
		}
		return $var;
	}*/
}

?>