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
<h1>Editar Estadio</h1>

{!! Form::model($estadio, ['route' => ['estadio.update', $estadio]]) !!}
<input type="hidden" name="_method" value="PUT">

<div class="form-group">
	<label for="nombre">Nombre:</label>
	{!!	Form::text('nombre_estadio',null, array('class' => 'form-control', 'placeholder' => 'Ingresar nombre','autofocus' => 'autofocus')) !!}
</div>

<div class="form-group">
	<label for="capacidad">Capacidad:</label>
	{!!	Form::number('capacidad_estadio', null, array('class' => 'form-control','placeholder' => 'Ingresar capacidad','autofocus' => 'autofocus')) !!}
</div>

<div class="form-group">
	{!!	Form::submit('Actualizar', array('class' => 'form-control'))!!}
	<a href="">Cancelar</a>
</div>
{!! Form::close() !!}
		
</div>
</div>
</div>
</div>
</div>

@endsection