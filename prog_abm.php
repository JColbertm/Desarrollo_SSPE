<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="/Desarrollo_SSPED/bootstrap-3.3.6-dist/css/bootstrap.css">
    <script src="/Desarrollo_SSPED/bootstrap-3.3.6-dist/jquery.js"></script>
    <script src="/Desarrollo_SSPED/bootstrap-3.3.6-dist/js/bootstrap.js"></script>
    <script type="text/javascript">
     
    </script>
    <script type="text/javascript">
    $(document).ready(function() {

      $('#eliminar').on('click', function(){
        $('#myModal3').modal('toggle')         
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
    require_once $_SERVER["DOCUMENT_ROOT"]."/Desarrollo_SSPED/listabotones1.php";
  ?>


<!-- Contenedor Pestaña ABM GRUPOS -->
<div class="col-xs-7">
<div class="panel panel-default">
  <div class="panel-heading">Programacion grupos</div>
  <div class="panel-body">


<!-- Pestaña ABM GRUPOS -->

<ul class="nav nav-tabs" role="tablist">
 <li class="active"><a href="javascript:;" role="tab" data-toggle="tab" data-target="#tabs-first">Registrar</a></li>
 <li><a href="javascript:;" role="tab" data-toggle="tab" data-target="#tabs-second">Modificar</a></li>
 <li><a href="javascript:;" role="tab" data-toggle="tab" data-target="#tabs-third">Eliminar</a></li>
</ul>
<!-- Contenido Pestaña ABM GRUPOS -->
<div class="tab-content">

<!-- Contenido Pestaña registrar grupo -->

 <div class="active tab-pane fade in" id="tabs-first">
  
<!-- FORM CREAR GRUPOS -->
<h2>Registrar nuevo grupo</h2>
<form class="form-horizontal">
  
  <div class="form-group">
    <label for="inputNombre" class="col-xs-2 control-label">Nombre:</label>
    <div class="col-xs-8">
      <input type="text" class="form-control" id="inputNombre" placeholder="Nombre de grupo">
    </div>
  </div>

  <div class="form-group">
    <label for="inputCategoria" class="col-xs-2 control-label">Categoria:</label>
    <div class="col-xs-2">
      <select class="form-control">
        <option></option>
        <option>SUB 5</option>
        <option>SUB 7</option>
        <option>SUB 9</option>
        <option>SUB 11</option>
        <option>SUB 13</option>
        <option>SUB 15</option>
        <option>SUB 17</option>
      </select>
    </div>
  </div>

  <div class="form-group">
    <label for="inputJugadores" class="col-xs-2 control-label">Jugadores:</label>
    <div class="col-xs-8">
      <input type="text" class="form-control" id="inputJugadores" placeholder="Cantidad de jugadores">
    </div>
  </div>

  
  <div class="form-group">
    <div class="col-xs-offset-2 col-xs-10">
      <button type="submit" class="btn btn-success">Registrar</button>
    </div>
  </div>

  <div class="form-group">
    <div class="col-xs-offset-9 col-xs-2">
      <button type="submit" class="btn btn-primary">Limpiar</button>
    </div>
  </div>
</form>
 <!-- FIN FORM CREAR GRUPOS -->

 </div>

<!-- Fin Contenido Pestaña registrar grupo -->

<!--  Contenido Pestaña modificar grupo -->

 <div class="tab-pane fade" id="tabs-second">


  <!-- FORM MODIFICAR GRUPOS -->
<h2>Modificar grupo</h2>
<form class="form-horizontal" name="modificar">
  
  <div class="form-group">
    <label for="inputNombre" class="col-xs-2 control-label" id="label">   </label>
    <div class="col-xs-5">
      <input type="text" class="form-control" id="inputNombre" placeholder="Nombre de grupo">
    </div>
    
      <button type="submit" class="btn btn-default">Buscar
        <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
      </button>
  </div>


 <div class="form-group">
    <div class="col-xs-offset-2 col-xs-10">
      <label class="radio-inline" >
        <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" >Nombre
        </label>
        <label class="radio-inline">
        <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">Categoria
      </label>
  </div>
</div>

  <div class="form-group">
    <div class="col-xs-offset-2 col-xs-8">
     <table class="table table-hover" >

      <tr>
       <th>Nombre</th>
       <th>Categoria</th>
       <th>Cant. Jugadores</th>
        </tr>
     <tr><td>X</td><td>X</td><td>X</td></tr>

     <tr><td>X</td><td>X</td><td>X</td></tr>

     </table>
  </div>
  </div>

  <p></p>


  <div class="form-group">
    <label for="inputNombre" class="col-xs-offset-1 col-xs-3 control-label">Nombre:</label>
      <div class="col-xs-5">
        <input type="text" class="form-control" id="inputNombre" placeholder="Nombre">
      </div>
  </div>
  <div class="form-group">
    <label for="inputCategoria" class="col-xs-offset-1 col-xs-3 control-label">Categoria:</label>
      <div class="col-xs-5">
        <input type="text" class="form-control" id="inputCategoria" placeholder="Categoria">
      </div>
  </div>
   <div class="form-group"> 
    <label for="inputJugadores" class="col-xs-offset-1 col-xs-3 control-label">Cant. Jugarores:</label>
    <div class="col-xs-5">
      <input type="text" class="form-control" id="inputJugadores" placeholder="Jugadores">
    </div>
  </div>

  

  
  <div class="form-group">
    <div class="col-xs-offset-2 col-xs-10">
      <button type="submit" class="btn btn-success">Modificar</button>
    </div>
  </div>

  <div class="form-group">
    <div class="col-xs-offset-9 col-xs-2">
      <button type="submit" class="btn btn-primary">Limpiar</button>
    </div>
  </div>
</form>
<!-- FIN FORM MODIFICAR GRUPOS -->
 </div>
<!--  Fin Contenido Pestaña modificar grupo -->


 <div class="tab-pane fade" id="tabs-third">


  <!-- FORM ELIMINAR GRUPOS -->
<h2>Eliminar grupo</h2>
  <form class="form-horizontal" name="eliminar">
  
   <div class="form-group">
     <label for="inputNombre" class="col-xs-2 control-label" id="label">   </label>
     <div class="col-xs-5">
        <input type="text" class="form-control" id="inputNombre" placeholder="Nombre de grupo">
      </div>  
      <button type="submit" class="btn btn-default">Buscar
        <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
      </button>
  </div>


  <div class="form-group">
    <div class="col-xs-offset-2 col-xs-10">
      <label class="radio-inline" >

        <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" >Nombre</label>
      <label class="radio-inline">
        <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">Categoria</label>
    </div>
  </div>

<!-- Tabla de resultados -->

  <div class="form-group">
    <div class="col-xs-offset-2 col-xs-8">
      <table class="table table-hover" >

        <tr>
           <th>Nombre</th>
           <th>Categoria</th>
           <th>Cant. Jugadores</th>
        </tr>
        <tr><td>X</td><td>X</td><td>X</td></tr>

         <tr><td>X</td><td>X</td><td>X</td></tr>

      </table>
    </div>
  </div>


  
  <p></p>

<!-- textbox -->

    <div class="form-group">
      <label for="inputNombre" class="col-xs-offset-1 col-xs-3 control-label">Nombre:</label>
        <div class="col-xs-5">
          <input type="text" class="form-control" id="inputNombre" placeholder="Nombre">
        </div>
    </div>
   <div class="form-group">
    <label for="inputCategoria" class="col-xs-offset-1 col-xs-3 control-label">Categoria:</label>
      <div class="col-xs-5">
        <input type="text" class="form-control" id="inputCategoria" placeholder="Categoria">
      </div>
    </div>
   <div class="form-group"> 
    <label for="inputJugadores" class="col-xs-offset-1 col-xs-3 control-label">Cant. Jugarores:</label>
    <div class="col-xs-5">
      <input type="text" class="form-control" id="inputJugadores" placeholder="Jugadores">
    </div>
  </div>

  



<!-- Boton eliminar -->

<div class="form-group">
    <div class="col-xs-offset-2 col-xs-2">
  <button type="submit" class="eliminar btn btn-danger " data-toggle="modal" data-target="#myModal3">
  Eliminar
  </button>
  </div>
</div>
<!-- Formulario modal2n -->

 <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Eliminar</h4>
           </div>
           
          <div class="modal-body">
            <form class="form-horizontal" method="post" action='' name="login_form">
              <div class="form-group">
                <label for="inputCI" class="col-xs-6 col-xs-offset-2 control-label">¿Esta seguro de eliminar este grupo?</label>
              </div>

      
            <div class="form-group">
              <div class="col-xs-offset-2 col-xs-7">
                <button type="submit" class="btn btn-success">Eliminar</button>
              </div>
           </div>


          </form>
          </div>

          <div class="modal-footer">
            <button type="submit" class="btn btn-danger">Cancelar
              </button>
          </div>
        </div>
    </div>
  </div>




  <div class="form-group">
    <div class="col-xs-offset-9 col-xs-2">
      <button type="submit" class="btn btn-primary">Limpiar</button>
    </div>
  </div>
</form>


<!-- FIN FORM ELIMINAR GRUPOS -->
 </div>


</div>
  


	   </div>
    </div>
    </div>
  </body>
<!--  llamada al pie de pagina -->
  <?php 
    require_once $_SERVER["DOCUMENT_ROOT"]."/Desarrollo_SSPED/pie1.php";
  ?>

</body>
</html>