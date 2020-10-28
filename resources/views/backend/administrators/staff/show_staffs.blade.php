<div class="modal-dialog modal-lg" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h4 class="modal-title">Chi tiết nhân viên</h4>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="myReset()">
        <span aria-hidden="true">×</span>
      </button>
    </div>
    <div class="modal-body">
      <form>
        <div class="modal-body">
          <input type="hidden" name="_token" value="{{csrf_token()}}">
          {{ csrf_field() }}
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Họ đệm</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="hodem" id="hodem" value="{{$staffs->hodem}}">
              <span class="messages"></span>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Tên</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="ten" value="{{$staffs->ten}}">
              <span class="messages"></span>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Ngày sinh</label>
            <div class="col-sm-9">
              <input type="date" class="ngaysinh" id="ngaysinh" name="ngaysinh" value="{{substr($staffs->ngaysinh ,0 ,10)}}">
              <span class="messages"></span>
            </div>
          </div>
          <div class="row">
            <label class="col-sm-3 col-form-label">Giới tính</label>
            <div class="col-sm-9">
              <div class="form-check form-check-inline">
                <label class="form-check-label">
                  <input class="form-check-input" type="radio" name="gioitinh" id="gioitinh" value="Nam" {{$staffs->gioitinh == 'Nam' ? "checked" :''}}> Nam
                </label>
              </div>
              <div class="form-check form-check-inline">
                <label class="form-check-label">
                  <input class="form-check-input" type="radio" name="gioitinh" id="gioitinh" value="Nữ" {{$staffs->gioitinh == 'Nữ' ? "checked" :''}}> Nữ
                </label>
              </div>
              <span class="messages"></span>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Số CMND</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="cmnd" placeholder="Nhập vào tên" value="{{$staffs->cmnd}}">
              <span class="messages"></span>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Số điện thoại</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="sodienthoai" name="sodienthoai" placeholder="Nhập vào số điện thoại" value="{{$staffs->sodienthoai}}">
              <span class="messages"></span>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Email</label>
            <div class="col-sm-9">
              <input type="email" class="form-control" id="email" name="email" placeholder="Nhập vào Email" value="{{$staffs->email}}">
              <span class="messages"></span>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Địa chỉ</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="diachi" name="diachi" placeholder="Nhập vào quê quán" value="{{$staffs->diachi}}">
              <span class="messages"></span>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Tình trạng</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="tinhtrang" name="tinhtrang" placeholder="Trạng thái" value="{{$staffs->tinhtrang}}">
              <span class="messages"></span>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Chức vụ</label>
            <div class="col-sm-9">
              <select name="chuc_vu_id" class="form-control form-control-inverse">
                <option>{{$staffs->chucvu->ten}}</option>
              </select>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default waves-effect " data-dismiss="modal" onclick="myReset()">Đóng</button>
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
