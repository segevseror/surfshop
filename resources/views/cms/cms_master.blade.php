<!DOCTYPE html>
<html lang="en">
    <head>
        <title>surfShop | Admin panel</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.7/summernote.css" rel="stylesheet">
         <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
        <script>var BASE_URL = "{{ url('') }}/"</script>
    </head>
    <body>

        
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{ url('cms/dashboard') }}">SurfShop Admin Panel</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a target="_blank" href="{{ url('') }}">Back to Shop</a></li>
            <li><a href="{{ url('user/logout') }}">Logout</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li><a href="{{ url('cms/dashboard') }}">Dashboard <span class="sr-only">(current)</span></a></li>
            <li><a href="{{ url('cms/menu') }}">Menu</a></li>
            <li><a href="{{ url('cms/content') }}">Content</a></li>
            <li><a href="{{ url('cms/categories') }}">Categories</a></li>
            <li><a href="{{ url('cms/product') }}">Products</a></li>
          
          </ul>
      
        </div>
          <br>
              <div class="container">
            <div class="row">
                <div class="col-md-12">  
                    @include('inc.sm')
                    @yield('cms_content')
                      @include('inc.errors')
                       
                </div>
            </div>
      </div>
    </div>
   
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.7/summernote.js"></script>
        <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>

    </body>
</html>
