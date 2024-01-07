@extends('layouts.master')
@section('style','')
@section('header')
@include('layouts.headerHome')
@endsection
@section('content')
<section id="page-header" class="about-header">
    <h2>#KnowUs</h2>
    <p>Lorem ipsum dolor sit amet , consectetur</p>
</section>

<section id="about-head" class="section-p1">
    <img src="./img/about/a6.jpg" alt="">
    <div>
        <h2>Who We Are?</h2>
        <p>We are Group 4 - N09 - Sorfware engineering. We have 6 member: <br>Phung Dac Dung , Tran Tan Tien, Nguyen Van
            Duc, Nguyen The Bao, Do Nhat Anh, Duong Ngoc Mai.
        </p>
        <abbr title="">Emerging labels can catch the eyes of inundated buyers through savvy pitching, leveraging
            relationships with celebrity fans and compelling social-media profiles.
        </abbr>

        <br><br>

        <marquee bgcolor="#ccc" loop="-1" scrollamount="5" width="100%">Emerging labels can catch the eyes of inundated
            buyers through savvy pitching, leveraging relationships with celebrity fans and compelling social-media
            profiles.
        </marquee>
    </div>
</section>

<section id="about-app">
    <h1>Download Our <a href="#">App</a></h1>
    <div class="video">
        <video autoplay muted loop src="/img/about/1.mp4 "></video>
    </div>
</section>

<section id="feature" class="section-p1">
    <div class="fe-box">
        <img src="./img/features/f1.png" alt="">
        <h6>Free shipping</h6>
    </div>
    <div class="fe-box">
        <img src="./img/features/f2.png" alt="">
        <h6>Free shipping</h6>
    </div>
    <div class="fe-box">
        <img src="./img/features/f3.png" alt="">
        <h6>Free shipping</h6>
    </div>
    <div class="fe-box">
        <img src="./img/features/f4.png" alt="">
        <h6>Free shipping</h6>
    </div>
    <div class="fe-box">
        <img src="./img/features/f5.png" alt="">
        <h6>Free shipping</h6>
    </div>
    <div class="fe-box">
        <img src="./img/features/f6.png" alt="">
        <h6>Free shipping</h6>
    </div>
</section>
@endsection
@section('footer')
@include('layouts.footer')
@endsection