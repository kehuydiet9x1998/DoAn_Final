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
        <div class="modal-body">
          <div class="row" style="margin-bottom: 30px">
            <div class="col-md-6">
              <div class="form-group row" style="margin-bottom: 5px; ">
                <label class="col-sm-auto col-form-label" style="font-weight: bold; display:inline-block; min-width:130px">Mã HĐ:</label>
                <div class="col-sm-auto">
                  <label class="col-form-label">{{$hocphi->id}}</label>
                </div>
              </div>
              <div class="form-group row" style="margin-bottom: 5px; ">
                <label class="col-sm-auto col-form-label" style="font-weight: bold; display:inline-block; min-width:130px">Tên HV:</label>
                <div class="col-sm-auto" style="padding-top: 6px;">

                  <a href="{{route('students.show', $hocphi->hoc_sinh_id)}}">
                    <p class="name_link_green" style="margin-bottom: 0px;">{{$hocphi->hocsinh->hodem .' '. $hocphi->hocsinh->ten}}</p>

                  </a>
                </div>
              </div>
              <div class="form-group row" style="margin-bottom: 5px; ">
                <label class="col-sm-auto col-form-label" style="font-weight: bold; display:inline-block; min-width:130px">Phụ huynh:</label>
                <div class="col-sm-auto">
                  <label class="col-form-label">{{$hocphi->hocsinh->hotenchame}}</label>
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
                <div class="card-header">
                  <h5>Lịch sử đóng tiền</h5>
                </div>

                <div class="card-block">
                  <div class="table-responsive">
                    <table class="table table-hover m-b-0">
                      @if($lsthu->count()> 0)
                      <thead>
                        <tr>
                          <th>Phiếu thu</th>
                          <th>Ngày đóng</th>
                          <th>Số tiền đã đóng</th>
                          <th>Người thu</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($lsthu as $lst)
                        <tr>
                          <td>
                            <div class="d-inline-block align-middle">
                              <div class="d-inline-block">
                                <button type="button" class="phieuthu" data-id="{{ $lst->id }}" style="background: transparent; outline:none;border:none" data-toggle="modal" data-target="#phieuthu-Modal">
                                  <h6 class="name_link_green">#PT-{{sprintf("%04d", $lst->id) }}</h6>
                                </button>
                              </div>
                            </div>
                          </td>
                          <td><i class="fa fa-calendar"></i> {{$lst->ngaydong}}</td>
                          <td>{{number_format($lst->sotiendadong) .' đ'}}</td>
                          <td>{{$lst->nhanvien->hodem.' '.$lst->nhanvien->ten}}</td>
                        </tr>
                        @endforeach
                        @else
                        <p class="text-center"><i>Chưa có thông tin về lịch sử</i></p>
                        @endif
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-default waves-effect " data-dismiss="modal" onclick="myReset()">Đóng</button>
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
  }

  $(document).ready(function() {
    $('.phieuthu').click(function() {
      $('#phieuthu-Modal').load('/contacts/phieuthu/' + $(this).data('id'));
      $('#history-Modal').hide();
    });
  });

</script>
