
@extends('cms.cms_master')
@section('cms_content')

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Dashboard</h1>

          <div class="row placeholders">
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
          </div>

          <h2 class="sub-header">All Orders</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Name user</th>
                  <th>Email user</th>
                  <th>Products order</th>
                  <th>Total price</th>
                  <th>Time</th>
                  
                </tr>
              </thead>
              <tbody>
            @foreach($order as $ord)
            <tr>
             <td>{{ $ord->name }}</td>
              <td>{{ $ord->email }}</td>
              <td> 
                  <ul>
             @foreach($ord->data as $order)
             
               <li>{{$order['name']}}  </li>
               <ul>
               <li>{{'quantity: ' . $order['quantity']}}</li>
               <li>{{'price: ' . $order['price'] . ' $'}}</li>
             </ul>
             @endforeach
             </ul>
           </td>
           <td>{{ $ord->total .' $'}}</td>
           <td>{{ $ord->created_at }}</td>
           </tr>
               @endforeach
              </tbody>
            </table>
          </div>
        </div>


@endsection