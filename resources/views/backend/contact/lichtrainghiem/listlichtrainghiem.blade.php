@extends('backend.layout.index')
@section('content')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/fullcalendar.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/fullcalendar.print.css')}}" media='print'>
<div class="pcoded-inner-content">
  <div class="main-body">
    <div class="page-wrapper">
      <div class="page-body">
        <div class="row">
          <div class="col-md-12">
            <div class="card table-card">
              <div class="card-header">
                <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-3">
                    <h5><i class="fa fa-clock"></i> Lịch trải nghiệm</h5>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-9">
                    @include('backend.contact.lichtrainghiem.add_lichtrainghiem_modal')
                    @include('backend.contact.lichtrainghiem.calendar-lichtrainghiem')
                  </div>
                </div>
                <div class="row" style="margin-top: 15px">
                  <div class="col-sm-12">
                  <input type="week" value="{{\Carbon\Carbon::now()->weekOfYear}}" id="nowWeek" style="float: right; margin-right: 15px">
                  <input type="date" id="nowDay" style="float: right; margin-right: 15px">
                  <div class="form-group row" style="float: right; margin-right: 10px;">
                    <div class="col-sm-auto">
                      <select name="trangthai" class="form-control form-control-inverse" style="padding: 3px 10px" id="status">
                        <option value="Chưa xử lý" selected>Chưa xử lý</option>
                        <option value="Đã xử lý">Đã xử lý</option>
                        <option value="Hủy bỏ">Hủy bỏ</option>
                      </select>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
              <div class="card-block" style="margin-top: -20px">
                <div class="table-responsive">
                  <table class="table table-hover m-b-0" id="datatable">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Học sinh</th>
                        <th>Nội dung</th>
                        <th>Ngày hẹn</th>
                        <th>Trạng thái</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($lichtrainghiems as $key => $lichtrainghiem)
                        @php
                          Carbon\Carbon::setLocale('vi');
                          $time = new Carbon\Carbon($lichtrainghiem->thoigian)
                        @endphp
                        @if($lichtrainghiem->trangthai == 'Chưa xử lý')
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
                          <p style="margin-bottom: 7px">Thời gian:
                            <span class="badge badge-default p-1 f-12">{{ $time->diffForHumans()}}</span></p>
                          <p style="margin:7px 0 ">Nội dung: {{ $lichtrainghiem->noidung }}</p>
                          @if($lichtrainghiem->ketqua!="")
                          <p>Kết quả: &nbsp {{ $lichtrainghiem->ketqua }}</p>
                          @endif
                        </td>
                        <td><label for="" class="badge badge-{{ $lichtrainghiem->trangthai == 'Đã xử lý' ? 'success' : ($time->isPast() == 'Chưa xử lý' ? 'warning' : 'danger')  }}">{{ $time->format('d/m/Y H:i:s' ) }}</label></td>
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
                        @endif
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@section('script')
<script>
  function myReset() {
    document.getElementById('main').reset();
  };
</script>
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
<script>
  $(document).ready(function (){
    $("#nowWeek").change(function (){
      var nowWeek = $(this).val();
      var week = nowWeek.slice(6,8);
      $.get("/contacts/week/"+ week,function (data){
        $("#datatable").html(data);
      });
    })
  })
</script>
<script>
  $(document).ready(function (){
    $("#nowDay").change(function (){
      var nowDay = $(this).val();
      $.get("/contacts/day/"+ nowDay,function (data){
        $("#datatable").html(data);
      });
    })
  })
</script>
<script>
  $(document).ready(function (){
    $("#status").change(function (){
      var status = $(this).val();
      $.get("/contacts/trangthai/"+ status,function (data){
        $("#datatable").html(data);
      });
    })
  })
</script>
<script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/fullcalendar.min.js')}}"></script>
<script>
  jQuery(document).ready(function ($){
    events = {!!json_encode($events)!!};
    $('#calendar').fullCalendar({
      selectable : false,
      height: 'auto',
      html:true,
      editable: false,
      defaultView: 'month',
      header:{
        left: 'prev,next today'
        , center: 'title'
        , right: 'month,basicWeek,basicDay'
      },
      events: events,
      timezone: 'Asia/Ho_Chi_Minh',
      timeFormat: 'h:mm a',
      eventColor: '#f1e4f1',
      eventTextColor: '#380645',

    })
  })
</script>
{!! $jsValidator->selector('#addform') !!}
@endsection

