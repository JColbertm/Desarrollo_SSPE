<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="/Desarrollo_SSPED/bootstrap-3.3.6-dist/css/bootstrap.css">
    <script src="/Desarrollo_SSPED/bootstrap-3.3.6-dist/jquery.js"></script>
    <script src="/Desarrollo_SSPED/bootstrap-3.3.6-dist/js/bootstrap.js"></script>
    <script type="text/javascript">
     
    </script>
</head>
<body>
<!--  llamada a la cabecera -->
	<?php 
		require_once $_SERVER["DOCUMENT_ROOT"]."/Desarrollo_SSPED/cabecera1.php";
 	?>

<!--  llamada a menu de opciones futbol -->
	<?php 
		require_once $_SERVER["DOCUMENT_ROOT"]."/Desarrollo_SSPED/Futbol/listabotones1.php";
 	?>

<div class="col-xs-7">
<div class="row">
	<div class="panel panel-default">
    	<div class="panel-heading" align="center">Galeria</div>
  		<div class="panel-body">

	        <!--  Formulario de Busqueda -->
	      <form action="" class="form-horizontal">
	        <div class="container-fluid">
	        	<div class="row">
	        	<div class="col-xs-7">
	        	<div class="table-responsive">
	        		<table class="table table-striped">
				    <thead>
				      <tr>
				        <th>Nombre</th>
				        <th>Categoria</th>
				        <th>Descripcion</th>
				      </tr>
				    </thead>
				    <tbody>
				      <tr>
				        <td>Llenar</td>
				        <td>Llenar</td>
				        <td>Llenar</td>
				      </tr>
				      <tr>
				        <td>Llenar</td>
				        <td>Llenar</td>
				        <td>Llenar</td>
				      </tr>
				      <tr>
				        <td>Llenar</td>
				        <td>Llenar</td>
				        <td>Llenar</td>
				      </tr>
				    </tbody>
				  </table>
				  </div>
				 <div class="form-group">
				 	<label for="nombre" class="control-label col-xs-4">Nombre:</label>
				 	<div class="col-xs-offset-1 col-xs-7">
				 	<input type="text" class="form-control" id="nombre">
				 	</div>	
				 </div>
				<div class="row">
					<div class="col-md-6">
						<label for="nombre" class="control-label">Descripcion:</label>
					 	<div class="col-xs-8">
					 		<textarea name="descripcion" id="descripcion"></textarea>
					 	</div>	
					</div>
					<div class="col-md-3">
						<img src="imagen.jpg" class="img-circle" width="150" height="150" />
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
						 	<label for="nombre" class="control-label col-xs-4">Categoria:</label>
						 	<div class="col-xs-offset-1 col-xs-7">
						 	<input type="text" class="form-control" id="nombre">
				 	</div>	
				 </div>
					</div>
				</div>

	        	</div>
				  
				<div class="col-xs-5">
				    <div class="form-group">
				        <label for="grupo" class="control-label col-md-4">GRUPO:</label>
				        <div class="selectContainer form-group col-md-8">
				            <select class="form-control" name="grupo">
				                <option value="">----</option>
				                <option value="bo">Bolivar</option>
				                <option value="rm">Real Madrid</option>
				                <option value="wl">Wilstermann</option>
				                <option value="boo">Booming</option>
				            </select>
				        </div>
				    </div>

				    <div id="MainMenu">
						  <div class="list-group panel">
						    <a href="#tecnico" class="list-group-item list-group-item-default" data-toggle="collapse" data-parent="#MainMenu">Ejercicio Tecnico</a>
						    <div class="collapse" id="tecnico">
								<div class="checkbox">
							    	<label><input type="checkbox"> Conduccion</label>
							  	</div>
							  	<div class="checkbox">
							    	<label><input type="checkbox"> Control</label>
							  	</div>
							  	<div class="checkbox">
							    	<label><input type="checkbox"> Pases</label>
							  	</div>	
		  						<div class="checkbox">
							    	<label><input type="checkbox"> Tiros a Porteria</label>
							  	</div>
							  	<div class="checkbox">
							    	<label><input type="checkbox"> Regate</label>
							  	</div>
						    </div>
						    <a href="#tactico" class="list-group-item list-group-item-default" data-toggle="collapse" data-parent="#MainMenu">Ejercicio Tecnico Tactico</a>
						    <div class="collapse" id="tactico">
						      	<div class="checkbox">
							    	<label><input type="checkbox"> Ofenciva</label>
							  	</div>
							  	<div class="checkbox">
							    	<label><input type="checkbox"> Defensiva</label>
							  	</div>
						    </div>
						    <a href="#fisico" class="list-group-item list-group-item-default" data-toggle="collapse" data-parent="#MainMenu">Ejercicio Tactico fisico</a>
						    <div class="collapse" id="fisico">
						      	<div class="checkbox">
							    	<label><input type="checkbox"> Psicomotricidad</label>
							  	</div>
							  	<div class="checkbox">
							    	<label><input type="checkbox"> Coordinacion</label>
							  	</div>
							  	<div class="checkbox">
							    	<label><input type="checkbox"> Resistencia</label>
							  	</div>
							  	<div class="checkbox">
							    	<label><input type="checkbox"> Fuerza</label>
							  	</div>
							  	<div class="checkbox">
							    	<label><input type="checkbox"> Velocidad</label>
							  	</div>
							  	<div class="checkbox">
							    	<label><input type="checkbox"> Agilidad</label>
							  	</div>
							  	<div class="checkbox">
							    	<label><input type="checkbox"> Flexibilidad</label>
							  	</div>	
						    </div>
						    <a href="#acciones" class="list-group-item list-group-item-default" data-toggle="collapse" data-parent="#MainMenu">Acciones Psicologicas</a>
						    <div class="collapse" id="acciones">
						      	<div class="checkbox">
							    	<label><input type="checkbox"> Valores y Actitudes</label>
							  	</div>
							  	<div class="checkbox">
							    	<label><input type="checkbox"> Psicologia</label>
							  	</div>
							  	<div class="checkbox">
							    	<label><input type="checkbox"> Especifica</label>
							  	</div>	
						    </div>
						  </div>
						</div>

					</form>
				</div>


			</div>

          <br>
			</div>	  
  		</div>
  	</div>
  	</div>
</div>


<!--  llamada al pie de pagina -->
 	<?php 
		require_once $_SERVER["DOCUMENT_ROOT"]."/Desarrollo_SSPED/pie1.php";
 	?>

</body>
</html>