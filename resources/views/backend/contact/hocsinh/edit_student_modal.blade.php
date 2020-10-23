<div class="modal-dialog modal-lg" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h4 class="modal-title">Sửa thông tin học sinh </h4>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="myReset()">
        <span aria-hidden="true">×</span>
      </button>
    </div>
    <div class="modal-body">
      {{-- dat id cho form nay --}}
      <form id="editform" method="post" action="{{route('students.update', $hocsinh->id)}}" novalidate="">
        @method('PUT')
        <div class="modal-body">
          <input type="hidden" name="_token" value="{{csrf_token()}}">
          {{ csrf_field() }}
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Họ đệm</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="hodem" id="hodem" placeholder="Nhập vào họ đệm" value="{{$hocsinh->hodem}}">
              <span class="messages"></span>
            </div>
          </div>


          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Tên</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="ten" placeholder="Nhập vào tên" value="{{$hocsinh->ten}}">
              <span class="messages"></span>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Ngày sinh</label>
            <div class="col-sm-9">
              <input type="date" class="ngaysinh" id="ngaysinh" name="ngaysinh" value="{{(substr($hocsinh->ngaysinh, 0, 10))}}" placeholder="">
              <span class="messages"></span>
            </div>
          </div>
          <div class="row">
            <label class="col-sm-3 col-form-label">Giới tính</label>
            <div class="col-sm-9">
              <div class="form-check form-check-inline">

                <label class="form-check-label">
                  <input class="form-check-input" type="radio" name="gioitinh" id="gioitinh" value="Nam" {{$hocsinh->gioitinh == 'Nam' ? " checked": ''}}> Nam
                </label>
              </div>
              <div class="form-check form-check-inline">
                <label class="form-check-label">
                  <input class="form-check-input" type="radio" name="gioitinh" id="gioitinh" value="Nữ" {{$hocsinh->gioitinh == 'Nữ' ? " checked": ''}}> Nữ
                </label>
              </div>
              <span class="messages"></span>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Trạng thái</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" value="{{$hocsinh->trangthai}}" id="trangthai" name="trangthai" placeholder="Trạng thái">
              <span class="messages"></span>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Họ tên phụ huynh</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="hotenchame" name="hotenchame" placeholder="Nhập vào họ tên cha mẹ" value="{{$hocsinh->hotenchame}}">
              <span class="messages"></span>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Số CMND</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="cmnd" name="cmnd" placeholder="Nhập vào số cmnd" value="{{$hocsinh->cmnd}}">
              <span class="messages"></span>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Số điện thoại</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="sodienthoai" name="sodienthoai" placeholder="Nhập vào số điện thoại" value="{{$hocsinh->sodienthoai}}">
              <span class="messages"></span>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Email</label>
            <div class="col-sm-9">
              <input type="email" class="form-control" id="email" name="email" placeholder="Nhập vào Email" value="{{$hocsinh->email}}">
              <span class="messages"></span>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Địa chỉ</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="diachi" name="diachi" placeholder="Nhập vào quê quán" value="{{$hocsinh->diachi}}">
              <span class="messages"></span>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default waves-effect " data-dismiss="modal" onclick="myReset()">Đóng</button>
          <input type="submit" class="btn btn-primary waves-effect waves-light" value="Cập nhậtnhật" />
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
  {!! $jsValidator->selector('#editform') !!}
