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
                    <div class="col-xs-12 col-sm-12 col-md-6">
                      <h5>DANH SÁCH GIÁO VIÊN</h5>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6">
                      <div id="dom-table_filter" class="dataTables_filter" style="margin-left: -20px;">
                        <label style="display: flex">Tìm kiếm:<input type="search" class="form-control input-sm" placeholder="" aria-controls="dom-table" style="width: 250px; height: 30px;margin-top: 0px;margin-left: 10px;">
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-block">
                  <div class="table-responsive">
                    <table class="table table-hover m-b-0" id="table">
                      <thead>
                      <tr>
                        <th>STT</th>
                        <th>HỌ VÀ TÊN</th>
                        <th>NGÀY SINH</th>
                        <th>GIỚI TÍNH</th>
                        <th>SỐ CMND</th>
                        <th>SỐ ĐIỆN THOẠI</th>
                        <th>EMAIL</th>
                        <th>TRẠNG THÁI</th>
                      </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>Nguyễn Văn Linh</td>
                          <td>06/03/1998</td>
                          <td>Nam</td>
                          <td>031098000121</td>
                          <td>0363915150</td>
                          <td>nguyenlinh1998@gmail.com</td>
                          <td><label class="badge badge-inverse-default">Thử việc</label></td>

                        </tr>
                        <tr>
                          <td>2</td>
                          <td>Phạm Quang Cường</td>
                          <td>06/03/1998</td>
                          <td>Nam</td>
                          <td>031098000121</td>
                          <td>0363915150</td>
                          <td>nguyenlinh1998@gmail.com</td>
                          <td><label class="badge badge-inverse-success">Giảng viên</label></td>

                        </tr>
                        <tr>
                          <td>2</td>
                          <td>Nguyễn Văn Hoan</td>
                          <td>06/03/1998</td>
                          <td>Nam</td>
                          <td>031098000121</td>
                          <td>0363915150</td>
                          <td>nguyenlinh1998@gmail.com</td>
                          <td><label class="badge badge-inverse-danger">Đã nghỉ việc</label></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  {{--                  phân trang--}}
{{--                  <div class="card-block" style="border-top: 1px solid #cccccc; padding-bottom: 10px; text-align: center">--}}
{{--                    <div style="padding-top: 10px; display: inline-block">--}}
{{--                      {{$students->links('vendor.pagination.bootstrap-4')}}--}}
{{--                    </div>--}}
{{--                  </div>--}}
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
  <script>
    function myReset() {
      document.getElementById('main').reset();
    };
  </script>

@endsection
