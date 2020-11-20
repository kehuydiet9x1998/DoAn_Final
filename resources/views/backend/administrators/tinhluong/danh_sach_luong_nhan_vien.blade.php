<div class="row">
  <div class="col-md-12">
    <div class="card table-card">
      <div class="card-header">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-6">
            <h5>Danh sách lương nhân viên tháng {{ $thang }}</h5>
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
                <th>Số điện thoại</th>
                <th>Thực lĩnh</th>
                <th>Trạng thái</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              @foreach(\App\Models\NhanVien::all() as $nhanvien)
              <tr>
                <td>{{ $nhanvien->id }}</td>
                <td>{{ $nhanvien->hodem . ' ' . $nhanvien->ten }}</td>
                <td>{{ $nhanvien->sodienthoai }}</td>
                @php
                $luong = $nhanvien->layLuongThang($thang);
                @endphp
                <td>{{ isset($luong) ? number_format($luong->thuclinh) : '0' }}</td>
                <td>{!! !isset($luong) ? '<label for="" class="badge badge-warning">Chưa tạo</label>'
                  : ($luong->trangthai == 'Chưa thanh toán'
                  ? '<label for="" class="badge badge-primary">Chưa thanh toán</label>'
                  : '<label for="" class="badge badge-success">Đã thanh toán</label>') !!}</td>

                <td>
                  <button class="btn btn-sm btn-round btn-secondary f-w-600 w-75 f-s" data-toggle="modal" data-target="#large-Modal{{ $nhanvien->id }}">

                    @if(!isset($luong)) Tạo mới @elseif($luong->trangthai == 'Chưa thanh toán') Thanh toán @else Chi tiết @endif
                  </button>

                  <div class="modal fade show" id="large-Modal{{ $nhanvien->id }}" tabindex="-1" role="dialog" style="z-index: 1050;display: none; padding-right: 17px;">
                    <div class="modal-dialog modal-lg" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title">{{ isset($luong)? 'Chi tiết' : 'Tạo'}} phiếu lương</h4>

                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                          </button>
                        </div>
                        <div class="modal-body p-t-0  ">
                          <form method="post" action="{{route('payroll.store')}}" novalidate="">

                            <div class="modal-body">
                              @csrf
                              <div class="card table-card" style="margin-bottom: 15px">
                                <div class="card-header">
                                  <h5>Nhân viên</h5>
                                </div>

                                <div class="card-block pt-0 ">
                                  <div class="row ui-sortable" id="draggablePanelList">
                                    <div class="col-lg-12 col-xl-6 ui-sortable-handle">
                                      <div class="card-sub">
                                        <div class="card-block" style="margin-top: -20px">
                                          <h6 class="card-title col-sm-auto" style="float: left; margin:0px 10px 0px 0px; padding: 0">Họ tên</h6>
                                          <h6 class="card-title">
                                            <b> {{$nhanvien->hodem .' '. $nhanvien->ten}}</b></h6>
                                        </div>
                                        <div class="card-block" style="margin-top: -40px">
                                          <h6 class="card-title col-sm-auto" style="float: left; margin:0px 10px 0px 0px; padding: 0">
                                            Ngày sinh:</h6>
                                          <h6 class="card-title">
                                            <b>{{$nhanvien->ngaysinh}}</b></h6>
                                        </div>
                                        <div class="card-block" style="margin-top: -40px; padding-bottom:0">
                                          <h6 class="card-title col-sm-auto" style="float: left; margin:0px 10px 0px 0px; padding: 0">
                                            Điện thoại:</h6>
                                          <h6 class="card-title">
                                            <b>{{$nhanvien->sodienthoai}}</b></h6>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-lg-12 col-xl-6 ui-sortable-handle">
                                      <div class="card-sub">
                                        <div class="card-block" style="margin-top: -20px">
                                          <h6 class="card-title col-sm-auto" style="float: left; margin:0px 10px 0px 0px; padding: 0">
                                            Địa chỉ:</h6>
                                          <h6 class="card-title" style="display: inline-block;width: 260px;">
                                            <b>{{$nhanvien->diachi}}</b></h6>
                                        </div>
                                        <div class="card-block" style="margin-top: -40px">
                                          <h6 class="card-title col-sm-auto" style="float: left; margin:0px 10px 0px 0px; padding: 0">
                                            Username:</h6>
                                          <h6 class="card-title">
                                            <b>{{$nhanvien->user->name}}</b></h6>
                                        </div>

                                        <div class="card-block" style="margin-top: -40px; padding-bottom:0">
                                          <h6 class="card-title col-sm-auto" style="float: left; margin:0px 10px 0px 0px; padding: 0">
                                            Email:</h6>
                                          <h6 class="card-title">
                                            <b>{{$nhanvien->email}}</b></h6>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>

                              </div>

                              <div class="card table-card" style="margin-bottom: 15px">
                                <div class="card-header">
                                  <h5>Tổng lương thực tế</h5>
                                </div>
                                <div class="card-block pt-0">
                                  <div class="table-responsive pt-0">
                                    <input type="hidden" value="{{ $thang }}-1" name="thang">
                                    <table class="table table-hover" style="margin-bottom: 15px">
                                      <thead>
                                        <tr>
                                          <th>Lương cơ bản</th>
                                          <th>Tổng số công</th>
                                          <th>Phụ cấp chức vụ</th>
                                          {{-- @foreach($nhanvien->dsphucap as $phucap)
                                          <th>{{ $phucap->tenphucap }}</th>
                                          @endforeach --}}
                                          <th>Tổng phụ cấp</th>
                                          <th>Tổng lương</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        @php
                                        $cong = $nhanvien->layTongSoNgay($thang);
                                        @endphp
                                        @if($cong['tong'] != 0)
                                        <tr>
                                          @php
                                          $luongchinh = $nhanvien->chucvu->luongchinh;
                                          $phucapchucvu = $nhanvien->chucvu->phucap;
                                          $tongphucap = $phucapchucvu + $nhanvien->dsphucap->sum('sotien');
                                          $tongluong = round($cong['tong'] / 26 * $luongchinh + $tongphucap, -3);
                                          @endphp
                                          <td class="py-1">{{ number_format($luongchinh) }}</td>
                                          <td class="py-1">{{ $cong['tong'] }}</td>
                                          <td class="py-1">{{ number_format($phucapchucvu) }}</td>
                                          {{-- @foreach($nhanvien->dsphucap as $phucap)
                                          <td class="py-1">{{ number_format($phucap->sotien ) }}
                </td>
                @endforeach --}}
                <td class="py-1"> {{ number_format($tongphucap)  }} </td>
                <td class="py-1">{{ number_format($tongluong) }}</td>
              </tr>
              @else
              <tr>
                <td colspan="5" class="font-italic">Chưa có dữ liệu chấm công</td>
              </tr>
              @endif
            </tbody>

          </table>
        </div>
      </div>
    </div>

    <div class="card table-card">
      <div class="card-header">
        <h5>Các khoản khấu trừ</h5>
      </div>
      <div class="card-block pt-0">
        <div class="table-responsive pt-0">
          <input type="hidden" value="{{ $thang }}-1" name="thang">
          <table class="table table-hover m-b-0">
            @php
            $bhxh = App\Models\CauHinhLuong::layGiaTri('bhxh');
            $bhyt = App\Models\CauHinhLuong::layGiaTri('bhyt');
            $tienbhyt = round($tongluong * $bhyt / 100, -3);
            $tienbhxh = round($tongluong * $bhxh / 100, -3);
            @endphp
            <thead>
              <tr>
                <th>BHXH ({{ $bhxh }}%)</th>
                <th>BHYT ({{ $bhyt }}%)</th>
                <th>Tổng khấu trừ</th>
                <th>Thực lĩnh</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>{{ number_format($tienbhxh) }}</td>
                <td>{{ number_format($tienbhyt) }}</td>
                <td>{{ number_format($tienbhyt + $tienbhxh )}}</td>
                <td><b>{{ number_format($tongluong - $tienbhxh - $tienbhyt) }}</b></td>
              </tr>
            </tbody>

          </table>
        </div>
      </div>
    </div>

    <input type="hidden" name="cong" value="{{ $cong['tong'] }}">
    <input type="hidden" name="tongluong" value="{{ $tongluong }}">
    <input type="hidden" name="tongphucap" value="{{ $tongphucap }}">
    <input type="hidden" name="bhxh" value="{{ $tienbhxh }}">
    <input type="hidden" name="bhyt" value="{{ $tienbhyt }}">
    <input type="hidden" name="tongkhautru" value="{{ $tienbhyt + $tienbhxh }}">
    <input type="hidden" name="thuclinh" value="{{ $tongluong - $tienbhyt - $tienbhxh }}">
    <input type="hidden" name="nhan_vien_id" value="{{ $nhanvien->id }}">
    <input type="hidden" name="doituong" value="nhanvien">
    <input type="hidden" name="trangthai" value="Chưa thanh toán">

  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-default waves-effect " data-dismiss="modal" onclick="myReset()">Đóng</button>
    @if(!isset($luong))
    <input type="submit" class="btn btn-primary waves-effect waves-light" value="Tạo" />
    @elseif($luong->trangthai == 'Chưa thanh toán')
    <a class="btn btn-success" href="/administrators/payroll/thanhtoan/{{ $luong->id }}">Thanh toán</a>
    @elseif($luong->trangthai == 'Đã thanh toán')
    <a class="btn btn-success" href="/administrators/payroll/print/{{ $luong->id }}">In phiếu lương</a>
    @endif
  </div>
  </form>
</div>
</div>

</div>
</div>


</td>
</tr>
@endforeach
</tbody>
</table>
</div>

{{-- /* -------------------------------------------------------------------------- */
/*                              Modal them luong                              */
/* -------------------------------------------------------------------------- */ --}}


</div>
</div>
<script>
  // $(document).ready(function() {
  //   $('#thang').change(function() {
  //     $('.thang-copy').val($('#thang').val());
  //   });
  //   $('.thang-copy').val($('#thang').val());
  // });

</script>
