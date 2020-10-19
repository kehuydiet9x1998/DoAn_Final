<div class="modal-dialog modal-lg" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h4 class="modal-title">Đánh giá học sinh</h4>
      <button onclick="myReset()" type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>
    </div>
    <div class="modal-body">
      @if (!empty($nhanxet))
      <p style="text-align:center"><i>Bạn đã nhận xét học sinh này rồi</i></p>
      <form method="post" action="{{route('classes.store')}}" novalidate="">
        <div class="modal-body">
          <input type="hidden" name="_token" value="{{csrf_token()}}">
          {{ csrf_field() }}
          <input type="text" style="display: none;" name="lop_hoc_id" value="{{$lophocid}}">
          <input type="text" style="display: none;" name="khoa_hoc_id" value="{{$khoahocid}}">
          <input type="text" style="display: none;" name="hoc_sinh_id" value="{{$hocsinhid}}">
          <input type="text" style="display: none;" name="buoi_hoc_id" value="{{$buoihocid}}">
          <h5 class="col-sm-12" style="font-weight: bold;
              padding-left: 0px; padding-bottom: 8px;border-bottom: 1px solid #cccccc">Kiến thức</h5>
          <div class="form-group row" style="display: flex; align-items: center">
            <div class="col-sm-3">Khả năng tiếp thu</div>
            <div class="col-sm-9">
              <select name="khanangtiepthu" class="form-control form-control-inverse fill">
                <option value="{{$nhanxet->khanangtiepthu}}">{{$nhanxet->khanangtiepthu}}</option>
                <option value="Khá (Good)">Khá (Good)</option>
                <option value="Tốt (Perfect)">Tốt (Perfect)</option>
                <option value="Cần cố gắng (Need improve)">Cần cố gắng (Need improve)</option>
              </select>
              <span class="messages"></span>
            </div>
          </div>
          <div class="form-group row" style="display: flex; align-items: center">
            <div class="col-sm-3">Khả năng sáng tạo</div>
            <div class="col-sm-9">
              <select name="khanangsangtao" class="form-control form-control-inverse fill">
                <option value="{{$nhanxet->khanangsangtao}}">{{$nhanxet->khanangsangtao}}</option>
                <option value="Đáp ứng yêu cầu cơ bản(Achieve basic requirement)">Đáp ứng yêu cầu cơ bản(Achieve basic
                  requirement)</option>
                <option value="Có ý tưởng sáng tạo (Creative)">Có ý tưởng sáng tạo (Creative)</option>
                <option value="Rất sáng tạo (Very creative)">Rất sáng tạo (Very creative)</option>
              </select>
              <span class="messages"></span>
            </div>
          </div>
          <div class="form-group row" style="display: flex; align-items: center">
            <div class="col-sm-3">Áp dụng kiến thức</div>
            <div class="col-sm-9">
              <select name="apdungkienthuc" class="form-control form-control-inverse fill">
                <option value="{{$nhanxet->apdungkienthuc}}">{{$nhanxet->apdungkienthuc}}</option>
                <option value="Áp dụng rất tốt (Very good applied perfectly)">Áp dụng rất tốt (Very good applied
                  perfectly)</option>
                <option value="Nhớ kiến thức cũ (Well remember)">Nhớ kiến thức cũ (Well remember)</option>
                <option value="Còn quên kiến thức cũ (Forget a little)">Còn quên kiến thức cũ (Forget a little)</option>
              </select>
              <span class="messages"></span>
            </div>
          </div>
          <div class="form-group row" style="display: flex; align-items: center">
            <div class="col-sm-3">Làm bài tập về nhà</div>
            <div class="col-sm-9">
              <select name="lambaitapvenha" class="form-control form-control-inverse fill">
                <option value="{{$nhanxet->lambaitapvenha}}">{{$nhanxet->lambaitapvenha}}</option>
                <option value="Hoàn thành rất tốt (Perfectly complete)">Hoàn thành rất tốt (Perfectly complete)</option>
                <option value="Hoàn thành yêu cầu (Complete basic requirement)">Hoàn thành yêu cầu (Complete basic
                  requirement)</option>
                <option value="Chưa làm (Has not done)">Chưa làm (Has not done)</option>
              </select>
              <span class="messages"></span>
            </div>
          </div>
          <h5 class="col-sm-12" style="font-weight: bold;
              padding-left: 0px; padding-bottom: 8px;border-bottom: 1px solid #cccccc">Thái độ</h5>
          <div class="form-group row" style="display: flex; align-items: center">
            <div class="col-sm-3">Ý thức học tập</div>
            <div class="col-sm-9">
              <select name="ythuchoctap" class="form-control form-control-inverse fill">
                <option value="{{$nhanxet->ythuchoctap}}">{{$nhanxet->ythuchoctap}}</option>
                <option value="Hoàn thành rất tốt (Complete very well)">Hoàn thành rất tốt (Complete very well)</option>
                <option value="Rất tập trung (Very foursed)">Rất tập trung (Very foursed)</option>
                <option value="Thi thoảng còn mất tập trung (Sometime Distracting)">Thi thoảng còn mất tập trung
                  (Sometime Distracting)</option>
              </select>
              <span class="messages"></span>
            </div>
          </div>
          <div class="form-group row" style="display: flex; align-items: center">
            <div class="col-sm-3">Tinh thần học tập</div>
            <div class="col-sm-9">
              <select name="tinhthanhoctap" class="form-control form-control-inverse fill">
                <option value="{{$nhanxet->tinhthanhoctap}}">{{$nhanxet->tinhthanhoctap}}</option>
                <option value="Nhiệt tình hào hứng tham gia (Proactive)">Nhiệt tình hào hứng tham gia (Proactive)
                </option>
                <option value="Thường xuyên phát biểu (Usually stated)">Thường xuyên phát biểu (Usually stated)</option>
                <option value="Còn rụt rè (Little shy)">Còn rụt rè (Little shy)</option>
              </select>
              <span class="messages"></span>
            </div>
          </div>
          <h5 class="col-sm-12" style="font-weight: bold;
              padding-left: 0px; padding-bottom: 8px;border-bottom: 1px solid #cccccc">Kỹ năng</h5>
          <div class="form-group row" style="display: flex; align-items: center">
            <div class="col-sm-3">Khả năng làm việc nhóm</div>
            <div class="col-sm-9">
              <select name="kynanglamviecnhom" class="form-control form-control-inverse fill">
                <option value="{{$nhanxet->kynanglamviecnhom}}">{{$nhanxet->kynanglamviecnhom}}</option>
                <option value="Có khả năng lãnh đạo nhóm (Leader mindset)">Có khả năng lãnh đạo nhóm (Leader mindset)
                </option>
                <option value="Hỗ trọ các thành viên khác (Actively helping other member)">Hỗ trọ các thành viên khác
                  (Actively helping other member)</option>
                <option value="Chưa tốt (Need improve)">Chưa tốt (Need improve)</option>
              </select>
              <span class="messages"></span>
            </div>
          </div>
          <div class="form-group row" style="display: flex; align-items: center">
            <div class="col-sm-3">Kỹ năng thuyết trình</div>
            <div class="col-sm-9">
              <select name="kynangthuyettrinh" class="form-control form-control-inverse fill">
                <option value="{{$nhanxet->kynangthuyettrinh}}">{{$nhanxet->kynangthuyettrinh}}</option>
                <option value="Trình bài tự tin rõ ràng (Very Confident)">Trình bài tự tin rõ ràng (Very Confident)
                </option>
                <option value="Chưa tự tin (Not so confident)">Chưa tự tin (Not so confident)</option>
              </select>
              <span class="messages"></span>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button onclick="myReset()" type="button" class="btn btn-default waves-effect "
            data-dismiss="modal">Đóng</button>
          <input type="submit" class="btn btn-primary waves-effect waves-light" value="Cập nhật nhận xét" />
        </div>
      </form>
      @else
      <form method="post" action="{{route('classes.store')}}" novalidate="">
        <div class="modal-body">
          <input type="hidden" name="_token" value="{{csrf_token()}}">
          {{ csrf_field() }}
          <input type="text" style="display: none;" name="lop_hoc_id" value="{{$lophocid}}">
          <input type="text" style="display: none;" name="khoa_hoc_id" value="{{$khoahocid}}">
          <input type="text" style="display: none;" name="hoc_sinh_id" value="{{$hocsinhid}}">
          <input type="text" style="display: none;" name="buoi_hoc_id" value="{{$buoihocid}}">
          <h5 class="col-sm-12" style="font-weight: bold;
              padding-left: 0px; padding-bottom: 8px;border-bottom: 1px solid #cccccc">Kiến thức</h5>
          <div class="form-group row" style="display: flex; align-items: center">
            <div class="col-sm-3">Khả năng tiếp thu</div>
            <div class="col-sm-9">
              <select name="khanangtiepthu" class="form-control form-control-inverse fill">
                <option value="Khá (Good)">Khá (Good)</option>
                <option value="Tốt (Perfect)">Tốt (Perfect)</option>
                <option value="Cần cố gắng (Need improve)">Cần cố gắng (Need improve)</option>
              </select>
              <span class="messages"></span>
            </div>
          </div>
          <div class="form-group row" style="display: flex; align-items: center">
            <div class="col-sm-3">Khả năng sáng tạo</div>
            <div class="col-sm-9">
              <select name="khanangsangtao" class="form-control form-control-inverse fill">
                <option value="Đáp ứng yêu cầu cơ bản(Achieve basic requirement)">Đáp ứng yêu cầu cơ bản(Achieve basic
                  requirement)</option>
                <option value="Có ý tưởng sáng tạo (Creative)">Có ý tưởng sáng tạo (Creative)</option>
                <option value="Rất sáng tạo (Very creative)">Rất sáng tạo (Very creative)</option>
              </select>
              <span class="messages"></span>
            </div>
          </div>
          <div class="form-group row" style="display: flex; align-items: center">
            <div class="col-sm-3">Áp dụng kiến thức</div>
            <div class="col-sm-9">
              <select name="apdungkienthuc" class="form-control form-control-inverse fill">
                <option value="Áp dụng rất tốt (Very good applied perfectly)">Áp dụng rất tốt (Very good applied
                  perfectly)</option>
                <option value="Nhớ kiến thức cũ (Well remember)">Nhớ kiến thức cũ (Well remember)</option>
                <option value="Còn quên kiến thức cũ (Forget a little)">Còn quên kiến thức cũ (Forget a little)</option>
              </select>
              <span class="messages"></span>
            </div>
          </div>
          <div class="form-group row" style="display: flex; align-items: center">
            <div class="col-sm-3">Làm bài tập về nhà</div>
            <div class="col-sm-9">
              <select name="lambaitapvenha" class="form-control form-control-inverse fill">
                <option value="Hoàn thành rất tốt (Perfectly complete)">Hoàn thành rất tốt (Perfectly complete)</option>
                <option value="Hoàn thành yêu cầu (Complete basic requirement)">Hoàn thành yêu cầu (Complete basic
                  requirement)</option>
                <option value="Chưa làm (Has not done)">Chưa làm (Has not done)</option>
              </select>
              <span class="messages"></span>
            </div>
          </div>
          <h5 class="col-sm-12" style="font-weight: bold;
              padding-left: 0px; padding-bottom: 8px;border-bottom: 1px solid #cccccc">Thái độ</h5>
          <div class="form-group row" style="display: flex; align-items: center">
            <div class="col-sm-3">Ý thức học tập</div>
            <div class="col-sm-9">
              <select name="ythuchoctap" class="form-control form-control-inverse fill">
                <option value="Hoàn thành rất tốt (Complete very well)">Hoàn thành rất tốt (Complete very well)</option>
                <option value="Rất tập trung (Very foursed)">Rất tập trung (Very foursed)</option>
                <option value="Thi thoảng còn mất tập trung (Sometime Distracting)">Thi thoảng còn mất tập trung
                  (Sometime Distracting)</option>
              </select>
              <span class="messages"></span>
            </div>
          </div>
          <div class="form-group row" style="display: flex; align-items: center">
            <div class="col-sm-3">Tinh thần học tập</div>
            <div class="col-sm-9">
              <select name="tinhthanhoctap" class="form-control form-control-inverse fill">
                <option value="Nhiệt tình hào hứng tham gia (Proactive)">Nhiệt tình hào hứng tham gia (Proactive)
                </option>
                <option value="Thường xuyên phát biểu (Usually stated)">Thường xuyên phát biểu (Usually stated)</option>
                <option value="Còn rụt rè (Little shy)">Còn rụt rè (Little shy)</option>
              </select>
              <span class="messages"></span>
            </div>
          </div>
          <h5 class="col-sm-12" style="font-weight: bold;
              padding-left: 0px; padding-bottom: 8px;border-bottom: 1px solid #cccccc">Kỹ năng</h5>
          <div class="form-group row" style="display: flex; align-items: center">
            <div class="col-sm-3">Khả năng làm việc nhóm</div>
            <div class="col-sm-9">
              <select name="kynanglamviecnhom" class="form-control form-control-inverse fill">
                <option value="Có khả năng lãnh đạo nhóm (Leader mindset)">Có khả năng lãnh đạo nhóm (Leader mindset)
                </option>
                <option value="Hỗ trọ các thành viên khác (Actively helping other member)">Hỗ trọ các thành viên khác
                  (Actively helping other member)</option>
                <option value="Chưa tốt (Need improve)">Chưa tốt (Need improve)</option>
              </select>
              <span class="messages"></span>
            </div>
          </div>
          <div class="form-group row" style="display: flex; align-items: center">
            <div class="col-sm-3">Kỹ năng thuyết trình</div>
            <div class="col-sm-9">
              <select name="kynangthuyettrinh" class="form-control form-control-inverse fill">
                <option value="Trình bài tự tin rõ ràng (Very Confident)">Trình bài tự tin rõ ràng (Very Confident)
                </option>
                <option value="Chưa tự tin (Not so confident)">Chưa tự tin (Not so confident)</option>
              </select>
              <span class="messages"></span>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button onclick="myReset()" type="button" class="btn btn-default waves-effect "
            data-dismiss="modal">Đóng</button>
          <input type="submit" class="btn btn-primary waves-effect waves-light" value="Thêm nhận xét" />
        </div>
      </form>
      @endif

    </div>
  </div>
</div>

<script>
  function myReset() {
    $('.modal').hide();
    $('.modal-backdrop').hide();
  };

</script>
