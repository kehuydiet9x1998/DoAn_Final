@extends('backend.layout.index')

@section('css')
@parent
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
                  <div class="col-xs-12 col-sm-12 col-md-6">
                    <h5>Danh sách khoản thu</h5>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-6">
                    @include('backend.contact.khoanthu.add_khoanthu')
                  </div>
                </div>
              </div>
              <div class="card-block">
                <div class="table-responsive">
                  <table class="table table-hover m-b-0" id="datatable">
                    <thead>
                      <tr>
                        <th>STT</th>
                        <th>Tên khoản thu</th>
                        <th>Số tiền</th>
                        {{-- <th>Từ ngày-Đến ngày</th> --}}
                        <th>Đã hoàn thành</th>
                        <th>Học sinh chưa đóng</th>
                        <th class="noVis">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($khoanthus as $key =>$khoanthu)
                      <tr>
                        <td>{{ $key+1}}</td>
                        <td>{{ $khoanthu->tenkhoanthu}}</td>
                        <td>{{number_format( $khoanthu->sotien ).' đ'}}</td>
                        {{-- <td>
                          <i class="fa fa-calendar-plus"></i> {{ $khoanthu->ngaybatdau }}
                          <br>
                          <i class="fa fa-calendar-minus"></i> {{ $khoanthu->ngayketthuc }}

                        </td> --}}

                        <td><label class="badge badge-inverse-success">{{ round($khoanthu->sohocsinhdadong / $khoanthu->sohocsinh * 100,2)}}%</label></td>
                        <td>
                          @php
                          $hocsinhchuadong = \App\Models\KhoanThu::where('tenkhoanthu', $khoanthu->tenkhoanthu)->where('trangthai', 'Chưa đóng')->get()
                          @endphp

                          <h5 class="mb-0">
                            <button class="btn btn-secondary btn-sm " data-toggle="collapse" data-target="#collapse{{ $khoanthu->tenkhoanthu }}" aria-expanded="true" aria-controls="collapseOne">
                              {{ $hocsinhchuadong->count() }} học sinh chưa đóng <i class="fa fa-caret-down"></i>
                            </button>
                          </h5>

                          <div id="collapse{{ $khoanthu->tenkhoanthu }}" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">

                            <div style="width: 400px; display:flex; flex-wrap: wrap; padding-top:10px">

                              @if($hocsinhchuadong->count()>0)
                              @foreach( $hocsinhchuadong
                              as $item)
                              <label for="" class="badge badge-inverse-info m-r-10">{{$item->hocPhi->hoc_sinh_id.' - '. $item->hocPhi->hocsinh->hodem.' '. $item->hocPhi->hocsinh->ten }}</label>
                              @endforeach
                              @else
                              <i>Không có học sinh nào chưa đóng</i>
                              @endif
                            </div>

                          </div>


                        </td>
                        <td class="d-flex">
                          <div>
                            <div class="modal fade show" id="show-Modal" tabindex="-1" role="dialog" style="z-index: 1050;display: none; padding-right: 17px;">
                            </div>
                          </div>
                          <button class="my_edit" data-id="{{urlencode( $khoanthu->tenkhoanthu)}}" data-toggle="modal" data-target="#edit-Modal" style="background-color: white; border: none">
                            <i class="icon feather icon-edit f-w-600 f-16 m-r-15 text-c-green" style="margin-right: 3px"></i>
                          </button>
                          <!-- Modal Sua -->

                          <form action="{{route('khoanthu.destroy', $khoanthu->tenkhoanthu)}}" method="post">
                            @method('DELETE')
                            @csrf
                            <button style="border: none; padding: 2px 0px; margin-top: -1px; background-color: white" onclick="return confirm ('Bạn có muốn xóa không')">
                              <i class="feather icon-trash-2 f-w-600 f-16 m-r-15 text-c-red" style="margin:0;">
                              </i>
                            </button>
                          </form>

                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                  {{-- <div class="modal fade show" id="show-Modal" tabindex="-1" role="dialog" style="z-index: 1050;display: none; padding-right: 17px;">
                  </div> --}}
                  <div class="modal fade show" id="edit-Modal" tabindex="-1" role="dialog" style="z-index: 1050;display: none; padding-right: 17px;">
                  </div>

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
  function myReset() {
    document.getElementById('main').reset();
  };

</script>

<script>
  $(document).
  ready(function() {
    // $('.btn.btn-primary').click(function(e) {
    //   id = $(this).data('id');
    //   $('#show-Modal').load("/administrators/teachers/" + id);
    //   $('#show-Modal').show();
    //   $('body').addClass('modal-open');
    //   $('.modal-backdrop').show();
    // });
    $('.my_edit').click(function(e) {
      id = $(this).data('id')
      $('#edit-Modal').load('').load("/contacts/khoanthu/" + id + '/edit', function() {
        $('#edit-hp').selectpicker('refresh');
      });
      $('#edit-Modal').show();
      $('body').addClass('modal-open');
      $('.modal-backdrop').show();


    })
  });

</script>

<script src="{{asset('assets/js/bootstrap-select.min.js')}}"></script>
<script>
  var $select = $('select');

  $select.selectpicker();

  $select.data('selectpicker').$menu.find('li a').each(function() {
    var $link = $(this)
      , $text = $link.find('span.text');

    $link.on('mouseenter', function() {
      var $clone = $text.clone().appendTo('body')
        , diff = ($clone.width() - $text.width());

      $clone.remove();

      if (diff > 0) {
        $text.stop(true).delay(250).animate({
          textIndent: '-' + diff + 'px'
        });
      }
    });

    $link.on('mouseleave', function() {
      $text.stop(true).delay(250).animate({
        textIndent: 0
      });
    });
  });

</script>



@endsection
