
@extends('cms.cms_master')
@section('cms_content')

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <h1 class="page-header">Edit new Product</h1>


    <div class="row">
        <div class="col-md-12">

            <form action="{{ url('cms/product/' . $edit['id']) }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                 <input type="hidden" name="item_id" value="{{ $edit['id'] }}">
                <div class="col-md-6">

                    @if($categories)

                    <div class="form-group row">
                        <label for="link" class="col-sm-4 col-form-label">For some link?</label>
                        <div class="col-sm-1">
                            <select name="linkid">
                                <option value="">Choose link...</option>

                                @foreach($categories as $categorie)
                                <option @if( $edit['id'] == $categorie['id'] )selected='selected' @endif value="{{ $categorie['id'] }}">{{ $categorie['title'] }}</option>

                                @endforeach

                            </select>
                        </div>
                    </div>
                    @endif



                      <div class="form-group row">
                        <label for="title" class="col-sm-2 col-form-label">Title:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control origin-field" id="title" placeholder="title" name="title" value="{{ $edit['title'] }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="article" class="col-sm-2 col-form-label">article:</label>
                        <div class="col-sm-12">
                            <textarea id='article' name="article" >{{$edit['article'] }}</textarea>
                         <!--   <input type="text" class="form-control origin-target" id="url" placeholder="{{ url('') }}/" name="url" value="{{ old('url') }}"> -->
                        </div>
                    </div>
                    
                      <div class="form-group row">
                        <label for="url" class="col-sm-2 col-form-label">Page URL:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control origin-target" id="url" placeholder="{{ url('') }}/" name="url" value="{{ $edit['url'] }}">
                        </div>
                    </div>
                    
                        <div class="form-group row">
                        <label for="price" class="col-sm-2 col-form-label">Title:</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="price" placeholder="price" name="price" value="{{ $edit['price'] }}">
                        </div>
                    </div>
                    
                    
                       <div class="form-group row">
                          <label for="image" class="col-sm-2 col-form-label">image:</label><br>
                          <img width="50" height="50" src="{{ asset('images/products/' . $edit['image']) }}" >
                        <div class="col-sm-10">
                            <input type="file"  id="image"  name="image">
                        </div>
                    </div>

                    <input class='btn btn-success' type="submit" name="signup" value="Save product">
                    <a href="{{ url('cms/products') }}" class="btn btn-default">Cancel</a>

                </div>

            </form>
        </div>
    </div>



    @endsection