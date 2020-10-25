<div class="modal-dialog modal-lg" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h4 class="modal-title">Thông tin chi tiết lớp học</h4>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="myReset()">
        <span aria-hidden="true">×</span>
      </button>
    </div>
    <div class="modal-body">
      <form method="post" action="{{route('allclass.store')}}" novalidate="">
        <div class="modal-body">
          <input type="hidden" name="_token" value="{{csrf_token()}}">
          {{ csrf_field() }}
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Tên lớp</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="tenlop" id="hodem"value="{{$lophoc->tenlop}}" placeholder="Nhập vào tên lớp">
              <span class="messages"></span>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Sĩ số</label>
            <div class="col-sm-9">
              <input type="number" class="form-control" name="siso" placeholder="Nhập vào sĩ số của lớp" value="{{$lophoc->siso}}">
              <span class="messages"></span>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Ngày bắt đầu</label>
            <div class="col-sm-9">
              <input type="date" class="form-control" name="ngaybatdau" placeholder="Chọn ngày bắt đầu" value="{{substr($lophoc->getRawOriginal('ngaybatdau'), 0, 10)}}">
              <span class="messages"></span>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Ngày kết thúc</label>
            <div class="col-sm-9">
              <input type="date" class="form-control" name="ngayketthuc" placeholder="Chọn ngày kết thúc" value="{{substr($lophoc->getRawOriginal('ngayketthuc'), 0, 10)}}">
              <span class="messages"></span>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Số buổi</label>
            <div class="col-sm-9">
              <input type="number" class="form-control" name="sobuoi" placeholder="Nhập vào số buổi học của khóa học" value="{{$lophoc->sobuoi}}">
              <span class="messages"></span>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Chọn khóa học</label>
            <div class="col-sm-9">
              <select name="khoa_hoc_id" class="selectpicker" data-width = "100%" data-live-search="true">
                @foreach($khoahocs as $kh)
                  <option @if($lophoc->khoa_hoc_id == $kh->id) {{"selected"}} @endif value="{{$kh->id}}">{{$kh->tenkhoahoc}}</option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Chọn GV đứng lớp</label>
            <div class="col-sm-9">
              <select name="giao_vien_id" class="selectpicker" data-width = "100%" data-live-search="true">
                @foreach($giangviens as $gv)
                  <option @if($lophoc->giao_vien_id == $gv->id) {{"selected"}} @endif value="{{$gv->id}}">{{$gv->hodem.' '.$gv->ten}}</option>
                @endforeach
              </select>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default waves-effect " data-dismiss="modal"
                  onclick="myReset()">Close</button>
          <input type="submit" class="btn btn-primary waves-effect waves-light" value="Cập nhật" />
        </div>
      </form>
    </div>
  </div>
</div>
<script>
  $(function () {
    $('select').selectpicker();
  });
  function myReset() {
    $('.modal').hide();
    $('.modal-backdrop').hide();
  };
</script>
