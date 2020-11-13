<div class="row">
  <div class="col-md-12">
    <div class="card table-card">
      <div class="card-header">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-6">
            <h5>Kết quả chấm công</h5>
          </div>
        </div>
      </div>

      <div class="card-block">
        <div class="table-responsive">
          <table class="table table-hover m-b-0" id="table">
            <thead>
              <tr>
                <th style="vertical-align: middle">ID</th>
                <th style="vertical-align: middle">Nhân viên</th>

                <th style="vertical-align: middle">Có mặt</th>
                <th style="vertical-align: middle">Vắng mặt</th>
                <th style="vertical-align: middle">Nửa ngày</th>

                @php Carbon\Carbon::setLocale('vi');
                $ngaydauthang = Carbon\Carbon::createFromFormat('Y-m', $thang)->startOfMonth();
                $ngaycuoithang = Carbon\Carbon::createFromFormat('Y-m', $thang)->endOfMonth();
                @endphp
                @for($date = $ngaydauthang->copy(); $date->lt($ngaycuoithang); $date->addDays(1))
                <th>
                  {{ $date->format('d') }}
                </th>
                @endfor
              </tr>
            </thead>
            <tbody>
              @foreach(App\Models\GiaoVien::all() as $giaovien)
              <tr>
                <td>{{ $giaovien->id }}</td>
                <td>{{ $giaovien->hodem. ' '. $giaovien->ten }}</td>
                <td>{{ round($giaovien->tongGioLam($thang)/60,1) }}</td>
                @for($date = $ngaydauthang->copy(); $date->lt($ngaycuoithang); $date->addDays(1))
                @php $time = round($giaovien->tongGioLamTheoNgay($date)/60,1) @endphp

                <td>
                  <label for="" class="f-w-600">
                    {{ $time == 0 ? '' : $time }}
                  </label>
                </td>
                @endfor
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>

      </div>
    </div>
  </div>
</div>
