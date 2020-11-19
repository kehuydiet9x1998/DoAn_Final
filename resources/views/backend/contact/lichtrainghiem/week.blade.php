<thead>
<tr>
  <th>ID</th>
  <th>Học sinh</th>
  <th>Nội dung</th>
  <th>Trạng thái</th>
  <th>Action</th>
</tr>
</thead>
<tbody>
@foreach ($lichtrainghiems as $key => $lichtrainghiem)
  <tr>
    <td>{{$key+1}}</td>
    <td>
      <div class="d-inline-block align-middle">
        <div class="d-inline-block">
          <a href="{{route('trangcanhan', $lichtrainghiem->id)}}">
            <h6 class="name_link_green">{{$lichtrainghiem->hocSinh->hodem .' '.$lichtrainghiem->hocSinh->ten}}</h6>
          </a>
          <p class=" m-t-0 text-muted" style="margin-bottom: 5px">Phụ huynh: {{$lichtrainghiem->hocsinh->hotenchame}}</p>
          <p class=" m-b-0 text-muted">SĐT: {{$lichtrainghiem->hocsinh->sodienthoai}}</p>
        </div>
      </div>
    </td>
    <td>
      @php
        Carbon\Carbon::setLocale('vi');
        $time = new Carbon\Carbon($lichtrainghiem->thoigian)
      @endphp
      <p style="margin-bottom: 7px">Thời gian:
        <span class="badge badge-default p-1 f-12">{{ $time->diffForHumans()}}</span></p>
      <p style="margin:7px 0 ">Nội dung: {{ $lichtrainghiem->noidung }}</p>
      @if($lichtrainghiem->ketqua!="")
        <p>Kết quả: &nbsp {{ $lichtrainghiem->ketqua }}</p>

      @endif
    </td>
    <td><label for="" class="badge badge-{{ $lichtrainghiem->trangthai == 'Đã xử lý' ? 'success' : ($lichtrainghiem->trangthai == 'Chưa xử lý' ? 'warning' : 'danger')  }}">{{ $lichtrainghiem->trangthai }}</label></td>

    <td style="display: flex; width: 64px;">
      <div>
        {{-- Xem chi tiết nhân viên --}}
        <button data-id="{{$lichtrainghiem->id}}" type="button" class="btn btn-primary waves-effect" data-toggle="modal" data-target="#show-Modal" style="background-color: white; border: none; padding: 0" id="">
          <i class="fa fa-eye f-w-600 f-16 m-r-15 text-c-green"></i>
        </button>
        <div class="modal fade show" id="show-Modal" tabindex="-1" role="dialog" style="z-index: 1050;display: none; padding-right: 17px;">
        </div>
      </div>
      <!-- Modal Sua -->
      <div>
        <button class="my_edit" data-id="{{$lichtrainghiem->id}}" style="background:transparent; border:none; outline:none; width:25px" data-toggle="modal" data-target="#edit-Modal">
          <i class="icon feather icon-edit f-w-600 f-16 m-r-15 text-c-green"></i>
        </button>
        <div class="modal fade show" id="edit-Modal" tabindex="-1" role="dialog" style="z-index: 1050;display: none; padding-right: 17px;">
        </div>
      </div>
      {{-- Xóa nhân viên --}}
      <div>
        <form action="{{route('lichtrainghiem.destroy', $lichtrainghiem->id)}}" method="post">
          @method('DELETE')
          @csrf
          <button style="border: none; outline:none; background:transparent" onclick="return confirm ('Bạn có muốn xóa không')">
            <i class="feather icon-trash-2 f-w-600 f-16 m-r-15 text-c-red" style="margin:0;">
            </i>
          </button>
        </form>
      </div>
    </td>
  </tr>
@endforeach
</tbody>
<script>
  $(document).
  ready(function() {
    $('.btn.btn-primary').click(function(e) {
      id = $(this).data('id');
      $('#show-Modal').load("/contacts/lichtrainghiem/" + id);
      $('#show-Modal').show();
      $('body').addClass('modal-open');


      $('.modal-backdrop').show();
    });
    $('.my_edit').click(function(e) {
      id = $(this).data('id')
      $('#edit-Modal').load("/contacts/lichtrainghiem/" + id + '/edit');
      $('#edit-Modal').show();
      $('body').addClass('modal-open');


      $('.modal-backdrop').show();

    })
  });

</script>

