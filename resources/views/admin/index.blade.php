@extends('layouts.adminapp')
@section('content')

 <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h4 class="text-themecolor">Dashboard 1</h4>
                </div>
                <div class="col-md-7 align-self-center text-right">
                    <div class="d-flex justify-content-end align-items-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                       
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Info box -->
            <!-- ============================================================== -->
            <div class="card-group">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="d-flex no-block align-items-center">
                                    <div>
                                        <h3><i class="icon-screen-desktop"></i></h3>
                                        <p class="text-muted">DONORS </p>
                                    </div>
                                    <div class="ml-auto">
                                        <h2 class="counter text-primary">{{$donorsCount}}</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="progress">
                                    <div class="progress-bar bg-primary" role="progressbar"
                                        style="width: 85%; height: 6px;" aria-valuenow="25" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <!-- Column -->
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="d-flex no-block align-items-center">
                                    <div>
                                        <h3><i class="icon-note"></i></h3>
                                        <p class="text-muted">NEW DONATIONS</p>
                                    </div>
                                    <div class="ml-auto">
                                        <h2 class="counter text-cyan">{{$newDonation}}</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="progress">
                                    <div class="progress-bar bg-cyan" role="progressbar"
                                        style="width: 85%; height: 6px;" aria-valuenow="25" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <!-- Column -->
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="d-flex no-block align-items-center">
                                    <div>
                                        <h3><i class="icon-doc"></i></h3>
                                        <p class="text-muted">PRODUCTS</p>
                                    </div>
                                    <div class="ml-auto">
                                        <h2 class="counter text-purple">157</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="progress">
                                    <div class="progress-bar bg-purple" role="progressbar"
                                        style="width: 85%; height: 6px;" aria-valuenow="25" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <!-- Column -->
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="d-flex no-block align-items-center">
                                    <div>
                                        <h3><i class="icon-bag"></i></h3>
                                        <p class="text-muted">All DONATIONS</p>
                                    </div>
                                    <div class="ml-auto">
                                        <h2 class="counter text-success">431</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="progress">
                                    <div class="progress-bar bg-success" role="progressbar"
                                        style="width: 85%; height: 6px;" aria-valuenow="25" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <div class="row">
                <!-- ============================================================== -->
                <!-- Comment widgets -->
                <!-- ============================================================== -->
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Recent Donors</h5>
                        </div>
                        <!-- ============================================================== -->
                        <!-- Comment widgets -->
                        <!-- ============================================================== -->
                        <div class="comment-widgets">
                            <!-- Comment Row -->
                            @foreach ($latestDonors as $user)

                            <div class="d-flex no-block comment-row">
                                <div class="p-2"><span class="round"><img src="{{asset('admin/assets/images/users/1.jpg')}}" alt="user"
                                            width="50"></span></div>
                                <div class="comment-text w-100">
                                    <h5 class="font-medium"> {{$user->name}} <span class="text text-primary pl-4" >{{ $user->email}} </span> </h5>
                                    <p class="m-b-10 text-muted">
                                        <ul class="list-group">
                                            <li class="list-group-item ">Donations : {{$user->products->count()}}</li>
                                        </ul>
                                    </p>
                                    <div class="comment-footer">
                                        <span class="text-muted pull-right">Member since {{$user->created_at->format("m - d, Y") }} </span>
                                          <span
                                            class="action-icons">
                                            <a href="javascript:void(0)"><i class="ti-pencil-alt"></i></a>
                                            <a href="javascript:void(0)"><i class="ti-check"></i></a>
                                            <a href="javascript:void(0)"><i class="ti-heart"></i></a>
                                        </span>
                                    </div>
                                </div>
                            </div>

                                
                            @endforeach
                            
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Table -->
                <!-- ============================================================== -->
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div>
                                    <h5 class="card-title">Donated Products Overview</h5>
                                    <h6 class="card-subtitle">Check the monthly donation </h6>
                                </div>
                                <div class="ml-auto">
                                    <select class="custom-select b-0">
                                        <option>January</option>
                                        <option value="1">February</option>
                                        <option value="2" selected="">March</option>
                                        <option value="3">April</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="card-body bg-light">
                            <div class="row">
                                <div class="col-6">
                                    <h3>March {{date("Y")}}</h3>
                                    <h5 class="font-light m-t-0">Report for this month</h5>
                                </div>
                                <div class="col-6 align-self-center display-6 text-right">
                                    <h2 class="text-success"></h2>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>NAME</th>
                                        <th>STATUS</th>
                                        <th>DATE</th>
                                        <th>View</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $key=> $product)
                                    <tr>
                                        <td class="text-center">{{$key++}}</td>
                                        <td class="txt-oflo"> {{$product->name}} </td>
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
                                        <td class="txt-oflo">April 18, 2017 {{{ $product->created_at->format("m d, Y")}}} </td>
                                        <td><a href="{{route('products.show',$product)}}"> <i class="fa fa-eye" aria-hidden="true"></i> </a></td>
                                    </tr>
                                        
                                    @endforeach
                                    
                                  
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- End Page Content -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->


@endsection
