<!DOCTYPE html>
<html>
<head>
	<title>ejercicio 3</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/esti.css">
	<script type="text/javascript" src="js/alerta.js"></script>
</head>
<body background="img/ejercicios/FondoWeb.jpg">
		<header >
		    <a href="eje3.php" class="titu" id="col">TECNO - </a>
		    <a href="eje3.php" class="titu" id="col2">SITE</a>
		    <IMG SRC="img/pouu1.png" class="uno">
		  </header><a href='cerrar_session.php?'  style="color: white;float:right;" > <h3> cerrar session</h3></a><br>
		  <center>
				  	<img src="img/ejercicios/eje3/Adivinanza.png" class="adivi"><br>

				<form action="eje3.php" method="post">
					  <label class="cuadro1" id="color_fondo">
					  	<input type="radio" name="imagen3" value="primero">
					  	<img src="img/ejercicios/eje3/television.png" class="imag">
					  </label>

					  <label class="cuadro1" id="color_fondo">
					  	<input type="radio" name="imagen3" value="segundo">
					  	<img src="img/ejercicios/eje3/tractor.png" class="imag">
					  </label>

					  <label class="cuadro1" id="color_fondo">
					  	<input type="radio" name="imagen3" value="tercero">
					  	<img src="img/ejercicios/eje3/ventilador.png" class="imag">
					  </label>

					  <label class="cuadro1" id="color_fondo">
					  	<input type="radio" name="imagen3" value="cuarto">
					  	<img src="img/ejercicios/eje3/zapatos.png" class="imag">
					  </label>
					  <br>
					  <br>
					 <input type="submit" name="bt_enviar" value="Enviar">
				</form>
		</center>

</body>
</html>
		 <?php

		if (isset($_POST['bt_enviar'])) {
		    
		    if ($_REQUEST['imagen3']=="primero") {
		    	echo '<script type="text/javascript"> emerge() </script>';

		    }elseif ($_REQUEST['imagen3']=="segundo") {
		    	echo '<script type="text/javascript"> emerge() </script>';


		    }elseif ($_REQUEST['imagen3']=="tercero") {
		    	echo '<script type="text/javascript"> correcto() </script>';
		    	echo "<a href='eje4.php' style='float:right; position: absolute; top:250px;left:1250px; padding:10px; margin:10px; background: #ccc; text-decoration:none;'>siguiente</a>";
		       
		    }elseif ($_REQUEST['imagen3']=="cuarto") {
		    	echo '<script type="text/javascript"> emerge() </script>';
		    }
		}
   ?>