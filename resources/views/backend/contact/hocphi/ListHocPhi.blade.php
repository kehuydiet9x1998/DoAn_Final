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
                  <table class="table table-hover m-b-0">
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
                      <tr>
                        <td>1</td>
                        <td>Nguyễn Hải Minh</td>
                        <td>HV - 001</td>
                        <td>23000000</td>
                        <td>0</td>
                        <td>23000000</td>
                        <td style="text-align: center"><label class="badge badge-default">Chưa hoàn thành</label></td>
                        <td>
                          <div>
                            <button data-id="1" class="btn waves-effect waves-light btn-round" data-toggle="modal"
                                    data-target="#hocphi-Modal" style="border: none; background-color: transparent">
                              <i class="fa fa-edit text-c-green" style="font-weight: bold; font-size: 20px"></i>
                            </button>
                            @include('backend.contact.hocphi.Edit_HocPhi_Modal')
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Nguyễn Hải Hà</td>
                        <td>HV - 002</td>
                        <td>23000000</td>
                        <td>23000000</td>
                        <td>0</td>
                        <td style="text-align: center"><label class="badge badge-success">Hoàn thành</label></td>
                        <td>
                          <div>
                            <button data-id="1" class="btn waves-effect waves-light btn-round" data-toggle="modal"
                                    data-target="#hocphi-Modal" style="border: none; background-color: transparent" disabled>
                              <i class="fa fa-edit text-c-green" style="font-weight: bold; font-size: 20px"></i>
                            </button>
                            @include('backend.contact.hocphi.Edit_HocPhi_Modal')
                          </div>
                        </td>
                      </tr>
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
  $(document).
  ready(function () {
    $('.btn.btn-primary').click(function (e) {
      id = $(this).data('id');
      $('#show-Modal').load("/contacts/hocphis/" + id);
      $('#show-Modal').show();
      $('.modal-backdrop').show();
    });
    $('.my_edit').click(function (e) {
      id = $(this).data('id')
      $('#edit-Modal').load("/contacts/hocphis/" + id + '/edit');
      $('#edit-Modal').show();
      $('.modal-backdrop').show();

    })
  });
</script>

@endsection
