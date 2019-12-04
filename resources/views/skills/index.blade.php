@extends('layouts.main')
@section('content')
<!-- jumbotron -->
<div class="jumbotron text-center">
    <img src="{{asset('img/gerry2.png')}}" class="img-circle">
    <h1>LAURENSIUS NUSATRIO</h1>
    <p> College Student | Sport</p>
</div>
<!-- akhir jumbotron -->

<!-- about -->
<section class="about h1-intro bottomMargin" id="about">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="text-center">ABOUT ME</h2>
                <hr>
                <h1>Hi, I’m Laurensius Nusatrio Pamungkas, a <br>College Student currently <br>Studying at Gunadarma
                    University.</h1>
            </div>
        </div>

    </div>
</section>
<!-- akhir about -->


<!-- portofolio -->
<section class="portofolio" id="portofolio">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2>PORTOFOLIO</h2>
                <hr>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-4">
                <a href="" class="thumbnail">
                    <img src="">
                </a>
            </div>
            <div class="col-sm-4">
                <a href="" class="thumbnail">
                    <img src="">
                </a>
            </div>
            <div class="col-sm-4">
                <a href="" class="thumbnail">
                    <img src="">
                </a>
            </div>
            <div class="col-sm-4">
                <a href="" class="thumbnail">
                    <img src="">
                </a>
            </div>
            <div class="col-sm-4">
                <a href="" class="thumbnail">
                    <img src="">
                </a>
            </div>
            <div class="col-sm-4">
                <a href="" class="thumbnail">
                    <img src="">
                </a>
            </div>
        </div>
</section>
<!-- akhir portofolio -->

<!-- Skills -->
<section class="skills overflowHidden " id="skill">
    <h2 class="upperCase letterSpacingMID">I’M SPECIALISED IN</h2>
    <div class="table">
        @foreach ($skills as $data)
        <div class="intro-b cl3">
            <img src="{{$data->icon}}" alt="story telling">
            <h3 class="letterSpacingMID upperCase">{{$data->title}}</h3>
            <span class="horizontal-line"></span>
            <p class="letterSpacingSMALL">{{$data->content}}</p>
        </div>
        @endforeach
        {{-- <div class="intro-b cl3">
            <img src="{{asset('img/Skills/concepting.png')}}" alt="Concepting">
            <h3 class="letterSpacingMID upperCase">Concepting</h3>
            <span class="horizontal-line"></span>
            <p class="letterSpacingSMALL">My interests in many different fields has helped me to stay curious, open and
                flexible. These attributes have been essential in the concepting of digital ideas.</p>
        </div>
        <div class="intro-b cl3">
            <img src="{{asset('img/Skills/photography.png')}}" alt="Photography">
            <h3 class="letterSpacingMID upperCase">Photography</h3>
            <span class="horizontal-line"></span>
            <p class="letterSpacingSMALL">Photography is one of my oldest passions. Even though it is just a hobby, the
                ability to treat and art direct images has been fundamental to my skills as a Designer.</p>
        </div> --}}
    </div>
</section>
<!-- akhir Skills -->
@endsection
