<div id="dom-table_filter" class="dataTables_filter">
  <button class="btn btn-success btn-round waves-effect waves-light" data-toggle="modal" data-target="#phanlop-Modal" style="float: right; margin-right:30px">Thêm học sinh</button>
  @include('backend.administrators.classes.phan_lop_modal')
</div>
@section('script')
@parent
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
