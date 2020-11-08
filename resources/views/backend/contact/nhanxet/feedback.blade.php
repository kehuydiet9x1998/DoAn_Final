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
                    <h5>DANH SÁCH NHẬN XÉT</h5>
                  </div>
                </div>
              </div>
              <div class="card-block">
                <div class="table-responsive">
                  <table class="table table-hover m-b-0" id="datatable">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Thời gian</th>
                        <th>Nội dung</th>
                        {{-- <th>Nội dung</th> --}}
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($feedback as $fb)
                      <tr>
                        <td>{{$fb->id}}</td>
                        <td>{{$fb->user->username}}</td>
                        <td>{{$fb->thoigian}}</td>
                        <td>{{$fb->nhanxet}}</td>
                        <td>
                          <button data-id="{{$fb->id}}" type="button" class="btn btn-primary waves-effect" data-toggle="modal" data-target="#large-Modal" style="background-color: white; border: none; padding: 0" id="">
                            <i class="fa fa-eye f-w-600 f-16 m-r-15 text-c-green"></i>
                          </button>
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
<div class="modal fade show" id="large-Modal" tabindex="-1" role="dialog" style="z-index: 1050;display: none; padding-right: 17px;">

</div>
@endsection
@section('script')
<script>
  $(document).
  ready(function() {
    $('.btn.btn-primary').click(function(e) {
      $('.modal').show();
      $('body').addClass('modal-open');


      $('.modal-backdrop').show();

      id = $(this).data('id');
      $('#large-Modal').load('/contacts/feedbacks/' + id);
      console.log('/contacts/feedbacks/' + id)
    })
  });

</script>
@endsection
