<link rel="stylesheet" type="text/css" href="{{asset('assets/css/fullcalendar.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/fullcalendar.print.css')}}" media='print'>
<div class="modal fade" id="large-Modal" tabindex="-1" role="dialog" style="z-index: 1050; display: none;" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Lịch chấm công</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <div id='calendar'></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default waves-effect " data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary waves-effect waves-light ">Save changes</button>
      </div>
    </div>
  </div>
</div>
@section('script')
<script type="text/javascript" src="{{asset('assets/js/fullcalendar.min.js')}}"></script>
<script>
  jQuery(document).ready(function($) {
    $('#calendar').fullCalendar({
      header: {
        left: 'prev,next today'
        , center: 'title'
        , right: 'month,basicWeek,basicDay'
      }
      , navLinks: false
      , editable: false
      , eventLimit: false,
      //đổ dữ liệu ra event
      events: [{
          title: 'My Event'
          , start: '2020-10-10T14:30:00'
          , allDay: false
        }
        , {
          title: 'My Event2'
          , color: 'yellow'
          , start: '2020-10-10T17:30:00'
          , allDay: false
        }
        , {
          title: 'My Event2'
          , color: 'yellow'
          , start: '2020-10-10T17:30:00'
          , allDay: false
        }
      , ]
      , timezone: 'Asia/Ho_Chi_Minh'
      , timeFormat: 'H(:mm)'
    });
  });

</script>
@endsection
