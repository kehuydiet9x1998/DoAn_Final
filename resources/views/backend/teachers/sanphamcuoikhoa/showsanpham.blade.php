{{-- Modal sửa --}}
{{-- <div class="modal fade show" id="large-Modal" tabindex="-1" role="dialog"
  style="z-index: 1050;display: none; padding-right: 17px;"> --}}
<div class="modal-dialog modal-lg" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h4 class="modal-title">Thông tin sản phẩm cuối khóa</h4>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true" onclick="myReset()">×</span>
      </button>
    </div>
    <div class="modal-body">
      <div class="page-wrapper">

        <div class="page-body">
          <div class="row">
            <div class="col-sm-12">

              <div class="card">
                <div class="card-header">
                  <h5>Thông tin chi tiết</h5>
                  <span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>
                </div>
                <div class="card-block">
                  <form>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Tên học viên</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="name" id="name"
                          placeholder="Text Input Validation"
                          value="{{$sanpham->hocsinh->hodem.' '.$sanpham->hocsinh->ten}}">
                        <span class="messages"></span>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Lớp học</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="name" id="name"
                          placeholder="Text Input Validation" value="{{$sanpham->lophoc->tenlop}}">
                        <span class="messages"></span>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Khóa học</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="name" id="name"
                          placeholder="Text Input Validation" value="{{$sanpham->lophoc->khoahoc->tenkhoahoc}}">
                        <span class="messages"></span>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Nội dung</label>
                      <div class="col-sm-10">
                        <textarea class="form-control " name="noidung" id="" cols="30" rows="5"
                          placeholder="Nhập vào nội dung">{{$sanpham->noidung}}</textarea>
                        <span class="messages"></span>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Mô tả</label>
                      <div class="col-sm-10">
                        <textarea class="form-control form-control-primary fill" name="mota" id="" cols="30" rows="7"
                          placeholder="Nhập vào mô tả">{{$sanpham->mota}}</textarea>
                        <span class="messages"></span>
                      </div>
                    </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Video</label>
                  <div class="col-sm-10">
                    <iframe src="{{$sanpham->fileslide}}n" width="100%" height="350" frameborder="1"></iframe>
                  </div>
                </div>
                </form>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default waves-effect " data-dismiss="modal"
                    onclick="myReset()">Đóng</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
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
