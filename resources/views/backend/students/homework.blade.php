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
                    <div class="col-sm-12 col-xl-3 m-b-30">
                      <h5>Danh sách bài tập về nhà</h5>
                    </div>
                  </div>
                  <div class="row" style="display:flex; align-items:center">
                    <div class="col-sm-12 col-xl-3 m-b-30">
                      <select name="select" class="form-control form-control-inverse fill">
                        <option value="opt1">Lọc theo</option>
                        <option value="opt2">Đã làm BTVN</option>
                        <option value="opt3">Chưa làm BTVN</option>
                      </select>
                    </div>
                    <div class="col-sm-12 col-xl-3 m-b-30">
                      <input id="date" style="display:none" type="date" class="form-control"
                             placeholder="Lọc theo ngày" />
                      <input placeholder="Lọc theo ngày" class="textbox-n form-control" type="text"
                             onfocus="(this.type='date')" id="date" />
                    </div>
                    <div class="col-sm-12 col-xl-3 m-b-30">
                      <input type="text" class="form-control" name="timkiem" id="timkiem" placeholder="Tìm trong bảng">
                    </div>
                    <div class="col-sm-12 col-xl-2 m-b-30">
                      <button class="btn btn-primary btn-round waves-effect waves-light">
                        <i class="fa fa-filter"></i>
                        Lọc</button>
                    </div>
                  </div>
                </div>
                <div class="card-block">
                  <div class="table-responsive">
                    <table class="table table-hover m-b-0">
                      <thead>
                      <tr>
                        <th>Mã lớp</th>
                        <th>Lớp học</th>
                        <th>Buổi học</th>
                        <th>Trạng thái</th>
                        <th>Action</th>
                      </tr>
                      </thead>
                      <tbody>
                      <tr>
                        <td>
                          <div class="d-inline-block align-middle">
                            <div class="d-inline-block">
                              <a href="class/detail">
                                <h6 class="name_link_green">LP 001</h6>
                              </a>
                            </div>
                          </div>
                        </td>
                        <td>
                          <h6>Thiết kế và lập trình web</h6>
                        </td>
                        <td style="padding-left: 30px">6</td>
                        @php
                          $lv = 'Đã làm BTVN';
                        @endphp
                        <td><label class="badge badge-inverse-{{$lv == 'Đã làm BTVN' ? 'warning': ($lv == 'Chưa làm BTVN'? 'success' : 'info')}}">{{($lv)}}</label></td>
                        <td>
                          <a href="home-work" style="background-color: white; border: none; padding: 0; text-align: center">
                            <i class="fa fa-edit f-w-600 f-16 m-r-15 text-c-green" style="font-size: 16px">
                              <h5 style="color: black; font-size: 14px">
                                BTVN
                              </h5>
                            </i>
                          </a>
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
