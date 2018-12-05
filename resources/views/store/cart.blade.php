@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
						@if(count($cart))
	<div class="table-responsive">
			<table class="table table-striped table-hover table-bordered">
			<thead>
				<tr>
					<th>Localidad</th>
					<th>Precio</th>
					<th>Cantidad</th>
					<th>Subtotal</th>
					<th>Quitar</th>
				</tr>
			</thead>
			<tbody>
				@foreach($cart as $item)
				<tr>
					<td>{{ $item->nombre_producto}}</td>
					<td>${{ number_format($item->precio, 0, '', '.') }}</td>
					<td>
						<input 			type="number"
										min="1"
										max="4"
										value="{{ $item->quantity }}"
										id="producto_{{ $item->idproducto }}"
									>
									<a 
										href="#" 
										class="btn btn-warning btn-update-item"
										data-href="{{ route('cart-update', $item->slug) }}"
										data-id="{{ $item->idproducto }}">Actualizar
										<i class="fa fa-refresh"></i></a>

					 </td>
					<td>${{ number_format($item->precio * $item->quantity,0, '', '.') }}</td>					
					<td>
						<a href="{{ route('cart-delete', $item->slug)}}" >Eliminar</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table><hr>
		<h3>Total: ${{ number_format($total, 0, '', '.')}}</h3>
		<a href="{{ route('order-detail') }}">Continuar</a>
	</div>
	@else
	<h3>No hay tiquetes para su compra :(</h3>
	@endif
			</div>
		</div>
						</div>
					</div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
