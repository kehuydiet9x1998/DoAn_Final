<div class="modal-dialog modal-lg" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h4 class="modal-title">Cập nhật lớp học</h4>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="myReset()">
        <span aria-hidden="true">×</span>
      </button>
    </div>
    <div class="modal-body">
      <form method="post" action="{{route('allclass.update' , $lophoc->id)}}" novalidate="">
        <div class="modal-body">
          @method('put')
          <input type="hidden" name="_token" value="{{csrf_token()}}">
          {{ csrf_field() }}
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Tên lớp</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="tenlop" id="hodem" value="{{$lophoc->tenlop}}" placeholder="Nhập vào tên lớp">
              <span class="messages"></span>
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Ngày bắt đầu</label>
            <div class="col-sm-9">
              <input type="date" class="form-control" name="ngaybatdau" placeholder="Chọn ngày bắt đầu" value={{ substr($lophoc->getRawOriginal('ngaybatdau'), 0, 10) }}>
              <span class="messages"></span>
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Chọn ca học</label>
            <div class="col-sm-9">
              <select name="ca_hoc_id" class="form-control" id="">
                <option value="">-- Chọn ca học --</option>
                @foreach($cahocs as $cahoc)
                <option @if($lophoc->lichhoc[0]->cahoc->id == $cahoc->id) selected @endif value="{{ $cahoc->id }}">{{ $cahoc->thoigianbatdau . ' đến ' .$cahoc->thoigianketthuc }}</option>
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
                  <input type="checkbox" name="thu[]" value="2" @foreach($lophoc->lichhoc as $lich) @if($lich->thu == 2) checked @endif @endforeach>
                  <span class="cr">
                    <i class="cr-icon icofont icofont-ui-check txt-success"></i>
                  </span>
                  <span>Thứ 2</span>
                </label>
              </div>

              <div class="checkbox-zoom zoom-success">
                <label>
                  <input type="checkbox" name="thu[]" value="3" @foreach($lophoc->lichhoc as $lich) @if($lich->thu == 3) checked @endif @endforeach>

                  <span class="cr">
                    <i class="cr-icon icofont icofont-ui-check txt-success"></i>
                  </span>
                  <span>Thứ 3</span>
                </label>
              </div>

              <div class="checkbox-zoom zoom-success">
                <label>
                  <input type="checkbox" name="thu[]" value="4" @foreach($lophoc->lichhoc as $lich) @if($lich->thu == 4) checked @endif @endforeach>

                  <span class="cr">
                    <i class="cr-icon icofont icofont-ui-check txt-success"></i>
                  </span>
                  <span>Thứ 4</span>
                </label>
              </div>

              <div class="checkbox-zoom zoom-success">
                <label>
                  <input type="checkbox" name="thu[]" value="5" @foreach($lophoc->lichhoc as $lich) @if($lich->thu == 5) checked @endif @endforeach>

                  <span class="cr">
                    <i class="cr-icon icofont icofont-ui-check txt-success"></i>
                  </span>
                  <span>Thứ 5</span>
                </label>
              </div>

              <div class="checkbox-zoom zoom-success">
                <label>
                  <input type="checkbox" name="thu[]" value="6" @foreach($lophoc->lichhoc as $lich) @if($lich->thu == 6) checked @endif @endforeach>

                  <span class="cr">
                    <i class="cr-icon icofont icofont-ui-check txt-success"></i>
                  </span>
                  <span>Thứ 6</span>
                </label>
              </div>

              <div class="checkbox-zoom zoom-success">
                <label>
                  <input type="checkbox" name="thu[]" value="7" @foreach($lophoc->lichhoc as $lich) @if($lich->thu == 7) checked @endif @endforeach>
                  <span class="cr">
                    <i class="cr-icon icofont icofont-ui-check txt-success"></i>
                  </span>
                  <span>Thứ 7</span>
                </label>
              </div>

              <div class="checkbox-zoom zoom-success">
                <label>
                  <input type="checkbox" name="thu[]" value="8" @foreach($lophoc->lichhoc as $lich) @if($lich->thu == 8) checked @endif @endforeach>

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
                <option @if($lophoc->lichhoc[0]->phonghoc->id == $phonghoc->id) selected @endif value="{{ $phonghoc->id }}">{{ $phonghoc->tenphong }}</option>


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
