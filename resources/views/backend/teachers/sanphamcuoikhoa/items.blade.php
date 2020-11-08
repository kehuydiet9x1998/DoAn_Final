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
                    <h5>Danh sách sản phẩm cuối khóa</h5>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-6">
                    <div id="dom-table_filter" class="dataTables_filter">
                      <button class="btn btn-success btn-round waves-effect waves-light" data-toggle="modal"
                        data-target="#large-Modal-them"
                        style="height: 35px;line-height: 13px;float: right; margin-right: 30px; ">Thêm mới</button>
                      <div class="modal fade show" id="large-Modal-them" tabindex="-1" role="dialog"
                        style="z-index: 1050;display: none; padding-right: 17px;">
                        <div class="modal-dialog modal-lg" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 class="modal-title">Thêm sản phẩm cuối khóa</h4>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <form method="post" action="{{route('sanphamcuoikhoa.store')}}" novalidate=""
                                id="addform">
                                <div class="modal-body">
                                  <input type="hidden" name="_token" value="{{csrf_token()}}">
                                  {{ csrf_field() }}
                                  <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Chọn học sinh</label>
                                    <div class="col-sm-9">
                                      <select name="hoc_sinh_id" class="form-control form-control-primary fill">
                                        @foreach ($dslophoc as $lophoc)
                                        @php
                                        $dsphanlop = $lophoc->dslophoc;
                                        @endphp
                                        @foreach ($dsphanlop as $phanlop)
                                        <option value="{{$phanlop->hocsinh->id}}">
                                          {{$phanlop->hocsinh->hodem.' '.$phanlop->hocsinh->ten.' : '.$lophoc->khoahoc->tenkhoahoc}}
                                        </option>
                                        @endforeach
                                        @endforeach
                                      </select>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Chọn lớp học</label>
                                    <div class="col-sm-9">
                                      <select name="lop_hoc_id" class="form-control form-control-primary fill">
                                        @foreach ($dslophoc as $lophoc)
                                        <option value="{{$lophoc->id}}">
                                          {{$lophoc->tenlop}}</option>
                                        @endforeach

                                      </select>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Nội dung</label>
                                    <div class="col-sm-9">
                                      <textarea class="form-control form-control-primary fill" name="noidung" id=""
                                        cols="30" rows="5" placeholder="Nhập vào nội dung"></textarea>
                                      <span class="messages"></span>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Mô tả</label>
                                    <div class="col-sm-9">
                                      <textarea class="form-control form-control-primary fill" name="mota" id=""
                                        cols="30" rows="7" placeholder="Nhập vào mô tả"></textarea>
                                      <span class="messages"></span>
                                    </div>
                                  </div>

                                  <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">link</label>
                                    <div class="col-sm-9">
                                      <input type="text" class="form-control form-control-primary fill" id="hotenchame"
                                        name="fileslide" placeholder="Nhập vào đườg dẫn">
                                      <span class="messages"></span>
                                    </div>
                                  </div>

                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default waves-effect " data-dismiss="modal"
                                    onclick="myReset()">Đóng</button>
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
              <div class="card-block">
                <div class="table-responsive">
                  <table class="table table-hover m-b-0" id="datatable">
                    <thead>
                      <tr>
                        {{-- <th>STT</th> --}}
                        <th>TÊN HỌC SINH</th>
                        <th>LỚP HỌC</th>
                        <th>KHOA HỌC</th>
                        <th>NỘI DUNG</th>
                        <th>LINK YOUTUBE</th>
                        <th>ACTIVE</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($sanphamcuoikhoas as $sp)
                      <tr>
                        {{-- <td>
                          <div class="d-inline-block align-middle">
                            <div class="d-inline-block">
                              <h6>{{$sp->id}}</h6>
                </div>
              </div>
              </td> --}}
              <td>{{$sp->hocSinh->hodem.' '.$sp->hocSinh->ten}}</td>
              <td>{{$sp->lopHoc->tenlop}}</td>
              <td>{{$sp->lopHoc->khoahoc->tenkhoahoc}}</td>
              <td>{{Str::substr($sp->noidung, 1, 10) }}</td>
              <td>{{Str::substr($sp->fileslide, 1, 10) }}</td>
              {{-- <td>{{$sp->mota}}</td> --}}
              <td style="display: flex;">
                <div>
                  {{-- Xem chi tiết sản phẩm--}}
                  <button data-id="{{$sp->id}}" type="button" class="btn btn-primary waves-effect show-modal"
                    data-toggle="modal" data-target="#show-Modal"
                    style="background-color: white; border: none; padding: 0;">
                    <i class="fa fa-eye f-w-600 f-16 m-r-15 text-c-green"></i>
                  </button>
                  <div class="modal fade show" id="show-Modal" tabindex="-1" role="dialog"
                    style="z-index: 1050;display: none; padding-right: 17px;">
                  </div>
                </div>
                <div>
                  <button class="my_edit" data-id="{{$sp->id}}" data-toggle="modal" data-target="#edit-Modal"
                    style="background-color: white; border: none">
                    <i class="icon feather icon-edit f-w-600 f-16 m-r-15 text-c-green"></i></button>
                  <div class="modal fade show" id="edit-Modal" tabindex="-1" role="dialog"
                    style="z-index: 1050;display: none; padding-right: 17px;">
                  </div>
                </div>
                <div>
                  <form action="{{route('sanphamcuoikhoa.destroy', $sp->id)}}" method="post">
                    @method('DELETE')
                    @csrf
                    <button style="border: none; padding: 2px 0px; margin-top: -1px; background-color: white"
                      onclick="return confirm ('Bạn có muốn xóa không')">
                      <i class="feather icon-trash-2 f-w-600 f-16 m-r-15 text-c-red" style="margin:0;">
                      </i>
                    </button>
                  </form>
                </div>
              </td>
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
@endsection

@section('script')
<script>
  $(document).
  ready(function () {
    $('.show-modal').click(function (e) {
      id = $(this).data('id');
      // console.log(id);
      $('#show-Modal').load("/teachers/sanphamcuoikhoa/" + id);
      $('#show-Modal').show();
      $('.modal-backdrop').show();
    });
    $('.my_edit').click(function (e) {
      id = $(this).data('id')
      $('#edit-Modal').load("/teachers/sanphamcuoikhoa/" + id + '/edit');
      $('#edit-Modal').show();
      $('.modal-backdrop').show();
    });
  });

</script>
@endsection
