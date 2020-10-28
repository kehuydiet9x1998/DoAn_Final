<link rel="stylesheet" href="{{asset('assets/css/bootstrap-select.min.css')}}">
<div class="modal fade show" id="large-Modal" tabindex="-1" role="dialog" style="z-index: 1050;display: none; padding-right: 17px;">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Thêm lớp học</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="addform" method="post" action="{{route('allclass.store')}}" novalidate="">
          <div class="modal-body">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            {{ csrf_field() }}
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Tên lớp</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="tenlop" id="hodem" placeholder="Nhập vào tên lớp">
                <span class="messages"></span>
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Ngày bắt đầu</label>
              <div class="col-sm-9">
                <input type="date" class="form-control" name="ngaybatdau" placeholder="Chọn ngày bắt đầu">
                <span class="messages"></span>
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Chọn ca học</label>
              <div class="col-sm-9">
                <select name="ca_hoc_id" class="form-control" id="">
                  <option value="">-- Chọn ca học --</option>
                  @foreach($cahocs as $cahoc)
                  <option value="{{ $cahoc->id }}">{{ $cahoc->thoigianbatdau . ' đến ' .$cahoc->thoigianketthuc }}</option>
                  @endforeach
                </select>
                <span class="messages"></span>
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Ngày học</label>
              <div class="col-sm-9">
                <div class="checkbox-zoom zoom-success">
                  <label>
                    <input type="checkbox" name="thu[]" value="2">
                    <span class="cr">
                      <i class="cr-icon icofont icofont-ui-check txt-success"></i>
                    </span>
                    <span>Thứ 2</span>
                  </label>
                </div>

                <div class="checkbox-zoom zoom-success">
                  <label>
                    <input type="checkbox" name="thu[]" value="3">
                    <span class="cr">
                      <i class="cr-icon icofont icofont-ui-check txt-success"></i>
                    </span>
                    <span>Thứ 3</span>
                  </label>
                </div>

                <div class="checkbox-zoom zoom-success">
                  <label>
                    <input type="checkbox" name="thu[]" value="4">
                    <span class="cr">
                      <i class="cr-icon icofont icofont-ui-check txt-success"></i>
                    </span>
                    <span>Thứ 4</span>
                  </label>
                </div>

                <div class="checkbox-zoom zoom-success">
                  <label>
                    <input type="checkbox" name="thu[]" value="5">
                    <span class="cr">
                      <i class="cr-icon icofont icofont-ui-check txt-success"></i>
                    </span>
                    <span>Thứ 5</span>
                  </label>
                </div>

                <div class="checkbox-zoom zoom-success">
                  <label>
                    <input type="checkbox" name="thu[]" value="6">
                    <span class="cr">
                      <i class="cr-icon icofont icofont-ui-check txt-success"></i>
                    </span>
                    <span>Thứ 6</span>
                  </label>
                </div>

                <div class="checkbox-zoom zoom-success">
                  <label>
                    <input type="checkbox" name="thu[]" value="7">
                    <span class="cr">
                      <i class="cr-icon icofont icofont-ui-check txt-success"></i>
                    </span>
                    <span>Thứ 7</span>
                  </label>
                </div>

                <div class="checkbox-zoom zoom-success">
                  <label>
                    <input type="checkbox" name="thu[]" value="8">
                    <span class="cr">
                      <i class="cr-icon icofont icofont-ui-check txt-success"></i>
                    </span>
                    <span>Chủ nhật</span>
                  </label>
                </div>


              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Phòng học</label>
              <div class="col-sm-9">
                <select name="phong_hoc_id" class="form-control" id="">
                  <option value="">-- Chọn phòng học --</option>
                  @foreach($phonghocs as $phonghoc)
                  <option value="{{ $phonghoc->id }}">{{ $phonghoc->tenphong }}</option>
                  @endforeach
                </select>
                <span class="messages"></span>
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Chọn khóa học</label>
              <div class="col-sm-9">
                <select name="khoa_hoc_id" class="selectpicker" data-width="100%" data-live-search="true">
                  @foreach($khoahocs as $kh)
                  <option value="{{$kh->id}}">{{$kh->tenkhoahoc}}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Chọn GV đứng lớp</label>
              <div class="col-sm-9">
                <select name="giao_vien_id" class="selectpicker" data-width="100%" data-live-search="true">
                  @foreach($giangviens as $gv)
                  <option value="{{$gv->id}}">{{$gv->hodem.' '.$gv->ten}}</option>
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
