<?php 
	if (file_exists('vendor/autoload.php')) {
		require_once 'vendor/autoload.php';
	}else {
		if (file_exists('content/component/error500.php')) {
		
		require_once 'content/component/error500.php';
		}

		die('<title>Mantenimiento</title>'
			. $html500 .
			'<input type="hidden" id="ns" value="No se ha encontrado el archivo" >'

		);
	}
	use config\settings\sysConfig as sysConfig;
	$globalConfig = new sysConfig();
	$globalConfig->_init();

	use content\controllers\frontController as frontController;
	$IndexSystem = new frontController($_REQUEST);
?>