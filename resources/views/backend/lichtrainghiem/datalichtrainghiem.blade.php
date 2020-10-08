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
                    <h5>DANH SÁCH LỊCH TRẢI NGHIỆM</h5>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-6">
                    <div id="dom-table_filter" class="dataTables_filter" style="margin-left: -145px;">
                      <label style="display: flex">Tìm kiếm:<input type="search" class="form-control input-sm" placeholder="" aria-controls="dom-table" style="width: 250px; height: 25px;margin-top: 0px;margin-left: 10px;">
                        <a href="{{URL::to('admin/lich-trai-nghiem/them')}}" class="btn btn-success btn-round waves-effect waves-light" style="margin-top: -6px;height: 35px;line-height: 13px; margin-left: 5px">Thêm lịch trải nghiệm</a>
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
                  <table class="table table-hover m-b-0">
                    <thead>
                      <tr>
                        <th>STT</th>
                        <th>Tên học sinh</th>
                        <th>Ngày sinh</th>
                        <th>Giới tính</th>
                        <th>Họ tên cha mẹ</th>
                        <th>Tags</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <div class="d-inline-block align-middle">
                            <div class="d-inline-block">
                              <h6>1</h6>
                              <p class="text-muted m-b-0">63541</p>
                            </div>
                          </div>
                        </td>
                        <td>Phạ Quang Cường</td>
                        <td>01/03/1998</td>
                        <td>Nam</td>
                        <td>Nguyễn Văn A</td>
                        <td>
                          <label class="badge badge-inverse-primary">Sketch</label>
                          <label class="badge badge-inverse-primary">Ui</label>
                        </td>
                        <td><a href="#!"><i class="icon feather icon-edit f-w-600 f-16 m-r-15 text-c-green"></i></a><a href="#!"><i class="feather icon-trash-2 f-w-600 f-16 text-c-red"></i></a></td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-inline-block align-middle">
                            <div class="d-inline-block">
                              <h6>2</h6>
                              <p class="text-muted m-b-0">68651</p>
                            </div>
                          </div>
                        </td>
                        <td>Nguyễn Văn Hoan</td>
                        <td>25/12/1998</td>
                        <td>Nam</td>
                        <td>Nguyễn Văn B</td>
                        <td>
                          <label class="badge badge-inverse-primary">Sketch</label>
                          <label class="badge badge-inverse-primary">Ui</label>
                        </td>
                        <td><a href="#!"><i class="icon feather icon-edit f-w-600 f-16 m-r-15 text-c-green"></i></a><a href="#!"><i class="feather icon-trash-2 f-w-600 f-16 text-c-red"></i></a></td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-inline-block align-middle">
                            <div class="d-inline-block">
                              <h6>3</h6>
                              <p class="text-muted m-b-0">68651</p>
                            </div>
                          </div>
                        </td>
                        <td>Nguyễn Văn Linh</td>
                        <td>05/06/1998</td>
                        <td>Nam</td>
                        <td>Nguyễn Văn C</td>
                        <td>
                          <label class="badge badge-inverse-primary">Sketch</label>
                          <label class="badge badge-inverse-primary">Ui</label>
                        </td>
                        <td><a href="#!"><i class="icon feather icon-edit f-w-600 f-16 m-r-15 text-c-green"></i></a><a href="#!"><i class="feather icon-trash-2 f-w-600 f-16 text-c-red"></i></a></td>
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
