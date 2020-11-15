@extends('backend.layout.index')
@section('content')
<div class="pcoded-inner-content">
  <div class="main-body">
    <div class="page-wrapper">
      <div class="page-body">
        @foreach ($phanlops as $phanlop)
        <div class="row" style="background-color: white;
          box-shadow: 0 0 5px 0 rgba(43,43,43,.1), 0 11px 6px -7px rgba(43,43,43,.1);
          border-radius: 10px; margin-bottom: 10px; padding-top: 10px">
          <div class="col-xl-12">
            <h5>Khóa học: {{$phanlop->lopHoc->khoahoc->tenkhoahoc}}</h5>
          </div>
          <div class="col-xl-4 col-md-6">
            <div class="card prod-p-card card-red">
              <div class="card-body">
                <div class="row align-items-center m-b-30">
                  <div class="col">
                    <h6 class="m-b-5 text-white">Số buổi đi học trong khóa</h6>
                    <h3 class="m-b-0 f-w-700 text-white">{{$phanlop->lopHoc->sobuoi}}</h3>
                  </div>
                  <div class="col-auto">
                    <i class="fas fa-money-bill-alt text-c-red f-18"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-md-6">
            <div class="card prod-p-card card-success">
              <div class="card-body">
                <div class="row align-items-center m-b-30">
                  <div class="col">
                    <h6 class="m-b-5 text-white">Số buổi đã đi học</h6>
                    <h3 class="m-b-0 f-w-700 text-white">{{$phanlop->lopHoc->sobuoidahoc}}</h3>
                  </div>
                  <div class="col-auto">
                    <i class="fas fa-database text-c-blue f-18"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-md-6">
            <div class="card prod-p-card card-yellow">
              <div class="card-body">
                <div class="row align-items-center m-b-30">
                  <div class="col">
                    <h6 class="m-b-5 text-white">Số buổi còn lại</h6>
                    <h3 class="m-b-0 f-w-700 text-white">{{$phanlop->lopHoc->sobuoi - $phanlop->lopHoc->sobuoidahoc}}
                    </h3>
                  </div>
                  <div class="col-auto">
                    <i class="fa fa-warning text-c-green f-18"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach

        {{-- <div class="row" style="background-color: white;
          box-shadow: 0 0 5px 0 rgba(43,43,43,.1), 0 11px 6px -7px rgba(43,43,43,.1);
          border-radius: 10px; margin-bottom: 10px; padding-top: 10px">
          <div class="col-xl-12">
            <h5>Khóa học: Lập trình WEB với Python</h5>
          </div>
          <div class="col-xl-4 col-md-6">
            <div class="card prod-p-card card-red">
              <div class="card-body">
                <div class="row align-items-center m-b-30">
                  <div class="col">
                    <h6 class="m-b-5 text-white">Số buổi đi học trong khóa</h6>
                    <h3 class="m-b-0 f-w-700 text-white">12 buổi</h3>
                  </div>
                  <div class="col-auto">
                    <i class="fas fa-money-bill-alt text-c-red f-18"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-md-6">
            <div class="card prod-p-card card-success">
              <div class="card-body">
                <div class="row align-items-center m-b-30">
                  <div class="col">
                    <h6 class="m-b-5 text-white">Số buổi đã đi học</h6>
                    <h3 class="m-b-0 f-w-700 text-white">7 buổi</h3>
                  </div>
                  <div class="col-auto">
                    <i class="fas fa-database text-c-blue f-18"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-md-6">
            <div class="card prod-p-card card-yellow">
              <div class="card-body">
                <div class="row align-items-center m-b-30">
                  <div class="col">
                    <h6 class="m-b-5 text-white">Số buổi còn lại</h6>
                    <h3 class="m-b-0 f-w-700 text-white">5 buổi</h3>
                  </div>
                  <div class="col-auto">
                    <i class="fa fa-warning text-c-green f-18"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> --}}
        <div class="row">
          {{--    Pie chart        --}}
          <div class="col-md-12 col-lg-6">
            <div class="card">
              <div class="card-header">
                <h5>Biểu đồ đi học</h5>
              </div>
              <div class="card-block">
                <iframe class="chartjs-hidden-iframe" tabindex="-1"
                  style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
                <canvas id="dihoc-chart" width="284" height="284"
                  style="display: block; width: 284px; height: 284px;"></canvas>
              </div>
            </div>
          </div>
          {{--    Pie chart        --}}
          <div class="col-md-12 col-lg-6">
            <div class="card">
              <div class="card-header">
                <h5>Biểu đồ điểm trong khóa học</h5>
              </div>
              <div class="card-block">
                <iframe class="chartjs-hidden-iframe" tabindex="-1"
                  style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;">
                </iframe>
                <canvas id="pie-chart" width="284" height="284" style="display: block; width: 284px; height: 284px;">
                </canvas>
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
<script>
  new Chart(document.getElementById("dihoc-chart"), {
    type: 'pie',
    data: {
      labels: ["Đi học đúng giờ", "Đi học muộn", "Nghỉ học"],
      datasets: [{
        label: "Population (millions)",
        backgroundColor: ["#3e95cd", "#8e5ea2", "#3cba9f"],
        data: [10, 2, 2]
      }]
    },
    options: {
      title: {
        display: true,
        text: 'Biểu đồ đi học'
      }
    }
  });

</script>
{{--  pie chart--}}
<script>
  new Chart(document.getElementById("pie-chart"), {
    type: 'pie',
    data: {
      labels: ["0 điểm", "1 điểm", "2 điểm", "3 điểm", "4 điểm", "5 điểm", "6 điểm", "7 điểm", "8 điểm", "9 điểm",
        "10 điểm"
      ],
      datasets: [{
        label: "Điểm",
        backgroundColor: ["#464a49", "#888784", "#dea11b", "#db4141", "#1560cd", "#4dd715", "#841294",
          "#cc83e5", "#e34e0e", "#beee0f",
        ],
        data: [0, 0, 0, 0, 0, 0, 0, 3, 8, 10, 11]
      }]
    },
    options: {
      title: {
        display: true,
        text: 'Biểu đồ điểm làm bài tập'
      }
    }
  });

</script>

@endsection
