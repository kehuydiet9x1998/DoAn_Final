<div id="dom-table_filter" class="dataTables_filter" style="margin-left: -145px;">
  <button class="btn btn-success btn-round waves-effect waves-light" data-toggle="modal" data-target="#large-Modal" style="margin-top: -6px;height: 35px;line-height: 13px; float: right">Thêm mới</button>
  <div class="modal fade show" id="large-Modal" tabindex="-1" role="dialog" style="z-index: 1050;display: none; padding-right: 17px;">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Thêm lịch trải nghiệm</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="addform" method="post" action="{{route('lichtrainghiem.store')}}" novalidate="">
            <div class="modal-body">
              <input type="hidden" name="_token" value="{{csrf_token()}}">
              {{ csrf_field() }}
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Họ tên học sinh</label>
                <div class="col-sm-9">
                  <select name="hoc_sinh_id" class="form-control form-control-inverse">
                    <option value="">{{'Chọn học sinh'}}</option>
                    @foreach ($allhocsinhs as $hocsinh)
                    <option value="{{$hocsinh->id}}">
                      {{$hocsinh->hodem.' '.$hocsinh->ten.' / '.$hocsinh->sodienthoai .' / '. substr($hocsinh->ngaysinh,0,10).' / '.$hocsinh->trangthai }}
                    </option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Ngày học</label>
                <div class="col-sm-9">
                  <input type="date" class="ngaysinh" id="thoigian" name="thoigian">
                  <span class="messages"></span>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Trạng thái</label>
                <div class="col-sm-9">
                  <select name="trangthai" class="form-control form-control-inverse">
                    <option value="chờ học">Chờ học</option>
                    <option value="Đã học">Đã học</option>
                    <option value="Không học">Không học</option>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Ghi chú</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="ghichu" name="ghichu" placeholder="Nhập vào ghi chú">
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
  </div>
</div>
