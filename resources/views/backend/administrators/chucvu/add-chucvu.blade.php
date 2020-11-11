<div class="modal fade show" id="large-Modal" tabindex="-1" role="dialog" style="z-index: 1050;display: none; padding-right: 17px;">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Thêm chức vụ</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="addform" method="post" action="{{route('admin-chucvu.store')}}" novalidate="">
          <div class="modal-body">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            {{ csrf_field() }}
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Tên chức vụ</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="ten" id="tenchucvu" placeholder="Nhập vào tên chức vụ">
                <span class="messages"></span>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Mô tả chức vụ</label>
              <div class="col-sm-9">
                <textarea  name="mota" id="mota" class="form-control max-textarea" maxlength="255" rows="4"></textarea>
                <span class="messages"></span>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Hệ số lương</label>
              <div class="col-sm-9">
                <input type="number" step=0.01 placeholder="Nhập hệ số lương"/>
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
