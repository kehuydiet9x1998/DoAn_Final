 <div class="modal fade show" id="large-Modal" tabindex="-1" role="dialog" style="display:block" style="z-index: 1050;padding-right: 17px;">
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
             <label class="col-sm-2 col-form-label">User Name: </label>
             <div class="col-sm-10">
               <input type="text" class="form-control" name="user_name" id="feedback_id" placeholder="UserName" value="{{$nhanXet->user->username }}">
               <span class="messages"></span>
             </div>
           </div>
           <div class="form-group row">
             <label class="col-sm-2 col-form-label">Đối tượng nhận xét</label>
             <div class="col-sm-10">
               <input type="text" class="form-control" id="password" name="doituongnhanxet_id" value={{$nhanXet->doituongnhanxet_id}} placeholder="Đối tượng nhận xét">
               <span class="messages"></span>
             </div>
           </div>
           <div class="form-group row">
             <label class="col-sm-2 col-form-label">Thời gian</label>
             <div class="col-sm-10">
               <input type="date" class="form-control" id="repeat-password" name="thoigian" placeholder="Thời gian nhận xét" value="{!!substr($nhanXet->thoigian,0,10)!!}">

               <span class="messages"></span>
             </div>
           </div>
           <div class="form-group row">
             <label class="col-sm-2 col-form-label">Nội dung nhận xét</label>
             <div class="col-sm-10">
               <textarea rows="5" cols="5" class="form-control" placeholder="Default textarea" name="nhanxet">{{$nhanXet->nhanxet}}</textarea>

             </div>
           </div>
         </form>
       </div>
       <div class="modal-footer">
         <button type="button" class="btn btn-default waves-effect " data-dismiss="modal" onclick="myReset()">Đóng</button>
       </div>
     </div>
   </div>
 </div>
 <script>
   function myReset() {
     $('.modal').hide();
     $('.modal-backdrop').hide();
   };

 </script>
 <script type="text/javascript" src="{{asset('assets/js/form-validation.js')}}"></script>
 <script type="text/javascript" src="{{asset('assets/js/validate.js')}}"></script>
 <script type="text/javascript" src="{{asset('assets/js/underscore-min.js')}}"></script>
 <script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script>
