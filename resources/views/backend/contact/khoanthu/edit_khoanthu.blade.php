{{-- <link rel="stylesheet" href="{{asset('assets/css/bootstrap-select.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}"> --}}


<div class="modal-dialog modal-lg" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h4 class="modal-title">Cập nhật khoản thu </h4>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="myReset()">
        <span aria-hidden="true">×</span>
      </button>
    </div>
    <div class="modal-body">
      <form method="post" action="{{route('khoanthu.update', $khoanthu->tenkhoanthu)}}" novalidate="">
        @method('put')
        <div class="modal-body">
          <input type="hidden" name="_token" value="{{csrf_token()}}">
          {{ csrf_field() }}
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Tên khoản thu</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="tenkhoanthu" id="tenkhoanthu" placeholder="Nhập vào tên khoản thu" value="{{ $khoanthu->tenkhoanthu }}">
              <span class="messages"></span>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Số tiền</label>
            <div class="col-sm-9">
              <input type="text" class="form-control autonumber" data-a-sep="," name="sotien" placeholder="Nhập số tiền" value="{{ number_format($khoanthu->sotien) }}">
              <span class="messages"></span>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Ngày bắt đầu</label>
            <div class="col-sm-9">
              <input type="date" class="form-control" id="ngaybatdau" name="ngaybatdau" placeholder="" value="{{ $khoanthu->ngaybatdau }}">
              <span class="messages"></span>
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Ngày kết thúc</label>
            <div class="col-sm-9">
              <input type="date" class="form-control" id="ngayketthuc" name="ngayketthuc" placeholder="" value="{{ $khoanthu->ngayketthuc }}">
              <span class="messages"></span>
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Chọn đối tượng</label>
            <div class="col-sm-9">
              <select id="edit-hp" name="hoc_phi_id[]" class="selectpicker form-control form-control-primary fill" data-live-search="true" data-actions-box="true" title="-- Chọn học sinh --" multiple>
                @foreach($hocphis as $hocphi)
                <option @if($khoanthu_hocphi->contains(function ($value ,$key) use ($hocphi) { return $value->hoc_sinh_id === $hocphi->hoc_sinh_id; })) selected @endif
                  value="{{ $hocphi->id }}">{{ $hocphi->hocsinh->id. ' - '. $hocphi->hocsinh->hodem . ' ' . $hocphi->hocsinh->ten
                    }}</option>
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
  <script>
    function myReset() {
      $('.modal').hide();
      $('body').removeClass('modal-open');


      $('.modal-backdrop').hide();
    };

  </script>
  {{-- <script type="text/javascript" src="{{asset('assets/js/jquery.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script>


  <script src="{{asset('assets/js/bootstrap-select.min.js')}}"></script>
  <script src="{{ asset('assets/js/inputmask.js') }}" type="text/javascript"></script>
  <script src="{{ asset('assets/js/jquery.inputmask.js') }}" type="text/javascript"></script>
  <script src="{{ asset('assets/js/autonumeric.js') }}"></script> --}}



  {
  {
  --{
  !!$jsValidator - > selector('#editform') !!
  }--
  }
  }
