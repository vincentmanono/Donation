@extends('auth.authfile')
@section('content')
<form class="form-horizontal form-material" id="loginform" method="POST" action="{{route('login')}}">
    @csrf
    <h3 class="box-title m-t-40 m-b-0">Login Now</h3>

    <div class="form-group m-t-20 ">
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



    <div class="form-group row">
        <div class="col-md-6">
            <div class="custom-control custom-checkbox">
                <input class="custom-control-input" id="customCheck1" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label class="custom-control-label" for="customCheck1"> {{ __('Remember Me') }}</label>
            </div>
        </div>
        <a href="{{ route('password.request') }}" id="to-recover" class="text-dark pull-right col-md-6"><i class="fa fa-lock m-r-5"></i> Forgot password?</a>


    </div>
    <div class="form-group text-center m-t-20">
        <div class="col-xs-12">
            <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Sign in</button>
        </div>
    </div>
    <div class="form-group m-b-0">
        <div class="col-sm-12 text-center">
            <p>Don't have an account? <a href="{{route('register')}}" class="text-info m-l-5"><b>Sign Up</b></a></p>
        </div>
    </div>
</form>
@endsection
