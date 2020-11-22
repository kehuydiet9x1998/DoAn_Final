<div class="modal-dialog modal-lg" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h4 class="modal-title">Cập nhật lịch trải nghiệm</h4>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="myReset()">
        <span aria-hidden="true">×</span>
      </button>
    </div>
    <div class="modal-body">
      <form id="editform" method="post" action="{{route('lichtrainghiem.update', $lichtrainghiem->id)}}" novalidate="">
        @method('PUT')
        <div class="modal-body">
          <input type="hidden" name="_token" value="{{csrf_token()}}">
          {{ csrf_field() }}
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Họ tên học sinh</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" readonly value="{{$lichtrainghiem->hocSinh->hodem .' '.$lichtrainghiem->hocSinh->ten}}">
              <span class="messages"></span>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Họ tên phụ huynh</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" readonly name="ten" value="{{$lichtrainghiem->hocSinh->hotenchame}}">
              <span class="messages"></span>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Số điện thoại</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" readonly value="{{$lichtrainghiem->hocSinh->sodienthoai}}">
              <span class="messages"></span>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Trạng thái</label>
            <div class="col-sm-9">
              <select name="trangthai" class="form-control form-control-inverse">
                <option value="Chưa xử lý">Chưa xử lý</option>
                <option value="Đã xử lý" selected>Đã xử lý</option>
                <option value="Hủy bỏ">Hủy bỏ</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Ngày hẹn</label>
            <div class="col-sm-9">
              <input type="datetime-local" class="form-control" id="thoigian" name="thoigian" value="{{str_replace(' ', 'T',$lichtrainghiem->thoigian)}}">
              <span class="messages"></span>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Kết quả</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="ketqua" name="ketqua" placeholder="Kết quả" value="{{$lichtrainghiem->ketqua}}">
              <span class="messages"></span>
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
<script>
  function myReset() {
    $('.modal').hide();
    $('body').removeClass('modal-open');


    $('.modal-backdrop').hide();
  };

</script>

{!! $jsValidator->selector('#editform') !!}
