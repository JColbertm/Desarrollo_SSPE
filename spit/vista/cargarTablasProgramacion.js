$(document).on('ready',funcPrincipal);

var cantidad1=5;
var cantidad2=3;
var cantidad3=2;
var cantidad4=6;



var cuerpoTabla1=$("#cuerpoTabla1");
var cuerpoTabla2=$("#cuerpoTabla2");
var cuerpoTabla3=$("#cuerpoTabla3");
var cuerpoTabla4=$("#cuerpoTabla4");

var total1=0;
var total2=0;
var total3=0;
var total4=0;

var esperado1=10;
var esperado2=10;
var esperado3=10;
var esperado4=10;



function funcPrincipal(){
	CargarTablas1();
	CargarTablas2();
	CargarTablas3();
	CargarTablas4();
}


function CargarTablas1(){
	cuerpoTabla1.find('tr').remove();
	cuerpoTabla1.find('td').remove();
	for (i=1;i<=cantidad1;i++){
        cuerpoTabla1.append('<tr>'+
        	'<td>' + i + '</td>'+
            '<td> <select class="form-control" id="select" onchange="calculoTotal1()">'+
	            '<option>1</option>'+
				'<option>2</option>'+
				'<option>3</option>'+
				'<option>4</option>'+
				'<option>5</option>'+
				'<option>6</option>'+
			'</select> </td>'+
            '</tr>');
	}

	cuerpoTabla1.append('<tr>'+
		'<td> Total </td>'+
		'<td> <label for="lblTotal1">'+total1+'</label></td>'+
		'</tr>');

	calculoTotal1();
}

function calculoTotal1(){
	total1=0;
	$('#cuerpoTabla1 tr').each(function(){
		$(this).find('td select').each(function(){
			total1=total1 + parseInt($(this).find('option:selected').text());
    	})
	})
	$("label[for='lblTotal1']").text(total1);

	if (total1==esperado1){
		$("label[for='lblTotal1']").css('color', 'green');	
	}else{
		$("label[for='lblTotal1']").css('color', 'red');	
	}

}



function CargarTablas2(){
	cuerpoTabla2.find('tr').remove();
	cuerpoTabla2.find('td').remove();
	for (i=1;i<=cantidad2;i++){
        cuerpoTabla2.append('<tr>'+
        	'<td>' + i + '</td>'+
            '<td> <select class="form-control" id="select" onchange="calculoTotal2()">'+
	            '<option>1</option>'+
				'<option>2</option>'+
				'<option>3</option>'+
				'<option>4</option>'+
				'<option>5</option>'+
				'<option>6</option>'+
			'</select> </td>'+
            '</tr>');
	}

	cuerpoTabla2.append('<tr>'+
		'<td> Total </td>'+
		'<td> <label for="lblTotal2">'+total2+'</label></td>'+
		'</tr>');

	calculoTotal2();
}

function calculoTotal2(){
	total2=0;
	$('#cuerpoTabla2 tr').each(function(){
		$(this).find('td select').each(function(){
			total2=total2 + parseInt($(this).find('option:selected').text());
    	})
	})
	$("label[for='lblTotal2']").text(total2);

	if (total2==esperado2){
		$("label[for='lblTotal2']").css('color', 'green');	
	}else{
		$("label[for='lblTotal2']").css('color', 'red');	
	}
}


function CargarTablas3(){
	cuerpoTabla3.find('tr').remove();
	cuerpoTabla3.find('td').remove();
	for (i=1;i<=cantidad3;i++){
        cuerpoTabla3.append('<tr>'+
        	'<td>' + i + '</td>'+
            '<td> <select class="form-control" id="select" onchange="calculoTotal3()">'+
	            '<option>1</option>'+
				'<option>2</option>'+
				'<option>3</option>'+
				'<option>4</option>'+
				'<option>5</option>'+
				'<option>6</option>'+
			'</select> </td>'+
            '</tr>');
	}

	cuerpoTabla3.append('<tr>'+
		'<td> Total </td>'+
		'<td> <label for="lblTotal3">'+total3+'</label></td>'+
		'</tr>');

	calculoTotal3();
}

function calculoTotal3(){
	total3=0;
	$('#cuerpoTabla3 tr').each(function(){
		$(this).find('td select').each(function(){
			total3=total3 + parseInt($(this).find('option:selected').text());
    	})
	})
	$("label[for='lblTotal3']").text(total3);

	if (total3==esperado3){
		$("label[for='lblTotal3']").css('color', 'green');	
	}else{
		$("label[for='lblTotal3']").css('color', 'red');	
	}
}

function CargarTablas4(){
	cuerpoTabla4.find('tr').remove();
	cuerpoTabla4.find('td').remove();
	for (i=1;i<=cantidad4;i++){
        cuerpoTabla4.append('<tr>'+
        	'<td>' + i + '</td>'+
            '<td> <select class="form-control" id="select" onchange="calculoTotal4()">'+
	            '<option>1</option>'+
				'<option>2</option>'+
				'<option>3</option>'+
				'<option>4</option>'+
				'<option>5</option>'+
				'<option>6</option>'+
			'</select> </td>'+
            '</tr>');
	}

	cuerpoTabla4.append('<tr>'+
		'<td> Total </td>'+
		'<td> <label for="lblTotal4">'+total4+'</label></td>'+
		'</tr>');

	calculoTotal4();
}

function calculoTotal4(){
	total4=0;
	$('#cuerpoTabla4 tr').each(function(){
		$(this).find('td select').each(function(){
			total4=total4 + parseInt($(this).find('option:selected').text());
    	})
	})
	$("label[for='lblTotal4']").text(total4);

	if (total4==esperado4){
		$("label[for='lblTotal4']").css('color', 'green');	
	}else{
		$("label[for='lblTotal4']").css('color', 'red');	
	}
}

