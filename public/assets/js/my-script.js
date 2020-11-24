$(document).ready(function() {
  var table = $("#datatable").DataTable({
    dom: "Bfrtip",
    stateSave: true,

    buttons: {
      dom: {
        button: {
          className: "btn btn-outline-info dt-button mr-1 btn-sm pb-2"
        }
      },
      buttons: [
        // {
        //   extend: "copy",
        //   text: '<i class="fa fa-copy" aria-hidden="true"></i> Sao chép',
        //   // className: "btn-default",
        //   exportOptions: {
        //     columns: ":not(.noVis)"
        //   }
        // },
        {
          extend: "excel",
          text:
            '<i class="fa fa-file-excel" aria-hidden="true"></i> Xuất Excel',
          className: "btn btn-default",
          exportOptions: {
            columns: ":not(.noVis)"
          }
        },
        {
          extend: "pdf",
          className: "btn btn-default",
          text: '<i class="fa fa-file-pdf" aria-hidden="true"></i> Xuất PDF',
          exportOptions: {
            columns: ":not(.noVis)"
          }
        },

        {
          extend: "print",
          className: "btn btn-default",
          messageTop: "{{ Auth::user()->id  }}",
          text: '<i class="fa fa-print" aria-hidden="true"></i> In',
          exportOptions: {
            columns: ":not(.noVis)"
          }
        },
        {
          extend: "colvis",
          text: '<i class="fa fa-filter" aria-hidden="true"></i> Cột hiển thị',
          className: "btn btn-default"
        }
      ]
    }
  });

  $("#datatable-filter-button").click(function() {
    $(".datatable-filter").on("change", function() {
      var column = $(this).data("column");
      table
        .columns(column)
        .search(this.value)
        .draw();
    });
  });
});
