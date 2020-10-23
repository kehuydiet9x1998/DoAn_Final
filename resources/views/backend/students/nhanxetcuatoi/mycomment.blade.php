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
                    <h5>Danh sách nhận xét</h5>
                  </div>
                </div>
                <div class="row" style="display:flex; align-items:center">
                  <div class="col-sm-12 col-xl-3 m-b-30">
                    <select name="select" class="form-control form-control-inverse fill">
                      <option value="opt1">Lọc theo mã lớp</option>
                      <option value="opt1">Tất cả</option>
                      <option value="opt2">LP - 001</option>
                      <option value="opt3">LP - 002</option>
                    </select>
                  </div>
                  <div class="col-sm-12 col-xl-3 m-b-30">
                    <input id="date" style="display:none" type="date" class="form-control" placeholder="Lọc theo ngày" />
                    <input placeholder="Lọc theo ngày" class="textbox-n form-control" type="text" onfocus="(this.type='date')" id="date" />
                  </div>
                  <div class="col-sm-12 col-xl-3 m-b-30">
                    <select name="select" class="form-control form-control-inverse fill">
                      <option value="opt1">Lọc theo giảng viên</option>
                      <option value="opt1">Tất cả</option>
                      <option value="opt2">Nguyễn Văn Linh</option>
                      <option value="opt3">Nguyễn Văn Hoan</option>
                      <option value="opt3">Phạm Quang Cường</option>
                    </select>
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
                        <th>MÃ LỚP</th>
                        <th>TÊN LỚP</th>
                        <th>TÊN GIẢNG VIÊN</th>
                        <th>BUỔI HỌC</th>
                        <th>NGÀY NHẬN XÉT</th>
                        <th style="text-align: center;">Action</th>
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
                              <p class=" m-b-0 text-muted">ROBOT</p>
                            </div>
                          </div>
                        </td>
                        <td>
                          <h6>Xưởng chế tạo RoBot</h6>
                        </td>
                        <td>Nguyễn Văn Linh</td>
                        <td>11/12</td>
                        <td>
                          <i class="fa fa-calendar-minus-o"></i>20/8/2020
                        </td>
                        <td style="text-align: center">
                          <button type="button" class="btn btn-primary waves-effect" data-toggle="modal" data-target="#mail-Modal" style="background-color: white; color: black; border: none; padding: 0;">
                            <i class="fa fa-eye f-w-600 f-16 m-r-15 text-c-green" style="font-size: 20px"></i>
                            <div>Xem nhận xét</div>
                          </button>
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
@include('backend.students.mycomment-modal')
@endsection
