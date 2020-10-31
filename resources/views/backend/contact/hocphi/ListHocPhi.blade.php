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
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <h5>Danh sách đóng học phí của học sinh</h5>
                    <a href="{{ route('tinhhocphi') }}" class="btn btn-primary btn-round float-right m-r-5">Làm mới</a>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-6">
                  </div>
                </div>
              </div>
              <div class="card-block">
                <div class="table-responsive">
                  <table class="table table-hover m-b-0" id="datatable">
                    <thead>
                      <tr>
                        <th>Mã HĐ</th>
                        <th>Học sinh</th>
                        <th>Số tiền thu</th>
                        <th>Số tiền đã đóng</th>
                        <th>Số tiền nợ</th>
                        <th style="text-align: center">Trạng thái</th>
                        <th style="text-align: center">Cập nhật</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($hocphi as $hp)

                      <tr>
                        <td>{{$hp->id}}</td>
                        <td>
                          <div class="d-inline-block align-middle">
                            <div class="d-inline-block">
                              <a href="{{route('students.show', $hp->hoc_sinh_id)}}">
                                <h6 class="name_link_green">{{$hp->hocsinh->hodem .' '. $hp->hocsinh->ten}}</h6>
                              </a>
                              <p class=" m-t-0 text-muted" style="margin-bottom: 5px">Phụ huynh: {{$hp->hocsinh->hotenchame}}</p>
                              <p class=" m-b-0 text-muted">SĐT: {{$hp->hocsinh->sodienthoai}}</p>
                              {{-- <p class="m-t-2 m-b-0 text-muted">Giáo viên: Học viện TEKY</p> --}}
                            </div>
                          </div>

                        </td>

                        <td>{{number_format($hp->canthu). ' đ'}}</td>
                        <td>{{number_format($hp->dadong). ' đ'}}</td>
                        <td>{{number_format($hp->conno). ' đ'}}</td>

                        <td style="text-align: center"><label class="badge badge-default">{{$hp->trangthai}}</label></td>
                        <td>
                          <div>
                            <button data-id="{{$hp->id}}" class="btn waves-effect waves-light btn-round my_edit" data-toggle="modal" data-target="#edit-Modal" style="border: none; background-color: transparent;width:5px">
                              <i class="fa fa-edit text-c-green" style="font-weight: bold; font-size: 20px"></i>
                            </button>
                            <button data-id="{{$hp->id}}" class="btn waves-effect waves-light btn-round histories" data-toggle="modal" data-target="#history-Modal" style="border: none; background-color: transparent;width:5px">
                              <i class="fa fa-list-alt text-c-blue" style="font-weight: bold; font-size: 20px"></i>
                            </button>

                          </div>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
                <div class="modal fade show" id="edit-Modal" tabindex="-1" role="dialog" style="z-index: 1050;display: none; padding-right: 17px;"></div>
                <div class="modal fade show" id="history-Modal" tabindex="-1" role="dialog" style="z-index: 1050;display: none; padding-right: 17px;"></div>
                <div class="modal md-effect-1 md-show" id="phieuthu-Modal" data-backdrop="false" tabindex="-1" role="dialog" style="z-index: 1050;display: none; padding-right: 17px;">


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
<script src="{{ asset('assets/js/printThis.js') }}"></script>

<script>
  $(document).
  ready(function() {
    $('.my_edit').click(function(e) {
      id = $(this).data('id')
      $('#edit-Modal').load("/contacts/hocphis/" + id + '/edit');
      $('#edit-Modal').show();
      $('body').addClass('modal-open');
      $('.modal-backdrop').show();
    });

    $('.histories').click(function() {
      id = $(this).data('id')
      $('#history-Modal').load("/contacts/hocphis/" + id);
      $('#history-Modal').show();
      $('body').addClass('modal-open');
      $('.modal-backdrop').show();
    });
  });

  function myReset2() {
    $('#phieuthu-Modal').hide();
    $('body').removeClass('modal-open');
    // $('.modal-backdrop').hide();
  }

</script>
@endsection
