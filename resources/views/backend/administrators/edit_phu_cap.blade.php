<div class="modal-dialog modal-lg" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h4 class="modal-title">Cập nhật phụ cấp</h4>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="myReset()">
        <span aria-hidden="true">×</span>
      </button>
    </div>
    <div class="modal-body">
      <form method="post" action="{{route('phucap.update', $phucap->id)}}" novalidate="" enctype="multipart/form-data">
        @method('PUT')
        <div class="modal-body">
          {{ csrf_field() }}
          <input type="hidden" name="_token" value="{{csrf_token()}}">
          {{ csrf_field() }}
          @if($phucap->nhanvien)
          <input type="hidden" name="nhan_vien_id" value={{ $phucap->nhanvien->id }}>
          <input type="hidden" name="doituong" value='nhanvien'>
          @else
          <input type="hidden" name="giao_vien_id" value={{ $phucap->giaovien->id }}>
          <input type="hidden" name="doituong" value='giaovien'>
          @endif

          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tên phụ cấp</label>
            <div class="col-sm-10">
              <input type="text" name="tenphucap" class="form-control" placeholder="Nhập tên phụ cấp" value="{{ $phucap->tenphucap }}">
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Số tiền</label>
            <div class="col-sm-10">
              <input type="number" name="sotien" class="form-control" placeholder="Nhập số tiền" value="{{ $phucap->sotien }}">
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
