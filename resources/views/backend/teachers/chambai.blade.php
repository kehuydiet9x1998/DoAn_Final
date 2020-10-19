@extends('backend.layout.index')
@section('content')
<div class="pcoded-inner-content">
  <div class="main-body">
    <div class="page-wrapper">
      <div class="page-body">
        <div class="row">
          <div class="col-md-12">
            <div class="card table-card">
              <div class="card-header">
                <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-6">
                    <h5>DANH SÁCH CHẤM BÀI TẬP</h5>
                  </div>

                  <div class="col-sm-12 col-xl-3 m-b-30">
                    <h4 class="sub-title" style="padding: 3px; margin: 0">Trạng thái</h4>
                    <select name="select" class="form-control form-control-inverse fill">
                      <option value="opt1">Chưa chấm</option>
                      <option value="opt2">Đã chấm</option>
                    </select>
                  </div>
                  <div class="col-sm-12 col-xl-3 m-b-30">
                    <h4 class="sub-title" style="padding: 3px; margin: 0">Lớp học</h4>
                    <select name="select" class="form-control form-control-inverse fill">
                      <option value="opt1">LP - 1</option>
                      <option value="opt2">LP - 2</option>
                      <option value="opt3">LP - 3</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="card-block">
                <div class="table-responsive">
                  <table class="table table-hover m-b-0">
                    <thead>
                      <tr>
                        <th>HỌC SINH</th>
                        <th>LỚP HỌC</th>
                        <th>BÀI HỌC</th>
                        <th>Điểm</th>
                        <th>TRẠNG THÁI</th>
                        <th>XEM</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($dsbuoihoc as $buoihoc)
                      @foreach($buoihoc->lophoc->dslophoc as $phanlop)
                      @php
                      $baitap = $buoihoc->dsbaitap->firstWhere('hoc_sinh_id', $phanlop->hoc_sinh_id);
                      @endphp
                      @if($baitap)

                      <tr>
                        <td>
                          <div class="d-inline-block align-middle">
                            <div class="d-inline-block">
                              <h6>{{$phanlop->hocsinh->hodem.' '.$phanlop->hocsinh->ten}}</h6>
                            </div>
                          </div>
                        </td>
                        <td>
                          <div class="d-inline-block align-middle">
                            <div class="d-inline-block">
                              <a href={{route('class.show',$buoihoc->lopHoc->id)}}>

                                <h6 class="name_link_green">{{$buoihoc->lopHoc->tenlop}}</h6>
                              </a>
                              {{-- <p style="margin-bottom:5px" class="text-muted">{{$baitap->buoihoc->lopHoc->khoahoc->tenkhoahoc}}</p> --}}
                              {{-- <p class="m-b-0 text-muted">Giáo viên:{{$baitap->buoihoc->giaovien->hodem.' '.$baitap->buoihoc->giaovien->ten}}</p> --}}
                            </div>
                          </div>
                        </td>

                        <td>{{$buoihoc->baigiang->tenbaigiang}}</td>
                        @php
                        $socau = App\Models\BuoiHoc::sobaitap($phanlop->hoc_sinh_id, $buoihoc->id);
                        $socaudung = App\Models\BuoiHoc::socaudung($phanlop->hoc_sinh_id, $buoihoc->id);
                        $diem = round($socaudung/$socau,2)*10;
                        @endphp
                        <td>{{$baitap->trangthai == 'Đã hoàn thành'? "$diem/10": ''}} </td>
                        <td><label class="badge badge-inverse-{{$baitap->trangthai == 'Đã hoàn thành'? 'success': 'danger'}}">{{$baitap->trangthai}}</label></td>
                        <td>
                          @if($baitap->trangthai == 'Đã hoàn thành')
                          <a href="/teachers/xembaitap/{{$phanlop->hoc_sinh_id}}/{{$buoihoc->id}}">
                            <i class="fa fa-eye f-w-600 f-16 m-r-15 text-c-green"></i></a>
                          @endif
                        </td>
                      </tr> @endif

                      @endforeach
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
@endsection
