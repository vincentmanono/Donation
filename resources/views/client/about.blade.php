@extends('layouts.clientapp')
@section('content')
<div class="site-wrap" id="home-section">

  <div class="owl-carousel-wrapper">



    <div class="box-92819">
      <h1 class="text-white mb-3">About Us</h1>
      <p class="lead text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt ab doloremque a quia laboriosam suscipit, iure illum perspiciatis!</p>
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
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo molestias sunt eius autem dolor provident nihil hic odio.</p>
          <p>Aliquid optio, sunt asperiores velit odio suscipit autem itaque! Aspernatur fugiat, sapiente deleniti quod aut ab quidem ducimus.</p>
          <p>A minima eos optio cum, veniam repellat autem, aperiam rem dolor asperiores. Debitis dolores eligendi in adipisci suscipit!</p>
          <p><a href="#" class="btn btn-primary rounded-0 px-4">Contact Us</a></p>
        </div>
      </div>
    </div>
  </div>




  @include('includes.donate')


  </div>
@endsection
