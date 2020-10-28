@extends('backend.layout.index')
@section('content')
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
                        <i class="fa fa-info-circle"></i>THÔNG TIN KHÓA HỌC</a>
                      <div class="slide"></div>
                    </li>
                  </ul>
                  <div class="tab-content card-block">
                    {{-- Thông tin khóa học    --}}
                    <div class="tab-pane active show" id="home7" role="tabpanel">
                      <div class="main-body">
                        <div class="page-wrapper">

                          <div class="page-body">
                            <div class="row">
                              <div class="col-sm-12">

                                <div class="card">
                                  <div class="card-header">
                                    <h5>Tên khóa học: {{$khoahoc->tenkhoahoc}}</h5>
                                  </div>
                                  <div class="card-block">
                                    <div class="row ui-sortable" id="draggablePanelList">
                                      <div class="col-lg-12 col-xl-12 ui-sortable-handle">
                                        <div class="card-sub">
                                          <img class="card-img-top img-fluid" src="{{asset('assets/jpg/card2.jpg')}}" alt="Card image cap">
                                          <div class="card-block">
                                            <h5 class="card-title">Ảnh đại diện</h5>
                                            {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                          the card's content.</p> --}}
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>

                            </div>
                          </div>
                          <div class="row">
                            <div class="col-lg-12 col-xl-5">
                              <div class="card">
                                <div class="card-block p-b-0">
                                  <div class="row">
                                    <div class="col-md-12 ui-sortable" id="draggableMultiple">
                                      <div class="sortable-moves card-sub ui-sortable-handle" style="padding-left: 10px">
                                        <h5 class="card-title"><i class="fa fa-wpforms" style="padding-right: 3px"></i>Nội dung:
                                        </h5>
                                        <p class="card-text">{{$khoahoc->noidung}}</p>
                                      </div>
                                      <div class="sortable-moves card-sub ui-sortable-handle" style="padding-left: 10px">
                                        <h5 class="card-title"><i class="fa fa-gg" style="padding-right: 3px"></i>Độ
                                          tuổi: </h5>
                                        <p class="card-text">{{$khoahoc->dotuoi}}</p>
                                      </div>
                                      <div class="sortable-moves card-sub ui-sortable-handle" style="padding-left: 10px">
                                        <h5 class="card-title"><i class="fa fa-wpforms" style="padding-right: 3px"></i>Thời
                                          lượng: </h5>
                                        <p class="card-text">144 giờ (2 học kỳ - 24 tháng), 90 phút mối buổi - Chứ có dữ
                                          liệu trong csdl</p>
                                      </div>
                                      <div class="sortable-moves card-sub ui-sortable-handle" style="padding-left: 10px">
                                        <h5 class="card-title"><i class="fa fa-wpforms" style="padding-right: 3px"></i>Công cụ:
                                        </h5>
                                        <p class="card-text">Tablet, Uaro Kit - chưa có dữ liệu trong csdl</p>
                                      </div>
                                      <div class="sortable-moves card-sub ui-sortable-handle" style="padding-left: 10px">
                                        <h5 class="card-title"><i class="fa fa-wpforms" style="padding-right: 3px"></i>Điều kiện
                                          để học:
                                        </h5>
                                        <p class="card-text">{{$khoahoc->dieukienhoc}}</p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-12 col-xl-7">
                              <div class="card">
                                <div class="card-block">
                                  <div class="row ui-sortable" id="draggableWithoutImg">
                                    <div class="col-md-12 ui-sortable-handle">
                                      <div class="card-sub m-b-20">
                                        <div class="card-block">
                                          <h5 class="card-title">Mô tả khóa học</h5>
                                          <p class="card-text">{{$khoahoc->mota}}</p>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-12 ui-sortable-handle">
                                      <div class="card-sub m-b-20">
                                        <div class="card-block">
                                          <h5 class="card-title">Học sinh được gì</h5>
                                          <p class="card-text">Kiến thức - chưa có dữ liệu trong csdl </p>
                                          <p class="card-text">Biết về robot - chưa có dữ liệu trong csdl</p>
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
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="card">
                            <div class="card-header">
                              <div class="card-header-left">
                                <h5>Đánh giá của học sinh</h5>
                              </div>
                            </div>
                            <div class="card-block">
                              @foreach ($nhanxets as $nhanxet)
                              <ul>
                                @php
                                $anh = $nhanxet->user-> anhdaidien;
                                setlocale(LC_TIME, 'vi_VN'); Carbon\Carbon::setLocale('vi');
                                $time = new Carbon\Carbon($nhanxet->thoigian);
                                @endphp
                                <li style="text-align: center; margin: 5px 5px; display: flex; align-items: center">
                                  <img class="card-img-top img-fluid" src="{{asset("$anh")}}" alt="Card image cap" style="width: 40px; height: 40px; border-radius: 50%">
                                  <h6 style="margin-left: 10px">
                                    {{$nhanxet->user->hocsinh->hodem.' '.$nhanxet->user->hocsinh->ten.' [ '.$nhanxet->created_at->diffForHumans().' ] '}}
                                  </h6>
                                  <h6 class="text-c-purple" style="margin-left: 10px">{{$nhanxet->noidung}}</h6>
                                </li>
                              </ul>
                              @endforeach
                              <div class="card-block" style="border-top: 1px solid #cccccc; padding-bottom: 10px; text-align: center">
                                <div style="padding-top: 10px; display: inline-block">
                                  {{$nhanxets->links('vendor.pagination.bootstrap-4')}}
                                  {{-- {{$khoahocs->links()}} --}}
                                </div>
                              </div>
                            </div>
                          </div>
                          <form method="post" action="{{route('review-khoahoc.store')}}" novalidate="">
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
                                    <img class="card-img-top img-fluid" src="{{asset("$anh")}}" alt="Card image cap" style="width: 40px; height: 40px; border-radius: 50%">
                                    <input type="text" name="user_id" value="{{$user->hocsinh->hodem.' '.$user->hocsinh->ten.' : '.$time}}" style="border: none; margin-left:8px; margin-top: 10px; background-color:transparent; width:50%" disabled>
                                    <textarea name="noidung" rows="2" class="form-control" placeholder="Nhập vào đánh giá của bạn" style="border: none; margin-top: 13px;"></textarea>
                                    <input name="user_id" style="display: none;" value="{{$user->id}}">
                                    <input name="khoa_hoc_id" style="display: none;" value="{{$khoahoc->id}}">

                                    <input name="thoigian" style="display: none;" value="{{$time}}">
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
@endsection
@section('script')

@endsection
