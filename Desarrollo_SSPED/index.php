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
`<!--  llamada a la cabecera -->
	<?php 
		require_once $_SERVER["DOCUMENT_ROOT"]."/Desarrollo_SSPED/cabecera1.php";
 	?>
  <!--  menu de deportes existentes -->
 	<div class="col-xs-offset-2 col-xs-8">
 		<div class="jumbotron">
  			<div class="media">
  				<div class="media-left">
    				<a href="/Desarrollo_SSPED/Futbol/futbol.php">
      					<img class="img-rounded media-object" src="/Desarrollo_SSPED/Imagenes/ImaFutbol/futbol3.jpg" alt="Imagen Futbol">
    				</a>
         </div> 
  			<div class="media-body">
    			<h4 class="media-heading">FUTBOL:</h4>
    				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati fuga saepe temporibus perspiciatis maiores iste voluptatum voluptatibus repellat repudiandae, enim exercitationem assumenda quo, natus officiis esse, vel itaque a unde.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo repellendus ipsum provident sit numquam optio quis odio autem repellat assumenda nobis, non, iste dolor esse ut tempora! Quis, voluptas, eum!<BR>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, fugit, ab. Illo, totam quaerat facere eaque sequi nam molestias. Necessitatibus blanditiis adipisci quis modi possimus explicabo itaque ab consequatur sunt?<br>
            <br>
            <a href="/Desarrollo_SSPED/Futbol/futbol.php">
              <button type="button" class="btn btn-info">
                Seleccionar
              </button>
            </a>
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

