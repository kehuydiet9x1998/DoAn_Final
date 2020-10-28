<div class="modal-dialog modal-lg" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h4 class="modal-title">Chi tiết học phí của học sinh</h4>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="myReset()">
        <span aria-hidden="true">×</span>
      </button>
    </div>
    <div class="modal-body">
      <form>
        <div class="modal-body">
          <input type="hidden" name="_token" value="{{csrf_token()}}">
          {{ csrf_field() }}
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Họ tên học sinh</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="hodem" id="hodem" value="{{$hocsinh->hocSinh->hodem .' '.$hocsinh->hocSinh->ten}}">
              <span class="messages"></span>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Họ tên phụ huynh</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="ten" value="{{$hocsinh->hocSinh->hotenchame}}">
              <span class="messages"></span>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Số điện thoại</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="cmnd" value="{{$hocsinh->hocSinh->sodienthoai}}">
              <span class="messages"></span>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Trạng thái</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="" name="" value="{{$hocsinh->trangthai}}">
              <span class="messages"></span>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Ngày học</label>
            <div class="col-sm-9">
              <input type="date" class="ngaysinh" id="ngaysinh" name="ngaysinh" value="{{substr($hocsinh->thoigian,0 ,10)}}">
              <span class="messages"></span>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Ghi chí</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="tinhtrang" name="tinhtrang" placeholder="Trạng thái" value="{{$hocsinh->ghichu}}">
              <span class="messages"></span>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default waves-effect " data-dismiss="modal" onclick="myReset()">Đóng</button>
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
