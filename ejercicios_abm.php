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
    </script>

    <!-- modificar label al presionar un radio Modificar -->   
    <script>
    
      function tipo() {
      if(document.modificar.inlineRadioOptionsMod[0].checked){
       document.getElementById('buscarMod1').InnerHTML = "lsls"; 
      }
      else if(document.modificar.inlineRadioOptions[1].checked){
      document.getElementById('inputNombreMo').InnerHTML = 'your text goes here';
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
  <div class="panel-heading">Tipo de ejercicio</div>
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
<h3>Registrar nuevo ejercicio</h3>
<form class="form-horizontal">
  
  <div class="form-group">
    <label for="inputNombreEj" class="col-xs-2 control-label">Nombre:</label>
    <div class="col-xs-8">
      <input type="text" class="form-control" id="inputNombreEj" placeholder="Nombre del ejercicio">
    </div>
  </div>

  <div class="form-group">
    <label for="inputElementoTec" class="col-xs-2 control-label">Elemento tecnico:</label>
    <div class="col-xs-5">
      <select class="form-control">
        <option></option>
        <option>Psicomotricidad</option>
        <option>Coordinacion</option>
        <option>Resistencia</option>
        <option>Fuerza</option>
        <option>Velocidad</option>
        <option>Agilidad</option>
        <option>Flexibilidad</option>
      </select>
    </div>
  </div>


  <div class="form-group">
    <label for="inputCategoria" class="col-xs-2 control-label">Categor&iacutea:</label>
    <div class="col-xs-5">
      <select class="form-control">
        <option></option>
        <option>T&eacutecnico</option>
        <option>T&eacutecnico-T&aacutectico</option>
        <option>T&eacutecnico</option>
        <option>Acciones Psicol&oacutegicas</option>
      </select>
    </div>
  </div>

  <div class="form-group">
    <label for="inputDescripcion" class="col-xs-2 control-label ">Descripci&oacuten:</label>
    <div class="col-xs-8">
      <textarea class="form-control" rows="4" type="text" class="form-control" id="inputDescripcion" placeholder="Descripcion" onkeypress="return justNumbers(event);" ></textarea>
    </div>
  </div>

  <table  class="col-xs-offset-0 col-xs-10">
  <tr>
<td>
  <div class="form-group">
      <label for="inputSubirMo" class="col-xs-4 control-label">Subir imagen:</label>
     
        <label for="inputSubirMo" class="col-xs-2 control-label">Ruta</label>
      
      <button type="button" class="btn btn-default ">
        <span class="glyphicon glyphicon-open " aria-hidden="true"></span>
        Subir archivo
      </button>
  </div>

</td><td>
    <img src="https://cdn3.iconfinder.com/data/icons/token/128/People-MSN.png" alt="..." class="img-circle">
    </td>
    </tr>
</table>
  
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
<h3>Modificar ejercicio</h3>
<form class="form-horizontal" name="modificar" id="modificar">
  
  <div class="form-group">
    <label for="inputNombreEj" class="col-xs-2 control-label" id="buscarMod1" >Nombre:</label>
    <div class="col-xs-7">
      <input type="text" class="form-control" id="inputNombreEj" placeholder="Nombre de ejercicio"  onkeypress="return soloLetras(event);">
    </div>
    
      <button type="button" class="btn btn-default ">
        <span class="glyphicon glyphicon-search " aria-hidden="true"></span>
        Buscar
      </button>
  </div>

 <div class="form-group">
    <div class="col-xs-offset-2 col-xs-10">
      <label class="radio-inline" >

        <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" >Nombre</label>
      <label class="radio-inline">
        <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">Categoria</label>
        <label class="radio-inline">
        <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">Elemento Tec.</label>
    </div>
  </div>

  <div class="form-group">
    <div class="col-xs-offset-2 col-xs-8">
     <table class="table table-hover" >

      <tr>
       <th>Nombre</th>
       <th>Categoria</th>
       <th>Elemento Tec.</th>
        </tr>
     <tr><td>X</td><td>X</td><td>X</td></tr>

     <tr><td>X</td><td>X</td><td>X</td></tr>

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
    <label for="inputElementoTec" class="col-xs-3 control-label">Elemento tecnico:</label>
    <div class="col-xs-5">
      <select class="form-control">
        <option></option>
        <option>Psicomotricidad</option>
        <option>Coordinacion</option>
        <option>Resistencia</option>
        <option>Fuerza</option>
        <option>Velocidad</option>
        <option>Agilidad</option>
        <option>Flexibilidad</option>
      </select>
    </div>
  </div>

  <div class="form-group">
    <label for="inputCategoria" class="col-xs-3 control-label">Categor&iacutea:</label>
    <div class="col-xs-5">
      <select class="form-control">
        <option></option>
        <option>T&eacutecnico</option>
        <option>T&eacutecnico-T&aacutectico</option>
        <option>T&eacutecnico</option>
        <option>Acciones Psicol&oacutegicas</option>
      </select>
    </div>
  </div>

  <div class="form-group">
    <label for="inputDescripcion" class="col-xs-3 control-label ">Descripci&oacuten:</label>
    <div class="col-xs-8">
      <textarea class="form-control" rows="4" type="text" class="form-control" id="inputDescripcion" placeholder="Descripcion" onkeypress="return justNumbers(event);" ></textarea>
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
<h3>Eliminar ejercicio</h3>
<form class="form-horizontal" name="eliminar" id="eliminar">
  
  <div class="form-group">
    <label for="inputNombreEj" class="col-xs-2 control-label" id="buscarMod1" >Nombre:</label>
    <div class="col-xs-7">
      <input type="text" class="form-control" id="inputNombreEj" placeholder="Nombre de ejercicio"  onkeypress="return soloLetras(event);">
    </div>
    
      <button type="button" class="btn btn-default ">
        <span class="glyphicon glyphicon-search " aria-hidden="true"></span>
        Buscar
      </button>
  </div>

 <div class="form-group">
    <div class="col-xs-offset-2 col-xs-10">
      <label class="radio-inline" >

        <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" >Nombre</label>
      <label class="radio-inline">
        <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">Categoria</label>
        <label class="radio-inline">
        <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">Elemento Tec.</label>
    </div>
  </div>

  <div class="form-group">
    <div class="col-xs-offset-2 col-xs-8">
     <table class="table table-hover" >

      <tr>
       <th>Nombre</th>
       <th>Categoria</th>
       <th>Elemento Tec.</th>
        </tr>
     <tr><td>X</td><td>X</td><td>X</td></tr>

     <tr><td>X</td><td>X</td><td>X</td></tr>

     </table>
  </div>
  </div>

  <p></p>


  <table>
  <tr>
  <td class="col-xs-8">
    <div class="form-group">
      <label for="inputNombreMo" class="col-xs-3 control-label">Nombre:</label>
      <div class="col-xs-7">
        <input type="text" class="form-control" id="inputNombreMo" placeholder="Nombre " disabled="">
      </div>
      
    </div>

    <div class="form-group">
      <label for="inputNombreMo" class="col-xs-3 control-label">Categor&iacutea:</label>
      <div class="col-xs-7">
        <input type="text" class="form-control" id="inputCategoria" placeholder="Categoria" disabled="">
      </div>
      
    </div>

    <div class="form-group">
      <label for="inputNombreMo" class="col-xs-3 control-label">Elemento Tec.:</label>
      <div class="col-xs-7">
        <input type="text" class="form-control" id="inputElementoTec" placeholder="ElementoTec" disabled="">
      </div>
      
    </div>

    <div class="form-group">
    <label for="inputDescripcion" class="col-xs-3 control-label ">Descripci&oacuten:</label>
    <div class="col-xs-8">
      <textarea class="form-control" rows="4" type="text" class="form-control" id="inputDescripcion" placeholder="Descripcion" onkeypress="return justNumbers(event);" disabled=""></textarea>
    </div>
  </div>

   
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
                <label for="inputCI" class="col-xs-6 col-xs-offset-2 control-label">¿Esta seguro de eliminar este ejercicio?</label>
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