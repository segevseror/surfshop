    
@extends('master')

@section('content')

<br><br>


<section class="content-block default-bg" ng-app="myApp">
      
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

                <div class="filter"><b class="hidden-xs">No</b>
                  <select>
                  <option value="9" selected="selected">9</option>
                  <option value="12">12</option>
                  <option value="15">15</option>
                  <option value="18">18</option>
                  </select>
                </div>
                
                <div class="filter"><b class="hidden-xs">Sort By</b>
                  <select>
                  <option value="9" selected="selected">Date</option>
                  <option value="12">Price</option>
                  <option value="15">Popularity</option>
                  </select>
                </div>
              
              </div>
              <!-- /Products Filter -->
              
               <div class="col-sm-6 col-md-4">
                
                  <!-- product -->
                  <div class="product clearfix">
                  
                    <!-- Image -->
                    
                    <div class="image"> 
                        <a href="product.html" class="main"><img src="http://localhost/surfshop/public/images/products/clo.jpg" width="50" height="50" alt=""></a>
                      <ul class="additional">
                        <li><a href="http://localhost/surfshop/public/images/products/clo.jpg" data-gal="prettyPhoto[gallery 1]" title="Product Name"><img src="http://localhost/surfshop/public/images/products/clo.jpg" alt=""></a></li>
                        <li><a href="http://localhost/surfshop/public/images/products/clo.jpg" data-gal="prettyPhoto[gallery 1]" title="Product Name"><img src="http://localhost/surfshop/public/images/products/clo.jpg" alt=""></a></li>
                        <li><a href="http://localhost/surfshop/public/images/products/clo.jpg" data-gal="prettyPhoto[gallery 1]" title="Product Name"><img src="http://localhost/surfshop/public/images/products/clo.jpg" alt=""></a></li>
                        <li><a href="http://localhost/surfshop/public/images/products/clo.jpg" data-gal="prettyPhoto[gallery 1]" title="Product Name"><img src="http://localhost/surfshop/public/images/products/clo.jpg" alt=""></a></li>
                      </ul>
                    </div>
                    <!-- Image -->
                    
                    <span class="label label-sale">sale</span>
                    
                    <!-- Details -->
                    <div class="details">
                    
                                            <a class="title" href="product.html">@{{ product['title'] }}</a>

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
                        <span class="price price-old">$2350</span><span class="price">$ @{{ product['price'] }}</span>
                      </div>
                      <!-- /Price Box -->
                      
                      <!-- buttons -->
                   
                      <!-- /buttons -->
                      
                    </div>
                    <!-- /Details -->
                    
                  </div>
                  <!-- /product -->
                
                </div>
              
              
            
              <!-- Row -->
              <div class="product-grid row grid-20 mgb-20">
     
                
                 <div ng-controller="myCtrl">
                 <div ng-repeat="product in products">
                <!-- Col -->
                 
                <div class="col-sm-6 col-md-4">
                
                  <!-- product -->
                  <div class="product clearfix">
                  
                    <!-- Image -->
                    
                    <div class="image"> 
                        <a href="product.html" class="main"><img src="http://localhost/surfshop/public/images/products/clo.jpg" width="50" height="50" alt=""></a>
                      <ul class="additional">
                        <li><a href="" data-gal="prettyPhoto[gallery 1]" title="Product Name"><img src="http://localhost/surfshop/public/images/products/clo.jpg" alt=""></a></li>
                        <li><a href="http://localhost/surfshop/public/images/products/clo.jpg" data-gal="prettyPhoto[gallery 1]" title="Product Name"><img src="http://localhost/surfshop/public/images/products/clo.jpg" alt=""></a></li>
                        <li><a href="http://localhost/surfshop/public/images/products/clo.jpg" data-gal="prettyPhoto[gallery 1]" title="Product Name"><img src="http://localhost/surfshop/public/images/products/clo.jpg" alt=""></a></li>
                        <li><a href="http://localhost/surfshop/public/images/products/clo.jpg" data-gal="prettyPhoto[gallery 1]" title="Product Name"><img src="http://localhost/surfshop/public/images/products/clo.jpg" alt=""></a></li>
                      </ul>
                    </div>
                    <!-- Image -->
                    
                    <span class="label label-sale">sale</span>
                    
                    <!-- Details -->
                    <div class="details">
                    
                                            <a class="title" href="product.html">@{{ product['title'] }}</a>

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
                        <span class="price price-old">$2350</span><span class="price">$ @{{ product['price'] }}</span>
                      </div>
                      <!-- /Price Box -->
                      
                      <!-- buttons -->
                   
                      <!-- /buttons -->
                      
                    </div>
                    <!-- /Details -->
                    
                  </div>
                  <!-- /product -->
                
                </div>
                <!-- /Col -->
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
          
                <!-- /ul-toggle -->
          
              </div>
              <!-- /Side Widget -->
              

              
              <!-- Side Widget -->
              <div class="side-widget no-margin-l">
              
                <h5 class="boxed-title">price filter</h5>
                
                <!-- Price Range Form -->
                <form class="side-form-panel">
                  <label>Min Price</label>
                  <div class="form-group slider-group">
                    <div class="slider-ctrl ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" data-call="jui-slider" data-target="#min1" data-options="{min:0, max:1000, value:500}"><div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min" style="width: 50%;"></div><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 50%;"></span></div>
                    <input id="min1" class="form-control" value="500" type="text">
                  </div>              
                  <label>Max Price</label>
                  <div class="form-group slider-group">
                    <div class="slider-ctrl ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" data-call="jui-slider" data-target="#max1" data-options="{min:0, max:1000, value:500}"><div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min" style="width: 50%;"></div><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 50%;"></span></div>
                    <input id="max1" class="form-control" value="500" type="text">
                  </div>  
                  <button class="btn btn-outline btn-block">submit</button>
                </form>
                <!-- /Price Range Form -->
              
              </div>
              <!-- /Side Widget -->

            </div>
            <!-- /Side Col -->

          </div>
          <!-- /Row -->
        
        </div>
        <!-- /Container -->
        
      </section>


@endsection