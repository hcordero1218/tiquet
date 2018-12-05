<h1>Detalle del pedido</h1>

		<div class="page">
			<div class="table-responsive">
				<h3>Datos del usuario</h3>
				<table class="table table-striped table-hover table-bordered">
					<tr><td>Nombre:</td><td>{{ Auth::user()->name }}</td></tr>
					<tr><td>Correo:</td><td>{{ Auth::user()->email }}</td></tr>
				</table>
			</div>
			<div class="table-responsive">
				<h3>Datos del pedido</h3>
				<table class="table table-striped table-hover table-bordered">
					<tr>
						<th>Producto</th>
						<th>Precio</th>
						<th>Cantidad</th>
						<th>Subtotal</th>
					</tr>
					@foreach($cart as $item)
						<tr>
							<td>{{ $item->nombre_producto }}</td>
							<td>${{ number_format($item->precio,0, '', '.') }}</td>
							<td>{{ $item->quantity }}</td>
							<td>${{ number_format($item->precio * $item->quantity,0, '', '.') }}</td>
						</tr>
					@endforeach
				</table><hr>
				<h3>
					<span class="label label-success">
						Total: ${{ number_format($total, 0, '', '.') }}
		<form method="POST" action="{{ route('orden') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="orden" id="orden" value="12304" placeholder="1000" required>
        <input type="hidden" name="monto" id="monto" value="{{ $total }}" >
        <input type="hidden" name="concepto" id="concepto" value="prueba">
        <input type="hidden" name="pagador" id="pagador" placeholder="usuario@email.com">
        <button type="submit">Continuar</button>
    </form>				
					</span>
				</h3><hr>
				<p>
					<a href="{{ route('cart-show') }}" class="btn btn-primary">
						<i class="fa fa-chevron-circle-left"></i> Regresar
					</a>
				</p>
			</div>
		</div>

		