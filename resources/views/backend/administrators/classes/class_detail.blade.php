@extends('backend.layout.index')
@section('css')
{{-- <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}"> --}}
<link rel="stylesheet" href="{{asset('assets/css/bootstrap-select.min.css')}}">

@endsection

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
                    <ul class="nav nav-tabs md-tabs " id="myTab" role="tablist">

                      <li class="nav-item">
                        <a class="nav-link active show" data-toggle="tab" href="#home7" role="tab" aria-selected="true" style="font-size: 14px; font-weight: bold;">
                          <i class="fa fa-info-circle"></i>Chi tiết lớp học</a>
                        <div class="slide"></div>
                      </li>

                      <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#hocsinh" role="tab" aria-selected="false" style="font-size: 14px; font-weight: bold;">
                          <i class="fa fa-list"></i>Danh sách học sinh</a>
                        <div class="slide"></div>
                      </li>

                      <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#messages7" role="tab" aria-selected="false" style="font-size: 14px; font-weight: bold;">
                          <i class="fa fa-fort-awesome"></i>Theo dõi bài tập về nhà</a>
                        <div class="slide"></div>
                      </li>
                    </ul>
                    <div class="tab-content card-block">

                      {{-- /* -------------------------------------------------------------------------- */
                      /* Thong tin co ban */
                      /* -------------------------------------------------------------------------- */ --}}

                      <div class="tab-pane active show" id="home7" role="tabpanel">
                        <div class="row">
                          <div class="col-sm-12">
                            <div class="card">
                              <div class="card-header">
                                <h5 style="color: #2ce00c; font-size: 14px; font-weight: bold" ;>Lớp học:
                                  {{$class->khoaHoc->tenkhoahoc}}</h5>
                              </div>
                              <div class="card-block">
                                <div class="row ui-sortable" id="draggablePanelList">
                                  <div class="col-lg-12 col-xl-6 ui-sortable-handle">
                                    <div class="card-sub">
                                      <div class="card-block" style="margin-top: -25px">
                                        <h5 class="card-title col-sm-auto" style="float: left; margin:0px 10px 0px 0px; padding: 0"><i class="fa fa-code"></i>Mã lớp học :</h5>
                                        <h5 class="card-title">
                                          <b>{{$class->tenlop}}</b></h5>
                                      </div>
                                      <div class="card-block" style="margin-top: -40px">
                                        <h5 class="card-title col-sm-auto" style="float: left; margin:0px 10px 0px 0px; padding: 0"><i class="fa fa-calendar"></i>Thời gian học :</h5>
                                        <h5 class="card-title">
                                          <b>{{$class->ngaybatdau}} đến {{$class->ngayketthuc}}</b></h5>
                                      </div>
                                      @php
                                      $lichhoc = $class->lichHoc[0];
                                      @endphp
                                      <div class="card-block" style="margin-top: -40px">
                                        <h5 class="card-title col-sm-auto" style="float: left; margin:0px 10px 0px 0px; padding: 0"><i class="fa fa-clock-o"></i>Lịch học :</h5>
                                        <h5 class="card-title">
                                          <b>{{$lichhoc->caHoc->thoigianbatdau}}-{{$lichhoc->caHoc->thoigianketthuc}}
                                            @foreach($class->lichHoc as $key=> $lichhoc)
                                            @if($lichhoc->thu == 8)
                                            Chủ nhật
                                            @else
                                            Thứ {{ $lichhoc->thu }}
                                            @endif
                                            @if($key != count($class->lichhoc)-1)
                                            ,@endif
                                            @endforeach
                                          </b></h5>


                                      </div>
                                      <div class="card-block" style="margin-top: -40px">
                                        <h5 class="card-title col-sm-auto" style="float: left; margin:0px 10px 0px 0px; padding: 0"><i class="fa fa-graduation-cap"></i>Giảng viên :</h5>
                                        <h5 class="card-title"><b>
                                            {{$class->giaoVien->hodem. ' ' . $class->giaoVien->ten}}</b></h5>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-lg-12 col-xl-6 ui-sortable-handle">
                                    <div class="card-sub">
                                      <div class="card-block" style="margin-top: -25px">
                                        <h5 class="card-title col-sm-auto" style="float: left; margin:0px 10px 0px 0px; padding: 0"><i class="fa fa-bars"></i>Khóa học: </h5>
                                        <h5 class="card-title">
                                          <b>{{$class->khoaHoc->tenkhoahoc}}</b></h5>
                                      </div>
                                      <div class="card-block" style="margin-top: -40px">
                                        <h5 class="card-title col-sm-auto" style="float: left; margin:0px 10px 0px 0px; padding: 0"><i class="fa fa-book"></i>Bài học :</h5>
                                        <h5 class="card-title">
                                          <b>{{$class->sobuoidahoc}}/{{$class->sobuoi}}</b></h5>
                                      </div>
                                      <div class="card-block" style="margin-top: -40px">
                                        <h5 class="card-title col-sm-auto" style="float: left; margin:0px 10px 0px 0px; padding: 0"><i class="fa fa-bank"></i>Loại lớp học :</h5>
                                        <h5 class="card-title"><b>Group
                                            Class</b></h5>
                                      </div>
                                      <div class="card-block" style="margin-top: -40px">
                                        <h5 class="card-title col-sm-auto" style="float: left; margin:0px 10px 0px 0px; padding: 0"><i class="fa fa-building-o"></i>Trung tâm :</h5>
                                        <h5 class="card-title"> TEKY - Center: 104 Lương Khánh Thiện - HP</h5>
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
                                  <h5>Lộ trình khóa học : {{$class->khoaHoc->tenkhoahoc}}</h5>
                                </div>
                              </div>

                              @php
                              $dsBuoiHoc = $class->dsBuoiHoc;
                              @endphp
                              <div class="card-block">
                                <ul>
                                  @foreach($dsBuoiHoc as $key=>$buoiHoc )
                                  <li style="text-align: center; margin-left: 18px; float: left">
                                    <span>---</span>
                                    <button class="btn waves-effect waves-light buoihoc" style="border-radius: 50%; padding: 5px 10px" data-id="{{$buoiHoc->id}}">{{$key+1}}</button>
                                    <span>---</span>
                                    <div class="sub-text">{{$buoiHoc->ngayhoc}}</div>
                                    <div class="sub-title">
                                      {{$buoiHoc->checkin->giocheckin}}-
                                      {{$buoiHoc->checkin->giocheckout}}</div>
                                  </li>
                                  @endforeach
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div id="buoihoc"></div>
                        {{-- @include('backend.teachers.classes.buoihoc') --}}
                      </div>
                      {{--
/* -------------------------------------------------------------------------- */
/*                             Danh sach hoc sinh                             */
/* -------------------------------------------------------------------------- */ --}}

                      <div class="tab-pane" id="hocsinh" role="tabpanel">
                        <div class="row">
                          <div class="col-sm-12">
                            {{-- Khối thê sửa xóa --}}
                            <div class="card-header">
                              <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-6">
                                  <h5>Danh sách học sinh</h5>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-6">
                                  @include('backend.administrators.classes.phan_lop')
                                </div>

                              </div>
                            </div>
                            {{-- Khối chứa thông tin  --}}
                            <div class="card-block">
                              <div class="table-responsive">
                                <table class="table table-hover m-b-0">
                                  <thead>
                                    <tr>
                                      <th>ID</th>
                                      <th>Học sinh</th>
                                      <th>Ngày vào lớp</th>
                                      <th>Trạng thái</th>
                                      <th>Actions</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    @if($class->dslophoc)
                                    @foreach($class->dslophoc as $phanlop)
                                    <tr>

                                      <td>{{$phanlop->id}}</td>
                                      <td>{{ $phanlop->hocsinh->hodem . ' ' .$phanlop->hocsinh->ten }}</td>
                                      <td>{{ substr($phanlop->ngayvaolop, 0 ,10) }}</td>
                                      <td><label for="" class="badge badge-primary">Đang học</label></td>
                                      <td style="display: flex">
                                        <div>
                                          <button class="chuyenlop" data-id="{{$phanlop->id}}" data-toggle="modal" data-target="#chuyenlop-Modal" style="background-color: transparent; border: none; padding: 0 0 0 7px">
                                            <i class="fa fa-refresh f-w-600 f-16 m-r-15 text-c-green"></i>
                                          </button>
                                        </div>
                                        <div>
                                          <button class="baoluu" data-id="{{$phanlop->id}}" data-toggle="modal" data-target="#baoluu-Modal" style="background-color: transparent; border: none; padding: 0 0 0 7px">
                                            <i class="fa fa-pause-circle f-w-600 f-16 m-r-15 text-c-green"></i>
                                          </button>
                                        </div>


                                        <form action="{{route('phanlop.destroy', $phanlop->id)}}" method="post">
                                          @method('DELETE')
                                          @csrf
                                          <button style="border: none; padding: 2px 0px; margin-top: -1px; margin-left: 5px;background-color: transparent" onclick="return confirm ('Bạn có muốn xóa không')">
                                            <i class="feather icon-trash-2 f-w-600 f-16 m-r-15 text-c-red" style="margin:0; font-size: 20px"></i></button>
                                        </form>
                                      </td>
                                    </tr>
                                    @endforeach
                                    @endif
                                  </tbody>
                                </table>
                                <div class="modal fade show" id="chuyenlop-Modal" tabindex="-1" role="dialog" style="z-index: 1050;display: none; padding-right: 17px;">
                                </div>

                              </div>
                            </div>

                          </div>
                        </div>
                      </div>

                      {{--
/* -------------------------------------------------------------------------- */
/*                             San pham cuoi khoa                             */
/* -------------------------------------------------------------------------- */ --}}

                      <div class="tab-pane" id="messages7" role="tabpanel">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="card table-card">
                              <div class="card-header">
                                <div class="row">
                                  <div class="col-xs-12 col-sm-12 col-md-6">
                                    <h5>Danh sách theo dõi quá trình làm bài tập về nhà</h5>
                                  </div>
                                </div>
                              </div>
                              <div class="card-block">
                                <div class="table-responsive">
                                  <table class="table table-hover m-b-0">
                                    <thead>
                                      <tr>
                                        <th>HỌ VÀ TÊN</th>
                                        @for($i = 1 ; $i<=$class->dsBuoihoc->count() ; $i++) <th>LESSON {{$i}}</th>
                                          @endfor
                                      </tr>
                                    </thead>
                                    <tbody>
                                      @foreach($class->dslophoc as $phanlop)
                                      <tr>
                                        <td>
                                          <div class="d-inline-block align-middle">
                                            <div class="d-inline-block">
                                              <h6>{{$phanlop->hocsinh->hodem. ' '. $phanlop->hocsinh->ten}}</h6>
                                            </div>
                                          </div>
                                        </td>
                                        @foreach($class->dsbuoihoc as $buoihoc)

                                        @php
                                        $socau = App\Models\BuoiHoc::sobaitap($phanlop->hoc_sinh_id, $buoihoc->id);
                                        $socaudung = App\Models\BuoiHoc::socaudung($phanlop->hoc_sinh_id, $buoihoc->id);
                                        if($socau != 0) $diem = round($socaudung/$socau,2)*10;
                                        else $diem = -1;
                                        @endphp

                                        <td style="text-align: center">{{$diem != -1 ? "$diem/10" : '-'}}</td>

                                        @endforeach
                                      </tr>
                                      @endforeach

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
@parent
<script>
  $(document).ready(function() {

    // load buổi học theo id
    $('.buoihoc').click(function() {
      $('#buoihoc').load('/teachers/lessons/' + $(this).data('id'));
    });
    $('.buoihoc')[0].click();
    console.log('ok')

    $('a[data-toggle="tab"]').on('click', function(e) {
      console.log(e.target.href);
      localStorage.setItem('activeTab', $(e.target).attr('href'));

    });
    var activeTab = localStorage.getItem('activeTab');
    if (activeTab) {
      $('#myTab a[href="' + activeTab + '"]').tab('show');
    }

  });

</script>
@endsection
