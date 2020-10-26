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
                    <h5>Danh sách khóa học</h5>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-6">
                    <div id="dom-table_filter" class="dataTables_filter">
                      <button class="btn btn-success btn-round waves-effect waves-light" data-toggle="modal"
                        data-target="#large-Modal" style="float: right; margin-right:30px">Thêm khóa học</button>
                      <div class="modal fade show" id="large-Modal" tabindex="-1" role="dialog"
                        style="z-index: 1050;display: none; padding-right: 17px;">
                        <div class="modal-dialog modal-lg" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 class="modal-title">Thêm khóa học</h4>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <form method="post" action="{{route('courses.store')}}" novalidate=""
                                enctype="multipart/form-data">
                                <div class="modal-body">
                                  <input type="hidden" name="_token" value="{{csrf_token()}}">
                                  {{ csrf_field() }}


                                  <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Tên khóa học</label>
                                    <div class="col-sm-10">
                                      <input type="text" name="tenkhoahoc" class="form-control"
                                        placeholder="Nhập tên khóa học">
                                    </div>
                                  </div>

                                  <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Hình ảnh</label>
                                    <div class="col-sm-10">
                                      <input type="file" name="hinhanhkhoahoc[]" class="form-control"
                                        placeholder="Thêm hình ảnh" multiple>
                                    </div>
                                  </div>

                                  <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Loại khóa học</label>
                                    <div class="col-sm-10">
                                      <select name="loai_khoa_hoc_id" class="form-control fill">
                                        <option value="">-- Loại khóa học --</option>
                                        @foreach($loaikhoahocs as $loaikhoahoc)
                                        <option value={{ $loaikhoahoc->id }}>{{ $loaikhoahoc->tenloaikhoahoc }}</option>
                                        @endforeach
                                      </select>
                                    </div>
                                  </div>

                                  <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Level</label>
                                    <div class="col-sm-10">
                                      <select name="level_id" class="form-control fill">
                                        <option value="">-- Level --</option>
                                        @foreach($levels as $level)
                                        <option value={{ $level->id }}>{{ $level->tenlevel }}</option>
                                        @endforeach
                                      </select>
                                    </div>
                                  </div>

                                  <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Học phí</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" name="hocphi" placeholder="Nhập học phí">
                                    </div>
                                  </div>

                                  <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Độ tuổi</label>
                                    <div class="col-sm-10">
                                      <input type="text" name="dotuoi" class="form-control" placeholder="Nhập độ tuổi">
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Sĩ số tối đa</label>
                                    <div class="col-sm-10">
                                      <input type="text" name="sisotoida" class="form-control"
                                        placeholder="Nhập sĩ số tối đa">
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Điều kiện học</label>
                                    <div class="col-sm-10">
                                      <input type="text" name="dieukienhoc" class="form-control"
                                        placeholder="Nhập điều kiện học">
                                    </div>
                                  </div>

                                  <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Mô tả</label>
                                    <div class="col-sm-10">
                                      <input type="text" name="mota" class="form-control" placeholder="Nhập mô tả">
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Nội dung</label>
                                    <div class="col-sm-10">
                                      <textarea rows="5" name="noidung" cols="5" class="form-control"
                                        placeholder="Nhập nội dung"></textarea>
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
                        <th>ID</th>
                        <th>Tên khóa học</th>
                        <th>Học phí</th>
                        <th>Độ tuổi</th>
                        <th>Level</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($khoahocs as $khoahoc)
                      <tr>
                        <td>{{$khoahoc->id}}</td>
                        <td>
                          <div class="d-inline-block align-middle">
                            <a href="{{route('courses.show', $khoahoc->id)}}">
                              <div class="d-inline-block">
                                <h6 class="name_link_green">{{$khoahoc->tenkhoahoc }}</h6>
                                <p class="text-muted m-b-0">
                                  Loại khóa học: {{$khoahoc->loaiKhoaHoc->tenloaikhoahoc}}
                                </p>
                              </div>
                            </a>
                          </div>
                        </td>
                        <td>{{number_format($khoahoc->hocphi).'đ'}}</td>
                        <td>{{$khoahoc->dotuoi}}</td>

                        <td>
                          <label class="badge badge-inverse-primary">{{$khoahoc->level->tenlevel}}</label>
                        </td>
                        <td style="display: flex">
                          <button class="edit_course" data-id="{{ $khoahoc->id }}" data-toggle="modal"
                            data-target="#edit_course"
                            style="border: none; padding: 2px 0px; margin-top: -1px; background-color: transparent">
                            <i class="fa fa-edit f-w-600 f-16 m-r-15 text-c-green"
                              style="margin:0; font-size: 20px"></i></button>
                          <form action="{{route('courses.destroy', $khoahoc->id)}}" method="post">
                            @method('DELETE')
                            @csrf
                            <button
                              style="border: none; padding: 2px 0px; margin-top: -1px; margin-left: 5px;background-color: transparent"
                              onclick="return confirm ('Bạn có muốn xóa không')">
                              <i class="feather icon-trash-2 f-w-600 f-16 m-r-15 text-c-red"
                                style="margin:0; font-size: 20px"></i></button>
                          </form>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                  <div class="modal fade show" id="edit_course" tabindex="-1" role="dialog"
                    style="z-index: 1050;display: none; padding-right: 17px;">

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
    // $('.btn.btn-primary').click(function(e) {
    // id = $(this).data('id');
    // $('#show-Modal').load("/administrators/staffs/" + id);
    // $('#show-Modal').show();
    // $('.modal-backdrop').show();
    // });
    $('.edit_course').click(function (e) {

      id = $(this).data('id');
      $('#edit_course').load("/administrators/courses/" + id + '/edit');
      $('#edit-course').show();
      $('.modal-backdrop').show();
    })
  });

</script>

@endsection
