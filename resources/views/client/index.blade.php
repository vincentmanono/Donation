@extends('layouts.clientapp')
@section('content')

<div class="owl-carousel-wrapper">



    <div class="box-92819">
        <h1 class="text-white mb-3">Join The Movement To end Starvation and Malnutrition</h1>
        <p><a href="{{route('login')}}" class="btn btn-primary py-3 px-4 rounded-0">Donate Now</a></p>
    </div>

    <div class="owl-carousel owl-1 ">
        <div class="ftco-cover-1 overlay" style="background-image: url('/client/assets/images/hero_1.jpg');"></div>
        <div class="ftco-cover-1 overlay" style="background-image: url('/client/assets/images/hero_2.jpg');"></div>
        <div class="ftco-cover-1 overlay" style="background-image: url('/client/assets/images/hero_3.jpg');"></div>

    </div>
</div>


<div class="container">
    <div class="feature-29192-wrap d-md-flex" style="margin-top: -20px; position: relative; z-index: 2;">

        <a href="#" class="feature-29192 overlay-danger"
            style="background-image: url('/client/assets/images/img_3_gray.jpg');">
            <div class="text">
                <span class="meta">Livelihood</span>
                <h3 class="text-cursive text-white h1">Livelihood</h3>
            </div>
        </a>

        <a class="feature-29192 overlay-success" style="background-image: url('/client/assets/images/img_2_gray.jpg');">
            <div class="text">
                <span class="meta">Health</span>
                <h3 class="text-cursive text-white h1">Natural Remedies</h3>
            </div>
        </a>

        <div class="feature-29192 overlay-warning"
            style="background-image: url('/client/assets/images/img_1_gray.jpg');">
            <div class="text">
                <span class="meta">School</span>
                <h3 class="text-cursive text-white h1">Education</h3>
            </div>
        </div>

    </div>
</div>

<div class="site-section">
    <div class="container">

        <div class="row mb-5 align-items-st">
            <div class="col-md-4">
                <div class="heading-20219">
                    <h2 class="title text-cursive">Latest donations</h2>
                </div>
            </div>
            <div class="col-md-8">
                <p>

                </p>
            </div>
        </div>

        <div class="row">
            @foreach ($products as $product)
            <div class="col-md-4">

                <div class="cause shadow-sm">

                    <a href="#" class="cause-link d-block">
                        <img src="/client/assets/images/img_3.jpg" alt="Image" class="img-fluid">
                        <div class="custom-progress-wrap">
                            <span class="caption">80% complete</span>
                            <div class="custom-progress-inner">
                                <div class="custom-progress bg-warning" style="width:80%;"></div>
                            </div>
                        </div>
                    </a>

                    <div class="px-3 pt-3 border-top-0 border border ">
                        <span class="badge-warning py-1 small px-2 rounded mb-3 d-inline-block">{{$product->name}}</span>
                        <h3 class="mb-4"><a href="#">{{$product->location}}</a></h3>
                        <div class="border-top border-light border-bottom py-2 d-flex">
                            <div>Donated Quantity</div>

                          @php
                              $limit = 1000;
                              $perc =100;
                              $quant = $product->quantity;
                              $percentage = ($quant * $perc)/$limit;
                          @endphp
                            <div class="ml-auto"><strong class="" style="color: white">{{$product->quantity}}</strong></div>
                        </div>

                        <div class="py-4">
                            <div class="d-flex align-items-center">
                                <img src="/client/assets/images/person_1.jpg" alt="Image" class="rounded-circle mr-3"
                                    width="50">
                                    <div>Donor: </div>
                                <div class="" style="color: white">{{$product->donor->name}}</div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            @endforeach

        </div>
    </div>
</div>

<div class="bg-image overlay site-section" style="background-image: url('/client/assets/images/hero_1.jpg');">
    <div class="container">

        <div class="row align-items-center">
            <div class="col-12">
                <div class="row mb-5">
                    <div class="col-md-7">
                        <div class="heading-20219">
                            <h2 class="title text-white mb-4 text-cursive">Why Help Us</h2>
                            <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt
                                ipsam repellendus voluptatum, totam magni iusto numquam quo eos dolor perferendis.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-5">
                        <div class="feature-29012 d-flex">
                            <div class="number mr-4"><span>1</span></div>
                            <div>
                                <h3>Odit Reiciendis</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi id sint explicabo odit
                                    reiciendis eaque accusamus labore necessitatibus.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-5">
                        <div class="feature-29012 d-flex">
                            <div class="number mr-4"><span>2</span></div>
                            <div>
                                <h3>Nisi Sint Explicabo</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi id sint explicabo odit
                                    reiciendis eaque accusamus labore necessitatibus.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mb-5">
                        <div class="feature-29012 d-flex">
                            <div class="number mr-4"><span>3</span></div>
                            <div>
                                <h3>Accusamus Labore Necessitatibus</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi id sint explicabo odit
                                    reiciendis eaque accusamus labore necessitatibus.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-5">
                        <div class="feature-29012 d-flex">
                            <div class="number mr-4"><span>4</span></div>
                            <div>
                                <h3>Consectetur Dolor Elit</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi id sint explicabo odit
                                    reiciendis eaque accusamus labore necessitatibus.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>


@include('includes.donate')

@endsection
