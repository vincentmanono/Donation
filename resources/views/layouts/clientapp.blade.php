<!DOCTYPE html>
<html lang="en">

<head>
  <title>Redcross &mdash; Donation</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link href="https://fonts.googleapis.com/css?family=Mansalva|Roboto&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href=" {{asset('client/assets/css/bootstrap.min.css')}} ">
    <link rel="stylesheet" href=" {{asset('client/assets/css/animate.min.css')}} ">
    <link rel="stylesheet" href=" {{asset('client/assets/css/jquery.fancybox.min.css')}} ">
    <link rel="stylesheet" href=" {{asset('client/assets/css/owl.carousel.min.css')}} ">
    <link rel="stylesheet" href=" {{asset('client/assets/css/owl.theme.default.min.css')}} ">
    <link rel="stylesheet" href=" {{asset('client/assets/fonts/flaticon/font/flaticon.css')}} ">
    <link rel="stylesheet" href=" {{asset('client/assets/css/aos.css')}} ">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href=" {{asset('client/assets/css/style.css')}} ">

  </head>

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">


    <div class="site-wrap" id="home-section">

      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>

{{-- header --}}
@include('includes.header')




@yield('content')

    @include('includes.footer')

    </div>

    <script src=" {{asset('client/assets/js/jquery-3.3.1.min.js')}} "></script>
    <script src=" {{asset('client/assets/js/popper.min.js')}} "></script>
    <script src=" {{asset('client/assets/js/bootstrap.min.js')}} "></script>
    <script src=" {{asset('client/assets/js/owl.carousel.min.js')}} "></script>
    <script src=" {{asset('client/assets/js/jquery.sticky.js')}} "></script>
    <script src=" {{asset('client/assets/js/jquery.waypoints.min.js')}} "></script>
    <script src=" {{asset('client/assets/js/jquery.animateNumber.min.js')}} "></script>
    <script src=" {{asset('client/assets/js/jquery.fancybox.min.js')}} "></script>
    <script src=" {{asset('client/assets/js/jquery.easing.1.3.js')}} "></script>
    <script src=" {{asset('client/assets/js/aos.js')}} "></script>

    <script src=" {{asset('client/assets/js/main.js')}} "></script>

  </body>

</html>
