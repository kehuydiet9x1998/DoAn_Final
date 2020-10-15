<div class="modal fade show" id="mail-Modal" tabindex="-1" role="dialog" style="z-index: 1050;display: none; padding-right: 17px;">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Đánh giá học sinh</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="{{route('students.store')}}" novalidate="">
          <div class="modal-body">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            {{ csrf_field() }}
            <h5 class="col-sm-12" style="font-weight: bold;
              padding-left: 0px; padding-bottom: 8px;border-bottom: 1px solid #cccccc">Kiến thức</h5>
            <div class="form-group row" style="display: flex; align-items: center">
              <div class="col-sm-3">Khả năng tiếp thu</div>
              <div class="col-sm-9">
                <select name="select" class="form-control form-control-inverse fill">
                  <option value="opt1">Khá (Good)</option>
                  <option value="opt2">Tốt (Perfect)</option>
                  <option value="opt3">Cần cố gắng (Need improve)</option>
                </select>
                <span class="messages"></span>
              </div>
            </div>
            <div class="form-group row" style="display: flex; align-items: center">
              <div class="col-sm-3">Khả năng sáng tạo</div>
              <div class="col-sm-9">
                <select name="select" class="form-control form-control-inverse fill">
                  <option value="opt1">Rất sáng tạo (Very creative)</option>
                  <option value="opt2">Có ý tưởng sáng tạo (Creative)</option>
                  <option value="opt3">Đáp ứng yêu cầu cơ bản(Achieve basic requirement)</option>
                </select>
                <span class="messages"></span>
              </div>
            </div>
            <div class="form-group row" style="display: flex; align-items: center">
              <div class="col-sm-3">Áp dụng kiến thức</div>
              <div class="col-sm-9">
                <select name="select" class="form-control form-control-inverse fill">
                  <option value="opt1">Áp dụng rất tốt (Very good applied perfectly)</option>
                  <option value="opt2">Nhớ kiến thức cũ (Well remember)</option>
                  <option value="opt3">Còn quên kiến thức cũ (Forget a little)</option>
                </select>
                <span class="messages"></span>
              </div>
            </div>
            <div class="form-group row" style="display: flex; align-items: center">
              <div class="col-sm-3">Làm bài tập về nhà</div>
              <div class="col-sm-9">
                <select name="select" class="form-control form-control-inverse fill">
                  <option value="opt1">Hoàn thành rất tốt (Perfectly complete)</option>
                  <option value="opt2">Hoàn thành yêu cầu (Complete basic requirement)</option>
                  <option value="opt3">Chưa làm (Has not done)</option>
                </select>
                <span class="messages"></span>
              </div>
            </div>
            <h5 class="col-sm-12" style="font-weight: bold;
              padding-left: 0px; padding-bottom: 8px;border-bottom: 1px solid #cccccc">Thái độ</h5>
            <div class="form-group row" style="display: flex; align-items: center">
              <div class="col-sm-3">Ý thức học tập</div>
              <div class="col-sm-9">
                <select name="select" class="form-control form-control-inverse fill">
                  <option value="opt1">Hoàn thành rất tốt (Complete very well)</option>
                  <option value="opt2">Rất tập trung (Very foursed)</option>
                  <option value="opt3">Thi thoảng còn mất tập trung (Sometime Distracting)</option>
                </select>
                <span class="messages"></span>
              </div>
            </div>
            <div class="form-group row" style="display: flex; align-items: center">
              <div class="col-sm-3">Tinh thần học tập</div>
              <div class="col-sm-9">
                <select name="select" class="form-control form-control-inverse fill">
                  <option value="opt1">Nhiệt tình hào hứng tham gia (Proactive)</option>
                  <option value="opt2">Thường xuyên phát biểu (Usually stated)</option>
                  <option value="opt3">Còn rụt rè (Little shy)</option>
                </select>
                <span class="messages"></span>
              </div>
            </div>
            <h5 class="col-sm-12" style="font-weight: bold;
              padding-left: 0px; padding-bottom: 8px;border-bottom: 1px solid #cccccc">Kỹ năng</h5>
            <div class="form-group row" style="display: flex; align-items: center">
              <div class="col-sm-3">Khả năng làm việc nhóm</div>
              <div class="col-sm-9">
                <select name="select" class="form-control form-control-inverse fill">
                  <option value="opt1">Có khả năng lãnh đạo nhóm (Leader mindset)</option>
                  <option value="opt2">Hỗ trọ các thành viên khác (Actively helping other member)</option>
                  <option value="opt3">Chưa tốt (Need improve)</option>
                </select>
                <span class="messages"></span>
              </div>
            </div>
            <div class="form-group row" style="display: flex; align-items: center">
              <div class="col-sm-3">Kỹ năng thuyết trình</div>
              <div class="col-sm-9">
                <select name="select" class="form-control form-control-inverse fill">
                  <option value="opt1">Trình bài tự tin rõ ràng (Very Confident)</option>
                  <option value="opt2">Chưa tự tin (Not so confident)</option>
                </select>
                <span class="messages"></span>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default waves-effect " data-dismiss="modal">Đóng</button>
            <input type="submit" class="btn btn-primary waves-effect waves-light" value="Thêm nhận xét" />
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
