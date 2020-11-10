<div class="row">
  <div class="col-md-12">
    <div class="card table-card">
      <div class="card-header">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-6">
            <h5>Chấm công giáo viên</h5>
          </div>

        </div>
      </div>
      <div class="card-block">
        <div class="table-responsive">
          <table class="table table-hover m-b-0" id="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Lớp</th>
                <th>Thời gian học</th>
                <th>Giáo viên</th>
                <th>CHECKIN</th>
                <th>CHECKOUT</th>
                <th>TRẠNG THÁI</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              @foreach($checkins as $checkin)
              @php
              $class = $checkin->buoihoc->lophoc;
              $lichhoc = $class->lichHoc[0];
              @endphp
              <tr>
                <td>{{ $checkin->id }}</td>
                <td>
                  <div class="d-inline-block align-middle">
                    <div class="d-inline-block">
                      <a style="font-size: inherit" href="{{route('allclass.show',  $class->id)}}">
                        {{ $class->tenlop}}
                      </a>
                    </div>
                  </div>
                </td>
                <td>{{$lichhoc->caHoc->thoigianbatdau}}-{{$lichhoc->caHoc->thoigianketthuc}}</td>

                <td>
                  <div class="d-inline-block align-middle">
                    <div class="d-inline-block">
                      <a style="font-size: inherit" href="{{route('trangcanhan', $class->giaovien->user->id)}}">
                        {{$class->giaovien->hodem . ' '. $class->giaovien->ten}}
                      </a>
                    </div>
                </td>
                <td>{!! $checkin->giocheckin !!}</td>
                <td>{!! $checkin->giocheckout !!}</td>
                <td><label class="badge badge-inverse-primary">Chưa xác nhận</label></td>
                <td>
                  <ul style="display: flex">
                    <li>
                      <button type="button" class="btn btn-primary waves-effect" style="border: none; padding: 2px 0px; margin-top: -1px; margin-left: 5px;background-color: transparent">
                        <i class="fa fa-check m-r-15 text-c-blue"></i>
                      </button>
                    </li>
                    <li>
                      <button style="border: none; padding: 2px 0px; margin-top: -1px; margin-left: 5px;background-color: transparent" data-toggle="modal" data-target="#edit-Modal" data-id="{{$class->id}}" class="my_edit">
                        <i class="fa fa-edit f-w-600 f-16 m-r-15 text-c-green" style="margin:0; font-size: 20px"></i></button>
                      <div class="modal fade show" id="edit-Modal" tabindex="-1" role="dialog" style="z-index: 1050;display: none; padding-right: 17px;"></div>
                    </li>
                    <li>
                      <form action="{{route('allclass.destroy', $class->id)}}" method="post">
                        @method('DELETE')
                        @csrf
                        <button style="border: none; padding: 2px 0px; margin-top: -1px; margin-left: 5px;background-color: transparent" onclick="return confirm ('Bạn có muốn xóa không')">
                          <i class="fa fa-trash-o f-w-600 f-16 m-r-15 text-c-red" style="margin:0; font-size: 20px"></i></button>
                      </form>
                    </li>
                  </ul>
                </td>
              </tr>

              @endforeach


            </tbody>
          </table>
        </div>
        {{-- <div class="float-right">
          <button class="btn btn-primary btn-sm"> <i class="fa fa-save"></i> Cập nhật</button>
        </div> --}}

      </div>
    </div>
  </div>
</div>
