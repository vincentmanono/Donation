@extends('layouts.adminapp')
@section('content')
<div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">create company</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">create company</li>
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
                        <form action="{{ route('products.store') }}" method="post" class="col-12 row" enctype="multipart/form-data" >
                            @csrf
                            <div class="form-group col-6 ">
                                <label for="company">Company name</label>
                                <input id="company" class="form-control" value="{{old('company')}}" type="text" name="company">
                            </div>
                            <div class="form-group col-6 ">
                                <label for="email">Email</label>
                                <input id="email" class="form-control" value="{{old('email')}}" type="email" name="email">
                            </div>
                            <div class="form-group col-6 ">
                                <label for="address">Address</label>
                                <input id="address" class="form-control" value="{{old('address')}}" type="text" name="address">
                            </div>
                            <div class="form-group col-6 ">
                                <label for="url">url</label>
                                <input id="url" class="form-control" value="{{old('url')}}" type="url" name="url">
                            </div>




                            <div class="form-group col-6 ">
                                <label for="document">Certificate</label>
                                <input id="document" class="form-control" type="file" name="document">
                            </div>

                            <div class="form-group col-6 ">
                                <label for="location">Location of Product</label>
                                <input id="location" class="form-control" value="{{old('location')}}" type="text" name="location">
                            </div>


                              <div class="form-group col-6">
                                  <label for="services">services</label>

                                <input id="services" class="form-control" value="{{old('services')}}" type="text" name="services">
                              </div>

                            <button type="submit" class="btn btn-primary btn-block">Submit</button>

                        </form>

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
