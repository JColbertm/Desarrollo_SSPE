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

 	<!-- PAGINA DE DOSIFICACION.  -->

 	<div class="col-xs-7">

	 	<h3> Opcion dentro de las tablas, seleccionando un mesociclo </h3>
	 	
	 	<div class="col-xs-6">
	 		<br>
			<div class="col-xs-3">
	 			<label>Microciclo: </label>
	 		</div>

		 	<!-- Aca debe cargarse el select que muestra la cantidad de semanas. Para comenzar se tiene el select de 6 semanas. -->
		 	<div class="col-xs-7">
				<select class="form-control" id="microciclo">
					<option>Seleccionar</option>
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
					<option>6</option>
				</select>
			</div>

	 	</div>

	 	<div class="col-xs-6">
			<div class="row">
		 		<label>Dias: </label>
		 	</div>
		 		<label class="checkbox-inline"><input type="checkbox" name="optradio" id="checkLu">Lunes</label>
        		<label class="checkbox-inline"><input type="checkbox" name="optradio" id="checkMa">Martes</label>
        		<label class="checkbox-inline"><input type="checkbox" name="optradio" id="checkMi">Miercoles</label>
        		<label class="checkbox-inline"><input type="checkbox" name="optradio" id="checkJu">Jueves</label>
        		<label class="checkbox-inline"><input type="checkbox" name="optradio" id="checkVi">Viernes</label>
        		<label class="checkbox-inline"><input type="checkbox" name="optradio" id="checkSa">Sabado</label>
        		<label class="checkbox-inline"><input type="checkbox" name="optradio" id="checkDo">Domingo</label>
	 	</div>

	 	<br>
		<div class="col-xs-5">
 			<button type="button" class="btn btn-success" data-dixsiss="modal" id="btnCargar">Cargar Tabla</button>
 		</div>


 		<table class="table table-hover table-bordered">
            <thead id="cabeceraTablaDias">
              <tr>
                <th>Nombre</th>
                <th>Total</th> 
              </tr>
            </thead>

            <tbody id="cuerpoTablaDias">
              <tr>
                <td></td>
                <td></td>
              </tr>
            </tbody>

        </table>





 	</div>





<!--  llamada al pie de pagina -->
 	<?php 
		require_once $_SERVER["DOCUMENT_ROOT"]."/Desarrollo_SSPED/pie1.php";
 	?>

 	<script type="text/javascript" src="/Desarrollo_SSPED\Futbol/dosificacionFutbolCrearTablaPequeña.js"></script>

</body>
</html>