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
                    <h5>Giáo viên bạn đang theo học</h5>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-6">
                    <div id="dom-table_filter" class="dataTables_filter">
                      <label style="display: flex">Tìm kiếm:<input type="search" id="search" class="form-control input-sm" placeholder="" aria-controls="dom-table" style="width: 250px; height: 25px;margin-top: 0px;margin-left: 10px;">
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-block" id="data">
                <div class="table-responsive">
                  <table class="table table-hover m-b-0">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Giáo viên</th>
                        <th>Số điện thoại</th>
                        <th>Tên khóa học</th>
                        <th>Ngày vào học</th>
                        <th>Trạng thái</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($dsphanlop as $phanlop)
                      <tr>
                        <td>{{$phanlop->lophoc->giaovien->id}}</td>
                        <td>{{$phanlop->lophoc->giaovien->hodem.' '.$phanlop->lophoc->giaovien->ten}}</td>
                        <td>{{$phanlop->lophoc->giaovien->sodienthoai}}</td>
                        <td>
                          <div class="d-inline-block align-middle">
                            <a href="{{route('allcourses.show', $phanlop->lophoc->khoahoc->id)}}">
                              <div class="d-inline-block">
                                <h6 class="name_link_green">{{
                                  $phanlop->lophoc->khoahoc->tenkhoahoc }}</h6>
                              </div>
                            </a>
                          </div>
                        </td>
                        <td>{{($phanlop->lophoc->ngaybatdau)}}</td>
                        <td>{{$phanlop->lophoc->trangthai}}</td>
                        <td>
                          <div class="col-sm-12" style="text-align: center; margin-top: 5px">
                            <button style="border: none; padding: 2px 0px; margin-top: -1px; background-color: white">
                              <a class="fa fa-commenting-o" aria-hidden="true" style="margin:0; background-color: white" href="{{route('review-giaovien.show',$phanlop->id)}}">
                              </a>
                            </button>
                          </div>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
                {{-- <div style="float:right; margin-right:20px">
                  {{ $khoahocs->links()}}
              </div> --}}
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
