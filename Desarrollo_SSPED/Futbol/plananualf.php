<div class="col-xs-12">
    <br><br>
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
      <li role="presentation" class="active"><a href="#planificacion" aria-controls="planificacion" role="tab" data-toggle="tab">Planficacion</a></li>
      <li role="presentation"><a href="#periodos" aria-controls="periodos" role="tab" data-toggle="tab">Periodos y Etapas</a></li>
      <li role="presentation"><a href="#mesociclos" aria-controls="mesociclos" role="tab" data-toggle="tab">Mesociclos</a></li>
      <li role="presentation"><a href="#direcciones" aria-controls="direcciones" role="tab" data-toggle="tab">Direcciones</a></li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Primer Panel -->
      <div role="tabpanel" class="tab-pane active" id="planificacion">
      <br>
        <div class="col-xs-2">
          <label><strong>Planificacion:</strong></label>
        </div>  
        <div class="col-xs-3">
          <label>Anual</label>
        </div>
        <div class="col-xs-12">
        <br>
          <form class="form-inline">
            <div class="form-group col-xs-offset-2 col-xs-9">
              <label>Fecha de inicio de preparacion:</label>
              <input type="text" class="form-control" id="inputfechainicio" placeholder="Fecha de inicio">
            </div>
            
            <div class="col-xs-12">
            <br><br>
              <div class="form-group col-xs-6">
                <div class="col-xs-4">
                  <label>Frecuencia Semanal:</label>
                </div>
                <div class="col-xs-2">
                  <select class="form-control">
                    <option>2 Dias</option>
                    <option>3 Dias</option>
                    <option>4 Dias</option>
                    <option>5 Dias</option>
                    <option>6 Dias</option>
                    <option>7 Dias</option>
                  </select>
                </div>
              </div>
            
              <div class="form-group col-xs-6">
                <div class="col-xs-4">
                  <label>Tiempo de Clase:</label>
                </div>
                <div class="col-xs-2">
                  <select class="form-control">
                    <option>60 Minutos</option>
                    <option>90 Minutos</option>
                    <option>120 Minutos</option>
                  </select>
                </div>
              </div>
          </div>
          
          <div class="col-xs-offset-1 col-xs-2">
          <br>
            <button type="button" class="form-control btn btn-primary">
              <span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span>
              <span class="hidden-xs">
                Calcular
              </span>
            </button>
          </div>
          
          <div class="form-group col-xs-7 col-xs-offset-5">
          <br>
            <div class="col-xs-4">
              <label>Cantidad de Semanas:</label>
            </div>
            <div class="col-xs-4">
              <input type="text" class="form-control" id="cantisemanas" placeholder="Cantidad de Semanas">
            </div>
          </div>

          <div class="form-group col-xs-7 col-xs-offset-5">  
            <div class="col-xs-4">
              <label>Cantidad de Dias:</label>
            </div>
            <div class="col-xs-4">
              <input type="text" class="form-control" id="cantidias" placeholder="Cantidad de Dias">
            </div>
          </div>

          <div class="form-group col-xs-7 col-xs-offset-5">            
            <div class="col-xs-4">
              <label>Tiempo Total:</label>
            </div>
            <div class="col-xs-4">
              <input type="text" class="form-control" id="tiempototal" placeholder="Tiempo Total">
            </div>
          </div>

          <div class="form-group col-xs-7 col-xs-offset-5">            
            <div class="col-xs-4">
              <label>Fecha Final:</label>
            </div>
            <div class="col-xs-4">
              <input type="text" class="form-control" id="fechafinal" placeholder="Fecha Final">
            </div>
          </div>

          <div class="col-xs-offset-9 col-xs-3">
          <br>
            <button type="button" class="form-control btn btn-success" disabled>
              <span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span>
              <span class="hidden-xs">
                Siguiente
              </span>
            </button>
          </div>

        </form>
      </div>
    </div>

    <!-- Segundo Panel -->
    <div role="tabpanel" class="tab-pane" id="periodos">   

      <h2>Registrar nuevo grupo</h2>

      <div class="row">
      <div class="col-md-6">
        <h3>Preparatorio</h3>

        <br>
        <br>

        <label class="radio-inline"><input type="radio" name="optradio">60 %</label>
        <label class="radio-inline"><input type="radio" name="optradio">50 %</label>
        <label class="radio-inline"><input type="radio" name="optradio">40 %</label>

        <br>
        <br>

        <label>Tiempo en semanas: </label>
        <label> 30 </label> Semanas.

        <br>
        <br>



        <div class="col-md-6">
          <h4>Preparacion General</h4>

          <br>

          <div class="radio">
            <label><input type="radio" name="optradio">60 %</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio">50 %</label>
          </div>
          <div class="radio disabled">
            <label><input type="radio" name="optradio">40 %</label>
          </div>

          <br>

          <label>Tiempo en semanas: </label>
          <label> 30 </label> Semanas.



          <br>
          <br>

          <label>Mesociclos:</label>
          <input type="text" class="form-control" id="imputCiclosPG">


        </div>
        <div class="col-md-6">
          <h4>Preparacion Especial</h4>

          <br>

          <div class="radio">
            <label><input type="radio" name="optradio">60 %</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio">50 %</label>
          </div>
          <div class="radio disabled">
            <label><input type="radio" name="optradio">40 %</label>
          </div>

          <br>

          <label>Tiempo en semanas: </label>
          <label> 30 </label> Semanas.


          <br>
          <br>

          <label>Mesociclos:</label>
          <input type="text" class="form-control" id="imputCiclosPE">

        </div>
      </div>

      <div class="col-md-6">
        <h3>Competitivo</h3>

        <br>
        <br>

        <label class="radio-inline"><input type="radio" name="optradio">60 %</label>
        <label class="radio-inline"><input type="radio" name="optradio">50 %</label>
        <label class="radio-inline"><input type="radio" name="optradio">40 %</label>

        <br>
        <br>

        <label>Tiempo en semanas: </label>
        <label> 30 </label> Semanas.

        <br>
        <br>


        <div class="col-md-6">
          <h4>Pre conpetitivo</h4>
          <br>

          <div class="radio">
            <label><input type="radio" name="optradio">60 %</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio">50 %</label>
          </div>
          <div class="radio disabled">
            <label><input type="radio" name="optradio">40 %</label>
          </div>

          <br>

          <label>Tiempo en semanas: </label>
          <label> 30 </label> Semanas.


          <br>
          <br>
          <br>

          <label>Mesociclos:</label>
          <input type="text" class="form-control" id="imputCiclosPC">

        </div>
        <div class="col-md-6">
          <h4>Competitivo</h4>
          <br>

          <div class="radio">
            <label><input type="radio" name="optradio">60 %</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio">50 %</label>
          </div>
          <div class="radio disabled">
            <label><input type="radio" name="optradio">40 %</label>
          </div>

          <br>

          <label>Tiempo en semanas: </label>
          <label> 30 </label> Semanas.


          <br>
          <br>
          <br>

          <label>Mesociclos:</label>
          <input type="text" class="form-control" id="imputCiclosC">

        </div>
      </div>

      </div>
      <br>
      <br>
      <div class="row">

        <div class="col-md-3 col-xs-offset-9 row">
          <button type="button" class="btn btn-success" data-dixsiss="modal" id="btnCotinnuar">Continuar</button>
        </div>

      </div>


    </div>

    <!-- Tercer Panel -->
    <div role="tabpanel" class="tab-pane" id="mesociclos">

        <div class="row">
          <!-- PRIMER TABLA-->
          <div class="col-md-6">
          <label>Preparacion General</label>

          <table class="table table-hover table-bordered">
            <thead>
              <tr>
                <th>Ciclo</th>
                <th>Tiempo</th> 
              </tr>
            </thead>

            <tbody id="cuerpoTablaPG">
              <tr>
                <td></td>
                <td></td>
              </tr>
            </tbody>

             
          </table>

          </div>
          <!-- SEGUNDA TABLA-->
          <div class="col-md-6">
          <label>Preparacion Especial</label>

          <table class="table table-hover table-bordered">
            <thead>
              <tr>
                <th>Ciclo</th>
                <th>Tiempo</th> 
              </tr>
            </thead>

            <tbody id="cuerpoTablaPE">
              <tr>
                <td></td>
                <td></td>
              </tr>
            </tbody>  
          </table>

          </div>
        </div>

        <!-- TERCERA TABLA-->
        <div class="row">
          <div class="col-md-6">
          <label>Pre conpetitivo</label>

          <table class="table table-hover table-bordered">
            <thead>
              <tr>
                <th>Ciclo</th>
                <th>Tiempo</th> 
              </tr>
            </thead>

              <tbody id="cuerpoTablaPC">
              <tr>
                <td></td>
                <td></td>
              </tr>
            </tbody>
          </table>

          </div>
          <!-- CUARTA TABLA-->
          <div class="col-md-6">
          <label>Conpetitivo</label>

          <table class="table table-hover table-bordered">
            <thead>
              <tr>
                <th>Ciclo</th>
                <th>Tiempo</th> 
              </tr>
            </thead>

            <tbody id="cuerpoTablaC">
              <tr>
                <td></td>
                <td></td>
              </tr>
            </tbody>
          </table>

          </div>
        </div>

        <div class="row">
          <div class="col-md-3 col-xs-offset-10 row">
            <button type="button" class="btn btn-success" data-dixsiss="modal" id="btnCotinnuar">Continuar</button>
          </div>
        </div>
    </div>

<!-- Cuarto Panel -->
<div role="tabpanel" class="tab-pane" id="direcciones">

  <!--  definicion de lugar (center) -->
  <div class="col-xs-12">
    <div class="jumbotron">
        <div class="media">
          <div class="media-center">
            <!-- armado de contenido de pestanas  -->
            <div class="tab-content">
              <!-- llamado a la pestana pes1.   -->
              <div id="pes1" class="tab-pane fade in active media-left">
              <!-- Contenedor de las divisiones (columnas de la de pestana) -->
                <div class="container">
                  <div class="row">

                  <!-- primera columna -->
                    <div class="col-xs-3">
                      <div class="container">
                        <div class="row">
                          <h5 align="center">Preparacion<BR>General</h5>
                          <div class="col-xs-8">
                            <div class="form-group" align="center">Tecnico</div>
                            <div class="form-group" align="center">Tecnico Fisico</div>
                            <div class="form-group" align="center">Tecnico Tactico</div>  
                            <div class="form-group" align="center">Pre<BR>Psicologica</div>
                            <div class="form-group" align="center">Total</div>
                          </div>
                          <div class="col-xs-4" style="line-height: 2.8">
                            <form class="form-inline text-left" role="form" name="colum1" action="" method="post">
                              <input type="text" class="form-control" name="sum[]" placeholder="0" onkeyup="sumar_col1(this);" maxlength="2" size="1"onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" >
                              <input type="text" class="form-control" name="sum[]" placeholder="0" onkeyup="sumar_col1(this);" maxlength="2" size="1"onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;">
                              <input type="text" class="form-control" name="sum[]" placeholder="0" onkeyup="sumar_col1(this);" maxlength="2" size="1"onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;">
                              <input type="text" class="form-control" name="sum[]" placeholder="0" onkeyup="sumar_col1(this);" maxlength="2" size="1"onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;">
                              <input type="text" class="form-control" id="res_col1" name="colum1" placeholder="0" maxlength="3" size="1" disabled/>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>

                  <!-- segunda columna -->
                  <div class="col-md-3">
                    <div class="container">
                      <div class="row">
                        <h5 align="center">Preparacion<BR>General</h5>
                        <div class="col-xs-8">
                          <div class="form-group" align="center">Tecnico</div>
                          <div class="form-group" align="center">Tecnico Fisico</div>
                          <div class="form-group" align="center">Tecnico Tactico</div>  
                          <div class="form-group" align="center">Pre<BR>Psicologica</div>
                          <div class="form-group" align="center">Total</div>
                        </div>
                        <div class="col-xs-4" style="line-height: 2.8">
                          <form class="form-inline text-left" role="form" name="colum2" action="" method="post" >                         
                            <input type="text" class="form-control" name="sum[]" placeholder="0" onkeyup="sumar_col2(this);" maxlength="2" size="1"onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;">
                            <input type="text" class="form-control" name="sum[]" placeholder="0" onkeyup="sumar_col2(this);" maxlength="2" size="1"onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;"> 
                            <input type="text" class="form-control" name="sum[]" placeholder="0" onkeyup="sumar_col2(this);" maxlength="2" size="1"onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;">
                            <input type="text" class="form-control" name="sum[]" placeholder="0" onkeyup="sumar_col2(this);" maxlength="2" size="1"onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;">
                            <input type="text" class="form-control" id="res_col2" name="colum2" placeholder="0" maxlength="3" size="1" disabled/>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- tercera columna -->
                  <div class="col-md-3">
                    <div class="container">
                      <div class="row">
                      <h5 align="center">Preparacion<BR>General</h5>
                        <div class="col-xs-8">
                          <div class="form-group" align="center">Tecnico</div>
                          <div class="form-group" align="center">Tecnico Fisico</div>
                          <div class="form-group" align="center">Tecnico Tactico</div>  
                          <div class="form-group" align="center">Pre<BR>Psicologica</div> 
                          <div class="form-group" align="center">Total</div>
                        </div>
                        <div class="col-xs-4" style="line-height: 2.8">
                          <form class="form-inline text-left" role="form" name="colum3" action="" method="post">                
                            <input type="text" class="form-control" name="sum[]" placeholder="0" onkeyup="sumar_col3(this);" maxlength="2" size="1"onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;">
                            <input type="text" class="form-control" name="sum[]" placeholder="0" onkeyup="sumar_col3(this);" maxlength="2" size="1"onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;"> 
                            <input type="text" class="form-control" name="sum[]" placeholder="0" onkeyup="sumar_col3(this);" maxlength="2" size="1"onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;">
                            <input type="text" class="form-control" name="sum[]" placeholder="0" onkeyup="sumar_col3(this);" maxlength="2" size="1" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;">
                            <input type="text" class="form-control" id="res_col3" name="colum3" placeholder="0" maxlength="3" size="1" disabled/>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- cuarta columna -->
                  <div class="col-md-3">
                    <div class="container">
                      <div class="row">
                      <h6 align="center">Preparacion<BR>General</h6>
                        <div class="col-xs-8">
                          <div class="form-group" align="center">Tecnico</div>
                          <div class="form-group" align="center">Tecnico Fisico</div>
                          <div class="form-group" align="center">Tecnico Tactico</div>  
                          <div class="form-group" align="center">Pre<BR>Psicologico</div>
                          <div class="form-group" align="center">Total</div>
                        </div>
                        <div class="col-xs-4" style="line-height: 2.8">
                          <form class="form-inline text-left" role="form" name="colum4" action="" method="post">                           
                            <input type="text" class="form-control" name="sum[]" placeholder="0" onkeyup="sumar_col4(this);" maxlength="2" size="1"onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;">
                            <input type="text" class="form-control" name="sum[]" placeholder="0" onkeyup="sumar_col4(this);" maxlength="2" size="1"onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;"> 
                            <input type="text" class="form-control" name="sum[]" placeholder="0" onkeyup="sumar_col4(this);" maxlength="2" size="1"onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;">
                            <input type="text" class="form-control" name="sum[]" placeholder="0" onkeyup="sumar_col4(this);" maxlength="2" size="1"onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;">
                            <input type="text" class="form-control" id="res_col4" name="colum4" placeholder="0" maxlength="3" size="1" disabled/>
                          </form>
                        </div>       
                      </div>
                    </div>
                  </div>

                </div>  
                <br>

              <div align="right">
                <form id="form" name="gua">
                  <input type="button" class="btn btn-primary" onclick="guardar()" value="Guardar" method="post" value="POST VAL">
                  <input type="button" class="btn btn-success" onclick="#" name="proyecto" value="Planificacion" id="to" value="POST VAL" disabled>
                </form>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</div>
</div>
<script type="text/javascript" src="/Desarrollo_SSPED\Futbol/cargarTablasProgramacion.js"></script>