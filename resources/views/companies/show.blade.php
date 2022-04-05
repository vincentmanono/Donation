@extends('layouts.adminapp')
@section('content')
<div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Company</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Company</li>
                            </ol>
                            @if (empty(Auth::user()->company))
                            <a href="{{route('products.create')}}"class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create New</a>

                            @endif
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
                    <div class="col-12">
                       <div class="jumbotron">
                           <h1 class="display-4">{{$company->name}}</h1>
                           <p class="lead">{{$company->donor->name??""}}</p>
                           <hr class="my-4">
                           <p><span  class="text text-info h3" >Url : </span> <a href="{{$company->url}}">{{ $company->name . " Site"}}</a> </p>
                           <p><span  class="text text-info h3" >Email : </span> {{ $company->email}} </p>
                           <p><span  class="text text-info h3" >Address : </span>{{ $company->address}} </p>
                           <p><span  class="text text-info h3" >Location : </span> {{ $company->location}} </p>
                           <p><span  class="text text-info h3" >Services : </span> {{ $company->services}} </p>
                           <p><a class="btn btn-success" href="{{'/storage/companies/'. $company->certificate }}">Download Company Certificate</a></p>

                           <div>
                            <form action="{{ route('companies.destroy',$company->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button style="margin-left: 3%"
                                    onclick="return confirm('Are you sure you want to delete this Company?')"
                                    class="btn btn-sm btn-danger" type="submit">Delete</button>
                            </form>
                           </div>
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
