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

<div class="col-xs-7">
<div class="panel panel-default">
  <div class="panel-heading">Futbol</div>
  <div class="panel-body">

<h3>Bienvenido!</h3>
  <div class="panel panel-default">
     <div class="panel-body">
        Vista principal pantalla futbol
      </div>
    </div>
<form class="form-horizontal" name="modificar" id="modificar">
  
  <div class="form-group">
    <label for="inputNombreMo" class="col-xs-2 control-label" id="buscarMod1" >   </label>
    <div class="col-xs-7">
      <input type="text" class="form-control" id="inputNombre" placeholder="Nombre de grupo" >
    </div>
    
      <button type="button" class="btn btn-default ">
        <span class="glyphicon glyphicon-search " aria-hidden="true"></span>
        Buscar
      </button>
  </div>


 <div class="form-group">
    <div class="col-xs-offset-2 col-xs-10">
      <label class="radio-inline" >
        <input type="radio" name="inlineRadioOptionsMod" id="inlineRadio1" value="option1"  >Nombre
        </label>
        <label class="radio-inline">
        <input type="radio" name="inlineRadioOptionsMod" id="inlineRadio2" value="option2"  >Grupo
      </label>
      <label class="radio-inline">
        <input type="radio" name="inlineRadioOptionsMod" id="inlineRadio2" value="option2"  >Categoria
      </label>
  </div>
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


</form>
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