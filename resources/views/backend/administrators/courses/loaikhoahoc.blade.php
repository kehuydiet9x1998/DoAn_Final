@extends('backend.layout.index')
@section('content')
  @php
    $menu = true;
  @endphp
  <div class="pcoded-inner-content">
    <div class="main-body">
      <div class="page-wrapper">
        <div class="page-body">
          <div class="row">
            <div class="col-md-12">
              <div class="card table-card">
                <div class="card-header">
                  <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-7">
                      <h5>Danh sách loại khóa học</h5>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-5">
                      <button type="button" class="btn btn-success btn-round waves-effect" data-toggle="modal" data-target="#large-Modal" style="float: right; margin-right:20px">Thêm phòng học</button>
                      @include('backend.administrators.courses.add-loaikhoahoc')
                    </div>
                  </div>
                </div>
                <div class="card-block">
                  <div class="table-responsive">
                    <table class="table table-hover m-b-0" id="datatable">
                      <thead>
                      <tr>
                        <th>STT</th>
                        <th>TÊN LOẠI KHÓA HỌC</th>
                        <th>MÔ TẢ</th>
                        <th>ACTIONS</th>
                      </tr>
                      </thead>
                      <tbody>
                      @foreach($loaikhoahocs as $lkh)
                        <tr>
                          <td>
                            <div class="d-inline-block align-middle">
                              <div class="d-inline-block">
                                <h6>{{$lkh->id}}</h6>
                              </div>
                            </div>
                          </td>
                          <td>{{$lkh->tenloaikhoahoc}}</td>
                          <td style="white-space: normal">{{$lkh->mota}}</td>
                          <td>
                            <ul style="display: flex">
                              <li>
                                <button style="border: none; padding: 2px 0px; margin-top: -1px; margin-left: 5px;background-color: transparent" data-toggle="modal" data-target="#edit-Modal" data-id="{{$lkh->id}}" class="my_edit">
                                  <i class="fa fa-edit f-w-600 f-16 m-r-15 text-c-green" style="margin:0; font-size: 20px"></i></button>
                                <div class="modal fade show" id="edit-Modal" tabindex="-1" role="dialog" style="z-index: 1050;display: none; padding-right: 17px;"></div>
                              </li>
                              <li>
                                <form action="{{route('loaikhoahoc.destroy', $lkh->id)}}" method="post">
                                  @method('DELETE')
                                  @csrf
                                  <button style="border: none; padding: 2px 0px; margin-top: -1px; margin-left: 5px;background-color: transparent" onclick="return confirm ('Bạn có muốn xóa không')">
                                    <i class="fa fa-trash-o f-w-600 f-16 m-r-15 text-c-red" style="margin:0; font-size: 20px"></i></button>
                                </form>
                              </li>
                            </ul>
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
  @parent


  <script src="{{ asset('assets/js/bootstrap-select.min.js') }}"></script>

  <script>
    $(document).
    ready(function() {
      $('.my_edit').click(function(e) {
        id = $(this).data('id')
        $('#edit-Modal').load("/administrators/loaikhoahoc/" + id + '/edit');
        $('#edit-Modal').show();
        $('body').addClass('modal-open');
        $('.modal-backdrop').show();
      });


    });

  </script>
  <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
  {!! $jsValidator->selector('#addform') !!}
@endsection