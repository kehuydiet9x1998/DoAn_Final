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
                    <h5>DANH SÁCH HỌC VIÊN</h5>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-6">
                    <div id="dom-table_filter" class="dataTables_filter" style="margin-left: -145px;">
                      <label style="display: flex">Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="dom-table" style="width: 250px; height: 25px;margin-top: 0px;margin-left: 10px;">
                        <button class="btn btn-success btn-round waves-effect waves-light" data-toggle="modal" data-target="#large-Modal" style="margin-top: -6px;height: 35px;line-height: 13px; margin-left: 5px">Thêm học viên</button>
                      </label>
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
                  <table class="table table-hover m-b-0" id="table">
                    <thead>
                      <tr>
                        <th>STT</th>
                        <th>Họ đệm</th>
                        <th>Tên</th>
                        <th>Ngày sinh</th>
                        <th>Giới tính</th>
                        <th>Trạng thái</th>
                        <th>Họ tên cha mẹ</th>
                        <th>Số cmnd</th>
                        <th>Số điện thoại</th>
                        <th>Email</th>
                        <th>Quê quán</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($students as $st)
                      <tr>
                        <td>{{$st->id}}</td>
                        <td>{{$st->hodem}}</td>
                        <td>{{$st->ten}}</td>
                        <td>{{$st->ngaysinh}}</td>
                        <td>{{$st->gioitinh}}</td>
                        <td>{{$st->trangthai}}</td>    
                        <td>{{$st->hotenchame}}</td>
                        <td>{{$st->cmnd}}</td>
                        <td>{{$st->sodienthoai}}</td>
                        <td>{{$st->email}}</td>
                        <td>{{$st->diachi}}</td>
                        <td><a href="#!"><i class="icon feather icon-edit f-w-600 f-16 m-r-15 text-c-green"></i></a><a href="#!"><i class="feather icon-trash-2 f-w-600 f-16 text-c-red"></i></a></td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
                <div class="card-block" style="border-top: 1px solid #cccccc; padding-bottom: 10px; text-align: center">
                   <div style="padding-top: 10px; display: inline-block">
                      {{$students->links('vendor.pagination.bootstrap-4')}}
                   </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
{{-- Modal them --}}
<div class="modal fade show" id="large-Modal" tabindex="-1" role="dialog" style="z-index: 1050;display: none; padding-right: 17px;">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Thêm học viên</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
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
              <button type="submit" class="btn btn-primary m-b-0">Thêm</button>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default waves-effect " data-dismiss="modal" onclick="myReset()">Close</button>
        <input type="button" class="btn btn-primary waves-effect waves-light" onclick="myReset()" value="Reset">
      </div>
    </div>
  </div>
</div>
@endsection
@section('script')
<script type="text/javascript" src="{{asset('assets/js/form-validation.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/validate.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/underscore-min.js')}}"></script>
<script>
  function myReset() {
    document.getElementById('main').reset();
  };

</script>

@endsection
