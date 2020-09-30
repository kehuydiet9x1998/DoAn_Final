@php
$menu = [
[
"title" => "Tổng Quan",
"items" => [
[
"text" => "Trang chủ",
"link" => "/dashboard",
"icon" => "feather icon-home",
"type" => "link",
],
[
"text" => "Bản tin",
"link" => "/news-feed",
"icon" => "feather icon-sidebar",
"type" => "link",
],
[
"text" => "Thông báo",
"link" => "/notifications",
"icon" => "fa fa-bell",
"type" => "link",
],
[
"text" => "Cài đặt",
"link" => "/notifications",
"icon" => "fa fa-cog",
"type" => "dropdown",
"items" => [
["text" => "Cài đặt", "link" => "/baocao"],
["text" => "Danh sách người dùng", "link" => "/baocao"],
["text" => "Phân quyền", "link" => "/baocao"],
["text" => "Sao lưu / Phục hồi", "link" => "/baocao"],
],
],
],
],

[
"title" => "Chăm Sóc Khách Hàng",
"items" => [
[
"type" => "link",
"icon" => "fa fa-user",
"link" => "/admin/khoa-hoc/abc",
"text" => "Học sinh",
],
[
"type" => "link",
"icon" => "fa fa-dollar",
"link" => "/lop-hoc",
"text" => "Học phí",
],
[
"type" => "link",
"icon" => "fa fa-money",
"link" => "/lop-hoc",
"text" => "Công nợ khách hàng",
],
[
"type" => "link",
"icon" => "fa fa-history",
"link" => "/lop-hoc",
"text" => "Lịch trải nghiệm",
],
// [
// "type"=> "link",
// "icon"=> "feather icon-home",
// "link"=> "/lop-hoc",
// "text"=> "Nhận xét",
// ],
],
],

[
"title" => "Quản Lý Đào Tạo",
"items" => [
[
"link" => "/khoa-hoc",
"type" => "link",
"icon" => " fa fa-list-alt",
"text" => "Khóa học",
],
[
"link" => "/lop-hoc",
"type" => "link",
"icon" => "fa fa-mortar-board",
"text" => "Lớp học",
],
// [
// "link"=> "/lop-hoc",
// "type"=> "link",
// "icon"=> "feather icon-home",
// "text"=> "Phân lớp",
// ],
[
"link" => "/lop-hoc",
"type" => "link",
"icon" => "fas fa-save",
"text" => "Bảo lưu",
],
[
"link" => "/khoa-hoc",
"type" => "link",
"icon" => "fa fa-check-square-o",
"text" => "Theo dõi lớp học",
],
[
"link" => "/khoa-hoc",
"type" => "link",
"icon" => "far fa-calendar-alt",
"text" => "Thời khóa biểu",
],
],
],
[
"title" => "Giảng Dạy",
"items" => [
[
"link" => "/khoa-hoc",
"type" => "link",
"icon" => "far fa-calendar-alt",
"text" => "Xem lịch dạy",
],
[
"link" => "/khoa-hoc",
"type" => "link",
"icon" => "fa fa-check",
"text" => "Dạy học",
],
[
"link" => "/lop-hoc",
"type" => "link",
"icon" => "fa fa-wpforms",
"text" => "Chấm bài tập",
],
[
"link" => "/khoa-hoc",
"type" => "link",
"icon" => "fa fa-tasks",
"text" => "Sản phẩm cuối khóa",
],
],
],
[
"title" => "Quản Lý Nhân Sự",
"items" => [
[
"link" => "/khoa-hoc",
"type" => "link",
"icon" => "fa fa-users",
"text" => "Nhân viên",
],
[
"link" => "/lop-hoc",
"type" => "link",
"icon" => "fa fa-file-text-o",
"text" => "Hợp đồng ",
],
[
"link" => "/khoa-hoc",
"type" => "link",
"icon" => "fa fa-check-square-o",
"text" => "Bảng chấm công",
],
[
"link" => "/khoa-hoc",
"type" => "link",
"icon" => "fa fa-usd",
"text" => "Bảng lương",
],
],
],
[
"title" => "Báo Cáo Thống Kê",
"items" => [
[
"link" => "/khoa-hoc",
"type" => "link",
"icon" => "fa fa-pie-chart",
"text" => "Thống kê nhân sự",
],
[
"link" => "/lop-hoc",
"type" => "link",
"icon" => "fa fa-signal",
"text" => "Báo cáo thu - chi",
],
[
"link" => "/lop-hoc",
"type" => "link",
"icon" => "fa fa-area-chart",
"text" => "Báo cáo công nợ KH",
],
[
"link" => "/admin/khoa-hoc",
"type" => "link",
"icon" => "fa fa-line-chart",
"text" => "Báo cáo tài chính",
],
[
"link" => "/khoa-hoc",
"type" => "dropdown",
"icon" => "fa fa-calendar-check-o",
"text" => "Báo cáo trong ngày",
"items" => [
["text" => "Điểm danh / Check-in", "link" => "/baocao"],
["text" => "Phiếu thu phát sinh", "link" => "/baocao"],
],
],
],
],
];
@endphp

<nav class="pcoded-navbar">
  <div class="nav-list">
    <div class="pcoded-inner-navbar main-menu">
      @foreach($menu as $sectionmenu)
      <div class="pcoded-navigation-label">{{$sectionmenu['title']}}</div>
      <ul class="pcoded-item pcoded-left-item">
        @foreach($sectionmenu['items'] as $item)
        @if($item['type'] === 'link')
        <li class="">
          <a href="{{$item['link']}}" class="waves-effect waves-dark">
            <span class="pcoded-micon">
              <i class="{{$item['icon']}}"></i>
            </span>
            <span class="pcoded-mtext">{{$item['text']}}</span>
          </a>
        </li>
        @else
        <li class="pcoded-hasmenu">
          <a href="javascript:void(0)" class="waves-effect waves-dark">
            <span class="pcoded-micon"><i class="{{$item['icon']}}"></i></span>
            <span class="pcoded-mtext">{{$item['text']}}</span>
          </a>
          <ul class="pcoded-submenu">
            @foreach($item['items'] as $subitem)
            <li class="">
              <a href="{{$subitem['link']}}" class="waves-effect waves-dark">
                <span class="pcoded-mtext">{{$subitem['text']}}</span>
              </a>
            </li>
            @endforeach
          </ul>
        </li>
        @endif
        @endforeach
      </ul>

      @endforeach
    </div>
  </div>
</nav>
