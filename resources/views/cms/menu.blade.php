
@extends('cms.cms_master')
@section('cms_content')

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Menu</h1>

   
          <div class="row">
              <div class="col-md-12">
                  <p>
                      <a href="{{url('cms/menu/create')}}" class="btn btn-primary">+ Add menu link</a>
                  </p>
                  
              </div>
          </div>
          @if($menu)
          <br>
          <div class="row">
              <div class="col-md-9">
                  <table class="table table-bordered">
                      <thead>
                          <tr>
                              <th>Link</th>
                              <th>Update at</th>
                              <th>url</th>
                              <th>Operation</th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach($menu as $item)
                          <tr>
                              <td>{{ $item['link'] }}</td>
                              <td>{{ $item['updated_at'] }}</td>
                              <td>{{ $item['url'] }}</td>
                              <td>
                                  <a href="{{ url('cms/menu/' . $item['id'] . '/edit') }}">
                                  <span id="btn-remove-menu" class="glyphicon glyphicon-pencil" aria-hidden="true" title='adit'></span>
                                  </a> | 
                                           <a href="{{ url('cms/menu/' . $item['id']) }}">
                           <span id="btn-remove-menu" class="glyphicon glyphicon-trash btn-remove-menu" aria-hidden="true"></span>
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