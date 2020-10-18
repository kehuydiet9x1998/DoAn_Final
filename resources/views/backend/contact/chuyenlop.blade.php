@extends('backend.layout.index')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
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
                  <div class="col-xs-12 col-sm-12 col-md-4">
                    <h5>DANH SÁCH HỌC SINH</h5>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4" style="display: flex;align-items: center">
                    <h6 class="col-sm-4" style="padding: 0; float: left">Chọn lớp học</h6>
                    <div class="col-sm-6" style="padding: 0; float: left; margin-top: -3px">
                      <select name="select" class="form-control form-control-primary fill">
                        <option value="opt1">Tất cả các lớp</option>
                        <option value="opt2">LP - 001</option>
                        <option value="opt3">LP -002</option>
                        <option value="opt4">LP - 003</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4" style="display: flex;align-items: center">
                    <h6 class="col-sm-5" style="padding: 0; float: left">Chọn trạng thái</h6>
                    <div class="col-sm-6" style="padding: 0; float: left; margin-top: -3px">
                      <select name="select" class="form-control form-control-primary fill">
                        <option value="opt1">Tất cả</option>
                        <option value="opt2">Đang diễn ra</option>
                        <option value="opt4">Chưa diễn ra</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-block">
                <div class="table-responsive">
                  <table class="table table-hover m-b-0" id="table">
                    <thead>
                      <tr>
                        <th>MÃ HỌC VIÊN</th>
                        <th>TÊN HỌC VIÊN</th>
                        <th>LỚP HỌC HIỆN TẠI</th>
                        <th>MÃ LỚP HIỆN TẠI</th>
                        <th>TRẠNG THÁI</th>
                        <th>ACTION</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>HS - 001</td>
                        <td>Nguyễn Văn Linh</td>
                        <td>Lập trình WEB</td>
                        <td>LP - 001</td>
                        <td><label class="badge badge-inverse-success">Đang học</label></td>
                        <td style="display: flex;">
                          <button type="button" class="btn edit btn-primary waves-effect" data-toggle="modal" data-target="#chuyenlop-Modal" data-id="1" style="background-color: white; border: none; padding: 0">
                            <i class="fa fa-edit f-w-600 f-16 m-r-15 text-c-green" style="font-size: 16px">
                              <h5 style="color: black; font-size: 14px">
                                Chuyển lớp
                              </h5>
                            </i>
                          </button>
                          @include('backend.contact.chuyenlop-Modal')
                        </td>

                      </tr>
                    </tbody>
                  </table>
                </div>
                {{-- phân trang--}}
                {{-- <div class="card-block" style="border-top: 1px solid #cccccc; padding-bottom: 10px; text-align: center">--}}
                {{-- <div style="padding-top: 10px; display: inline-block">--}}
                {{-- {{$students->links('vendor.pagination.bootstrap-4')}}--}}
                {{-- </div>--}}
                {{-- </div>--}}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection
