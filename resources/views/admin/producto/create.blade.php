@extends('admin.layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
    	<div class="col-md-12">
            <div class="card">
                <div class="card-body">

				@if(count($errors) > 0)
					@include ('admin.partials.errors')
				@endif
				<h1>Crear Evento</h1>
				{!! Form::open (['route'=>'producto.store']) !!}

		<div class="form-group">
			<label for="nombre">Rival</label>
			{!!	Form::text('nombre_producto',null, array('class' => 'form-control', 'placeholder' => 'Ingresar nombre','autofocus' => 'autofocus')) !!}
		</div>

		<div class="form-group">
			<label for="capacidad">Estado: </label>
			{!!	Form::radio('stado_producto_idestado_producto', null, array('class' => 'form-control')) !!}
		</div>

		<div class="form-group" >
				<label for="torneo">Torneo</label>
				{!!	Form::select('torneo_idtorneo', $torneo, null, ['id'=>'torneo']) !!}
		</div>

		<div class="form-group" >
			<label for="torneo">Estadio</label>
			{!!	Form::select('estadio', $estadio, null,['id'=>'estadio', 'placeholder'=> 'Seleccione estadio']) !!}
		</div>

		<div class="form-group" >
			@foreach($localidad as $localidades)
			  <div class="row" id="hector">
			  </div>

			@endforeach
		</div>

		<div class="form-group">
			<label for="fecha">Fecha:</label>
			{!!	Form::date('fecha', null, array('class' => 'form-control','placeholder' => 'Ingresar capacidad','autofocus' => 'autofocus', 'value' => 'date')) !!}
		</div>

		<div class="form-group">
			<label for="hora">Hora: </label>
			{!!	Form::time('hora', null, array('class' => 'form-control' )) !!}
		</div>
		<input name="descripcion" type="hidden" value="prueba">
		<input name="slug" type="hidden" value="prueba2">
		<input name="estado_producto_idestado_producto" type="hidden" value="1">
<input name="categoria_producto_idcategoria_producto" type="hidden" value="1">
		<div class="form-group">
			{!!	Form::submit('Guardar', array('class' => 'form-control'))!!}
			<a href="">Cancelar</a>
		</div>
				{!! Form::close() !!}
		
</div>
</div>
</div>
</div>
</div>

@endsection