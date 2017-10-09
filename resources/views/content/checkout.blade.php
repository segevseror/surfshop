

@extends('master')


@section('content')

<section class="content-block default-bg">
      
        <!-- Container -->
        <div class="container cont-pad-t-sm">
        
          <!-- Cart -->
          <div class="cart">
          
            <!-- Cart Contents -->
            <table class="cart-contents">
              <thead>
                <tr>
                  <th class="hidden-xs">Image</th>
                  <th>Description</th>
                  <th>Qty</th>
                  <th class="hidden-xs">Price</th>
                  <th>Total</th>
                </tr>
              </thead>
              <tbody>
                     @foreach($cartAllItem as $item)
                <tr>
                    <td class="image hidden-xs"><img src="{{ asset('images/products/' . $item['attributes'][0]) }}" title="{{ $item['name'] }}" alt="Product"></td>
                  <td class="details">
                    <div class="clearfix">
                      <div class="pull-left no-float-xs">
                        <a href="#" class="title">{{ $item['name'] }}</a>
                        <div class="rating">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star disabled"></i>
                          <i class="fa fa-star disabled"></i>
                        </div>
                        <span>Code: GK0904</span>
                      </div>
                      <div class="action pull-right no-float-xs">
                        <div class="clearfix">
                          <button class="edit"><i class="fa fa-pencil"></i></button>
                          <button class="refresh"><i class="fa fa-refresh"></i></button>
                          <button class="btn-remove-item delete" data-id='{{$item['id']}}' ><i class="fa fa-trash-o"></i></button>	
                           
                        </div>
                      </div>
                    </div>
                  </td>
                  <td class="text-center">
                    <span class="pull-right">
                        <input type="button" value="+" class="update-quantity" data-id='{{ $item['id'] }}' data-move='plus'>
                    </span>
                  {{ $item['quantity'] }}
                    
                     <span class="pull-left">
                      <input type="button" value="-" class="update-quantity" data-id='{{ $item['id'] }}' data-move='minus'>
                     </span>
                </td>
                  <td class="unit-price hidden-xs"><span class="currency">$</span>{{ $item['price'] }}</td>
                  <td class="total-price"><span class="currency">$</span>{{ $item['quantity'] * $item['price'] }}</td>
                </tr>
                @endforeach
              </tbody>
          
            </table>
            <!-- /Cart Contents -->
            
            <!-- Cart Summary -->
            <table class="cart-summary">
              <tbody><tr>
                <td class="terms">  
                  <h5><i class="fa fa-info-circle"></i> our return policy</h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
               </td>
                <td class="totals"> 
                  <table class="cart-totals">
                    <tbody><tr>
                      <td>Sub Total</td>
                      <td class="price">$ {{ Cart::getTotal() }}</td>
                    </tr>
                    <tr>
                      <td>Shipping</td>
                      <td class="price">$ 500.00</td>
                    </tr>
                    <tr>
                      <td>VAT</td>
                      <td class="price">$ 250.00</td>
                    </tr>
                    <tr>
                      <td class="cart-total">total</td>
                      <td class="cart-total price">$ {{ Cart::getTotal() }}</td>
                    </tr>
                  </tbody></table>
                </td>
              </tr>
            </tbody></table>  
            <!-- /Cart Summary -->

          </div>
          <!-- /Cart -->
      
          <!-- Cart Buttons -->
          <div class="cart-buttons clearfix"> 
            <a class="btn btn-base checkout" href="{{ url('shop/order') }}"><i class="icon-left fa fa-shopping-cart"></i>checkout</a>
            <a class="btn btn-primary checkout" href="{{ url('shop') }}"><i class="icon-left fa fa-arrow-left"></i>continue shopping</a>
          </div>
          <!-- /Cart Buttons -->
          
        </div>
        <!-- /Container -->
        
      </section>
@endsection