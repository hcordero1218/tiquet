$(function(event){

	$('#estadio').change(onSelectEstadio);

});

var jsonLocalidad;

function onSelectEstadio(){
	var estadio_idestadio = $(this).val();
	//Ajax
		$('#hector').children().remove();
		//console.log($('#hector').children());
		//console.log('/api/admin/producto/'+estadio_idestadio+'/niveles');
	$.get('/api/admin/producto/'+estadio_idestadio+'/niveles', function (data){
		//console.log(estadio_idestadio);
		jsonLocalidad = data;
		var input = '';
		for(var i=0;i<jsonLocalidad.length;++i){
			input += '<div class=".col-md"><label for="torneo">Localidad</label><input type="text" class="localidad" value="" disabled></div><div class=".col-md"><label for="torneo">Capacidad:</label><input type="text" class="capacidad" value="" disabled></div> ';
			input += '<div class=".col-md"><label for="torneo">Stock</label><input type="text" id="stock'+i+'" value=""></div><div class=".col-md"><label for="torneo">Precio:</label><input type="text" id="precio'+i+'" value=""></div> ';

		}
		$('#hector').html(input);
		//.attr('value', '123');
		for(var i=0;i<jsonLocalidad.length;++i){
		$('.localidad')[i].value=(jsonLocalidad[i].nombre_localidad);
		$('.capacidad')[i].value=(jsonLocalidad[i].capacidad_localidad);
		//$('#stock'+i).val();
	}
	});
}