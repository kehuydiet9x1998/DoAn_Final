<div class="modal-dialog modal-lg" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h4 class="modal-title">Cập nhật loại giáo viên</h4>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="myReset()">
        <span aria-hidden="true">×</span>
      </button>
    </div>
    <div class="modal-body">
      {{-- dat id cho form nay --}}
      <form id="editform" method="post" action="{{route('admin-loaigiaovien.update', $loaigiaovien->id)}}" novalidate="">
        @method('PUT')
        <div class="modal-body">
          <input type="hidden" name="_token" value="{{csrf_token()}}">
          {{ csrf_field() }}
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Tên loại giáo viên</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="tenloaigiaovien" id="ten" placeholder="Nhập vào tên loại giáo viên" value="{{$loaigiaovien->tenloaigiaovien}}">
              <span class="messages"></span>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Mô tả</label>
            <div class="col-sm-9">
              <textarea name="mota" id="mota" class="form-control max-textarea" maxlength="255" rows="4">{{$loaigiaovien->mota}}</textarea>
              <span class="messages"></span>
              <span class="messages"></span>
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Số tiền 1 giờ</label>
            <div class="col-sm-9">
              <input type="number" name="sotienmotgio" class="form-control" value="{{$loaigiaovien->sotienmotgio}}" placeholder="Nhập số tiền 1 giờ" />
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
