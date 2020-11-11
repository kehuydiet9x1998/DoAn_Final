<div class="modal fade show" id="large-Modal" tabindex="-1" role="dialog" style="z-index: 1050;display: none; padding-right: 17px;">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Thêm phòng học</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="addform" method="post" action="{{route('classroom.store')}}" novalidate="">
          <div class="modal-body">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            {{ csrf_field() }}
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Tên phòng học</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="tenphong" id="tenphong" placeholder="Nhập vào tên phòng học">
                <span class="messages"></span>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Mô tả phòng học</label>
              <div class="col-sm-9">
                <textarea  name="mota" id="mota" class="form-control max-textarea" maxlength="255" rows="4"></textarea>
                <span class="messages"></span>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Chọn trạng thái</label>
              <div class="col-sm-9">
                <select name="trangthai" class="form-control" id="">
                  <option value="">-- Chọn trạng thái phòng học --</option>
                  <option value="Còn trống">Còn trống</option>
                  <option value="Đang sử dụng">Đang sử dụng</option>
                </select>
                <span class="messages"></span>
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
