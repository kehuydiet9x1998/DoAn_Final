<div class="modal-dialog modal-lg" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h4 class="modal-title">Sửa thông tin lịch trải nghiệm</h4>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="myReset()">
        <span aria-hidden="true">×</span>
      </button>
    </div>
    <div class="modal-body">
      <form id="editform" method="post" action="{{route('lichtrainghiem.update', $hocsinh->id)}}" novalidate="">
        @method('PUT')
        <div class="modal-body">
          <input type="hidden" name="_token" value="{{csrf_token()}}">
          {{ csrf_field() }}
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Họ tên học sinh</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" value="{{$hocsinh->hocSinh->hodem .' '.$hocsinh->hocSinh->ten}}">
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
              <input type="text" class="form-control" value="{{$hocsinh->hocSinh->sodienthoai}}">
              <span class="messages"></span>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Trạng thái</label>
            <div class="col-sm-9">
              <select name="trangthai" class="form-control form-control-inverse">
                <option>{{$hocsinh->trangthai}}</option>
                <option value="chờ học">Chờ học</option>
                <option value="Đã học">Đã học</option>
                <option value="Không học">Không học</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Ngày học</label>
            <div class="col-sm-9">
              <input type="date" class="ngaysinh" id="thoigian" name="thoigian" value="{{substr($hocsinh->thoigian,0 ,10)}}">
              <span class="messages"></span>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Ghi chú</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="ghichu" name="ghichu" placeholder="Trạng thái" value="{{$hocsinh->ghichu}}">
              <span class="messages"></span>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default waves-effect " data-dismiss="modal" onclick="myReset()">Đóng</button>
          <input type="submit" class="btn btn-primary waves-effect waves-light" value="Sửa thông tin" />
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

{!! $jsValidator->selector('#editform') !!}
