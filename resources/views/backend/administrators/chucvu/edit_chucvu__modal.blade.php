<div class="modal-dialog modal-lg" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h4 class="modal-title">Sửa thông tin chức vụ</h4>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="myReset()">
        <span aria-hidden="true">×</span>
      </button>
    </div>
    <div class="modal-body">
      {{-- dat id cho form nay --}}
      <form id="editform" method="post" action="{{route('admin-chucvu.update', $chucvu->id)}}" novalidate="">
        @method('PUT')
        <div class="modal-body">
          <input type="hidden" name="_token" value="{{csrf_token()}}">
          {{ csrf_field() }}
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Tên chức vụ</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="ten" id="ten" placeholder="Nhập vào tên chức vụ" value="{{$chucvu->ten}}">
              <span class="messages"></span>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Mô tả</label>
            <div class="col-sm-9">
              <textarea  name="mota" id="mota" class="form-control max-textarea" maxlength="255" rows="4">{{$chucvu->mota}}</textarea>
              <span class="messages"></span>
              <span class="messages"></span>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Hệ số lương</label>
            <div class="col-sm-9">
              <input type="number" step=0.01 value="{{$chucvu->hesoluong}}" placeholder="Nhập hệ số lương"/>
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
