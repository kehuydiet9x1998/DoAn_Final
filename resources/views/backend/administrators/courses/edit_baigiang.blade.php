<div class="modal-dialog modal-lg" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h4 class="modal-title">Sửa thông tin bài giảng</h4>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="myReset()">
        <span aria-hidden="true">×</span>
      </button>
    </div>
    <div class="modal-body">
      <form method="post" action="{{route('baigiang.update', $baigiang->id)}}" novalidate="" enctype="multipart/form-data">
        @method('PUT')
        <div class="modal-body">
          {{ csrf_field() }}
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Tên bài giảng</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="tenbaigiang" id="hodem" value="{{$baigiang->tenbaigiang}}">
              <span class="messages"></span>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Nội dung bài giảng</label>
            <div class="col-sm-9">
              <textarea name="noidungbaigiang" class="form-control" id="" cols="30" rows="10">{{ $baigiang->noidung }}</textarea>
              <span class="messages"></span>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">File bài giảng</label>
            <div class="col-sm-9">
              <input type="file" class="form-control" id="filebaigiang" name="filebaigiang">
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
  <script>
    function myReset() {
      $('.modal').hide();
      $('.modal-backdrop').hide();
    };

  </script>
