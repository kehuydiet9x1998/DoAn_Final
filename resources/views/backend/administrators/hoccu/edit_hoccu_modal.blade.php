<div class="modal-dialog modal-lg" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h4 class="modal-title">Sửa thông tin học cụ</h4>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="myReset()">
        <span aria-hidden="true">×</span>
      </button>
    </div>
    <div class="modal-body">
      {{-- dat id cho form nay --}}
      <form id="editform" method="post" action="{{route('admin-hoccu.update', $khohoccu->id)}}" novalidate="" enctype="multipart/form-data">
        @method('PUT')
        <div class="modal-body">
          <input type="hidden" name="_token" value="{{csrf_token()}}">
          {{ csrf_field() }}
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Tên học cụ</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="tenhoccu" id="tenhoccu" placeholder="Nhập vào tên học cụ" value="{{$khohoccu->tenhoccu}}">
              <span class="messages"></span>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Hình ảnh</label>
            <div class="col-sm-9">
              <img src="{{asset($khohoccu->hinhanhhoccu)}}" class="img-fluid" width="200px" alt="Hình ảnh" style="margin-bottom: 10px">
              <input type="file" class="form-control" name="hinhanhhoccu" id="hinhanhhoccu" aria-valuetext="{{asset($khohoccu->hinhanhhoccu)}}">
              <span class="messages"></span>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Số lượng</label>
            <div class="col-sm-9">
              <input type="number" class="form-control" value="{{$khohoccu->soluong}}" placeholder="Nhập số lượng"/>
              <span class="messages"></span>
            </div>
          </div>
          <input type="hidden" value="{{$khohoccu->capphat}}"/>
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
