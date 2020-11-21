<div class="modal-dialog modal-lg" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h4 class="modal-title">Cập nhật phòng học</h4>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="myReset()">
        <span aria-hidden="true">×</span>
      </button>
    </div>
    <div class="modal-body">
      {{-- dat id cho form nay --}}
      <form id="editform" method="post" action="{{route('classroom.update', $room->id)}}" novalidate="">
        @method('PUT')
        <div class="modal-body">
          <input type="hidden" name="_token" value="{{csrf_token()}}">
          {{ csrf_field() }}
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Tên Phòng</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="tenphong" id="tenphong" placeholder="Nhập vào tên phòng học" value="{{$room->tenphong}}">
              <span class="messages"></span>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Mô tả</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="mota" placeholder="Nhập vào mô tả phòng học" value="{{$room->mota}}">
              <span class="messages"></span>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Chọn trạng thái</label>
            <div class="col-sm-9">
              <select name="trangthai" class="form-control" id="">
                <option value="">-- Chọn trạng thái phòng học --</option>
                <option value="Còn trống" @if($room->trangthai =='Còn trống') {{"selected"}} @endif>Còn trống</option>
                <option value="Đang sử dụng" @if($room->trangthai =='Đang sử dụng') {{"selected"}} @endif>Đang sử dụng</option>
              </select>
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
  <script>
    function myReset() {
      $('.modal').hide();
      $('body').removeClass('modal-open');


      $('.modal-backdrop').hide();
    };

  </script>
  {!! $jsValidator->selector('#editform') !!}
