<div class="modal fade show" id="giaobaitap-Modal" tabindex="-1" role="dialog" style="z-index: 1050;display: none; padding-right: 17px;">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Giao bài tập về nhà</h4>
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
                  <h5 style="margin-top: 5px; margin-left: 20px">Danh sách học sinh</h5>
                  <table class="table table-hover m-b-0">
                    <thead>
                      <tr>
                        <th>Mã học sinh</th>
                        <th>Họ và tên</th>
                        <th>BTVN</th>
                        <th>Trạng thái</th>
                        <th>Giao bài</th>
                      </tr>
                    </thead>
                    <tbody>

                      @foreach($lesson->dsDiemDanh as $diemdanh)
                      <tr>
                        <td>
                          <div class="d-inline-block align-middle">
                            <div class="d-inline-block">
                              <h6>{{$diemdanh->hocSinh->id}}</h6>
                            </div>
                          </div>
                        </td>
                        <td>
                          <h6>{{$diemdanh->hocSinh->hodem . ' ' . $diemdanh->hocSinh->ten}}</h6>
                        </td>
                        @php
                        $sobaitap = $lesson->dsBaiTap->where('hoc_sinh_id', $diemdanh->hoc_sinh_id)->where('buoi_hoc_id', $lesson->id)->count()
                        @endphp
                        <td>{{$sobaitap > 0 ? "Có $sobaitap bài tập" : 'Chưa có bài tập'}}</td>
                        <td>
                          <label class="badge badge-primary">Đang học</label>
                        </td>
                        <td style="text-align: center">
                          <div class="checkbox-zoom zoom-success">
                            <label>
                              <input type="checkbox" value="">
                              <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-success"></i></span>
                            </label>
                          </div>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card table-card">
              <div class="card-block">
                <div class="table-responsive">
                  <h5 style="margin-top: 5px; margin-left: 20px">Danh sách bài tập về nhà</h5>
                  <table class="table table-hover m-b-0">
                    <thead>
                      <tr>
                        <th>STT</th>
                        <th>Hình ành</th>
                        <th>Nội dung câu hỏi</th>
                        <th>Đáp án</th>
                        <th>Giao bài</th>
                      </tr>
                    </thead>
                    <tbody>
                      @if($lesson->baiGiang->dsBaiTap->count()> 0)
                      @foreach($lesson->baiGiang->dsBaiTap as $i => $baiTap)
                      <tr>
                        <td>
                          <div class="d-inline-block align-middle">
                            <div class="d-inline-block">
                              <h6>{{$i++}}</h6>
                            </div>
                          </div>
                        </td>
                        <td><img width="100" src="{{asset($baiTap->hinhanhminhhoa)}}"></td>
                        <td style="white-space: normal;word-break: break-all">{{$baiTap->noidung}}</td>

                        @php
                        $dapan = '';
                        switch ($baiTap->dapan) {
                        case 'a':
                        $dapan = $baiTap->dapan1;
                        break;
                        case 'b':
                        $dapan = $baiTap->dapan2;
                        break;
                        case 'c':
                        $dapan = $baiTap->dapan3;
                        break;
                        case 'd':
                        $dapan = $baiTap->dapan4;
                        break;

                        default:
                        $dapan = $baiTap->dapan;
                        break;
                        }
                        @endphp

                        <td>
                          {{$dapan}}

                        </td>
                        <td style="text-align: center">
                          <div class="checkbox-zoom zoom-success">
                            <label>
                              <input type="checkbox" value="">
                              <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-success"></i></span>
                            </label>
                          </div>
                        </td>
                      </tr>
                      @endforeach
                      @else
                      <tr>
                        <td colspan="6" style="text-align: center;"><i>Không có sẵn bài tập cho bài giảng này</i></td>
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
        <input type="submit" class="btn btn-primary waves-effect waves-light" value="Giao bài tập" />
        <button type="button" class="btn btn-default waves-effect " data-dismiss="modal">Đóng</button>
      </div>
    </div>
  </div>
</div>
