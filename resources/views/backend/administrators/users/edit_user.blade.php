<div class="modal-dialog modal-lg" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h4 class="modal-title">Cập nhật tài khoản</h4>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="myReset()">
        <span aria-hidden="true">×</span>
      </button>
    </div>
    <div class="modal-body">
      <form method="post" action="{{route('users.update', $user->id)}}" novalidate="" enctype="multipart/form-data">
        @method('put')
        <div class="modal-body">
          <input type="hidden" name="_token" value="{{csrf_token()}}">
          {{ csrf_field() }}
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Tên tài khoản</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="name" id="hodem" placeholder="Nhập vào tên tài khoản" value="{{ $user->name }}">
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
          <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-9">
              <i class='text-muted m-b-10 d-block'>
                <img src="{{ asset($user->anhdaidien) }}" alt="Chưa có ảnh đại diện. Hãy thêm mới" class="img-fluid" width="100px">
              </i>

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
                <option @if($role->id == $user->role_id) selected @endif value="{{ $role->id }}">{{strtoupper( $role->ten) }}</option>
                @endforeach
              </select> <span class="messages"></span>
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Trạng thái</label>
            <div class="col-sm-9">
              <select name="trangthai" id="" class="form-control">
                <option value="">-- Chọn trạng thái --</option>
                <option @if('Hoạt động'==$user->trangthai) selected @endif value="Hoạt động">Hoạt động</option>
                <option @if('Ngừng hoạt động'==$user->trangthai) selected @endif value="Ngừng hoạt động">Ngừng hoạt động</option>

              </select>
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
