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
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active"><a href="{{ route('home') }}">Collections</a></li>
                    </ol>
                    <a href="{{ route('products.create') }}" class="btn btn-info d-none d-lg-block m-l-15"><i
                            class="fa fa-plus-circle"></i> Create New</a>

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
                        <h4 class="card-title">Collected Products </h4>
                        <h6 class="card-subtitle">All Items Received</h6>
                        <div class="table-responsive m-t-40">
                            <table id="myTable" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Doneted By</th>
                                        <th>Name</th>
                                        <th>Quantity</th>
                                        <th>Type</th>
                                        <th>Durability</th>
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
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                                <tbody>

                                    @foreach ($products as $product)
                                        <tr>
                                            <td> {{ $product->donor->name }} </td>
                                            <td> {{ $product->name }} </td>
                                            <td> {{ $product->quantity }} </td>
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
                                            

                                            <td>
                                                <a href="{{ route('products.show', $product) }}"> <i class="fa fa-eye"
                                                        aria-hidden="true">View</i> </a>
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
