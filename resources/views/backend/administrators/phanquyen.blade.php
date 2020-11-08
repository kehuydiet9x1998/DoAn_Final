@extends('backend.layout.index')
@section('content')
  <div class="pcoded-inner-content">
    <div class="main-body">
      <div class="page-wrapper">
        <div class="page-body breadcrumb-page">
          <div class="card">
            <div class="card-block caption-breadcrumb">
              <div class="breadcrumb-header">
                <h5>Phân quyền người dùng</h5>
                <span>Thực hiện phân quyền tại đây</span>
              </div>
              <div class="page-header-breadcrumb">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item">
                    <a href="#!">
                      <i class="icofont icofont-home"></i>
                    </a>
                  </li>
                  <li class="breadcrumb-item"><a href="#!">Administrator</a>
                  </li>
                  <li class="breadcrumb-item"><a href="#!">Phân Quyền</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="page-body">
          <div class="row">
            <div class="col-sm-12">
              <div class="card">
                <div class="row">
                {{-- thêm cột trong đây--}}
                  <div class="col-sm-4">
                  <div class="card-header">
                    <h5 class="card-header-text">LỚP HỌC</h5>
                  </div>
                  <div class="card-block accordion-block" style="padding-bottom: 0">
                    <div id="accordion" role="tablist" aria-multiselectable="true">
                      <div class="accordion-panel">
                        <div class="accordion-heading" role="tab" id="headingOne">
                          <h6 class="accordion-title">
                            {{--sửa href + aria-controls của span để gọi tới id của thẻ div--}}
                            <span class="waves-effect waves-dark"
                               data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false"
                               aria-controls="collapseOne">
                              <div class="checkbox-zoom zoom-primary">
                              <label>
                                <input type="checkbox" value="">
                                <span class="cr">
                                  <i class="cr-icon icofont icofont-ui-check txt-default"></i>
                                </span>
                                <span>Adminstrator</span>
                              </label>
                              </div>
                            </span>
                        </h6>
                        <div id="collapseOne" class="panel-collapse in collapse" role="tabpanel" aria-labelledby="headingOne">
                          <div class="accordion-content accordion-desc">
                            <div class="col-sm-12">
                              <span class="waves-effect waves-dark"
                              data-toggle="collapse" data-parent="#accordion" href="#collapseOne-1" aria-expanded="false"
                              aria-controls="collapseOne-1">
                                <div class="checkbox-zoom zoom-primary">
                                  <label>
                                  <input type="checkbox" value="">
                                  <span class="cr">
                                    <i class="cr-icon icofont icofont-ui-check txt-default"></i>
                                  </span>
                                  <span>Khóa học</span>
                                </label>
                                </div>
                              </span>
                              <div id="collapseOne-1" class="panel-collapse in collapse"
                                   role="tabpanel" aria-labelledby="headingOne" style="margin-left: 30px">
                                <div class="accordion-content accordion-desc" style="padding: 0">
                                  <div class="checkbox-zoom zoom-success">
                                  <label>
                                    <input type="checkbox" value="">
                                    <span class="cr">
                                    <i class="cr-icon icofont icofont-ui-check txt-default"></i>
                                  </span>
                                    <span>Thêm</span>
                                  </label>
                                  </div>
                                </div>
                                <div class="accordion-content accordion-desc" style="padding: 0">
                                  <div class="checkbox-zoom zoom-danger">
                                  <label>
                                    <input type="checkbox" value="">
                                    <span class="cr">
                                    <i class="cr-icon icofont icofont-ui-check txt-default"></i>
                                  </span>
                                    <span>Xóa</span>
                                  </label>
                                  </div>
                                </div>
                                <div class="accordion-content accordion-desc" style="padding: 0">
                                  <div class="checkbox-zoom zoom-warning">
                                  <label>
                                    <input type="checkbox" value="">
                                    <span class="cr">
                                    <i class="cr-icon icofont icofont-ui-check txt-default"></i>
                                  </span>
                                    <span>Sửa</span>
                                  </label>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                  </div>
                </div>
                <div class="card-footer" style="padding-top: 0">
                  <input type="submit" class="btn btn-primary waves-effect waves-light" style="float: right; margin: 0 10px" value="Thêm" />
                  <button type="button" class="btn btn-default waves-effect" style="float: right">Đóng</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
