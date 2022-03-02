@extends('layouts.adminapp')
@section('content')

<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Profile</h4>
        </div>
        <div class="col-md-7 align-self-center text-right">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Profile</li>
                </ol>

            </div>
        </div>
    </div>
    <!-- Row -->
    <div class="row">
        <!-- Column -->
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <center class="m-t-30"> <img src="{{asset('/admin/assets/images/users/5.jpg')}}" class="img-circle" width="150" />
                        <h4 class="card-title m-t-10">{{$donor->name}}</h4>
                        <h6 class="card-subtitle">
                            @if ($donor->is_admin == 0 )
                            Donor
                            @else
                            Admin
                            @endif
                        </h6>
                    </center>
                </div>
                <div>
                    <hr>
                </div>
                <div class="card-body"> <small class="text-muted">Email address </small>
                    <h6>{{$donor->email}}</h6> <small class="text-muted p-t-30 db">Phone</small>
                    <h6>{{$donor->phone}}</h6> <small class="text-muted p-t-30 db">Address</small>

                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-12">
            <div class="card">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs profile-tab" role="tablist">
                    <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home"
                            role="tab">Donations</a> </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="home" role="tabpanel">
                        <div class="card-body">
                            <div class="profiletimeline">
                                <hr>

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
                                        @foreach ($donor->products as $product)
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
                                                    <span class="badge badge-pill badge-black">Long Lasting</span>
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
                                                    <span class="badge badge-pill badge-secondary">Pedding</span>
                                                @endswitch

                                                 </td>

                                            <td>
                                                <a href="{{route('products.show',$product)}}"> <i class="fa fa-eye" aria-hidden="true">View</i> </a>
                                                 </td>

                                        </tr>

                                        @endforeach


                                    </tbody>
                                </table>






                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
    </div>
    <!-- Row -->
</div>

@endsection
