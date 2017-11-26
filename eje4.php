<!DOCTYPE html>
<html>
<head>
	<title>ejercicio 4</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/esti.css">
	<script type="text/javascript" src="js/alerta.js"></script>
</head>
<body background="img/ejercicios/FondoWeb.jpg">
		<header >
		    <a href="eje4.php" class="titu" id="col">TECNO - </a>
		    <a href="eje4.php" class="titu" id="col2">SITE</a>
		    <IMG SRC="img/pouu1.png" class="uno">
		  </header><a href='cerrar_session.php?'  style="color: white;float:right;" > <h3> cerrar session</h3></a><br>
		  <center>	
		  			<h2 id="campo" style="color: green;background: #F3A3E2;padding: 5px; margin: 5px; width: 600px;height:20px; text-align: center;">Escoge el artefacto correspondientes a esté ambiente.</h2>
				  	<img src="img/campo/paisaje_campo.jpg" class="adivi"><br>

				<form action="eje4.php" method="post">
					  <label class="cuadro1" id="color_fondo">
					  	<input type="radio" name="imagen4" value="carro">
					  	<img src="img/campo/carro.png" class="imag">
					  </label>

					  <label class="cuadro1" id="color_fondo">
					  	<input type="radio" name="imagen4" value="Semaforo">
					  	<img src="img/campo/semaforo.png" class="imag">
					  </label>

					  <label class="cuadro1" id="color_fondo">
					  	<input type="radio" name="imagen4" value="Tractor">
					  	<img src="img/campo/tractor.png" class="imag">
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
		    
		    if ($_REQUEST['imagen4']=="carro") {
		    	echo '<script type="text/javascript"> emerge() </script>';

		    }elseif ($_REQUEST['imagen4']== "Tractor") {
		    	
				echo '<script type="text/javascript"> correcto() </script>';
						    	echo "<a href='eje5.php' style='float:right; position: absolute; top:250px;left:1250px; padding:10px; margin:10px; background: #ccc; text-decoration:none;'>siguiente</a>";

		    }elseif ($_REQUEST['imagen4']=="Semaforo") {
		    	
		       echo '<script type="text/javascript"> emerge() </script>';
		    }
		}
		
   ?>