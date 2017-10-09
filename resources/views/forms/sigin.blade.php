
@extends('master')

@section('content')




<!-- Empty Block (use .abs-filler to fill page)
    ================================================== -->
    <div class="empty-block">
      <!-- Vcenter -->
      <div class="vcenter">
        <div class="vcenter-this">
          <!-- Container -->
          <div class="container">
            <!-- Form Panel -->
            <div class="form-panel width-33pc width-100pc-xs hcenter">
              <header>Sign In</header>
              <fieldset>
                  <form action="" method="post">
                       {{ csrf_field() }}
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-user"></i></div>
                     <input type="text" class="form-control" id="inputEmail3" placeholder="Enter Email" name="email" value="{{ old('email') }}">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-lock"></i></div>
                      <input type="password" class="form-control" id="inputPassword3" placeholder="Enter Password" name="password">
                  </div>
                </div>
                <div class="form-group">
                  <label class="checkbox-inline"><input type="checkbox" value="">Remember me </label>
                  <a class="pull-right">Forgot password?</a>
                </div>
                       <input class='btn btn-default btn-lg btn-block' type="submit" name="sigin" value="sign in">
                
              </form>
              </fieldset>
            </div>
            <!-- /Form Panel -->
            <div class="align-center">Need an Account? <a href="{{ url('/user/signup') }}">Sign Up</a></div>
          </div>
          <!-- /Container -->
        </div>
        <!-- /Vcenter this -->
      </div>
      <!-- /Vcenter -->
    </div>
    <!-- /Empty Block
    ================================================== -->
    
    
    @endsection