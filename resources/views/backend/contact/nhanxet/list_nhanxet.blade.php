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
                    {{-- Khối chưa tiêu đề --}}
                    <ul class="nav nav-tabs md-tabs " role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active show" data-toggle="tab" href="#khoahoc" role="tab"
                          aria-selected="true" style="font-size: 14px; font-weight: bold;">
                          <i class="fa fa-info-circle"></i>NHẬN XÉT KHÓA HỌC</a>
                        <div class="slide"></div>


                      </li>
                      <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#giaovien" role="tab" aria-selected="true"
                          style="font-size: 14px; font-weight: bold;">
                          <i class="fa fa-file"></i>NHẬN XÉT GIÁO VIÊN</a>
                        <div class="slide"></div>
                      </li>
                      {{-- <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#baitap" role="tab" aria-selected="true"
                          style="font-size: 14px; font-weight: bold;">
                          <i class="fa fa-tasks"></i>Nhận xét học sinh</a>
                        <div class="slide"></div>
                      </li> --}}
                    </ul>
                    {{-- khối chứa thông nhận xét khóa học--}}
                    <div class="tab-content">
                      <div class="tab-pane active show" id="khoahoc" role="tabpanel">
                        <div class="row">
                          <div class="col-sm-12">
                            {{-- Khối chứa thông tin  --}}
                            <div class="card-block">
                              <div class="table-responsive">
                                <table class="table table-hover m-b-0" id="datatable">
                                  <thead>
                                    <tr>
                                      <th>ID</th>
                                      <th>Tên Học sinh</th>
                                      <th>Tên khóa học</th>
                                      <th>Nội dung</th>
                                      <th>Thời gian</th>
                                      <th>Actions</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    @foreach($nhanxetkhoahoc as $nhanxet)
                                    <tr>
                                      <td>{{$nhanxet->id}}</td>
                                      <td>{{$nhanxet->user->hocsinh->hodem.' '.$nhanxet->user->hocsinh->ten}}</td>
                                      <td>
                                        <div class="d-inline-block align-middle">
                                          <a href="{{route('courses.show', $nhanxet->khoahoc->id)}}">
                                            <div class="d-inline-block">
                                              <h6 class="name_link_green">{{$nhanxet->khoahoc->tenkhoahoc }}</h6>
                                              <p class="text-muted m-b-0">
                                                Loại khóa học: {{$nhanxet->khoahoc->loaiKhoaHoc->tenloaikhoahoc}}
                                              </p>
                                            </div>
                                          </a>
                                        </div>
                                      </td>
                                      <td>{{Str::limit($nhanxet->noidung, 40)}}</td>
                                      <td>{{$nhanxet->thoigian}}</td>
                                      <td style="display: flex">
                                        <div>
                                          {{-- Xem chi tiết nhận xét--}}
                                          <button data-id="{{$nhanxet->id}}" type="button"
                                            class="btn btn-primary waves-effect show_Modal" data-toggle="modal"
                                            data-target="#show-Modal"
                                            style="background-color: white; border: none; padding: 0" id="">
                                            <i class="fa fa-eye f-w-600 f-16 m-r-15 text-c-green"></i>
                                          </button>
                                          <div class="modal fade show" id="show-Modal" tabindex="-1" role="dialog"
                                            style="z-index: 1050;display: none; padding-right: 17px;">
                                          </div>
                                        </div>
                                      </td>
                                    </tr>
                                    @endforeach
                                  </tbody>
                                </table>
                                {{-- <div class="modal fade show" id="edit-Modal" tabindex="-1" role="dialog"
                                  style="z-index: 1050;display: none; padding-right: 17px;">
                                </div>
                                <div class="modal fade show" id="baigiang-Modal" tabindex="-1" role="dialog"
                                  style="z-index: 1050;display: none; padding-right: 17px;">
                                </div> --}}
                                {{-- <div class="modal fade show" id="show-Modal" tabindex="-1" role="dialog"
                                  style="z-index: 1050;display: none; padding-right: 17px;">
                                </div> --}}
                              </div>
                            </div>

                          </div>
                        </div>
                      </div>
                      {{-- khối chứa thông tin nhận xét giáo viên--}}
                      <div class="tab-pane" id="giaovien" role="tabpanel">
                        <div class="row">
                          <div class="col-sm-12">
                            {{-- Khối thêm sửa xóa --}}
                            {{-- Khối chứa thông tin  --}}
                            <div class="card-block">
                              <div class="table-responsive">
                                <table class="table table-hover m-b-0" id="datatable">
                                  <thead>
                                    <tr>
                                      <th>ID</th>
                                      <th>Tên học sinh</th>
                                      <th>Tên giáo viên</th>
                                      <th>Thời gian</th>
                                      <th>Nội dung</th>
                                      <th>Actions</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    @foreach($nhanxetgiaovien as $nhanxet)
                                    <tr>
                                      <td>{{$nhanxet->id}}</td>
                                      <td>{{$nhanxet->user->hocsinh->hodem.' '.$nhanxet->user->hocsinh->ten}}</td>
                                      <td>
                                        {{-- <div class="d-inline-block align-middle">
                                          <a href="{{route('courses.show', $nhanxet->khoahoc->id)}}">
                                        <div class="d-inline-block">
                                          <h6 class="name_link_green">{{$nhanxet->khoahoc->tenkhoahoc }}</h6>
                                          <p class="text-muted m-b-0">
                                            Loại khóa học: {{$nhanxet->khoahoc->loaiKhoaHoc->tenloaikhoahoc}}
                                          </p>
                                        </div>
                                        </a>
                              </div> --}}
                              {{$nhanxet->giaovien->hodem.' '.$nhanxet->giaovien->hodem}}
                              </td>
                              <td>{{Str::limit($nhanxet->noidung, 40)}}</td>
                              <td>{{$nhanxet->thoigian}}</td>
                              <td style="display: flex">
                                <div>
                                  {{-- Xem chi tiết nhận xét--}}
                                  <button data-id="{{$nhanxet->id}}" type="button"
                                    class="btn btn-primary waves-effect show_Modal_giaovien" data-toggle="modal"
                                    data-target="#show-Modal" style="background-color: white; border: none; padding: 0"
                                    id="">
                                    <i class="fa fa-eye f-w-600 f-16 m-r-15 text-c-green"></i>
                                  </button>
                                  <div class="modal fade show" id="show-Modal-giaovien" tabindex="-1" role="dialog"
                                    style="z-index: 1050;display: none; padding-right: 17px;">
                                  </div>
                                </div>
                              </td>
                              </tr>
                              @endforeach
                              </tbody>
                              </table>
                              {{-- <div class="modal fade show" id="edit-Modal" tabindex="-1" role="dialog"
                                style="z-index: 1050;display: none; padding-right: 17px;">
                              </div>

                              <div class="modal fade show" id="baigiang-Modal" tabindex="-1" role="dialog"
                                style="z-index: 1050;display: none; padding-right: 17px;">
                              </div> --}}


                            </div>
                          </div>

                        </div>
                      </div>
                    </div>
                    {{--khối chứa thông tin nhận xét học viên--}}

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
{{-- <script src="{{ asset('assets/js/ekko-lightbox.js') }}"></script> --}}
<script>
  // $(document).on("click", '[data-toggle="lightbox"]', function (event) {
  //   event.preventDefault();
  //   $(this).ekkoLightbox();
  // });

  $(document).ready(function () {
    $('.show_Modal').click(function (e) {
      id = $(this).data('id');
      $('#show-Modal').load("/contacts/feedbacks/" + id);
      $('#show-Modal').show();
      $('body').addClass('modal-open');
      $('.modal-backdrop').show();
    });

    $('.show_Modal_giaovien').click(function (e) {
      id = $(this).data('id');
      $('#show-Modal-giaovien').load("/contacts/nhanxetgiaovien/" + id);
      $('#show-Modal-giaovien').show();
      $('body').addClass('modal-open');
      $('.modal-backdrop').show();
    });

  });

</script>
@endsection
