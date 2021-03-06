
@extends('cms.cms_master')
@section('cms_content')

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <h1 class="page-header">Edit new Category</h1>


    <div class="row">
        <div class="col-md-12">

            <form action="{{ url('cms/categories/' . $edit['id']) }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                 <input type="hidden" name="item_id" value="{{ $edit['id'] }}">
                <div class="col-md-6">

                    <div class="form-group row">
                        <label for="title" class="col-sm-2 col-form-label">Category name:</label><br>
                        <div class="col-sm-10">
                            <input type="text" class="form-control origin-field" id="title" placeholder="title" name="title" value="{{ $edit['title'] }}">
                        </div>
                    </div>
                    
                         <div class="form-group row">
                          <label for="url" class="col-sm-2 col-form-label">Page URL:</label><br>
                        <div class="col-sm-10">
                            <input type="text" class="form-control origin-target" id="url" placeholder="{{ url('') }}/" name="url" value="{{ $edit['url'] }}">
                        </div>
                    </div>
                

                    <div class="form-group row">
                        <label for="article" class="col-sm-2 col-form-label">Article:</label><br>
                        <div class="col-sm-10">
                           <textarea id='article' name="article" >{{ $edit['article'] }}</textarea>
                        </div>
                    </div>
                    
                 
                        
                      <div class="form-group row">
                          <img width="60" height="60" src="{{ asset('images/categorie/' . $edit['image']) }}"><br>
                          <label for="image" class="col-sm-2 col-form-label">Change image:</label><br>
                        <div class="col-sm-10">
                            <input type="file"  id="image"  name="image">
                        </div>
                    </div>
            
                    <input class='btn btn-success' type="submit" name="signup" value="Save category">
                      <a href="{{ url('cms/categories') }}" class="btn btn-default">Cancel</a>

                </div>

            </form>
        </div>
    </div>



    @endsection