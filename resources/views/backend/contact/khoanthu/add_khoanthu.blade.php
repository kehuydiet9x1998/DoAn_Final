<div id="dom-table_filter" class="dataTables_filter" style="margin-left: -145px;">
  <button class="btn btn-success btn-round waves-effect waves-light" data-toggle="modal" data-target="#large-Modal" style="margin-top: -6px;height: 35px;line-height: 13px; float: right">Thêm khoản thu</button>

  <div class="modal fade show" id="large-Modal" tabindex="-1" role="dialog" style="z-index: 1050;display: none; padding-right: 17px;">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Thêm khoản thu</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="post" action="{{route('students.store')}}" novalidate="">
            <div class="modal-body">
              <input type="hidden" name="_token" value="{{csrf_token()}}">
              {{ csrf_field() }}
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Tên khoản thu</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="tenkhoanthu" id="tenkhoanthu" placeholder="Nhập vào tên khoản thu">
                  <span class="messages"></span>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Số tiền</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control autonumber" data-a-sep="," name="sotien" placeholder="Nhập số tiền"> <span class="messages"></span>

                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Ngày bắt đầu</label>
                <div class="col-sm-9">
                  <input type="date" class="form-control" id="ngaybatdau" name="ngaybatdau" placeholder="">
                  <span class="messages"></span>
                </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Ngày kết thúc</label>
                <div class="col-sm-9">
                  <input type="date" class="form-control" id="ngayketthuc" name="ngayketthuc" placeholder="">
                  <span class="messages"></span>
                </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Chọn đối tượng</label>
                <div class="col-sm-9">
                  <select name="hoc_phi_id" class="selectpicker form-control form-control-primary fill" data-live-search="true" data-actions-box="true" title="-- Chọn học sinh --" multiple>
                    @foreach($hocphis as $hocphi)
                    <option value="{{ $hocphi->id }}">{{ $hocphi->hocsinh->id. ' - '. $hocphi->hocsinh->hodem . ' ' . $hocphi->hocsinh->ten
                    }}</option>
                    @endforeach
                  </select>
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
  </div>
</div>
