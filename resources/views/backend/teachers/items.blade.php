@extends('backend.layout.index')
@section('content')
<div class="pcoded-inner-content">
  <div class="main-body">
    <div class="page-wrapper">
      <div class="page-body">
        <div class="row">
          <div class="col-md-12">
            <div class="card table-card">
              <div class="card-header">
                <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-6">
                    <h5>Danh sách sản phẩm cuối khóa</h5>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-6">
                    <div id="dom-table_filter" class="dataTables_filter" style="margin-left: -35px;">
                      <label style="display: flex">Tìm kiếm:<input type="search" class="form-control input-sm" placeholder="" aria-controls="dom-table" style="width: 250px; height: 25px;margin-top: 0px;margin-left: 10px;"></label>
                    </div>
                  </div>
                </div>
                <div class="card-header-right">
                  <ul class="list-unstyled card-option">
                    <li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i></li>
                    <li><i class="feather icon-maximize full-card"></i></li>
                    <li><i class="feather icon-minus minimize-card"></i></li>
                    <li><i class="feather icon-refresh-cw reload-card"></i></li>
                    <li><i class="feather icon-trash close-card"></i></li>
                    <li><i class="feather icon-chevron-left open-card-option"></i></li>
                  </ul>
                </div>
              </div>

              <div class="card-block">
                <div class="table-responsive">
                  <table class="table table-hover m-b-0">
                    <thead>
                      <tr>
                        <th>STT</th>
                        <th>Customer</th>
                        <th>Company</th>
                        <th>Lead Score</th>
                        <th>Date</th>
                        <th>Tags</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <div class="d-inline-block align-middle">
                            <div class="d-inline-block">
                              <h6>Shirley Hoe</h6>
                              <p class="text-muted m-b-0">Sales executive , NY</p>
                            </div>
                          </div>
                        </td>
                        <td>Pinterest</td>
                        <td>223</td>
                        <td>19-11-2018</td>
                        <td>19-11-2018</td>
                        <td>
                          <label class="badge badge-inverse-primary">Sketch</label>
                          <label class="badge badge-inverse-primary">Ui</label>
                        </td>
                        <td>
                          <button type="button" class="btn btn-primary waves-effect" data-toggle="modal" data-target="#large-Modal" style="background-color: white; border: none; padding: 0">
                            <i class="icon feather icon-edit f-w-600 f-16 m-r-15 text-c-green"></i></button>
                          <a href="#!"><i class="feather icon-trash-2 f-w-600 f-16 text-c-red"></i></a></td>
                      </tr>

                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="modal fade show" id="large-Modal" tabindex="-1" role="dialog" style="z-index: 1050;display: none; padding-right: 17px;">
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
@endsection
