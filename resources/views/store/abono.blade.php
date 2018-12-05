@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">

                <div class="card-body">                
                <div class="row">
                    <div class="col-sm-12">
                    <h2>Abonados</h2>
                    <img src="http://www.unionespanola.cl/media/1254/socios2017.jpg" width="100%">

                    <p>1.Acceso GRATIS a todos los partidos que Unión Española juegue como local durante el año (Campeonato Nacional y Copa Chile).

<p>2.Acceso GRATIS a todos los partidos de Competiciones Internacionales.

<p>3.Ahorro anual de hasta un 20% en compra de entradas.

<p>4.Formar parte del Club de Beneficios Unión Española y contar con descuentos y promociones en nuestras marcas asociadas.

<p>5.No volver a comprar entradas.

<p>6.15% de descuento en nuestra Indumentaria Oficial 2018.

<p>7.Importantes descuentos en la matrícula a nuestras Escuelas de Fútbol Oficiales..

<p>8.Participar por vivir experiencias  únicas junto al Plantel Profesional y nuestros Auspiciadores.

<p>9.Participar por grandes premios en nuestros futuros desafíos: Hispano del Año y Abono Vitalicio.

<p>10.Recibir el Newsletter semanal con la actualidad del club en tu correo.</p>
                    </div>
        <div class="page">
            <div class="table-responsive">
                <h3>General</h3>
                
                <table class="table table-striped table-hover table-bordered">
                    <tr>
                        <th>Localidad</th>
                        <th>Precio</th>

                    </tr>
                    @foreach($product as $producto)
                    @if($producto->categoria_producto_idcategoria_producto == 2)
                        <tr>
                            <td>{{ $producto->nombre_producto }}</td>
                            <td>${{ number_format($producto->precio, 0, '', '.') }}</td>
                            <td><a href="{{ route('cart-add', $producto->slug) }}" class="btn btn-danger">Comprar
                    </a></td>
                        </tr>
                        @endif
                        @endforeach
                        
                </table><hr>
                <hr>

                                <h3>Convenios</h3>
                <table class="table table-striped table-hover table-bordered">
                    <tr>
                        <th>Localidad</th>
                        <th>Descripcion</th>
                        <th>Descuento</th>
                    </tr>
                    @foreach($product as $producto)
                    @if($producto->categoria_producto_idcategoria_producto == 4)
                        <tr>
                            <td>{{ $$producto->nombre_producto }}</td>
                            <td>{{ $$producto->descripcion }}</td>
                            <td>{{ $$producto->descuento }}%</td>
                            <td><a href="{{ route('cart-add', $producto->slug) }}" class="btn btn-danger">Comprar
                    </a></td>
                        </tr>
                        @endif
                        @endforeach
                </table><hr>
                <hr>

                                <h3>Promociones</h3>
                <table class="table table-striped table-hover table-bordered">
                    <tr>
                        <th>Localidad</th>
                        <th>Descripcion</th>
                        <th>Precio</th>
                    </tr>
                    @foreach($product as $producto)
                    @if($producto->categoria_producto_idcategoria_producto == 3)
                        <tr>
                            <td>{{ $producto->nombre_producto }}</td>
                            <td>{{ $producto->descripcion }}</td>
                            <td>${{ number_format($producto->precio, 0, '', '.') }}</td>
                            <td><a href="{{ route('cart-add', $producto->slug) }}" class="btn btn-danger">Comprar
                    </a></td>
                        </tr>
                        @endif
                        @endforeach
                </table><hr>
                <hr>
            </div>
        </div>
                </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection