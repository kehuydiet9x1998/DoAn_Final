<div class="modal fade show" id="chambai-Modal" tabindex="-1" role="dialog"
     style="z-index: 1050;display: none; padding-right: 17px;">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Chấm bài</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="card" style="white-space: normal">
          <div class="card-header" style="text-align: left">
            <h5 class="card-header-text">Câu hỏi</h5>
          </div>
          <div class="card-block p-b-0" style="text-align: left; padding: 10px 0px 5px 20px">
            <div class="row">
              <div class="col-md-12 ui-sortable" id="draggableMultiple">
                <div class="sortable-moves card-sub ui-sortable-handle">
                  <img class="img-fluid p-absolute" src="{{asset('jpg/avatar-1.jpg')}}" alt="">
                  <h5 class="card-title" style="margin-top: 5px ">Câu hỏi 1</h5>
                  <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card" style="white-space: normal">
          <div class="card-header" style="text-align: left">
            <h5>Trả lời</h5>
          </div>
          <div class="card-block">
            <div id="header" style="text-align: left; padding-left: 20px; padding-top: 10px">
              <div id="headerRight">
                <div contenteditable="false">
                  <p>
                    Xoay 4 lần..!
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card" style="white-space: normal">
          <div class="card-header" style="text-align: left">
            <h5>Phản hồi của giáo viên</h5>
          </div>
          <div class="card-block">
            <div id="header" style="text-align: left; padding-left: 20px; padding-top: 10px">
              <div id="headerRight">
                <div contenteditable="true">
                  <p>
                    Đúng rồi..!
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card" style="white-space: normal">
          <div class="card-header" style="text-align: left">
            <h5>Đánh giá của giáo viên</h5>
          </div>
          <div class="card-block">
            <div id="header" style="text-align: left; padding-left: 20px; padding-top: 10px">
              <div class="form-group row has-success">
                <label class="col-sm-2">Đánh giá</label>
                <div class="col-sm-10">
                  <div class="form-radio">
                    <div class="radio radiofill radio-primary radio-inline">
                      <label>
                        <input type="radio" name="member" value="free" data-bv-field="member">
                        <i class="helper"></i>Đạt
                      </label>
                    </div>
                    <div class="radio radiofill radio-primary radio-inline">
                      <label>
                        <input type="radio" name="member" value="personal" data-bv-field="member">
                        <i class="helper"></i>Không đạt
                      </label>
                    </div>
                  </div>
                  <span class="messages"></span>
                </div>
              </div>
            </div>

          </div>
        </div>
        <ul style="display: flex; justify-content: center">
          <li style="margin: 0px 3px">
            <button class="btn waves-effect waves-light btn-info btn-square">Câu trước</button>
          </li>
          <li style="margin: 0px 3px">
            <button class="btn waves-effect waves-light btn-info btn-square">Câu tiếp theo</button>
          </li>
        </ul>
      </div>
      <div class="modal-footer">
        <input type="submit" class="btn btn-primary waves-effect waves-light" value="Cập nhật"/>
        <button type="button" class="btn btn-default waves-effect " data-dismiss="modal">Đóng</button>
      </div>
    </div>
  </div>
</div>
