$(document).on('ready',funcPrincipal);

//LO PRIMERO QUE DEBE HACER ES CARGAR EL SELECT CON JSON... 

// DE LA FUNCION CHANGE DE CADA MICROCICLO SE DEBE CAMBIAR ESTE VALOR PARA QUE SOLO SE PUEDAN SELECCIONAR ESA CANTIDAD DE DIAS.
// NO DEBE DEJAR SELECCIOANRSE MAS DE ESTA CANTIDA DE DIAS. 
var diasPosibles=3;

//cantidad de dias marcados;
var diasMarcados=0;

// BOTON PARA CARGAR LA TABLA
var btnCargar=$("#btnCargar");

// SELECT SELECCIONADOR DEL MICROCICLO
var selectMicrociclo=$("#microciclo");



var cuerpoTablaDias=$("#cuerpoTablaDias");
var cabeceraTablaDias=$("#cabeceraTablaDias");


function funcPrincipal(){

	//EVITAR QUE SE MARQUEN MAS DIAS DE LOS DECEADOS
	verificarDias();

	//FUNCION DE LA ACCION DEL BOTON
	btnCargar.click(generarTabla);

	// SE CARGARAN LOS DATOS DEPENDIENDO DEL MICROCILO SELECCIONADO. USARA JSON DE NUEVO PARA OBTENER LOS VALORES DE LOS QUE CARGA.
	selectMicrociclo.change(function() {
  		alert( "Handler for .change() called." );
	});



}

// ESTA FUNCION AYUDA A VEREIFICAR QUE LA CANTIDAD DE DIAS MARCADOS EN LOS CHECK BOXS NO PASEN EL LIMITE DE DIAS DE ENTRENAMIENTO PARA ESA SEMANA.
function verificarDias(){


	$("#checkLu").change(function() {
    	if(this.checked) {
        	diasMarcados++;
        	alert(diasMarcados);
    	}else{
    		diasMarcados--;
    		alert(diasMarcados);
    	}
	});

}


function verificarDias(){
	$("#checkDo, #checkSa, #checkVi, #checkJu, #checkMi, #checkMa, #checkLu").change(function(){
		if(this.checked) {
			if (diasMarcados<diasPosibles){
       			diasMarcados++;
			}
			else{
				this.checked=false;
			}
    	}else{
    		diasMarcados--;
    	}		
	});
}


function generarTabla(){
	// PARA LA CABECERA DE LA TABLA
	cabeceraTablaDias.find('th').remove();
	cabeceraTablaDias.find('tr').remove();

	cabeceraTablaDias.append('<tr>');
	cabeceraTablaDias.append('<th> Nombre </th>');

	if ($("#checkLu").is(':checked')){
		cabeceraTablaDias.append('<th> Lun </th>');
	}
	if ($("#checkMa").is(':checked')){
		cabeceraTablaDias.append('<th> Mar </th>');
	}
	if ($("#checkMi").is(':checked')){
		cabeceraTablaDias.append('<th> Mie </th>');
	}
	if ($("#checkJu").is(':checked')){
		cabeceraTablaDias.append('<th> Jue </th>');
	}
	if ($("#checkVi").is(':checked')){
		cabeceraTablaDias.append('<th> Vie </th>');
	}
	if ($("#checkSa").is(':checked')){
		cabeceraTablaDias.append('<th> Sab </th>');
	}
	if ($("#checkDo").is(':checked')){
		cabeceraTablaDias.append('<th> Dom </th>');
	}

	cabeceraTablaDias.append('<th> T.T </th>');
	cabeceraTablaDias.append('</tr>'); 


	// PARA LA CABECERA DE LA TABLA
	cuerpoTablaDias.find('tr').remove();
	cuerpoTablaDias.find('td').remove();
	cuerpoTablaDias.append('<tr>');
	cuerpoTablaDias.append('<td> Tecnico </td>');
	for (i=1;i<=diasPosibles;i++){
		cuerpoTablaDias.append('<td> <input type="text"> </td>');
    }
    cuerpoTablaDias.append('<td> --- </td>');
    cuerpoTablaDias.append('</tr>');
    cuerpoTablaDias.append('<tr>');
    cuerpoTablaDias.append('<td> Tecnico Fisico </td>');
	for (i=1;i<=diasPosibles;i++){
		cuerpoTablaDias.append('<td> <input type="text"> </td>');
    }
    cuerpoTablaDias.append('<td> --- </td>');
    cuerpoTablaDias.append('</tr>');
    cuerpoTablaDias.append('<tr>');
    cuerpoTablaDias.append('<td> Tecnico Tactico</td>');
	for (i=1;i<=diasPosibles;i++){
		cuerpoTablaDias.append('<td> <input type="text"> </td>');
    }
    cuerpoTablaDias.append('<td> --- </td>');
    cuerpoTablaDias.append('</tr>');
    cuerpoTablaDias.append('<tr>');
    cuerpoTablaDias.append('<td> Accioines Psicologicas </td>');
	for (i=1;i<=diasPosibles;i++){
		cuerpoTablaDias.append('<td> <input type="text"> </td>');
    }
    cuerpoTablaDias.append('<td> --- </td>');
    cuerpoTablaDias.append('</tr>');
    cuerpoTablaDias.append('<tr>');
    cuerpoTablaDias.append('<td> Competencias </td>');
	for (i=1;i<=diasPosibles;i++){
		cuerpoTablaDias.append('<td> <input type="text"> </td>');
    }
    cuerpoTablaDias.append('<td> --- </td>');
    cuerpoTablaDias.append('</tr>');

	cuerpoTablaDias.append('<tr> </tr>');    

    cuerpoTablaDias.append('<tr>');
    cuerpoTablaDias.append('<td> Suma Total </td>');
	for (i=1;i<=diasPosibles;i++){
		cuerpoTablaDias.append('<td> <input type="text"> </td>');
    }
    cuerpoTablaDias.append('<td> --- </td>');
    cuerpoTablaDias.append('</tr>');

	
}




