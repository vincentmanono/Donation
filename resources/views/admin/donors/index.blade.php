@extends('layouts.adminapp')
@section('content')
<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Donors Table</h4>
        </div>
        <div class="col-md-7 align-self-center text-right">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item active">Donors</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Donors </h4>
                    <div class="table-responsive m-t-40">
                        <table id="example23" class="display nowrap table table-hover table-striped table-bordered"
                            cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Doneted By</th>
                                    <th>Email</th>
                                    <th>Products</th>
                                    <th>Action</th>
                                </tr>

                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Doneted By</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach ($donors as $donor)
                                <tr>
                                    <td> {{$donor->name}} </td>
                                    <td> {{ $donor->email}} </td>
                                    <td> {{$donor->products_count}} </td>
                                    <td>
                                        <div class="row">
                                            <div>
                                                <a href="{{route('donors.show',$donor->id)}}"> <i class="fa fa-eye"
                                                        aria-hidden="true">View</i> </a>
                                    </td>
                    </div>
                </div>


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
</div>

@endsection
