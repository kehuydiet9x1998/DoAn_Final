<div id="dom-table_filter" class="dataTables_filter" style="margin-left: -145px;">
  <button class="btn btn-success btn-round waves-effect waves-light" data-toggle="modal" data-target="#large-Modal" style="margin-top: -6px;height: 35px;line-height: 13px; float: right">Thêm tài khoản</button>
  <div class="modal fade show" id="large-Modal" tabindex="-1" role="dialog" style="z-index: 1050;display: none; padding-right: 17px;">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Tạo tài khoản</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="post" action="{{route('users.store')}}" novalidate="" enctype="multipart/form-data">
            <div class="modal-body">
              <input type="hidden" name="_token" value="{{csrf_token()}}">
              {{ csrf_field() }}
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Tên tài khoản</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="name" id="hodem" placeholder="Nhập vào tên tài khoản">
                  <span class="messages"></span>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Mật khẩu</label>
                <div class="col-sm-9">
                  <input type="password" class="form-control" name="password" placeholder="Nhập vào mật khẩu">
                  <span class="messages"></span>
                </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Nhập lại mật khẩu</label>
                <div class="col-sm-9">
                  <input type="password" class="form-control" name="password-confirmation" placeholder="Xác nhận mật khẩu">
                  <span class="messages"></span>
                </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Ảnh đại diện</label>
                <div class="col-sm-9">
                  <input type="file" class="form-control" id="anhdaidien" name="anhdaidien" placeholder="Thêm ảnh đại diện">
                  <span class="messages"></span>
                </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Vai trò</label>
                <div class="col-sm-9">
                  <select name="role_id" id="" class="form-control">
                    <option value="">-- Chọn vai trò --</option>
                    @foreach ($roles as $role)
                    <option value="{{ $role->id }}">{{strtoupper( $role->ten) }}</option>
                    @endforeach
                  </select> <span class="messages"></span>
                </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Trạng thái</label>
                <div class="col-sm-9">
                  <select name="trangthai" id="" class="form-control">
                    <option value="">-- Chọn trạng thái --</option>
                    <option value="Hoạt động">Hoạt động</option>
                    <option value="Ngừng hoạt động">Ngừng hoạt động</option>
                  </select>
                  <span class="messages"></span>
                </div>
              </div>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default waves-effect " data-dismiss="modal" onclick="myReset()">Đóng</button>
              <input type="submit" class="btn btn-primary waves-effect waves-light" value="Thêm" />
            </div>
          </form>
        </div>
      </div>
    </div>
    </li>
    </label>
  </div>
