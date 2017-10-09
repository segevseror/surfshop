
<?php

$menu = App\Menu::all()->toArray();
$title = 'SurfShop| page 404';
$errors = [];

?>


@extends('master')


@section('content')
<div class="error-block">		
              <!-- Left -->
              <div class="left">
                <div class="vcenter">
                  <div class="vcenter-this">
                  <h1>404</h1>
                  </div>
                </div>
              </div>
              <!-- /Left -->
              
              <!-- Right -->
              <div class="right">
                <h4>Requested page not found.</h4>
                <p>Horem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco labor.</p>
                <!-- Search -->
                <form class="form-inline search">
                  <div class="form-group form-group-lg">
                    <input type="text" placeholder="Search anything" class="form-control">
                  </div>
                  <button class="btn btn-base btn-lg" type="button">search site</button>
                </form>
                <!-- /Search -->
              </div>
              <!-- /Right -->
            </div>
@endsection