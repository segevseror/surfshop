
@extends('cms.cms_master')
@section('cms_content')

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <h1 class="page-header">Products</h1>


    <div class="row">
        <div class="col-md-12">
            <p>
                <a href="{{url('cms/product/create')}}" class="btn btn-primary">+ Add new product</a>
            </p>

        </div>
    </div>

    <!-- Product Tabs -->
    <div class="product-tabs">
        <br><br>
        <div><b> All products </b></div>
        <!-- Nav tabs -->
        <ul class="nav nav-tabs nav-tabs-line-bottom line-pcolor nav-tabs-center case-u" role="tablist">

            @foreach($categories as $category)
            <li><a href="#tab-{{ $category['url'] }}" data-toggle="tab">{{ $category['title'] }}</a></li>
            @endforeach
        </ul>
        <!-- /Nav Tabs -->

        <!-- Tab panes -->
        <div class="tab-content tab-no-borders">

            @foreach($categories as $category)

            <!-- Tab Latest -->
            <div class="tab-pane" id="tab-{{ $category['url'] }}">

                <!-- Row -->
                <div class="row">
                    <table class="table table-condensed">
                        <thead>
                            <tr>
                                <th>Img</th>
                                <th>Name</th>
                                <th>Price</th>
                            
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                
                                 @foreach($product as $products)
                        @if($category['id'] == $products['categorie_id'])
                        <!-- Col -->
                        <tr>
                            <th><img width="20" height="20" src="{{ asset('images/products/' . $products['image']) }}"</th>
                        <th>{{ $products['title'] }} </th>
                        <th>{{ $products['price'] }} </th>
                            <td class="col-md-1">
                            <a href="{{ url('cms/product/' . $products['id'] . '/edit') }}">
                                <span id="btn-remove-content" class="glyphicon glyphicon-pencil" aria-hidden="true" title='adit'></span>
                            </a> | 
                            <a href="{{ url('cms/product/' . $products['id']) }}">
                                <span id="btn-remove-content" class="glyphicon glyphicon-trash btn-remove-menu" aria-hidden="true"></span>
                            </a>
                        </td>
                        </tr>
                        <!-- /Col -->
              
                        @endif
                        @endforeach
                            </tr>
                            
                        </tbody>
                   
                    </table>
                </div>
                <!-- /Row -->

            </div>
            <!-- /Tab Latest -->


            @endforeach

        </div>
        <!-- /Product Tabs -->

    </div>
        @endsection