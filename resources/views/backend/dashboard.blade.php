@extends('backend.layout.index')
@section('content')
<div class="page-header card">
  <div class="row align-items-end">
    <div class="col-lg-8">
      <div class="page-header-title">
        <i class="feather icon-home bg-c-blue"></i>
        <div class="d-inline">
          <h5>Dashboard</h5>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="page-header-breadcrumb">
        <ul class=" breadcrumb breadcrumb-title">
          <li class="breadcrumb-item">
            <a href="index.html"><i class="feather icon-home"></i></a>
          </li>
          <li class="breadcrumb-item"><a href="#!">Dashboard</a> </li>
        </ul>
      </div>
    </div>
  </div>
</div>

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
                    <h6 class="m-b-5 text-white">Lợi nhuận tháng </h6>
                    <h4 class="m-b-0 f-w-700 text-white">{{ number_format(auth()->user()->tongThuThang(now())) }}</h4>
                  </div>
                  <div class="col-auto">
                    <i class="fas fa-money-bill-alt text-c-red f-18"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-md-6">
            <div class="card prod-p-card card-blue">
              <div class="card-body">
                <div class="row align-items-center m-b-30">
                  <div class="col">
                    <h6 class="m-b-5 text-white">Số học sinh</h6>
                    <h3 class="m-b-0 f-w-700 text-white">{{ \App\Models\HocSinh::all()->count() }}</h3>
                  </div>
                  <div class="col-auto">
                    <i class="fas fa-user text-c-blue f-18"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-md-6">
            <div class="card prod-p-card card-green">
              <div class="card-body">
                <div class="row align-items-center m-b-30">
                  <div class="col">
                    <h6 class="m-b-5 text-white">Lớp học</h6>
                    <h3 class="m-b-0 f-w-700 text-white">{{ \App\Models\LopHoc::all()->count() }}</h3>

                  </div>
                  <div class="col-auto">
                    <i class="fas fa-list text-c-green f-18"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-md-6">
            <div class="card prod-p-card card-yellow">
              <div class="card-body">
                <div class="row align-items-center m-b-30">
                  <div class="col">
                    <h6 class="m-b-5 text-white">Tổng chi tháng </h6>
                    <h4 class="m-b-0 f-w-700 text-white">{{ number_format(auth()->user()->tongChiThang(now())) }}</h4>
                  </div>
                  <div class="col-auto">
                    <i class="fas fa-dollar text-c-yellow f-18"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h5>Biểu đồ thu chi</h5>
              </div>
              <div class="card-block">
                <canvas id="chart1" width="360px" height="360px"></canvas>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h5>Biểu đồ điểm danh học sinh trong tháng</h5>
              </div>
              <div class="card-block">
                <canvas id="chart2" width="360px" height="360px"></canvas>
                @php
                $ketquadiemdanh = auth()->user()->thongKeDiemDanh(now())
                @endphp
              </div>
            </div>
          </div>

          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5>DANH SÁCH CÁC KHOẢN THU</h5>
              </div>
              @php $khoanthus = DB::select(
              "select tenkhoanthu, sotien,
              sum(if( trangthai like N'Đã hoàn thành' , 1 , 0 )) as sohocsinhdadong,
              count(*) as sohocsinh
              from khoan_thu group by tenkhoanthu, sotien"
              ); @endphp

              <div class="card-block table-border-style">
                <div class="table-responsive">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Tên khoản thu</th>
                        <th>Số tiền</th>
                        <th>Học sinh chưa nộp</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($khoanthus as $key => $khoanthu)
                      @php
                      $hocsinhchuadong = \App\Models\KhoanThu::where('tenkhoanthu',
                      $khoanthu->tenkhoanthu)->where('trangthai', 'Chưa đóng')->get()
                      @endphp

                      <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $khoanthu->tenkhoanthu }}</td>
                        <td>{{ $khoanthu->sotien }}</td>
                        {{-- <td>{{ $khoanthu->sohocsinh - $khoanthu->sohocsinhdadong }}</td> --}}
                        <td>
                          <h5 class="mb-0">
                            <button class="btn btn-secondary btn-sm " data-toggle="collapse"
                              data-target="#collapse{{ $khoanthu->tenkhoanthu }}" aria-expanded="true"
                              aria-controls="collapseOne">
                              {{ $hocsinhchuadong->count() }} học sinh chưa đóng <i class="fa fa-caret-down"></i>
                            </button>
                          </h5>

                          <div id="collapse{{ $khoanthu->tenkhoanthu }}" class="collapse" aria-labelledby="headingOne"
                            data-parent="#accordion">

                            <div style="width: 400px; display:flex; flex-wrap: wrap; padding-top:10px">

                              @if($hocsinhchuadong->count()>0)
                              @foreach( $hocsinhchuadong
                              as $item)
                              <label for=""
                                class="badge badge-inverse-info m-r-10">{{$item->hocPhi->hoc_sinh_id.' - '. $item->hocPhi->hocsinh->hodem.' '. $item->hocPhi->hocsinh->ten }}</label>
                              @endforeach
                              @else
                              <i>Không có học sinh nào chưa đóng</i>
                              @endif
                            </div>

                          </div>
                        </td>
                      </tr>
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

<script type="text/javascript" src="{{asset('assets/js/chart.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/chartjs-plugin-colorschemes.min.js')}}"></script>

@php $thuchi = auth()->user()->thongKeChiTieuNam(now()) @endphp


<script>
  var data1 = {
    labels: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12],
    datasets: [{
      label: "Tổng thu",
      data: @json($thuchi['thu'])
    }, {
      label: "Tổng chi",
      data: @json($thuchi['chi'])

    }]
  };
  var bar = document.getElementById("chart1").getContext("2d");
  var myBarChart = new Chart(bar, {
    type: "bar",
    data: data1,
    options: {
      barValueSpacing: 20,
      plugins: {
        colorschemes: {
          scheme: 'brewer.DarkTwo5'
        }
      },
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: true
          }
        }]
      }
    }
  });


  var pieElem = document.getElementById("chart2");
  var data4 = {
    labels: @json(array_keys($ketquadiemdanh)),
    datasets: [{
      data: @json(array_values($ketquadiemdanh))
    }]
  };
  var myPieChart = new Chart(pieElem, {
    type: "pie",
    data: data4,
    options: {
      plugins: {
        colorschemes: {
          scheme: 'tableau.Tableau20'
        }
      }
    }

  });

</script>

@endsection
