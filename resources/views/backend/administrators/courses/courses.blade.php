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
                    <div id="dom-table_filter" class="dataTables_filter">
                      <label style="display: flex">Tìm kiếm:<input type="search" id="search"
                          class="form-control input-sm" placeholder="" aria-controls="dom-table"
                          style="width: 250px; height: 25px;margin-top: 0px;margin-left: 10px;">
                        <a href="/administrators/courses/create">
                          <button id='add' class="btn btn-success btn-round waves-effect waves-light"
                            style="margin-top: -6px;height: 35px;line-height: 13px; margin-left: 5px">Thêm khóa
                            học</button>
                        </a></label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-block" id="data">
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
  function getData(url) {
    $.ajax({
      url,
      beforeSend: function () {
        $('.card').addClass("card-load");
        $('.card').append('<div class="card-loader"><i class="feather icon-radio rotate-refresh"></div>');
      },
      success: function (data) {
        $('.card').children(".card-loader").remove();
        $('.card').removeClass("card-load");
        $('#data').html(data);
        /* -------------------------------------------------------------------------- */
        /*                                 paginate                                 */
        /* -------------------------------------------------------------------------- */
        $('.pagination .page-link').unbind('click').on('click', function (e) {
          e.preventDefault();
          var page = $(this).text();
          url = result + '&page=' + page
          getData(url);
          $('li').removeClass('active disabled');
          e.target.parentElement.classList.add('active')
        });
      }
    })
  }

  $(document).ready(function () {
    getData('/administrators/courses?sort_by=tenkhoahoc&desc')

    result = '/administrators/courses?';

    $('#search').on('input', function (e) {
      result = encodeURI('/administrators/courses?tenkhoahoc=%' + e.target.value + '%')
      getData(result);
    });
  });

</script>

@endsection
