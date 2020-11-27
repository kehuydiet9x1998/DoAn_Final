<style>
  .card .card-header span {
    display: block;
    font-size: 13px;
    margin-top: 5px;
    white-space: normal;
  }
  .fc-month-view span.fc-title {
    white-space: normal;
    color: #6d5266;
  }
</style>
<button type="button" class="btn btn-danger btn-round waves-effect"  style="margin-top: -6px;margin-right: 15px;height: 35px;line-height: 13px; float: right"
        data-toggle="modal" data-target="#calendar-Modal">Lịch hẹn</button>
<div class="modal fade" id="calendar-Modal" tabindex="-1" role="dialog" style="z-index: 1050; display: none;" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Lịch hẹn</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <div id='calendar'>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default waves-effect " data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

