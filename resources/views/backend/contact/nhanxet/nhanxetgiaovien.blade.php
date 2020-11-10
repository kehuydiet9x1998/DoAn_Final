 <div class="modal fade show" id="large-Modal" tabindex="-1" role="dialog" style="display:block"
   style="z-index: 1050;padding-right: 17px;">
   <div class="modal-dialog modal-lg" role="document">
     <div class="modal-content">
       <div class="modal-header">
         <h4 class="modal-title">Chi tiết nhận xét</h4>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="myReset()">
           <span aria-hidden="true">×</span>
         </button>
       </div>
       <div class="modal-body">
         <form id="main" method="post" action="https://colorlib.com/" novalidate="">
           <div class="form-group row">
             <label class="col-sm-2 col-form-label">Tên học viên</label>
             <div class="col-sm-10">
               <input type="text" class="form-control" name="user_name" id="feedback_id" placeholder="UserName"
                 value="{{$nhanXet->user->hocsinh->hodem.' '.$nhanXet->user->hocsinh->ten}}">
               <span class="messages"></span>
             </div>
           </div>
           <div class="form-group row">
             <label class="col-sm-2 col-form-label">khóa học</label>
             <div class="col-sm-10">
               <input type="text" class="form-control"
                 value="{{$nhanXet->giaovien->hodem.' '.$nhanXet->giaovien->ten}}">
               <span class="messages"></span>
             </div>
           </div>
           <div class="form-group row">
             <label class="col-sm-2 col-form-label">Thời gian</label>
             <div class="col-sm-10">
               <input type="date" class="form-control" id="repeat-password" name="thoigian"
                 placeholder="Thời gian nhận xét" value="{!!substr($nhanXet->thoigian,0,10)!!}">
               <span class="messages"></span>
             </div>
           </div>
           <div class="form-group row">
             <label class="col-sm-2 col-form-label">Nội dung nhận xét</label>
             <div class="col-sm-10">
               <textarea rows="5" cols="5" class="form-control" placeholder="Default textarea"
                 name="nhanxet">{{$nhanXet->noidung}}</textarea>
             </div>
           </div>
         </form>
       </div>
       <div class="modal-footer">
         <button type="button" class="btn btn-default waves-effect " data-dismiss="modal"
           onclick="myReset()">Đóng</button>
       </div>
     </div>
   </div>
 </div>
 <script>
   function myReset() {
     $('.modal').hide();
     $('body').removeClass('modal-open');
     $('.modal-backdrop').hide();
   };

 </script>
 <script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script>
