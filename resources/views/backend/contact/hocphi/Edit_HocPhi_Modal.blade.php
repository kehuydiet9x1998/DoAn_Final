<div class="modal fade show" id="hocphi-Modal" tabindex="-1" role="dialog" style="z-index: 1050;display: none; padding-right: 17px;">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Thông tin chi tiết</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="" novalidate="">
          <div class="modal-body">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            {{ csrf_field() }}
            <div class="form-group row" style="margin-bottom: 0px; margin-top: -20px;">
              <label class="col-sm-1 col-form-label" style="font-weight: bold">Mã HĐ:</label>
              <div class="col-sm-11">
                <label class="col-form-label">1</label>
              </div>
            </div>
            <div class="form-group row" style="margin-bottom: 0px">
              <label class="col-sm-1 col-form-label" style="font-weight: bold">Tên HV:</label>
              <div class="col-sm-11">
                <label class="col-form-label">Nguyễn Hải Minh</label>
              </div>
            </div>
            <div class="form-group row" style="margin-bottom: 5px">
              <label class="col-sm-1 col-form-label" style="font-weight: bold">Mã HV</label>
              <div class="col-sm-11">
                <label class="col-form-label">HV - 001</label>
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
                        <tr>
                          <td>
                            <div class="d-inline-block align-middle">
                              <div class="d-inline-block">
                                <h6>1</h6>
                              </div>
                            </div>
                          </td>
                          <td>Phí xây dựng</td>
                          <td>1000000</td>
                          <td><label class="badge badge-inverse-primary">Bắt buộc</label></td>
                        </tr>
                        <tr>
                          <td>
                            <div class="d-inline-block align-middle">
                              <div class="d-inline-block">
                                <h6>2</h6>
                              </div>
                            </div>
                          </td>
                          <td>Đồ dùng học tập</td>
                          <td>1000000</td>
                          <td><label class="badge badge-inverse-primary">Bắt buộc</label></td>
                        </tr>
                        <tr>
                          <td>
                            <div class="d-inline-block align-middle">
                              <div class="d-inline-block">
                                <h6>3</h6>
                              </div>
                            </div>
                          </td>
                          <td>Phí tài liệu</td>
                          <td>1000000</td>
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
                        <tr>
                          <td>
                            <div class="d-inline-block align-middle">
                              <div class="d-inline-block">
                                <h6>33000000</h6>
                              </div>
                            </div>
                          </td>
                          <td>20000000</td>
                          <td>13000000</td>
                          <td>19/10/2020</td>
                          <td>Nguyễn Văn Hoan</td>
                        </tr>
                        <tr>
                          <td>
                            <div class="d-inline-block align-middle">
                              <div class="d-inline-block">
                                <h6>13000000</h6>
                              </div>
                            </div>
                          </td>
                          <td>10000000</td>
                          <td>3000000</td>
                          <td>20/10/2020</td>
                          <td>Nguyễn Văn Linh</td>
                        </tr>
                        <tr>
                          <td>
                            <div class="d-inline-block align-middle">
                              <div class="d-inline-block">
                                <h6>3000000</h6>
                              </div>
                            </div>
                          </td>
                          <td>3000000</td>
                          <td>0</td>
                          <td>21/10/2020</td>
                          <td>Phạm Quang Cường</td>
                        </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group row" style="margin-bottom: 0px">
              <label class="col-sm-3 col-form-label">Nhập số tiền đóng lần này: </label>
              <div class="col-sm-9">
                <input type="text" class="form-control" placeholder="Nhập số tiền">
              </div>
            </div>
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

</div>
