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
                  <div class="col-sm-12 col-xl-3 m-b-30" style="margin-bottom: 10px">
                    <h5>DANH SÁCH HỌC SINH</h5>
                  </div>
                  <div class="col-sm-12 col-xl-4 m-b-30" style="margin-bottom: 10px">
                    <select name="select" class="form-control form-control-inverse fill">
                      <option value="opt1">Mã lớp học</option>
                      <option value="opt2">RB - 01</option>
                      <option value="opt3">RB - 02</option>
                    </select>
                  </div>
                  <div class="col-xs-12 col-xl-4 m-b-30" style="margin-left: 30px; margin-top: 10px; margin-bottom: 10px">
                    <div id="dom-table_filter" class="dataTables_filter" style="margin-left: -35px;">
                      <label style="display: flex; align-items: center">
                        Tìm kiếm:<input type="search" class="form-control input-sm" placeholder="" aria-controls="dom-table" style="width: 250px; height: 25px;margin-top: 0px;margin-left: 10px;"></label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-block">
                <div class="table-responsive">
                  <table class="table table-hover m-b-0">
                    <thead>
                      <tr>
                        <th>MÃ HỌC SINH</th>
                        <th>TÊN HỌC SINH</th>
                        <th>MÃ LỚP</th>
                        <th>TRẠNG THÁI</th>
                        <th>ACTIONS</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <div class="d-inline-block align-middle">
                            <div class="d-inline-block">
                              <h6>LKT - HS - 01</h6>
                            </div>
                          </div>
                        </td>
                        <td>Nguyễn Hải Minh</td>
                        <td>RB - 01</td>
                        <td><label class="badge badge-inverse-primary">Đang học</label></td>
                        <td>
                          <button type="button" class="btn btn-primary waves-effect" data-toggle="modal" data-target="#mail-Modal" style="background-color: white; border: none; padding: 0">
                            <i class="icon feather icon-edit f-w-600 f-16 m-r-15 text-c-green"></i></button>
                          {{-- @include('backend.teachers.classes.nhanxet-modal') --}}
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-inline-block align-middle">
                            <div class="d-inline-block">
                              <h6>LKT - HS - 01</h6>
                            </div>
                          </div>
                        </td>
                        <td>Nguyễn Hải Minh</td>
                        <td>RB - 01</td>
                        <td><label class="badge badge-inverse-primary">Đang học</label></td>
                        <td>
                          <button type="button" class="btn btn-primary waves-effect" data-toggle="modal" data-target="#mail-Modal" style="background-color: white; border: none; padding: 0">
                            <i class="fa fa-comment f-w-600 f-16 m-r-15 text-c-green"></i></button>
                          {{-- @include('backend.teachers.classes.nhanxet-modal') --}}
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-inline-block align-middle">
                            <div class="d-inline-block">
                              <h6>LKT - HS - 01</h6>
                            </div>
                          </div>
                        </td>
                        <td>Nguyễn Hải Minh</td>
                        <td>RB - 01</td>
                        <td><label class="badge badge-inverse-primary">Đang học</label></td>
                        <td>
                          <button type="button" class="btn btn-primary waves-effect" data-toggle="modal" data-target="#mail-Modal" style="background-color: white; border: none; padding: 0">
                            <i class="icon feather icon-edit f-w-600 f-16 m-r-15 text-c-green"></i></button>
                          {{-- @include('backend.teachers.classes.nhanxet-modal') --}}
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
