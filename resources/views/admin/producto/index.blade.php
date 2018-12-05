@extends('admin.layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
    	<div class="col-md-12">
            <div class="card">
                <div class="card-body">

<a href="{{ route('producto.create') }}">Crear</a>

<div class="table-responsive">
	<table class="table table-striped table-bordered table-hover">
			<h1>Activos</h1>
		<thead>
			<tr>
				<th>Editar</th>
				<th>Eliminar</th>
				<th>Rival</th>
				<th>Torneo</th>
				<th>Fecha</th>
				<th>Hora</th>
			</tr>
		</thead>
		<tbody>
			@foreach($producto as $productos)
			@if(($productos->estado_producto_idestado_producto == '1') && ($productos->categoria_producto_idcategoria_producto == '1'))
			<tr>
				<td><a href="{{ route('producto.edit', $productos->idproducto) }}">Editar</a></td>
				<td>
					{!! Form::open (['route'=> ['producto.destroy', $productos->idproducto]]) !!}
					<input type="hidden" name="_method" value="DELETE">
					<button onClick="return confirm('¿Desea eliminar el registro?')" class="btn btn-danger"></button>
					{!! Form::close() !!}
				</td>
				<td>{{ $productos->nombre_producto}}</td>
				<td>{{ $productos->torneo->nombre_torneo}}</td>
				<td>{{ $productos->fecha}}</td>
				<td>{{ $productos->hora}}</td>
			</tr>
			@endif
			@endforeach
		</tbody>
</div>


<div class="table-responsive">
	<table class="table table-striped table-bordered table-hover">
			<h1>Desactivados</h1>
		<thead>
			<tr>
				<th>Editar</th>
				<th>Eliminar</th>
				<th>Rival</th>
				<th>Torneo</th>
				<th>Fecha</th>
				<th>Hora</th>
			</tr>
		</thead>
		<tbody>
			@foreach($producto as $productos)
			@if(($productos->estado_producto_idestado_producto == '2') && ($productos->categoria_producto_idcategoria_producto == '1'))

			<tr>
				<td><a href="{{ route('producto.edit', $productos->idproducto) }}">Editar</a></td>
				<td>
					{!! Form::open (['route'=> ['producto.destroy', $productos->idproducto]]) !!}
					<input type="hidden" name="_method" value="DELETE">
					<button onClick="return confirm('¿Desea eliminar el registro?')" class="btn btn-danger"></button>
					{!! Form::close() !!}
				</td>
				<td>{{ $productos->nombre_producto}}</td>
				<td>{{ $productos->torneo->nombre_torneo}}</td>
				<td>{{ $productos->fecha}}</td>
				<td>{{ $productos->hora}}</td>
			</tr>
			@endif
			@endforeach
		</tbody>
</div>
		
</div>
</div>
</div>
</div>
</div>

@endsection