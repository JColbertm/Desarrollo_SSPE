
<!--  Carrusel -->
<div class="col-xs-offset-1 col-xs-10">
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" direction="right">
	  <!-- Indicators -->
	  <ol class="carousel-indicators">
	    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
	    <li data-target="#carousel-example-generic" data-slide-to="1"></li>	    
	  </ol>
	  <!-- Wrapper for slides -->
	  <div class="carousel-inner" role="listbox">
	    <div class="item active">
	      <img src="/Desarrollo_SSPED/Imagenes/banner-futbol.jpg" alt="...">
	      <div class="carousel-caption"></div>
	    </div>

	    <div class="item">
	      <img src="/Desarrollo_SSPED/Imagenes/banner2.jpg" alt="...">
	      <div class="carousel-caption"></div>
	    </div>     
	  </div>
	 <!-- Controls -->
	  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
	    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
	    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>	
	</div>

<!-- Banda de Presentacion  -->

	<nav class="navbar navbar-default">
  		<div class="container-fluid">
    	<!-- Brand and toggle get grouped for better mobile display -->
    		<div class="navbar-header">
      			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        			<span class="sr-only">Toggle navigation</span>
        			<span class="icon-bar"></span>
        			<span class="icon-bar"></span>
        			<span class="icon-bar"></span>
      			</button>
      			<a class="navbar-brand" href="index.php"> Home</a>
    		</div>

    		<!-- Collect the nav links, forms, and other content for toggling -->
    		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      		<ul class="nav navbar-nav">
        		<li><a href="futbol.php">Futbol<span class="sr-only">(current)</span></a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="">Registrarse</a></li>
            <li><a href="" class="modal1" data-toggle="modal" data-target="#myModal">Ingresar</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
</div>


<!-- Formulario modal login -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
    	<div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        			<h4 class="modal-title" id="myModalLabel">Ingreso</h4>
     		</div>
           
          	<div class="modal-body">
            	<form class="form-horizontal" method="post" name="login_form">
					<div class="form-group">
    					<label class="col-xs-2 col-xs-offset-1 control-label">CI:</label>
  					  	<div class="col-xs-7">
    						<input type="text" class="form-control" id="inputCi" placeholder="Carnet de identidad">
   					 	</div>
 			 		</div>

 			 		<div class="form-group">
    					<label class="col-xs-2 col-xs-offset-1 control-label">Password:</label>
  					  	<div class="col-xs-7">
    						<input type="password" class="form-control" id="inputPassword" placeholder="Password">
   					 	</div>
 			 		</div>

 			 		<div class="form-group">
			    		<div class="col-xs-offset-3 col-xs-7">
			      			<button type="submit" class="btn btn-success">Ingresar</button>
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