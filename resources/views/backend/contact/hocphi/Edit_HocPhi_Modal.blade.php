{{-- <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}"> --}}

<div class="modal-dialog modal-lg" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h4 class="modal-title">Thông tin chi tiết</h4>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="myReset()">
        <span aria-hidden="true">×</span>
      </button>
    </div>
    <div class="modal-body">
      <form action="{{route('hocphis.store')}}" method="POST">
        <input type="hidden" name="_token" value="{{csrf_token()}}"> {{ csrf_field() }}
        <div class="modal-body" style="padding-top: 0">
          <div class="row" style="margin-bottom: 20px">
            <div class="col-md-6">
              <div class="form-group row" style="margin-bottom: 5px; ">
                <label class="col-sm-auto col-form-label" style="font-weight: bold; display:inline-block; min-width:130px">Mã HĐ:</label>
                <div class="col-sm-auto">
                  <label class="col-form-label">{{$hocphi->id}}</label>
                </div>
              </div>
              <div class="form-group row" style="margin-bottom: 5px; ">
                <label class="col-sm-auto col-form-label" style="font-weight: bold; display:inline-block; min-width:130px">Tên HV:</label>
                <div class="col-sm-auto">
                  <a href="{{route('students.show', $hocphi->hoc_sinh_id)}}">
                    <p class="name_link_green">{{$hocphi->hocsinh->hodem .' '. $hocphi->hocsinh->ten}}</p>
                  </a>

                </div>
              </div>
              <div class="form-group row" style="margin-bottom: 5px; ">
                <label class="col-sm-auto col-form-label" style="font-weight: bold; display:inline-block; min-width:130px">Phụ huynh:</label>
                <div class="col-sm-auto">
                  <label class="col-fporm-label">{{$hocphi->hocsinh->hotenchame}}</label>
                </div>
              </div>

            </div>
            <div class="col-md-6">
              <div class="form-group row" style="margin-bottom: 5px; ">
                <label class="col-sm-auto col-form-label" style="font-weight: bold; display:inline-block; min-width:130px">Số điện thoại:</label>
                <div class="col-sm-auto">
                  <label class="col-form-label">{{$hocphi->hocsinh->sodienthoai}}</label>
                </div>
              </div>

              <div class="form-group row" style="margin-bottom: 5px; ">
                <label class="col-sm-auto col-form-label" style="font-weight: bold; display:inline-block; min-width:130px">Email:</label>
                <div class="col-sm-auto">
                  <label class="col-form-label">{{$hocphi->hocsinh->email}}</label>
                </div>
              </div>

            </div>
          </div>

          <div class="form-group row" style="margin-bottom: 5px">
            <div class="col-md-12">
              <div class="card table-card">
                <div class="card-header" style="padding-bottom: 0">
                  <h5>Khoản tiền cần đóng</h5>
                  <button type="button" data-toggle="modal" data-target="#themkhoanthu-Modal" class="btn btn-success btn-round float-right m-r-5 p-2"> Thêm mới</button>
                </div>
                <div class="card-block">
                  <div class="table-responsive">
                    <table class="table table-hover m-b-0">
                      <thead>
                        <tr>
                          <th width="20px">STT</th>
                          <th>Tên khoản tiền</th>
                          <th>Số tiền</th>
                          {{-- <th>Số tiền đã nộp</th> --}}
                          <th>Trạng thái</th>
                        </tr>
                      </thead>
                      <tbody>
                        @if($khoanthu->count() > 0)
                        @foreach($khoanthu as $key => $kt)
                        <tr>
                          <td>
                            <div class="checkbox-fade fade-in-success">
                              <label>
                                <input name="khoanthu[]" class="khoanthu" type="checkbox" value="{{ $kt->id }}" data-sotien="{{ $kt->sotien }}">
                                <span class="cr">
                                  <i class="cr-icon icofont icofont-ui-check txt-success"></i>
                                </span>
                              </label>
                            </div>

                          </td>
                          <td>{{$kt->tenkhoanthu}}</td>
                          <td>{{number_format($kt->sotien).' đ'}}</td>
                          {{-- <td>{{number_format($kt->sotiendanop).' đ'}}</td> --}}
                          <td><label class="badge badge-inverse-primary">{{$kt->trangthai}}</label></td>
                        </tr>
                        @endforeach
                        @else
                        <tr>
                          <td colspan="4">
                            <i style="text-align: center">Không có khoản thu nào cần đóng</i>
                          </td>
                        </tr>
                        @endif
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>


          <div class="form-group row">
            <label class="col-sm-3 col-form-label"><b>Số tiền cần đóng là:</b> </label>
            <div class="col-sm-9">
              <input type="text" id="sotiendadong" value="0" readonly data-a-sep="," style=" font-weight:bold" name="sotiendadong" class="form-control autonumber fill" placeholder="Nhập số tiền">

            </div>
          </div>

          <div class="form-group row">
            <input type="hidden" name="nhan_vien_id" value="{{Auth::user()->nhanvien->id}}">
            <input type="hidden" name="hoc_phi_id" value="{{$hocphi->id}}">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default waves-effect " data-dismiss="modal" onclick="myReset()">Đóng</button>
            <input type="submit" id="capnhat" disabled class="btn btn-primary waves-effect waves-light" value="Cập nhật" />
          </div>
      </form>
    </div>
  </div>
</div>




<script>
  function myReset() {
    $('.modal').hide();
    $('body').removeClass('modal-open');
    $('.modal-backdrop').hide();
  };

  function tinhtien() {
    sotiendadong = 0;
    $('input:checked').each(function() {
      sotiendadong += +$(this).data('sotien');
      $('#sotiendadong').val(sotiendadong);
      $('#sotiendadong').focus();
      $('#sotiendadong').focusout();
    });
  }

  $(document).ready(function() {
    tinhtien();
    $('.khoanthu').on('change', function() {
      tinhtien();
      $('#capnhat').prop('disabled', false);
    });
  });

</script>
