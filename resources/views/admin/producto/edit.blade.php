@extends('admin.layouts.app')

@section('content')

        <script type="text/javascript">
        $(document).ready(function(){
            $('#descripcion').Editor();

        }); 
    	</script>
<div class="container">
    <div class="row justify-content-center">
    	<div class="col-md-12">
            <div class="card">
                <div class="card-body">

@if(count($errors) > 0)
	@include ('admin.partials.errors')
@endif
<h1>Editar Abono</h1>
  <div class="row">
    <div class="col">
    	{!! Form::model($producto, ['route' => ['producto.update', $producto]]) !!}
<input type="hidden" name="_method" value="PUT">

        <div class="form-group">
            <label for="nombre">Rival</label>
            {!! Form::text('nombre_producto',null, array('class' => 'form-control', 'placeholder' => 'Ingresar nombre','autofocus' => 'autofocus')) !!}
        </div>

        <div class="form-group">
            <label for="capacidad">Estado: </label>
            {!! Form::radio('stado_producto_idestado_producto', null, array('class' => 'form-control')) !!}
        </div>

        <div class="form-group" >
                <label for="torneo">Torneo</label>
        {!! Form::select('torneo_idtorneo', $torneo) !!}
        </div>

        <div class="form-group">
            <label for="fecha">Fecha:</label>
            {!! Form::date('fecha', null, array('class' => 'form-control','placeholder' => 'Ingresar capacidad','autofocus' => 'autofocus', 'value' => 'date')) !!}
        </div>

        <div class="form-group">
            <label for="hora">Hora: </label>
            {!! Form::time('hora', null, array('class' => 'form-control' )) !!}
        </div>
        <input name="descripcion" type="hidden" value="prueba">
        <input name="slug" type="hidden" value="prueba2">
        <input name="estado_producto_idestado_producto" type="hidden" value="1">
<input name="categoria_producto_idcategoria_producto" type="hidden" value="1">

<div class="form-group">
    {!! Form::submit('Guardar', array('class' => 'form-control'))!!}
    <a href="">Cancelar</a>
</div>
{!! Form::close() !!}
		
</div>
</div>
</div>
</div>
</div>

@endsection