<div class="modal fade show" id="hoclieu-Modal" tabindex="-1" role="dialog" style="z-index: 1050;display: none; padding-right: 17px;">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Danh sách tài liệu học tập</h4>
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
                        <th>Mã bài giảng</th>
                        <th>Tên bài giảng</th>
                        <th>File</th>
                        <th>Trạng thái</th>
                      </tr>
                    </thead>
                    <tbody>
                      @if(!empty($class->khoaHoc->dsBaiGiang))
                      @foreach($class->khoaHoc->dsBaiGiang as $baiGiang)
                      <tr>
                        <td>
                          <h6>{{$baiGiang->id}}</h6>
                        </td>
                        <td>{{$baiGiang->tenbaigiang}}</td>

                        <td>
                          <button style="background:transparent; border:none; outline:none">

                            <i class="fa fa-file-pdf-o f-w-600 f-16 m-r-15 text-c-red"></i>
                            {{substr($baiGiang->filebaigiang, 9)}}</button>
                        </td>
                        <td>
                          <label class="badge badge-primary">Đã tải lên</label>
                        </td>
                      </tr>
                      @endforeach
                      @else
                      <tr>
                        <td style="text-align: center;" colspan="4"><i>Chưa có học liệu nào.</i></td>
                      </tr>
                      @endif
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
