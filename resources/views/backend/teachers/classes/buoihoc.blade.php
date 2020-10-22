 {{-- Thông tin các buổi học --}}
 <div class="row">
   <div class="col-sm-12">
     <div class="card">
       <div class="card-header">
         <div class="card-header-left">
           <h6>{{$class->khoaHoc->tenkhoahoc}} - BUỔI HỌC: {{$class->sobuoidahoc}}/{{$class->sobuoi}}</h6>
           <div>{{$lesson->checkin->giocheckin}} - {{$lesson->checkin->giocheckout}} | {{$lesson->ngayhoc}} </div>

         </div>
       </div>
       <div class="card-block">
         <ul class="col-sm-12">
           <li style="margin: 0px 10px 5px 0px; float: left">
             <button data-id="1" class="btn waves-effect waves-light btn-round" data-toggle="modal" data-target="#hoccu-Modal">HỌC CỤ</button>
               @include('backend.teachers.classes.hoccu-modal')
           </li>
           <li style="margin: 0px 10px 5px 0px; float: left">
             <button class="btn waves-effect waves-light btn-round" onclick="  document.getElementById('checkin-form').submit();">CHECK-IN</button>
           </li>
           <form id="checkin-form" action="{{route('checkin.store')}}" method="post">
             @csrf
             <input type="hidden" name="buoi_hoc_id" value="{{$lesson->id}}">
           </form>
           <li style="margin: 0px 10px 5px 0px; float: left">
             <button class="btn waves-effect waves-light btn-round" onclick="  document.getElementById('checkout-form').submit();">CHECK-OUT</button>
           </li>
           <form id="checkout-form" action="{{route('checkin.store')}}" method="post">
             @csrf
             <input type="hidden" name="buoi_hoc_id" value="{{$lesson->id}}">
             <input type="hidden" name="giocheckout">
           </form>
           <li style="margin: 0px 10px 5px 0px; float: left">
             <button data-id="1" class="btn waves-effect waves-light btn-round" data-toggle="modal" data-target="#diemdanh-Modal">ĐIỂM DANH</button>
             @include('backend.teachers.classes.diemdanh-modal')
           </li>
           <li style="margin: 0px 10px 5px 0px; float: left">
             <button data-id="1" class="btn waves-effect waves-light btn-round" data-toggle="modal" data-target="#hoclieu-Modal">HỌC LIỆU</button>
             @include('backend.teachers.classes.hoclieu-modal')
           </li>
           <li style="margin: 0px 10px 5px 0px; float: left">
             <button data-id="1" class="btn waves-effect waves-light btn-round" data-toggle="modal" data-target="#giaobaitap-Modal">GIAO BÀI TẬP</button>
             @include('backend.teachers.classes.giaobaitap-modal')
           </li>
         </ul>
       </div>
     </div>
   </div>
 </div>
 <div class="row">
   <div class="col-md-12">
     <div class="card table-card">
       <div class="card-block">
         <div class="table-responsive">
           <table class="table table-hover m-b-0">
             <thead>
               <tr>
                 <th>Mã học sinh</th>
                 <th>Họ và tên</th>
                 <th>Điểm danh</th>
                 <th>BTVN</th>
                 <th>Action</th>
                 <th>Trạng thái</th>
               </tr>
             </thead>
             <tbody>
               @foreach($lesson->dsDiemDanh as $diemdanh)
               <tr>
                 <td>
                   <div class="d-inline-block align-middle">
                     <div class="d-inline-block">
                       <h6>{{$diemdanh->hocSinh->id}}</h6>
                     </div>
                   </div>
                 </td>
                 <td><a href="classes/detail">
                     <h6>{{$diemdanh->hocSinh->hodem .' '. $diemdanh->hocSinh->ten}}</h6>
                   </a></td>
                 <td style="text-align: center">
                   <div class="checkbox-zoom zoom-{{$diemdanh->ketqua == -1 ? 'danger' : 'success'}}">
                     <span class="cr">
                       <i class="cr-icon icofont {{$diemdanh->ketqua == 1
                          ? 'icofont-ui-check txt-success'
                          : ($diemdanh->ketqua == -1 ? 'icofont-error txt-danger' : '') }}" style="padding-left: 2px">
                       </i>
                     </span>
                   </div>
                 </td>
                 @php
                 $sobaitap = $lesson->dsBaiTap->where('hoc_sinh_id', $diemdanh->hoc_sinh_id)->where('buoi_hoc_id',
                 $lesson->id)->count()
                 @endphp
                 <td>{{$sobaitap > 0 ? "Có $sobaitap bài tập" : 'Chưa có bài tập'}}</td>
                 <td>
                   <ul style="display: flex;">
                     <li style="margin: 0 3px">
                       <button type="button" data-id="{{$diemdanh->hoc_sinh_id}}/{{$lesson->id}}/{{$lesson->lopHoc->id}}/{{$lesson->lopHoc->khoaHoc->id}}"
                               class="btn btn-primary waves-effect nhanxet" data-toggle="modal" data-target="#mail-Modal" style="background-color: white; border: none; padding: 0">
                         <i class="fa fa-comments-o f-w-600 f-16 m-r-15 text-c-green" style="font-size: 20px"></i>
                       </button>
                     </li>
                     <li>
                       @php
                       $baitap = App\Models\DanhSachBaiTap::where('hoc_sinh_id',
                       $diemdanh->hoc_sinh_id)->where('buoi_hoc_id', $lesson->id)->first();

                       @endphp
                       <a href="/teachers/xembaitap/{{$diemdanh->hoc_sinh_id}}/{{$lesson->id}}"><i class="fa fa-book f-w-600 f-16 m-r-15 text-c-green" style="font-size: 20px"></i></a>
                     </li>
                 <td>
                   <label class="badge badge-primary">Đang học</label>
                 </td>
               </tr>
               @endforeach
             </tbody>
           </table>
           <div class="modal fade show" id="mail-Modal" tabindex="-1" role="dialog" style="z-index: 1050;display: none; padding-right: 17px;"></div>
         </div>
       </div>
     </div>
   </div>
 </div>

 <script>
   $(document).ready(function() {
     $('.nhanxet').click(function() {
       $('#mail-Modal').load('/teachers/nhanxet/' + $(this).data('id'))
       $('#mail-Modal').show();
       $('.modal-backdrop').show();
     });
   });

 </script>
