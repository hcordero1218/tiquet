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
				<h1>Crear Estadio</h1>
				{!! Form::open (['route'=>'estadio.store']) !!}

				<div class="form-group">
					<label for="nombre">Nombre:</label>
					{!!	Form::text('nombre',null, array('class' => 'form-control', 'placeholder' => 'Ingresar nombre','autofocus' => 'autofocus')) !!}
				</div>

				<div class="form-group">
					<label for="capacidad">Capacidad:</label>
					{!!	Form::number('capacidad', null, array('class' => 'form-control','placeholder' => 'Ingresar capacidad','autofocus' => 'autofocus')) !!}
				</div>

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