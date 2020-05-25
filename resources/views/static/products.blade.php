@extends('templates.static.app')
@section('title', 'Products')
@section('products_active', 'active')
@section('jumbotron')
    <div class="jumbotron child jumbotron-fluid bg-primary mb-0">
            <div class="container">
                <h2 class="display-4 text-capitalize mb-5">@yield('title')</h2>
            </div>
        </div>
@endsection
@section('content')
    <div class="container">
            <div class="row">
                @foreach ($products as $data)
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="card products">
                        <div class="d-products" style="background-color: {{ $data['bgcolor'] }};">
                            <h6 class="text-capitalize text-center">{{ $data['title'] }}</h6>
                            <p class="text-capitalize text-center">{{ $data['tagline'] }}</p>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-capitalize text-center">{{ $data['subtitle'] }}</h5>
                            <p class="card-text text-center text-muted">{{ $data['description'] }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
@endsection