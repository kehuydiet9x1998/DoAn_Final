<div class="modal-dialog modal-lg" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h4 class="modal-title">Cập nhật bài tập</h4>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="myReset()">
        <span aria-hidden="true">×</span>
      </button>
    </div>
    <div class="modal-body">
      <form method="post" action="{{route('baitap.update', $baitap->id)}}" novalidate="" enctype="multipart/form-data">
        @method('PUT')
        <div class="modal-body">
          {{ csrf_field() }}
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tên bài tập</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="tenbaitap" id="hodem" value="{{$baitap->tenbaitap}}">
              <span class="messages"></span>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nội dung bài tâp</label>
            <div class="col-sm-10">
              <textarea name="noidung" class="form-control" id="" cols="30" rows="10">{{ $baitap->noidung }}</textarea>
              <span class="messages"></span>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Hình ảnh</label>
            <div class="col-sm-10">
              <div class="row m-b-10">
                <div class="col-md-12">
                  <a href="{{ asset($baitap->hinhanhminhhoa) }}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4 thumbnail">
                    <img style="height: 100px" src="{{ asset($baitap->hinhanhminhhoa) }}" class="img-fluid">
                  </a>
                </div>
              </div>
              <input type="file" name="hinhanhbaitap" class="form-control" placeholder="Thêm hình ảnh" multiple>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Đáp án 1</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="dapan1" id="" value="{{$baitap->dapan1}}">
              <span class="messages"></span>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Đáp án 2</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="dapan2" id="" value="{{$baitap->dapan2}}">
              <span class="messages"></span>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Đáp án 3</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="dapan3" id="" value="{{$baitap->dapan3}}">
              <span class="messages"></span>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Đáp án 4</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="dapan4" id="" value="{{$baitap->dapan4}}">
              <span class="messages"></span>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Đáp án đúng</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="dapan" id="" value="{{$baitap->dapan}}">
              <span class="messages"></span>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Bài giảng</label>
            <div class="col-sm-10">
              <select name="select" class="form-control fill">
                @foreach($baigiangs as $baigiang)
                <option value="{{$baigiang->id}}">{{$baigiang->id.': '.$baigiang->tenbaigiang}}</option>
                @endforeach
              </select>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default waves-effect " data-dismiss="modal" onclick="myReset()">Đóng</button>
          <input type="submit" class="btn btn-primary waves-effect waves-light" value="Cập nhật" />
        </div>
      </form>
    </div>
  </div>
  <script>
    function myReset() {
      $('.modal').hide();
      $('body').removeClass('modal-open');


      $('.modal-backdrop').hide();
    };

  </script>
