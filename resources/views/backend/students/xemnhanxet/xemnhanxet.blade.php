<div class="modal-dialog modal-lg" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h4 class="modal-title">Đánh giá học sinh</h4>
      <button onclick="myReset()" type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>
    </div>
    <div class="modal-body">
      @if(empty($nhanxet))
      <p style="text-align:center"><i>Chưa có nhận xét</i></p>
      @else
      <form method="post" action="{{route('classes.store')}}" novalidate="">
        <div class="modal-body">
          <input type="hidden" name="_token" value="{{csrf_token()}}">
          {{ csrf_field() }}

          <h5 class="col-sm-12" style="font-weight: bold;
              padding-left: 0px; padding-bottom: 8px;border-bottom: 1px solid #cccccc">Kiến thức</h5>
          <div class="form-group row" style="display: flex; align-items: center">
            <div class="col-sm-3">Khả năng tiếp thu</div>
            <div class="col-sm-9">
              <select disabled class="form-control form-control-inverse fill">
                <option>{{$nhanxet->khanangtiepthu}}</option>
              </select>
              <span class="messages"></span>
            </div>
          </div>
          <div class="form-group row" style="display: flex; align-items: center">
            <div class="col-sm-3">Khả năng sáng tạo</div>
            <div class="col-sm-9">
              <select disabled class="form-control form-control-inverse fill">
                <option>{{$nhanxet->khanangsangtao}}</option>
              </select>
              <span class="messages"></span>
            </div>
          </div>
          <div class="form-group row" style="display: flex; align-items: center">
            <div class="col-sm-3">Áp dụng kiến thức</div>
            <div class="col-sm-9">
              <select disabled class="form-control form-control-inverse fill">
                <option>{{$nhanxet->apdungkienthuc}}</option>
              </select>
              <span class="messages"></span>
            </div>
          </div>
          <div class="form-group row" style="display: flex; align-items: center">
            <div class="col-sm-3">Làm bài tập về nhà</div>
            <div class="col-sm-9">
              <select disabled class="form-control form-control-inverse fill">
                <option>{{$nhanxet->lambaitapvenha}}</option>
              </select>
              <span class="messages"></span>
            </div>
          </div>
          <h5 class="col-sm-12" style="font-weight: bold;
              padding-left: 0px; padding-bottom: 8px;border-bottom: 1px solid #cccccc">Thái độ</h5>
          <div class="form-group row" style="display: flex; align-items: center">
            <div class="col-sm-3">Ý thức học tập</div>
            <div class="col-sm-9">
              <select disabled class="form-control form-control-inverse fill">
                <option>{{$nhanxet->ythuchoctap}}</option>
              </select>
              <span class="messages"></span>
            </div>
          </div>
          <div class="form-group row" style="display: flex; align-items: center">
            <div class="col-sm-3">Tinh thần học tập</div>
            <div class="col-sm-9">
              <select disabled class="form-control form-control-inverse fill">
                <option>{{$nhanxet->tinhthanhoctap}}</option>
              </select>
              <span class="messages"></span>
            </div>
          </div>
          <h5 class="col-sm-12" style="font-weight: bold;
              padding-left: 0px; padding-bottom: 8px;border-bottom: 1px solid #cccccc">Kỹ năng</h5>
          <div class="form-group row" style="display: flex; align-items: center">
            <div class="col-sm-3">Khả năng làm việc nhóm</div>
            <div class="col-sm-9">
              <select disabled class="form-control form-control-inverse fill">
                <option>{{$nhanxet->kynanglamviecnhom}}</option>
              </select>
              <span class="messages"></span>
            </div>
          </div>
          <div class="form-group row" style="display: flex; align-items: center">
            <div class="col-sm-3">Kỹ năng thuyết trình</div>
            <div class="col-sm-9">
              <select disabled class="form-control form-control-inverse fill">
                <option>{{$nhanxet->kynangthuyettrinh}}</option>
              </select>
              <span class="messages"></span>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button onclick="myReset()" type="button" class="btn btn-default waves-effect "
            data-dismiss="modal">Đóng</button>
{{--          <input type="submit" class="btn btn-primary waves-effect waves-light" value="Thêm nhận xét" />--}}
        </div>
      </form>
      @endif
    </div>
  </div>
</div>
<script>
  // $(document).ready(function() {
  //   $('.nhanxet').click(function() {
  //     $('#mail-Modal').load('/teachers/nhanxet/' + $(this).data('id'))
  //     $('#mail-Modal').show();
  //     $('.modal-backdrop').show();
  //   });
  // });
function myReset(){
   $('#mail-Modal').hide();
  $('.modal-backdrop').hide();
}
 


</script>