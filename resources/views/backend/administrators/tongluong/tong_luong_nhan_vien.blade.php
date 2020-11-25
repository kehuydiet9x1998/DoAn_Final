<div class="row">
  <div class="col-md-12">
    <div class="card table-card">
      <div class="card-header">
        <div class="row">
          <div class="col-sm-12 col-xl-3 m-b-30">
            <h5>Bảng lương nhân viên</h5>
          </div>
          <div class="col-md-9">
            <a class="btn btn-success btn-round waves-effect waves-light"
              href="/administrators/payroll/tongluong/nhanvien/print/{{ $thang }}"
              style="height: 35px;line-height: 13px;float: right; margin-right: 20px;"><i class="fa fa-print"></i> In
              bảng lương</a>
          </div>

        </div>
      </div>
      <div class="card-block pt-0">
        <div class="table-responsive">
          <table class="table table-hover m-b-0">
            <thead>
              <tr>
                <th style=" border: 1px solid#999;vertical-align: middle; text-align:center; background: lightblue"
                  rowspan="2">Họ và tên</th>
                <th style=" border: 1px solid#999;vertical-align: middle; text-align:center; background: lightblue"
                  rowspan="2">Chức vụ</th>
                <th style=" border: 1px solid#999;vertical-align: middle; text-align:center; background: lightblue"
                  rowspan="2">Lương chính</th>
                <th style=" border: 1px solid#999;vertical-align: middle; text-align:center; background: lightblue"
                  colspan="3">Phụ cấp</th>
                <th style=" border: 1px solid#999;vertical-align: middle; text-align:center; background: lightblue"
                  colspan="3">Trích vào Lương nhân viên</th>
                <th style=" border: 1px solid#999;vertical-align: middle; text-align:center; background: lightblue"
                  rowspan="2">Ngày công</th>
                <th style=" border: 1px solid#999;vertical-align: middle; text-align:center; background: lightblue"
                  rowspan="2">Tổng thu nhập</th>
                <th style=" border: 1px solid#999;vertical-align: middle; text-align:center; background: lightblue"
                  rowspan="2">Thực lĩnh</th>
                <th style=" border: 1px solid#999;vertical-align: middle; text-align:center; background: lightblue"
                  rowspan="2">Ghi chú</th>
              </tr>
              <tr>
                <td style=" border: 1px solid #999;vertical-align: middle; text-align:center; background: lightblue">
                  Chức vụ</td>
                <td style=" border: 1px solid #999;vertical-align: middle; text-align:center; background: lightblue">Ăn
                  trưa</td>
                <td style=" border: 1px solid #999;vertical-align: middle; text-align:center; background: lightblue">Đi
                  lại</td>
                <td style=" border: 1px solid #999;vertical-align: middle; text-align:center; background: lightblue">
                  BHXH (8%)</td>
                <td style=" border: 1px solid #999;vertical-align: middle; text-align:center; background: lightblue">
                  BHYT</td>
                <td style=" border: 1px solid #999;vertical-align: middle; text-align:center; background: lightblue">
                  Cộng</td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td style="text-align: center; border: 1px solid #999; background: lightblue; padding:10px 20px"></td>
                <td style="text-align: center; border: 1px solid #999; background: lightblue; padding:10px 20px">1</td>
                <td style="text-align: center; border: 1px solid #999; background: lightblue; padding:10px 20px">2</td>
                <td style="text-align: center; border: 1px solid #999; background: lightblue; padding:10px 20px">3</td>
                <td style="text-align: center; border: 1px solid #999; background: lightblue; padding:10px 20px">4</td>
                <td style="text-align: center; border: 1px solid #999; background: lightblue; padding:10px 20px">5</td>
                <td style="text-align: center; border: 1px solid #999; background: lightblue; padding:10px 20px">6</td>
                <td style="text-align: center; border: 1px solid #999; background: lightblue; padding:10px 20px">7</td>
                <td style="text-align: center; border: 1px solid #999; background: lightblue; padding:10px 20px">8</td>
                <td style="text-align: center; border: 1px solid #999; background: lightblue; padding:10px 20px">9</td>
                <td style="text-align: center; border: 1px solid #999; background: lightblue; padding:10px 20px">10</td>
                <td style="text-align: center; border: 1px solid #999; background: lightblue; padding:10px 20px">11</td>
                <td style="text-align: center; border: 1px solid #999; background: lightblue; padding:10px 20px">12</td>
                {{-- <td style="text-align: center; border: 1px solid #999; background: lightblue; padding:10px 20px">13</td> --}}
              </tr>
              @php $luongs = \App\Models\Luong::layLuongThang(now()) @endphp

              @foreach($luongs as $luong)
              @php $nhanvien = $luong->nhanvien; @endphp
              <tr>
                <td style="text-align: left; border: 1px solid #999; padding:10px 20px">
                  {{ $nhanvien->hodem. ' '. $nhanvien->ten }}</td>
                <td style="text-align: center; border: 1px solid #999; padding:10px 20px">{{ $nhanvien->chucvu->ten }}
                </td>
                <td style="text-align: right; border: 1px solid #999; padding:10px 20px">
                  {{ number_format($nhanvien->chucvu->luongchinh) }}</td>
                <td style="text-align: right; border: 1px solid #999; padding:10px 20px">
                  {{ number_format($nhanvien->chucvu->phucap) }}</td>
                <td style="text-align: right; border: 1px solid #999; padding:10px 20px">
                  {{ number_format($nhanvien->layPhuCap('Ăn trưa')) }}</td>
                <td style="text-align: right; border: 1px solid #999; padding:10px 20px">
                  {{ number_format($nhanvien->layphucap('Đi lại')) }}</td>
                <td style="text-align: right; border: 1px solid #999; padding:10px 20px; background: beige">
                  {{ number_format($luong->bhxh) }}</td>
                <td style="text-align: right; border: 1px solid #999; padding:10px 20px; background: beige">
                  {{ number_format($luong->bhyt) }}</td>
                <td style="text-align: right; border: 1px solid #999; padding:10px 20px; background: beige">
                  {{ number_format($luong->tongkhautru) }}</td>
                <td style="text-align: center; border: 1px solid #999; padding:10px">{{ $luong->cong }}</td>
                <td style="text-align: right; border: 1px solid #999; padding:10px 20px">
                  {{ number_format($luong->tongluong) }}</td>
                <td style="text-align: right; border: 1px solid #999; padding:10px 20px; font-weight:bold">
                  {{ number_format($luong->thuclinh) }}</td>
                <td style="text-align: center; border: 1px solid #999; padding:10px 20px;">{{ $luong->trangthai }}</td>

              </tr>
              @endforeach
              <tr>
                <td
                  style=" background:bisque; font-weight:bold; text-align: left; border: 1px solid #999; padding:10px 20px">
                  Tổng cộng</td>
                <td
                  style="background:bisque; font-weight:bold; text-align: center; border: 1px solid #999; padding:10px 20px">
                </td>
                <td
                  style="background:bisque; font-weight:bold; text-align: right; border: 1px solid #999; padding:10px 20px">
                  {{number_format($luongs->sum(function($item){return $item->nhanvien->chucvu->luongchinh;})) }}
                </td>
                <td
                  style="background:bisque; font-weight:bold; text-align: right; border: 1px solid #999; padding:10px 20px">
                  {{ number_format($luongs->sum(function($item){return $item->nhanvien->chucvu->phucap;})) }}
                </td>

                <td
                  style="background:bisque; font-weight:bold; text-align: right; border: 1px solid #999; padding:10px 20px">
                  {{ number_format($luongs->sum(function($item){return $item->nhanvien->layPhuCap('Ăn trưa');})) }}
                </td>
                <td
                  style="background:bisque; font-weight:bold; text-align: right; border: 1px solid #999; padding:10px 20px">
                  {{ number_format($luongs->sum(function($item){return $item->nhanvien->layPhuCap('Đi lại');})) }}
                </td>
                </td>
                <td
                  style="background:bisque; font-weight:bold; text-align: right; border: 1px solid #999; padding:10px 20px;">
                  {{ number_format($luongs->sum('bhxh')) }}
                </td>
                <td
                  style="background:bisque; font-weight:bold; text-align: right; border: 1px solid #999; padding:10px 20px;">
                  {{ number_format($luongs->sum('bhyt')) }}</td>
                <td
                  style="background:bisque; font-weight:bold; text-align: right; border: 1px solid #999; padding:10px 20px;">
                  {{ number_format($luongs->sum('tongkhautru')) }}</td>
                <td
                  style="background:bisque; font-weight:bold; text-align: center; border: 1px solid #999; padding:10px">
                  {{ $luongs->sum('cong') }}</td>
                <td
                  style="background:bisque; font-weight:bold; text-align: right; border: 1px solid #999; padding:10px 20px">
                  {{ number_format($luongs->sum('tongluong')) }}
                </td>
                <td
                  style="background:bisque; font-weight:bold; text-align: right; border: 1px solid #999; padding:10px 20px; font-weight:bold">
                  {{ number_format($luongs->sum('thuclinh')) }}</td>
                <td
                  style="background:bisque; font-weight:bold; text-align: right; border: 1px solid #999; padding:10px 20px; font-weight:bold">
                </td>

              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
