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
                  <div class="col-xs-12 col-sm-12 col-md-6">
                    <h5>Danh sách học cụ</h5>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-6">
                    <button type="button" class="btn btn-success btn-round waves-effect" data-toggle="modal" data-target="#large-Modal" style="float: right; margin-right:20px">Thêm học cụ</button>
                    @include('backend.administrators.hoccu.add-hoccu')
                    <button type="button" class="btn btn-primary waves-effect " data-toggle="modal" data-target="#div-Modal" style="float: right; margin-right:20px">Phia chia học cụ</button>
                    @include('backend.administrators.hoccu.div_hoccu')
                  </div>
                </div>
              </div>
              <div class="card-block">
                @if(session()->has('success-message'))
                <div class="alert alert-success">
                  {{session('success-message')}}
                </div>
                @elseif(session()->has('error-message'))
                <div class="alert alert-danger">
                  {{session('error-message')}}
                </div>
                @endif

                <div class="alert-success"></div>
                <div class="table-responsive">
                  <table class="table table-hover m-b-0" id="datatable">
                    <thead>
                      <tr>
                        <th>STT</th>
                        <th>TÊN HỌC CỤ</th>
                        <th>HÌNH ẢNH</th>
                        <th>SỐ LƯỢNG</th>
                        <th>CẤP PHÁT</th>
                        <th>ACTIONS</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($khohoccus as $khc)
                      <tr>
                        <td>
                          <div class="d-inline-block align-middle">
                            <div class="d-inline-block">
                              <h6>{{$khc->id}}</h6>
                            </div>
                          </div>
                        </td>
                        <td style="white-space: normal">
                          <h6 class="f-w-600 text-c-green">{{$khc->tenhoccu}}</h6>
                        </td>
                        <td><img src="{{asset($khc->hinhanhhoccu)}}" class="img-fluid" width="100px" alt=""></td>
                        <td style="text-align: center">{{$khc->soluong}}</td>
                        <td style="text-align: center">{{$khc->capphat}}</label></td>
                        <td>
                          <ul style="display: flex">
                            <li>
                              <button style="border: none; padding: 2px 0px; margin-top: -1px; margin-left: 5px;background-color: transparent" data-toggle="modal" data-target="#plus-Modal" data-id="{{$khc->id}}" class="my_plus">
                                <i class="fa fa-plus f-w-600 f-16 m-r-15 text-c-blue" style="margin:0; font-size: 20px"></i></button>
                              <div class="modal fade show" id="plus-Modal" tabindex="-1" role="dialog" style="z-index: 1050;display: none; padding-right: 17px;"></div>
                            </li>
                            <li>
                              <button style="border: none; padding: 2px 0px; margin-top: -1px; margin-left: 5px;background-color: transparent" data-toggle="modal" data-target="#edit-Modal" data-id="{{$khc->id}}" class="my_edit">
                                <i class="fa fa-edit f-w-600 f-16 m-r-15 text-c-green" style="margin:0; font-size: 20px"></i></button>
                              <div class="modal fade show" id="edit-Modal" tabindex="-1" role="dialog" style="z-index: 1050;display: none; padding-right: 17px;"></div>
                            </li>
                            <li>
                              <form action="{{route('admin-hoccu.destroy', $khc->id)}}" method="post">
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
<script src="{{ asset('assets/js/bootstrap-select.min.js') }}"></script>
<script>
  $(document).
  ready(function() {
    $('.my_edit').click(function(e) {
      id = $(this).data('id')
      $('#edit-Modal').load("/administrators/admin-hoccu/" + id + '/edit');
      $('#edit-Modal').show();
      $('body').addClass('modal-open');
      $('.modal-backdrop').show();
    });
    $('.my_plus').click(function(e) {
      id = $(this).data('id')
      $('#plus-Modal').load("/administrators/admin-hoccu-plus/" + id + '/edit');
      $('#plus-Modal').show();
      $('body').addClass('modal-open');
      $('.modal-backdrop').show();
    });

  });

</script>
<script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
{!! $jsValidator->selector('#addform') !!}
@endsection
