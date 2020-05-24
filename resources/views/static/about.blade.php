@extends('templates.static.app')
@section('title', 'About Us')
@section('about_active', 'active')
@section('jumbotron')
    <div class="jumbotron child jumbotron-fluid bg-primary mb-0">
            <div class="container">
                <h2 class="display-4 text-capitalize mb-5">@yield('title')</h2>
            </div>
        </div>
@endsection
@section('content')
    <div class="container-fluid">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 custom-p-m px-3"></div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 custom-tl custom-order-1">
                    <h2 class="text-capitalize mb-4">company overview</h2>
                    <p>
                        K2 BUKAN IT is a company engaged in IT that has excellence in dedication, innovative, creative
                        and full commitment and experience in the field of IT Development. Until now, we have continued
                        to develop competencies in other products and services needed by the Company, Industry and the
                        general public.
                    </p>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 custom-tl custom-order-2">
                    <h2 class="text-uppercase mb-3">vision</h2>
                    <p class="text-uppercase">
                        become the leading company in the innovative and creative fields in indonesia.
                    </p>
                    <h2 class="text-uppercase mb-3">mission</h2>
                    <ol>
                        <li>innovative and creative in developing leading and competitive applications.</li>
                        <li>Develop applications that are effective, efficient and easy to use by users.</li>
                        <li>Develop applications according to the needs of the user and the wider community.</li>
                        <li>Developing partnerships in the IT field.</li>
                        <li>Professionalism of individuals and teams in product development and increasing skills and
                            knowledge in the IT field.</li>
                    </ol>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 custom-p-m px-4"></div>
            </div>
        </div>
@endsection
@section('ex-content')
<section id="best-team" class="best-team" style="margin-top: 100px;">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="text-capitalize text-center mb-3">a best team</h1>
                    <p class="text-center" style="font-size: 15px;">
                        Behind the success of a company must be because of the existence of a team
                        that is able to work
                        with solid, innovative and creative. And we have orangutans in their respective fields.
                    </p>
                </div>
            </div>
            <div class="row">
                @foreach ($team as $data)    
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 my-4">
                    <div class="overlay">
                        <img src="img/about/team/{{ $data['photo'] }}" alt="team-1">
                        <div class="info-team">
                            <h6 class="text-uppercase text-center">{{ $data['name'] }}</h6>
                            <p class="text-center">{{ $data['position'] }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection