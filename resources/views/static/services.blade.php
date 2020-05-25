@extends('templates.static.app')
@section('title', 'Services')
@section('services_active', 'active')
@section('jumbotron')
    <div class="jumbotron child jumbotron-fluid bg-primary mb-0">
            <div class="container">
                <h2 class="display-4 text-capitalize mb-5">@yield('title')</h2>
            </div>
        </div>
@endsection
@section('content')
    <div class="container">
            <div class="row justify-content-center">
                @foreach ($services as $data)
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="card services">
                        <div class="d-services">
                            <i class="{{ $data['icon'] }}"></i>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-capitalize text-center">{{ $data['title'] }}</h5>
                            <p class="card-text text-center text-muted">{{ $data['description'] }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
@endsection