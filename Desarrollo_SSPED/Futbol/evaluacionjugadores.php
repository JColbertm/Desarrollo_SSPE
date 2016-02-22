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
		require_once $_SERVER["DOCUMENT_ROOT"]."/Desarrollo_SSPED/Futbol/listabotones3.php";
 	?>
	
	<div class="col-xs-7">
 		<div class="panel panel-default">
  			<div class="panel-heading">
    			<h3 class="panel-title">Evaluacion</h3>
  			</div>
  			<div class="panel-body">
    			<br>
    			<form class="form-inline">  
    				<div class="form-group">
    					<label class="col-xs-3 control-label">Grupo:</label>
    					<div class="col-xs-3">
      						<select class="form-control">
        						<option></option>
        						<option>Grupo 1</option>
        						<option>Grupo 2</option>
        						<option>Grupo 3</option>
        						<option>Grupo 4</option>
        						<option>Grupo 5</option>
        						<option>Grupo 6</option>
      						</select>
    					</div>
  					</div>

  					<div class="form-group">
    					<label class="col-xs-offset-5 col-xs-4 control-label">Mesociclo:</label>
    					<div class="col-xs-3">
      						<select class="form-control">
        						<option></option>
        						<option>Mesociclo 1</option>
        						<option>Mesociclo 2</option>
        						<option>Mesociclo 3</option>
        						<option>Mesociclo 4</option>
        						<option>Mesociclo 5</option>
        						<option>Mesociclo 6</option>
      						</select>
    					</div>
  					</div>
  				</form>

				<div class="col-xs-12">
				<br><br>
  					<div id="table" class="table-editable">
    					<table class="table">
    						<tr>
    							<th></th>
        						<th colspan="5"><center>Analitica</center></th>
        						<th colspan="3"><center>Global</center></th>
        						<th colspan="3"><center>Fisica</center></th>
    						</tr>
      						<tr>
        						<th>Name</th>
        						<th>EA1</th>
        						<th>EA2</th>
        						<th>EA3</th>
        						<th>EA4</th>
        						<th>T</th>
        						<th>EG1</th>
        						<th>EG2</th>
        						<th>T</th>
        						<th>EF1</th>
        						<th>EF2</th>
        						<th>T</th>
      						</tr>
      						<tr>
        						<td contenteditable="false">Juan Perez</td>
        						<td contenteditable="true">MB</td>
        						<td contenteditable="true">E</td>
        						<td contenteditable="true">B</td>
        						<td contenteditable="true">MB</td>
        						<td contenteditable="false">MB</td>
        						<td contenteditable="true">M</td>
        						<td contenteditable="true">R</td>
        						<td contenteditable="false">R</td>
        						<td contenteditable="true">MB</td>
        						<td contenteditable="true">R</td>
        						<td contenteditable="false">B</td>
      						</tr>

      						<tr>
        						<td contenteditable="false">Juan Perez</td>
        						<td contenteditable="true">MB</td>
        						<td contenteditable="true">E</td>
        						<td contenteditable="true">B</td>
        						<td contenteditable="true">MB</td>
        						<td contenteditable="false">MB</td>
        						<td contenteditable="true">M</td>
        						<td contenteditable="true">R</td>
        						<td contenteditable="false">R</td>
        						<td contenteditable="true">MB</td>
        						<td contenteditable="true">R</td>
        						<td contenteditable="false">B</td>
      						</tr>
      						<tr>
        						<td contenteditable="false">Juan Perez</td>
        						<td contenteditable="true">MB</td>
        						<td contenteditable="true">E</td>
        						<td contenteditable="true">B</td>
        						<td contenteditable="true">MB</td>
        						<td contenteditable="false">MB</td>
        						<td contenteditable="true">M</td>
        						<td contenteditable="true">R</td>
        						<td contenteditable="false">R</td>
        						<td contenteditable="true">MB</td>
        						<td contenteditable="true">R</td>
        						<td contenteditable="false">B</td>
      						</tr>
      						<tr>
        						<td contenteditable="false">Juan Perez</td>
        						<td contenteditable="true">MB</td>
        						<td contenteditable="true">E</td>
        						<td contenteditable="true">B</td>
        						<td contenteditable="true">MB</td>
        						<td contenteditable="false">MB</td>
        						<td contenteditable="true">M</td>
        						<td contenteditable="true">R</td>
        						<td contenteditable="false">R</td>
        						<td contenteditable="true">MB</td>
        						<td contenteditable="true">R</td>
        						<td contenteditable="false">B</td>
      						</tr>
      						<tr>
        						<td contenteditable="false">Juan Perez</td>
        						<td contenteditable="true">MB</td>
        						<td contenteditable="true">E</td>
        						<td contenteditable="true">B</td>
        						<td contenteditable="true">MB</td>
        						<td contenteditable="false">MB</td>
        						<td contenteditable="true">M</td>
        						<td contenteditable="true">R</td>
        						<td contenteditable="false">R</td>
        						<td contenteditable="true">MB</td>
        						<td contenteditable="true">R</td>
        						<td contenteditable="false">B</td>
      						</tr>
      						<tr>
        						<td contenteditable="false">Juan Perez</td>
        						<td contenteditable="true">MB</td>
        						<td contenteditable="true">E</td>
        						<td contenteditable="true">B</td>
        						<td contenteditable="true">MB</td>
        						<td contenteditable="false">MB</td>
        						<td contenteditable="true">M</td>
        						<td contenteditable="true">R</td>
        						<td contenteditable="false">R</td>
        						<td contenteditable="true">MB</td>
        						<td contenteditable="true">R</td>
        						<td contenteditable="false">B</td>
      						</tr>
      						<tr>
        						<td contenteditable="false">Juan Perez</td>
        						<td contenteditable="true"></td>
        						<td contenteditable="true"></td>
        						<td contenteditable="true"></td>
        						<td contenteditable="true"></td>
        						<td contenteditable="false"></td>
        						<td contenteditable="true"></td>
        						<td contenteditable="true"></td>
        						<td contenteditable="false"></td>
        						<td contenteditable="true"></td>
        						<td contenteditable="true"></td>
        						<td contenteditable="false"></td>
      						</tr>
      						
      						<!-- This is our clonable table line -->
      						<tr class="hide">
        						<td contenteditable="false">Juan Perez</td>
        						<td contenteditable="true"></td>
        						<td contenteditable="true"></td>
        						<td contenteditable="true"></td>
        						<td contenteditable="true"></td>
        						<td contenteditable="false"></td>
        						<td contenteditable="true"></td>
        						<td contenteditable="true"></td>
        						<td contenteditable="false"></td>
        						<td contenteditable="true"></td>
        						<td contenteditable="true"></td>
        						<td contenteditable="false"></td>
      						</tr>
    					</table>
  					</div>
				</div>

    			<div class="col-xs-offset-7 col-xs-2">
    				<button  type="button" class="btn btn-primary">
                		<span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>
                		<span class="hidden-xs">
                  			Guardar
                		</span>
              		</button>
    			</div>
    			<div class="col-xs-2">
    				<button  type="button" class="btn btn-success" disabled>
                		<span class="glyphicon glyphicon-export" aria-hidden="true"></span>
                		<span class="hidden-xs">
                  			Exportar
                		</span>
              		</button>
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