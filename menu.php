<?php
include ('sql/conexionBoostrap.php');
?>
<!doctype html>
 <html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
		<!-- /container -->        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/opcionMenuUsuario.js"></script>



    </head>
    <body>
       	MY MENUCITO
       	<input type ="submit" class="btn btn-default" id="consulta" value="Consultar"/> 
       	<input type ="submit" class="btn btn-danger" id="inserta" value="Insertar"/> 
       	<input type ="submit" class="btn btn-success" id="actualiza" value="Actualizar"/> 
       	<input type ="submit" class="btn btn-info" id="elimina" value="Eliminar"/> 
       	
     	<br>
     	<br>
      <div class="container">
      	
     	<div id="cargarMensajes"></div>
      </div>

       	
       	
       <br>
       <div id="cargando">
       		Aquí vamos a cargar al consulta
       </div>
       
      


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">INSERTAR USUARIO</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form>
		  <div class="form-group">
		    <label for="inputsm">Número de usuario</label>
		    <input class="form-control input-sm" id="numero" type="text">
		  </div>
		   <div class="form-group">
		    <label for="inputdefault">Nombre de usuario</label>
		    <input class="form-control" id="nombre" type="text">
		  </div>
		  <div class="form-group">
		    <label for="inputlg">Password</label>
		    <input class="form-control input-lg" id="password" type="password">
		  </div>
		  <div class="form-group">
		    <label for="inputlg">Edad</label>
		    <input class="form-control input-lg" id="edad" type="number">
		  </div>
		</form>
        
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" id="guardarUsuario">Guardar Cambios</button>
      </div>
    </div>
  </div>
</div>




<!-- Modal -->
<div class="modal fade" id="modalActualizar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ACTUALIZAR USUARIO</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
         <form>
		  <div class="form-group">
		    <label for="inputsm">Número de usuario</label>
		    <input class="form-control input-sm" id="numeroDos" type="text">
		  </div>
		   <div class="form-group">
		    <label for="inputdefault">Nombre de usuario</label>
		    <input class="form-control" id="nombreDos" type="text">
		  </div>
		  <div class="form-group">
		    <label for="inputlg">Password</label>
		    <input class="form-control input-lg" id="passwordDos" type="password">
		  </div>
		  <div class="form-group">
		    <label for="inputlg">Edad</label>
		    <input class="form-control input-lg" id="edadDos" type="number">
		  </div>
		</form>
        
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" id="actualizarUsuario">Actualizar</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="modalEliminar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ELIMINAR USUARIO</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form>
		  <div class="form-group" method="post">
		    <label for="inputsm">Número de usuario</label>
		    <?php
		    	$sqlConsulta= "select idUsuario,nombreUsuario  from usuario";
				$aplicarConsulta= $mysqli->query($sqlConsulta);
				
				echo '<div class="form-group">
						<select class="form-control" id="numeroEliminar">
							<option> Selecciona una opción </opcion>';
					
							while($row=mysqli_fetch_array($aplicarConsulta))
								{
									echo '<option value="'.$row[0].'">'.utf8_encode($row[1]).'</option>';
								}	
				
				
						echo '</select>
						</div>
						';
		   
		   
		   
		    ?>
		  </div>   
		</form>
        
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" id="eliminarUsuario">Eliminar Cambios</button>
      </div>
    </div>
  </div>
</div>

       
       
    </body>

</html>
