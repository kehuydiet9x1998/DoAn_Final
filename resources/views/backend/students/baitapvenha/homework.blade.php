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
                  <div class="col-sm-12 col-xl-3 m-b-30">
                    <h5>Danh sách bài tập về nhà</h5>
                  </div>
                </div>
                <div class="row" style="display:flex; align-items:center">
                  <div class="col-sm-12 col-xl-3 m-b-30">
                    <select name="select" class="form-control form-control-inverse fill">
                      <option value="opt1">Lọc theo</option>
                      <option value="opt1">Tất cả</option>
                      <option value="opt2">Đã làm BTVN</option>
                      <option value="opt3">Chưa làm BTVN</option>
                    </select>
                  </div>
                  <div class="col-sm-12 col-xl-3 m-b-30">
                    <select name="select" class="form-control form-control-inverse fill">
                      <option value="opt1">Lọc theo tên lớp</option>
                      <option value="opt1">Tất cả</option>
                      <option value="opt2">Xưởng lắp ráp ROBOT</option>
                      <option value="opt3">Thiết kế và lập trình web</option>
                    </select>
                  </div>
                  <div class="col-sm-12 col-xl-6 m-b-30">
                    <button class="btn btn-primary btn-round waves-effect waves-light">
                      <i class="fa fa-filter"></i>
                      Lọc</button>
                    <button data-id="1" class="btn waves-effect waves-light btn-round" style="margin-left: 20px">
                      <a style="font-size: 14px;" href="home-work/1">LÀM BÀI TẬP HÔM NAY</a>
                    </button>
                  </div>
                </div>
              </div>
              <div class="card-block">
                <div class="table-responsive">
                  <table class="table table-hover m-b-0">
                    <thead>
                      <tr>
                        <th>Mã lớp</th>
                        <th>Giáo viên</th>
                        <th>Buổi học</th>
                        <th>Trạng thái</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($buoihocs as $buoihoc)
                      <tr>
                        <td>
                          <div class="d-inline-block align-middle">
                            <div class="d-inline-block">
                              <a href={{route('class.show',$buoihoc->lopHoc->id)}}>

                                <h6 class="name_link_green">{{$buoihoc->lopHoc->tenlop}}</h6>
                              </a>
                              <p>{{$buoihoc->lopHoc->khoahoc->tenkhoahoc}}</p>

                            </div>
                          </div>
                        </td>
                        <td>
                          <h6>{{$buoihoc->giaovien->hodem.' '.$buoihoc->giaovien->ten}}</h6>
                        </td>
                        <td style="padding-left: 30px">{{$buoihoc->id}}</td>
                        <td><label class="badge badge-inverse-success">{{'chưa biết viết gì'}}</label>
                        </td>
                        <td>
                          <a href="{{route('home-work.show',$buoihoc->id)}}"
                            style="background-color: white; border: none; padding: 0; text-align: center">
                            <i class="fa fa-edit f-w-600 f-16 m-r-15 text-c-green" style="font-size: 16px">
                              <h5 style="color: black; font-size: 14px">
                                BTVN
                              </h5>
                            </i>
                          </a>
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
@endsection
@section('script')
<script type="text/javascript" src="{{asset('assets/js/form-validation.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/validate.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/underscore-min.js')}}"></script>
@endsection
