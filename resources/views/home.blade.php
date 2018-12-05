@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    @include('slider/slide-home')
                </div>

                <div class="card-body">
                @include('slider/mini-slide-home')

                
                <div class="row">
                    <div class="col-sm-8">
                    <h2>Proximos partidos</h2>
                    @include('events')
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
