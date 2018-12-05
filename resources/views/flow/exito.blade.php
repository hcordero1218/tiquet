@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">

                <div class="card-body">                
                    <div class="row">
                    <div class="col-sm-12">
                    <h2>Pago realizado con exito</h2>
                    <img src="https://lascuatroleyesdelamentesubconsciente.com/wp-content/uploads/2015/03/gracias-compra3.jpg" width="100%">

                    </div>
                            <div class="page">
                                <div class="table-responsive">
                       Su pago se ha realizado exitosamente<br>
                        <br>
                        Orden de Compra: {{ $orden_compra }}<br>
                        Monto: {{ number_format($monto, 0, '', '.') }}<br>
                        Descripción: {{ $concepto }}<br>
                        Pagador: {{ $email_pagador }}<br>
                        Flow Orden N°: {{ $flow_orden }}<br>
                        <br>
                        Gracias por su compra
                                    
                                </div>
                            </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection