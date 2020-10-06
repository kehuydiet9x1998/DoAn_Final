@extends('backend.layout.index')
@section('content')
<style>
  select {
    -webkit-appearance: none;
    -moz-appearance: none;
    -ms-appearance: none;
    appearance: none;
    outline: 0;
    box-shadow: none;
    border: 0 !important;
    background: #13d7a0;
    background-image: none;
  }

  /* Remove IE arrow */
  select::-ms-expand {
    display: none;
  }

  /* Custom Select */
  .select {
    position: relative;
    display: flex;
    width: 3em;
    height: 2em;
    line-height: 2;
    background: #16e0a3;
    overflow: hidden;
    border-radius: .25em;
  }

  select {
    flex: 1;
    padding: 0 .5em;
    color: #fff;
    cursor: pointer;
  }

  /* Arrow */
  .select::after {
    content: '\25BC';
    position: absolute;
    top: 0;
    right: 0;
    padding: 0 0.15em;
    background: #1ddd78;
    cursor: pointer;
    pointer-events: none;
    -webkit-transition: .25s all ease;
    -o-transition: .25s all ease;
    transition: .25s all ease;
  }

  /* Transition */
  .select:hover::after {
    color: #f39c12;
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
                    <h5>Bảng chấm công</h5>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-6">
                    <div id="dom-table_filter" class="dataTables_filter" style="margin-left: -35px;">
                      <label style="display: flex">Tìm kiếm:<input type="search" class="form-control input-sm" placeholder="" aria-controls="dom-table" style="width: 250px; height: 25px;margin-top: 0px;margin-left: 10px;">
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
                  <table class="table table-hover m-b-0">
                    <thead>
                      <tr>
                        <th>STT</th>
                        <th>Tên nhân viên</th>
                        <th>Chức vụ</th>
                        <?php
                          use Carbon\Carbon;
                          $month = Carbon::now()->month;
                          $year =  Carbon::now()->year;
                          if($month == 1 || $month == 3 || $month = 5 || $month == 7 || $month == 8 || $month == 10 || $month == 12)
                            $dateNumber = 31;
                          else{
                            if($month == 2 && $year % 4 == 0)
                              $dateNumber = 29;
                            elseif ($month == 2 && $year %4 !=0)
                                $dateNumber = 28;
                            else
                              $dateNumber = 30;
                          }
                        ?>
                        @for($i = 1 ; $i <= $dateNumber; $i++) <th>{{$i}}</th>
                          @endfor
                          <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <div class="d-inline-block align-middle">
                            <div class="d-inline-block">
                              <h6>1</h6>
                            </div>
                          </div>
                        </td>
                        <td>Nguyễn Văn Linh</td>
                        <td>Giám đốc</td>
                        @for($i = 1 ; $i <= $dateNumber; $i++) <td><button class="btn waves-effect waves-dark btn-success btn-outline-success btn-icon"><i class="icofont icofont-check-circled"></i></button></td>
                          @endfor
                          <td><a href="#!"><i class="fa fa-print f-w-600 f-16 m-r-15 text-c-green"></i></a></td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-inline-block align-middle">
                            <div class="d-inline-block">
                              <h6>1</h6>
                            </div>
                          </div>
                        </td>
                        <td>Nguyễn Văn Hoan</td>
                        <td>Giám đốc</td>
                        @for($i = 1 ; $i <= $dateNumber; $i++) <td><button class="btn waves-effect waves-dark btn-success btn-outline-success btn-icon"><i class="icofont icofont-check-circled"></i></button></td>
                          @endfor
                          <td><a href="#!"><i class="fa fa-print f-w-600 f-16 m-r-15 text-c-green"></i></a></td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-inline-block align-middle">
                            <div class="d-inline-block">
                              <h6>1</h6>
                            </div>
                          </div>
                        </td>
                        <td>Phạm Quang Cường</td>
                        <td>Giám đốc</td>
                        @for($i = 1 ; $i <= $dateNumber; $i++) <td>
                          <div class="select">
                            <select name="slct" id="slct">
                              <option value="1">✔</option>
                              <option value="2">✔/2</option>
                              <option value="3">X</option>
                              <option value="3">XX</option>
                            </select>
                          </div>
                          </td>
                          @endfor
                          <td><a href="#!"><i class="fa fa-print f-w-600 f-16 m-r-15 text-c-green"></i></a></td>
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
