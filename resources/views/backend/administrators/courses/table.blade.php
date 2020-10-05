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
       @php
       $tenkhoahoc = '';
       if(strlen($khoahoc->tenkhoahoc) > 20){
       $tenkhoahoc = substr($khoahoc->tenkhoahoc,0,20);
       }else{
       $khoahoc->tenkhoahoc;
       }
       @endphp
       <td>
         <div class="d-inline-block align-middle">
           <a href="{{route('courses.show', $khoahoc->id)}}">
             <div class="d-inline-block">
               <h6 style="color:#4099ff; font-weight: 600; font-size:13px">{{
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
       <td><a href="#!"><i class="feather icon-trash-2 f-w-600 f-16 text-c-red"></i></a></td>
     </tr>

     @endforeach

   </tbody>

 </table>
