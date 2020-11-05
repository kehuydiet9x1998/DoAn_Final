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
                      {{ $hocsinh->id.' - '.$hocsinh->hodem.' '.$hocsinh->ten.' - '.$hocsinh->trangthai }}
                    </option>
                    @endforeach
                  </select>
                </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Nội dung</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="noidung" name="noidung">
                  <span class="messages"></span>
                </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Thời gian</label>
                <div class="col-sm-9">
                  <input type="datetime-local" class="form-control" id="thoigian" name="thoigian">
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

@section('script')
@parent

<script>
  <!--
  if (!Modernizr.inputtypes['datetime-local']) {
    $('input[type=datetime-local]').datetimepicker();
  }

  -->
</script>


@endsection
