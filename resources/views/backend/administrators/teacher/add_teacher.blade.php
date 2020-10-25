<div id="dom-table_filter" class="dataTables_filter" style="margin-left: -145px;">
  <button class="btn btn-success btn-round waves-effect waves-light"
          data-toggle="modal" data-target="#large-Modal"
          style="margin-top: -6px;height: 35px;line-height: 13px; float: right">Thêm giáo viên</button>
      <div class="modal fade show" id="large-Modal" tabindex="-1" role="dialog" style="z-index: 1050;display: none; padding-right: 17px;">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Thêm nhân viên</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
              <form method="post" action="{{route('teachers.store')}}" novalidate="">
                <div class="modal-body">
                  <input type="hidden" name="_token" value="{{csrf_token()}}">
                  {{ csrf_field() }}
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Họ đệm</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="hodem" id="hodem" placeholder="Nhập vào họ đệm">
                      <span class="messages"></span>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Tên</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="ten" placeholder="Nhập vào tên">
                      <span class="messages"></span>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Ngày sinh</label>
                    <div class="col-sm-9">
                      <input type="date" class="ngaysinh" id="ngaysinh" name="ngaysinh" placeholder="">
                      <span class="messages"></span>
                    </div>
                  </div>
                  <div class="row">
                    <label class="col-sm-3 col-form-label">Giới tính</label>
                    <div class="col-sm-9">
                      <div class="form-check form-check-inline">
                        <label class="form-check-label">
                          <input class="form-check-input" type="radio" name="gioitinh" id="gioitinh" value="Nam"> Nam
                        </label>
                      </div>
                      <div class="form-check form-check-inline">
                        <label class="form-check-label">
                          <input class="form-check-input" type="radio" name="gioitinh" id="gioitinh" value="Nữ"> Nữ
                        </label>
                      </div>
                      <span class="messages"></span>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Số CMND</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="cmnd" placeholder="Nhập vào tên">
                      <span class="messages"></span>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Số điện thoại</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="sodienthoai" name="sodienthoai" placeholder="Nhập vào số điện thoại">
                      <span class="messages"></span>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Email</label>
                    <div class="col-sm-9">
                      <input type="email" class="form-control" id="email" name="email" placeholder="Nhập vào Email">
                      <span class="messages"></span>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Địa chỉ</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="diachi" name="diachi" placeholder="Nhập vào quê quán">
                      <span class="messages"></span>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Tình trạng</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="tinhtrang" name="tinhtrang" placeholder="Trạng thái">
                      <span class="messages"></span>
                    </div>
                  </div>
                  {{-- <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Chức vụ</label>
                    <div class="col-sm-9">
                      <select name="chuc_vu_id" class="form-control form-control-inverse">
                        <option>Chọn chức vụ</option>
                        @foreach ($chucvu as $cv)
                        <option value="{{$cv->id}}">{{$cv->ten}}</option>
                  @endforeach
                  </select>
                </div>
            </div> --}}
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
