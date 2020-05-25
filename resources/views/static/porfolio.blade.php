@extends('templates.static.app')
@section('title', 'Porfolio')
@section('portfolio_active', 'active')
@section('jumbotron')
    <div class="jumbotron child jumbotron-fluid bg-primary mb-0">
            <div class="container">
                <h2 class="display-4 text-capitalize mb-5">@yield('title')</h2>
            </div>
        </div>
@endsection
@section('content')
<div class="container">
    <div class="ilham">
        <ul>
            <li><a href="#all" class="ilham-tombol">All Project</a></li>
            <li><a href="#school" class="ilham-tombol">K2 School App</a></li>
            <li><a href="#cafe" class="ilham-tombol">K2 Cafe And Resto App</a></li>
            <li><a href="#profile" class="ilham-tombol">K2 Profile App</a></li>
            <li><a href="#company" class="ilham-tombol">K2 Company App</a></li>
        </ul>
    </div>
    <div class="row ilham-row ilham-all">
        <div class="col-4">
            <div class="card ilham">
                <img src="{{asset('img/porfolio/gambar1.png')}}" class="card-img-top" alt="...">  
            </div>  
        </div>
        <div class="col-4">
            <div class="card ilham">
                <img src="{{asset('img/porfolio/gambar1.png')}}" class="card-img-top" alt="...">  
            </div>  
        </div>
        <div class="col-4">
            <div class="card ilham">
                <img src="{{asset('img/porfolio/gambar1.png')}}" class="card-img-top" alt="...">  
            </div>  
        </div>
    </div>
    <div class="row ilham-row ilham-school">
        <div class="col-4">
            <div class="card ilham">
                <img src="{{asset('img/porfolio/gambar1.png')}}" class="card-img-top" alt="...">  
            </div>  
        </div>
        <div class="col-4">
            <div class="card ilham">
                <img src="{{asset('img/porfolio/gambar1.png')}}" class="card-img-top" alt="...">  
            </div>  
        </div>
    </div>
    <div class="row ilham-row ilham-cafe">
        <div class="col-4">
            <div class="card ilham">
                <img src="{{asset('img/porfolio/gambar1.png')}}" class="card-img-top" alt="...">  
            </div>  
        </div>
    </div>
    <div class="row ilham-row ilham-profile">
        <div class="col-4">
            <div class="card ilham">
                <img src="{{asset('img/porfolio/gambar1.png')}}" class="card-img-top" alt="...">  
            </div>  
        </div>
        <div class="col-4">
            <div class="card ilham">
                <img src="{{asset('img/porfolio/gambar1.png')}}" class="card-img-top" alt="...">  
            </div>  
        </div>
        <div class="col-4">
            <div class="card ilham">
                <img src="{{asset('img/porfolio/gambar1.png')}}" class="card-img-top" alt="...">  
            </div>  
        </div>
        <div class="col-4">
            <div class="card ilham">
                <img src="{{asset('img/porfolio/gambar1.png')}}" class="card-img-top" alt="...">  
            </div>  
        </div>
        <div class="col-4">
            <div class="card ilham">
                <img src="{{asset('img/porfolio/gambar1.png')}}" class="card-img-top" alt="...">  
            </div>  
        </div>
    </div>
    <div class="row ilham-row ilham-company">
        <div class="col-4">
            <div class="card ilham">
                <img src="{{asset('img/porfolio/gambar1.png')}}" class="card-img-top" alt="...">  
            </div>  
        </div>
    </div>
</div>



@endsection
