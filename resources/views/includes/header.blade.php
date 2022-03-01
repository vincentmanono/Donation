



      <div class="bg-primary py-3 top-bar shadow d-none d-md-block">
        <div class="container">
          <div class="row">
            <div class="col-md-6 text-md-left pl-0">
              <a href="{{route('register')}}" class="p-3">{{config('app.name')}}</a>
            </div>
            <div class="col-md-6 text-md-right">
                @if (Route::has('login'))
                @auth
                    <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                    @endif
                @endauth

        @endif
            </div>

        </div>
      </div>
      <header class="site-navbar site-navbar-target bg-secondary shadow" role="banner">

        <div class="container">
          <div class="row align-items-center position-relative">


            <div class="site-logo">
              <a href="{{route('index')}}" class="text-white">Donation</a>
            </div>


            <nav class="site-navigation text-left ml-auto " role="navigation">
              <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                <li class="active"><a href="{{route('index')}}" class="nav-link">Home</a></li>
                <li><a href="{{route('about')}}" class="nav-link">About Us</a></li>
                <li><a href="{{route('contact')}}" class="nav-link">Contact</a></li>
              </ul>
            </nav>


            <div class="ml-auto toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-white"><span class="icon-menu h3 text-white"></span></a></div>



          </div>
        </div>

      </header>
