<div class="modal-dialog modal-lg" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h4 class="modal-title">Sửa thông tin học phí của học viên</h4>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="myReset()">
        <span aria-hidden="true">×</span>
      </button>
    </div>
    <div class="modal-body">
      <form method="post" action="{{route('hocphis.update', $hocphi->id)}}" novalidate="">
        @method('PUT')
        <div class="modal-body">
          <input type="hidden" name="_token" value="{{csrf_token()}}">
          {{ csrf_field() }}
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Họ tên học viên</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" value="{{$hocphi->hocSinh->hodem .' '.$hocphi->hocSinh->ten}}">
              <span class="messages"></span>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Họ tên nhân viên </label>
            <div class="col-sm-9">
              <input type="text" class="form-control" value="{{$hocphi->nhanVien->hodem .' '.$hocphi->nhanVien->ten}}">
              <span class="messages"></span>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Số tiền đóng</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="sotiendong" value="{{$hocphi->sotiendong}}">
              <span class="messages"></span>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Ngày đóng</label>
            <div class="col-sm-9">
              <input type="date" class="ngaysinh" id="ngaynop" name="ngaynop"
                value="{{substr($hocphi->ngaynop,0 ,10)}}">
              <span class="messages"></span>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Trạng thái</label>
            <div class="col-sm-9">
              <select name="trangthai" class="form-control form-control-inverse">
                <option value="{{$hocphi->trangthai}}">{{$hocphi->trangthai}}</option>
                <option value="Đã đóng">Đã đóng</option>
                <option value="Chưa đóng">Chưa đóng</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Lý do</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="lydo" name="lydo" value="{{$hocphi->lydo}}">
              <span class="messages"></span>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Ghi chú</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="ghichu" name="ghichu" placeholder="Trạng thái"
                value="{{$hocphi->ghichu}}">
              <span class="messages"></span>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default waves-effect " data-dismiss="modal"
            onclick="myReset()">Close</button>
          <input type="submit" class="btn btn-primary waves-effect waves-light" value="Sửa thông tin" />
        </div>
      </form>
    </div>
  </div>
  <script>
    function myReset() {
      $('.modal').hide();
      $('.modal-backdrop').hide();
    };
  </script>