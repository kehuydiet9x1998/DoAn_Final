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
                <th>ID</th>
                <th>Nhân viên</th>
                <th>Có mặt</th>
                <th>Vắng mặt</th>
                <th>Nửa ngày</th>
                <th>Muộn</th>
                <th>Tổng số ngày</th>
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
              @foreach(App\Models\NhanVien::all() as $nhanvien)
              <tr>
                <td>{{ $nhanvien->id }}</td>
                <td>{{ $nhanvien->hodem. ' '. $nhanvien->ten }}</td>
                @php
                $kq = $nhanvien->layTongSoNgay($thang)
                @endphp
                <td>{{ $kq['comat'] }}</td>
                <td>{{ $kq['vangmat'] }}</td>
                <td>{{ $kq['nuangay'] }}</td>
                <td>{{ $kq['muon'] }}</td>
                <td>{{ $kq['tong'] }}</td>
                @for($date = $ngaydauthang->copy(); $date->lt($ngaycuoithang); $date->addDays(1))
                @php $cong = $nhanvien->layChamCongTheoNgay($date) @endphp
                <td>
                  <label for="" class="f-w-600">
                    {{ $cong == null ? '' : $cong }}
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
