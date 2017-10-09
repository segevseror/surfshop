
@extends('cms.cms_master')
@section('cms_content')

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <h1 class="page-header">Add new Content</h1>


    <div class="row">
        <div class="col-md-12">

            <form action="{{ url('cms/content') }}" method="post">
                {{ csrf_field() }}
                <div class="col-md-6">

                    @if($menu)

                    <div class="form-group row">
                        <label for="link" class="col-sm-4 col-form-label">For some link?</label>
                        <div class="col-sm-1">
                            <select name="linkid">
                                <option value="">Choose link...</option>

                                @foreach($menu as $menus)
                                <option @if(old('linkid') == $menus['id'] )selected='selected' @endif value="{{ $menus['id'] }}">{{ $menus['title'] }}</option>

                                @endforeach

                            </select>
                        </div>
                    </div>
                    @endif



                    <div class="form-group row">
                        <label for="title" class="col-sm-2 col-form-label">Title:</label><br>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="title" placeholder="title" name="title" value="{{ old('title') }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="article" class="col-sm-2 col-form-label">article:</label>
                        <div class="col-sm-12">
                            <textarea id='article' name="article" >{{ old('article') }}</textarea>
                         <!--   <input type="text" class="form-control origin-target" id="url" placeholder="{{ url('') }}/" name="url" value="{{ old('url') }}"> -->
                        </div>
                    </div>

                    <input class='btn btn-success' type="submit" name="signup" value="Save content">
                    <a href="{{ url('cms/content') }}" class="btn btn-default">Cancel</a>

                </div>

            </form>
        </div>
    </div>



    @endsection