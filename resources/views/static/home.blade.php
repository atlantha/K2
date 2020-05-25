@extends('templates.static.app')
@section('title', 'Home')
@section('home_active', 'active')
@section('jumbotron')
    <div class="jumbotron jumbotron-fluid bg-primary mb-0">
            <div class="container">
                <h1 class="display-4 text-uppercase mb-5">we can improve your business better than others</h1>
                <a href="#">view project <span>></span></a>
            </div>
        </div>
@endsection
@section('content')
    <div class="container-fluid">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 custom-p-m px-1">
                    <a href="#">our products</a>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 custom-p-m px-2">
                    <a href="#">what we do?</a>
                </div>
            </div>
        </div>
@endsection