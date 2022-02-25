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
                            <li class="breadcrumb-item active">Dashboard 1</li>
                        </ol>
                        <button type="button" class="btn btn-info d-none d-lg-block m-l-15"><i
                                class="fa fa-plus-circle"></i> Create New</button>
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
                                        <h2 class="counter text-primary">23</h2>
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
                                        <h2 class="counter text-cyan">169</h2>
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
                            <h5 class="card-title">Recent Comments</h5>
                        </div>
                        <!-- ============================================================== -->
                        <!-- Comment widgets -->
                        <!-- ============================================================== -->
                        <div class="comment-widgets">
                            <!-- Comment Row -->
                            <div class="d-flex no-block comment-row">
                                <div class="p-2"><span class="round"><img src="{{asset('admin/assets/images/users/1.jpg')}}" alt="user"
                                            width="50"></span></div>
                                <div class="comment-text w-100">
                                    <h5 class="font-medium">James Anderson</h5>
                                    <p class="m-b-10 text-muted">Lorem Ipsum is simply dummy text of the printing and
                                        type setting industry. Lorem Ipsum has beenorem Ipsum is simply dummy text of
                                        the printing and type setting industry.</p>
                                    <div class="comment-footer">
                                        <span class="text-muted pull-right">April 14, 2016</span> <span
                                            class="badge badge-pill badge-info">Pending</span> <span
                                            class="action-icons">
                                            <a href="javascript:void(0)"><i class="ti-pencil-alt"></i></a>
                                            <a href="javascript:void(0)"><i class="ti-check"></i></a>
                                            <a href="javascript:void(0)"><i class="ti-heart"></i></a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!-- Comment Row -->
                            <div class="d-flex no-block comment-row border-top">
                                <div class="p-2"><span class="round"><img src="/images/users/2.jpg" alt="user"
                                            width="50"></span></div>
                                <div class="comment-text active w-100">
                                    <h5 class="font-medium">Michael Jorden</h5>
                                    <p class="m-b-10 text-muted">Lorem Ipsum is simply dummy text of the printing and
                                        type setting industry. Lorem Ipsum has beenorem Ipsum is simply dummy text of
                                        the printing and type setting industry..</p>
                                    <div class="comment-footer">
                                        <span class="text-muted pull-right">April 14, 2016</span>
                                        <span class="badge badge-pill badge-success">Approved</span>
                                        <span class="action-icons active">
                                            <a href="javascript:void(0)"><i class="ti-pencil-alt"></i></a>
                                            <a href="javascript:void(0)"><i class="icon-close"></i></a>
                                            <a href="javascript:void(0)"><i class="ti-heart text-danger"></i></a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!-- Comment Row -->
                            <div class="d-flex no-block comment-row border-top">
                                <div class="p-2"><span class="round"><img src="/images/users/3.jpg" alt="user"
                                            width="50"></span></div>
                                <div class="comment-text w-100">
                                    <h5 class="font-medium">Johnathan Doeting</h5>
                                    <p class="m-b-10 text-muted">Lorem Ipsum is simply dummy text of the printing and
                                        type setting industry. Lorem Ipsum has beenorem Ipsum is simply dummy text of
                                        the printing and type setting industry.</p>
                                    <div class="comment-footer">
                                        <span class="text-muted pull-right">April 14, 2016</span>
                                        <span class="badge badge-pill badge-danger">Rejected</span>
                                        <span class="action-icons">
                                            <a href="javascript:void(0)"><i class="ti-pencil-alt"></i></a>
                                            <a href="javascript:void(0)"><i class="ti-check"></i></a>
                                            <a href="javascript:void(0)"><i class="ti-heart"></i></a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!-- Comment Row -->
                            <div class="d-flex no-block comment-row border-top">
                                <div class="p-2"><span class="round"><img src="/images/users/4.jpg" alt="user"
                                            width="50"></span></div>
                                <div class="comment-text active w-100">
                                    <h5 class="font-medium">Genelia doe</h5>
                                    <p class="m-b-10 text-muted">Lorem Ipsum is simply dummy text of the printing and
                                        type setting industry. Lorem Ipsum has beenorem Ipsum is simply dummy text of
                                        the printing and type setting industry..</p>
                                    <div class="comment-footer">
                                        <span class="text-muted pull-right">April 14, 2016</span>
                                        <span class="badge badge-pill badge-success">Approved</span>
                                        <span class="action-icons active">
                                            <a href="javascript:void(0)"><i class="ti-pencil-alt"></i></a>
                                            <a href="javascript:void(0)"><i class="icon-close"></i></a>
                                            <a href="javascript:void(0)"><i class="ti-heart text-danger"></i></a>
                                        </span>
                                    </div>
                                </div>
                            </div>
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
                                    <h5 class="card-title">Sales Overview</h5>
                                    <h6 class="card-subtitle">Check the monthly sales </h6>
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
                                    <h3>March 2017</h3>
                                    <h5 class="font-light m-t-0">Report for this month</h5>
                                </div>
                                <div class="col-6 align-self-center display-6 text-right">
                                    <h2 class="text-success">$3,690</h2>
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
                                        <th>PRICE</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td class="txt-oflo">Elite admin</td>
                                        <td><span class="badge badge-success badge-pill">sale</span> </td>
                                        <td class="txt-oflo">April 18, 2017</td>
                                        <td><span class="text-success">$24</span></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">2</td>
                                        <td class="txt-oflo">Real Homes WP Theme</td>
                                        <td><span class="badge badge-info badge-pill">extended</span></td>
                                        <td class="txt-oflo">April 19, 2017</td>
                                        <td><span class="text-info">$1250</span></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">3</td>
                                        <td class="txt-oflo">Ample Admin</td>
                                        <td><span class="badge badge-info badge-pill">extended</span></td>
                                        <td class="txt-oflo">April 19, 2017</td>
                                        <td><span class="text-info">$1250</span></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">4</td>
                                        <td class="txt-oflo">Medical Pro WP Theme</td>
                                        <td><span class="badge badge-danger badge-pill">tax</span></td>
                                        <td class="txt-oflo">April 20, 2017</td>
                                        <td><span class="text-danger">-$24</span></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">5</td>
                                        <td class="txt-oflo">Hosting press html</td>
                                        <td><span class="badge badge-success badge-pill">sale</span></td>
                                        <td class="txt-oflo">April 21, 2017</td>
                                        <td><span class="text-success">$24</span></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">6</td>
                                        <td class="txt-oflo">Digital Agency PSD</td>
                                        <td><span class="badge badge-success badge-pill">sale</span> </td>
                                        <td class="txt-oflo">April 23, 2017</td>
                                        <td><span class="text-danger">-$14</span></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">7</td>
                                        <td class="txt-oflo">Helping Hands WP Theme</td>
                                        <td><span class="badge badge-warning badge-pill">member</span></td>
                                        <td class="txt-oflo">April 22, 2017</td>
                                        <td><span class="text-success">$64</span></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">8</td>
                                        <td class="txt-oflo">Ample Admin</td>
                                        <td><span class="badge badge-info badge-pill">extended</span></td>
                                        <td class="txt-oflo">April 19, 2017</td>
                                        <td><span class="text-info">$1250</span></td>
                                    </tr>
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
