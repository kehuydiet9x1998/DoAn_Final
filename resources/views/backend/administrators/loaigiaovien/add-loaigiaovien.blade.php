<div class="modal fade show" id="large-Modal" tabindex="-1" role="dialog" style="z-index: 1050;display: none; padding-right: 17px;">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Thêm loại giáo viên</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="addform" method="post" action="{{route('admin-loaigiaovien.store')}}" novalidate="">
          <div class="modal-body">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            {{ csrf_field() }}
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Tên loại giáo viên</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="tenloaigiaovien" id="tenloaigiaovien" placeholder="Nhập vào tên loại giáo viên">
                <span class="messages"></span>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Mô tả loại giáo viên</label>
              <div class="col-sm-9">
                <textarea name="mota" id="mota" class="form-control max-textarea" maxlength="255" rows="4"></textarea>
                <span class="messages"></span>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Số tiền 1 giờ</label>
              <div class="col-sm-9">
                <input type="number" class="form-control" name="sotienmotgio" placeholder="Nhập số tiền 1 giờ" />
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
