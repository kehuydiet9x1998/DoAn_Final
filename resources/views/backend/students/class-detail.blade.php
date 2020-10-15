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
                            <i class="fa fa-info-circle"></i>Chi tiết lớp học</a>
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
                                          <h5 class="card-title" style="margin-left: 5px; margin-top: 1.5px"><b>20/8/2020 đến 20/10/2020</b></h5>
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
                                          <h5 class="card-title"><i class="fa fa-bars"></i>Khóa học: </h5>
                                          <h5 class="card-title" style="margin-left: 5px; margin-top: 1.5px"><b>Xưởng chế tạo ROBOT</b></h5>
                                        </div>
                                        <div class="card-block" style="display: flex; margin-top: -40px">
                                          <h5 class="card-title"><i class="fa fa-book"></i>Bài học :</h5>
                                          <h5 class="card-title" style="margin-left: 5px; margin-top: 1.5px"><b>11/12</b></h5>
                                        </div>
                                        <div class="card-block" style="display: flex; margin-top: -40px">
                                          <h5 class="card-title"><i class="fa fa-bank"></i>Loại lớp học :</h5>
                                          <h5 class="card-title" style="margin-left: 5px; margin-top: 1.5px"><b>Group Class</b></h5>
                                        </div>
                                         <div class="card-block" style="margin-top: -40px">
                                          <h5 class="card-title" style="float: left"><i class="fa fa-building-o"></i>Trung tâm :</h5>
                                          <h5 class="card-title" style="margin-left: 5px; margin-top: 1.5px"> TEKY - Center: 104 Lương Khánh Thiện - HP</h5>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row" >
                            <div class="col-sm-12">
                              <div class="card">
                                <div class="card-header">
                                  <div class="card-header-left">
                                    <h5>Lộ trình khóa học :Xưởng chế tạo ROBOT</h5>
                                  </div>
                                </div>
                                <div class="card-block">
                                  <ul>
                                    @for( $i=1; $i<13; $i++)
                                      <li style="text-align: center; margin-left: 5px; float: left">
                                        <span>----</span>
                                        <button class="btn waves-effect waves-light" style="border-radius: 50%; padding: 5px 10px">{{$i}}</button>
                                        <span>----</span>
                                        <div class="sub-text">07.10.2020</div>
                                        <div class="sub-title" >14:00h-16:00h</div>
                                      </li>
                                    @endfor
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row" >
                            <div class="col-sm-12">
                              <div class="card">
                                <div class="card-header">
                                  <div class="card-header-left">
                                    <h6>KHÓA HỌC: XƯỞNG CHẾ TẠO ROBOT - BUỔI HỌC: 1/12</h6>
                                    <div>14:00 - 16:00 | 26/07/20 </div>
                                  </div>
                                </div>
                                <div class="card-block">
                                  <ul style="display: flex">
                                    <li style="margin: 0 10px">
                                      <button data-id="1" class="btn waves-effect waves-light btn-round">
                                        <a style="font-size: 14px; font-weight: 700" href="student/home-work/1">LÀM BÀI TẬP</a>
                                      </button>
                                    </li>
                                    <li style="margin: 0 10px">
                                      <button type="button" class="btn waves-effect waves-light btn-round" data-toggle="modal"
                                              data-target="#mail-Modal" style="font-size: 14px; font-weight: bold">
                                        XEM NHẬN XÉT
                                      </button>
                                      @include('backend.students.mycomment-modal')
                                    </li>
                                    <li style="margin: 0 10px">
                                      <button data-id="1" class="btn waves-effect waves-light btn-round">
                                        <a style="font-size: 14px; font-weight: 800" href="comment/1">NHẬN XÉT GIẢNG VIÊN</a>
                                      </button>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row" >
                            <div class="col-sm-12">
                              <div class="card">
                                <div class="card-header">
                                  <div class="card-header-left">
                                    <h5>MÔ TẢ KHÓA HỌC</h5>
                                  </div>
                                </div>
                                <div class="card-block">
                                  <p>
                                    Xây dựng nền tảng kiến thức vững chắc về thiết kế đồ họa,
                                    tạo phong cách cá nhân, lập trình thuật toán điều khiển nhân vật, môi trường.
                                  </p>
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

