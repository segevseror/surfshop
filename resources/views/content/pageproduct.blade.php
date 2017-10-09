
@extends('master')

@section('content')


@if(!empty($search))
<div class="row product-details">

    <!-- Col -->
    <div class="col-md-5 mgb-30-xs">

        <!-- Slider Wrapper -->
        <div class="main-slider">
            <!-- BxSlider -->
            <ul class="bxslider" data-call="bxslider" data-options="{pagerCustom:'#thumb-pager', controls:false}">
                <li>
                    <img class="fillw" src="{{ asset('images/products/'. $search[0]['image']) }}" alt="">
        </l                i>

        </ul>
      <!-- /BxSlider -->
              </div>
              <!-- /Slider Wrapper -->

              <!-- Slider Wrapper -->
     <div class="thumb-slider bx-controls-box">
                <!-- BxSlider -->
                <ul id="thumb-pager" class="bxslider" data-call="bxslider" data-options="{pager:false, slides:4, slideMargin:10}">
                  <li>
      <a data-slide-index="0" href="#"><img class="fillw"       src="{{ asset('images/products/'. $search[0]['image']) }}" alt=""></a>
                  </li>
                  <li>
                    <a data-slide-index="1" href="#"><img class="fillw" src="{{ asset('images/products/'. $search[0]['image']) }}" alt=""></a>
                        </li>

                    </ul>
                    <!-- /BxSlider -->
                </div>
                <!-- /Slider Wrapper -->

                </div>
                <!-- /Col -->

                <!-- Col -->
                <div class="col-md-7">

                    <div class="product-rating clearfix">
                        <!-- hlinks -->
                        <ul class="hlinks hlinks-rating">
                            <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                            <li class="active"><a href="#" class="active"><i class="icon fa fa-star"></i></a></li>
                            <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                            <li><a href="#"><i class="icon fa fa-star"></i></a></li>
                            <li><a href="#"><i class="icon fa fa-star"></i></a></li>
                        </ul>
                        <!-- /hlinks -->
                        <span class="text">26 review(s)</span>
                    </div>

                    <h3 class="product-title">Selected product title appears here</h3>

                    <div class="price-box">
                        <h4 class="product-price">{{ $search[0]['price'] }} ש"ח</h4>
                    </div>

                    <!-- Accordion -->
                    <div class="panel-group" id="accordion">

                        <!-- Panel -->
                        <div class="panel panel-default">
                            <!-- Heading -->
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                        Product Details
                                    </a>
                                </h4>
                            </div>
                            <!-- /Heading -->

                            <!-- Collapse -->
                            <div id="collapseOne" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    {{ $search[0]['article'] }}
                                </div>
                            </div>
                            <!-- /Collapse -->

                        </div>
                        <!-- /Panel -->

                        <!-- Panel -->
                        <div class="panel panel-default">
                            <!-- Heading -->
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                        Product Specifications
                                    </a>
                                </h4>
                            </div>
                            <!-- /Heading -->

                            <!-- Collapse -->
                            <div id="collapseTwo" class="panel-collapse collapse">
                                <div class="panel-body">
                                    {{ $search[0]['article'] }}   
                                </div>
                            </div>
                            <!-- /Collapse -->

                        </div>
                        <!-- /Panel -->

                        <!-- Panel -->
                        <div class="panel panel-default">
                            <!-- Heading -->
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                        Additional Information
                                    </a>
                                </h4>
                            </div>
                            <!-- /Heading -->

                            <!-- Collapse -->
                            <div id="collapseThree" class="panel-collapse collapse">
                                <div class="panel-body">
                                     {{ $search[0]['article'] }}
                                </div>
                            </div>
                            <!-- /Collapse -->

                        </div>
                        <!-- /Panel -->

                    </div>
                    <!-- /Accordion -->

                    <h4>Buy now</h4>
                    <!-- Row -->
                    <div class="row grid-20">
                        <!-- Col -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- Input Group -->
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="icon fa fa-eye"></i></div>
                                    <select class="form-control">
                                        <option>Select Style</option>
                                        <option>Italian</option>
                                        <option>French</option>
                                        <option>American</option>
                                    </select>
                                </div>
                                <!-- /Input Group -->
                            </div>
                            <!-- /Form Group -->
                            <div class="form-group">
                                <!-- Input Group -->
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="icon fa fa-male"></i></div>
                                    <select class="form-control">
                                        <option>Select size</option>
                                        <option>Large</option>
                                        <option>Medium</option>
                                        <option>Small</option>
                                    </select>
                                </div>
                                <!-- /Input Group -->
                            </div>


                        </div>
                        <!-- /Col -->

                        <!-- Col -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- Input Group -->
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="icon fa fa-calculator"></i></div>
                                    <select class="form-control">
                                        <option>Select Quantity</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                                <!-- /Input Group -->
                            </div>
                            <!-- /Form Group -->

                            <!-- /Form Group -->
                            <div class="form-group">
                                <!-- Input Group -->
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="icon fa fa-paint-brush"></i></div>
                                    <select class="form-control">
                                        <option>Select Color</option>
                                        <option>Red</option>
                                        <option>Orange</option>
                                        <option>Yellow</option>
                                        <option>Green</option>
                                    </select>
                                </div>
                                <!-- /Input Group -->
                            </div>
                            <!-- /Form Group -->



                        </div>
                        <!-- /Col -->

                    </div>
                    <!-- /Row -->

                    <a data-id='{{ $search[0]['id'] }}' id="{{ 'btn-add-item' . $search[0]['id']}}" class="add-to-cart btn btn btn-default btn-bigger"><i class="icon-left ti ti-shopping-cart"></i>add to cart</a>
                 

                </div>
                <!-- /Col -->

                </div>
@else
<div class="row">
    <br><br>
    <div class="col-md-12 text-center alert alert-danger">
        No have products....
    </div>
    <br><br>
</div>
@endif
                @endsection