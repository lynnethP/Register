<?php 
$reg_exUrl = "/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/";

// The Text you want to filter for urls
$text = "The text you want to filter goes here. http://example.com";

if(preg_match($reg_exUrl, $text, $url)) {

       preg_replace($reg_exUrl, "<a href='{$url[0]}'>{$url[0]}</a> ", $text);

} else {

       echo "No url in the text";

}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Formulario</title>
	<link rel="shortcut icon" type="image/x-icon" href="<?=_THEME_?>/img/pnf.ico">
	<meta charset="utf-8">
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<meta name="viewport" content="width=device-width" />
	<link rel="stylesheet" type="text/css" href="<?=_THEME_?>/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?=_THEME_?>/css/bootstrap.min.css">
</head>
<body>	

	<header>
		<div class="menu_bar">
			<a href="#" class="bt_menu"><span class="icon-"><img class="span" src="<?=_THEME_?>/img/men.png"></span>Menú</a>
		</div>

		<nav class="miMenu"> 
			<ul>
				<li><a href="#"><span class="icon-"><img class="span" src="<?=_THEME_?>/img/home.png"></span>Inicio</a></li>
				<li><a href="#"><span class="icon-"><img class="span" src="<?=_THEME_?>/img/horario.png"></span>Horarios</a></li>
				<li><a href="#"><span class="icon-"><img class="span" src="<?=_THEME_?>/img/notas.png"></span>Calificaciones</a></li>
				<li><a href="#"><span class="icon-"><img class="span" src="<?=_THEME_?>/img/nosotros.png"></span>Nosotros</a></li>
				<li><a href="#"><span class="icon-"><img class="span" src="<?=_THEME_?>/img/report.png"></span>Reportes</a></li>
				<li><a href="#"><span class="icon-"><img class="span" title="Cerrar Sesión" src="<?=_THEME_?>/img/salir.png"></span></a></li>
			</ul>
		</nav>
	</header>

    	
	 <br><br>
	 <div class="container main">
	 	
		  <form class="" action="" method="">

		        <div class="col-lg-8 container wrap">
		        		 <br><br>
		        	<div class="row">
		        		<div class="col-sm-12 text-center">
		                    <h3 class="info-text ">Perfil de Usuario</h3>
			               <p class="">Por favor ingresa tu información personal</p>
		                </div>
			            

			            <div class="col-sm-6 text-center">
		                       <div class="picture img container">
		                            <div class="picture pict">
									    <!-- La imagen que vamos a usar para previsualizar lo que el usuario selecciona -->
									    <img class="picture-src img" src="<?= _THEME_ ?>img/default-avatar.png" id="imagenPrevisualizacion">
									    <br>
		                                <!-- El input para seleccionar los archivos, fíjate en su id -->
									    <input type="file" id="seleccionArchivos" accept="image/*">
									    <br><br>
		                            </div>
		                        </div>
		                    </div>
		                    <div class="col-sm-4">
		                        <div class="form-group">
		                          <label>Nombre <small>*</small></label>
		                          <input name="nombre" type="text" class="form-control" placeholder="Lynneth" >
		                        </div>
		                        <div class="form-group">
		                          <label>Apellido <small>*</small></label>
		                          <input name="apellido" type="text" class="form-control" placeholder="Pereira">
		                        </div>
		                    </div>

		                    <div class="col-lg-8 container">
		                    	<div class="form-group">
		                            <label>Cédula <small>*</small></label>
		                            <input name="ci" type="email" class="form-control" placeholder="27828164" required="">
		                        </div>
		                       	<div class="form-group">
		                        <div class="form-group">
		                            <label>Teléfono <small>*</small></label>
		                            <input name="telef" type="text" class="form-control" placeholder="04105552233" required="">
		                        </div>
		                            <label>Email <small>*</small></label>
		                            <input name="email" type="email" class="form-control" placeholder="lynnethpereira12@gmail.com" required="">
		                        </div>
		                        <div class="form-group">
		                            <label>Usuario <small>*</small></label>
		                            <input name="user" type="text" class="form-control" placeholder="naty12" required="">
		                        </div>
		                        <div class="form-group">
		                            <label>Contraseña <small>*</small></label>
		                            <input name="pass" type="password" class="form-control" value="" placeholder="Password" required="">
		                        </div>
		                    </div>
		        	</div>

		        	<div id="olvido" class="text-center">
						<a href="#" class="cont ">¿Has olvidado tu contraseña?</a>
					</div>

		        	<br>
		          <div class="col-lg-12">
		              <div class="container text-center">
		                  <input type='button' class='col-sm-2 btn btn-next btn-fill btn-success btn-wd btn-sm' name='next' value='Guardar' />
		                  <input type='button' class='col-sm-2 btn btn-next btn-fill btn-danger btn-wd btn-sm' name='next' value='Cancelar' />
		              </div>
		              <div class="container col-sm-2">
		              </div>
		             <br>
		          </div>
		        </div>

		          
		              		        

		      </form>
	 </div>

	 <footer  class="footer">&copy; Todos los derechos reservados. Lynneth Pereira - 2021  
	 	<a href="#">lynnethpereira12@gmail.com</a>
			
		</footer>

		

</body>
	<script src="<?= _THEME_ ?>js/jquery-3.5.1.min.js"></script>
	<script src="<?= _THEME_ ?>js/bootstrap.min.js"></script>
	<script src="<?= _THEME_ ?>js/menu.js"></script>

	<script type="text/javascript">
		
		const $seleccionArchivos = document.querySelector("#seleccionArchivos"),
		  $imagenPrevisualizacion = document.querySelector("#imagenPrevisualizacion");

		// Escuchar cuando cambie
		$seleccionArchivos.addEventListener("change", () => {
		  // Los archivos seleccionados, pueden ser muchos o uno
		  const archivos = $seleccionArchivos.files;
		  // Si no hay archivos salimos de la función y quitamos la imagen
		  if (!archivos || !archivos.length) {
		    $imagenPrevisualizacion.src = "";
		    return;
		  }
		  // Ahora tomamos el primer archivo, el cual vamos a previsualizar
		  const primerArchivo = archivos[0];
		  // Lo convertimos a un objeto de tipo objectURL
		  const objectURL = URL.createObjectURL(primerArchivo);
		  // Y a la fuente de la imagen le ponemos el objectURL
		  $imagenPrevisualizacion.src = objectURL;
		});
	</script>

</html>