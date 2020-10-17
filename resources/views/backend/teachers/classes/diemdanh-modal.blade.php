<div class="modal fade show" id="diemdanh-Modal" tabindex="-1" role="dialog" style="z-index: 1050;display: none; padding-right: 17px;">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Danh sách điểm danh</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <form action="{{route('diemdanh.store')}}" method="POST">
        @csrf
        <input type="hidden" name="buoi_hoc_id" value="{{$lesson->id}}">


        <div class="modal-body">
          <div class="row">
            <div class="col-md-12">
              <div class="card table-card">
                <div class="card-block">
                  <div class="table-responsive">
                    <table class="table table-hover m-b-0">
                      <thead>
                        <tr>
                          <th>Họ và tên</th>
                          <th>Điểm danh</th>
                          <th>Ghi chú của giáo viên</th>
                          <th>Trạng thái</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($lesson->dsDiemDanh as $diemdanh)
                        <tr style="align-items: center  ">
                          <td>
                            <h6>{{$diemdanh->hocSinh->hodem . ' ' . $diemdanh->hocSinh->ten }}</h6>
                          </td>

                          <td style="text-align: center">
                            <div class="checkbox-zoom zoom-success">
                              <label>
                                <input type="hidden" name="hoc_sinh_id[]" value="{{$diemdanh->hoc_sinh_id}}">
                                <input type='hidden' name='ketqua[{{$diemdanh->hoc_sinh_id}}]' value="-1">
                                <input type="checkbox" name="ketqua[{{$diemdanh->hoc_sinh_id}}]" {{$diemdanh->ketqua == 1 ? 'checked' : ''}} value="1">
                                <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-success"></i></span>
                              </label>
                            </div>
                          </td>
                          <td>
                            <input name="ghichu[]" type="text" class="form-control" placeholder="Ghi chú của giáo viên" style="margin-top: -5 px">
                          </td>
                          <td> <label class="badge badge-primary">Đang học</label></td>
                        </tr>
                        @endforeach

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <input type="submit" class="btn btn-primary waves-effect waves-light" value="Điểm danh" />
          <button type="button" class="btn btn-default waves-effect " data-dismiss="modal">Đóng</button>
        </div>
      </form>
    </div>
  </div>

</div>
