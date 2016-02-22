<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="/Desarrollo_SSPED/bootstrap-3.3.6-dist/css/bootstrap.css">
    <script src="/Desarrollo_SSPED/bootstrap-3.3.6-dist/jquery.js"></script>
    <script src="/Desarrollo_SSPED/bootstrap-3.3.6-dist/js/bootstrap.js"></script>
    <!-- permitir solo numeros en un input -->
    <script type="text/javascript">
     function justNumbers(e)
    {
       var keynum = window.event ? window.event.keyCode : e.which;
       if ((keynum == 8) || (keynum == 46))
            return true;
        return /\d/.test(String.fromCharCode(keynum));
    }
    function sololetras(){
      if (event.keyCode >45 && event.keyCode  <57) event.returnValue = false;
      }
       function soloLetras(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toLowerCase();
       letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
       especiales = "8-37-39-46";
       tecla_especial = false
       for(var i in especiales){
            if(key == especiales[i]){
                tecla_especial = true;
                break;
            }
        }
        if(letras.indexOf(tecla)==-1 && !tecla_especial){
            return false;
        }
    }
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


<!-- Contenedor Pestaña ABM GRUPOS -->
<div class="col-xs-7">
<div class="panel panel-default">
  <div class="panel-heading">Administrar Jugadores</div>
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
<h4>Registrar nuevo jugador</h4>
  <form class="form-horizontal">
  <table>
  <tr>
  <td class="col-xs-8">
    <div class="form-group">
      <label class="col-xs-offset-1 col-xs-3 control-label">Nombre:</label>
      <div class="col-xs-8">
        <input required type="text" class="form-control" id="inputNombre" placeholder="Nombre " onkeypress="return soloLetras(event);" >
      </div>
      
    </div>

    <div class="form-group">
      <label class="col-xs-offset-1 col-xs-3 control-label">Apellido paterno:</label>
      <div class="col-xs-8">
        <input required type="text" class="form-control" id="inputApellido1" placeholder="Apellido paterno" onkeypress="return soloLetras(event);">
      </div>
    </div>

    <div class="form-group">
      <label class="col-xs-offset-1 col-xs-3 control-label">Apellido materno:</label>
      <div class="col-xs-8">
        <input required type="text" class="form-control" id="inputApellido2" placeholder="Apellido materno" onkeypress="return soloLetras(event);">
      </div>
    </div>

    <div class="form-group">
      <label class="col-xs-offset-1 col-xs-3 control-label">Fecha de nacimiento:</label>
      <div class="col-xs-8">
        <input required type="text" class="form-control" id="inputFechaNac" placeholder="Fecha de nacimiento">
      </div>
    </div>

  <div class="form-group">
    <label class="col-xs-offset-1 col-xs-3 control-label">Grupo:</label>
    <div class="col-xs-4">
      <select class="form-control">
        <option></option>
        <option>Grupo 1</option>
        <option>Grupo 2</option>
        <option>Grupo 3</option>
        <option>Grupo 4</option>
        <option>Grupo 5</option>
        <option>Grupo 6</option>
        <option>Grupo 7</option>
      </select>
    </div>
  </div>

  <div class="form-group">
      <label class="col-xs-offset-2 col-xs-2 control-label">Subir imagen:</label>
      <div class="col-xs-4">
        <label class="col-xs-2 control-label">Ruta</label>
      </div>
      <button type="button" class="btn btn-default ">
        <span class="glyphicon glyphicon-open " aria-hidden="true"></span>
        Subir archivo
      </button>
  </div>

  <div class="form-group">
    <div class="col-xs-offset-4 col-xs-10">
      <button type="button" class="btn btn-primary">Limpiar</button>
    </div>
  </div>

  

  <div class="form-group">
    <div class="col-xs-offset-9 col-xs-2">
      <button type="submit" class="btn btn-success">Registrar</button>
    </div>
  </div>
  </td>
   <td valign="top" class="col-xs-1">
     <img class="img-circle media-object" src="/Desarrollo_SSPED/Imagenes/People.png" alt="Usuario Futbol">
    </td>
  </tr>
  </table>
</form>
 <!-- FIN FORM CREAR GRUPOS -->

 </div>

<!-- Fin Contenido Pestaña registrar grupo -->

<!--  Contenido Pestaña modificar grupo -->

 <div class="tab-pane fade" id="tabs-second">


  <!-- FORM MODIFICAR GRUPOS -->
<h4>Modificar informacion jugador</h4>
<form class="form-horizontal" name="modificar" id="modificar">
  <br>
  <div class="form-group">
    <label class="col-xs-offset-1 col-xs-2 control-label" id="buscarMod1" >Nombre:</label>
    <div class="col-xs-5">
      <input type="text" class="form-control" id="inputNombreMo" placeholder="Nombre de jugador"  onkeypress="return soloLetras(event);">
    </div>
    <div class="col-xs-2">
      <button type="button" class="btn btn-default ">
        <span class="glyphicon glyphicon-search " aria-hidden="true"></span>
        Buscar
      </button>
     </div>
  </div>



  <div class="form-group">
    <div class="col-xs-offset-2 col-xs-8">

    <table class="table table-hover">
        <thead>
          <tr>
            <th>Nombre</th><th>Apellido P.</th><th>Apellido M.</th><th>Fecha N.</th><th>Grupo</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Juan</td><td>Perez</td><td>Lopez</td><td>12/05/1989</td><td>Bolivar</td>
          </tr>
          <tr>
            <td>Juan</td><td>Perez</td><td>Lopez</td><td>12/05/1989</td><td>Bolivar</td>
          </tr>
          <tr>
            <td>Juan</td><td>Perez</td><td>Lopez</td><td>12/05/1989</td><td>Bolivar</td>
          </tr>
        </tbody>
      </table>

  	</div>
  </div>

  <div>
    <center><h4>Datos del Jugador</h4></center>
  </div>


  <table>
  <br>
  <tr>
  <td class="col-xs-8">
    <div class="form-group">
      <label class="col-xs-offset-1 col-xs-3 control-label">Nombre:</label>
      <div class="col-xs-8">
        <input type="text" class="form-control" id="inputNombreMo" placeholder="Nombre " onkeypress="return soloLetras(event);" >
      </div>
      
    </div>

    <div class="form-group">
      <label class="col-xs-offset-1 col-xs-3 control-label">Apellido paterno:</label>
      <div class="col-xs-8">
        <input type="text" class="form-control" id="inputApellido1Mo" placeholder="Apellido paterno" onkeypress="return soloLetras(event);">
      </div>
    </div>

    <div class="form-group">
      <label class="col-xs-offset-1 col-xs-3 control-label">Apellido materno:</label>
      <div class="col-xs-8">
        <input type="text" class="form-control" id="inputApellido2Mo" placeholder="Apellido materno" onkeypress="return soloLetras(event);">
      </div>
    </div>

    <div class="form-group">
      <label class="col-xs-offset-1 col-xs-3 control-label">Fecha de nacimiento:</label>
      <div class="col-xs-8">
        <input type="text" class="form-control" id="inputFechaNacMo" placeholder="Fecha de nacimiento">
      </div>
    </div>

  <div class="form-group">
    <label class="col-xs-offset-1 col-xs-3 control-label">Grupo:</label>
    <div class="col-xs-4">
      <select class="form-control">
        <option></option>
        <option>Grupo 1</option>
        <option>Grupo 2</option>
        <option>Grupo 3</option>
        <option>Grupo 4</option>
        <option>Grupo 5</option>
        <option>Grupo 6</option>
        <option>Grupo 7</option>
      </select>
    </div>
  </div>

  <div class="form-group">
      <label class="col-xs-offset-2 col-xs-2 control-label">Subir imagen:</label>
      <div class="col-xs-4">
        <label for="inputSubirMo" class="col-xs-2 control-label">Ruta</label>
      </div>
      <button type="button" class="btn btn-default ">
        <span class="glyphicon glyphicon-open " aria-hidden="true"></span>
        Subir archivo
      </button>
  </div>

  <div class="form-group">
    <div class="col-xs-offset-4 col-xs-2">
      <button type="button" class="btn btn-primary">Limpiar</button>
    </div>
  </div>

  

  <div class="form-group">
    <div class="col-xs-offset-9 col-xs-2">
      <button type="submit" class="btn btn-success">Modificar</button>
    </div>
  </div>
  </td>
   <td valign="top" class="col-xs-1">
     <img class="img-circle media-object" src="/Desarrollo_SSPED/Imagenes/People.png" alt="Usuario Futbol">
    </td>
  </tr>
  </table>
</form>
<!-- FIN FORM MODIFICAR GRUPOS -->
 </div>
<!--  Fin Contenido Pestaña modificar grupo -->


 <div class="tab-pane fade" id="tabs-third">


  <!-- FORM ELIMINAR GRUPOS -->


<h4>Eliminar jugador</h4>

<form class="form-horizontal" name="eliminar" id="eliminar">
  <br>
  <div class="form-group">
    <label class="col-xs-offset-1 col-xs-2 control-label" id="buscarMod1" >Nombre:</label>
    <div class="col-xs-5">
      <input type="text" class="form-control" id="inputNombreEl" placeholder="Nombre de jugador"  onkeypress="return soloLetras(event);">
    </div>
    <div class="col-xs-2">
      <button type="button" class="btn btn-default ">
        <span class="glyphicon glyphicon-search " aria-hidden="true"></span>
        Buscar
      </button>
     </div>
  </div>



  <div class="form-group">
    <div class="col-xs-offset-2 col-xs-8">
     <table class="table table-hover">
        <thead>
          <tr>
            <th>Nombre</th><th>Apellido P.</th><th>Apellido M.</th><th>Fecha N.</th><th>Grupo</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Juan</td><td>Perez</td><td>Lopez</td><td>12/05/1989</td><td>Bolivar</td>
          </tr>
          <tr>
            <td>Juan</td><td>Perez</td><td>Lopez</td><td>12/05/1989</td><td>Bolivar</td>
          </tr>
          <tr>
            <td>Juan</td><td>Perez</td><td>Lopez</td><td>12/05/1989</td><td>Bolivar</td>
          </tr>
        </tbody>
      </table>
  </div>
  </div>

  <div>
    <center><h4>Datos del Jugador</h4></center>
  </div>

  <table>
  <br>
  <tr>
  <td class="col-xs-8">
    <div class="form-group">
      <label class="col-xs-offset-1 col-xs-3 control-label">Nombre:</label>
      <div class="col-xs-8">
        <input type="text" class="form-control" id="inputNombreEl" placeholder="Nombre " onkeypress="return soloLetras(event);" disabled>
      </div>
      
    </div>

    <div class="form-group">
      <label class="col-xs-offset-1 col-xs-3 control-label">Apellido paterno:</label>
      <div class="col-xs-8">
        <input type="text" class="form-control" id="inputApellido1El" placeholder="Apellido paterno" onkeypress="return soloLetras(event);" disabled>
      </div>
    </div>

    <div class="form-group">
      <label class="col-xs-offset-1 col-xs-3 control-label">Apellido materno:</label>
      <div class="col-xs-8">
        <input type="text" class="form-control" id="inputApellido2El" placeholder="Apellido materno" onkeypress="return soloLetras(event);" disabled>
      </div>
    </div>

    <div class="form-group">
      <label class="col-xs-offset-1 col-xs-3 control-label">Fecha de nacimiento:</label>
      <div class="col-xs-8">
        <input type="text" class="form-control" id="inputFechaNacEl" placeholder="Fecha de nacimiento" disabled>
      </div>
    </div>

  <div class="form-group">
    <label class="col-xs-offset-1 col-xs-3 control-label">Grupo:</label>
    <div class="col-xs-4  ">
      <select class="form-control">
        <option></option>
        <option>Grupo 1</option>
        <option>Grupo 2</option>
        <option>Grupo 3</option>
        <option>Grupo 4</option>
        <option>Grupo 5</option>
        <option>Grupo 6</option>
        <option>Grupo 7</option>
      </select>
    </div>
  </div>

  <div class="form-group">
      <label class="col-xs-offset-2 col-xs-2 control-label">Subir imagen:</label>
      <div class="col-xs-4">
        <label class="col-xs-2 control-label">Ruta</label>
      </div>
      <button type="button" class="btn btn-default ">
        <span class="glyphicon glyphicon-open " aria-hidden="true"></span>
        Subir archivo
      </button>
  </div>
  
</td>
 <td valign="top" class="col-xs-1">
     <img class="img-circle media-object" src="/Desarrollo_SSPED/Imagenes/People.png" alt="Usuario Futbol">
    </td>
  </tr>
  </table>

  <div class="form-group">
    <div class="col-xs-offset-3 col-xs-10">
      <button type="button" class="btn btn-primary">Limpiar</button>
    </div>
  </div>

<!-- Boton eliminar -->

<div class="form-group">
    <div class="col-xs-offset-7 col-xs-2">
  <button type="button" class="eliminar btn btn-danger " data-toggle="modal" data-target="#myModalEliminarGrupo">
  Eliminar
  </button>
  </div>
</div>
<!-- Formulario modal2n -->

 <div class="modal fade" id="myModalEliminarGrupo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Eliminar</h4>
           </div>
           
          <div class="modal-body">
            <form class="form-horizontal" method="post" action='' name="login_form">
              <div class="form-group">
                <label for="inputCI" class="col-xs-10 col-xs-offset-1 control-label">Seguro de eliminar este grupo?</label>
              </div>

      
            <div class="form-group">
              <div class="col-xs-offset-2 col-xs-7">
                <button type="button" class="btn btn-success btn-sm">Eliminar</button>
              </div>
           </div>


          </form>
          </div>

          <div class="modal-footer">
             <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cancelar</button>
          </div>
        </div>
    </div>
  </div>




</form>


<!-- FIN FORM ELIMINAR GRUPOS -->
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