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
                    <h5>Danh sách lớp học</h5>
                  </div>
                </div>
                <div class="row" style="display:flex; align-items:center">
                  <div class="col-sm-12 col-xl-3 m-b-30">
                    <select name="select" class="form-control form-control-inverse fill">
                      <option value="opt1">Lọc theo</option>
                      <option value="opt2">Đang diễn ra</option>
                      <option value="opt3">Đã hoàn thành</option>
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
                        {{-- <th>Khóa học</th> --}}
                        <th>Sĩ số</th>
                        <th>Bắt đầu/Kết thúc</th>
                        <th>Buổi học</th>
                        <th>Level</th>
                        <th>Trạng thái</th>
                        {{-- <th>Action</th> --}}
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <div class="d-inline-block align-middle">
                            <div class="d-inline-block">
                              <a href="classes/detail">
                                <h6 class="name_link_green">HP-LKT-C-RB-916-XCTRB-0001</h6>
                              </a>
                              <p class=" m-b-0 text-muted">Khóa học: Xưởng chế tạo RoBot</p>
                              {{-- <p class="m-t-2 m-b-0 text-muted">Giáo viên: Học viện TEKY</p> --}}
                            </div>
                          </div>
                        </td>
                        {{-- <td>

                            <h6 >Xưởng chế tạo RoBot</h6>

                        </td> --}}
                        <td>6</td>
                        <td>
                          <i class="fa fa-calendar-minus-o"></i> 19-11-2019
                          <br>
                          <i class="fa fa-calendar-times-o"></i> 11-11-2020</td>
                        <td>11/12</td>
                        <td><label class="badge badge-inverse-warning"> Level 3</label></td>
                        <td>
                          <label class="badge badge-inverse-success">Đang diễn ra</label>
                        </td>

                        {{-- <td>
                          <form action="/
                        {{route('students.destroy')}}
                        " method="post">
                            @method('DELETE')
                            @csrf

                            <button style="border: none; padding: 2px 0px; margin-top: -1px;">
                              <i class="feather icon-trash-2 f-w-600 f-16 m-r-15 text-c-red"
                                style="margin:0;"></i></button>
                          </form>
                        </td> --}}
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
