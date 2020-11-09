@php $menu = true;@endphp
@extends('backend.layout.index')

@section('css')
{{-- <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}"> --}}
<link rel="stylesheet" href="{{asset('assets/css/bootstrap-select.min.css')}}">

@endsection


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
                  <div class="col-xs-12 col-sm-12 col-md-4">
                    <h5>DANH SÁCH LỚP HỌC</h5>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4" style="display: flex;align-items: center">
                    <h6 class="col-sm-4" style="padding: 0; float: left">Chọn lớp học</h6>
                    <div class="col-sm-6" style="padding: 0; float: left; margin-top: -3px">
                      <select name="select" class="form-control form-control-primary fill">
                        <option value="opt1">Tất cả các lớp</option>
                        <option value="opt2">LP - 001</option>
                        <option value="opt3">LP -002</option>
                        <option value="opt4">LP - 003</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4" style="display: flex;align-items: center">
                    <h6 class="col-sm-5" style="padding: 0; float: left">Chọn trạng thái</h6>
                    <div class="col-sm-6" style="padding: 0; float: left; margin-top: -3px">
                      <select name="select" class="form-control form-control-primary fill">
                        <option value="opt1">Tất cả</option>
                        <option value="opt2">Đang diễn ra</option>
                        <option value="opt4">Chưa diễn ra</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-block">
                <div class="table-responsive">
                  <table class="table table-hover m-b-0" id="datatable">
                    <thead>
                      <tr>
                        <th>MÃ LỚP HỌC</th>
                        <th>SĨ SỐ TỐI ĐA</th>
                        <th>HIỆN CÓ</th>
                        <th>TÊN GIÁO VIÊN</th>
                        <th>TRẠNG THÁI</th>
                        <th>ACTION</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($classes as $class)
                      <tr>
                        <td>
                          <div class="d-inline-block align-middle">
                            <div class="d-inline-block">
                              <a href="{{route('classes.show', $class->id)}}">
                                <h6 class="name_link_green">{{$class->tenlop}}</h6>
                              </a>
                              <p class=" m-b-0 text-muted">Khóa học: {{$class->khoaHoc->tenkhoahoc}}</p>
                              {{-- <p class="m-t-2 m-b-0 text-muted">Giáo viên: Học viện TEKY</p> --}}
                            </div>
                          </div>
                        </td>

                        <td>{{ $class->khoahoc->sisotoida }}</td>
                        <td>{{ $class->siso }}</td>
                        <td>{{ $class->giaovien->hodem. ' '. $class->giaovien->ten }}</td>
                        <td><label class="badge badge-inverse-success">{{ $class->trangthai }}</label></td>
                        <td style="display: flex;">
                          <div id="dom-table_filter" class="dataTables_filter">

                            <button type="button" class="btn edit btn-primary waves-effect phanlop" data-id="{{ $class->id }}" data-toggle="modal" data-target="#phanlop-Modal{{ $class->id }}" data-id="1" style="background-color: white; border: none; padding: 0">
                              <i class="fa fa-edit f-w-600 f-16 m-r-15 text-c-green" style="font-size: 16px">
                                <h5 style="color: black; font-size: 14px">
                                  Phân lớp
                                </h5>
                              </i>
                            </button>
                            @include('backend.administrators.classes.phan_lop_modal')
                          </div>
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

@endsection

@section('script')
<script src="{{asset('assets/js/bootstrap-select.min.js')}}"></script>
<script>
  var $select = $('select');

  // Init selectpicker.
  $select.selectpicker();

  // Loop through all of the option links in the dropdown menu.
  $select.data('selectpicker').$menu.find('li a').each(function() {
    var $link = $(this)
      , $text = $link.find('span.text');

    // Bind to mouseenter.
    $link.on('mouseenter', function() {
      // Clone the text & append it to the body so we can measure its natural width.
      var $clone = $text.clone().appendTo('body')
        , diff = ($clone.width() - $text.width());

      // Remove our dummy clone.
      $clone.remove();

      // If the text content is wider than the menu, animate the `text-indent`.
      if (diff > 0) {
        $text.stop(true).delay(250).animate({
          textIndent: '-' + diff + 'px'
        });
      }
    });

    // On mouseleave, animate the `text-indent` back to `0`.
    $link.on('mouseleave', function() {
      $text.stop(true).delay(250).animate({
        textIndent: 0
      });
    });
  });

</script>

@endsection
