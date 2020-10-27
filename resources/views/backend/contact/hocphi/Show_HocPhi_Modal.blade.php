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
              <input type="text" class="form-control" name="hodem" id="hodem" value="{{$hocphi->hocSinh->hodem .' '.$hocphi->hocSinh->ten}}">
              <span class="messages"></span>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Họ tên nhân viên </label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="ten" value="{{$hocphi->nhanVien->hodem .' '.$hocphi->nhanVien->ten}}">
              <span class="messages"></span>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Số tiền đóng</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="cmnd" value="{{number_format($hocphi->sotiendong)}} VNĐ">
              <span class="messages"></span>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Ngày đóng</label>
            <div class="col-sm-9">
              <input type="date" class="ngaysinh" id="ngaysinh" name="ngaysinh" value="{{substr($hocphi->ngaynop,0 ,10)}}">
              <span class="messages"></span>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Trạng thái</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="" name="" value="{{$hocphi->trangthai}}">
              <span class="messages"></span>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Lý do</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="diachi" name="diachi" value="{{$hocphi->lydo}}">
              <span class="messages"></span>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Ghi chí</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="tinhtrang" name="tinhtrang" placeholder="Trạng thái" value="{{$hocphi->ghichu}}">
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
    $('.modal-backdrop').hide();
  };

</script>
