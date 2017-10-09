
@extends('cms.cms_master')
@section('cms_content')

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <h1 class="page-header">Content</h1>


    <div class="row">
        <div class="col-md-12">
            <p>
                <a href="{{url('cms/content/create')}}" class="btn btn-primary">+ Add new content</a>
            </p>

        </div>
    </div>
    @if($content)
    <br>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Article</th>
                        <th>Updated</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($content as $contents)
                    <tr>
                        <td>{{ $contents['title'] }}</td>
                        <td>{{ $contents['article'] }}</td>
                        <td>{{ $contents['updated_at'] }}</td>
                        <td>
                            <a href="{{ url('cms/content/' . $contents['id'] . '/edit') }}">
                                <span id="btn-remove-content" class="glyphicon glyphicon-pencil" aria-hidden="true" title='adit'></span>
                            </a> | 
                            <a href="{{ url('cms/content/' . $contents['id']) }}">
                                <span id="btn-remove-content" class="glyphicon glyphicon-trash btn-remove-menu" aria-hidden="true"></span>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @endif


    @endsection