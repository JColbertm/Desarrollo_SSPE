$(document).on('ready',funcPrincipal);

//CANTIDAD DE CICLOS
var cantidadPG=5;
var cantidadPE=3;
var cantidadPC=2;
var cantidadC=6;

var cuerpoTablaPG=$("#cuerpoTablaPG");
var cuerpoTablaPE=$("#cuerpoTablaPE");
var cuerpoTablaPC=$("#cuerpoTablaPC");
var cuerpoTablaC=$("#cuerpoTablaC");

//VALORES TOTALES DE LA SUMA EN LAS TABLAS
var totalPG=0;
var totalPE=0;
var totalPC=0;
var totalC=0;

//VALOR ESPERADO POR CICLO
var esperadoPG=10;
var esperadoPE=10;
var esperadoPC=10;
var esperadoC=10;

var btnContinuar=$("#btnCotinnuar");



function funcPrincipal(){


	btnContinuar.on( "click", function(){
		// OBTENER LOS CALORES DE LOS INPUTS DE TEXTO
		esperadoPG=$("#imputTiempoPG").val();
		cantidadPG=$("#imputCiclosPG").val();

		esperadoPE=$("#imputTiempoPE").val();
		cantidadPE=$("#imputCiclosPE").val();

		esperadoPC=$("#imputTiempoPC").val();
		cantidadPC=$("#imputCiclosPC").val();

		esperadoC=$("#imputTiempoC").val();
		cantidadC=$("#imputCiclosC").val();

		//VERIFICAR QUE LOS DATOS SEAN CORRECTOS: QUE EL TIEMPO DE MESES NO SEA MENOR A LA CANTIDAD DE MESOCICLOS, 
		//Y QUE LA CANTIDAD DE TIEMPO NO SEA MAYOR A LA CANTIDAD DE MESOCICLOS POR 6, QUE ES POR AHORA LA MAXIMA
		//CANTIDAD DE TIEMPO ESTABLECIDO POR MESOCICLO.

			if (esperadoPG<cantidadPG){
			alert("Verifique que la cantidad de mesocilios sea por lo minimo igual al tiempo estimado en meses.");
		}else if (esperadoPG>cantidadPG*6){
				alert("Verifique que la cantidad de tiempo pueda abarcarse en la cantidad de mesociclos. ")
			}else{
				CargarTablasPG();
				CargarTablasPE();
				CargarTablasPC();
				CargarTablasC();
			}
		//LLAMAR A LA CREACION DE NUEVO DE LAS TABLAS.
	});
	

}

//------------ PARA LA PRIMERA TABLA
function CargarTablasPG(){
	cuerpoTablaPG.find('tr').remove();
	cuerpoTablaPG.find('td').remove();
	for (i=1;i<=cantidadPG;i++){
        cuerpoTablaPG.append('<tr>'+
        	'<td>' + i + '</td>'+
            '<td> <select class="form-control" id="select" onchange="calculototalPG()">'+
	            '<option>1</option>'+
				'<option>2</option>'+
				'<option>3</option>'+
				'<option>4</option>'+
				'<option>5</option>'+
				'<option>6</option>'+
			'</select> </td>'+
            '</tr>');
	}

	cuerpoTablaPG.append('<tr>'+
		'<td> Total </td>'+
		'<td> <label for="lbltotalPG">'+totalPG+'</label></td>'+
		'</tr>');

	calculototalPG();
}
function calculototalPG(){
	totalPG=0;
	$('#cuerpoTablaPG tr').each(function(){
		$(this).find('td select').each(function(){
			totalPG=totalPG + parseInt($(this).find('option:selected').text());
    	})
	})
	$("label[for='lbltotalPG']").text(totalPG);

	if (totalPG==esperadoPG){
		$("label[for='lbltotalPG']").css('color', 'green');	
	}else{
		$("label[for='lbltotalPG']").css('color', 'red');	
	}

}

//------------ PARA LA SEGUNDA TABLA
function CargarTablasPE(){
	cuerpoTablaPE.find('tr').remove();
	cuerpoTablaPE.find('td').remove();
	for (i=1;i<=cantidadPE;i++){
        cuerpoTablaPE.append('<tr>'+
        	'<td>' + i + '</td>'+
            '<td> <select class="form-control" id="select" onchange="calculoTotalPE()">'+
	            '<option>1</option>'+
				'<option>2</option>'+
				'<option>3</option>'+
				'<option>4</option>'+
				'<option>5</option>'+
				'<option>6</option>'+
			'</select> </td>'+
            '</tr>');
	}

	cuerpoTablaPE.append('<tr>'+
		'<td> Total </td>'+
		'<td> <label for="lblTotalPE">'+totalPE+'</label></td>'+
		'</tr>');

	calculoTotalPE();
}

function calculoTotalPE(){
	totalPE=0;
	$('#cuerpoTablaPE tr').each(function(){
		$(this).find('td select').each(function(){
			totalPE=totalPE + parseInt($(this).find('option:selected').text());
    	})
	})
	$("label[for='lblTotalPE']").text(totalPE);

	if (totalPE==esperadoPE){
		$("label[for='lblTotalPE']").css('color', 'green');	
	}else{
		$("label[for='lblTotalPE']").css('color', 'red');	
	}
}


//------------ PARA LA TERCERA TABLA
function CargarTablasPC(){
	cuerpoTablaPC.find('tr').remove();
	cuerpoTablaPC.find('td').remove();
	for (i=1;i<=cantidadPC;i++){
        cuerpoTablaPC.append('<tr>'+
        	'<td>' + i + '</td>'+
            '<td> <select class="form-control" id="select" onchange="calculoTotalPC()">'+
	            '<option>1</option>'+
				'<option>2</option>'+
				'<option>3</option>'+
				'<option>4</option>'+
				'<option>5</option>'+
				'<option>6</option>'+
			'</select> </td>'+
            '</tr>');
	}

	cuerpoTablaPC.append('<tr>'+
		'<td> Total </td>'+
		'<td> <label for="lblTotalPC">'+totalPC+'</label></td>'+
		'</tr>');

	calculoTotalPC();
}

function calculoTotalPC(){
	totalPC=0;
	$('#cuerpoTablaPC tr').each(function(){
		$(this).find('td select').each(function(){
			totalPC=totalPC + parseInt($(this).find('option:selected').text());
    	})
	})
	$("label[for='lblTotalPC']").text(totalPC);

	if (totalPC==esperadoPC){
		$("label[for='lblTotalPC']").css('color', 'green');	
	}else{
		$("label[for='lblTotalPC']").css('color', 'red');	
	}
}


//------------ PARA LA CUARTA TABLA
function CargarTablasC(){
	cuerpoTablaC.find('tr').remove();
	cuerpoTablaC.find('td').remove();
	for (i=1;i<=cantidadC;i++){
        cuerpoTablaC.append('<tr>'+
        	'<td>' + i + '</td>'+
            '<td> <select class="form-control" id="select" onchange="calculoTotalC()">'+
	            '<option>1</option>'+
				'<option>2</option>'+
				'<option>3</option>'+
				'<option>4</option>'+
				'<option>5</option>'+
				'<option>6</option>'+
			'</select> </td>'+
            '</tr>');
	}

	cuerpoTablaC.append('<tr>'+
		'<td> Total </td>'+
		'<td> <label for="lblTotalC">'+totalC+'</label></td>'+
		'</tr>');

	calculoTotalC();
}

function calculoTotalC(){
	totalC=0;
	$('#cuerpoTablaC tr').each(function(){
		$(this).find('td select').each(function(){
			totalC=totalC + parseInt($(this).find('option:selected').text());
    	})
	})
	$("label[for='lblTotalC']").text(totalC);

	if (totalC==esperadoC){
		$("label[for='lblTotalC']").css('color', 'green');	
	}else{
		$("label[for='lblTotalC']").css('color', 'red');	
	}
}

