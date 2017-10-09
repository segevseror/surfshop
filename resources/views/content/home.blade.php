
@extends('master')

@section('content')



      <!-- Intro Block
      ============================================ -->
      <div class="intro-block mgb-20">
      
        <!-- Container -->
        <div class="container">

          <!-- Slider Wrapper -->
          <div class="intro-slider">
          
            <!-- BxSlider -->
            <div class="bxslider" data-call="bxslider" data-options="{pager:false, mode:'fade'}">
            
              <!-- Slide -->
              <div class="slide">
                <img class="img-main" src="images/slides/imgslider1.jpg" alt=""/><!-- slider image + background -->
                <!-- Text -->
                <div class="text">
                    <div class="vcenter" style="color: black">
                    <div class="vcenter-this text-block">
                      <h1 class="bx-layer" data-anim="bounceInDown" data-dur="1000" data-delay="100">SurfShop the best shop</h1><br/>
                   
                    </div>
                  </div>
                </div>
                <!-- /Text -->
              </div>
              <!-- /Slide -->
              
              <!-- Slide -->
              <div class="slide">
                <img class="img-main" src="images/slides/imgslider2.jpg" alt=""/><!-- slider image + background -->
                <!-- Text -->
                <div class="text">
                  <div class="vcenter">
                    <div class="vcenter-this text-block">
                      <h5 class="bx-layer" data-anim="bounceInLeft" data-dur="1000" data-delay="700">from 5th March - 26 March</h5>
                      <h1 class="bx-layer" data-anim="bounceInDown" data-dur="1000" data-delay="100">designer clothes only</h1><br/>
                      <p class="bx-layer" data-anim="bounceInRight" data-dur="1000" data-delay="500">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet consectetur veli..</p>
                      <a class="btn btn-white bx-layer" data-anim="bounceInUp" data-dur="1000" data-delay="1000">shop now</a>
                    </div>
                  </div>
                </div>
                <!-- /Text -->
              </div>
              <!-- /Slide -->
              
              <!-- Slide -->
              <div class="slide">
                <img class="img-main" src="images/slides/imgslider3.jpg" alt=""/><!-- slider image + background -->
                <!-- Text -->
                <div class="text">
                  <div class="vcenter">
                    <div class="vcenter-this text-block">
                        <!--
                      <h5 class="bx-layer" data-anim="bounceInLeft" data-dur="1000" data-delay="700">from 5th March - 26 March</h5>
                      <h1 class="bx-layer" data-anim="bounceInDown" data-dur="1000" data-delay="100">hot summer collection</h1><br/>
                      <p class="bx-layer" data-anim="bounceInRight" data-dur="1000" data-delay="500">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet consectetur veli..</p>
                      <a class="btn btn-primary bx-layer" data-anim="bounceInUp" data-dur="1000" data-delay="1000">shop now</a>
                   -->
                        </div>
                  </div>
                </div>
                <!-- /Text -->
              </div>
              <!-- /Slide -->
            
            </div>
            <!-- /BxSlider -->
            
          </div>
          <!-- Slider Wrapper -->

        </div>
        <!-- /Container -->
      
      </div>
      <!-- /Intro Block
      ============================================ -->
      
      <!-- Content Block
      ============================================ -->
      <div class="content-block">
      
        <!-- Container -->
        <div class="container no-pad-t">

          <!-- Product Tabs -->
          <div class="product-tabs">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs nav-tabs-line-bottom line-pcolor nav-tabs-center case-u" role="tablist">
               
                @foreach($categories as $key => $category)
                <li @if($key == 0) class='active' @endif><a href="#tab-{{ $category['url'] }}" data-toggle="tab">{{ $category['title'] }}</a></li>
             @endforeach
            </ul>
            <!-- /Nav Tabs -->

            <!-- Tab panes -->
            <div class="tab-content tab-no-borders">
              
               
             
              @foreach($categories as $key => $category)
             
              <!-- Tab Latest -->
              <div class="tab-pane @if($key == 0) active @endif" id="tab-{{ $category['url'] }}">
           
                <!-- Row -->
                <div class="row">
   @foreach($product as $products)
              @if($category['id'] == $products['categorie_id'])
                  <!-- Col -->
                  <div class="col-sm-6 col-md-3">
                  
                    <!-- product -->
                    <div class="product clearfix">
                    
                      <!-- Image -->
                      <div class="image"> 
                        <a href="product.html" class="main"><img src="{{ asset('images/products/' . $products['image']) }}" alt=""></a>
                        <ul class="additional">
                          <li><a href="{{ asset('images/products/' . $products['image']) }}" data-gal="prettyPhoto[gallery 8]" title="{{$products['title']}}"><img src="{{ asset('images/products/' . $products['image']) }}" alt="{{$products['title']}}"></a></li>
                          <li><a href="{{ asset('images/products/' . $products['image']) }}" data-gal="prettyPhoto[gallery 8]" title="{{$products['title']}}"><img src="{{ asset('images/products/' . $products['image']) }}" alt="{{$products['title']}}"></a></li>
                          <li><a href="{{ asset('images/products/' . $products['image']) }}" data-gal="prettyPhoto[gallery 8]" title="{{$products['title']}}"><img src="{{ asset('images/products/' . $products['image']) }}" alt="{{$products['title']}}"></a></li>
                          <li><a href="{{ asset('images/products/' . $products['image']) }}" data-gal="prettyPhoto[gallery 8]" title="{{$products['title']}}"><img src="{{ asset('images/products/' . $products['image']) }}" alt="{{$products['title']}}"></a></li>
                        </ul>
                      </div>
                      <!-- Image -->
                      
                      <!-- Details -->
                      <div class="details">
                      
                        <a class="title" href="{{ url('search/searchproduct?textsearch=' . $products['title']) }}">{{ $products['title'] }}</a>
                        
                        <!-- rating -->
                        <ul class="hlinks hlinks-rating">
                          <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                          <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                          <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                          <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                          <li><a href="#"><i class="icon fa fa-star"></i></a></li>
                        </ul>
                        <!-- /rating -->
                        
                        <p class="desc">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates.</p>
                        
                        <!-- Price Box -->
                        <div class="price-box">
                            ש"ח
                          <span class="price">{{$products['price']}}</span>
                        </div>
                        <!-- /Price Box -->
                        
                        <!-- buttons -->
                        <div class="btn-group" id="btn-group{{ $products['id'] }}">
                               @if( ! Cart::get($products['id'] ) )
                        <a class="add-to-cart btn btn-outline btn-base-hover" data-id='{{ $products['id'] }}' id="{{ 'btn-add-item' . $products['id']}}">add to cart</a>
                   
                        @else
                        <a class="btn btn-outline btn-base-hover">in cart</a>
                        @endif
                          <a class="btn btn-outline btn-default-hover" href="product.html"><i class="icon fa fa-heart"></i></a>
                        </div> 
                        <!-- /buttons -->
                        
                      </div>
                      <!-- /Details -->
                      
                    </div>
                    <!-- /product -->
                  
                  </div>
                  <!-- /Col -->
                @endif
              @endforeach
                </div>
                <!-- /Row -->
              
              </div>
              <!-- /Tab Latest -->
 
              
              @endforeach
            </div>
            <!-- /Tab Panes -->
            
          </div>
          <!-- /Product Tabs -->
          
        </div>
        <!-- /Container -->
        
      </div>
      <!-- /Content Block
      ============================================ -->
      
      <!-- Content Block
      ============================================ -->
      <div class="content-block boxed-section cover-3-bg overlay-dark-m" >
      
        <!-- Container -->
        <div class="container cont-lg">
        
          <!-- Promo Text -->
          <div class="promo-text">
            <h5>from 5th March - 26 March</h5>
            <h1 class="boxed">dont miss the great summer sale</h1>
            <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet consectetur veli.</p>
            <a class="btn btn-primary btn-borderless">shop now</a>
          </div>
          <!-- Promo Text -->
        
        </div>
        <!-- /Container -->
        
      </div>  
      <!-- /Content Block
      ============================================ -->
 
      <!-- Content Block
      ============================================ -->
      <div class="content-block" >
      
        <!-- Container -->
        <div class="container cont-md">
        
          <!-- Section Title -->
          <div class="section-title line-pcolor">
            <h2>all premium brands</h2>
            <p>Helena is a freelance fashion designer who specialises in print designs and combining fabrics. My designs have been sold all over the world.</p>
          </div>
          <!-- /Section Title -->
          
          <!-- Slider Wrapper -->
          <div class="brand-slider">
          
            <!-- BxSlider -->
            <div class="bxslider" data-call="bxslider" data-options="{pager:false, slideMargin:20}" data-breaks="[{screen:0, slides:2}, {screen:460, slides:3}, {screen:768, slides:5}]">
              
              <!-- Slide -->
              <div class="slide">
                <img class="img-main" src="images/company1.jpg" alt=""/>
              </div>
              <!-- /Slide -->

              <!-- Slide -->
              <div class="slide">
                <img class="img-main" src="images/company1.jpg" alt=""/>
              </div>
              <!-- /Slide -->
              
              <!-- Slide -->
              <div class="slide">
                <img class="img-main" src="images/company1.jpg" alt=""/>
              </div>
              <!-- /Slide -->
              
              <!-- Slide -->
              <div class="slide">
                <img class="img-main" src="images/company1.jpg" alt=""/>
              </div>
              <!-- /Slide -->
              
              <!-- Slide -->
              <div class="slide">
                <img class="img-main" src="images/company1.jpg" alt=""/>
              </div>
              <!-- /Slide -->
              
              <!-- Slide -->
              <div class="slide">
                <img class="img-main" src="images/company1.jpg" alt=""/>
              </div>
              <!-- /Slide -->
              
              <!-- Slide -->
              <div class="slide">
                <img class="img-main" src="images/company1.jpg" alt=""/>
              </div>
              <!-- /Slide -->
            </div>
            <!-- /BxSlider -->
            
          </div>
          <!-- Slider Wrapper -->
        </div>
        <!-- /Container -->
      
      </div>
      <!-- Content Block
      ============================================ -->

      <!-- Newsletter Block
      ============================================ -->
      <div class="newsletter-block boxed-section overlay-dark-m cover-2-bg">
      
        <!-- Container -->
        <div class="container">
          <form>
            <!-- Row -->
            <div class="row grid-10">
              <!-- Col -->
              <div class="col-sm-3 col-md-2">
                <span class="case-c">get newsletter</span>
              </div>
              <!-- Col -->
              
              <!-- Col -->
              <div class="col-sm-6 col-md-8">
                  <input class="form-control" type="text" placeholder="Enter your email address" />
              </div>
              <!-- Col -->
              
              <!-- Col -->
              <div class="col-sm-3 col-md-2">
                <button class="btn btn-block btn-color yellow-bg"><i class="icon-left fa fa-envelope"></i>subscribe</button>
              </div>
              <!-- /Col -->
              
            </div>
            <!-- /Row -->
          </form>
        </div>
        <!-- /Container -->
      
      </div>
      <!-- /Newsletter Block
      =================================================== -->


@endsection


