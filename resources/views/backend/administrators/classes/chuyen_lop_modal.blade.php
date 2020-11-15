<div class="modal-dialog modal-lg" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h4 class="modal-title">Chuyển lớp học</h4>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="myReset()">
        <span aria-hidden="true">×</span>
      </button>
    </div>
    <div class="modal-body">
      <form method="post" action="{{route('admin-chuyenlop.store')}}" novalidate="">
        <div class="modal-body">
          @method('post')
          <input type="hidden" name="_token" value="{{csrf_token()}}">
          {{ csrf_field() }}
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Tên học sinh</label>
            <div class="col-sm-9">
              <input type="hidden" class="form-control" name="hoc_sinh_id" id="hoc_sinh_id" value="{{$lophoc->hoc_sinh_id}}">
              <input type="text" class="form-control" name="tenlop" id="hodem" value="{{$lophoc->hocsinh->hodem.' '.$lophoc->hocsinh->ten}}" readonly>
              <span class="messages"></span>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Lớp học hiện tại</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="hodem" value="{{$lophoc->lophoc->tenlop}}" readonly>
              <span class="messages"></span>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Lớp học chuyển tới</label>
            <div class="col-sm-9">
              <input type="hidden" class="form-control" name="lop_hoc_id-cu" value="{{$lophoc->id}}" readonly>
              <select name="lop_hoc_id" class="selectpicker form-control form-control-primary fill" data-live-search="true" title="-- Chọn lớp học --" >
                @foreach($listclass as $lc)
                  <option value="{{ $lc->id }}" @if($lc->id == $lophoc->lop_hoc_id) {{"disabled"}} @endif >{{$lc->tenlop}}</option>
                @endforeach
              </select>
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
</div>
<script>
  $(function() {
    $('select').selectpicker();
  });

  function myReset() {
    $('.modal').hide();
    $('body').removeClass('modal-open');


    $('.modal-backdrop').hide();
  };

</script>
