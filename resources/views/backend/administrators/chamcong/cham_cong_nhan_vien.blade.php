<div class="row">
  <div class="col-md-12">
    <div class="card table-card">
      <div class="card-header">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-6">
            <h5>Chấm công nhân viên</h5>
          </div>

        </div>
      </div>
      <form action="{{ route('attendance.store') }}" id="chamcong" name="chamcong" method="post" onsubmit="send()">
        @csrf
        <input type="hidden" name="ngaycham" value="{{ $ngaycham }}">
        <div class="card-block">
          <div class="table-responsive">

            <table class="table table-hover m-b-0" id="table">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Nhân viên</th>
                  <th>Chức vụ</th>
                  <th>Kết quả</th>
                  <th>Ghi chú</th>
                </tr>
              </thead>
              <tbody>
                @foreach($checkins as $key=> $checkin)
                @csrf
                <tr>
                  <td>{{ $key +1 }}</td>
                  <td>
                    <div class="d-inline-block align-middle">
                      <div class="d-inline-block">
                        <a style="font-size: inherit" href="{{route('trangcanhan',  $checkin->nhanvien->user->id)}}">
                          {{ $checkin->nhanvien->hodem . ' '. $checkin->nhanvien->ten}}
                        </a>
                      </div>
                    </div>
                  </td>
                  <td><label for="" class="badge badge-inverse-primary">{{$checkin->nhanvien->chucvu->ten}}</label></td>
                  <td>
                    <div class="form-check form-check-inline">
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" @if($checkin->ketqua == 'Có mặt') checked @endif name="ketqua[{{ $checkin->nhanvien->id }}]" id="ketqua" value="Có mặt"> Có mặt
                      </label>
                    </div>
                    <div class="form-check form-check-inline">
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" @if($checkin->ketqua == 'Vắng') checked @endif name="ketqua[{{ $checkin->nhanvien->id }}]" id="ketqua" value="Vắng"> Vắng
                      </label>
                    </div>
                    <div class="form-check form-check-inline ">
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" @if($checkin->ketqua == 'Nửa ngày') checked @endif name="ketqua[{{ $checkin->nhanvien->id }}]" id="ketqua" value="Nửa ngày"> Nửa ngày
                      </label>
                    </div>
                    <div class="form-check form-check-inline ">
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" @if($checkin->ketqua == 'Muộn') checked @endif name="ketqua[{{ $checkin->nhanvien->id }}]" id="ketqua" value="Muộn"> Muộn
                      </label>
                    </div>

                  </td>
                  <td>
                    <input type="text" class="form-control form-material" style="border-top: none; border-left:none; border-right:none" name="ghichu[{{ $checkin->nhanvien->id }}]" value="{{ $checkin->ghichu }}">
                  </td>
                </tr>

                @endforeach

              </tbody>
            </table>


          </div>
          <div class="float-right">
            <button class="btn btn-primary btn-sm m-r-10 m-b-20" id="submit"> <i class="fa fa-save"></i> Cập nhật</button>
          </div>

        </div>
      </form>

    </div>
  </div>
</div>
<script>
  $(document).ready(function() {
    $('.my_edit').click(function() {
      $('edit-Modal').load()
    })
  });

</script>
