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
                    <h5>Các khoản chi</h5>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-6">
                    <div id="dom-table_filter" class="dataTables_filter">
                      <button class="btn btn-success btn-round waves-effect waves-light" data-toggle="modal" data-target="#large-Modal" style="height: 35px;line-height: 13px;float: right; margin-right: 30px; ">Thêm mới</button>
                      <div class="modal fade show" id="large-Modal" tabindex="-1" role="dialog" style="z-index: 1050;display: none; padding-right: 17px;">
                        <div class="modal-dialog modal-lg" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 class="modal-title">Thêm phiếu chi</h4>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <form method="post" action="{{route('phieuchi.store')}}" novalidate="" id="addform">
                                <div class="modal-body">
                                  <input type="hidden" name="_token" value="{{csrf_token()}}">
                                  {{ csrf_field() }}
                                  <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Lý do</label>
                                    <div class="col-sm-9">
                                      <input type="text" class="form-control" name="lydo" id="lydo" placeholder="Nhập lý do chi">
                                      <span class="messages"></span>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Số tiền</label>
                                    <div class="col-sm-9">
                                      <input type="text" class="form-control autonumber" data-a-sep="," name="sotien" placeholder="Nhập số tiền">
                                      <span class="messages"></span>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <label class="col-sm-3 col-form-label">Ghi chú</label>
                                    <div class="col-sm-9">
                                      <textarea name="ghichu" class="form-control" placeholder="Ghi chú"></textarea>
                                      <span class="messages"></span>
                                    </div>
                                  </div>

                                  <div class="row">
                                    <label class="col-sm-3 col-form-label">Người chi</label>
                                    <div class="col-sm-9">
                                      <select name="nhan_vien_id" class="form-control" placeholder="Ghi chú">
                                        <option value="">-- Chọn nhân viên --</option>
                                        @foreach(App\Models\Nhanvien::all() as $nhanvien)
                                        <option value="{{ $nhanvien->id }}">{{ $nhanvien->id . ' - '. $nhanvien->hodem. ' '. $nhanvien->ten }}</option>
                                        @endforeach
                                        <span class="messages"></span>
                                      </select>
                                    </div>
                                  </div>


                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default waves-effect " data-dismiss="modal" onclick="myReset()">Đóng</button>
                                  <input type="submit" class="btn btn-primary waves-effect waves-light" value="Thêm" />
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
                <div class="card-block" style="">
                  <div class="table-responsive">
                    <table class="table table-hover m-b-0 " id="datatable">
                      <thead>
                        <tr>
                          <th>STT</th>
                          <th>Ngày tạo</th>
                          <th>Người tạo</th>
                          <th>Lý do</th>
                          <th>Số tiền</th>
                          <th>Ghi chú</th>
                          <th class="noVis">
                            Actions
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($phieuchis as $phieuchi)
                        <tr>
                          <td>{{$phieuchi->id}}</td>
                          <td><i class="fa fa-calendar-check"></i> {{ date('d-m-Y', strtotime($phieuchi->ngaytao)) }}</td>
                          <td>{{$phieuchi->nhanvien->hodem. ' ' .$phieuchi->nhanvien->ten}}</td>
                          <td>{{$phieuchi->lydo}}</td>
                          <td>{{number_format($phieuchi->sotien)}}</td>
                          <td>
                            {{ $phieuchi->ghichu }}
                          </td>
                          <td style="display: flex;">
                            <a target="_blank" href="printphieuchi/{{ $phieuchi->id }}" class="text-c-blue"> <i class="fa fa-print"></i></a>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>

                    <div class="modal fade show" id="edit-Modal" tabindex="-1" role="dialog">
                    </div>
                    <div class="modal fade show" id="show-Modal" tabindex="-1" role="dialog" style="z-index: 1050;display: none; padding-right: 17px;">
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

  <script>
    function myReset() {
      document.getElementById('main').reset();
    };

  </script>

  <script>
    $(document).
    ready(function() {
      $('.show-modal').click(function(e) {
        id = $(this).data('id');
        $('#show-Modal').load("/contacts/students/" + id);
        $('#show-Modal').show();
        $('body').addClass('modal-open');


        $('.modal-backdrop').show();
      });
      $('.my_edit').click(function(e) {
        id = $(this).data('id')
        $('#edit-Modal').load("/contacts/students/" + id + '/edit');
        $('#edit-Modal').show();
        $('body').addClass('modal-open');


        $('.modal-backdrop').show();
      });
    });

  </script>


  {{-- <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
  {!! $jsValidator->selector('#addform') !!} --}}



  @endsection
