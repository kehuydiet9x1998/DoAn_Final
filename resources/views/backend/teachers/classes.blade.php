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
                    <div class="col-sm-12 col-xl-3 m-b-30">
                      <select name="select" class="form-control form-control-inverse fill">
                        <option value="opt1">Lọc theo</option>
                        <option value="opt2">Đang diễn ra</option>
                        <option value="opt3">Đã hoàn thành</option>
                      </select>
                    </div>
                    <div class="col-sm-12 col-xl-3 m-b-30">
                      <input type="date" placeholder="Lọc theo ngày" style="margin-top: 10px;margin-left: 20px; font-size: 16px"/>
                    </div>
                    <div class="col-sm-12 col-xl-3 m-b-30">
                      <select name="select" class="form-control form-control-inverse fill">
                        <option value="opt1">Cơ sở</option>
                        <option value="opt2">TEKY - Hải Phòng</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="card-block">
                  <div class="table-responsive">
                    <table class="table table-hover m-b-0">
                      <thead>
                      <tr>
                        <th>Mã lớp</th>
                        <th>Khóa học</th>
                        <th>Sĩ số</th>
                        <th>Thời gian</th>
                        <th>Buổi học</th>
                        <th>Mức độ</th>
                        <th>Trạng thái</th>
                      </tr>
                      </thead>
                      <tbody>
                      <tr>
                        <td>
                          <div class="d-inline-block align-middle">
                            <div class="d-inline-block">
                              <h6>HP-LKT-C-RB-916-XCTRB-0001</h6>
                            </div>
                          </div>
                        </td>
                        <td><a href="classes/detail"><h6>Xưởng chế tạo RoBot</h6></a></td>
                        <td>6</td>
                        <td>19-11-2019 - 11/11/2020</td>
                        <td>11/12</td>
                        <td>Level 3</td>
                        <td>
                          <label class="badge badge-inverse-primary">Đang diễn ra</label>
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
