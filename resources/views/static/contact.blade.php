@extends('templates.static.app')
@section('title', 'Contact')
@section('contact_active', 'active')
@section('jumbotron')
    <div class="jumbotron child jumbotron-fluid bg-primary mb-0">
            <div class="container">
                <h2 class="display-4 text-capitalize mb-5">@yield('title')</h2>
            </div>
        </div>
@endsection
@section('content')
<section>
    <div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15864.908497442933!2d106.91259467459963!3d-6.233762827800801!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698cd1e13a71e3%3A0x7144353ee6bf299c!2sExclusive%20commercial%20Radin%20Inten!5e0!3m2!1sen!2sid!4v1590450087879!5m2!1sen!2sid" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>

    <div class="container" style="padding-left: 30px; margin-bottom: 70px;">
        <h2 style="margin-top: 70px;">Where?</h2>
        <p class="text-muted">Our Address</p><br>
    
        <div class="row">
            <div class="col-lx-2">
                <i class="fas fa-map-marked-alt"></i>
            </div>
            <div class="col">
                <h6>Address</h6>
                <p class="text-muted">Exclusive Commercial Radin Inten
                    <br>Jl.Raden Inten II No.80, RT.2/RW.7,
                    <br>Duren Sawit,Kota Jakarta Timur 13440
                </p>
            </div>
        </div>    
        <div class="row">
            <div class="col-lx-2">
                <i class="far fa-envelope"></i>
            </div>
            <div class="col">
                <h6>Email</h6>
                <p class="text-muted">cs@k2bukanit.co.id</p>
            </div>
        </div>    
        <div class="row">
            <div class="col-lx-2">
                <i class="fas fa-phone-square-alt"></i>
            </div>
            <div class="col">
                <h6>Phone</h6>
                <p class="text-muted">0821-25507129</p>
            </div>
        </div>    
    </div>
</section>
@endsection