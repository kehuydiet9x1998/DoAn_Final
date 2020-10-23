@extends('backend.layout.index')


@section('content')

<div class="pcoded-inner-content">
  <div class="main-body">
    <div class="page-wrapper">
      <div class="page-body">
        <div class="row">
          <div class="col-md-12">
            <div class="card table-card">
              <div class="card-header">
                <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-6">
                    <h5>DANH SÁCH HỌC SINH</h5>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-6">
                    <div id="dom-table_filter" class="dataTables_filter">
                      <button class="btn btn-success btn-round waves-effect waves-light" data-toggle="modal" data-target="#large-Modal" style="height: 35px;line-height: 13px;float: right; margin-right: 30px; ">Thêm mới</button>
                      <div class="modal fade show" id="large-Modal" tabindex="-1" role="dialog" style="z-index: 1050;display: none; padding-right: 17px;">
                        <div class="modal-dialog modal-lg" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 class="modal-title">Thêm học sinh</h4>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <form method="post" action="{{route('students.store')}}" novalidate="" id="addform">
                                <div class="modal-body">
                                  <input type="hidden" name="_token" value="{{csrf_token()}}">
                                  {{ csrf_field() }}
                                  <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Họ đệm</label>
                                    <div class="col-sm-9">
                                      <input type="text" class="form-control" name="hodem" id="hodem" placeholder="Nhập vào họ đệm">
                                      <span class="messages"></span>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Tên</label>
                                    <div class="col-sm-9">
                                      <input type="text" class="form-control" name="ten" placeholder="Nhập vào tên">
                                      <span class="messages"></span>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Ngày sinh</label>
                                    <div class="col-sm-9">
                                      <input type="date" class="ngaysinh" id="ngaysinh" name="ngaysinh" placeholder="">
                                      <span class="messages"></span>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <label class="col-sm-3 col-form-label">Giới tính</label>
                                    <div class="col-sm-9">
                                      <div class="form-check form-check-inline">
                                        <label class="form-check-label">
                                          <input class="form-check-input" type="radio" name="gioitinh" id="gioitinh" value="Nam"> Nam
                                        </label>
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <label class="form-check-label">
                                          <input class="form-check-input" type="radio" name="gioitinh" id="gioitinh" value="Nữ"> Nữ
                                        </label>
                                      </div>
                                      <span class="messages"></span>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Trạng thái</label>
                                    <div class="col-sm-9">
                                      <input type="text" class="form-control" id="trangthai" name="trangthai" placeholder="Trạng thái">
                                      <span class="messages"></span>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Họ tên phụ huynh</label>
                                    <div class="col-sm-9">
                                      <input type="text" class="form-control" id="hotenchame" name="hotenchame" placeholder="Nhập vào họ tên cha mẹ">
                                      <span class="messages"></span>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Số CMND</label>
                                    <div class="col-sm-9">
                                      <input type="text" class="form-control" id="cmnd" name="cmnd" placeholder="Nhập vào số cmnd">
                                      <span class="messages"></span>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Số điện thoại</label>
                                    <div class="col-sm-9">
                                      <input type="text" class="form-control" id="sodienthoai" name="sodienthoai" placeholder="Nhập vào số điện thoại">
                                      <span class="messages"></span>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Email</label>
                                    <div class="col-sm-9">
                                      <input type="email" class="form-control" id="email" name="email" placeholder="Nhập vào Email">
                                      <span class="messages"></span>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Địa chỉ</label>
                                    <div class="col-sm-9">
                                      <input type="text" class="form-control" id="diachi" name="diachi" placeholder="Nhập vào quê quán">
                                      <span class="messages"></span>
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
                <div class="card-block" style="">
                  <div class="table-responsive">
                    <table class="table table-hover m-b-0 " id="datatable">
                      <thead>
                        <tr>
                          <th>STT</th>
                          <th>HỌ VÀ TÊN</th>
                          <th>GIỚI TÍNH</th>
                          <th>NGÀY SINH</th>
                          <th>TRẠNG THÁI</th>
                          <th>QUÊ QUÁN</th>
                          <th class="noVis">ACTIONS</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($students as $st)
                        <tr>
                          <td>{{$st->id}}</td>
                          <td>{{$st->hodem. ' ' .$st->ten}}</td>
                          <td style="text-indent:10px">{{$st->gioitinh}}</td>
                          <td>{{$st->ngaysinh}}</td>
                          <td>
                            <p style="margin-top:15px" class="badge badge-pill badge-{{$st->trangthai == 'Học thử'? 'warning' : 'primary'}}">
                              {{$st->trangthai}}</p>
                          </td>
                          {{-- <td>{{$st->hotenchame}}</td> --}}
                          {{-- <td>{{$st->cmnd}}</td>
                          <td>{{$st->sodienthoai}}</td>
                          <td>{{$st->email}}</td> --}}
                          <td>{{$st->diachi}}</td>
                          <td style="display: flex;">
                            <div>
                              {{-- // cais nayhf ddeer hie thi chhi tiet --}}
                              {{-- <button data-id="{{$st->id}}" type="button"
                              class="btn btn-primary show-modal waves-effect" data-toggle="modal"
                              data-target="#show-Modal" style="background-color: white; border: none; padding: 0"
                              id="">
                              <i class="fa fa-eye f-w-600 f-16 m-r-15 text-c-green"></i>
                              </button> --}}
                              <div class="modal fade show" id="show-Modal" tabindex="-1" role="dialog" style="z-index: 1050;display: none; padding-right: 17px;">
                              </div>
                            </div>

                            <button class="my_edit" data-id="{{$st->id}}" data-toggle="modal" data-target="#edit-Modal" style="background-color: white; border: none">
                              <i class="icon feather icon-edit f-w-600 f-16 m-r-15 text-c-green" style="margin-right: 3px"></i>
                            </button>
                            <!-- Modal Sua -->
                            <div class="modal fade show" id="edit-Modal" tabindex="-1" role="dialog" style="z-index: 1050;display: none; padding-right: 17px;">
                            </div>
                            <form action="{{route('students.destroy', $st->id)}}" method="post">
                              @method('DELETE')
                              @csrf
                              <button style="border: none; padding: 2px 0px; margin-top: -1px; background-color: white" onclick="return confirm ('Bạn có muốn xóa không')">
                                <i class="feather icon-trash-2 f-w-600 f-16 m-r-15 text-c-red" style="margin:0;">
                                </i>
                              </button>
                            </form>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>

                    <div class="modal fade show" id="edit-Modal" tabindex="-1" role="dialog">
                    </div>
                    <div class="modal fade show" id="show-Modal" tabindex="-1" role="dialog" style="z-index: 1050;display: none; padding-right: 17px;">
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
    function myReset() {
      document.getElementById('main').reset();
    };

  </script>

  <script>
    $(document).
    ready(function() {
      $('.show-modal').click(function(e) {
        id = $(this).data('id');
        $('#show-Modal').load("/contacts/students/" + id);
        $('#show-Modal').show();
        $('.modal-backdrop').show();
      });
      $('.my_edit').click(function(e) {
        id = $(this).data('id')
        $('#edit-Modal').load("/contacts/students/" + id + '/edit');
        $('#edit-Modal').show();
        $('.modal-backdrop').show();
      });
    });

  </script>


  <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
  {!! $jsValidator->selector('#addform') !!}



  @endsection
