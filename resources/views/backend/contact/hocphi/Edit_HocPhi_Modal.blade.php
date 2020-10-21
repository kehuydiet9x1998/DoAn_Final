
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
            <div class="form-group row" style="margin-bottom: 0px; margin-top: -20px;">
              <label class="col-sm-auto col-form-label" style="font-weight: bold">Mã HĐ:</label>
              <div class="col-sm-auto">
                <label class="col-form-label">{{$hocphi->id}}</label>
              </div>
            </div>
            <div class="form-group row" style="margin-bottom: 0px">
              <label class="col-sm-auto col-form-label" style="font-weight: bold">Tên HV:</label>
              <div class="col-sm-auto">
                <label class="col-form-label">{{$hocphi->hocsinh->hodem.' '.$hocphi->hocsinh->ten}}</label>
              </div>
            </div>
            <div class="form-group row" style="margin-bottom: 5px">
              <label class="col-sm-auto col-form-label" style="font-weight: bold">Mã HV</label>
              <div class="col-sm-auto">
                <label class="col-form-label">{{$hocphi->hoc_sinh_id}}</label>
              </div>
            </div>
            <div class="form-group row" style="margin-bottom: 5px">
              <div class="col-md-12">
                <div class="card table-card">
                  <div class="card-header">
                    <h5>Khoản tiền cần đóng</h5>
                  </div>
                  <div class="card-block">
                    <div class="table-responsive">
                      <table class="table table-hover m-b-0">
                        <thead>
                        <tr>
                          <th>STT</th>
                          <th>Tên khoản tiền</th>
                          <th>Số tiền</th>
                          <th>Trạng thái</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($khoanthu as $kt)
                        <tr>
                          <td>
                            <div class="d-inline-block align-middle">
                              <div class="d-inline-block">
                                <h6>{{$kt->id}}</h6>
                              </div>
                            </div>
                          </td>
                          <td>{{$kt->tenkhoanthu}}</td>
                          <td>{{$kt->sotien}}</td>
                          <td><label class="badge badge-inverse-primary">{{$kt->trangthai}}</label></td>
                        </tr>
                        @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group row" style="margin-bottom: 5px">
              <div class="col-md-12">
                <div class="card table-card">
                  <div class="card-header">
                    <h5>Khóa học tham gia</h5>
                  </div>
                  <div class="card-block">
                    <div class="table-responsive">
                      <table class="table table-hover m-b-0">
                        <thead>
                        <tr>
                          <th>Mã KH</th>
                          <th>Tên KH</th>
                          <th>Số tiền</th>
                          <th>Trạng thái</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                          <td>
                            <div class="d-inline-block align-middle">
                              <div class="d-inline-block">
                                <h6>KH - 001</h6>
                              </div>
                            </div>
                          </td>
                          <td>Xưởng chế tạo ROBOT</td>
                          <td>10000000</td>
                          <td><label class="badge badge-inverse-primary">Bắt buộc</label></td>
                        </tr>
                        <tr>
                          <td>
                            <div class="d-inline-block align-middle">
                              <div class="d-inline-block">
                                <h6>KH - 002</h6>
                              </div>
                            </div>
                          </td>
                          <td>Lập trình WEB với Python</td>
                          <td>20000000</td>
                          <td><label class="badge badge-inverse-primary">Bắt buộc</label></td>
                        </tr>
                        <tr>
                          <td>
                            <div class="d-inline-block align-middle">
                              <div class="d-inline-block">
                                <h6>KH - 003</h6>
                              </div>
                            </div>
                          </td>
                          <td>Bé làm Game</td>
                          <td>10000000</td>
                          <td><label class="badge badge-inverse-primary">Bắt buộc</label></td>
                        </tr>
                        </tbody>
                      </table>
                    </div>
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
                        <thead>
                        <tr>
                          <th>Số tiền cần đóng</th>
                          <th>Số tiền đã đóng</th>
                          <th>Số tiền còn thiếu</th>
                          <th>Ngày đóng tiền</th>
                          <th>Người thu</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($lsthu as $lst)
                          <tr>
                            <td>
                              <div class="d-inline-block align-middle">
                                <div class="d-inline-block">
                                  <h6>{{$lst->sotiencandong}}</h6>
                                </div>
                              </div>
                            </td>
                            <td>{{$lst->sotiendadong}}</td>
                            <td>{{$lst->sotienconthieu}}</td>
                            <td>{{$lst->ngaydong}}</td>
                            <td>{{$lst->nhanvien->hodem.' '.$lst->nhanvien->ten}}</td>
                          </tr>
                        @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group row" style="margin-bottom: 0px">
              <input type="hidden" name="sotiencandong" value="{{$sotiencandong}}">
              <label class="col-sm-3 col-form-label">Nhập số tiền đóng lần này: </label>
              <div class="col-sm-9">
                <input type="number" name="sotiendadong" class="form-control" placeholder="Nhập số tiền">
              </div>
              <input type="hidden" name="ngaydong" value="{{date("Y-m-d")}}">
              <input type="hidden" name="nhan_vien_id" value="{{Auth::user()->nhanvien->id}}">
              <input type="hidden" name="hoc_phi_id" value="{{$hocphi->id}}">
            </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default waves-effect " data-dismiss="modal"
                    onclick="myReset()">Close</button>
            <input type="submit" class="btn btn-primary waves-effect waves-light" value="Cập nhật"/>
            <input type="submit" class="btn btn-success waves-effect waves-light" value="In hóa đơn"/>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script>
    function myReset(){
      $('#edit-Modal').hide();
      $('.modal-backdrop').hide();
    }

  </script>
