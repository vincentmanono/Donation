@extends('auth.authfile')
@section('content')
<form class="form-horizontal form-material" id="loginform" method="POST" action="{{route('register')}}">
    @csrf
    <h3 class="box-title m-t-40 m-b-0">Register Now</h3>
    <div class="form-group m-t-20">
        <div class="col-xs-12">
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                    name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Enter Your Full Name" autofocus>

                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
        </div>
    </div>
    <div class="form-group ">
        <div class="col-xs-12">



            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                name="email" value="{{ old('email') }}" required placeholder="Your Email" autocomplete="email">

            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

    </div>
    </div>
    <div class="form-group ">
        <div class="col-xs-12">



            <input id="password" type="password"
                class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password"
                required autocomplete="new-password">

            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

        </div>
    </div>
    <div class="form-group">



                <input id="password-confirm" type="password" placeholder="Confirm Password" class="form-control"
                    name="password_confirmation" required autocomplete="new-password">


    </div>
    <div class="form-group row">
        <div class="col-md-12">


                <select id="my-select" class="form-control @error('donation_type') is-invalid @enderror" name="donation_type">
                    <option disabled selected >Your Donation Type</option>
                    <option value="0">Individual</option>
                    <option value="1">Company/ Organization</option>
                </select>

                @error('donation_type')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror


        </div>
    </div>

    <div class="form-group text-center m-t-20">
        <div class="col-xs-12">
            <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Sign Up</button>
        </div>
    </div>
    <div class="form-group m-b-0">
        <div class="col-sm-12 text-center">
            <p>Already have an account? <a href="{{route('login')}}" class="text-info m-l-5"><b>Sign In</b></a></p>
        </div>
    </div>
</form>
@endsection
