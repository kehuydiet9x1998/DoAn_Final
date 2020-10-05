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
                    <h5>Danh sách khóa học</h5>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-6">
                    <div id="dom-table_filter" class="dataTables_filter" style="margin-left: -145px;">
                      <label style="display: flex">Search:<input type="search" id="search" class="form-control input-sm" placeholder="" aria-controls="dom-table" style="width: 250px; height: 25px;margin-top: 0px;margin-left: 10px;">
                        <button type="button" class="btn btn-primary waves-effect" data-toggle="modal" data-target="#large-Modal" style="height: 26px; align-content: center; padding: 0px 10px;">Thêm khóa học</button>
                      </label>
                    </div>
                  </div>
                </div>
                <div class="card-header-right">
                  <ul class="list-unstyled card-option">
                    <li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i></li>
                    <li><i class="feather icon-maximize full-card"></i></li>
                    <li><i class="feather icon-minus minimize-card"></i></li>
                    <li><i class="feather icon-refresh-cw reload-card"></i></li>
                    <li><i class="feather icon-trash close-card"></i></li>
                    <li><i class="feather icon-chevron-left open-card-option"></i></li>
                  </ul>
                </div>
              </div>
              <div class="card-block">
                <div class="table-responsive">
                  <table class="table table-hover m-b-0" id="table">

                  </table>
                </div>
              </div>
              {{ $khoahocs->links() }}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


</div>
<div class="modal fade" id="large-Modal" tabindex="-1" role="dialog" style="z-index: 1050; display: none;" aria-hidden="true">
  <form id="main" method="post" action="{{route('courses.store')}}" novalidate="">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Thêm khóa học</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tên khóa học</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="tenkhoahoc" id="name" placeholder="Nhập tên khóa học">
              <span class="messages"></span>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="password" name="password" placeholder="Password input">
              <span class="messages"></span>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Repeat Password</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="repeat-password" name="repeat-password" placeholder="Repeat Password">
              <span class="messages"></span>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="email" name="email" placeholder="Enter valid e-mail address">
              <span class="messages"></span>
            </div>
          </div>
          <div class="row">
            <label class="col-sm-2 col-form-label">Radio Buttons</label>
            <div class="col-sm-10">
              <div class="form-check form-check-inline">
                <label class="form-check-label">
                  <input class="form-check-input" type="radio" name="gender" id="gender-1" value="option1"> Male
                </label>
              </div>
              <div class="form-check form-check-inline">
                <label class="form-check-label">
                  <input class="form-check-input" type="radio" name="gender" id="gender-2" value="option2"> Female
                </label>
              </div>
              <span class="messages"></span>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default waves-effect " data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary m-b-0 waves-effect waves-light ">Save changes</button>
        </div>
      </div>
    </div>
  </form>
</div>
@endsection

@section('script')

{{-- <script type="text/javascript" src="{{asset('assets/js/form-validation.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/validate.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/underscore-min.js')}}"></script> --}}

<script>
  $(document).ready(function() {
    $.ajax({
      url: '/administrators/courses/find/'
      , beforeSend: function() {

        $('.card').addClass("card-load");
        $('.card').append('<div class="card-loader"><i class="feather icon-radio rotate-refresh"></div>');
      }
      , success: function(data) {
        $('.card').children(".card-loader").remove();
        $('.card').removeClass("card-load");
        $('#table').html(data);
      }
    })
    // $('#table').load('/test');
    $('#search').on('input', function(e) {
      result = encodeURI('/administrators/courses/find/' + e.target.value)
      $.ajax({
        url: result
        , beforeSend: function() {

          $('.card').addClass("card-load");
          $('.card').append('<div class="card-loader"><i class="feather icon-radio rotate-refresh"></div>');
        }
        , success: function(data) {
          $('.card').children(".card-loader").remove();
          $('.card').removeClass("card-load");
          $('#table').html(data);
        }
      })


    })
  });

</script>

@endsection
