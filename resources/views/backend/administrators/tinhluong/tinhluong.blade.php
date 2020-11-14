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

                  <div class="col-md-5">
                    <div class="form-group row">
                      <label class="col-sm-4 col-form-label">Chọn đối tượng</label>
                      <div class="col-sm-8">
                        @if(session()->has('doituong') && session()->get('doituong') == 'giaovien') @php $doituong = 2 @endphp @else @php $doituong = 1 @endphp @endif
                        <select name="" id="doituong" class="form-control">
                          <h1>{{ $doituong }}</h1>
                          <option value=""> -- Chọn đối tượng --</option>
                          <option value="nhanvien" @if(($doituong)==1 ) selected @endif>Nhân viên</option>
                          <option value="giaovien" @if(($doituong)==2 ) selected @endif>Giáo viên</option>
                        </select>
                        <span class="messages"></span>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-5">
                    <div class="form-group row">
                      <label class="col-sm-4 col-form-label">Chọn tháng</label>
                      <div class="col-sm-8">
                        <input type="month" class="form-control" id="thang" @if(session()->has('thang')) value="{{ substr(session()->get('thang') ,0, 7)}}" @endif>
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

        <div id="danhsachluong"></div>
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

  $(document).ready(function() {
    $('#filter').click(function() {
      $('#danhsachluong').load('/administrators/payroll/filter/' + $('#doituong').val() + '/' + $('#thang').val());
    });
    if (!$('#thang').val())
      $('#thang').val(new Date().toISOString().slice(0, 7))
    $('#danhsachluong').load('/administrators/payroll/filter/' + $('#doituong').val() + '/' + $('#thang').val());

    // if (!$('#thang').val())
    //   $('#thang').val(new Date().toISOString().slice(0, 10))
    // $('#danhsachluong').load('/administrators/attendance/filter/nhanvien/' + $('#thang').val());

  });

</script>

@endsection
