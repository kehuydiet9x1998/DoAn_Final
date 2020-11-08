<div class="modal-dialog modal-lg" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h4 class="modal-title">Sửa thông tin sản phẩm cuối khóa</h4>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true" onclick="myReset()">×</span>
      </button>
    </div>
    <div class="modal-body">
      <div class="page-wrapper">

        <div class="page-body">
          <div class="row">
            <div class="col-sm-12">

              <div class="card">
                <div class="card-header">
                  <h5>Thông tin chi tiết</h5>
                  <span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>
                </div>

                <div class="modal-body">
                  <form method="post" action="{{route('sanphamcuoikhoa.update',$sanphamcuoikhoa->id)}}" novalidate=""
                    id="addform">
                    @method('PUT')
                    <div class="modal-body">
                      <input type="hidden" name="_token" value="{{csrf_token()}}">
                      {{ csrf_field() }}
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Chọn học sinh</label>
                        <div class="col-sm-9">
                          <select name="hoc_sinh_id" class="form-control form-control-primary fill">
                            <option value="{{$sanphamcuoikhoa->hoc_sinh_id}}">
                              {{$sanphamcuoikhoa->hocsinh->hodem.' '.$sanphamcuoikhoa->hocsinh->ten}}
                            </option>
                            @foreach ($dslophoc as $lophoc)
                            @php
                            $dsphanlop = $lophoc->dslophoc;
                            @endphp
                            @foreach ($dsphanlop as $phanlop)
                            <option value="{{$phanlop->hocsinh->id}}">
                              {{$phanlop->hocsinh->hodem.' '.$phanlop->hocsinh->ten.' : '.$lophoc->khoahoc->tenkhoahoc}}
                            </option>
                            @endforeach
                            @endforeach
                          </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Chọn lớp học</label>
                        <div class="col-sm-9">
                          <select name="lop_hoc_id" class="form-control form-control-primary fill">
                            <option value="{{$sanphamcuoikhoa->lop_hoc_id}}">
                              {{$sanphamcuoikhoa->lophoc->tenlop}}
                            </option>
                            @foreach ($dslophoc as $lophoc)
                            <option value="{{$lophoc->id}}">
                              {{$lophoc->tenlop}}</option>
                            @endforeach

                          </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Nội dung</label>
                        <div class="col-sm-9">
                          <textarea class="form-control form-control-primary fill" name="noidung" id="" cols="30"
                            rows="5" placeholder="Nhập vào nội dung">{{$sanphamcuoikhoa->noidung}}</textarea>
                          <span class="messages"></span>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Mô tả</label>
                        <div class="col-sm-9">
                          <textarea class="form-control form-control-primary fill" name="mota" id="" cols="30" rows="7"
                            placeholder="Nhập vào mô tả">{{$sanphamcuoikhoa->mota}}</textarea>
                          <span class="messages"></span>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">link</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control form-control-primary fill" id="hotenchame"
                            name="fileslide" placeholder="Nhập vào đườg dẫn" value="{{$sanphamcuoikhoa->fileslide}}">
                          <span class="messages"></span>
                        </div>
                      </div>

                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default waves-effect " data-dismiss="modal"
                        onclick="myReset()">Đóng</button>
                      <input type="submit" class="btn btn-primary waves-effect waves-light"
                        value="Cập nhật thông tin" />
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>

<script>
  function myReset() {
    $('.modal').hide();
    $('body').removeClass('modal-open');


    $('.modal-backdrop').hide();
  };

</script>
