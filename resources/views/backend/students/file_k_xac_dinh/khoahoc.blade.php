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
                          <i class="fa fa-info-circle"></i>DANH SÁCH KHÓA HỌC</a>
                        <div class="slide"></div>
                      </li>
                    </ul>
                    @php
                    // $khoahocs = DB::table('khoa_hoc')
                    // ->leftJoin('lop_hoc', 'khoa_hoc.id', '=', 'lop_hoc.khoa_hoc_id')
                    // ->leftJoin('giao_vien', 'giao_vien.id', '=', 'lop_hoc.giao_vien_id')
                    // ->get();

                    $khoahocs = DB::table('khoa_hoc')->paginate(7);
                    // ->leftJoin('lop_hoc', 'lop_hoc.khoa_hoc_id', '=', 7)
                    // ->leftJoin('giao_vien', 'giao_vien.id', '=', 'lop_hoc.giao_vien_id')
                    // ->get();
                    @endphp
                    @foreach ($khoahocs as $khoahoc)
                    <div class="tab-content card-block">
                      {{-- Thông tin khóa học    --}}
                      <div class="tab-pane active show" id="home7" role="tabpanel">
                        <div class="row">
                          <div class="col-sm-12">
                            <div class="card">
                              <div class="card-header">
                                <h5 style="color: #2ce00c; font-size: 14px; font-weight: bold" ;>Khóa học:
                                  {{$khoahoc->tenkhoahoc}}</h5>
                              </div>
                              <div class="card-block">
                                <div class="row ui-sortable" id="draggablePanelList">
                                  <div class="col-lg-12 col-xl-6 ui-sortable-handle">
                                    <div class="card-sub">
                                      <div class="card-block" style="margin-top: -25px">
                                        <h5 class="card-title col-sm-auto"
                                          style="float: left; margin:0px 10px 0px 0px; padding: 0"><i
                                            class="fa fa-code"></i>Mã khóa học :</h5>
                                        <h5 class="card-title">
                                          <b>{{$khoahoc->id}}</b></h5>
                                      </div>
                                      <div class="card-block" style="margin-top: -40px">
                                        <h5 class="card-title col-sm-auto"
                                          style="float: left; margin:0px 10px 0px 0px; padding: 0"><i
                                            class="fa fa-user-circle"></i>Sĩ số tối đa:</h5>
                                        <h5 class="card-title">
                                          <b>{{$khoahoc->sisotoida}}</b></h5>
                                      </div>
                                      <div class="card-block" style="margin-top: -40px">
                                        <h5 class="card-title col-sm-auto"
                                          style="float: left; margin:0px 10px 0px 0px; padding: 0"><i
                                            class="fa fa-clock-o"></i>Độ tuổi:</h5>
                                        <h5 class="card-title">
                                          <b>{{$khoahoc->dotuoi}}</b></h5>
                                      </div>
                                      <div class="card-block" style="margin-top: -40px">
                                        <h5 class="card-title col-sm-auto"
                                          style="float: left; margin:0px 10px 0px 0px; padding: 0"><i
                                            class="fa fa-graduation-cap"></i>Điều kiện bắt buộc:
                                        </h5>
                                        <h5 class="card-title" style="margin-top: 1.5px">
                                          <b>{{$khoahoc->dieukienhoc}}</b></h5>
                                      </div>
                                    </div>
                                  </div>
                                  @php
                                  $gettenloaikhoahoc = DB::table('loai_khoa_hoc')
                                  ->join('khoa_hoc','khoa_hoc.loai_khoa_hoc_id','=','loai_khoa_hoc.id')
                                  ->where('khoa_hoc.id','=',7)->value('tenloaikhoahoc');
                                  @endphp
                                  <div class="col-lg-12 col-xl-6 ui-sortable-handle">
                                    <div class="card-sub">
                                      <div class="card-block" style="margin-top: -25px">
                                        <h5 class="card-title col-sm-auto"
                                          style="float: left; margin:0px 10px 0px 0px; padding: 0"><i
                                            class="fa fa-bars"></i>Loại khóa học: </h5>
                                        <h5 class="card-title">
                                          <span>{{$gettenloaikhoahoc}}</span></h5>
                                      </div>
                                      <div class="card-block" style="margin-top: -40px">
                                        <h5 class="card-title col-sm-auto"
                                          style="float: left; margin:0px 10px 0px 0px; padding: 0"><i
                                            class="fa fa-book"></i>Học phí :</h5>
                                        <h5 class="card-title">
                                          <b>{{number_format($khoahoc->hocphi)}} VNĐ</b>
                                        </h5>
                                      </div>
                                      <div class="card-block" style="margin-top: -40px">
                                        <h5 class="card-title col-sm-auto"
                                          style="float: left; margin:0px 10px 0px 0px; padding: 0"><i
                                            class="fa fa-bank"></i>Loại lớp học :</h5>
                                        <h5 class="card-title"><b>Group
                                            Class</b></h5>
                                      </div>
                                      @php
                                      $tengiaovien = DB::table('khoa_hoc')
                                      ->Join('lop_hoc', 'lop_hoc.khoa_hoc_id', '=', 'khoa_hoc.id')
                                      ->Join('giao_vien', 'giao_vien.id', '=', 'lop_hoc.giao_vien_id')
                                      ->where('khoa_hoc.id','=',$khoahoc->id)
                                      ->get();
                                      @endphp

                                      <div class="card-block" style="margin-top: -40px">
                                        <h5 class="card-title col-sm-auto"
                                          style="float: left; margin:0px 10px 0px 0px; padding: 0"><i
                                            class="fa fa-bank"></i>Giáo viên dạy khóa hoc:</h5>
                                        @foreach ($tengiaovien as $giaovien)
                                        <h5 class="card-title"><b>{{$giaovien->hodem.' '.$giaovien->ten}}</b></h5>
                                        @endforeach
                                      </div>


                                      {{-- <div class="card-block" style="margin-top: -40px">
                                        <h5 class="card-title col-sm-auto"
                                          style="float: left; margin:0px 10px 0px 0px; padding: 0"><i
                                            class="fa fa-building"></i>Trung
                                          tâm :</h5>
                                        <h5 class="card-title"><b>104 -
                                            Lương Khánh Thiện</b></h5>
                                      </div> --}}
                                    </div>
                                  </div>
                                  {{-- <div class="col-lg-12" style="text-align: center">
                                    <iframe class="col-sm-auto" src="https://www.youtube.com/embed/tgbNymZ7vqY"
                                      allowfullscreen>
                                    </iframe>
                                  </div> --}}
                                  <div class="col-sm-12" style="text-align: center; margin-top: 5px">
                                    <div>
                                      {{-- Xem chi tiết sản phẩm--}}
                                      <button data-id="{{$khoahoc->id}}" type="button"
                                        class="btn waves-effect waves-light btn-round show-modal" data-toggle="modal"
                                        data-target="#show-Modal" ">
                                        {{-- <i class="fa fa-eye f-w-600 f-16 m-r-15 text-c-green"></i> --}}
                                        <span>Xem chi tiết khóa hoc</span>
                                      </button>
                                      <div class=" modal fade show" id="show-Modal" tabindex="-1" role="dialog"
                                        style="z-index: 1050;display: none; padding-right: 17px;">
                                    </div>
                                  </div>
                                  {{-- <button data-id="1" class="btn waves-effect waves-light btn-round">
                                      <a style="font-size: 14px; font-weight: 700;"
                                        href="{{route('allcourses.show',$khoahoc->id)}}">
                                  XEM CHI TIẾT KHÓA HỌC
                                  </a>
                                  </button> --}}
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card-block" style="border-top: 1px solid #cccccc; padding-bottom: 10px; text-align: center">
          <div style="padding-top: 10px; display: inline-block">
            {{$khoahocs->links('vendor.pagination.bootstrap-4')}}
            {{-- {{$khoahocs->links()}} --}}
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
  $(document).
  ready(function () {
    $('.show-modal').click(function (e) {
      id = $(this).data('id');
      // console.log(id);
      $('#show-Modal').load("/student/allcourses/" + id);
      $('#show-Modal').show();
      $('.modal-backdrop').show();
    });
  });

</script>
@endsection
