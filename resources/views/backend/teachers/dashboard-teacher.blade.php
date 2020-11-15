@extends('backend.layout.index')
@section('content')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/fullcalendar.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/fullcalendar.print.css')}}" media='print'>
<div class="pcoded-inner-content">
  <div class="main-body">
    <div class="page-wrapper">
      <div class="page-body">
        <div class="row">
          <div class="col-xl-3 col-md-6">
            <div class="card prod-p-card card-red">
              <div class="card-body">
                <div class="row align-items-center m-b-30">
                  <div class="col">
                    <h6 class="m-b-5 text-white">Tiền lương tháng này</h6>
                    <h3 class="m-b-0 f-w-700 text-white">{{number_format($tienluong)}} VNĐ</h3>
                  </div>
                  <div class="col-auto">
                    <i class="fas fa-money-bill-alt text-c-red f-18"></i>
                  </div>
                </div>
                {{-- <p class="m-b-0 text-white"><span class="label label-danger m-r-10">+11%</span>So với tháng trước</p> --}}
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-md-6">
            <div class="card prod-p-card card-success">
              <div class="card-body">
                <div class="row align-items-center m-b-30">
                  <div class="col">
                    <h6 class="m-b-5 text-white">Số buổi CHECK-IN đúng giờ</h6>
                    <h3 class="m-b-0 f-w-700 text-white">{{$dunggio}}</h3>
                  </div>
                  <div class="col-auto">
                    <i class="fas fa-database text-c-blue f-18"></i>
                  </div>
                </div>
                <p class="m-b-0 text-white">Chiếm 70%</p>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-md-6">
            <div class="card prod-p-card card-yellow">
              <div class="card-body">
                <div class="row align-items-center m-b-30">
                  <div class="col">
                    <h6 class="m-b-5 text-white">Số buổi CHECK-IN muộn</h6>
                    <h3 class="m-b-0 f-w-700 text-white">{{$muongio}}</h3>
                  </div>
                  <div class="col-auto">
                    <i class="fa fa-warning text-c-green f-18"></i>
                  </div>
                </div>
                <p class="m-b-0 text-white">Chiếm 20%</p>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-md-6">
            <div class="card prod-p-card card-default">
              <div class="card-body">
                <div class="row align-items-center m-b-30">
                  <div class="col">
                    <h6 class="m-b-5 text-white">Số buổi chưa CHECK-IN</h6>
                    <h3 class="m-b-0 f-w-700 text-white">{{$kcheckin}}</h3>
                  </div>
                  <div class="col-auto">
                    <i class="fas fa-tags text-c-yellow f-18"></i>
                  </div>
                </div>
                <p class="m-b-0 text-white">Chiếm 10%</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          {{--    Line chart        --}}
          <div class="col-md-12 col-lg-6">
            <div class="card">
              <div class="card-header">
                <h5>Biểu đồ lương</h5>
              </div>
              <div class="card-block">
                <iframe class="chartjs-hidden-iframe" tabindex="-1"
                  style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
                <canvas id="line-chart" width="284" height="284"
                  style="display: block; width: 284px; height: 284px;"></canvas>
              </div>
            </div>
          </div>
          {{--    Pie chart        --}}
          <div class="col-md-12 col-lg-6">
            <div class="card">
              <div class="card-header">
                <h5>Biểu đồ CHECK-IN trong tháng</h5>
              </div>
              <div class="card-block">
                <iframe class="chartjs-hidden-iframe" tabindex="-1"
                  style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
                <canvas id="pie-chart" width="284" height="284"
                  style="display: block; width: 284px; height: 284px;"></canvas>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header">
            <h5>Full Calendar</h5>
          </div>
          <div class="card-block">
            <div class="row">
              <div class="col-md-12">
                <div id='calendar'></div>
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
<script type="text/javascript" src="{{asset('assets/js/chart.js')}}"></script>
{{--  line chart--}}
<script>
  new Chart(document.getElementById("line-chart"), {
    type: 'line',
    data: {
      labels: ["Tháng 1", "Tháng 2", "Tháng 3", "Tháng 4", "Tháng 5", "Tháng 6", "Tháng 7", "Tháng 8", "Tháng 9",
        "Tháng 10", "Tháng 11", "Tháng 12"
      ],
      datasets: [{
          data: [86, 114, 106, 106, 107, 111, 133, 221, 783, 2478, 3000, 4000],
          label: "Mức lương",
          borderColor: "#3e95cd",
          fill: false
        },

      ]
    },
    options: {
      title: {
        display: true,
        text: 'Biểu đồ lương năm 2020'
      }
    }
  });

</script>
{{--  pie chart--}}
<script>
  new Chart(document.getElementById("pie-chart"), {
    type: 'pie',
    data: {
      labels: ["CHECK-IN đúng giờ", "CHECK-IN muộn", "Không CHECK_IN"],
      datasets: [{
        label: "Population (millions)",
        backgroundColor: ["#3cba9f", "#de7a11", "#a7a0a0", ],
        data: [70, 20, 10]
      }]
    },
    options: {
      title: {
        display: true,
        text: 'Biểu đồ CHECK-IN trong tháng 10'
      }
    }
  });

</script>
<script type="text/javascript" src="{{asset('assets/js/fullcalendar.min.js')}}"></script>
<script>
  jQuery(document).ready(function ($) {
    $('#calendar').fullCalendar({
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,basicWeek,basicDay'
      },
      navLinks: false,
      editable: false,
      eventLimit: false,
      //đổ dữ liệu ra event
      events: [{
          title: 'My Event',
          start: '2020-10-10T14:30:00',
          allDay: false
        },
        {
          title: 'My Event2',
          color: 'yellow',
          start: '2020-10-10T17:30:00',
          allDay: false
        },
        {
          title: 'My Event2',
          color: 'yellow',
          start: '2020-10-10T17:30:00',
          allDay: false
        },
      ],
      timezone: 'Asia/Ho_Chi_Minh',
      timeFormat: 'H(:mm)'
    });
  });

</script>
@endsection
