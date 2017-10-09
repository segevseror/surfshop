    
@extends('master')

@section('content')

<br><br>


<section class="content-block default-bg" ng-app="myApp">
    <div ng-controller="myCtrl">
        <!-- Container -->
        <div class="container cont-main no-pad-t">

            <!-- Row -->
            <div class="row">

                <!-- Main Col -->
                <div class="main-col col-sm-9 col-md-9">

                    <!-- Products Filter -->
                    <div class="products-filter clearfix">
                        <div class="display">
                            <span class="show-list" onclick="changeView('list')"><span class="text hidden-xs">List</span><i class="icon fa fa-th-list"></i></span>
                            <span class="show-grid" onclick="changeView('grid')"><span class="text hidden-xs">Grid</span><i class="icon fa fa-th"></i></span>
                        </div>


                        <div class="filter"><b class="hidden-xs">Sort By</b>
                            <select ng-model="sortorder">
                                <option value="+name">A-Z</option>
                                <option value="+price">Price low-high</option>
                                <option value="-price">Price high-low</option>
                            </select>
                        </div>

                    </div>
                    <!-- /Products Filter -->


                    <!-- Row -->
                    <div class="product-grid row grid-20 mgb-20">





                        <!-- Col -->

                        <div class="col-sm-6 col-md-3"  ng-repeat="product in products| orderBy: sortorder">

                            <!-- product -->
                            <div class="product clearfix">

                                <!-- Image -->
                                <div class="image"> 
                                    <a href="product.html" class="main"><img src="{{url('images/products')}}/<% product['image'] %>" width="50" height="50" alt=""></a>
                                    <ul class="additional">
                                        <li><a href="{{url('images/products')}}/<% product['image'] %>" data-gal="prettyPhoto[gallery 1]" title="Product Name"><img src="{{url('images/products')}}/<% product['image'] %>" alt=""></a></li>
                                        <li><a href="{{url('images/products')}}/<% product['image'] %>" data-gal="prettyPhoto[gallery 1]" title="Product Name"><img src="{{url('images/products')}}/<% product['image'] %>" alt=""></a></li>
                                        <li><a href="{{url('images/products')}}/<% product['image'] %>" data-gal="prettyPhoto[gallery 1]" title="Product Name"><img src="{{url('images/products')}}/<% product['image'] %>" alt=""></a></li>
                                        <li><a href="{{url('images/products')}}/<% product['image'] %>" data-gal="prettyPhoto[gallery 1]" title="Product Name"><img src="{{url('images/products')}}/<% product['image'] %>" alt=""></a></li>
                                    </ul>
                                </div>

                                <!-- Image -->

                               

                                <!-- Details -->
                                <div class="details">

                                    <a class="title" href="product.html"><% product['title']%></a>

                                    <!-- rating -->
                                    <ul class="hlinks hlinks-rating">
                                        <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                                        <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                                        <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="icon fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="icon fa fa-star"></i></a></li>
                                    </ul>
                                    <!-- /rating -->

                                    <p class="desc">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates.</p>

                                    <!-- Price Box -->
                                    <div class="price-box">
                                       <span class="price">ש"ח <% product['price'] %></span>
                                    </div>
                                    <!-- /Price Box -->

                                    <!-- buttons -->

                                    
                                        <div ng-if="checkCart(product['id'])">
                                            <a class="add-to-cart btn btn-outline btn-base-hover" id="btn-add-item<% product['id'] %>" ng-pi="<% product['id'] %>">in cart</a>
                                        </div>
                                   <div ng-if="! checkCart(product['id'])">
                                            <a class="add-to-cart btn btn-outline btn-base-hover" id="btn-add-item<% product['id'] %>" ng-pi="<% product['id'] %>">add to cart</a>
                                        </div>
                                 
                                    

                                    <!-- /buttons -->

                                </div>
                                <!-- /Details -->

                            </div>
                            <!-- /product -->

                        </div>

                        <!-- /Col -->


                        <div ng-hide="products.length">

                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <b>No product found...</b>
                                </div>
                            </div>

                        </div>

                    </div>
                    <!-- /Row -->

                    <!-- Pagination -->
                    <ul class="pagination">
                        <li><a href="#">«</a></li>
                        <li><a href="#">1</a></li>

                        <li><a href="#">»</a></li>
                    </ul>
                    <!-- /Pagination -->

                </div>
                <!-- /Main Col -->

                <!-- Side Col -->
                <div class="side-col col-sm-3 col-md-3">

                    <!-- Side Widget -->
                    <div class="side-widget no-margin-l">

                        <h5 class="boxed-title">All Categories</h5>

                        <!-- ul-toggle -->
                        <ul>
                            @if($categories)
                            <ul>
                                @foreach($categories as $categorie)
                                <li>
                                    <a href="{{ url('shop/'.$categorie['url'])}}">{{ $categorie['title']}}</a> 
                                </li>
                                @endforeach
                            </ul>
                            @endif
                        </ul>
                        <!-- /ul-toggle -->

                    </div>
                    <!-- /Side Widget -->



                    <!-- Side Widget -->
                    <div class="side-widget no-margin-l">

                        <h5 class="boxed-title">price filter</h5>

                        <!-- Price Range Form -->
                        <form class="side-form-panel" ng-model="maxmin">
                            <label>Min Price</label>
                            <div class="form-group slider-group" id="forms">
                                <div  class="slider-ctrl ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" data-call="jui-slider" data-target="#min1" data-options="{min:0, max:1000, value:500}"><div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min" style="width: 50%;"></div><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 50%;"></span></div>
                                <input id="min1" class="form-control" value="500" type="text">
                            </div>              
                            <label>Max Price</label>
                            <div class="form-group slider-group">
                                <div class="slider-ctrl ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" data-call="jui-slider" data-target="#max1" data-options="{min:0, max:6000, value:3000}"><div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min" style="width: 50%;"></div><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 50%;"></span></div>
                                <input id="max1" class="form-control" value="3000" type="text">
                            </div>  
                            <button class="btn btn-outline btn-block" id="btn-maxmin">submit</button>
                        </form>
                        <!-- /Price Range Form -->

                    </div>
                    <!-- /Side Widget -->

                </div>
                <!-- /Side Col -->

            </div>
            <!-- /Row -->
        </div>
    </div>
    <!-- /Container -->

</section>


@endsection