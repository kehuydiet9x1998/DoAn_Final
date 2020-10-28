@extends('backend.layout.index')

@section('css')
<link rel="stylesheet" href="{{  asset('assets/css/ekko-lightbox.css')  }}">
@endsection

@section('content')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/pages.css')}}">
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
                    {{-- Khối chưa tiêu đề --}}
                    <ul class="nav nav-tabs md-tabs " role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active show" data-toggle="tab" href="#home7" role="tab" aria-selected="true"
                          style="font-size: 14px; font-weight: bold;">
                          <i class="fa fa-info-circle"></i>THÔNG TIN CHUNG</a>
                        <div class="slide"></div>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#account" role="tab" aria-selected="true"
                          style="font-size: 14px; font-weight: bold;">
                          <i class="fa fa-file"></i>HỌC LIỆU</a>
                        <div class="slide"></div>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#baitap" role="tab" aria-selected="true"
                          style="font-size: 14px; font-weight: bold;">
                          <i class="fa fa-tasks"></i>BÀI TẬP</a>
                        <div class="slide"></div>
                      </li>
                    </ul>
                    {{-- khối chứa thông tin chung --}}
                    <div class="tab-content">
                      <div class="tab-pane active show" id="home7" role="tabpanel">
                        <div class="row">
                          <div class="col-sm-12">
                            <div class="card-header">
                              <h5>Tên khóa học: {{$khoahoc->tenkhoahoc}}</h5>
                            </div>
                            <div class="card-block">
                              <div class="row ui-sortable" id="draggablePanelList">
                                <div class="col-lg-12 col-xl-12 ui-sortable-handle">
                                  <div class="row">
                                    <div class="col-lg-12">
                                      @foreach($khoahoc->dshinhanh as $hinhanh)
                                      <a href="{{ asset($hinhanh->duongdan) }}" data-toggle="lightbox"
                                        data-gallery="example-gallery" class="col-sm-4 thumbnail">
                                        <img style="height: 180px" src="{{ asset($hinhanh->duongdan) }}"
                                          class="img-fluid">
                                      </a>
                                      @endforeach
                                    </div>
                                    <div class="card-block">
                                      <h5 class="card-title">Hình ảnh khóa học</h5>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-12 col-xl-5">
                            <div class="row">
                              <div class="col-md-12 ui-sortable" id="draggableMultiple">
                                <div class="sortable-moves card-sub ui-sortable-handle" style="padding-left: 10px">
                                  <h5 class="card-title"><i class="fa fa-wpforms" style="padding-right: 3px"></i>Nội
                                    dung: </h5>
                                  <p class="card-text">{{Str::limit($khoahoc->noidung, 400)}}</p>
                                </div>
                                <div class="sortable-moves card-sub ui-sortable-handle" style="padding-left: 10px">
                                  <h5 class="card-title"><i class="fa fa-gg" style="padding-right: 3px"></i>Độ tuổi:
                                  </h5>
                                  <p class="card-text">{{$khoahoc->dotuoi}}</p>
                                </div>
                                <div class="sortable-moves card-sub ui-sortable-handle" style="padding-left: 10px">
                                  <h5 class="card-title"><i class="fa fa-wpforms" style="padding-right: 3px"></i>Thời
                                    lượng: </h5>
                                  <p class="card-text">144 giờ (2 học kỳ - 24 tháng), 90 phút mối buổi - Chứ có dữ liệu
                                    trong csdl</p>
                                </div>
                                <div class="sortable-moves card-sub ui-sortable-handle" style="padding-left: 10px">
                                  <h5 class="card-title"><i class="fa fa-wpforms" style="padding-right: 3px"></i>Công
                                    cụ: </h5>
                                  <p class="card-text">Tablet, Uaro Kit - chưa có dữ liệu trong csdl</p>
                                </div>
                                <div class="sortable-moves card-sub ui-sortable-handle" style="padding-left: 10px">
                                  <h5 class="card-title"><i class="fa fa-wpforms" style="padding-right: 3px"></i>Điều
                                    kiện để học:
                                  </h5>
                                  <p class="card-text">{{$khoahoc->dieukienhoc}}</p>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-12 col-xl-7">
                            <div class="row ui-sortable" id="draggableWithoutImg">
                              <div class="col-md-12 ui-sortable-handle">
                                <div class="card-sub m-b-20">
                                  <div class="card-block">
                                    <h5 class="card-header">Mô tả khóa học</h5>
                                    <p class="card-text">{{$khoahoc->mota}}</p>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-12 ui-sortable-handle">
                                <div class="card-sub m-b-20">
                                  <div class="card-block">
                                    <h5 class="card-header">Học sinh được gì</h5>
                                    <p class="card-title">Kiến thức - chưa có dữ liệu trong csdl </p>
                                    <p class="card-text">Biết về robot - chưa có dữ liệu trong csdl</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      {{-- kHỐI CHỨ THÔNG TIN HỌC LIỆU --}}
                      <div class="tab-pane" id="account" role="tabpanel">
                        <div class="row">

                          <div class="col-sm-12">
                            {{-- Khối thêm sửa xóa --}}
                            <div class="card-header">
                              <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-6">
                                  <h5>Danh sách học liệu</h5>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-6">
                                  <div id="dom-table_filter" class="dataTables_filter">
                                    <button class="btn btn-success btn-round waves-effect waves-light"
                                      data-toggle="modal" data-target="#large-Modal"
                                      style="float: right; margin-right:30px">Thêm học liệu</button>
                                    <div class="modal fade show" id="large-Modal" tabindex="-1" role="dialog"
                                      style="z-index: 1050;display: none; padding-right: 17px;">
                                      <div class="modal-dialog modal-lg" role="document">0000
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h4 class="modal-title">Thêm học liệu</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">×</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                            <form method="post" action="{{route('baigiang.store')}}" novalidate=""
                                              enctype="multipart/form-data">
                                              <div class="modal-body">
                                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                {{ csrf_field() }}
                                                <input type="hidden" name="khoa_hoc_id" value={{ $khoahoc->id }}>

                                                <div class="form-group row">
                                                  <label class="col-sm-2 col-form-label">Tên bài giảng</label>
                                                  <div class="col-sm-10">
                                                    <input type="text" name="tenbaigiang" class="form-control"
                                                      placeholder="Nhập tên bài giảng">
                                                  </div>
                                                </div>

                                                <div class="form-group row">
                                                  <label class="col-sm-2 col-form-label">Nội dung bài giảng</label>
                                                  <div class="col-sm-10">
                                                    <textarea name="noidung" class="form-control" id="" cols="30"
                                                      rows="10" placeholder="Nhập nội dung bài giảng"></textarea>
                                                  </div>
                                                </div>

                                                <div class="form-group row">
                                                  <label class="col-sm-2 col-form-label">File bài giảng</label>
                                                  <div class="col-sm-10">
                                                    <input type="file" name="filebaigiang" class="form-control"
                                                      placeholder="Chọn file bài giảng" id="">
                                                  </div>
                                                </div>

                                              </div>
                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-default waves-effect "
                                                  data-dismiss="modal" onclick="myReset()">Đóng</button>
                                                <input type="submit" class="btn btn-primary waves-effect waves-light"
                                                  value="Thêm" />
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
                                <table class="table table-hover m-b-0">
                                  <thead>
                                    <tr>
                                      <th>ID</th>
                                      <th>Tên bài giảng</th>
                                      <th>Nội dung</th>
                                      <th>File</th>
                                      <th>Actions</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    @foreach($khoahoc->dsbaigiang as $baigiang)
                                    <tr>
                                      <td>{{$baigiang->id}}</td>
                                      <td>
                                        <div class="d-inline-block align-middle">
                                          <a href="{{route('courses.show', $baigiang->id)}}">
                                            {{ $baigiang->tenbaigiang}}
                                          </a>
                                        </div>
                                      </td>
                                      <td>{{Str::limit($baigiang->noidung, 40)}}</td>
                                      <td>
                                        <button class="baigiang" data-id="{{$baigiang->id}}" data-toggle="modal"
                                          data-target="#baigiang-Modal" class="jstree-anchor" tabindex="-1"
                                          id="j1_14_anchor"
                                          style="background: transparent; outline:none; border:none; color:in">
                                          <i class="fa fa-file-pdf-o f-w-600 f-16 m-r-15 text-c-red"></i>
                                          bai_giang_{{ $baigiang->id }}.pdf
                                        </button>
                                      </td>

                                      <td style="display: flex">
                                        <div>
                                          <button class="my_edit" data-id="{{$baigiang->id}}" data-toggle="modal"
                                            data-target="#edit-Modal"
                                            style="background-color: transparent; border: none; padding: 0 0 0 7px">
                                            <i class="icon feather icon-edit f-w-600 f-16 m-r-15 text-c-green"></i>
                                          </button>

                                        </div>

                                        <form action="{{route('baigiang.destroy', $baigiang->id)}}" method="post">
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

                                <div class="modal fade show" id="edit-Modal" tabindex="-1" role="dialog"
                                  style="z-index: 1050;display: none; padding-right: 17px;">
                                </div>

                                <div class="modal fade show" id="baigiang-Modal" tabindex="-1" role="dialog"
                                  style="z-index: 1050;display: none; padding-right: 17px;">
                                </div>


                              </div>
                            </div>

                          </div>
                        </div>
                      </div>
                      {{-- kHỐI CHỨA THÔNG TIN BÀI TÂP --}}
                      <div class="tab-pane" id="baitap" role="tabpanel">
                        <div class="row">
                          <div class="col-sm-12">
                            {{-- Khối thê sửa xóa --}}
                            <div class="card-header">
                              <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-6">
                                  <h5>Danh sách bài tập</h5>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-6">
                                  <div id="dom-table_filter" class="dataTables_filter">
                                    <button class="btn btn-success btn-round waves-effect waves-light"
                                      data-toggle="modal" data-target="#large-Modal2"
                                      style="float: right; margin-right:30px">Thêm bài tập</button>
                                    <div class="modal fade show" id="large-Modal2" tabindex="-1" role="dialog"
                                      style="z-index: 1050;display: none; padding-right: 17px;">
                                      <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h4 class="modal-title">Thêm bài tập</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">×</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                            <form method="post" action="{{route('baitap.store')}}" novalidate=""
                                              enctype="multipart/form-data">
                                              <div class="modal-body">
                                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                {{ csrf_field() }}
                                                <input type="hidden" name="loaicauhoi" value="Trắc nghiệm">

                                                <div class="form-group row">
                                                  <label class="col-sm-2 col-form-label">Tên bài tập</label>
                                                  <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="tenbaitap" id="">
                                                    <span class="messages"></span>
                                                  </div>
                                                </div>

                                                <div class="form-group row">
                                                  <label class="col-sm-2 col-form-label">Nội dung bài tâp</label>
                                                  <div class="col-sm-10">
                                                    <textarea name="noidung" class="form-control" id="" cols="30"
                                                      rows="10"></textarea>
                                                    <span class="messages"></span>
                                                  </div>
                                                </div>
                                                <div class="form-group row">
                                                  <label class="col-sm-2 col-form-label">Hình ảnh</label>
                                                  <div class="col-sm-10">
                                                    <input type="file" name="hinhanhbaitap" class="form-control"
                                                      placeholder="Thêm hình ảnh" multiple>
                                                  </div>
                                                </div>
                                                <div class="form-group row">
                                                  <label class="col-sm-2 col-form-label">Đáp án 1</label>
                                                  <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="dapan1" id="">
                                                    <span class="messages"></span>
                                                  </div>
                                                </div>
                                                <div class="form-group row">
                                                  <label class="col-sm-2 col-form-label">Đáp án 2</label>
                                                  <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="dapan2" id="">
                                                    <span class="messages"></span>
                                                  </div>
                                                </div>
                                                <div class="form-group row">
                                                  <label class="col-sm-2 col-form-label">Đáp án 3</label>
                                                  <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="dapan3" id="">
                                                    <span class="messages"></span>
                                                  </div>
                                                </div>
                                                <div class="form-group row">
                                                  <label class="col-sm-2 col-form-label">Đáp án 4</label>
                                                  <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="dapan4" id="">
                                                    <span class="messages"></span>
                                                  </div>
                                                </div>
                                                <div class="form-group row">
                                                  <label class="col-sm-2 col-form-label">Đáp án đúng</label>
                                                  <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="dapan" id="">
                                                    <span class="messages"></span>
                                                  </div>
                                                </div>
                                                <div class="form-group row">
                                                  <label class="col-sm-2 col-form-label">Bài giảng</label>
                                                  <div class="col-sm-10">
                                                    <select name="bai_giang_id" class="form-control fill">
                                                      @foreach($khoahoc->dsbaigiang as $baigiang)
                                                      <option value="{{$baigiang->id}}">
                                                        {{$baigiang->id.': '.$baigiang->tenbaigiang}}</option>
                                                      @endforeach
                                                    </select>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-default waves-effect "
                                                  data-dismiss="modal" onclick="myReset()">Đóng</button>
                                                <input type="submit" class="btn btn-primary waves-effect waves-light"
                                                  value="Thêm" />
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
                                <table class="table table-hover m-b-0">
                                  <thead>
                                    <tr>
                                      <th>ID</th>
                                      {{-- <th>Tên bài tập</th>
                                      <th>Loại câu hỏi</th> --}}
                                      <th>Câu hỏi</th>
                                      <th>Đáp án 1</th>
                                      <th>Đáp án 2</th>
                                      <th>Đáp án 3</th>
                                      <th>Đáp án 4</th>
                                      <th>Đáp án đúng</th>
                                      <th>Tên bài giảng</th>
                                      <th>Actions</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    @foreach($khoahoc->dsbaigiang as $baigiang)
                                    @foreach ($baigiang->dsbaitap as $baitap)
                                    <tr>
                                      <td>{{$baitap->id}}</td>
                                      {{-- <td>
                                        <div class="d-inline-block align-middle">
                                          <a href="{{route('courses.show', $baigiang->id)}}">
                                      {{ $baitap->tenbaitap}}
                                      </a>
                              </div>
                              </td>
                              <td>{{Str::limit($baitap->loaicauhoi, 40)}}</td> --}}
                              {{-- <td>
                                        <button class="baigiang" data-id="{{$baigiang->id}}" data-toggle="modal"
                              data-target="#baigiang-Modal" class="jstree-anchor" tabindex="-1"
                              id="j1_14_anchor"
                              style="background: transparent; outline:none; border:none; color:in">
                              <i class="fa fa-file-pdf-o f-w-600 f-16 m-r-15 text-c-red"></i>
                              bai_giang_{{ $baigiang->id }}.pdf
                              </button>
                              </td> --}}
                              <td>{{Str::limit($baitap->noidung, 40)}}</td>
                              <td>{{$baitap->dapan1}}</td>
                              <td>{{$baitap->dapan2}}</td>
                              <td>{{$baitap->dapan3}}</td>
                              <td>{{$baitap->dapan4}}</td>
                              <td>{{$baitap->dapan}}</td>
                              <td>{{Str::limit($baitap->baigiang->tenbaigiang,40)}}</td>
                              <td style="display: flex">
                                <div>
                                  <button class="my_edit_baitap" data-id="{{$baitap->id}}" data-toggle="modal"
                                    data-target="#edit-Modal_Baitap"
                                    style="background-color: transparent; border: none; padding: 0 0 0 7px">
                                    <i class="icon feather icon-edit f-w-600 f-16 m-r-15 text-c-green"></i>
                                  </button>
                                </div>

                                <form action="{{route('baitap.destroy', $baitap->id)}}" method="post">
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
                              @endforeach
                              </tbody>
                              </table>
                              <div class="modal fade show" id="edit-Modal_Baitap" tabindex="-1" role="dialog"
                                style="z-index: 1050;display: none; padding-right: 17px;">
                              </div>

                              <div class="modal fade show" id="baitap-Modal" tabindex="-1" role="dialog"
                                style="z-index: 1050;display: none; padding-right: 17px;">
                              </div>


                            </div>
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                  {{-- Hết khối bao quanh  --}}
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
<script src="{{ asset('assets/js/ekko-lightbox.js') }}"></script>
<script>
  $(document).on("click", '[data-toggle="lightbox"]', function (event) {
    event.preventDefault();
    $(this).ekkoLightbox();
  });

  $(document).ready(function () {
    $('.my_edit').click(function (e) {
      id = $(this).data('id');
      $('#edit-Modal').load("/administrators/baigiang/" + id + '/edit');
      $('#edit-Modal').show();
      $('.modal-backdrop').show();
    });

    $('.baigiang').click(function (e) {
      id = $(this).data('id');
      $('#baigiang-Modal').load("/administrators/baigiang/" + id);
      $('#baigiang-Modal').show();
      $('.modal-backdrop').show();
    });

    $('.my_edit_baitap').click(function (e) {
      id = $(this).data('id');
      $('#edit-Modal_Baitap').load("/administrators/baitap/" + id + '/edit');
      $('#edit-Modal_Baitap').show();
      $('.modal-backdrop').show();
    });

  });

</script>
@endsection
