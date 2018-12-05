@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
					<h1>Detalle del producto</h1>		
					<div class="product-block">
						<img src="{{ $product->image}}" width="300px">
					</div>
					<div class="product-block">
					<h3>{{ $product->name }}</h3>
						<div class="product-info">
							<p>{{ $product->description }}</p>
							<p>Precio:{{ number_format($product->price, 0, '', '.') }}</p>


		<div class="page">
			<div class="table-responsive">
				<h3>Datos del pedido</h3>
				<table class="table table-striped table-hover table-bordered">
					<tr>
						<th>Localidad</th>
						<th>Precio</th>
					</tr>
						<tr>
							<td>nombre</td>
							<td>$</td>
						</tr>
					
				</table><hr>
				<p>
					<a href="{{ route('cart-add', $product->slug) }}" class="btn btn-danger">Comprar
					</a>
				</p>
				<hr>
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
