@section('css')
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap-select.min.css')}}">
@endsection

<script>
  function myReset() {
    $('.modal').hide();
    $('body').removeClass('modal-open');
    $('.modal-backdrop').hide();
  }


</script>
<div class="modal fade show" id="phanlop-Modal{{ isset($menu) ? $class->id : '' }}" tabindex="-1" role="dialog" style="z-index: 1050;display: none; padding-right: 17px;">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">BẢNG PHÂN LỚP</h4>
        <button type="button" class="close" data-dismiss="modal" onclick="myReset()" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="{{route('phanlop.store')}}" novalidate="">
          <div class="modal-body">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <input type="hidden" name="lop_hoc_id" value="{{ $class->id }}">
{{--            <div class="form-group row">--}}
{{--              <input type="checkbox" class="linhvuc"  name="linh_vuc_id" value="{{$class->khoahoc->loaikhoahoc->id}}"--}}
{{--                     style="width: 20px; height: 30px; margin-top: -4px; margin-left: 14px">--}}
{{--              <h6 class="name_link_green" style="margin-left: 15px">{{$class->khoahoc->loaikhoahoc->tenloaikhoahoc}}</h6>--}}
{{--            </div>--}}
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Trạng thái</label>
              <div class="col-sm-9">
                <select name="trangthai" id="linhvuc" class="form-control">
                  <option value=""> -- Chọn kiểu lọc -- </option>
                  <option value="Đang tư vấn">Đang tư vấn</option>
                  <option value="Học thử">Học thử</option>
                </select>
                <span class="messages"></span>
              </div>
            </div>
            {{ csrf_field() }}
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Học sinh</label>
              <div class="col-sm-9">
                <select name="hoc_sinh_id[]" class="selectpicker form-control form-control-primary fill" data-live-search="true" data-actions-box="true" data-max-options="{{ $class->khoahoc->sisotoida - $class->siso }}" title="-- Chọn học sinh --" multiple>
                  @foreach($hocsinhs->filter(function($item) use($class){
                  return !$class->dsLopHoc->pluck('hoc_sinh_id')->contains($item->id);

                  }) as $hocsinh)
                  <option value="{{ $hocsinh->id }}">{{ $hocsinh->id. ' - '. $hocsinh->hodem . ' ' . $hocsinh->ten
                    }}</option>
                  @endforeach
                </select>
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Mã lớp</label>
              <div class="col-sm-9">
                <label for="" style="font-weight: bold">{{ $class->tenlop }}</label>
              </div>
            </div>
            <div class="form-group row" style="display: flex; align-items: center">
              <label class="col-sm-3 col-form-label">Sĩ số tối đa</label>
              <div class="col-sm-9">
                <label for="" style="font-weight: bold">{{ $class->khoahoc->sisotoida }}</label>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Sĩ số hiện có</label>
              <div class="col-sm-9">
                <label for="" style="font-weight: bold">{{ $class->siso }}</label>
              </div>
            </div>

          </div>
          <div class=" modal-footer">
            <button type="button" onclick="myReset()" class="btn btn-default waves-effect " data-dismiss="modal" onclick="myReset()">Đóng</button>
            <input type="submit" class="btn btn-primary waves-effect waves-light" value="Cập nhật" />
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script>
  $(document).ready(function (){
    $("#linhvuc").change(function (){
      console.log(123);
      var status = $(this).val();
      $.get("/contacts/trangthai/"+ status,function (data){
        $("#datatable").html(data);
      });
    })
  })
</script>
{{-- <script src="{{asset('assets/js/bootstrap-select.min.js')}}"></script> --}}

