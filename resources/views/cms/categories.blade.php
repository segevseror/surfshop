
@extends('cms.cms_master')
@section('cms_content')

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <h1 class="page-header">Category</h1>


    <div class="row">
        <div class="col-md-12">
            <p>
                <a href="{{url('cms/categories/create')}}" class="btn btn-primary">+ Add new content</a>
            </p>

        </div>
    </div>
    @if($categories)
    <br>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>img</th>
                        <th>Name</th>
                        <th>Article</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                    <tr>
                        <td><img width="50" height="50"  src="{{ asset('images/categorie/' . $category['image']) }}" alt="feature-collection-image"></td>
                        <td>{{ $category['title'] }}</td>
                        <td>{{ $category['updated_at'] }}</td>
                        <td class="col-md-1">
                            <a href="{{ url('cms/categories/' . $category['id'] . '/edit') }}">
                                <span id="btn-remove-content" class="glyphicon glyphicon-pencil" aria-hidden="true" title='adit'></span>
                            </a> | 
                            <a href="{{ url('cms/categories/' . $category['id']) }}">
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