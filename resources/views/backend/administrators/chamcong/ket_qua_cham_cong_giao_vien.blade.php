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
                <th style="vertical-align: middle">Giáo viên</th>

                <th style="vertical-align: middle">Tổng số giờ</th>
                @php Carbon\Carbon::setLocale('vi');
                $ngaydauthang = Carbon\Carbon::createFromFormat('Y-m', $thang)->startOfMonth();
                $ngaycuoithang = Carbon\Carbon::createFromFormat('Y-m', $thang)->endOfMonth();
                @endphp
                @for($date = $ngaydauthang->copy(); $date->lt($ngaycuoithang); $date->addDays(1))
                <th>
                  {{ $date->format('d') }}
                  <br>
                  {{ $date->format('D') }}
                </th>
                @endfor
              </tr>
            </thead>
            <tbody>
              @foreach(App\Models\GiaoVien::all() as $giaovien)
              <tr>
                <td>{{ $giaovien->id }}</td>
                <td>{{ $giaovien->hodem. ' '. $giaovien->ten }}</td>

                @php
                $temp = $checkins->filter(function($query) use ($thang, $giaovien){
                return $query->giao_vien_id == $giaovien->id && $thang == date('Y-m', strtotime($query->getRawOriginal('giocheckout')));
                });
                $sum = $temp->sum(function($query){
                $giocheckout = Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $query->getRawOriginal('giocheckout'));
                $giocheckin = Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $query->getRawOriginal('giocheckin'));
                return $giocheckout->diffInMinutes( $giocheckin);

                });

                @endphp
                <td>{{ $sum/60 }}</td>

                @for($date = $ngaydauthang->copy(); $date->lt($ngaycuoithang); $date->addDays(1))
                @php
                $checkin_record = $checkins->filter(function($query) use($date, $giaovien){
                return date('d' , strtotime($query->getRawOriginal('giocheckin'))) == $date->format('d') && $query->giao_vien_id == $giaovien->id;
                });

                $time = 0;
                if(($checkin_record->count()>0)){
                $giocheckout = Carbon\Carbon::createFromFormat('H:i', optional($checkin_record)->first()->giocheckout);
                $giocheckin = Carbon\Carbon::createFromFormat('H:i', optional($checkin_record)->first()->giocheckin);
                $time = $giocheckout->diffInMinutes( $giocheckin);
                }
                @endphp
                <td>
                  @if($time != 0)
                  <label for="" class="f-w-600 text-c-green">{{ round($time/60,1)}}</label>
                  @else

                  @endif
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
