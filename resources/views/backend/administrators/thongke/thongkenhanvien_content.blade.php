<div class="col-md-6">
  <div class="card">
    <div class="card-header">
      <h5>Tỷ lệ nhân viên các phòng ban</h5>
    </div>
    <div class="card-block">
      <canvas id="pieChart"></canvas>
    </div>
  </div>
</div>

<div class="col-md-6">
  <div class="card">
    <div class="card-header">
      <h5>Số lượng nhân viên các phòng ban</h5>
    </div>
    <div class="card-block">
      <canvas id="chart2" width="360px" height="360px"></canvas>
    </div>
  </div>
</div>



@php
$chucvu = \App\Models\ChucVu::all()->pluck('ten');
$sonhanvien = \App\Models\ChucVu::all()->map( function($chucvu){ return $chucvu->sonhanvien();});
@endphp
<script>
  var pieElem = document.getElementById("pieChart");
  var data4 = {
    labels: @json($chucvu)
    , datasets: [{
      data: @json($sonhanvien)
    }]
  };
  var myPieChart = new Chart(pieElem, {
    type: "pie"
    , data: data4
    , options: {
      plugins: {
        colorschemes: {
          scheme: 'tableau.Tableau20'
        }
      }
    }

  });




  var bar = document.getElementById("chart2").getContext("2d");
  var myBarChart = new Chart(bar, {
    type: "horizontarBar"

    , data: {
      datasets: [{
        data: @json($sonhanvien)
        , label: 'Số nhân viên'
      }]
      , labels: @json($chucvu)
    , }

    , options: {
      scales: {
        XAxes: [{
          ticks: {
            beginAtZero: true
          }
        }]
      }
      , plugins: {
        colorschemes: {
          scheme: 'tableau.Tableau20'
        }
      }
    }

  });

</script>
