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
                        <form action="{{ route('products.store') }}" method="post" class="col-12 row" enctype="multipart/form-data" >
                            @csrf
                            <div class="form-group col-6 ">
                                <label for="name">Product name</label>
                                <input id="name" class="form-control" value="{{old('name')}}" type="text" name="name">
                            </div>
                            <div class="form-group col-6 ">
                                <label for="quantity">Quantity of product donated</label>
                                <input id="quantity" class="form-control" value="{{old('quantity')}}" type="text" name="quantity">
                            </div>
                            <div class="form-group col-6 ">
                                <label for="weight">Weight of products</label>
                                <input id="weight" class="form-control" value="{{old('weight')}}" type="text" name="weight">
                            </div>
                            <div class="form-group col-6 ">
                              <label for="type">Product type</label>
                              <select class="form-control" name="type" value="{{old('type')}}" id="type">
                                <option value="1" >HardWare (touchable) </option>
                                <option value="0" >Software  </option>
                              </select>
                             
                            </div>

                            <div class="form-group col-6 ">
                                <label for="durability">Durability</label>
                                <select id="durability" class="form-control" value="{{old('durability')}}" name="durability">
                                    <option value="0" >long lasting</option>
                                    <option value="1" >Perishable</option>
                                </select>
                            </div>
                            <div class="form-group col-6 ">
                                <label for="expiry_date">Expiry date</label>
                                <input id="expiry_date" class="form-control" value="{{old('expiry_date')}}" type="date" name="expiry_date">
                            </div>
                            <div class="form-group col-6 ">
                                <label for="image">Product Image</label>
                                <input id="image" class="form-control" type="file" name="image">
                            </div>
                            <div class="form-group col-6 ">
                                <label for="location">Location of Product</label>
                                <input id="location" class="form-control" value="{{old('location')}}" type="text" name="location">
                            </div>

                           

                            <div class="form-group col-6 ">
                                <label for="type">Will you facilitate transporation ?</label>
                                <select class="form-control" name="transport" id="transport">
                                  <option value="1" >Yes </option>
                                  <option value="0" >No  </option>
                                </select>
                               
                              </div>
                              <div class="form-group col-6">
                                  <label for="description">Description</label>
                                  <textarea id="description" class="form-control" name="description" rows="3"></textarea>
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