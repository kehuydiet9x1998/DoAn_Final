<div class="modal fade show" id="div-Modal" tabindex="-1" role="dialog" style="z-index: 1050;display: none; padding-right: 17px;">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Phân chia học cụ</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="addform" method="post" action="{{route('admin-hoccu-plus.store')}}" novalidate="" enctype="multipart/form-data">
          <div class="modal-body">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            {{ csrf_field() }}
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Chọn học cụ</label>
              <div class="col-sm-9">
                <select name="kho_hoc_cu_id" class="form-control fill my-select">
                  <option value=""> -- Chọn học cụ -- </option>
                @foreach($khohoccus as $khc)
                    <option value="{{$khc->id}}">{{$khc->tenhoccu}}</option>
                  @endforeach
                </select>
                <span class="messages"></span>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Số lượng</label>
              <div class="col-sm-9">
                <input type="number" class="form-control" name="soluong" id="soluong" placeholder="Nhập vào số lượng của học cụ">
                <span class="messages"></span>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Hình ảnh</label>
              <div class="col-sm-9">
                <select name="lop_hoc_id" id="" class="form-control">
                  <option value=""> -- Chọn lớp học -- </option>
                  @foreach(\App\Models\LopHoc::all() as $lophoc)
                    <option value="{{$lophoc->id}}">{{$lophoc->tenlop}}</option>
                  @endforeach
                </select>
              </div>
            </div>
{{--            <div class="form-group row">--}}
{{--              <label class="col-sm-3 col-form-label">Nhập tên số lượng</label>--}}
{{--              <div class="col-sm-9">--}}
{{--                <input type="number" class="form-control" name="soluong" id="soluong" placeholder="Nhập vào số lượng của học cụ">--}}
{{--                <span class="messages"></span>--}}
{{--              </div>--}}
{{--            </div>--}}
            <input type="hidden" class="form-control" name="capphat" id="capphat" value="0">
            <div class="modal-footer">
              <button type="button" class="btn btn-default waves-effect " data-dismiss="modal" onclick="myReset()">Đóng</button>
              <input type="submit" class="btn btn-primary waves-effect waves-light" value="Cập nhật" />
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@section('script')
  <script src="{{ asset('assets/js/bootstrap-select.min.js') }}"></script>
  <script>
    $(document).
    ready(function() {
      $('.my_select').selected(function(e) {
        id = $(this).data('id')
        $('#soluong').load("/administrators/admin-hoccu/" + id + '/edit');
        $('#edit-Modal').show();
        $('body').addClass('modal-open');
        $('.modal-backdrop').show();
      });
    });

  </script>
@endsection
