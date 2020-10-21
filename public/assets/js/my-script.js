$(document).ready(function() {
  $("#datatable").DataTable({
    dom: "Bfrtip",
    stateSave: true,
    // select: true,
    // lengthMenu: [
    //   [10, 25, 50, -1],
    //   [10, 25, 50, "All"]
    // ],
    buttons: [
      {
        extend: "copy",
        text: '<i class="fa fa-copy" aria-hidden="true"></i> Sao chép',

        // className: "btn-default",
        exportOptions: {
          columns: ":not(.noVis)"
        }
      },
      {
        extend: "excel",
        text: '<i class="fa fa-file-excel" aria-hidden="true"></i> Xuất Excel',
        // className: "btn-default",
        exportOptions: {
          columns: ":not(.noVis)"
        }
      },
      {
        extend: "pdf",
        text: '<i class="fa fa-file-pdf" aria-hidden="true"></i> Xuất PDF',
        // className: "btn btn-default",
        exportOptions: {
          columns: ":not(.noVis)"
        }
      },

      {
        extend: "print",
        text: '<i class="fa fa-print" aria-hidden="true"></i> In',
        // className: "btn btn-default",
        exportOptions: {
          columns: ":not(.noVis)"
        }
      },
      {
        extend: "colvis",
        text: '<i class="fa fa-filter" aria-hidden="true"></i> Cột hiển thị'
        // className: "btn btn-default",
      }
    ]
  });
});
