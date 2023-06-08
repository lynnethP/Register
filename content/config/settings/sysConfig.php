<?php 
	namespace config\settings;
	require_once'config.php';

	class sysConfig {
		
		public function _init(){
			if (file_exists('content/controllers/frontController.php')) {
			}else{
				die("<br><br>Archivo no encontrado<br>");
			}
		}


		// METODOS GETTER
	   	protected function getDirectory(){
	        return _DIRECTORY_;
	   	}

	   	protected function getRoute(){
	        return _ROUTE_;
	   	}

	   	protected function getController(){
	        return _CONTROLLER_;
	   	}

	   	protected function getIndex(){
	        return _INDEX_FILE_;
	   	}

	   	protected function getTheme(){
	        return _THEME_;
	   	}

	   	protected function getModel(){
	        return _MODEL_;
	   	}

	   	protected function getDbServer(){
	        return _DB_SERVER_;
	   	}

	   	protected function getDbWeb(){
	        return _DB_WEB_;
	   	}

	   	protected function getView(){
	   		return _VIEW_;
	   	}

	   	protected function getRoot(){
	   		return _ROOT_;
	   	}
	   	protected function getRootController(){
	   		return _ROOTCONTROLLER_;
	   	}
	}

?>