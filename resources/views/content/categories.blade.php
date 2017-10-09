

@extends('master')


@section('content')


<br>
<section class="mainContent clearfix">
        
            <div class="col-xs-12">
              <div class="page-header text-center">
                <h2>Featured Collection</h2>
              </div>
            </div>
    
                @foreach($categories as $categorie)
                <div class="col-sm-4 col-xs-12">
              <div class="thumbnail" onclick="location.href='{{ url('shop/' . $categorie['url']) }}'" data-segev='{{ $categorie['url'] }}'>
                <div class="imageWrapper">
                    <img  src="{{ asset('images/categorie/' . $categorie['image']) }}" alt="feature-collection-image">
               
                </div>
                <div class="caption">
                  <h4>{{$categorie['title']}}</h4>
                  <p>{!! $categorie['article'] !!}</p>
                </div>
              </div>
            </div>
   
 @endforeach
                
                
                
      </section>

@endsection

