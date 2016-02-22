
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
	      <img src="/Desarrollo_SSPED/Imagenes/ImaFutbol/banner-futbol.jpg" alt="...">
	      <div class="carousel-caption"></div>
	    </div>

	    <div class="item">
	      <img src="/Desarrollo_SSPED/Imagenes/ImaFutbol/banner2.jpg" alt="...">
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
      			<a class="navbar-brand" href="/Desarrollo_SSPED/index.php"> Home</a>
    		</div>

    		<!-- Collect the nav links, forms, and other content for toggling -->
    		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      		<ul class="nav navbar-nav">
        		<li><a href="/Desarrollo_SSPED/Futbol/futbol.php">Futbol<span class="sr-only">(current)</span></a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href=""class="modal1" data-toggle="modal" data-target="#registromodal">Registrarse</a></li>
            <li><a href="" class="modal1" data-toggle="modal" data-target="#modalingreso">Ingresar</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
</div>


<!-- Formulario modal login -->
<div class="modal fade" id="modalingreso" tabindex="-1" role="dialog" aria-labelledby="modalingreso">
    <div class="modal-dialog" role="document">
    	<div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        			<h4 class="modal-title" id="myModalLabel">Ingreso</h4>
     		</div>
           
          	<div class="modal-body">
            	<form class="form-horizontal" method="post" name="login_form">
					<div class="form-group">
    					<label class="col-sm-2 col-sm-offset-1 control-label">CI:</label>
  					  	<div class="col-sm-7">
    						<input type="text" class="form-control" id="inputCi" placeholder="Carnet de identidad" required>
   					 	</div>
 			 		</div>

 			 		<div class="form-group">
    					<label class="col-sm-2 col-sm-offset-1 control-label">Password:</label>
  					  	<div class="col-sm-7">
    						<input type="password" class="form-control" id="inputPassword" placeholder="Password" required>
   					 	</div>
 			 		</div>

 			 		<div class="form-group">
			    		<div class="col-sm-offset-3 col-sm-7">
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


<!-- Formulario modal registro -->

<div class="modal fade" id="registromodal" tabindex="-1" role="dialog" aria-labelledby="registromodal">
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
          <label class="col-sm-2 control-label">Nombre:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="nombrecoach" placeholder="Juan" required>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Apellido P.:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="apellidopcoach" placeholder="Perez" required>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Apellido M.:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="apellidomcoach" placeholder="Lopez" required>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Fecha de Nacimiento:</label>
          <div class="col-sm-10">
            <div class="col-sm-1">
              <label>Dia:</label>
            </div>
            <div class="col-sm-3">
              <select class="form-control">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
              <option>6</option>
              <option>7</option>
              <option>8</option>
              <option>9</option>
              <option>10</option>
              <option>11</option>
              <option>12</option>
              <option>13</option>
              <option>14</option>
              <option>15</option>
              <option>16</option>
              <option>17</option>
              <option>18</option>
              <option>19</option>
              <option>20</option>
              <option>21</option>
              <option>22</option>
              <option>23</option>
              <option>24</option>
              <option>25</option>
              <option>26</option>
              <option>27</option>
              <option>28</option>
              <option>29</option>
              <option>30</option>
              <option>31</option>
            </select>
          </div>
          <div class="col-sm-1">
              <label>Mes:</label>
            </div>
          <div class="col-sm-3">
            <select class="form-control">
              <option>Enero</option>
              <option>Febrero</option>
              <option>Marzo</option>
              <option>Abril</option>
              <option>Mayo</option>
              <option>Junio</option>
              <option>Julio</option>
              <option>Agosto</option>
              <option>Septiembre</option>
              <option>Octubre</option>
              <option>Noviembre</option>
              <option>Diciembre</option>
            </select>
          </div>
          <div class="col-sm-1">
              <label>Anio:</label>
            </div>
          <div class="col-sm-3">
            <select class="form-control">
              <option>1945</option>
              <option>1946</option>
              <option>1947</option>
              <option>1948</option>
              <option>1949</option>
              <option>1950</option>
              <option>1951</option>
              <option>1952</option>
              <option>1953</option>
              <option>1954</option>
              <option>1955</option>
              <option>1955</option>
              <option>1957</option>
              <option>1958</option>
              <option>1959</option>
              <option>1960</option>
              <option>1961</option>
              <option>1962</option>
              <option>1963</option>
              <option>1964</option>
              <option>1965</option>
              <option>1966</option>
              <option>1967</option>
              <option>1968</option>
              <option>1969</option>
              <option>1970</option>
              <option>1971</option>
              <option>1972</option>
              <option>1973</option>
              <option>1974</option>
              <option>1975</option>
              <option>1976</option>
              <option>1977</option>
              <option>1978</option>
              <option>1979</option>
              <option>1980</option>
              <option>1981</option>
              <option>1982</option>
              <option>1983</option>
              <option>1984</option>
              <option>1985</option>
              <option>1986</option>
              <option>1987</option>
              <option>1988</option>
              <option>1989</option>
              <option>1990</option>
              <option>1991</option>
              <option>1992</option>
              <option>1993</option>
              <option>1994</option>
              <option>1995</option>
              <option>1996</option>
              <option>1997</option>
              <option>1998</option>
              <option>1999</option>
              <option>2000</option>
              <option>2001</option>
              <option>2002</option>
              <option>2003</option>
              <option>2004</option>
              <option>2005</option>
              <option>2006</option>
              <option>2007</option>
              <option>2008</option>
              <option>2009</option>
              <option>2010</option>
              <option>2011</option>
              <option>2012</option>
            </select>
          </div>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Carnet:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="carnet" placeholder="6482974" required>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Telefono:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="telefono" placeholder="78595241" required>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Correo:</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" id="mailcoach" placeholder="juan.perez@ejemplo.com" required>
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-2 control-label">Password:</label>
          <div class="col-sm-10">
            <input type="password" class="form-control" id="passwordcoach" placeholder="**********" required>
          </div>
         </div>
         <div class="form-group">
          <label class="col-sm-2 control-label">Confirmar Password:</label>
          <div class="col-sm-10">
            <input type="password" class="form-control" id="password2coach" placeholder="**********" required>
          </div>
         </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button id="btnregistro" type="submmit" class="btn btn-success">Registrar</button>
          </div>
        </div>
      </form>
      
      </div>
      <div class="modal-footer">
        <button type="reset" class="btn btn-primary">Limpiar Campos</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
      </div>
    </div>
  </div>
</div>