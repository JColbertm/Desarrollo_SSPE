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

    <!-- modificar label al presionar un radio Modificar -->  
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
    require_once $_SERVER["DOCUMENT_ROOT"]."/Desarrollo_SSPED/Futbol/listabotones2.php";
  ?>


<!-- Contenedor Pestaña ABM GRUPOS -->
<div class="col-xs-7">
<div class="panel panel-default">
  <div class="panel-heading">Administracion de grupos</div>
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
<h4>Registrar nuevo grupo</h4>

<form class="form-horizontal">  
<br>
  <div class="form-group">
    <label class="col-xs-offset-1 col-xs-2 control-label">Nombre:</label>
    <div class="col-xs-7">
      <input required type="text" class="form-control" id="inputNombre" placeholder="Nombre del grupo">
    </div>
  </div>

  <div class="form-group">
    <label class="col-xs-offset-1 col-xs-2 control-label">Categoria:</label>
    <div class="col-xs-3">
      <select class="form-control">
        <option></option>
        <option>Sub 5</option>
        <option>Sub 7</option>
        <option>Sub 9</option>
        <option>Sub 11</option>
        <option>Sub 13</option>
        <option>Sub 15</option>
        <option>Sub 17</option>
      </select>
    </div>
  </div>

  <div class="form-group">
    <label class="col-xs-offset-1 col-xs-2 control-label">Jugadores:</label>
    <div class="col-xs-7">
      <input required type="text" class="form-control" id="inputJugadores" placeholder="Cantidad de jugadores" onkeypress="return justNumbers(event); ">
    </div>
  </div>

  
  <div class="form-group">
    <div class="col-xs-offset-3 col-xs-10">
      <button type="button" class="btn btn-primary">Limpiar</button>
    </div>
  </div>

  <div class="form-group">
    <div class="col-xs-offset-9 col-xs-2">
      <button type="submit" class="btn btn-success">Registrar</button>
    </div>
  </div>
</form>
 <!-- FIN FORM CREAR GRUPOS -->

 </div>

<!-- Fin Contenido Pestaña registrar grupo -->

<!--  Contenido Pestaña modificar grupo -->

 <div class="tab-pane fade" id="tabs-second">


  <!-- FORM MODIFICAR GRUPOS -->
<h4>Modificion de grupo</h4>
<form class="form-horizontal" name="modificar" id="modificar">
  <br>
  <div class="form-group">
    <label for="inputNombreMo" class="col-xs-offset-1 col-xs-2 control-label" id="buscarMod1" >Categoria:</label>
    <div class="col-xs-6">
      <input type="text" class="form-control" id="inputNombre" placeholder="Nombre de grupo" >
    </div>
    <div class="col-xs-3">
      <button type="button" class="btn btn-default ">
        <span class="glyphicon glyphicon-search " aria-hidden="true"></span>
        Buscar
      </button>
    </div>
  </div>


 <div class="form-group">
    <div class="col-xs-offset-2 col-xs-10">
      <label class="radio-inline" >
        <input type="radio" name="inlineRadioOptionsMod" id="inlineRadio1" value="option1"  >Nombre
        </label>
        <label class="radio-inline">
        <input type="radio" name="inlineRadioOptionsMod" id="inlineRadio2" value="option2"  >Categoria
      </label>
  </div>
</div>

  <div class="form-group">

  <div class="col-xs-offset-2 col-xs-8">
    <br>
      <table class="table table-hover">
        <thead>
          <tr>
            <th>Grupo</th><th>Categoria</th><th>Jugadores</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Bolivar</td><td>sub-15</td><td>11</td>        
          </tr>
          <tr>
            <td>Ideal Sport</td><td>sub-11</td><td>15</td>         
          </tr>
          <tr>
            <td>Barcelona</td><td>sub-13</td><td>10</td>       
          </tr>
        </tbody>
      </table>
    </div>

  </div>

  <div>
    <center><h4>Datos del Grupo</h4></center>
  </div>
  
  <br>
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
      <input type="text" class="form-control" id="inputJugadores" placeholder="Jugadores" onkeypress="return justNumbers(event);">
    </div>
  </div>

  

  
  <div class="form-group">
    <div class="col-xs-offset-4 col-xs-10">
      <button type="button" class="btn btn-primary">Limpiar</button>
    </div>
  </div>

  <div class="form-group">
    <div class="col-xs-offset-9 col-xs-2">
      <button type="button" class="btn btn-success">Modificar</button>
    </div>
  </div>
</form>
<!-- FIN FORM MODIFICAR GRUPOS -->
 </div>
<!--  Fin Contenido Pestaña modificar grupo -->


 <div class="tab-pane fade" id="tabs-third">


  <!-- FORM ELIMINAR GRUPOS -->
<h4>Eliminar grupo</h4>
  <form class="form-horizontal" name="eliminar">
  <br>
   <div class="form-group">
     <label for="inputNombre" class="col-xs-offset-1 col-xs-2 control-label" id="label"> Nombre:  </label>
     <div class="col-xs-6">
        <input type="text" class="form-control" id="inputNombre" placeholder="Nombre de grupo">
      </div>  
    <div class="col-xs-3">
      <button type="button" class="btn btn-default">
        <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
      Buscar
      </button>
    </div>
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
    <br>
      <table class="table table-hover">
        <thead>
          <tr>
            <th>Grupo</th><th>Categoria</th><th>Jugadores</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Bolivar</td><td>sub-15</td><td>11</td>        
          </tr>
          <tr>
            <td>Ideal Sport</td><td>sub-11</td><td>15</td>         
          </tr>
          <tr>
            <td>Barcelona</td><td>sub-13</td><td>10</td>       
          </tr>
        </tbody>
      </table>
    </div>
  </div>


  <div>
    <center><h4>Datos del Grupo</h4></center>
  </div>
<!-- textbox -->
    <br>
    <div class="form-group">
      <label for="inputNombre" class="col-xs-offset-1 col-xs-3 control-label">Nombre:</label>
        <div class="col-xs-5">
          <input type="text" class="form-control" id="inputNombre" placeholder="Nombre" disabled>
        </div>
    </div>
   <div class="form-group">
    <label for="inputCategoria" class="col-xs-offset-1 col-xs-3 control-label">Categoria:</label>
      <div class="col-xs-5">
        <input type="text" class="form-control" id="inputCategoria" placeholder="Categoria" disabled>
      </div>
    </div>
   <div class="form-group"> 
    <label for="inputJugadores" class="col-xs-offset-1 col-xs-3 control-label">Cant. Jugarores:</label>
    <div class="col-xs-5">
      <input type="text" class="form-control" id="inputJugadores" placeholder="Jugadores" disabled>
    </div>
  </div>

  



  <div class="form-group">
    <div class="col-xs-offset-4 col-xs-10">
      <button type="button" class="btn btn-primary">Limpiar</button>
    </div>
  </div>

<!-- Boton eliminar -->

<div class="form-group">
  <div class="col-xs-offset-9 col-xs-2">
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
                <label class="control-label col-xs-offset-1 col-xs-10">Seguro de eliminar este grupo?</label>
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
  </body>
<!--  llamada al pie de pagina -->
  <?php 
    require_once $_SERVER["DOCUMENT_ROOT"]."/Desarrollo_SSPED/pie1.php";
  ?>

</body>
</html>