

@extends('master')


@section('content')

<br><br><br>
<div class="row">
  
    <div class="col-md-6">
         <img  src="{{ asset('/images/product/' .$items['image'] ) }}" width="500" height="350" alt="feature-collection-image">
    </div>
    <div class="rol-md-6">
         <h3>{{ $title }}</h3>
         <p class="col-md-3">{{ $items['article'] }}</p>
         <p class="col-md-6"><b>Price: </b> {{ $items['price'] }} $</p>
         
                @if( ! Cart::get($items['id'] ) )
          
                            <button data-id='{{ $items['id'] }}' id="{{ 'btn-add-item' . $items['id']}}" type="button" class="add-to-cart btn btn-success" >Add to cart</button> 
                       
                            @else
                            
                             <button data-id='{{ $items['id'] }}' id="{{ $items['id'] }}" type="button" class="add-to-cart btn btn-success" >In cart</button>
                            @endif
        
        
         
    </div>
</div>






@endsection