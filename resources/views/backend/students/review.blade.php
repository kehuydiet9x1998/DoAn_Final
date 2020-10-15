@extends('backend.layout.index')
@section('content')
  <div class="pcoded-inner-content">
    <div class="main-body">
      <div class="page-wrapper">
        <div class="page-body">
          <div class="row">
            <div class="col-sm-12">
              <div class="card">
                <div class="card-block tab-icon">
                  <div class="row">
                    <div class="col-lg-12">
                      <ul class="nav nav-tabs md-tabs " role="tablist">
                        <li class="nav-item">
                          <a class="nav-link active show" data-toggle="tab" href="#home7" role="tab" aria-selected="true" style="font-size: 14px; font-weight: bold;">
                            <i class="fa fa-info-circle"></i>DANH SÁCH BÀI HỌC</a>
                          <div class="slide"></div>
                        </li>
                      </ul>
                      <div class="tab-content card-block">
                        {{--  Thông tin khóa học    --}}
                        <div class="tab-pane active show" id="home7" role="tabpanel">
                          <div class="row" >
                            <div class="col-sm-12">
                              <div class="card">
                                <div class="card-header">
                                  <h5 style="color: #2ce00c; font-size: 14px; font-weight: bold";>Lớp học: Lập trình ROBOT</h5>
                                </div>
                                <div class="card-block">
                                  <div class="row ui-sortable" id="draggablePanelList">
                                    <div class="col-lg-12 col-xl-6 ui-sortable-handle">
                                      <div class="card-sub">
                                        <div class="card-block" style="display: flex; margin-top: -25px">
                                          <h5 class="card-title"><i class="fa fa-code"></i>Mã lớp học :</h5>
                                          <h5 class="card-title" style="margin-left: 5px; margin-top: 1.5px"><b>LP  - 001</b></h5>
                                        </div>
                                        <div class="card-block" style="display: flex; margin-top: -40px">
                                          <h5 class="card-title"><i class="fa fa-calendar"></i>Thời gian học :</h5>
                                          <h5 class="card-title" style="margin-left: 5px; margin-top: 1.5px"><b>20/8/2020</b></h5>
                                        </div>
                                        <div class="card-block" style="display: flex; margin-top: -40px">
                                          <h5 class="card-title"><i class="fa fa-clock-o"></i>Lịch học :</h5>
                                          <h5 class="card-title" style="margin-left: 5px; margin-top: 1.5px"><b>14:00 PM-16:00 PM Thứ bảy</b></h5>
                                        </div>
                                        <div class="card-block" style="display: flex; margin-top: -40px">
                                          <h5 class="card-title"><i class="fa fa-graduation-cap"></i>Giảng viên :</h5>
                                          <h5 class="card-title" style="margin-left: 5px; margin-top: 1.5px"><b>Nguyễn Văn Linh</b></h5>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-lg-12 col-xl-6 ui-sortable-handle">
                                      <div class="card-sub">
                                        <div class="card-block" style="display: flex; margin-top: -25px">
                                          <h5 class="card-title"><i class="fa fa-bars"></i>Nội dung bài học: </h5>
                                          <h5 class="card-title" style="margin-left: 5px; margin-top: 1.5px"><b>Tìm hiểu HTML</b></h5>
                                        </div>
                                        <div class="card-block" style="display: flex; margin-top: -40px">
                                          <h5 class="card-title"><i class="fa fa-book"></i>Bài học :</h5>
                                          <h5 class="card-title" style="margin-left: 5px; margin-top: 1.5px"><b>1/12</b></h5>
                                        </div>
                                        <div class="card-block" style="display: flex; margin-top: -40px">
                                          <h5 class="card-title"><i class="fa fa-bank"></i>Loại lớp học :</h5>
                                          <h5 class="card-title" style="margin-left: 5px; margin-top: 1.5px"><b>Group Class</b></h5>
                                        </div>
                                        <div class="card-block" style="margin-top: -40px">
                                          <h5 class="card-title" style="float: left"><i class="fa fa-building"></i>Trung tâm :</h5>
                                          <h5 class="card-title" style="margin-left: 5px; margin-top: 1.5px"><b>104 - Lương Khánh Thiện</b></h5>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-lg-12" style="text-align: center">
                                      <iframe class="col-sm-auto" src="https://www.youtube.com/embed/tgbNymZ7vqY" allowfullscreen>
                                      </iframe>
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
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
@section('script')
  {{-- <script type="text/javascript" src="{{asset('assets/js/form-validation.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/js/validate.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/js/underscore-min.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script> --}}
@endsection

