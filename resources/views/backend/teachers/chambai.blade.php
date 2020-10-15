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
                      <h5>DANH SÁCH CHẤM BÀI TẬP</h5>
                    </div>
                    <div class="col-sm-12 col-xl-3 m-b-30">
                      <h4 class="sub-title" style="padding: 3px; margin: 0">Trạng thái</h4>
                      <select name="select" class="form-control form-control-inverse fill">
                        <option value="opt1">Chưa chấm</option>
                        <option value="opt2">Đã chấm</option>
                      </select>
                    </div>
                    <div class="col-sm-12 col-xl-3 m-b-30">
                      <h4 class="sub-title" style="padding: 3px; margin: 0">Lớp học</h4>
                      <select name="select" class="form-control form-control-inverse fill">
                        <option value="opt1">LP - 1</option>
                        <option value="opt2">LP - 2</option>
                        <option value="opt3">LP - 3</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="card-block">
                  <div class="table-responsive">
                    <table class="table table-hover m-b-0">
                      <thead>
                      <tr>
                        <th>TÊN HỌC SINH</th>
                        <th>MÃ LỚP HỌC</th>
                        <th>BÀI HỌC</th>
                        <th>TRẠNG THÁI</th>
                        <th>CHẤM BÀI</th>
                      </tr>
                      </thead>
                      <tbody>
                      <tr>
                        <td>
                          <div class="d-inline-block align-middle">
                            <div class="d-inline-block">
                              <h6>Nguyễn Hải Minh</h6>
                            </div>
                          </div>
                        </td>
                        <td>HP-LKT-C-RB-711-2020KPRB-0005</td>
                        <td>Bài 4 - ROBOT GIẢI MA TRẬN</td>
                        <td>Đã chấm</td>
                        <td style="text-align: center">
                          <button type="button" class="btn btn-primary waves-effect" data-toggle="modal"
                                  data-target="#chambai-Modal" style="background-color: white; border: none; padding: 0">
                            <i class="icon feather icon-edit f-w-600 f-16 m-r-15 text-c-green"></i></button>
                          @include('backend.teachers.classes.chambai-modal')
                        </td>
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
@endsection
@section('script')
  <script type="text/javascript" src="{{asset('assets/js/form-validation.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/js/validate.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/js/underscore-min.js')}}"></script>
@endsection
