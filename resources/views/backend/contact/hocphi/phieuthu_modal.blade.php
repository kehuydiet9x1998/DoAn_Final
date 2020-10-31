    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Phiếu thu #PT-{{sprintf("%04d", $phieuthu->id) }}</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="myReset()">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          {{-- <form action="{{route('hocphis.store')}}" method="POST"> --}}
          <input type="hidden" name="_token" value="{{csrf_token()}}"> {{ csrf_field() }}
          <div class="modal-body" id="phieuthucontent">
            <div class="row" style="margin-bottom: 30px">
              <div class="col-md-6">
                <div class="form-group row" style="margin-bottom: 5px; ">
                  <label class="col-sm-auto col-form-label" style="font-weight: bold; display:inline-block; min-width:130px">Mã HĐ:</label>
                  <div class="col-sm-auto">
                    <label class="col-form-label">#PT-{{sprintf("%04d", $phieuthu->id) }}</label>

                  </div>
                </div>

                <div class="form-group row" style="margin-bottom: 5px; ">
                  <label class="col-sm-auto col-form-label" style="font-weight: bold; display:inline-block; min-width:130px">Ngày thu:</label>
                  <div class="col-sm-auto">
                    <label class="col-form-label">{{$phieuthu->ngaydong}}</label>
                  </div>
                </div>
                <div class="form-group row" style="margin-bottom: 5px; ">
                  <label class="col-sm-auto col-form-label" style="font-weight: bold; display:inline-block; min-width:130px">Tên HV:</label>
                  <div class="col-sm-auto" style="padding-top: 6px;">

                    <a href="{{route('staffs.show', $phieuthu->nhan_vien_id)}}">
                      <p class="name_link_green" style=" margin-bottom: 0px">{{$phieuthu->nhanvien->hodem .' '. $phieuthu->nhanvien->ten}}</p>
                    </a>
                  </div>
                </div>


              </div>
              <div class="col-md-6">
                <div class="form-group row" style="margin-bottom: 5px; ">
                  <label class="col-sm-auto col-form-label" style="font-weight: bold; display:inline-block; min-width:130px">Số điện thoại:</label>
                  <div class="col-sm-auto">
                    <label class="col-form-label">{{$phieuthu->hocphi->hocsinh->sodienthoai}}</label>
                  </div>
                </div>
                <div class="form-group row" style="margin-bottom: 5px; ">
                  <label class="col-sm-auto col-form-label" style="font-weight: bold; display:inline-block; min-width:130px">Tên HV:</label>
                  <div class="col-sm-auto" style="padding-top: 6px;">

                    <a href="{{route('students.show', $phieuthu->hocphi->hoc_sinh_id)}}">
                      <p class="name_link_green" style=" margin-bottom: 0px">{{$phieuthu->hocphi->hocsinh->hodem .' '. $phieuthu->hocphi->hocsinh->ten}}</p>

                    </a>
                  </div>
                </div>
                <div class="form-group row" style="margin-bottom: 5px; ">
                  <label class="col-sm-auto col-form-label" style="font-weight: bold; display:inline-block; min-width:130px">Phụ huynh:</label>
                  <div class="col-sm-auto">
                    <label class="col-form-label">{{$phieuthu->hocphi->hocsinh->hotenchame}}</label>
                  </div>
                </div>



              </div>
            </div>


            <div class="form-group row" style="margin-bottom: 5px">
              <div class="col-md-12">
                <div class="card table-card">
                  <div class="card-header">
                    <h5>Các khoản đã nộp</h5>
                  </div>

                  <div class="card-block">
                    <div class="table-responsive">
                      <table class="table table-hover m-b-0">
                        @if($phieuthu->dschitiet->count()> 0)
                        <thead>
                          <tr>
                            <th>STT</th>
                            <th>Khoản thu</th>
                            <th>Số tiền</th>
                            <th>Trạng thái</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($phieuthu->dschitiet as $key => $khoanthu)
                          <tr>
                            <td>{{ $key+1}}</td>
                            <td>
                              <div class="d-inline-block align-middle">
                                <div class="d-inline-block">
                                  {{ $khoanthu->khoanthu->tenkhoanthu }}
                                </div>
                              </div>
                            </td>
                            <td>{{ number_format($khoanthu->khoanthu->sotien).' đ' }}</td>
                            <td><label for="" class="badge badge-success"> {{$khoanthu->dadong ? 'Đã đóng' : 'Chưa đóng'}}</label></td>
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
              <button type="button" class="btn btn-default waves-effect " data-dismiss="modal" onclick="myReset();$('#history-Modal').show();$('#mybody').addClass('modal-open');$('.modal-backdrop').show();">Đóng</button>

              <a type="submit" target="_blank" href="/contacts/print/{{ $phieuthu->id }}" class="btn btn-success waves-effect waves-light">In hóa đơn</a>

            </div>
          </div>
        </div>
      </div>
