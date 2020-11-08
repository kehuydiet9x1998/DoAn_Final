<div class="row">
  <div class="col-sm-12">
    <div class="card">
      <div class="card-header">
        <div class="card-header-left">
          {{-- $class là thông tin khóa học --}}
          {{-- $buoihoc là thông tin của buổi học đó --}}
          <h6>KHÓA HỌC: {{$class->tenkhoahoc}}: 0/12</h6>
          <div>14:00 - 16:00 | {{$buoihoc->ngayhoc}} </div>
        </div>
      </div>
      <div class="card-block">
        <ul>
          <li style="margin: 0px 10px 5px 0px; float: left">
            <button data-id="1" class="btn waves-effect waves-light btn-round">
              <a style="font-size: 14px; font-weight: 700" href="{{route('home-work.show',$buoihoc->id)}}">LÀM BÀI
                TẬP</a>
            </button>
          </li>
          <li style="margin: 0px 10px 5px 0px; float: left">
            <button type="button" class="btn waves-effect waves-light btn-round xemnhanxet" data-toggle="modal" data-target="#mail-Modal" style="font-size: 14px; font-weight: bold" data-id="{{$buoihoc->id}}/{{$buoihoc->lophoc->id}}/{{$buoihoc->lophoc->khoahoc->id}}">
              XEM NHẬN XÉT
            </button>


            {{-- @include('backend.students.mycomment-modal') --}}
          </li>
          {{-- <li style="margin: 0px 10px 5px 0px; float: left">
            <button data-id="1" class="btn waves-effect waves-light btn-round">
              <a style="font-size: 14px; font-weight: 800" href="comment/1">NHẬN XÉT GIẢNG
                VIÊN</a>
            </button>
          </li> --}}
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="modal fade show" id="mail-Modal" tabindex="-1" role="dialog" style="z-index: 1050;display: none; padding-right: 17px;"></div>

<script>
  $(document).ready(function() {
    $('.xemnhanxet').click(function() {
      //alert('/student/xemnhanxet/' + $(this).data('id'))
      // alert('ok')
      $('#mail-Modal').load('/student/xemnhanxet/' + $(this).data('id'))
      $('#mail-Modal').show();
      // $('body').addClass('modal-open');


      // $('.modal-backdrop').show();
    });
  });

</script>
