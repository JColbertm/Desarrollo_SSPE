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

    </div>

    <!-- Tercer Panel -->
    <div role="tabpanel" class="tab-pane" id="mesociclos">

      <!-- PRIMER TABLA-->
      <div class="col-md-6">
        <label>Preparacion General</label>
        <table class="table table-hover">
          <thead>
            <tr>
              <th>Ciclo</th>
              <th>Tiempo</th> 
            </tr>
          </thead>

          <tbody id="cuerpoTabla1">
            <tr>
              <td>Juan Perez Seras</td>
              <td>5</td>
            </tr>
          </tbody>
        </table>
      </div>

      <!-- SEGUNDA TABLA-->
      <div class="col-md-6">
        <label>Preparacion Especial</label>
        <table class="table table-hover">
          <thead>
            <tr>
              <th>Ciclo</th>
              <th>Tiempo</th> 
            </tr>
          </thead>

          <tbody id="cuerpoTabla2">
            <tr>
              <td>Juan Perez Seras</td>
              <td>5</td>
            </tr>
          </tbody>  
        </table>
      </div>
    
      <!-- TERCERA TABLA-->
      <div class="col-md-6">
        <label>Pre conpetitivo</label>
        <table class="table table-hover">
          <thead>
            <tr>
              <th>Ciclo</th>
              <th>Tiempo</th> 
            </tr>
          </thead>

          <tbody id="cuerpoTabla3">
            <tr>
              <td>Juan Perez Seras</td>
              <td>5</td>
            </tr>
          </tbody>
        </table>
      </div>

      <!-- CUARTA TABLA-->
      <div class="col-md-6">
        <label>Conpetitivo</label>
        <table class="table table-hover">
          <thead>
          <tr>
            <th>Ciclo</th>
            <th>Tiempo</th> 
          </tr>
          </thead>

          <tbody id="cuerpoTabla4">
          <tr>
            <td>Juan Perez Seras</td>
            <td>5</td>
          </tr>
          </tbody>
        </table>
      </div>
    </div>

<!-- Cuarto Panel -->
<div role="tabpanel" class="tab-pane" id="direcciones">

  <!--  definicion de lugar (center) -->
  <div id="home" class="tab-pane fade in active">
                  <div class="col-md-3">
                            <div class="row">
                                    <div><h4> PREPARACION<BR>GENERAL</h4>
                                <div class="col-xs-7 col-md-7">
                              <div class="form-group" align="center" ><h6>TECNICO</h6></div>
                              <div class="form-group" align="center" ><h6>TECNICO FISICO</h6></div>
                              <div class="form-group" align="center"><h6>TECNICO TACTICO</h6></div>  
                              <div class="form-group" align="center"><h6>PRE PSICOLOGICO</h6></div>
                              <div class="form-group" align="center" ><h6>TOTAL</h6></div>
                                </div>
                                <div class="col-xs-5 col-md-1"style="line-height: 2.8" >
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
                  <div class="col-md-3">
                            <div class="row">
                                    <div><h4> PREPARACION<BR>ESPECIAL</h4>
                                <div class="col-xs-7 col-md-7">
                              <div class="form-group" align="center" ><h6>TECNICO</h6></div>
                              <div class="form-group" align="center" ><h6>TECNICO FISICO</h6></div>
                              <div class="form-group" align="center"><h6>TECNICO TACTICO</h6></div>  
                              <div class="form-group" align="center"><h6>PRE<BR>PSICOLOGICO</h6></div>
                              <div class="form-group" align="center" ><h6>TOTAL</h6></div>
                                </div>
                                <div class="col-xs-5 col-md-1"style="line-height: 2.8" >
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
                  <div class="col-md-3">
                            <div class="row">
                                    <div><h4> PRE<BR>COMPETITIVO</h4>
                                <div class="col-xs-7 col-md-7">
                              <div class="form-group" align="center" ><h6>TECNICO</h6></div>
                              <div class="form-group" align="center" ><h6>TECNICO FISICO</h6></div>
                              <div class="form-group" align="center"><h6>TECNICO TACTICO</h6></div>  
                              <div class="form-group" align="center"><h6>PRE<BR>PSICOLOGICO</h6></div>
                              <div class="form-group" align="center" ><h6>TOTAL</h6></div>
                                </div>
                                <div class="col-xs-5 col-md-1"style="line-height: 2.8" >
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
                  <div class="col-md-3">
                            <div class="row">
                                    <div><h4><BR>COMPETITIVO</h4>
                                <div class="col-xs-7 col-md-7">
                              <div class="form-group" align="center" ><h6>TECNICO</h6></div>
                              <div class="form-group" align="center" ><h6>TECNICO FISICO</h6></div>
                              <div class="form-group" align="center"><h6>TECNICO TACTICO</h6></div>  
                              <div class="form-group" align="center"><h6>PRE<BR>PSICOLOGICO</h6></div>
                              <div class="form-group" align="center" ><h6>TOTAL</h6></div>
                                </div>
                                <div class="col-xs-5 col-md-1"style="line-height: 2.8" >
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
            <br>
                  <div align="right">
                    <form id="form" name="gua">
                      <input type="button" class="btn btn-success" onclick="guardar()" value="Guardar" method="post" value="POST VAL"/>
                      <input type="button" class="btn btn-success" onclick="#" name="proyecto" value="Proyecto" id="to" value="POST VAL" disabled />
                    </form>
                  </div>
                  </div>
</div>
</div>
</div>

