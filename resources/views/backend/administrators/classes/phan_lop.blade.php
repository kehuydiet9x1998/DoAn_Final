<div id="dom-table_filter" class="dataTables_filter">
  <button class="btn btn-success btn-round waves-effect waves-light" data-toggle="modal" data-target="#phanlop-Modal" style="float: right; margin-right:30px">Thêm học sinh</button>
  @include('backend.administrators.classes.phan_lop_modal')
</div>
@section('script')
@parent
<script src="{{asset('assets/js/bootstrap-select.min.js')}}"></script>


@endsection
