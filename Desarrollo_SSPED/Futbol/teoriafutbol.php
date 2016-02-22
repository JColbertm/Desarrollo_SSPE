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


 <!-- PAGINA DE TEORIA -->

 <div class="col-xs-7">
 		<div class="jumbotron">
			<h2>Teoria</h2>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem fugit, saepe, impedit exercitationem ipsum aliquid est numquam, fuga illum quia ipsa! Molestiae officiis dolore aspernatur laborum. Repellendus sit, magnam beatae?
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod a, beatae eaque alias. Sunt autem beatae rem repellat est, laborum neque corrupti. Illum modi iure ipsam mollitia asperiores quas magnam?<br>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita illum esse nostrum vel accusantium, reiciendis aliquid tempore in quaerat doloremque. Explicabo eligendi ducimus ullam corrupti neque cupiditate quaerat quibusdam ex!
		</div>	

		<div class="row" style="border: 1px solid black">
			<h3>Libros / Paginas</h3>

			<div class="col-xs-10 col-xs-offset-1 row" style="border: 1px solid black">
				<h3> Libros </h3>



			</div>

			<br>
			<br>

			<div class="col-xs-10 col-xs-offset-1 row" style="border: 1px solid black">
				<h3>Paginas Externas </h3>

			</div>

			<br>
			<br>

		</div>
 	</div>



<!--  llamada al pie de pagina -->
 	<?php 
		require_once $_SERVER["DOCUMENT_ROOT"]."/Desarrollo_SSPED/pie1.php";
 	?>

</body>
</html>