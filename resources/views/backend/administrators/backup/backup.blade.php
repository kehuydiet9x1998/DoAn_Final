@extends('backend.layout.index')


@section('content')

<style>
  {
    table-layout: fixed;
  }

</style>





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
                    <h5><i class="fa fa-store-alt"></i> Sao lưu và phục hồi</h5>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-6">
                    <div id="dom-table_filter" class="dataTables_filter">

                      <button class="btn btn-primary btn-sm waves-effect waves-light" data-toggle="modal" data-target="#large-Modal" style="float: right; margin-right: 30px; "><i class="fa fa-save"></i> Sao lưu</button>
                      <button class="btn btn-secondary btn-sm waves-effect waves-light" data-toggle="modal" data-target="#phuchoi-Modal" style="float: right; margin-right: 10px; "><i class="fa fa-history"></i> Phục hồi từ tệp</button>

                      <div class="modal fade show" id="large-Modal" tabindex="-1" role="dialog" style="z-index: 1050;display: none; padding-right: 17px;">
                        <div class="modal-dialog modal-lg" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 class="modal-title">Sao lưu dữ liệu</h4>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <form method="post" action="{{route('backup.store')}}" novalidate="" id="addform">
                                <div class="modal-body">
                                  <input type="hidden" name="_token" value="{{csrf_token()}}">
                                  {{ csrf_field() }}

                                  <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Tên tệp</label>
                                    <div class="col-sm-9">
                                      @php $ts = time(); @endphp

                                      <input type="text" class="form-control" id="filename" name="filename" placeholder="Nhập tên tệp" value="{{  date('Y-m-d-His', $ts) . '-backup-' . 'teky' . '.sql' }}">
                                      <span class="messages"></span>
                                    </div>
                                  </div>

                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default waves-effect " data-dismiss="modal" onclick="myReset()">Đóng</button>
                                  <input type="submit" class="btn btn-primary waves-effect waves-light" value="Sao lưu" />
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="modal fade show" id="phuchoi-Modal" tabindex="-1" role="dialog" style="z-index: 1050;display: none; padding-right: 17px;">
                        <div class="modal-dialog modal-lg" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 class="modal-title">Sao lưu dữ liệu</h4>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <form method="post" action="{{route('restore-from-file')}}" novalidate="" id="addform" enctype="multipart/form-data">
                                <div class="modal-body">
                                  <input type="hidden" name="_token" value="{{csrf_token()}}">
                                  {{ csrf_field() }}

                                  <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Tên tệp</label>
                                    <div class="col-sm-9">
                                      <input type="file" class="form-control" id="filename" name="filename">
                                      <span class="messages"></span>
                                    </div>
                                  </div>

                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default waves-effect " data-dismiss="modal" onclick="myReset()">Đóng</button>
                                  <input type="submit" class="btn btn-primary waves-effect waves-light" value="Phục hồi" />
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>


                    </div>
                  </div>
                </div>
                <div class="card-block">
                  @if(session()->has('success-message'))
                  <div class='alert alert-success'>
                    {{session('success-message')}}
                  </div>
                  @elseif(session()->has('error-message'))
                  <div class='alert alert-danger'>
                    {{session('error-message')}}
                  </div>
                  @endif
                  <div class="table-responsive">
                    <table class="table table-hover m-b-0 " id="datatable">
                      <thead>
                        <tr>
                          <th>Tên tệp tin</th>
                          <th>Database size</th>
                          <th>Ngày tạo</th>
                          <th>ACTIONS</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($backups as $backup)
                        <tr>
                          <td><a href="/{{  $backup->tenfile }}" class="link">{{ $backup->tenfile }}</a></td>
                          <td>{{ round($backup->dungluong, 3) }} MB</td>
                          <td>{{ $backup->created_at }}</td>
                          <td>
                            <a href="/administrators/restore/{{ $backup->tenfile }}" class="btn btn-sm btn-primary">Phục hồi dữ liệu</a>
                            <form style="display: inline" action="{{ route('backup.destroy', $backup->id) }}" method="post">
                              @csrf
                              @method('delete')
                              <button class="btn btn-sm btn-danger">Xóa</button></form>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                    <div class="modal fade show" id="edit-Modal" tabindex="-1" role="dialog" style="z-index: 1050;display: none; padding-right: 17px;">
                    </div>
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

  <script src="{{ asset('assets/js/my-script-2.js') }}"></script>
  <script>
    function myReset() {
      document.getElementById('main').reset();
    };

  </script>





  <script>
    $(document).
    ready(function() {
      // $('.show-modal').click(function(e) {
      //   id = $(this).data('id');
      //   $('#show-Modal').load("/contacts/students/" + id);
      //   $('#show-Modal').show();
      //   $('body').addClass('modal-open');


      //   $('.modal-backdrop').show();
      // });
      // $('.my_edit').click(function(e) {
      //   id = $(this).data('id')
      //   $('#edit-Modal').load("/contacts/students/" + id + '/edit');
      //   $('#edit-Modal').show();
      //   $('body').addClass('modal-open');


      //   $('.modal-backdrop').show();
      // });
    });

  </script>


  <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
  {{-- {!! $jsValidator->selector('#addform') !!} --}}



  @endsection
