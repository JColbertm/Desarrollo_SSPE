<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="/Desarrollo_SSPED/bootstrap-3.3.6-dist/css/bootstrap.css">
    <script src="/Desarrollo_SSPED/bootstrap-3.3.6-dist/jquery.js"></script>
    <script src="/Desarrollo_SSPED/bootstrap-3.3.6-dist/js/bootstrap.js"></script>
    <script type="text/javascript">
    function sumar_col1(c)
    {
      var subtotal = 0;
      campo = c.form;
        if(!/^\d*$/.test(c.value)) return;
            for (var i = 0; i < campo.length-1; i++) 
            {
                if (!/^\d+$/.test(campo[i].value)) continue;
                subtotal += parseInt(campo[i].value);
            }
           
            if(subtotal==100){
            document.getElementById('res_col1').value = 100;
            document.getElementById('res_col1').style.backgroundColor="#66ff33";
            }
          else{
               if(subtotal<100)
                  {
                    if(subtotal==0)
                    {
                      document.getElementById('res_col1').value = 0;
                    }
                    else{
                      document.getElementById('res_col1').style.backgroundColor="";
                      document.getElementById('res_col1').value = 100-subtotal;
                      }
                  }
                  else{
                    document.getElementById('res_col1').value = subtotal-100;
                    document.getElementById('res_col1').style.backgroundColor="#ff4d4d";
                    }
              }
    }
  //suma columna 2
    function sumar_col2(c){
    var subtotal = 0;
    campo = c.form;
      if(!/^\d*$/.test(c.value)) return;
          for (var i = 0; i < campo.length-1; i++) {
              if (!/^\d+$/.test(campo[i].value)) continue;
                  subtotal += parseInt(campo[i].value);
          }
          if(subtotal==100)
            {
          document.getElementById('res_col2').value = 100;
          document.getElementById('res_col2').style.backgroundColor="#66ff33";
        }
          else{
                if(subtotal<100)
                  {
                    if(subtotal==0)
                    {
                      document.getElementById('res_col2').value = 0;
                    }
                    else{
                      document.getElementById('res_col2').style.backgroundColor="";
                      document.getElementById('res_col2').value = 100-subtotal;
                      }
                  }
                  else{
                    document.getElementById('res_col2').value = subtotal-100;
                    document.getElementById('res_col2').style.backgroundColor="#ff4d4d";
                    }
            }
    }
  //suma columna 3
    function sumar_col3(c){
    var subtotal = 0;
    campo = c.form;
      if(!/^\d*$/.test(c.value)) return;
          for (var i = 0; i < campo.length-1; i++) {
              if (!/^\d+$/.test(campo[i].value)) continue;
                  subtotal += parseInt(campo[i].value);
          }
         if(subtotal==100)
            {
            document.getElementById('res_col3').value = 100;
            document.getElementById('res_col3').style.backgroundColor="#66ff33";
           }
           else{
               if(subtotal<100)
                  {
                    if(subtotal==0)
                    {
                      document.getElementById('res_col3').value = 0;
                    }
                    else{
                      document.getElementById('res_col3').style.backgroundColor="";
                      document.getElementById('res_col3').value = 100-subtotal;
                      }
                  }
                  else{
                    document.getElementById('res_col3').value = subtotal-100;
                    document.getElementById('res_col3').style.backgroundColor="#ff4d4d";
                    }
              }
    }
  //suma columna 4
    function sumar_col4(c){
    var subtotal = 0;
    campo = c.form;
      if(!/^\d*$/.test(c.value)) return;
          for (var i = 0; i < campo.length-1; i++) {
              if (!/^\d+$/.test(campo[i].value)) continue;
                  subtotal += parseInt(campo[i].value);
          }
        if(subtotal==100)
          {
          document.getElementById('res_col4').value = 100;
          document.getElementById('res_col4').style.backgroundColor="#66ff33";
          }
        else{
               if(subtotal<100)
                  {
                    if(subtotal==0)
                    {
                      document.getElementById('res_col4').value = 0;
                    }
                    else{
                      document.getElementById('res_col4').style.backgroundColor="";
                      document.getElementById('res_col4').value = 100-subtotal;
                      }
                  }
                  else{
                    document.getElementById('res_col4').value = subtotal-100;
                    document.getElementById('res_col4').style.backgroundColor="#ff4d4d";
                    }
          }
    }
    function guardar()
{
  if(document.colum1.colum1.value == 100 && document.colum2.colum2.value == 100 && document.colum3.colum3.value == 100 && document.colum4.colum4.value == 100){
        document.gua.to.disabled=false;
    }
    else{
        document.gua.to.disabled=true;
    }
}
  
    </script>
    
</head>
<body>
<!--  llamada a la cabecera -->
	<?php 
		require_once $_SERVER["DOCUMENT_ROOT"]."/Desarrollo_SSPED/cabecera1.php";
 	?>

<!--  llamada al menu de opciones futbol -->
	<?php 
		require_once $_SERVER["DOCUMENT_ROOT"]."/Desarrollo_SSPED/Futbol/listabotones2.php";
 	?>

<!--  Contenedor de planificacion -->
	<div class="col-xs-7">
		<div class="panel panel-default">
  		<div class="panel-heading">
        Planificacion
      </div>
  			<div class="panel-body">
          <div>
            <h4>Planificacion de Entrenamiento</h4>
          </div>
	        <!--  Formulario de Busqueda -->
          <br>
				  <form class="form-horizontal">
          <div class="form-group">
            <label for="inputNombreMo" class="col-xs-offset-1 col-xs-2 control-label" id="buscarMod1" >Categoria:</label>
            <div class="col-xs-6">
              <input type="text" class="form-control" id="inputNombre" placeholder="Nombre de grupo" >
            </div>
            <div class="col-xs-3">
              <button  type="button" class="btn btn-default">
                <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                <span class="hidden-xs">
                  Buscar
                </span>
              </button>
            </div>
          </div>

          <div class="form-group">
            <div class="col-xs-offset-2 col-xs-10">
              <label class="radio-inline" >
                <input type="radio" name="radionom" id="inlineRadio1" value="nombre"  >Nombre
              </label>
              <label class="radio-inline">
                <input type="radio" name="radiocat" id="inlineRadio2" value="categoria"  >Categoria
              </label>
            </div>
          </div>
        
          <div>
            <center><h4>Datos del Grupo</h4></center>
          </div>

          <!--  Tabla de resultado de busqueda -->
	        <div class="col-xs-7">
          <br>
			      <table class="table table-hover">
              <thead>
                <tr>
                  <th >#</th><th>Grupo</th><th>Categoria</th><th>Jugadores</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td><td>Bolivar</td><td>sub-15</td><td>11</td>        
                </tr>
                <tr>
                  <td>2</td><td>Ideal Sport</td><td>sub-11</td><td>15</td>         
                </tr>
                <tr>
                  <td>3</td><td>Barcelona</td><td>sub-13</td><td>10</td>       
                </tr>
              </tbody>
            </table>
	       </div>

        <!--  formulario de muestra de informacion -->
        <br>
        <div class="col-xs-5">
          <form class="form-horizontal">
            <div class="form-group">              
              <label>Grupo:</label>  
                <input type="text" class="form-control" id="inputgrupo" placeholder="Grupo">              
            </div> 
            <div class="form-group">              
              <label>Categoria:</label>   
                <input type="text" class="form-control" id="inputcategoria" placeholder="Categoria">              
            </div>                 
          </form>
        </div> 

        <!-- Tipo de Planificacion -->
        <div class="col-xs-12">
          <h3>Planificacion</h3>
          <br>
          <div class="col-xs-3">
            <button type="button" class="form-control" disabled="disabled">
              <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
              <span class="hidden-xs">
                Anual
              </span>
            </button>  
          </div>
      
          <div class="col-xs-3">
            <button type="button" class="form-control" disabled="disabled">
              <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
              <span class="hidden-xs">
                Semestral
              </span>
            </button>  
          </div>
        
          <div class="col-xs-3">
            <button type="button" class="form-control" disabled="disabled">
              <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
              <span class="hidden-xs">
                Trimestral
              </span>
            </button>  
          </div>
      
          <div class="col-xs-3">
            <button type="button" class="form-control" disabled="disabled">
              <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
              <span class="hidden-xs">
                Competen
              </span>
            </button>  
          </div>
        </div>
      </form>
    
      <!-- Planificacion -->
      <?php 
        require_once $_SERVER["DOCUMENT_ROOT"]."/Desarrollo_SSPED/Futbol/plananualf.php";
      ?>
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