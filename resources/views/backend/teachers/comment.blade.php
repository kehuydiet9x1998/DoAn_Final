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
                  <div class="col-sm-12 col-xl-3 m-b-30" style="margin-bottom: 10px">
                    <h5>DANH SÁCH HỌC SINH</h5>
                  </div>
                  <div class="col-sm-12 col-xl-4 m-b-30" style="margin-bottom: 10px">
                    <select name="select" class="form-control form-control-inverse fill">
                      <option value="opt1">Mã lớp học</option>
                      <option value="opt2">RB - 01</option>
                      <option value="opt3">RB - 02</option>
                    </select>
                  </div>
                  <div class="col-xs-12 col-xl-4 m-b-30" style="margin-left: 30px; margin-top: 10px; margin-bottom: 10px">
                    <div id="dom-table_filter" class="dataTables_filter" style="margin-left: -35px;">
                      <label style="display: flex; align-items: center">
                        Tìm kiếm:<input type="search" class="form-control input-sm" placeholder="" aria-controls="dom-table" style="width: 250px; height: 25px;margin-top: 0px;margin-left: 10px;"></label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-block">
                <div class="table-responsive">
                  <table class="table table-hover m-b-0">
                    <thead>
                      <tr>
                        <th>TÊN HỌC SINH</th>
                        <th>LỚP HỌC</th>
                        <th>BÀI HỌC</th>
                        <th>BUỔI HỌC</th>
                        <th>TRẠNG THÁI</th>
                        <th>ACTIONS</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($dsbuoihoc as $buoihoc)
                      @foreach($buoihoc->lophoc->dslophoc as $phanlop)
                      <tr>

                        <td>{{ $phanlop->hocsinh->hodem . ' '. $phanlop->hocsinh->ten}}</td>
                        <td>{{ $buoihoc->lophoc->tenlop }}</td>
                        <td>{{ $buoihoc->baigiang->tenbaigiang }}</td>
                        <td>{{ $buoihoc->id }}</td>
                        <td><label class="badge badge-inverse-primary">Đang học</label></td>
                        <td style="text-indent:17px">
                          <button data-id="{{$phanlop->hoc_sinh_id}}/{{$buoihoc->id}}/{{$buoihoc->lopHoc->id}}/{{$buoihoc->lopHoc->khoaHoc->id}}" class="btn btn-primary waves-effect nhanxet" data-toggle="modal" data-target="#mail-Modal" style="background-color: white; border: none; padding: 0">
                            <i class="fa fa-commenting-o f-w-600 f-16 m-r-15 text-c-green" style="text-align:center"></i></button>
                          {{-- đổi luôn đi --}}
                        </td>
                      </tr>

                      @endforeach
                      @endforeach

                    </tbody>
                  </table>
                  <div class="modal fade show" id="mail-Modal" tabindex="-1" role="dialog" style="z-index: 1050;display: none; padding-right: 17px;"></div>


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
  $(document).ready(function() {
    $('.nhanxet').click(function() {
      $('#mail-Modal').load('/teachers/nhanxet/' + $(this).data('id'))
      $('#mail-Modal').show();
      $('body').addClass('modal-open');


      $('.modal-backdrop').show();
    });
  });

</script>

@endsection
