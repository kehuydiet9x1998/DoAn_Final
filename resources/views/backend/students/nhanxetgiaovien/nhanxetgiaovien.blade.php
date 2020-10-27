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
                                @php
                                $anh = $lophoc->giaovien->user->anhdaidien;
                                @endphp
                                <img class="card-img-top img-fluid" src="{{asset("$anh")}}" alt="Card image cap" style="width: 240px; height: 240px; border-radius: 50%">
                                <h6 style="margin-top: 10px; font-size: 16px; font-weight: bold">Giáo viên:
                                  {{$lophoc->giaovien->hodem.' '.$lophoc->giaovien->ten}}
                                </h6>
                              </div>
                              <div class="card-block">
                                <div class="row ui-sortable" id="draggablePanelList">
                                  <div class="col-lg-12 col-xl-6 ui-sortable-handle">
                                    <div class="card-sub">
                                      <div class="card-block" style="display: flex; margin-top: -25px">
                                        <h5 class="card-title"><i class="fa fa-code"></i>Giới tính :</h5>
                                        <h5 class="card-title" style="margin-left: 5px; margin-top: 1.5px">
                                          <b>{{$lophoc->giaovien->gioitinh}}</b></h5>
                                      </div>
                                      <div class="card-block" style="display: flex; margin-top: -40px">
                                        <h5 class="card-title"><i class="fa fa-calendar"></i>Số điện thoại:</h5>
                                        <h5 class="card-title" style="margin-left: 5px; margin-top: 1.5px">
                                          <b>{{$lophoc->giaovien->sodienthoai}}</b></h5>
                                      </div>
                                      <div class="card-block" style="display: flex; margin-top: -40px">
                                        <h5 class="card-title"><i class="fa fa-clock-o"></i>Lớp bạn đang học:</h5>
                                        <h5 class="card-title" style="margin-left: 5px; margin-top: 1.5px">
                                          <b>{{$lophoc->tenlop}}</b></h5>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-lg-12 col-xl-6 ui-sortable-handle">
                                    <div class="card-sub">
                                      <div class="card-block" style="display: flex; margin-top: -25px">
                                        <h5 class="card-title"><i class="fa fa-bars"></i>Khóa học: </h5>
                                        <h5 class="card-title" style="margin-left: 5px; margin-top: 1.5px">
                                          <b>{{$lophoc->khoahoc->tenkhoahoc}}</b></h5>
                                      </div>
                                      <div class="card-block" style="display: flex; margin-top: -40px">
                                        <h5 class="card-title"><i class="fa fa-book"></i>Loại khóa học:</h5>
                                        <h5 class="card-title" style="margin-left: 5px; margin-top: 1.5px">
                                          <b>{{$lophoc->khoahoc->loaikhoahoc->tenloaikhoahoc}}</b>
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
                                  <h5>Đánh giá của học sinh</h5>
                                </div>
                              </div>
                              <div class="card-block">
                                @foreach ($dsnhanxet as $nhanxet)
                                @php
                                $anh = $nhanxet->user->anhdaidien;
                                setlocale(LC_TIME, 'vi_VN'); Carbon\Carbon::setLocale('vi');
                                $time = new Carbon\Carbon($nhanxet->thoigian);
                                @endphp
                                <ul>
                                  <li style="text-align: center; margin: 5px 5px; display: flex; align-items: center">
                                    <img class="card-img-top img-fluid" src="{{asset("$anh")}}" alt="Card image cap" style="width: 40px; height: 40px; border-radius: 50%">
                                    <h6 style="margin-left: 10px">
                                      {{$nhanxet->user->hocsinh->hodem.' '.$nhanxet->user->hocsinh->ten.' [ '. $nhanxet->thoigian.' ] '}}
                                    </h6>
                                    <h6 class="text-c-purple" style="margin-left: 10px">{{$nhanxet->noidung}}</h6>
                                  </li>
                                </ul>
                                @endforeach
                                <div class="card-block" style="border-top: 1px solid #cccccc; padding-bottom: 10px; text-align: center">
                                  <div style="padding-top: 10px; display: inline-block">
                                    {{$dsnhanxet->links('vendor.pagination.bootstrap-4')}}
                                    {{-- {{$khoahocs->links()}} --}}
                                  </div>
                                </div>
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
                                      @php
                                      $anh = $user->anhdaidien;
                                      date_default_timezone_set("Asia/Bangkok");
                                      $date=date_create();
                                     
                                      $time = date_format($date,"Y-m-d H:i:s");
                                      setlocale(LC_TIME, 'vi_VN'); Carbon\Carbon::setLocale('vi');
                                      @endphp
<<<<<<< HEAD
                                      <div contenteditable="true">
                                        <img class="card-img-top img-fluid" src="{{asset("$anh")}}" alt="Card image cap" style="width: 40px; height: 40px; border-radius: 50%">
                                        <input name="noidung" type="text" placeholder="Nhập vào đánh giá của bạn">
                                        <input type="text" style="display:none" name="giao_vien_id" value="{{$lophoc->giaovien->id}}">
=======
                                      <div>
                                        <img class="card-img-top img-fluid" src="{{asset("$anh")}}" alt="Card image cap"
                                          style="width: 40px; height: 40px; border-radius: 50%; float: left;">
                                        <input type="text" name="user_id" value="{{$user->hocsinh->hodem.' '.$user->hocsinh->ten.' : '.$time}}" style="border: none; margin-left:8px; margin-top: 10px; background-color:transparent; width:50%" disabled>
                                        <textarea name="noidung" rows="2" class="form-control" placeholder="Nhập vào đánh giá của bạn" style="border: none; margin-top: 13px;"></textarea>
                                        <input type="text" style="display:none" name="giao_vien_id"
                                          value="{{$lophoc->giaovien->id}}">
>>>>>>> 71e9b8a3a502c207743141c1e5240961f4de480c
                                        <input type="text" style="display:none" name="user_id" value="{{$user->id}}">
                                        <input name="thoigian" style="display: none;" value="{{$time}}">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="card-footer">
                                  <input type="submit" class="btn btn-info btn-round waves-effect waves-light" style="float: right" value="Gửi"></input>
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
