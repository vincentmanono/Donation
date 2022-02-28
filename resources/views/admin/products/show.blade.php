@extends('layouts.adminapp')
@section('content')
<div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Datatable</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Datatable</li>
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
                    <div class="col-12">
                        <div class="jumbotron jumbotron-fluid">
                            <h1 class="display-4 row "> <div class="col-md-6 col-xs-12" > {{$product->name}}</div> 
                                <div class="col-md-6 col-xs-12" > <img src="/storage/{{$product->image}}" alt="" sizes="60" width="260" height="200" ></div>  </h1>
                            <p class="lead">Donated by : {{ $product->donor->name }} </p>
                            <p class="lead">Status : <span class="text-capitalize" >{{ $product->status  }}  </span> </p>
                            <hr class="my-4">
                            <p>
                                <table class="table table-striped table-inverse table-responsive">
                                    <thead class="thead-inverse">
                                        <tr>
                                            <th>Quantity</th>
                                            <th>Weight</th>
                                            <th>Type</th>
                                            <th>Durability</th>
                                            <th>Expiry_date</th>
                                            <th>Transport</th>
                                            <th>Location</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td scope="row">{{$product->quantity}}</td>
                                                <td>{{$product->weight}}</td>
                                                <td>
                                                    @if ($product->type)
                                                    <span class="badge badge-pill badge-info">Hardware</span>
                                                @else
                                                    <span class="badge badge-pill badge-light">Software</span>
                                                @endif
                                                </td>
                                                <td>
                                                    @if ($product->durability)
                                                        <span class="badge badge-pill badge-black">Long Lasting</span>
                                                    @else
                                                        <span class="badge badge-pill badge-warning">Perishable</span>
                                                    @endif
                                                </td>
                                                <td>{{$product->expiry_date ?? "N/A"}}</td>
                                                <td>{{$product->transport ? "Doner Will Transport" : "We Need To Pick" }}</td>
                                                <td>{{$product->location}}</td>
                                             
                                            </tr>
                                            <tr>
                                                <td colspan="7" scope="row"> {{ $product->description }} </td>
                                                
                                            </tr>
                                           
                                        </tbody>
                                </table>
                                <div class="row" >
                                    <div class="col-md-2 m-2" > 

                                        <form action="{{route('accept.product',$product)}}" method="post">
                                            @csrf
                                            <input type="hidden" name="status" value="accepted">
                                            <button type="submit" class="btn btn-success">Accept Product</button>
                                        </form>
                                    
                                    </div>
                                    <div class="col-md-2 m-2" >

                                        <form action="{{route('accept.product',$product)}}" method="post">
                                            @csrf
                                            <input type="hidden" name="status" value="rejected">
                                            <button type="submit" class="btn btn-warning">Reject Product</button>
                                        </form>
                                     </div>
                                    <div class="col-md-2 m-2" > <a href="{{route('products.edit',$product)}}" class="btn btn-info"> Edit Products </a> </div>
                                    <div class="col-md-2 m-2" > <a href="#" class="btn btn-danger"> Delete Products </a> </div>
                                </div>
                            </p>
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