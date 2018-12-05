@extends('admin.layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
    	<div class="col-md-12">
            <div class="card">
                <div class="card-body">

		<a href="{{ route('estadio.create') }}">Crear</a>
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-hover">
				<thead>
					<tr>
						<th>Editar</th>
						<th>Eliminar</th>
						<th>Nombre</th>
						<th>Capacidad</th>
					</tr>
				</thead>
				<tbody>
					@foreach($estadio as $estadios)
					<tr>
						<td><a href="{{ route('estadio.edit', $estadios->idestadio) }}">Editar</a></td>
						<td>
							{!! Form::open (['route'=> ['estadio.destroy', $estadios]]) !!}
							<input type="hidden" name="_method" value="DELETE">
							<button onClick="return confirm('¿Desea eliminar el registro?')" class="btn btn-danger"></button>
							{!! Form::close() !!}
						</td>
						<td>{{ $estadios->nombre_estadio}}</td>
						<td>{{ $estadios->capacidad_estadio}}</td>
					</tr>
					@endforeach
				</tbody>
		</div>
		
</div>
</div>
</div>
</div>
</div>

@endsection
