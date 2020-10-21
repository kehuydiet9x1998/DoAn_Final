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
                          <i class="fa fa-info-circle"></i>Chi tiết lớp học</a>
                        <div class="slide"></div>
                      </li>
                    </ul>
                    <div class="tab-content card-block">
                      {{--  Thông tin khóa học    --}}
                      <div class="tab-pane active show" id="home7" role="tabpanel">
                        <div class="row">
                          <div class="col-sm-12">
                            <div class="card">
                              <div class="card-header">
                                <h5 style="color: #2ce00c; font-size: 14px; font-weight: bold" ;>Lớp
                                  học:{{$classes->tenlop}}</h5>
                              </div>
                              <div class="card-block">
                                <div class="row ui-sortable" id="draggablePanelList">
                                  <div class="col-lg-12 col-xl-6 ui-sortable-handle">
                                    <div class="card-sub">
                                      <div class="card-block" style="margin-top: -25px">
                                        <h5 class="card-title col-sm-auto" style="float: left; margin:0px 10px 0px 0px; padding: 0"><i class="fa fa-code"></i>Mã lớp học :</h5>
                                        <h5 class="card-title">
                                          <b>{{$classes->id}}</b></h5>
                                      </div>
                                      <div class="card-block" style="margin-top: -40px">
                                        <h5 class="card-title col-sm-auto" style="float: left; margin:0px 10px 0px 0px; padding: 0"><i class="fa fa-calendar"></i>Thời gian học :</h5>
                                        <h5 class="card-title">
                                          <b>{{$classes->ngaybatdau}} đến {{$classes->ngayketthuc}}</b></h5>
                                      </div>
                                      @php
                                      $lichhoc = $classes->lichHoc;
                                      @endphp
                                      <div class="card-block" style="margin-top: -40px">
                                        <h5 class="card-title col-sm-auto" style="float: left; margin:0px 10px 0px 0px; padding: 0"><i class="fa fa-clock-o"></i>Lịch học :</h5>
                                        <h5 class="card-title">
                                          <b>{{$lichhoc->caHoc->thoigianbatdau}} -
                                            {{$lichhoc->caHoc->thoigianketthuc}} Thứ {{$lichhoc->thu}}</b></h5>
                                      </div>
                                      <div class="card-block" style="margin-top: -40px">
                                        <h5 class="card-title col-sm-auto" style="float: left; margin:0px 10px 0px 0px; padding: 0"><i class="fa fa-graduation-cap"></i>Giảng viên :</h5>
                                        <h5 class="card-title">
                                          <b>{{$classes->giaoVien->hodem. ' ' . $classes->giaoVien->ten}}</b></h5>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-lg-12 col-xl-6 ui-sortable-handle">
                                    <div class="card-sub">
                                      <div class="card-block" style="margin-top: -25px">
                                        <h5 class="card-title col-sm-auto" style="float: left; margin:0px 10px 0px 0px; padding: 0"><i class="fa fa-bars"></i>Khóa học: </h5>
                                        <h5 class="card-title">
                                          <b>{{$classes->KhoaHoc->tenkhoahoc}}</b></h5>
                                      </div>
                                      <div class="card-block" style="margin-top: -40px">
                                        <h5 class="card-title col-sm-auto" style="float: left; margin:0px 10px 0px 0px; padding: 0"><i class="fa fa-book"></i>Bài học :</h5>
                                        <h5 class="card-title">
                                          <b>{{$classes->sobuoidahoc}}/{{$classes->sobuoi}}</b></h5>
                                      </div>
                                      <div class="card-block" style="margin-top: -40px">
                                        <h5 class="card-title col-sm-auto" style="float: left; margin:0px 10px 0px 0px; padding: 0"><i class="fa fa-bank"></i>Loại lớp học :</h5>
                                        <h5 class="card-title"><b>Group Class</b></h5>
                                      </div>
                                      <div class="card-block" style="margin-top: -40px">
                                        <h5 class="card-title col-sm-auto" style="float: left; margin:0px 10px 0px 0px; padding: 0"><i class="fa fa-building-o"></i>Trung tâm :</h5>
                                        <h5 class="card-title"> TEKY -
                                          Center: 104 Lương Khánh Thiện - HP</h5>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        {{-- Thông tin lộ trình học --}}
                        <div class="row">
                          <div class="col-sm-12">
                            <div class="card">
                              <div class="card-header">
                                <div class="card-header-left">
                                  <h5>Lộ trình khóa học : {{$classes->KhoaHoc->tenkhoahoc}}</h5>
                                </div>
                              </div>
                              <div class="card-block">
                                <ul>
                                  @foreach ($classes->dsBuoiHoc as $key => $value)
                                  <li style="text-align: center; margin-left: 5px; float: left">
                                    <span>----</span>
                                    <button class="btn waves-effect waves-light buoihoc"
                                      style="border-radius: 50%; padding: 5px 10px"
                                      data-id="{{$value->id}}">{{$key+1}}</button>
                                    <span>----</span>
                                    <div class="sub-text">{{$value->ngayhoc}}</div>
                                    <div class="sub-title">
                                      {{$classes->lichHoc->caHoc->thoigianbatdau}}-{{$classes->lichHoc->caHoc->thoigianketthuc}}
                                    </div>
                                  </li>
                                  @endforeach
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div id="buoihoc"></div>
                        {{-- @include('backend.students.myclass.buoihoc') --}}
{{--                        <div class="row">--}}
{{--                          <div class="col-sm-12">--}}
{{--                            <div class="card">--}}
{{--                              <div class="card-header">--}}
{{--                                <div class="card-header-left">--}}
{{--                                  <h5>MÔ TẢ KHÓA HỌC</h5>--}}
{{--                                </div>--}}
{{--                              </div>--}}
{{--                              <div class="card-block">--}}
{{--                                <p>--}}
{{--                                  Xây dựng nền tảng kiến thức vững chắc về thiết kế đồ họa,--}}
{{--                                  tạo phong cách cá nhân, lập trình thuật toán điều khiển nhân vật, môi trường.--}}
{{--                                </p>--}}
{{--                              </div>--}}
{{--                            </div>--}}
{{--                          </div>--}}
{{--                        </div>--}}
{{--                      </div>--}}
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
<script>
  $(document).ready(function () {

    $('.buoihoc').click(function () {
      $('#buoihoc').load('/student/lessons/' + $(this).data('id'));
    });
    $('.buoihoc')[0].click();
  });

</script>
@endsection
