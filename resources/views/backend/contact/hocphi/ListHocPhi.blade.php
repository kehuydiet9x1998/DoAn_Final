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
                    <h5>Danh sách đóng học phí của học viên</h5>
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
                        <th>Tên HV</th>
                        <th>Mã HV</th>
                        <th>Cần thu</th>
                        <th>Đã đóng</th>
                        <th>Còn nợ</th>
                        <th style="text-align: center">Trạng thái</th>
                        <th style="text-align: center">Cập nhật</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($hocphi as $hp)

                      <tr>
                        <td>{{$hp->id}}</td>
                        <td>{{$hp->hocsinh->hodem .' '. $hp->hocsinh->ten}}</td>
                        <td>{{$hp->hoc_sinh_id}}</td>
                        <td>{{$hp->canthu}}</td>
                        <td>{{$hp->dadong}}</td>
                        <td>{{$hp->conno}}</td>
                        <td style="text-align: center"><label class="badge badge-default">{{$hp->trangthai}}</label></td>
                        <td>
                          <div>
                            <button data-id="{{$hp->id}}" class="btn waves-effect waves-light btn-round my_edit" data-toggle="modal"
                                    data-target="#edit-Modal" style="border: none; background-color: transparent">
                              <i class="fa fa-edit text-c-green" style="font-weight: bold; font-size: 20px"></i>
                            </button>
                          </div>
                        </td>
                      </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
                <div class="modal fade show" id="edit-Modal" tabindex="-1" role="dialog" style="z-index: 1050;display: none; padding-right: 17px;"></div>
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
  $(document).
  ready(function () {
    $('.my_edit').click(function (e) {
      id = $(this).data('id')
      $('#edit-Modal').load("/contacts/hocphis/" + id + '/edit');
      $('#edit-Modal').show();
      $('.modal-backdrop').show();

    })
  });
</script>
@endsection
