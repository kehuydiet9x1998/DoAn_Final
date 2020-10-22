@php
$phanquyen = Auth::user()->vaitro;
if($phanquyen == 'contact')
{
$main = [[
"title" => "Tổng Quan",
"items" => [
[
"text" => "Trang chủ",
"link" => "/$phanquyen/dashboard",
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
],
],
],
],];
$menu = [
[
"title" => "Chăm Sóc Khách Hàng",
"items" => [
[
"type" => "link",
"icon" => "fa fa-user",
"link" => "/contacts/students",
"text" => "Học sinh",
],
[
"type" => "link",
"icon" => "fa fa-dollar",
"link" => "/contacts/hocphis",
"text" => "Học phí",
],
[
"type" => "link",
"icon" => "fa fa-history",
"link" => "/admin/lich-trai-nghiem",
"text" => "Lịch trải nghiệm",
],
[
"type"=> "link",
"icon"=> "feather icon-home",
"link"=> "/contacts/feedbacks",
"text"=> "Nhận xét",
],
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
"link"=>"/contacts/list-teachers",
"type"=>"link",
"icon"=>"fa fa-slideshare",
"text"=>"Giảng viên"
],
[
"link"=>"/contacts/checkin-teachers",
"type"=>"link",
"icon"=>"fa fa-hourglass-start",
"text"=>"CHECK-IN giảng viên"
],
[
"link"=> "/contacts/classify",
"type"=> "link",
"icon"=> "fa fa-braille",
"text"=> "Phân lớp",
],
[
"link" => "/contacts/move-class",
"type" => "link",
"icon" => "fa fa-mortar-board",
"text" => "Chuyển lớp",
],
[
"link" => "/admin/thoi-khoa-bieu",
"type" => "link",
"icon" => "fa fa-calendar",
"text" => "Lịch giảng dậy",
],
],
],
];
}
if($phanquyen == "teacher")
{
$main = [[
"title" => "Tổng Quan",
"items" => [
[
"text" => "Trang chủ",
"link" => "/teachers/dashboard",
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
],
],
],
],];
$menu = [ [
"title" => "Giảng Dạy",
"items" => [
[
"link" => "/teachers/calendar",
"type" => "link",
"icon" => "fa fa-calendar-check-o",
"text" => "Lịch giảng dạy",
],
[
"link" => "/teachers/classes",
"type" => "link",
"icon" => "fa fa-mortar-board",
"text" => "Danh sách lớp học",
],
[
"link" => "/teachers/check-test",
"type" => "link",
"icon" => "fa fa-check-square-o",
"text" => "Bài tập đã giao",
],
[
"link" => "/teachers/comment",
"type" => "link",
"icon" => "fa fa-comments",
"text" => "Nhận xét học sinh",
],
[
"link" => "/teachers/items",
"type" => "link",
"icon" => "fa fa-product-hunt",
"text" => "Sản phẩm cuối khóa",
],
[
"link" => "/lop-hoc",
"type" => "link",
"icon" => "fa fa-question-circle-o",
"text" => "Hỏi đáp",
],
],
],];
}
if($phanquyen == 'administrator'){
$main = [[
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
],];
$menu = [
[
"title" => "Khóa học",
"items" => [
[
"link" => "/administrators/courses",
"type" => "link",
"icon" => "fa fa-institution",
"text" => "Thông tin khóa học",
],
[
"link" => "/administrators/classes",
"type" => "link",
"icon" => "fa fa-graduation-cap",
"text" => "Lớp học ",
],
],
],
[
"title" => "Quản Lý Nhân Sự",
"items" => [
[
"link" => "/administrators/staffs",
"type" => "link",
"icon" => "fa fa-users",
"text" => "Nhân viên",
],
[
"link" => "/administrators/teachers",
"type" => "link",
"icon" => "fa fa-users",
"text" => "Giảng viên",
],
[
"link" => "/administrators/contracts",
"type" => "link",
"icon" => "fa fa-file-text-o",
"text" => "Hợp đồng ",
],
[
"link" => "/administrators/timesheets",
"type" => "link",
"icon" => "fa fa-check-square-o",
"text" => "Bảng chấm công",
],
[
"link" => "/administrators/payroll",
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
],];
}
if($phanquyen == "student")
{
$main = [[
"title" => "Tổng Quan",
"items" => [
[
"text" => "Trang chủ",
"link" => "/student/dashboard",
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
],
],
],
],];
$menu = [ [
"title" => "Học tập",
"items" => [
[
"link" => "/student/calendar",
"type" => "link",
"icon" => "fa fa-calendar-check-o",
"text" => "Thời khóa biểu",
],
[
"link" => "/student/class",
"type" => "link",
"icon" => "fa fa-mortar-board",
"text" => "Lớp học của tôi",
],
[
"link" => "/student/allcourses",
"type" => "link",
"icon" => "fa fa-check-square-o",
"text" => "Khóa học",
],
[
"link" => "/student/home-work",
"type" => "link",
"icon" => "fa fa-comments",
"text" => "Bài tập về nhà",
],
[
"link" => "/student/review",
"type" => "link",
"icon" => "fa fa-product-hunt",
"text" => "Ôn bài",
],
[
"link" => "/student/my-comment",
"type" => "link",
"icon" => "fa fa-themeisle",
"text" => "Nhận xét của tôi",
],
],
],];
}
@endphp

<nav class="pcoded-navbar">
  <div class="nav-list">
    <div class="pcoded-inner-navbar main-menu">
      @foreach($main as $sectionmenu)
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
