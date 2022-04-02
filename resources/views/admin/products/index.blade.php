@extends('layouts.adminapp')
@section('content')
<div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Donated Products</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Products</li>
                            </ol>
                            <a href="{{route('products.create')}}"class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Donate</a>

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
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Products Donated</h4>
                                <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
                                <div class="table-responsive m-t-40">
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>



                                                    <th>Doneted By</th>
                                                    <th>Name</th>
                                                    <th>Quantity</th>
                                                    <th>Type</th>
                                                    <th>Durability</th>
                                                    <th>status</th>
                                                    <th>Action</th>
                                                </tr>

                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Doneted By</th>
                                                <th>Name</th>
                                                    <th>Quantity</th>
                                                    <th>Type</th>
                                                    <th>Durability</th>
                                                    <th>status</th>

                                                    <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            @foreach ($products as $product)
                                            <tr>
                                                <td> {{$product->donor->name}} </td>
                                                <td> {{ $product->name}} </td>
                                                <td> {{ $product->quantity}} </td>
                                                <td>
                                                    @if ($product->type)
                                                        <span class="badge badge-pill badge-info">Hardware</span>
                                                    @else
                                                        <span class="badge badge-pill badge-success">Software</span>
                                                    @endif

                                                </td>
                                                <td>
                                                    @if ($product->durability == 0)
                                                        <span class="badge badge-pill badge-primary">Long Lasting</span>
                                                    @else
                                                        <span class="badge badge-pill badge-warning">Perishable</span>
                                                    @endif
                                                     </td>
                                                <td>
                                                    @switch($product->status)
                                                        @case('accepted')
                                                        <span class="badge badge-pill badge-success">Received</span>
                                                            @break
                                                        @case('rejected')
                                                        <span class="badge badge-pill badge-danger">Rejected</span>
                                                            @break
                                                        @default
                                                        <span class="badge badge-pill badge-danger">Pedding</span>
                                                    @endswitch

                                                     </td>

                                                <td>
                                                    <a href="{{route('products.show',$product)}}"> <i class="fa fa-eye" aria-hidden="true">View</i> </a>
                                                     </td>

                                            </tr>

                                            @endforeach


                                        </tbody>
                                    </table>
                                </div>
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
