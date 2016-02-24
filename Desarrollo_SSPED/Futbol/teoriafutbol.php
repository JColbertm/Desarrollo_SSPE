<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="/Desarrollo_SSPED/bootstrap-3.3.6-dist/css/bootstrap.css">
    <script src="/Desarrollo_SSPED/bootstrap-3.3.6-dist/jquery.js"></script>
    <script src="/Desarrollo_SSPED/bootstrap-3.3.6-dist/js/bootstrap.js"></script>

    <script type="text/javascript">
		$(document).ready(function() {

			$(function () {
				$('[data-placement="bottom"]').tooltip()
			})

			$('#modal1').on('click', function(){
				$('#myModal').modal('toggle')		 			
		 	})
		 	
			$('body').scrollspy({ target: '#navbar-example' })

			$('#btnregistro').on('click', function(){
				$('.form-horizontal').on('submit', function(evento){evento.preventDefault();})
			})

			

		})
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

<!-- PANELES DESPLEGABLES -->

		<h3>Libros / Paginas</h3>

			<div class="panel-group col-xs-12" id="accordion" role="tablist" aria-multiselectable="true">
	  			<div class="panel panel-default">
	    			<div class="panel-heading" role="tab" id="headingOne">
	      				<h4 class="panel-title">
	        				<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
	          					Libros
	        				</a>
	      				</h4>
	    			</div>
		    		<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
		      			<div class="panel-body">
				    		<ol >
				    			<li> <h4>Libro uno </h4> <a>Ver libro </a>
				    				<ul>
				    					<li>Descripcion uno:
				    						<p>Texto de la descripcion uno</p>
				    					</li>
				    				</ul>

				    			</li>
				    			<li> <h4>Libro dos </h4> <a>Ver libro </a>
				    				<ul>
				    					<li>Descripcion uno:
				    						<p>Texto de la descripcion uno</p>
				    					</li>
				    				</ul>
 								</li>	
				    			<li> <h4>Libro uno </h4> <a>Ver libro </a>
				    				<ul>
				    					<li>Descripcion uno:
				    						<p>Texto de la descripcion uno</p>
				    					</li>
				    				</ul>
				    			</li>
				    		</ol>
	
		      			</div>
		    		</div>
	  			</div>

				<div class="panel panel-default">
				    <div class="panel-heading" role="tab" id="headingTwo">
				      <h4 class="panel-title">
				        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
				          Paginas Externas
				        </a>
				      </h4>
				    </div>
				    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
				      	<div class="panel-body">
				       		<ol>
					       		<li>Nombre de la pagina <a>Pagina.com</a></li>
					       		<li>Nombre de la pagina <a>Pagina2.com</a></li>
				       		</ol>
				      	</div>

				      	<button type="button" class="modal1 btn btn-primary" data-toggle="modal" data-target="#myModal" data-toggle="tooltip" data-placement="bottom" title="Añadir"> Añadir </button>

				    </div>
				 </div>
	 		</div>



<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Formulario de Registro</h4>
      </div>
      <div class="modal-body">
      	<!-- Formulario de registro -->
    		<form class="form-horizontal">
			  <div class="form-group">
			    <label class="col-sm-2 control-label">Nombre de la pagina:</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="nombreform" placeholder="Pagina">
			    </div>
			  </div>
			  <div class="form-group">
			    <label class="col-sm-2 control-label">Descripcion:</label>
			    <div class="col-sm-10">
			      	<input type="text" class="form-control" id="apellidoform" placeholder="Esta pagina contiene">
			    </div>
			  </div>
			  <div class="form-group">
			    <label class="col-sm-2 control-label">Link:</label>
			    <div class="col-sm-10">
			     	<input type="text" class="form-control" id="apellidoform" placeholder="Pagina.com">
			  	</div>
			  
			    <div class="col-sm-offset-2 col-sm-10">
			      <button id="btnregistro" type="submit" class="btn btn-success">Aceptar</button>
			    </div>
			  </div>
			</form>
			
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
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