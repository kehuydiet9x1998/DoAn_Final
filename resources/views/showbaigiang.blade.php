  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header" style="white-space: normal">
        <h4 class="modal-title">Bài giảng</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="myReset()">

          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="{{route('students.store')}}" novalidate="">
          <div class="modal-body">
            <iframe src="{{ asset($baigiang->filebaigiang) }}" width='730' height='550' frameborder='0' allowfullscreen webkitallowfullscreen></iframe>



          </div>
          <div class="modal-footer">
            <button onclick="myReset()" type="button" class="btn btn-default waves-effect " data-dismiss="modal">Đóng</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script>
    function myReset() {
      $('.modal-backdrop').hide();
      $('#baigiang-Modal').hide();
    }

  </script>
