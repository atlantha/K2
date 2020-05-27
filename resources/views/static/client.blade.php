@extends('templates.static.app')
@section('title', 'Our Client')
@section('client_active', 'active')
@section('jumbotron')
    <div class="jumbotron child jumbotron-fluid bg-primary mb-0">
            <div class="container">
                <h2 class="display-4 text-capitalize mb-5">@yield('title')</h2>
            </div>
        </div>
@endsection
@section('content')
    <div class="row" style="margin-top: 70px" >
        @foreach ($client as $data)
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
            <div class="card-client">
                <div class="d-client">
                    <i class="{{ $data['icon'] }}"></i>
                </div>
                <div class="card-body">
                    <h5 class="card-title text-capitalize text-center">{{$data['title']}}</h5>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection