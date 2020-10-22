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
                    <h5>Danh sách khóa học</h5>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-6">
                    <div id="dom-table_filter" class="dataTables_filter">
                        <a href="/administrators/courses/create">
                          <button id='add' class="btn btn-success btn-round waves-effect waves-light"
                                  style="height: 35px;line-height: 13px; margin-left: 5px; float: right">Thêm khóa học</button>
                        </a>
                    </div>
                  </div>
                </div>

              </div>
              <div class="card-block">
                  <div class="table-responsive">
                    <table class="table table-hover m-b-0" id="datatable">
                      <thead>
                      <tr>
                        <th>ID</th>
                        <th>Tên khóa học</th>
                        <th>Học phí</th>
                        <th>Độ tuổi</th>
                        <th>Loại khóa học</th>
                        <th>Level</th>
                        <th>Actions</th>
                      </tr>
                      </thead>
                      <tbody>
                      @foreach($khoahocs as $khoahoc)
                        <tr>
                          <td>{{$khoahoc->id}}</td>
                          <td>
                            <div class="d-inline-block align-middle">
                              <a href="{{route('courses.show', $khoahoc->id)}}">
                                <div class="d-inline-block">
                                  <h6 class="name_link_green">{{$khoahoc->tenkhoahoc }}</h6>
                                  <p class="text-muted m-b-0"></p>
                                </div>
                              </a>
                            </div>
                          </td>
                          <td>{{number_format($khoahoc->hocphi).'đ'}}</td>
                          <td>{{$khoahoc->dotuoi}}</td>
                          <td>
                            <label class="badge badge-inverse-primary">{{$khoahoc->loaiKhoaHoc->tenloaikhoahoc}}</label>
                          </td>
                          <td>
                            <label class="badge badge-inverse-primary">{{$khoahoc->level->tenlevel}}</label>
                          </td>
                          <td style="display: flex">
                            <a href="{{route('courses.edit',$khoahoc->id)}}">
                            <button style="border: none; padding: 2px 0px; margin-top: -1px; background-color: transparent">
                              <i class="fa fa-edit f-w-600 f-16 m-r-15 text-c-green" style="margin:0; font-size: 20px"></i></button>
                            </a>
                            <form action="{{route('courses.destroy', $khoahoc->id)}}" method="post">
                              @method('DELETE')
                              @csrf
                              <button style="border: none; padding: 2px 0px; margin-top: -1px; margin-left: 5px;background-color: transparent"
                                      onclick="return confirm ('Bạn có muốn xóa không')">
                                <i class="feather icon-trash-2 f-w-600 f-16 m-r-15 text-c-red" style="margin:0; font-size: 20px"></i></button>
                            </form>
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

