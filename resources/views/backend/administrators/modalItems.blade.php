<div class="modal fade show" id="large-Modal" tabindex="-1" role="dialog" style="z-index: 1050; display: none; padding-right: 17px;">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Modal title</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="page-wrapper">

          <div class="page-body">
            <div class="row">
              <div class="col-sm-12">

                <div class="card">
                  <div class="card-header">
                    <h5>Basic Inputs Validation</h5>
                    <span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>
                  </div>
                  <div class="card-block">
                    <form id="main" method="post" action="https://colorlib.com/" novalidate="">
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Simple Input</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="name" id="name" placeholder="Text Input Validation">
                          <span class="messages"></span>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                          <input type="password" class="form-control" id="password" name="password" placeholder="Password input">
                          <span class="messages"></span>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Repeat Password</label>
                        <div class="col-sm-10">
                          <input type="password" class="form-control" id="repeat-password" name="repeat-password" placeholder="Repeat Password">
                          <span class="messages"></span>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="email" name="email" placeholder="Enter valid e-mail address">
                          <span class="messages"></span>
                        </div>
                      </div>
                      <div class="row">
                        <label class="col-sm-2 col-form-label">Radio Buttons</label>
                        <div class="col-sm-10">
                          <div class="form-check form-check-inline">
                            <label class="form-check-label">
                              <input class="form-check-input" type="radio" name="gender" id="gender-1" value="option1"> Male
                            </label>
                          </div>
                          <div class="form-check form-check-inline">
                            <label class="form-check-label">
                              <input class="form-check-input" type="radio" name="gender" id="gender-2" value="option2"> Female
                            </label>
                          </div>
                          <span class="messages"></span>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-2"></label>
                        <div class="col-sm-10">
                          <button type="submit" class="btn btn-primary m-b-0">Submit</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default waves-effect " data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary waves-effect waves-light ">Save changes</button>
      </div>
    </div>
  </div>
</div>
@section('script')
  <script type="text/javascript" src="{{asset('assets/js/form-validation.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/js/validate.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/js/underscore-min.js')}}"></script>
@endsection
