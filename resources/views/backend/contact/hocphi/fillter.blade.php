<thead>
<tr>
  <th>Mã HĐ</th>
  <th>Học sinh</th>

  <th>Số tiền nợ</th>
  <th style="text-align: center">Deadline</th>
  <th style="text-align: center">Cập nhật</th>
</tr>
</thead>
<tbody>
@foreach($hocphi as $hp)

  <tr>
    <td>{{$hp->id}}</td>
    <td>
      <div class="d-inline-block align-middle">
        <div class="d-inline-block">
          <a href="{{route('trangcanhan', $hp->hocsinh->user->id)}}">
            <h6 class="name_link_green">{{$hp->hocsinh->hodem .' '. $hp->hocsinh->ten}}</h6>
          </a>
          <p class=" m-t-0 text-muted" style="margin-bottom: 5px">Phụ huynh: {{$hp->hocsinh->hotenchame}}</p>
          <p class=" m-b-0 text-muted">SĐT: {{$hp->hocsinh->sodienthoai}}</p>
          {{-- <p class="m-t-2 m-b-0 text-muted">Giáo viên: Học viện TEKY</p> --}}
        </div>
      </div>

    </td>


    <td>{{number_format($hp->conno). ' đ'}}</td>

     <td style="text-align: center"><label class="badge badge-default">{{$hp->deadline}}</label></td>
    <td>
      <div>
        <button data-id="{{$hp->id}}" class="btn waves-effect waves-light btn-round my_edit" data-toggle="modal" data-target="#edit-Modal" style="border: none; background-color: transparent;width:5px">
          <i class="fa fa-edit text-c-green" style="font-weight: bold; font-size: 20px"></i>
        </button>
        <button data-id="{{$hp->id}}" class="btn waves-effect waves-light btn-round histories" data-toggle="modal" data-target="#history-Modal" style="border: none; background-color: transparent;width:5px">
          <i class="fa fa-list-alt text-c-blue" style="font-weight: bold; font-size: 20px"></i>
        </button>

      </div>
    </td>
  </tr>
@endforeach
</tbody>
<script>
  $(document).
  ready(function() {
    $('.my_edit').click(function(e) {
      id = $(this).data('id')
      $('#edit-Modal').load("/contacts/hocphis/" + id + '/edit');
      $('#edit-Modal').show();
      $('body').addClass('modal-open');
      $('.modal-backdrop').show();
    });
    $('.histories').click(function() {
      id = $(this).data('id')
      $('#history-Modal').load("/contacts/hocphis/" + id);
      $('#history-Modal').show();
      $('body').addClass('modal-open');
      $('.modal-backdrop').show();
    });
  });
  function myReset2() {
    $('#phieuthu-Modal').hide();
    $('body').removeClass('modal-open');
  }
</script>
//tắt bớt tab đi
