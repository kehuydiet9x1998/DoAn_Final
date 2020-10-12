<div class="modal fade show" id="phanlop-Modal" tabindex="-1" role="dialog"
     style="z-index: 1050;display: none; padding-right: 17px;">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">BẢNG PHÂN LỚP</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="{{route('students.store')}}" novalidate="">
          <div class="modal-body">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            {{ csrf_field() }}
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Mã lớp</label>
              <div class="col-sm-9">
                <select name="select" class="form-control form-control-primary fill">
                  <option value="opt1">LP - 01</option>
                  <option value="opt2">LP - 02</option>
                  <option value="opt3">LP - 03</option>
                  <option value="opt4">LP - 04K</option>
                </select>
              </div>
            </div>
            <div class="form-group row" style="display: flex; align-items: center">
              <label class="col-sm-3 col-form-label">Sĩ số tối đa</label>
              <div class="col-md-9">
                <input type="number" id="siso" name="ngaysinh" placeholder="" disabled>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Sĩ số hiện có</label>
              <div class="col-sm-9">
                <input type="number" id="siso" name="ngaysinh" placeholder="" disabled>
                <span class="messages"></span>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Giáo viên</label>
              <div class="col-sm-9">
                <select name="select" class="form-control form-control-primary fill">
                  <option value="opt1">Nguyễn Văn Linh</option>
                  <option value="opt2">Nguyễn Văn Hoan</option>
                  <option value="opt3">Phạm Quang Cường</option>
                  <option value="opt4">Phạm Nguyễn Thanh Hải</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Học viên</label>
              <div class="col-sm-9">
                <select class="selectpicker form-control form-control-primary fill" multiple>
                  <option>Mustard</option>
                  <option>Ketchup</option>
                  <option>Relish</option>
                </select>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default waves-effect " data-dismiss="modal"
                    onclick="myReset()">Close</button>
            <input type="submit" class="btn btn-primary waves-effect waves-light" value="Cập nhật"/>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

