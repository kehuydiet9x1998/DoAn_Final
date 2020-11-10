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
                        <select name="" id="doituong" class="form-control">

                          <option value=""> -- Chọn đối tượng --</option>
                          <option value="nhanvien">Nhân viên</option>
                          <option value="giaovien">Giáo viên</option>
                        </select>
                        <span class="messages"></span>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-5">
                    <div class="form-group row">
                      <label class="col-sm-4 col-form-label">Chọn ngày</label>
                      <div class="col-sm-8">
                        <input type="date" class="form-control" id="ngaycham">
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

        <div id="bangchamcong"></div>

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
      $('#bangchamcong').load('/administrators/attendance/filter/' + $('#doituong').val() + '/' + $('#ngaycham').val());
    })
  });

</script>



@endsection
