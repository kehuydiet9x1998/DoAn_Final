<div class="card-block" id="data">
  <div class="table-responsive">
    <table class="table table-hover m-b-0">
      <thead>
        <tr>
          <th>ID</th>
          <th>Tên khóa học</th>
          <th>Học phí</th>
          <th>Độ tuổi</th>
          <th>Loại khóa học</th>
          <th>Level</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach($khoahocs as $khoahoc)
        <tr>
          <td>{{$khoahoc->id}}</td>
          <td>
            <div class="d-inline-block align-middle">
              <a href="{{route('courses.show', $khoahoc->id)}}">
                <div class="d-inline-block">
                  <h6 class="name_link_green">{{
                                  $khoahoc->tenkhoahoc }}</h6>
                  <p class="text-muted m-b-0"></p>
                </div>
              </a>
            </div>
          </td>
          <td>{{number_format($khoahoc->hocphi).'đ'}}</td>
          <td>{{$khoahoc->dotuoi}}</td>
          <td>
            <label class="badge badge-inverse-primary">{{$khoahoc->loaiKhoaHoc->tenloaikhoahoc}}</label>
          </td>
          <td>
            <label class="badge badge-inverse-primary">{{$khoahoc->level->tenlevel}}</label>
          </td>
          <td>
          <form action="{{route('courses.destroy', $khoahoc->id)}}" method="post">
            @method('DELETE')
            @csrf
            <button style="border: none; padding: 2px 0px; margin-top: -1px;"
              onclick="return confirm ('Bạn có muốn xóa không')">
              <i class="feather icon-trash-2 f-w-600 f-16 m-r-15 text-c-red" style="margin:0;"></i></button>
          </form>
        </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  <div style="float:right; margin-right:20px">
    {{ $khoahocs->links()}}
  </div>
</div>
