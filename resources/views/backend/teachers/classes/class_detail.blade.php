@extends('backend.layout.index')
@section('content')
<div class="pcoded-inner-content">
  <div class="main-body">
    <div class="page-wrapper">
      <div class="page-body">
        <div class="row">
          <div class="col-sm-12">
            <div class="card">
              {{-- <div class="card-header">
                  <h5>Thông tin chi tiết</h5>
                </div> --}}
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
                      <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#messages7" role="tab" aria-selected="false"
                          style="font-size: 14px; font-weight: bold;">
                          <i class="fa fa-fort-awesome"></i>Theo dõi bài tập về nhà</a>
                        <div class="slide"></div>
                      </li>
                    </ul>
                    <div class="tab-content card-block">
                      {{-- Thông tin khóa học    --}}
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
                                      <div class="card-block" style="display: flex; margin-top: -25px">
                                        <h5 class="card-title"><i class="fa fa-code"></i>Mã lớp học :</h5>
                                        <h5 class="card-title" style="margin-left: 5px; margin-top: 1.5px">
                                          <b>{{$class->tenlop}}</b></h5>
                                      </div>
                                      <div class="card-block" style="display: flex; margin-top: -40px">
                                        <h5 class="card-title"><i class="fa fa-calendar"></i>Thời gian học :</h5>
                                        <h5 class="card-title" style="margin-left: 5px; margin-top: 1.5px">
                                          <b>{{$class->ngaybatdau}} đến {{$class->ngayketthuc}}</b></h5>
                                      </div>

                                      @php
                                      $lichhoc = $class->lichHoc;
                                      @endphp
                                      <div class="card-block" style="display: flex; margin-top: -40px">
                                        <h5 class="card-title"><i class="fa fa-clock-o"></i>Lịch học :</h5>
                                        <h5 class="card-title" style="margin-left: 5px; margin-top: 1.5px">
                                          <b>{{$lichhoc->caHoc->thoigianbatdau}}-{{$lichhoc->caHoc->thoigianketthuc}}
                                            Thứ {{$lichhoc->thu}}</b></h5>


                                      </div>
                                      <div class="card-block" style="display: flex; margin-top: -40px">
                                        <h5 class="card-title"><i class="fa fa-graduation-cap"></i>Giảng viên :</h5>
                                        <h5 class="card-title" style="margin-left: 5px; margin-top: 1.5px"><b>
                                            {{$class->giaoVien->hodem. ' ' . $class->giaoVien->ten}}</b></h5>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-lg-12 col-xl-6 ui-sortable-handle">
                                    <div class="card-sub">
                                      <div class="card-block" style="display: flex; margin-top: -25px">
                                        <h5 class="card-title"><i class="fa fa-bars"></i>Khóa học: </h5>
                                        <h5 class="card-title" style="margin-left: 5px; margin-top: 1.5px">
                                          <b>{{$class->khoaHoc->tenkhoahoc}}</b></h5>
                                      </div>
                                      <div class="card-block" style="display: flex; margin-top: -40px">
                                        <h5 class="card-title"><i class="fa fa-book"></i>Bài học :</h5>
                                        <h5 class="card-title" style="margin-left: 5px; margin-top: 1.5px">
                                          <b>{{$class->sobuoidahoc}}/{{$class->sobuoi}}</b></h5>
                                      </div>
                                      <div class="card-block" style="display: flex; margin-top: -40px">
                                        <h5 class="card-title"><i class="fa fa-bank"></i>Loại lớp học :</h5>
                                        <h5 class="card-title" style="margin-left: 5px; margin-top: 1.5px"><b>Group
                                            Class</b></h5>
                                      </div>
                                      {{-- <div class="card-block" style="margin-top: -40px">
                                          <h5 class="card-title" style="float: left"><i class="fa fa-building-o"></i>Trung tâm :</h5>
                                          <h5 class="card-title" style="margin-left: 5px; margin-top: 1.5px"> TEKY - Center: 104 Lương Khánh Thiện - HP</h5>
                                        </div> --}}
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        {{-- Thông tin buổi học --}}
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
                                    <button class="btn waves-effect waves-light buoihoc"
                                      style="border-radius: 50%; padding: 5px 10px"
                                      data-id="{{$buoiHoc->id}}">{{$key+1}}</button>
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


                      {{-- Danh sách dự án của học sinh --}}
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
                                        @for($i = 1 ; $i<13 ; $i++) <th>LESSON {{$i}}</th>
                                          @endfor
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>
                                          <div class="d-inline-block align-middle">
                                            <div class="d-inline-block">
                                              <h6>Nguyễn Hải Minh</h6>
                                            </div>
                                          </div>
                                        </td>
                                        @for($i = 1; $i<13 ; $i++) <td style="text-align: center">{{$i}}/10</td>
                                          @endfor
                                      </tr>
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
<script>
  $(document).ready(function () {

    // load buổi học theo id
    $('.buoihoc').click(function () {
      $('#buoihoc').load('/teachers/lessons/' + $(this).data('id'));
    });
    $('.buoihoc')[0].click();
  });
</script>
@endsection
