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
      // {
      //   extend: "pdf",
      //   text: '<i class="fa fa-file-pdf" aria-hidden="true"></i> Xuất PDF',
      //   exportOptions: {
      //     columns: ":not(.noVis)"
      //   }
      // },

      {
        extend: "print",
        // autoPrint: false,
        messageTop: "{{ Auth::user()->id  }}",
        text: '<i class="fa fa-print" aria-hidden="true"></i> In',
        customize: function(win) {
          $(win.document.body)
            .find("th")
            .addClass("display")
            .css("text-align", "center");
          $(win.document.body)
            .find("table")
            .addClass("display")
            .css("font-size", "16px");
          $(win.document.body)
            .find("table")
            .addClass("display")
            .css("text-align", "center");
          $(win.document.body)
            .find("tr:nth-child(odd) td")
            .each(function(index) {
              $(this).css("background-color", "#D0D0D0");
            });
          $(win.document.body)
            .find("h1")
            .css("text-align", "center");
        },
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