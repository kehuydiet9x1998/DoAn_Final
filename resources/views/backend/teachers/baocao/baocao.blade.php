@extends('backend.layout.index')
@section('content')
<div class="page-header card">
  <div class="row align-items-end">
    <div class="col-lg-8">
      <div class="page-header-title">
        <i class="feather icon-home bg-c-blue"></i>
        <div class="d-inline">
          <h5>Báo cáo danh sách lớp học</h5>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="page-header-breadcrumb">
        <ul class=" breadcrumb breadcrumb-title">
          <li class="breadcrumb-item">
            <a href="index.html"><i class="feather icon-home"></i></a>
          </li>
          <li class="breadcrumb-item"><a href="#!">baocao</a> </li>
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
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5>DANH SÁCH LỚP HỌC</h5>
              </div>
              <button class="btn btn-success btn-round waves-effect waves-light" data-toggle="modal"
                data-target="#large-Modal" style="float: right; margin-right:30px; width: 170px;
                margin-left: auto;">
                <a href="{{route('baocao.create')}}">In báo cáo</a>
              </button>
              <div class="card-block table-border-style">
                <div class="table-responsive">
                  <table class="table table-bordered" id="datatable">
                    <thead>
                      <tr>
                        {{-- <th>TT</th> --}}
                        <th>ID Lớp học</th>
                        <th>Tên lớp học</th>
                        <th>Khóa học</th>
                        <th>Ngày bắt đầu</th>
                        <th>Ngày kết thúc</th>
                        <th>Giáo viên dạy</th>
                      </tr>
                    </thead>
                    @php
                    $dem = 1;
                    @endphp
                    <tbody>
                      @foreach ($lophocs as $lophoc)
                      <tr>
                        {{-- <td>{{$dem}}</td> --}}
                        <td>{{$lophoc->id}}</td>
                        <td>{{$lophoc->tenlop}}</td>
                        {{-- <>{{ $khoanthu->sohocsinh - $khoanthu->sohocsinhdadong }}</> --}}
                        <td>{{$lophoc->khoahoc->tenkhoahoc}}</td>
                        <td>{{$lophoc->ngaybatdau}}</td>
                        <td>{{$lophoc->ngayketthuc}}</td>
                        <td>{{$lophoc->giaovien->hodem.' '.$lophoc->giaovien->ten}}</td>
                      </tr>
                      @php
                      $dem++;
                      @endphp
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
