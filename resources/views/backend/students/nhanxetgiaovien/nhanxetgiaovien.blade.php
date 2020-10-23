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
                        <a class="nav-link active show" data-toggle="tab" href="#home7" role="tab" aria-selected="true"
                          style="font-size: 14px; font-weight: bold;">
                          <i class="fa fa-info-circle"></i>THÔNG TIN GIẢNG VIÊN</a>
                        <div class="slide"></div>
                      </li>
                    </ul>
                    <div class="tab-content card-block">
                      <div class="tab-pane active show" id="home7" role="tabpanel">
                        <div class="row">
                          <div class="col-sm-12">
                            <div class="card">
                              <div class="card-header col-sm-12" style="text-align: center;">
                                <img class="card-img-top img-fluid" src="{{asset('assets/jpg/card1.jpg')}}"
                                  alt="Card image cap" style="width: 240px; height: 240px; border-radius: 50%">
                                <h6 style="margin-top: 10px; font-size: 16px; font-weight: bold">{{$lophoc->tenlop}}
                                </h6>
                              </div>
                              <div class="card-block">
                                <div class="row ui-sortable" id="draggablePanelList">
                                  <div class="col-lg-12 col-xl-6 ui-sortable-handle">
                                    <div class="card-sub">
                                      <div class="card-block" style="display: flex; margin-top: -25px">
                                        <h5 class="card-title"><i class="fa fa-code"></i>Giới tính :</h5>
                                        <h5 class="card-title" style="margin-left: 5px; margin-top: 1.5px">
                                          <b></b></h5>
                                      </div>
                                      <div class="card-block" style="display: flex; margin-top: -40px">
                                        <h5 class="card-title"><i class="fa fa-calendar"></i>Trình độ chuyên môn :</h5>
                                        <h5 class="card-title" style="margin-left: 5px; margin-top: 1.5px"><b>Thạc
                                            sĩ</b></h5>
                                      </div>
                                      <div class="card-block" style="display: flex; margin-top: -40px">
                                        <h5 class="card-title"><i class="fa fa-clock-o"></i>Lớp bạn đang học:</h5>
                                        <h5 class="card-title" style="margin-left: 5px; margin-top: 1.5px">
                                          <b></b></h5>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-lg-12 col-xl-6 ui-sortable-handle">
                                    <div class="card-sub">
                                      <div class="card-block" style="display: flex; margin-top: -25px">
                                        <h5 class="card-title"><i class="fa fa-bars"></i>Khóa học: </h5>
                                        <h5 class="card-title" style="margin-left: 5px; margin-top: 1.5px">
                                          <b></b></h5>
                                      </div>
                                      <div class="card-block" style="display: flex; margin-top: -40px">
                                        <h5 class="card-title"><i class="fa fa-book"></i>Loại khóa học:</h5>
                                        <h5 class="card-title" style="margin-left: 5px; margin-top: 1.5px">
                                          <b></b>
                                        </h5>
                                      </div>
                                      <div class="card-block" style="display: flex; margin-top: -40px">
                                        <h5 class="card-title"><i class="fa fa-bank"></i>Loại lớp học :</h5>
                                        <h5 class="card-title" style="margin-left: 5px; margin-top: 1.5px"><b>Group
                                            Class</b></h5>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-12">
                            <div class="card">
                              <div class="card-header">
                                <div class="card-header-left">
                                  <h5>Đánh giá của học viên</h5>
                                </div>
                              </div>
                              <div class="card-block">
                                <ul>
                                  <li style="text-align: center; margin: 5px 5px; display: flex; align-items: center">
                                    <img class="card-img-top img-fluid" src="{{asset('assets/jpg/card1.jpg')}}"
                                      alt="Card image cap" style="width: 40px; height: 40px; border-radius: 50%">
                                    <h6 style="margin-left: 10px">Nguyễn Hải Minh - [HV - 001] : </h6>
                                    <h6 class="text-c-purple" style="margin-left: 10px">Thầy dậy hay quá</h6>
                                  </li>
                                </ul>
                              </div>
                            </div>
                            <form method="post" action="{{route('review-giaovien.store')}}" novalidate="">
                              <input type="hidden" name="_token" value="{{csrf_token()}}">
                              {{ csrf_field() }}
                              <div class="card" style="white-space: normal; padding: 0">
                                <div class="card-header" style="text-align: left">
                                  <h5>Đánh giá của bạn</h5>
                                </div>
                                <div class="card-block">
                                  <div id="header" style="text-align: left; padding-left: 20px; padding-top: 10px">
                                    <div id="headerRight">
                                      <div contenteditable="true">
                                        <img class="card-img-top img-fluid" src="{{asset('assets/jpg/card1.jpg')}}"
                                          alt="Card image cap" style="width: 40px; height: 40px; border-radius: 50%">
                                        <input name="nhanxet" type="text" placeholder="Nhập vào đánh giá của bạn">
                                        {{-- <input type="text" style="display:none" name="doituongnhanxet_id}"
                                          value="{{$lophoc->giaovien->id}}"> --}}
                                        {{-- <input type="text" style="display:none" name="user_id}" value="{{}}"> --}}
                                        {{-- </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="card-footer">
                                  <input type="submit" class="btn btn-info btn-round waves-effect waves-light"
                                    style="float: right" value="Gửi"></input>
                                </div>
                              </div>
                            </form>
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

                @endsection
