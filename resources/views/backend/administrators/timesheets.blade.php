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
                </div>
              </div>
              <div class="card-block">
                <div class="table-responsive">
                  <table class="table table-hover m-b-0"  id="datatable">
                    <thead>
                    <th>STT</th>
                    <th>TÊN NHÂN VIÊN</th>
                    <th>CHỨC VỤ</th>
                    <th>GIỚI TÍNH</th>
                    <th>SỐ ĐT</th>
                    <th>CHI TIẾT</th>
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
                        <td>Nam</td>
                        <td>00363915150</td>
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
