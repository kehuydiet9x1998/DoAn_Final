<div class="modal-dialog modal-lg" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h4 class="modal-title">Sửa khóa học</h4>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="myReset()">
        <span aria-hidden="true">×</span>
      </button>
    </div>
    <div class="modal-body">
      <form method="post" action="{{route('courses.update', $khoahoc->id)}}" novalidate="" enctype="multipart/form-data">
        @method('put')
        <div class="modal-body">
          {{ csrf_field() }}


          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tên khóa học</label>
            <div class="col-sm-10">
              <input type="text" name="tenkhoahoc" class="form-control" placeholder="Nhập tên khóa học" value="{{ $khoahoc->tenkhoahoc }}">
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Hình ảnh</label>

            <div class="col-sm-10">
              <div class="row m-b-10">
                <div class="col-md-12">
                  @foreach($khoahoc->dshinhanh as $hinhanh)
                  <a href="{{ asset($hinhanh->duongdan) }}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4 thumbnail">
                    <img style="height: 100px" src="{{ asset($hinhanh->duongdan) }}" class="img-fluid">
                  </a>
                  @endforeach
                </div>
              </div>

              <input type="file" name="hinhanhkhoahoc[]" class="form-control" placeholder="Thêm hình ảnh" multiple>
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Loại khóa học</label>
            <div class="col-sm-10">
              <select name="loai_khoa_hoc_id" class="form-control fill">
                <option value="">-- Loại khóa học --</option>
                @foreach($loaikhoahocs as $loaikhoahoc)
                <option {{ $loaikhoahoc->id == $khoahoc->loai_khoa_hoc_id ? 'selected' : ''}} value={{ $loaikhoahoc->id }}>{{ $loaikhoahoc->tenloaikhoahoc }}</option>
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
                <option {{ $level->id == $khoahoc->level_id ? 'selected' : ''}} value={{ $level->id }}>{{ $level->tenlevel }}</option>
                @endforeach
              </select>
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Học phí</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="hocphi" placeholder="Nhập học phí" value="{{ $khoahoc->hocphi }}">
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Độ tuổi</label>
            <div class="col-sm-10">
              <input type="text" name="dotuoi" class="form-control" placeholder="Nhập độ tuổi" value="{{ $khoahoc->dotuoi }}">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Sĩ số tối đa</label>
            <div class="col-sm-10">
              <input type="text" name="sisotoida" class="form-control" placeholder="Nhập sĩ số tối đa" value="{{ $khoahoc->sisotoida }}">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Điều kiện học</label>
            <div class="col-sm-10">
              <input type="text" name="dieukienhoc" class="form-control" placeholder="Nhập điều kiện học" value="{{ $khoahoc->dieukienhoc }}">
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Mô tả</label>
            <div class="col-sm-10">
              <input type="text" name="mota" class="form-control" placeholder="Nhập mô tả" value="{{ $khoahoc->mota }}">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nội dung</label>
            <div class="col-sm-10">
              <textarea rows="5" name="noidung" cols="5" class="form-control" placeholder="Nhập nội dung">{{ $khoahoc->noidung }}</textarea>
            </div>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default waves-effect " data-dismiss="modal" onclick="myReset()">Đóng</button>
          <input type="submit" class="btn btn-primary waves-effect waves-light" value="Cập nhật" />
        </div>
      </form>
    </div>
  </div>

</div>

<script src="{{ asset('assets/js/ekko-lightbox.js') }}"></script>
<script>
  $(document).on("click", '[data-toggle="lightbox"]', function(event) {
    event.preventDefault();
    $(this).ekkoLightbox();
  });

  function myReset() {
    $('.modal').hide();
    $('body').removeClass('modal-open');


    $('.modal-backdrop').hide();
  };

</script>
