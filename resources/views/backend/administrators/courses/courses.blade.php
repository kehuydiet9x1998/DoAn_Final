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
                      <button class="btn btn-success btn-round waves-effect waves-light" data-toggle="modal" data-target="#large-Modal">Thêm khóa học</button>
                      <div class="modal fade show" id="large-Modal" tabindex="-1" role="dialog" style="z-index: 1050;display: none; padding-right: 17px;">
                        <div class="modal-dialog modal-lg" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 class="modal-title">Thêm nhân viên</h4>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <form method="post" action="{{route('teachers.store')}}" novalidate="">
                                <div class="modal-body">
                                  <input type="hidden" name="_token" value="{{csrf_token()}}">
                                  {{ csrf_field() }}


                                  <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Tên khóa học</label>
                                    <div class="col-sm-10">
                                      <input type="text" name="tenkhoahoc" class="form-control" placeholder="Nhập tên khóa học">
                                    </div>
                                  </div>

                                  <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Hình ảnh</label>
                                    <div class="col-sm-10">
                                      <input type="file" name="hinhanhkhoahoc[]" class="form-control" placeholder="Thêm hình ảnh" multiple>
                                    </div>
                                  </div>

                                  <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Loại khóa học</label>
                                    <div class="col-sm-10">
                                      <select name="select" name="loai_khoa_hoc_id" class="form-control fill">
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
                                      <select name="select" name="level_id" class="form-control fill">
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
                                      <input type="text" name="sisotoida" class="form-control" placeholder="Nhập sĩ số tối đa">
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Điều kiện học</label>
                                    <div class="col-sm-10">
                                      <input type="text" name="dieukienhoc" class="form-control" placeholder="Nhập điều kiện học">
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
                                      <textarea rows="5" name="noidung" cols="5" class="form-control" placeholder="Nhập nội dung"></textarea>
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
                  <div class="card-block" id="data">
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
      function getData(url) {
        $.ajax({
          url
          , beforeSend: function() {
            $('.card').addClass("card-load");
            $('.card').append('<div class="card-loader"><i class="feather icon-radio rotate-refresh"></div>');
          }
          , success: function(data) {
            $('.card').children(".card-loader").remove();
            $('.card').removeClass("card-load");
            $('#data').html(data);
            /* -------------------------------------------------------------------------- */
            /*                                 paginate                                 */
            /* -------------------------------------------------------------------------- */
            $('.pagination .page-link').unbind('click').on('click', function(e) {
              e.preventDefault();
              var page = $(this).text();
              url = result + '&page=' + page
              getData(url);
              $('li').removeClass('active disabled');
              e.target.parentElement.classList.add('active')
            });
          }
        })
      }

      $(document).ready(function() {
        getData('/administrators/courses?sort_by=tenkhoahoc&desc')

        result = '/administrators/courses?';

        $('#search').on('input', function(e) {
          result = encodeURI('/administrators/courses?tenkhoahoc=%' + e.target.value + '%')
          getData(result);
        });
      });

    </script>

    @endsection
