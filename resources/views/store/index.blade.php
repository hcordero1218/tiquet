@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">

                <div class="card-body">

                
                <div class="row">
                    <div class="col-sm-8">
                    <h2>Proximos partidos</h2>
                    @include('events')
                    <div class="products">
@foreach($products as $product)
<div class="product">
	<h3>{{ $product->name }}</h3>
	<img src="{{ $product->image}}" width="150px">
	<div class="product-info">
		<p>{{ $product->extract}}</p>
		<p>Precio: ${{ number_format($product->price,3) }}</p>
		<p>
			<a href="{{ route('cart-add', $product->slug) }}">Comprar</a>
			<a href="{{ route('product-detail', $product->slug) }}">Leer mas</a>
		</p>
	</div>
</div>	
@endforeach
</div>
                    </div>
                    <div class="col-sm-4">col-sm-4

                    <div class="col">Column</div>
                    <div class="col">Column</div>
                    </div>
                </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection