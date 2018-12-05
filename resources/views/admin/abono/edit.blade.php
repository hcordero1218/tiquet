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
	<label for="nombre">Nombre:</label>
	{!!	Form::text('nombre_producto',null, array('class' => 'form-control', 'placeholder' => 'Ingresar nombre','autofocus' => 'autofocus')) !!}
</div>

<div class="form-group">
	<label for="capacidad">Precio: $</label>
	{!!	Form::number('precio', null, array('class' => 'form-control','placeholder' => 'Ingresar precio','autofocus' => 'autofocus')) !!}
</div>      
    </div>
    <div class="col">
<div class="form-group">
	<label for="capacidad">Descuento: %</label>
	{!!	Form::number('descuento', null, array('class' => 'form-control','placeholder' => 'Ingresar descuento','autofocus' => 'autofocus')) !!}
</div>

<div class="form-group">
	<label for="capacidad">Estado: </label>
	{!!	Form::radio('estado_producto_idestado_producto', null, array('class' => 'form-control')) !!}
</div>
<div class="form-group">
	<label for="capacidad">Tipo de Abono: </label>
	{!!	Form::select('categoria_producto_idcategoria_producto', ['2' => 'Normal', '3' => 'Convenio', '4' => 'Oferta']); !!}
</div>
    </div>

  </div>
      <div class="form-group">
	<label for="capacidad">Descripción: </label>
	{!!	Form::textarea('descripcion', null, array('class' => 'form-control', 'value' => 'descripcion')) !!}
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