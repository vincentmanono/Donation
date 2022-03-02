@extends('layouts.clientapp')
@section('content')
<div class="site-wrap" id="home-section">

    <div class="owl-carousel-wrapper">



        <div class="box-92819">
            <h1 class="text-white mb-3">About Us</h1>
            <p class="lead text-white">To prevent and alleviate human suffering wherever it may be found. Its purpose is
                to protect life and health and to ensure respect for the human being.</p>
        </div>


        <div class="ftco-cover-1 overlay" style="background-image: url('/client/assets/images/hero_1.jpg');"></div>

    </div>


    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="/client/assets/images/img_2.jpg" alt="Image" class="img-fluid">
                </div>
                <div class="col-md-5 ml-auto">
                    <h3 class="text-cursive mb-4">Our Mission</h3>
                    <p>The Red Cross, born of a desire to bring assistance without discrimination to the wounded on the
                        battlefield, endeavors—in its international and national capacity—to prevent and alleviate human
                        suffering wherever it may be found.
                    </p>
                    <p> Its purpose is to protect life and health and to ensure
                        respect for the human being.</p>
                </div>
            </div>
        </div>
    </div>




    @include('includes.donate')


</div>
@endsection
