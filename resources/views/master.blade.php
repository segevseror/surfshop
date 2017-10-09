<!DOCTYPE html>
<html lang="en">
    <head>
        <title>
            @if( !empty($title) )
            {{ $title }}
            @else
            no title
            @endif
        </title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       
        <link href="{{ asset('uikit/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('uikit/css/uikit.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <script>
            var BASE_URL = "{{ url('') }}/";
        </script>

    </head>

    <body class="tile-1-bg">


        <!-- Page Wrapper
        ++++++++++++++++++++++++++++++++++++++++++++ -->
        <div class="page-wrapper boxed-wrapper shadow">

            <!-- Header Block
            ============================================== -->
            <header class="header-block line-top">

                <!-- Main Header
                ............................................ -->
                <div class="main-header container">

                    <!-- Header Cols -->
                    <div class="header-cols"> 

                        <!-- Brand Col -->
                        <div class="brand-col hidden-xs">

                            <!-- vcenter -->
                            <div class="vcenter">
                                <!-- v-centered -->               
                                <div class="vcenter-this">
                                    <a href="{{url('')}}">
                                        <img src="{{ asset('images/logo_ashdod-yam_3.png') }}" alt="surfshoplogo">
                                    </a>
                                </div>
                                <!-- v-centered -->
                            </div>
                            <!-- vcenter -->

                        </div>
                        <!-- /Brand Col -->

                        <!-- Right Col -->
                        <div class="right-col">

                            <!-- vcenter -->
                            <div class="vcenter">

                                <!-- v-centered -->               
                                <div class="vcenter-this"  id="targetajax">

                                    <!-- Cart Summary -->
                                    <div class="header-cart-summary pull-right clearfix" id="ajaxdi" >

                                        <i class="icon ti ti-bag"></i>

                                        <!-- Summary Text -->
                                        <div class="summary-text">

                                            <small>({{ Cart::getTotalQuantity() }}) items in your cart</small>

                                            <a class="total" data-toggle="dropdown" href="#"><span class="hidden-xs hidden-sm total-text">TOTAL</span><span class="total-price">${{ Cart::getSubTotal() }}</span><i class="toggler ti ti-plus rot-135"></i></a>

                                            <!-- Dropdown Panel -->
                                            <div class="dropdown-menu dropdown-panel dropdown-right arrow-top" data-keep-open="true" >
                                                <section>
                                                    <!-- Mini Cart -->
                                                    <ul class="mini-cart">
                                                        <!-- Item -->
                                                        @if( ! Cart::isEmpty() )

                                                        @foreach( Cart::getContent()->toArray() as $item)

                                                        <li class="clearfix">
                                                            <img src="{{ url('images/products/' . $item['attributes'][0]) }}" alt="">
                                                            <div class="text">
                                                                <a class="title" href="#">{{ $item['name'] }}</a>
                                                                <div class="details">{{$item['quantity']}} x ${{ $item['price'] }}
                                                                    <div class="btn-group">

                                                                        <a id="btn-remove-item" class="btn btn-default" href="#">
                                                                            <span onclick="btn_remove_item({{$item['id']}})" id="btn-remove-item" class="btn-remove-item" aria-hidden="true" data-id='{{$item['id']}}'><i class="fa fa-trash"></i></span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        @endforeach
                                                        @endif
                                                        <!-- /Item -->

                                                    </ul>
                                                    <!-- /Mini Cart -->
                                                </section>

                                                <section>
                                                    <div class="row grid-10">
                                                        <div class="col-md-6">
                                                            <a class="btn btn-base btn-block margin-y-5" href="{{ url('/shop/checkout') }}">view cart</a>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <a class="btn btn-primary btn-block margin-y-5" href="checkout.html">checkout</a>
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>
                                            <!-- /Dropdown Panel -->

                                        </div>
                                        <!-- /Summary Text -->

                                    </div>
                                    <!-- /Cart summary -->

                                </div>
                                <!-- v-centered -->

                            </div>
                            <!-- vcenter -->

                        </div>
                        <!-- /Right Col -->

                        <!-- Left Col -->
                        <div class="left-col">

                            <!-- vcenter -->
                            <div class="vcenter">

                                <!-- v-centered -->
                                <div class="vcenter-this">

                                    <span class="header-text case-u mgb-10 hidden-xs hidden-sm"><i class="icon-left fa fa-fax bcolor-l"></i>segev : <span class="pcolor">054-6465625</span></span>

                                    <form class="header-search" action="{{ url('search/searchproduct') }}" method="get">
                                        <div class="form-group">
                                            <button class="btn btn-empty" id="searchclick"><i class="fa fa-search"></i></button>
                                           
                                            <input type="text" autocomplete="off" size="40"  placeholder="SEARCH" name="textsearch" id="searchproduct">
                                           
                                        
                                        </div>
                                    </form>

                                </div>
                                <!-- /v-centered -->
                            </div>
                            <!-- /vcenter -->

                        </div>
                        <!-- /Left Col -->


                    </div>
                    <!-- Header Cols -->

                </div>
                <!-- /Main Header
                
                .............................................. -->

             
                
                <!-- Nav Bottom
                .............................................. -->
                <nav class="nav-bottom hnav hnav-borderless invert-colors bcolor-bg boxed-section">

                    <!-- Container -->
                    <div class="container">

                        <!-- Header-->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle no-border" data-toggle="collapse" data-target="#nav-collapse4">
                                <span class="sr-only">Toggle navigation</span>
                                <i class="fa fa-navicon"></i>
                            </button>
                            <a class="navbar-brand visible-xs" href="#"><img src="{{ asset('images/logo-white-xs.png') }}" alt="H"></a>
                        </div>
                        <!-- /Header-->

                        <!-- Collapse -->
                        <div id="nav-collapse4" class="collapse navbar-collapse navbar-absolute">

                            <!-- Navbar Center -->
                            <ul id='men' class="nav navbar-nav navbar-center fill-pcolor case-u">
                                <li id="home" ><a href="{{url('')}}">home</a></li>

                                <li id='shop' class="dropdown dropdown-mega"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Shop<i class="fa fa-angle-down toggler"></i></a>

                                    <!-- Mega Menu -->
                                    <div class="mega-menu dropdown-menu">
                                        <!-- Row -->
                                        <div class="row">

                                            <!-- col -->
                                            <div class="col-md-3">
                                                <img class="featured-img hidden-xs hidden-sm" src="{{ asset('images/menu-pic.jpg') }}" alt="">
                                            </div>
                                            <!-- /col -->

                                            <!-- col -->
                                            <div class="col-md-4">
                                                <h5><a href="{{ url('/shop') }}">Categories</a></h5>
                                                <ul class="links">
                                                    @if(isset($categories))
                                                    @foreach($categories as $categorie)

                                                    <li id="$categorie['url']"><a href="{{ url('shop/'  . $categorie['url'] )  }}"><img width="40" height="40" src="{{ asset('images/categorie/' .$categorie['image'])}}"> {{ $categorie['title'] }}</a></li>

                                                    @endforeach
                                                    @endif

                                                </ul>
                                            </div>
                                            <!-- /col -->



                                            <!-- col -->
                                            <div class="col-md-4">


                                            </div>
                                            <!-- /col -->
                                        </div>
                                        <!-- /Row -->
                                    </div>
                                    <!-- /Mega Menu -->

                                </li>

                                @if($menu)
                                @foreach($menu as $item)

                                <li><a class='{{str_replace("/","-",  url('' .$item['url'])   ) }}' href="{{ url('' .$item['url']) }}">{{ $item['title'] }}</a></li>
                                @endforeach
                                @endif


                            </ul>

                            @if( Session::has('is_admin') )
                            <div class="alert alert-success text-center" role="alert">
                                <a href="{{ url('cms/dashboard') }}">you <b>Admin</b> you can go to -CMS DHASHBORD</a>
                            </div>

                            @endif


                            <!-- /Navbar Center -->

                        </div>
                        <!-- /Collapse -->

                        <!-- Dont Collapse -->

                        <div class="navbar-dont-collapse">



                            <!-- Navbar btn-group -->

                            <div class="navbar-btn-group btn-group navbar-right no-margin-r-xs">

                                <!-- Btn Wrapper -->
                                <div class="btn-wrapper dropdown">



                                    <a class="btn btn-outline" data-toggle="dropdown">
                                        @if( Session::has('user_id')) {{ Session::get('user_name') }}@else Sign In @endif
                                        <i class="ti ti-user"></i></a>

                                    @if( Session::has('user_id')  )

                                    <!-- Dropdown Panel is conected -->

                                    <div class="dropdown-menu dropdown-panel" data-keep-open="true">
                                        <!-- Btn Wrapper -->
                                        <fieldset>

                                            {{ csrf_field() }}
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon"><a href="#"><i class="fa fa-user"></i>Profile</a></div>

                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon"><a href="#"><i class="fa fa-lock"></i>Change Password</a></div>

                                                </div>
                                            </div>


                                        </fieldset>
                                    </div>
                                    <!-- /Dropdown Panel -->


                                    @else


                                    <!-- Dropdown Panel  !!!    is not conected -->
                                    <div class="dropdown-menu dropdown-panel" data-keep-open="true">
                                        <fieldset>
                                            <form action="{{ url('/user/sigin') }}" method="post">
                                                {{ csrf_field() }}
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-addon"><i class="fa fa-user"></i></div>

                                                        <input type="text" class="form-control" id="inputEmail3" placeholder="Enter Email" name="email" value="">

                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-addon"><i class="fa fa-lock"></i></div>
                                                        <input type="password" class="form-control" id="inputPassword3" placeholder="Enter Password" name="password">

                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="checkbox-inline"><input value="" type="checkbox">Remember me </label>
                                                </div>
                                                <button class="btn btn-primary btn-block" type="submit" name="sigin" value="sign in">sign in</button>
                                            </form>
                                        </fieldset>
                                    </div>
                                    <!-- /Dropdown Panel -->

                                    @endif




                                </div>
                                <!-- /Btn Wrapper -->

                                <!-- Btn Wrapper -->
                                

                                    @if( Session::has('user_id'))
                                    <a  href="{{ url('/user/logout') }}" class="btn btn-outline"><i class="glyphicon glyphicon-log-out"></i>Log out</a>

                                    @else
                                   
                                    <div class="btn-wrapper dropdown">



                                    <a class="btn btn-outline" data-toggle="dropdown" aria-expanded="true">
                                                                                <i class="glyphicon glyphicon-download-alt"></i> Sign up</a>

                                    

                                    <!-- Dropdown Panel  !!!    is not conected -->
                                    <div class="dropdown-menu dropdown-panel" data-keep-open="false">
                                        <fieldset>
                                            <form action="{{ url('/user/signup') }}" method="post">
                                                {{ csrf_field() }}
                                         
                                                <div class="form-group">
                                                    <label for="inputname">Name:</label><br>
                                                    <div class="input-group">
                                                        
                                                        <div class="input-group-addon"><i class="fa fa-user"></i></div>

                                                        <input type="text" class="form-control" id="inputname" placeholder="Name" name="name" value="{{ old('name') }}">

                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputEmail">Email:</label><br>
                                                    <div class="input-group">
                                                        <div class="input-group-addon"><i class="fa fa-lock"></i></div>
                    <input type="text" class="form-control" id="inputEmail" placeholder="Email" name="email" value="{{ old('email') }}">

                                                    </div>
                                                </div>
                                                   <div class="form-group">
                                                    <label for="inputPassword">Password:</label><br>
                                                    <div class="input-group">
                                                        <div class="input-group-addon"><i class="fa fa-lock"></i></div>
                    <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="password">

                                                    </div>
                                                </div>
                                                
                                                                           <div class="form-group">
                                                    <label for="inputPassword3">Confirm password:</label><br>
                                                    <div class="input-group">
                                                        <div class="input-group-addon"><i class="fa fa-lock"></i></div>
                    <input type="password" class="form-control" id="inputPassword3" placeholder="Confirm password" name="password_confirmation">

                                                    </div>
                                                </div>
                                                        

                                                <button class="btn btn-primary btn-block" type="submit" name="signup" value="Sign Up">Sign Up</button>
                                            </form>
                                        </fieldset>
                                    </div>
                                    <!-- /Dropdown Panel -->

                                    



                                </div>
                                    
                                    @endif




                                    <!-- Dropdown Panel -->
                                    <!-- /Dropdown Panel -->

                                
                                <!-- /Btn Wrapper -->

                            </div>
                            <!-- /Navbar btn-group -->


                            <!-- Navbar Left -->
                            <ul class="nav navbar-nav navbar-left navbar-right-xs">
                                <li class="dropdown has-panel">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img class="img-left" alt="" src="{{ asset('images/flags/il.gif') }}">

                                    </a>


                                </li>
                            </ul>
                            <!-- /Navbar Left -->

                        </div>
                        <!-- /Dont Collapse -->

                    </div>
                    <!-- /Container -->

                </nav>
                <!-- /Nav Bottom
                .............................................. -->

            </header>
            <!-- /Header Block
            ============================================== -->

            @yield('content')

            <!-- Footer
            =================================================== -->
            <br>
            <footer class="footer-block invert-colors bcolor-bg">

                <!-- Container -->
                <div class="container cont-top clearfix">

                    <!-- Row -->
                    <div class="row">

                        <!-- Brand -->
                        <div class="col-md-3 brand-col brand-center">
                            <div class="vcenter">
                                <a class="vcenter-this" href="#">
                                    <img src="{{ asset('images/logo_ashdod-yam_3.png') }}" alt="logo">
                                </a>
                            </div>
                        </div>
                        <!-- /Brand -->

                        <!-- Links -->
                        <div class="col-md-9 links-col">

                            <!-- Row -->
                            <div class="row-fluid">

                                <!-- Col -->
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <h5>About us</h5>
                                    <p>Segev seror i'm web developer.</p>
                                    <!-- hlinks -->
                                    <ul class="hlinks hlinks-icons color-icons-borders color-icons-bg color-icons-hovered">
                                        <li><a href="#"><i class="icon fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="icon fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="icon fa fa-rss"></i></a></li>
                                        <li><a href="#"><i class="icon fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="icon fa fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="icon fa fa-youtube"></i></a></li>
                                    </ul>
                                    <!-- /hlinks -->              
                                </div>
                                <!-- /Col -->

                                <!-- Col -->
                                <div class="col-xs-6 col-sm-3 col-md-3">
                                    <h5>member</h5>
                                    <ul class="vlinks">
                                        <li><a href="#">Account</a></li>
                                        <li><a href="#">Wishlist and Favourites</a></li>
                                        <li><a href="#">Purchase History</a></li>
                                        <li><a href="#">View Cart</a></li>
                                    </ul>
                                </div>
                                <!-- /Col -->

                                <!-- Col -->
                                <div class="col-xs-6 col-sm-3 col-md-3 newsletter">
                                    <h5>newsletter</h5>
                                    <form>
                                        <input type="text" class="form-control" placeholder="Email Address">
                                        <button class="btn btn-outline outline-white" type="button">get newsletter</button>
                                    </form>
                                </div>
                                <!-- /Col -->

                            </div>
                            <!-- /Row -->

                        </div>
                        <!-- /Links -->

                    </div>
                    <!-- /Row -->

                </div>
                <!-- /Container -->

                <!-- Bottom -->
                <div class="footer-bottom bcolor-bg invert-colors">

                    <!-- Container -->
                    <div class="container">

                        <span class="copy-text">© 2017 Theme by <a href="#">Segev</a> seror.</span>
                        <!-- hlinks -->
                        <ul class="hlinks pull-right">
                            <li><a href="#">About</a></li>
                            <li><a href="#">Login</a></li>
                            <li><a href="#">Sign Up</a></li>
                            <li><a href="#">Support</a></li>
                        </ul>
                        <!-- /hlinks -->

                    </div>
                    <!-- /Container -->

                </div>
                <!-- /Bottom -->

            </footer>
            <!-- /Footer
            =================================================== -->



        </div>

        <!-- /Page Wrapper
        ++++++++++++++++++++++++++++++++++++++++++++++ -->

        <!-- Javascript
        ================================================== -->


        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>


        <script src="{{ URL::asset('uikit/js/jquery-latest.min.js') }}"></script>
      <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="{{ URL::asset('uikit/js/uikit.js') }}"></script>

        <script src="{{ asset('js/script.js') }}"></script>







        <!-- /JavaScript
        ================================================== -->
    </body>
</html>
