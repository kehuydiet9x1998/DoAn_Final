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
                    <h5>Chọn tiêu chí</h5>
                  </div>
                </div>
              </div>
              <div class="card-block">
                <div class="row">

                  <div class="col-md-4">
                    <div class="form-group row">
                      <label class="col-sm-5 col-form-label">Chọn chức vụ</label>
                      <div class="col-sm-7">

                        <select name="chuc_vu_id" id="chucvu" class="form-control">
                          <option value="all"> Tất cả </option>
                          @foreach(\App\Models\Chucvu::all() as $chucvu)
                          <option value="{{ $chucvu->id }}">{{ $chucvu->ten }}</option>
                          @endforeach
                        </select>
                        <span class="messages"></span>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group row">
                      <label class="col-sm-5   col-form-label">Chọn giới tính</label>
                      <div class="col-sm-7">
                        <select class="form-control" name="gioitinh" id="gioitinh">
                          <option value="all"> Tất cả </option>
                          <option value="Nam">Nam</option>
                          <option value="Nữ">Nữ</option>
                        </select>
                        <span class="messages"></span>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-2">
                    <div class="form-group">
                      <button id="filter" class="btn btn-primary btn-sm "><i class="fa fa-filter"></i> Lọc</button>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>

        <div id="content" class="row"></div>
      </div>
    </div>
  </div>
</div>

{{-- @php
$chucvu = \App\Models\Chucvu::all()->pluck('ten');
@endphp --}}
@endsection
@section('script')

<script type="text/javascript" src="{{asset('assets/js/chart.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/chartjs-plugin-colorschemes.min.js')}}"></script>

<script>
  function myReset() {
    document.getElementById('main').reset();
  };
  $(document).ready(function() {
    $('#filter').click(function() {
      $('#content').load('/administrators/thongkenhansu/content/' + $('#chucvu').val() + '/' + $('#gioitinh').val(), function() {

      });
    });
  });

</script>

@endsection
