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

                      <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#phucap" role="tab" aria-selected="true" style="font-size: 14px; font-weight: bold;">
                          <i class="fa fa-list-alt"></i>PHỤ CẤP</a>
                        <div class="slide"></div>
                      </li>

                    </ul>
                    <div class="tab-content card-block">
                      <div class="tab-pane active show" id="home7" role="tabpanel">
                        @if(session()->has('success-message'))
                        <div class="alert alert-success">
                          {{session('success-message')}}
                        </div>
                        @elseif(session()->has('error-message'))
                        <div class="alert alert-danger">
                          {{session('error-message')}}
                        </div>
                        @endif
                        <div class="row">
                          <div class="col-sm-12">
                            <div>
                              <div class="card-header col-sm-12" style="text-align: center;">
                                <img class="card-img-top img-fluid" src="{{asset("$user->anhdaidien")}}" alt="Card image cap" style="width: 240px; height: 240px; border-radius: 50%">

                                <h6 class="text-c-purple" style="margin-top: 10px;">Họ tên nhân viên</h6>
                                <h4 style="margin-top: 10px; font-size: 24px; font-weight: bold">
                                  {{$user->nhanvien->hodem.' '.$user->nhanvien->ten}}</h4>
                                <h6 class="sub-title"></h6>
                              </div>
                              <div class="card-block">
                                <div class="row ui-sortable" id="draggablePanelList">
                                  <div class="col-lg-12 col-xl-6 ui-sortable-handle">
                                    <div class="card-sub">
                                      <div class="card-block" style="margin-top: -50px">
                                        <h6 class="card-title col-sm-auto" style="float: left; margin:0px 10px 0px 0px; padding: 0"><i class="fa fa-code"></i>Chứng minh nhân dân</h6>
                                        <h6 class="card-title">
                                          <b>{{$user->nhanVien->cmnd}}</b></h6>
                                      </div>
                                      <div class="card-block" style="margin-top: -40px">
                                        <h6 class="card-title col-sm-auto" style="float: left; margin:0px 10px 0px 0px; padding: 0">
                                          <i class="fa fa-user"></i>Username:</h6>
                                        <h6 class="card-title">
                                          <b>{{$user->name}}</b></h6>
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
                                          <b>{{$user->nhanvien->gioitinh}}</b></h6>
                                      </div>


                                    </div>
                                  </div>
                                  <div class="col-lg-12 col-xl-6 ui-sortable-handle">
                                    <div class="card-sub">
                                      <div class="card-block" style="margin-top: -50px">
                                        <h6 class="card-title col-sm-auto" style="float: left; margin:0px 10px 0px 0px; padding: 0">
                                          <i class="fa fa-home"></i>Địa chỉ:</h6>
                                        <h6 class="card-title" style="display: inline-block;width: 260px;">
                                          <b>{{$user->nhanvien->diachi}}</b></h6>
                                      </div>
                                      <div class="card-block" style="margin-top: -40px">
                                        <h6 class="card-title col-sm-auto" style="float: left; margin:0px 10px 0px 0px; padding: 0">
                                          <i class="fa fa-mobile-phone"></i>Di động:</h6>
                                        <h6 class="card-title">
                                          <b>{{$user->nhanvien->sodienthoai}}</b></h6>
                                      </div>
                                      <div class="card-block" style="margin-top: -40px">
                                        <h6 class="card-title col-sm-auto" style="float: left; margin:0px 10px 0px 0px; padding: 0">
                                          <i class="fa fa-calendar"></i>Ngày sinh:</h6>
                                        <h6 class="card-title">
                                          <b>{{$user->nhanVien->ngaysinh}}</b></h6>
                                      </div>

                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        {{-- <div class="row">
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
                        </div> --}}
                      </div>
                      <div class="tab-pane" id="account" role="tabpanel">

                        <div class="row">
                          <div class="col-sm-12">
                            <div>
                              <div class="card-header col-sm-12" style="text-align: center;">
                                <img class="card-img-top img-fluid" src="{{asset("$user->anhdaidien")}}" alt="Card image cap" style="width: 240px; height: 240px; border-radius: 50%">
                                <h6 class="text-c-purple" style="margin-top: 10px;">Nhân viên</h6>
                                <h4 style="margin-top: 10px; font-size: 24px; font-weight: bold">
                                  {{$user->nhanvien->hodem.' '.$user->nhanvien->ten}}</h4>
                                <h6 class="sub-title"></h6>
                              </div>
                              <div class="card-block">
                                <form id="main" method="post" action="{{route('doimatkhau')}}" novalidate="">
                                  @csrf
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
                                      <input type="password" class="form-control" id="password" name="password" placeholder="Nhập mật khẩu hiện tại">
                                      <span class="messages"></span>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Mật khẩu mới</label>
                                    <div class="col-sm-10">
                                      <input type="password_new" class="form-control" id="password" name="new_password" placeholder="Nhập mật khẩu mới">
                                      <span class="messages"></span>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Nhập lại mật khẩu</label>
                                    <div class="col-sm-10">
                                      <input type="password_new1" class="form-control" id="repeat-password" name="password_confirmation" placeholder="Nhập lại mật khẩu mới">
                                      <span class="messages"></span>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label class="col-sm-2"></label>
                                    <div class="col-sm-10">
                                      <button type="submit" class="btn btn-primary m-b-0">Cập nhật</button>
                                    </div>
                                  </div>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="tab-pane" id="phucap" role="tabpanel">
                        <div class="row">

                          <div class="col-sm-12">
                            {{-- Khối thêm sửa xóa --}}
                            <div class="card-header">
                              <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-6">
                                  <h5>Danh sách phụ cấp</h5>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-6">
                                  <div id="dom-table_filter" class="dataTables_filter">
                                    <button class="btn btn-success btn-round waves-effect waves-light" data-toggle="modal" data-target="#large-Modal" style="float: right; margin-right:30px">Thêm phụ cấp</button>
                                    <div class="modal fade show" id="large-Modal" tabindex="-1" role="dialog" style="z-index: 1050;display: none; padding-right: 17px;">
                                      <div class="modal-dialog modal-lg" role="document">0000
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h4 class="modal-title">Thêm phụ cấp</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">×</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                            <form method="post" action="{{route('phucap.store')}}" novalidate="" enctype="multipart/form-data">
                                              <div class="modal-body">
                                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                {{ csrf_field() }}

                                                @if($user->nhanvien)
                                                <input type="hidden" name="nhan_vien_id" value={{ $user->nhanvien->id }}>
                                                <input type="hidden" name="doituong" value='nhanvien'>
                                                @else
                                                <input type="hidden" name="nhan_vien_id" value={{ $user->giaovien->id }}>
                                                <input type="hidden" name="doituong" value='giaovien'>
                                                @endif



                                                <div class="form-group row">
                                                  <label class="col-sm-2 col-form-label">Tên phụ cấp</label>
                                                  <div class="col-sm-10">
                                                    <input type="text" name="tenphucap" class="form-control" placeholder="Nhập tên phụ cấp">
                                                  </div>
                                                </div>

                                                <div class="form-group row">
                                                  <label class="col-sm-2 col-form-label">Số tiền</label>
                                                  <div class="col-sm-10">
                                                    <input type="number" name="sotien" class="form-control" placeholder="Nhập số tiền">
                                                  </div>
                                                </div>

                                              </div>
                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-default waves-effect " data-dismiss="modal" onclick="myReset()">Đóng</button>
                                                <input type="submit" class="btn btn-primary waves-effect waves-light" value="Thêm" />
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
                            {{-- Khối chứa thông tin  --}}
                            <div class="card-block">
                              <div class="table-responsive">
                                <table class="table table-hover m-b-0" id="datatable">
                                  <thead>
                                    <tr>
                                      <th>ID</th>
                                      <th>Tên phụ cấp</th>
                                      <th>Số tiền</th>
                                      <th>Actions</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    @foreach($user->nhanvien->dsphucap as $phucap)
                                    <tr>
                                      <td>{{$phucap->id}}</td>
                                      <td>
                                        <div class="d-inline-block align-middle">
                                          <a href="{{route('phucap.show', $phucap->id)}}">
                                            {{ $phucap->tenphucap}}
                                          </a>
                                        </div>
                                      </td>
                                      <td>{{number_format($phucap->sotien )}}</td>

                                      <td style="display: flex">
                                        <div>
                                          <button class="my_edit" data-id="{{$phucap->id}}" data-toggle="modal" data-target="#edit-Modal" style="background-color: transparent; border: none; padding: 0 0 0 7px">
                                            <i class="icon feather icon-edit f-w-600 f-16 m-r-15 text-c-green"></i>
                                          </button>

                                        </div>

                                        <form action="{{route('phucap.destroy', $phucap->id)}}" method="post">
                                          @method('DELETE')
                                          @csrf
                                          <button style="border: none; padding: 2px 0px; margin-top: -1px; margin-left: 5px;background-color: transparent" onclick="return confirm ('Bạn có muốn xóa không')">
                                            <i class="feather icon-trash-2 f-w-600 f-16 m-r-15 text-c-red" style="margin:0; font-size: 20px"></i></button>
                                        </form>
                                      </td>
                                    </tr>
                                    @endforeach
                                  </tbody>
                                </table>

                                <div class="modal fade show" id="edit-Modal" tabindex="-1" role="dialog" style="z-index: 1050;display: none; padding-right: 17px;">
                                </div>

                                <div class="modal fade show" id="phucap-Modal" tabindex="-1" role="dialog" style="z-index: 1050;display: none; padding-right: 17px;">
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
  $(document).ready(function() {
    $('.my_edit').click(function(e) {
      id = $(this).data('id');
      $('#edit-Modal').load("/phucap/" + id + '/edit');
      $('#edit-Modal').show();
      $('body').addClass('modal-open');


      $('.modal-backdrop').show();
    });
  });

</script>


@endsection
