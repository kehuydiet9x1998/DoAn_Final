<div class="modal fade show" id="hoccu-Modal" tabindex="-1" role="dialog" style="z-index: 1050;display: none; padding-right: 17px;">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Danh sách đồ dung học tập</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-12">
            <div class="card table-card">
              <div class="card-block">
                <div class="table-responsive">
                  <table class="table table-hover m-b-0">
                    <thead>
                      <tr>
                        <th>Mã thiết bị</th>
                        <th>Hình ảnh thiết bị</th>
                        <th>Tên thiết bị</th>
                        <th>Số lượng</th>
                        <th>Trạng thái</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($class->dsHocCu as $hoccu)
                      <tr>
                        <td>
                          <div class="d-inline-block align-middle">
                            <div class="d-inline-block">
                              <h6>{{$hoccu->id}}</h6>
                            </div>
                          </div>
                        </td>
                        <td><img width="150px" src="{{asset($hoccu->hinhanhthietbi)}}"></td>
                        <td>
                          <h6>{{$hoccu->tenthietbi}}</h6>
                        </td>
                        <td>{{$hoccu->soluong}}</td>
                        <td>
                          <label class="badge badge-primary">{{$hoccu->trangthai}}</label>
                        </td>
                      </tr> @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default waves-effect " data-dismiss="modal">Đóng</button>
      </div>
    </div>
  </div>
</div>
