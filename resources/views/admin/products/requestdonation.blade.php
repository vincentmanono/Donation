@extends('layouts.adminapp')
@section('content')
<div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">{{ Auth::user()->is_admin ? "Send Donation request" : " Email Admin"  }}</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Request donation</li>
                            </ol>
                            <a href="{{route('products.create')}}"class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create New</a>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="card col-md-12 ">
                        <div class="card-body row">
                            <h4 class="card-title">Email</h4>
                            <form action="{{route('requestDonation')}}" method="post" class="col-12" >
                                @csrf


                                       <div class="col-md-6">
                                           @if (Auth::user()->is_admin)
                                           <div class="form-group">
                                        <label for="email" class=" col-form-label text-md-end">{{ __('Receiver Email Address') }}</label>

                                             <select class="form-control @error('email') is-invalid @enderror" name="email" id="email">
                                                 @foreach ($users as $user)
                                                 <option value="{{ $user->email }}"> <strong class="text text-bold text-info" >{{ $user->name  }}</strong>  {{  "  | ". $user->email }} </option>

                                                 @endforeach

                                             </select>
                                             @error('email')
                                               <span class="invalid-feedback" role="alert">
                                                   <strong>{{ $message }}</strong>
                                               </span>
                                           @enderror
                                           </div>

                                           @else
                                           <h4>You will Email Admin : <span class="text text-info" >{{ $admin->name }}   {{  $admin->email }}</span> </h4>

                                           @endif



                                       </div>


                                   <div class="form-group">
                                       <label for="subject" class=" col-form-label text-md-end">{{ __('Subject') }}</label>

                                       <div class="col-md-6">
                                           <input id="subject" type="text" class="form-control @error('subject') is-invalid @enderror" name="subject" value="{{ old('subject') }}" required autocomplete="subject">

                                           @error('subject')
                                               <span class="invalid-feedback" role="alert">
                                                   <strong>{{ $message }}</strong>
                                               </span>
                                           @enderror
                                       </div>
                                   </div>

                                   <div class="form-group">
                                       <label for="message" class=" col-form-label text-md-end">{{ __('message') }}</label>

                                       <div class="col-md-6">
                                           <textarea name="message" id="message" required class="form-control @error('subject') is-invalid @enderror" cols="30" rows="10"></textarea>

                                           @error('message')
                                               <span class="invalid-feedback" role="alert">
                                                   <strong>{{ $message }}</strong>
                                               </span>
                                           @enderror
                                       </div>
                                   </div>

                                   <button type="submit" class="btn btn-info "> {{ Auth::user()->is_admin ? "Send request" : "Send Email"  }} </button>



                               </form>
                        </div>
                    </div>




                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->

                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>

@endsection
