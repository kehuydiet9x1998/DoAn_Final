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
                    <h5>DANH SÁCH HỌC SINH</h5>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-6">
                    <div id="dom-table_filter" class="dataTables_filter" style="margin-left: -145px;">
                       <label style="display: flex">Tìm kiếm:<input type="search" class="form-control input-sm" placeholder="" aria-controls="dom-table" style="width: 250px; height: 25px;margin-top: 0px;margin-left: 10px;">
                         <button class="btn btn-success btn-round waves-effect waves-light" data-toggle="modal"
                            data-target="#large-Modal" style="margin-top: -6px;height: 35px;line-height: 13px; margin-left: 5px">Thêm học sinh</button>
                        @include('backend.contact.themhv-Modal')
                       </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-block">
                <div class="table-responsive">
                  <table class="table table-hover m-b-0" id="table">
                    <thead>
                      <tr>
                        <th>STT</th>
                        <th>Họ đệm</th>
                        <th>Tên</th>
                        <th>Ngày sinh</th>
                        <th>Giới tính</th>
                        <th>Trạng thái</th>
                        <th>Phụ huynh</th>
                        <th>Số cmnd</th>
                        <th>Số điện thoại</th>
                        <th>Email</th>
                        <th>Quê quán</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($students as $st)
                      <tr>
                        <td>{{$st->id}}</td>
                        <td>{{$st->hodem}}</td>
                        <td>{{$st->ten}}</td>
                        <td>{{$st->ngaysinh}}</td>
                        <td>{{$st->gioitinh}}</td>
                        <td>{{$st->trangthai}}</td>
                        <td>{{$st->hotenchame}}</td>
                        <td>{{$st->cmnd}}</td>
                        <td>{{$st->sodienthoai}}</td>
                        <td>{{$st->email}}</td>
                        <td>{{$st->diachi}}</td>
                        <td style="display: flex;">
                          <button type="button" class="btn edit btn-primary waves-effect" data-toggle="modal" data-target="#suahv-Modal"
                                  data-id="{{$st->id}}" style="background-color: white; border: none; padding: 0">
                            <i class="fa fa-edit f-w-600 f-16 m-r-15 text-c-green" style="font-size: 20px"></i>
                          </button>
                          @include('backend.contact.suahv-Modal')
                          <form action="{{route('students.destroy', $st->id)}}" method="post" style="margin-left: 2px">
                           @method('DELETE')
                           @csrf
                            <button class="btn btn-primary waves-effect" style="border: none;padding: 0px; margin-top: -10px; background-color: white">
                          <i class="feather icon-trash-2 f-w-600 f-16 m-r-15 text-c-red" style="margin:0; font-size: 20px"></i></button>
                        </form>
                      </td>

                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
                <div class="card-block" style="border-top: 1px solid #cccccc; padding-bottom: 10px; text-align: center">
                  <div style="padding-top: 10px; display: inline-block">
                    {{$students->links('vendor.pagination.bootstrap-4')}}
                  </div>
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
<script>
  function myReset() {
    document.getElementById('main').reset();
  };
</script>

<script>
  $(document).ready(function() {
    $('.btn .edit').click(function(e) {
      id = $(this).data('id');
      $('#suahv-Modal').load('/contacts/student/' + id);
      alert('/contacts/student/' + id)
    })
  });
</script>
@endsection
