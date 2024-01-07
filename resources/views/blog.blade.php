@extends('layouts.master')
@section('style','')
@section('header')
@include('layouts.headerHome')
@endsection
@section('content')
<section id="page-header" class="blog-header">
    <h2>#readmore</h2>
    <p>Read all case studies about our products!</p>
</section>

<section id="blog">
    <div class="blog-box">
        <div class="blog-img">
            <img src="./img/blog/blog-3.jpg" alt="">
        </div>
        <div class="blog-details">
            <h4>How to Break Into Wholesale</h4>
            <p>Emerging labels can catch the eyes of inundated buyers through savvy pitching, leveraging relationships
                with celebrity fans and compelling social-media profiles.
            </p>
            <a target="_blank"
                href="https://www.businessoffashion.com/articles/retail/emerging-brands-wholesale-retailers/">CONTINUE
                READING</a>
        </div>
        <h1>01/01</h1>
    </div>
    <div class="blog-box">
        <div class="blog-img">
            <img src="./img/blog/b2.jpg" alt="">
        </div>
        <div class="blog-details">
            <h4>The Cotton-Jersey Zip-up Hoodie</h4>
            <p>Kickstarter man braid.The easiest way to get icons on your website is with a Kit</p>
            <a href="#">CONTINUE READING</a>
        </div>
        <h1>13/01</h1>
    </div>
    <div class="blog-box">
        <div class="blog-img">
            <img src="./img/blog/b3.jpg" alt="">
        </div>
        <div class="blog-details">
            <h4>The Cotton-Jersey Zip-up Hoodie</h4>
            <p>Kickstarter man braid.The easiest way to get icons on your website is with a Kit</p>
            <a href="#">CONTINUE READING</a>
        </div>
        <h1>17/02</h1>
    </div>
    <div class="blog-box">
        <div class="blog-img">
            <img src="./img/blog/blog-1.jpg" alt="">
        </div>
        <div class="blog-details">
            <h4>Inside Prada’s Best Year in Business</h4>
            <p>The Milanese group, which also owns Miu Miu and Church’s, leveraged a partnership between Miuccia Prada
                and Raf Simons to generate record sales. A Thursday presentation gave investors a first peek at Prada’s
                future plans under new leadership.</p>
            <a target="_blank"
                href="https://www.businessoffashion.com/articles/luxury/prada-reports-highest-ever-annual-sales/">CONTINUE
                READING</a>
        </div>
        <h1>18/02</h1>
    </div>
    <div class="blog-box">
        <div class="blog-img">
            <img src="./img/blog/b6.jpg" alt="">
        </div>
        <div class="blog-details">
            <h4>The Cotton-Jersey Zip-up Hoodie</h4>
            <p>Kickstarter man braid.The easiest way to get icons on your website is with a Kit</p>
            <a href="#">CONTINUE READING</a>
        </div>
        <h1>20/03</h1>
    </div>
</section>
@endsection
@section('footer')
@include('layouts.footer')
@endsection