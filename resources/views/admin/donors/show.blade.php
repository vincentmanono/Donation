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
                <button type="button" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i>
                    Create New</button>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <!-- Row -->
    <div class="row">
        <!-- Column -->
        <div class="col-lg-4 col-xlg-3 col-md-5">
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
        <div class="col-lg-8 col-xlg-9 col-md-7">
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


            @foreach ($products as $product)

            @if ($product->user_id == $donor->id)

            <div class="sl-item">
                <div class="sl-left"> <img src="../assets/images/users/2.jpg" alt="user"
                        class="img-circle" /> </div>
                <div class="sl-right">
                    <div> <a href="javascript:void(0)" class="link">{{$product->name}}</a> <span
                            class="sl-date">5 minutes ago</span>
                        <div class="m-t-20 row">
                            <div class="col-md-3 col-xs-12"><img src="../assets/images/big/img1.jpg"
                                    alt="user" class="img-responsive radius" /></div>
                            <div class="col-md-9 col-xs-12">
                                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
                                    nec odio. Praesent libero. Sed cursus ante dapibus diam. </p> <a
                                    href="javascript:void(0)" class="btn btn-success"> Design
                                    weblayout</a>
                            </div>
                        </div>
                        <div class="like-comm m-t-20"> <a href="javascript:void(0)"
                                class="link m-r-10">2 comment</a> <a href="javascript:void(0)"
                                class="link m-r-10"><i class="fa fa-heart text-danger"></i> 5
                                Love</a> </div>
                    </div>
                </div>
            </div>
            <hr>

            @endif

            @endforeach



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
