
@extends('cms.cms_master')
@section('cms_content')

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <h1 class="page-header">Add new menu links</h1>


    <div class="row">
        <div class="col-md-12">

            <form action="{{ url('cms/menu') }}" method="post">
                {{ csrf_field() }}
                <div class="col-md-6">

                    <div class="form-group row">
                        <label for="link" class="col-sm-2 col-form-label">Menu link:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control origin-field" id="link" placeholder="Link" name="link" value="{{ old('link') }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="title" class="col-sm-2 col-form-label">Title:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="title" placeholder="title" name="title" value="{{ old('title') }}">
                        </div>
                    </div>
                    
                      <div class="form-group row">
                        <label for="url" class="col-sm-2 col-form-label">Page URL:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control origin-target" id="url" placeholder="{{ url('') }}/" name="url" value="{{ old('url') }}">
                        </div>
                    </div>
            
                    <input class='btn btn-success' type="submit" name="signup" value="Save menu link">
                      <a href="{{ url('cms/menu') }}" class="btn btn-default">Cancel</a>

                </div>

            </form>
        </div>
    </div>



    @endsection