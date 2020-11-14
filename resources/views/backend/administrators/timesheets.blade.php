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
                    <h5>Bảng chấm công</h5>
                  </div>
                </div>
              </div>
              <div class="card-block">
                <div class="table-responsive">
                  <table class="table table-hover m-b-0" id="datatable">
                    <thead>
                      <th>STT</th>
                      <th>TÊN NHÂN VIÊN</th>
                      <th>CHỨC VỤ</th>
                      <th>GIỚI TÍNH</th>
                      <th>SỐ ĐT</th>
                      <th>CHI TIẾT</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <div class="d-inline-block align-middle">
                            <div class="d-inline-block">
                              <h6>1</h6>
                            </div>
                          </div>
                        </td>
                        <td>Nguyễn Văn Linh</td>
                        <td>Giám đốc</td>
                        <td>Nam</td>
                        <td>0363915150</td>
                        <td>
                          <button type="button" class="btn btn-primary waves-effect" data-toggle="modal" data-target="#large-Modal" style="background-color: transparent; border: none; font-size: 30px">
                            <i class="fa fa-wpforms text-c-purple"></i>
                          </button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                  @include('backend.administrators.calendar')
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
