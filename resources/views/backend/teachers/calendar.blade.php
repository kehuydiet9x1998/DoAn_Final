@extends('backend.layout.index')
@section('content')
<div class="pcoded-inner-content full-calender">
  <div class="main-body">
    <div class="page-wrapper">
      <div class="page-body">
        <div class="card">
          <div class="card-header">
            <h5>Lịch giảng dạy</h5>
          </div>
          <div class="card-block">
            <div class="row">
              <div class="col-xl-12 col-md-12">
                <div id="calendar" class="fc fc-unthemed fc-ltr">
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
