<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="css/estilo2.css">
  <meta charset="utf-8">
  <title>Registro</title>
</head>
<body>    
          <div class="for">
              <form action="registro.php" method="post"  >
                <h2 class="titul">REGISTRO ESTUDIANTE</h2>
                  <input type="text" name="nombre" placeholder="Nombre">
                  <input type="text" name="apellido" placeholder="Apellido">
                  <input type="text" name="colegio" placeholder="Colegio">
                  <input type="text" name="usuario" placeholder="Usuario">
                  <input type="password" name="contrasena" placeholder="Contraseña">
                  <input type="submit" name="bt_enviar1" value="Enviar">
         

              </form>
          </div>
        <div class="for1" id="dos2">
              <form action="registro.php" method="post">
                    <h2 class="titul">REGISTRO DOCENTE</h2>
                      <input type="text" name="nombre" placeholder="Nombre">
                      <input type="text" name="apellido" placeholder="Apellido">
                      <input type="text" name="colegio" placeholder="Colegio">
                      <input type="text" name="correo" placeholder="Correo">
                      <input type="text" name="usuario" placeholder="Usuario">
                      <input type="password" name="contrasena" placeholder="Contraseña">
                      <input type="submit" name="bt_enviar2" value="Enviar">
                      
              </form>
        </div>

        <a href="index.php" class="atras">Regresar</a>



</body>
</html> 

     <?php

        $enlace = new mysqli('localhost', 'root','',  'tecno_site');
        
            if ($enlace->connect_errno) {
                printf("Connect failed: %s\n", $enlace->connect_error);
                exit();
            }


          if (isset($_POST["bt_enviar1"])) {
                $r =(object)$_POST;
                //insertar
                $campos = "nombre, apellido, colegio , usuario, contrasena "; //son los valores que usan en bd
                $valores = "'$r->nombre', '$r->apellido', '$r->colegio','$r->usuario', '$r->contrasena'"  ; 

                if ($enlace->query( "INSERT INTO estudiante ($campos) values ($valores)" )) {
                    
                 echo '<script type="text/javascript"> insertado() </script>';
                      
                  
                    
                }else{ 
                echo "<b>Insertado";
                }
          }

          elseif (isset($_POST["bt_enviar2"])) {
                $r =(object)$_POST;
                //insertar
                $campos = "nombre, apellido, colegio , correo, usuario, contrasena "; //son los valores que usan en bd
                $valores = "'$r->nombre', '$r->apellido', '$r->colegio', '$r->correo','$r->usuario', '$r->contrasena'"  ; 

                if ($enlace->query( "INSERT INTO docentes ($campos) values ($valores)" )) {
                    
                    
                 echo '<script type="text/javascript"> insertado() </script>';
                       
                    
                    
                }else{ 
                echo "<b>Insertado";
                }
          }          

        ?>
