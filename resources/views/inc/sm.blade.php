     @if(Session::has('sm') )
          <div class="row">
              <div class="col-md-12">
                  <div id='sm' class="alert-success center-block text-center">{!! Session::get('sm') !!}</div>
              </div>
          </div>
          @endif
          <div class="row">
              <div class="col-md-10">
                  <div style="display: none" id="alert-item" class="alert alert-success text-center"></div>
              </div>
          </div>