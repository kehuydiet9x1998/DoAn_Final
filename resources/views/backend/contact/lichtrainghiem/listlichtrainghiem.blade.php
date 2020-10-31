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
                    <h5>Danh sách đóng học phí của học sinh</h5>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-6">
                    @include('backend.contact.lichtrainghiem.add_lichtrainghiem_modal')
                  </div>
                </div>
              </div>
              <div class="card-block">
                <div class="table-responsive">
                  <table class="table table-hover m-b-0" id="datatable">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Tên học sinh</th>
                        <th>Thời gian</th>
                        <th>Trang thái</th>
                        <th>Ghi chú</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($hocsinhs as $hocsinh)
                      <tr>
                        <td>{{$hocsinh->id}}</td>
                        <td>{{$hocsinh->hocSinh->hodem .' '.$hocsinh->hocSinh->ten}}</td>
                        <td>{{$hocsinh->trangthai}}</td>
                        <td>{{substr($hocsinh->thoigian,0,10)}}</td>
                        <td>{{$hocsinh->ghichu}}</td>
                        <td style="display: flex; width: 64px;">
                          <div>
                            {{-- Xem chi tiết nhân viên --}}
                            <button data-id="{{$hocsinh->id}}" type="button" class="btn btn-primary waves-effect" data-toggle="modal" data-target="#show-Modal" style="background-color: white; border: none; padding: 0" id="">
                              <i class="fa fa-eye f-w-600 f-16 m-r-15 text-c-green"></i>
                            </button>
                            <div class="modal fade show" id="show-Modal" tabindex="-1" role="dialog" style="z-index: 1050;display: none; padding-right: 17px;">
                            </div>
                          </div>
                          <!-- Modal Sua -->
                          <div>
                            <button class="my_edit" data-id="{{$hocsinh->id}}" data-toggle="modal" data-target="#edit-Modal">
                              <i class="icon feather icon-edit f-w-600 f-16 m-r-15 text-c-green"></i>
                            </button>
                            <div class="modal fade show" id="edit-Modal" tabindex="-1" role="dialog" style="z-index: 1050;display: none; padding-right: 17px;">
                            </div>
                          </div>
                          {{-- Xóa nhân viên --}}
                          <div>
                            <form action="{{route('lichtrainghiem.destroy', $hocsinh->id)}}" method="post">
                              @method('DELETE')
                              @csrf
                              <button style="border: none; padding: 2px 0px; margin-top: -1px;" onclick="return confirm ('Bạn có muốn xóa không')">
                                <i class="feather icon-trash-2 f-w-600 f-16 m-r-15 text-c-red" style="margin:0;">
                                </i>
                              </button>
                            </form>
                          </div>
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
<script>
  function myReset() {
    document.getElementById('main').reset();
  };

</script>

<script>
  $(document).
  ready(function() {
    $('.btn.btn-primary').click(function(e) {
      id = $(this).data('id');
      $('#show-Modal').load("/contacts/lichtrainghiem/" + id);
      $('#show-Modal').show();
      $('body').addClass('modal-open');


      $('.modal-backdrop').show();
    });
    $('.my_edit').click(function(e) {
      id = $(this).data('id')
      $('#edit-Modal').load("/contacts/lichtrainghiem/" + id + '/edit');
      $('#edit-Modal').show();
      $('body').addClass('modal-open');


      $('.modal-backdrop').show();

    })
  });

</script>

<script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
{!! $jsValidator->selector('#addform') !!}


@endsection
