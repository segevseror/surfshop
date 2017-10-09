
@extends('cms.cms_master')
@section('cms_content')

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <h1 class="page-header">Are you sure you want to delete this content?</h1>

    <div class="row">
        <div class="rol-md-6">
            <form action="{{ url('cms/content/' . $id) }}" method="post">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <input type="submit" name="submit" value="Delete" class="btn btn-danger">
                <a href="{{ url('cms/content/') }}" class="btn btn-default">Cancel</a>
            </form>
        </div>
    </div>



    @endsection