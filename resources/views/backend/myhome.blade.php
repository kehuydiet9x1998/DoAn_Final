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
                          <i class="fa fa-info-circle"></i>HỒ SƠ CỦA TÔI</a>
                        <div class="slide"></div>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#account" role="tab" aria-selected="true" style="font-size: 14px; font-weight: bold;">
                          <i class="fa fa-key"></i>TÀI KHOẢN CỦA TÔI</a>
                        <div class="slide"></div>
                      </li>
                    </ul>
                    <div class="tab-content card-block">
                      <div class="tab-pane active show" id="home7" role="tabpanel">
                        <div class="row">
                          <div class="col-sm-12">
                            <div>
                              <div class="card-header col-sm-12" style="text-align: center;">
                                <img class="card-img-top img-fluid" src="{{asset('assets/jpg/card1.jpg')}}" alt="Card image cap" style="width: 240px; height: 240px; border-radius: 50%">

                                <h6 class="text-c-purple" style="margin-top: 10px;">Giảng viên Fulltime</h6>
                                <h4 style="margin-top: 10px; font-size: 24px; font-weight: bold">Nguyễn Văn Linh</h4>
                                <h6 class="sub-title"></h6>
                              </div>
                              <div class="card-block">
                                <div class="row ui-sortable" id="draggablePanelList">
                                  <div class="col-lg-12 col-xl-6 ui-sortable-handle">
                                    <div class="card-sub">
                                      <div class="card-block" style="margin-top: -50px">
                                        <h6 class="card-title col-sm-auto" style="float: left; margin:0px 10px 0px 0px; padding: 0"><i class="fa fa-code"></i>Mã GV :</h6>
                                        <h6 class="card-title">
                                          <b>GV - 001</b></h6>
                                      </div>
                                      <div class="card-block" style="margin-top: -40px">
                                        <h6 class="card-title col-sm-auto" style="float: left; margin:0px 10px 0px 0px; padding: 0">
                                          <i class="fa fa-user"></i>Username :</h6>
                                        <h6 class="card-title">
                                          <b>linhnv</b></h6>
                                      </div>
                                      <div class="card-block" style="margin-top: -40px">
                                        <h6 class="card-title col-sm-auto" style="float: left; margin:0px 10px 0px 0px; padding: 0">
                                          <i class="fa fa-flag"></i>Quốc tịch :</h6>
                                        <h6 class="card-title">
                                          <b>Việt Nam</b></h6>
                                      </div>
                                      <div class="card-block" style="margin-top: -40px">
                                        <h6 class="card-title col-sm-auto" style="float: left; margin:0px 10px 0px 0px; padding: 0">
                                          <i class="fa fa-male"></i>Giới tính :</h6>
                                        <h6 class="card-title">
                                          <b>Nam</b></h6>
                                      </div>


                                    </div>
                                  </div>
                                  <div class="col-lg-12 col-xl-6 ui-sortable-handle">
                                    <div class="card-sub">
                                      <div class="card-block" style="margin-top: -50px">
                                        <h6 class="card-title col-sm-auto" style="float: left; margin:0px 10px 0px 0px; padding: 0">
                                          <i class="fa fa-home"></i>Địa chỉ:</h6>
                                        <h6 class="card-title" style="display: inline-block;width: 260px;">

                                          <b>xóm 1 - thôn Kiều Đông - xã Hồng Thái - An Dương - Hải Phòng</b></h6>
                                      </div>
                                      <div class="card-block" style="margin-top: -40px">
                                        <h6 class="card-title col-sm-auto" style="float: left; margin:0px 10px 0px 0px; padding: 0">
                                          <i class="fa fa-mobile-phone"></i>Di động:</h6>
                                        <h6 class="card-title">
                                          <b>0363915150</b></h6>
                                      </div>
                                      <div class="card-block" style="margin-top: -40px">
                                        <h6 class="card-title col-sm-auto" style="float: left; margin:0px 10px 0px 0px; padding: 0">
                                          <i class="fa fa-calendar"></i>Ngày sinh:</h6>
                                        <h6 class="card-title">
                                          <b>06/03/1998</b></h6>
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
                                  <h6 class="text-c-green">Danh sách lớp giảng dạy</h6>
                                </div>
                              </div>
                              <div class="card-block table-border-style">
                                <div class="table-responsive">
                                  <table class="table table-bordered">
                                    <thead>
                                      <tr>
                                        <th style="text-align: center">MÃ KHÓA HỌC</th>
                                        <th style="text-align: center">KHÓA HỌC</th>
                                        <th style="text-align: center">MÃ LỚP</th>
                                        <th style="text-align: center">TÊN LỚP</th>
                                        <th style="text-align: center">HỌC SINH</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <th scope="row" style="text-align: center">KH - 001</th>
                                        <td style="text-align: center">Chế tạo ROBOT</td>
                                        <td style="text-align: center">LP - 001</td>
                                        <td style="text-align: center">Xưởng lắp ráp ROBOT</td>
                                        <td style="text-align: center">12</td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane" id="account" role="tabpanel">
                        <div class="row">
                          <div class="col-sm-12">
                            <div>
                              <div class="card-header col-sm-12" style="text-align: center;">
                                <img class="card-img-top img-fluid" src="{{asset('assets/jpg/card1.jpg')}}" alt="Card image cap" style="width: 240px; height: 240px; border-radius: 50%">
                                <h6 class="text-c-purple" style="margin-top: 10px;">Giảng viên Fulltime</h6>
                                <h4 style="margin-top: 10px; font-size: 24px; font-weight: bold">Nguyễn Văn Linh</h4>
                                <h6 class="sub-title"></h6>
                              </div>
                              <div class="card-block">
                                <form id="main" method="post" action="https://colorlib.com/" novalidate="">
                                  <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Username</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" name="name" id="name" readonly value="linhnv">
                                      <span class="messages"></span>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Mật khẩu hiện tại</label>
                                    <div class="col-sm-10">
                                      <input type="password" class="form-control" id="password" name="password" placeholder="Mật khẩu hiện tại">
                                      <span class="messages"></span>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Mật khẩu mới</label>
                                    <div class="col-sm-10">
                                      <input type="password" class="form-control" id="password" name="password" placeholder="Nhập mật khẩu mới">
                                      <span class="messages"></span>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Nhập lại mật khẩu</label>
                                    <div class="col-sm-10">
                                      <input type="password" class="form-control" id="repeat-password" name="repeat-password" placeholder="Nhập lại mật khẩu mới">
                                      <span class="messages"></span>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label class="col-sm-2"></label>
                                    <div class="col-sm-10">
                                      <button type="submit" class="btn btn-primary m-b-0">Update</button>
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
  </div>
</div>
@endsection
@section('script')

@endsection
