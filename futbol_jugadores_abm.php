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
    require_once $_SERVER["DOCUMENT_ROOT"]."/Desarrollo_SSPED/listabotones1.php";
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
<h3>Registrar nuevo jugador</h3>
  <form class="form-horizontal">
  <table>
  <tr>
  <td class="col-xs-8">
    <div class="form-group">
      <label for="inputNombre" class="col-xs-3 control-label">Nombre:</label>
      <div class="col-xs-8">
        <input type="text" class="form-control" id="inputNombre" placeholder="Nombre " onkeypress="return soloLetras(event);" >
      </div>
      
    </div>

    <div class="form-group">
      <label for="inputApellido1" class="col-xs-3 control-label">Apellido paterno:</label>
      <div class="col-xs-8">
        <input type="text" class="form-control" id="inputApellido1" placeholder="Apellido paterno" onkeypress="return soloLetras(event);">
      </div>
    </div>

    <div class="form-group">
      <label for="inputApellido2" class="col-xs-3 control-label">Apellido materno:</label>
      <div class="col-xs-8">
        <input type="text" class="form-control" id="inputApellido2" placeholder="Apellido materno" onkeypress="return soloLetras(event);">
      </div>
    </div>

    <div class="form-group">
      <label for="inputFechaNac" class="col-xs-3 control-label">Fecha de nacimiento:</label>
      <div class="col-xs-8">
        <input type="text" class="form-control" id="inputFechaNac" placeholder="Fecha de nacimiento">
      </div>
    </div>

  <div class="form-group">
    <label for="inputGrupo" class="col-xs-3 control-label">Grupo:</label>
    <div class="col-xs-3">
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
      <label for="inputSubir" class="col-xs-2 control-label">Subir imagen:</label>
      <div class="col-xs-4">
        <label for="inputSubir" class="col-xs-2 control-label">Ruta</label>
      </div>
      <button type="button" class="btn btn-default ">
        <span class="glyphicon glyphicon-open " aria-hidden="true"></span>
        Subir archivo
      </button>
  </div>

  <div class="form-group">
    <div class="col-xs-offset-2 col-xs-10">
      <button type="button" class="btn btn-success">Registrar</button>
    </div>
  </div>

  

  <div class="form-group">
    <div class="col-xs-offset-9 col-xs-2">
      <button type="button" class="btn btn-primary">Limpiar</button>
    </div>
  </div>
  </td>
   <td valign="top" class="col-xs-1">
     <img src="https://cdn3.iconfinder.com/data/icons/token/128/People-MSN.png" alt="..." class="img-circle">
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
<h3>Modificar informacion jugador</h3>
<form class="form-horizontal" name="modificar" id="modificar">
  
  <div class="form-group">
    <label for="inputNombreMo" class="col-xs-2 control-label" id="buscarMod1" >Nombre:</label>
    <div class="col-xs-7">
      <input type="text" class="form-control" id="inputNombreMo" placeholder="Nombre de jugador"  onkeypress="return soloLetras(event);">
    </div>
    
      <button type="button" class="btn btn-default ">
        <span class="glyphicon glyphicon-search " aria-hidden="true"></span>
        Buscar
      </button>
  </div>



  <div class="form-group">
    <div class="col-xs-offset-2 col-xs-8">
     <table class="table table-hover" >

      <tr>
       <th>Nombre</th>
       <th>Apellido paterno</th>
       <th>Apellido materno</th>
       <th>Fecha de nacimiento</th>
       <th>Grupo</th>
        </tr>
     <tr><td>X</td><td>X</td><td>X</td><td>X</td><td>X</td></tr>

     <tr><td>X</td><td>X</td><td>X</td><td>X</td><td>X</td></tr>

     </table>
  </div>
  </div>

  <p></p>


  <table>
  <tr>
  <td class="col-xs-8">
    <div class="form-group">
      <label for="inputNombreMo" class="col-xs-3 control-label">Nombre:</label>
      <div class="col-xs-8">
        <input type="text" class="form-control" id="inputNombreMo" placeholder="Nombre " onkeypress="return soloLetras(event);" >
      </div>
      
    </div>

    <div class="form-group">
      <label for="inputApellido1Mo" class="col-xs-3 control-label">Apellido paterno:</label>
      <div class="col-xs-8">
        <input type="text" class="form-control" id="inputApellido1Mo" placeholder="Apellido paterno" onkeypress="return soloLetras(event);">
      </div>
    </div>

    <div class="form-group">
      <label for="inputApellido2Mo" class="col-xs-3 control-label">Apellido materno:</label>
      <div class="col-xs-8">
        <input type="text" class="form-control" id="inputApellido2Mo" placeholder="Apellido materno" onkeypress="return soloLetras(event);">
      </div>
    </div>

    <div class="form-group">
      <label for="inputFechaNacMo" class="col-xs-3 control-label">Fecha de nacimiento:</label>
      <div class="col-xs-8">
        <input type="text" class="form-control" id="inputFechaNacMo" placeholder="Fecha de nacimiento">
      </div>
    </div>

  <div class="form-group">
    <label for="inputGrupo" class="col-xs-3 control-label">Grupo:</label>
    <div class="col-xs-3">
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
      <label for="inputSubirMo" class="col-xs-2 control-label">Subir imagen:</label>
      <div class="col-xs-4">
        <label for="inputSubirMo" class="col-xs-2 control-label">Ruta</label>
      </div>
      <button type="button" class="btn btn-default ">
        <span class="glyphicon glyphicon-open " aria-hidden="true"></span>
        Subir archivo
      </button>
  </div>

  <div class="form-group">
    <div class="col-xs-offset-2 col-xs-10">
      <button type="button" class="btn btn-success">Modificar</button>
    </div>
  </div>

  

  <div class="form-group">
    <div class="col-xs-offset-9 col-xs-2">
      <button type="button" class="btn btn-primary">Limpiar</button>
    </div>
  </div>
  </td>
   <td valign="top" class="col-xs-1">
     <img src="https://cdn3.iconfinder.com/data/icons/token/128/People-MSN.png" alt="..." class="img-circle">
    </td>
  </tr>
  </table>
</form>
<!-- FIN FORM MODIFICAR GRUPOS -->
 </div>
<!--  Fin Contenido Pestaña modificar grupo -->


 <div class="tab-pane fade" id="tabs-third">


  <!-- FORM ELIMINAR GRUPOS -->


<h3>Eliminar jugador</h3>
<form class="form-horizontal" name="eliminar" id="eliminar">
  
  <div class="form-group">
    <label for="inputNombreMo" class="col-xs-2 control-label" id="buscarMod1" >Nombre:</label>
    <div class="col-xs-7">
      <input type="text" class="form-control" id="inputNombreEl" placeholder="Nombre de jugador"  onkeypress="return soloLetras(event);">
    </div>
    
      <button type="button" class="btn btn-default ">
        <span class="glyphicon glyphicon-search " aria-hidden="true"></span>
        Buscar
      </button>
  </div>



  <div class="form-group">
    <div class="col-xs-offset-2 col-xs-8">
     <table class="table table-hover" >

      <tr>
       <th>Nombre</th>
       <th>Apellido paterno</th>
       <th>Apellido materno</th>
       <th>Fecha de nacimiento</th>
       <th>Grupo</th>
        </tr>
     <tr><td>X</td><td>X</td><td>X</td><td>X</td><td>X</td></tr>

     <tr><td>X</td><td>X</td><td>X</td><td>X</td><td>X</td></tr>

     </table>
  </div>
  </div>

  <p></p>


  <table>
  <tr>
  <td class="col-xs-8">
    <div class="form-group">
      <label for="inputNombreEl" class="col-xs-3 control-label">Nombre:</label>
      <div class="col-xs-8">
        <input type="text" class="form-control" id="inputNombreEl" placeholder="Nombre " onkeypress="return soloLetras(event);" disabled>
      </div>
      
    </div>

    <div class="form-group">
      <label for="inputApellido1El" class="col-xs-3 control-label">Apellido paterno:</label>
      <div class="col-xs-8">
        <input type="text" class="form-control" id="inputApellido1El" placeholder="Apellido paterno" onkeypress="return soloLetras(event);" disabled>
      </div>
    </div>

    <div class="form-group">
      <label for="inputApellido2El" class="col-xs-3 control-label">Apellido materno:</label>
      <div class="col-xs-8">
        <input type="text" class="form-control" id="inputApellido2El" placeholder="Apellido materno" onkeypress="return soloLetras(event);" disabled>
      </div>
    </div>

    <div class="form-group">
      <label for="inputFechaNacEl" class="col-xs-3 control-label">Fecha de nacimiento:</label>
      <div class="col-xs-8">
        <input type="text" class="form-control" id="inputFechaNacEl" placeholder="Fecha de nacimiento" disabled>
      </div>
    </div>

  <div class="form-group">
    <label for="inputGrupo" class="col-xs-3 control-label">Grupo:</label>
    <div class="col-xs-3">
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
      <label for="inputSubirEl" class="col-xs-2 control-label">Subir imagen:</label>
      <div class="col-xs-4">
        <label for="inputSubirMo" class="col-xs-2 control-label">Ruta</label>
      </div>
      <button type="button" class="btn btn-default ">
        <span class="glyphicon glyphicon-open " aria-hidden="true"></span>
        Subir archivo
      </button>
  </div>
  
</td>
 <td valign="top" class="col-xs-1">
     <img src="https://cdn3.iconfinder.com/data/icons/token/128/People-MSN.png" alt="..." class="img-circle">
    </td>
  </tr>
  </table>


<!-- Boton eliminar -->

<div class="form-group">
    <div class="col-xs-offset-2 col-xs-2">
  <button type="button" class="eliminar btn btn-danger " data-toggle="modal" data-target="#myModalEliminarGrupo">
  Eliminar
  </button>
  </div>
</div>
<!-- Formulario modal2n -->

 <div class="modal fade" id="myModalEliminarGrupo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
                <button type="button" class="btn btn-success">Eliminar</button>
              </div>
           </div>


          </form>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-danger">Cancelar
              </button>
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
  </body>
<!--  llamada al pie de pagina -->
  <?php 
    require_once $_SERVER["DOCUMENT_ROOT"]."/Desarrollo_SSPED/pie1.php";
  ?>

</body>
</html>