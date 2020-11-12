<div class="modal fade show" id="large-Modal" tabindex="-1" role="dialog" style="z-index: 1050;display: none; padding-right: 17px;">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Thêm học cụ </h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="addform" method="post" action="{{route('admin-hoccu.store')}}" novalidate="" enctype="multipart/form-data">
          <div class="modal-body">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            {{ csrf_field() }}
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Nhập tên học cụ</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="tenhoccu" id="tenhoccu" placeholder="Nhập vào tên học cụ">
                <span class="messages"></span>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Hình ảnh</label>
              <div class="col-sm-9">
                <input type="file" class="form-control" name="hinhanhhoccu" id="hinhanhhoccu" placeholder="Chọn hình ảnh học cụ">
                <span class="messages"></span>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Nhập tên số lượng</label>
              <div class="col-sm-9">
                <input type="number" class="form-control" name="soluong" id="soluong" placeholder="Nhập vào số lượng của học cụ">
                <span class="messages"></span>
              </div>
            </div>
            <input type="hidden" class="form-control" name="capphat" id="capphat" value="0">
          <div class="modal-footer">
            <button type="button" class="btn btn-default waves-effect " data-dismiss="modal" onclick="myReset()">Đóng</button>
            <input type="submit" class="btn btn-primary waves-effect waves-light" value="Thêm" />
          </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
