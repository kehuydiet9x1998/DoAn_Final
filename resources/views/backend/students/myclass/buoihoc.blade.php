<div class="row">
  <div class="col-sm-12">
    <div class="card">
      <div class="card-header">
        <div class="card-header-left">
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
            <button type="button" class="btn waves-effect waves-light btn-round" data-toggle="modal"
              data-target="#mail-Modal" style="font-size: 14px; font-weight: bold">
              XEM NHẬN XÉT
            </button>
            @include('backend.students.mycomment-modal')
          </li>
          <li style="margin: 0px 10px 5px 0px; float: left">
            <button data-id="1" class="btn waves-effect waves-light btn-round">
              <a style="font-size: 14px; font-weight: 800" href="comment/1">NHẬN XÉT GIẢNG
                VIÊN</a>
            </button>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
