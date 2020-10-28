<nav class="navbar header-navbar pcoded-header">
  <div class="navbar-wrapper">
    <div class="navbar-logo">
      @include('utils.logo')
      <a class="mobile-menu" id="mobile-collapse" href="#!">
        <i class="feather icon-menu icon-toggle-right"></i>
      </a>
      <a class="mobile-options waves-effect waves-light">
        <i class="feather icon-more-horizontal"></i>
      </a>
    </div>
    <div class="navbar-container container-fluid">
      <ul class="nav-left">
        <li class="header-search">
          <div class="main-search morphsearch-search">
            <div class="input-group">
              <span class="input-group-prepend search-close">
                <i class="feather icon-x input-group-text"></i>
              </span>
              <input type="text" class="form-control" placeholder="Nhập từ khóa">
              <span class="input-group-append search-btn">
                <i class="feather icon-search input-group-text"></i>
              </span>
            </div>
          </div>
        </li>

      </ul>
      <ul class="nav-right">
        <li class="header-notification">
          <div class="dropdown-primary dropdown">
            <div class="dropdown-toggle" data-toggle="dropdown">
              <i class="feather icon-bell"></i>
              <span class="badge bg-c-red">5</span>
            </div>
            <ul class="show-notification notification-view dropdown-menu" data-dropdown-in="fadeIn"
              data-dropdown-out="fadeOut">
              <li>
                <h6>Thông báo</h6>
                <label class="label label-danger">Mới</label>
              </li>
              <li>
                <div class="media">
                  <img class="img-radius" src="{{asset('assets/jpg/avatar-4.jpg')}}" alt="Generic placeholder image">
                  <div class="media-body">
                    <h5 class="notification-user">Nguyễn Văn Linh</h5>
                    <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer
                      elit.</p>
                    <span class="notification-time">30 phút trước</span>
                  </div>
                </div>
              </li>
              <li>
                <div class="media">
                  <img class="img-radius" src="{{asset('assets/jpg/avatar-3.jpg')}}" alt="Generic placeholder image">
                  <div class="media-body">
                    <h5 class="notification-user">Nguyễn Văn Hoan</h5>
                    <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer
                      elit.</p>
                    <span class="notification-time">30 phút trước</span>
                  </div>
                </div>
              </li>
              <li>
                <div class="media">
                  <img class="img-radius" src="{{asset('assets/jpg/avatar-4.jpg')}}" alt="Generic placeholder image">
                  <div class="media-body">
                    <h5 class="notification-user">Phạm Quang Cường</h5>
                    <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer
                      elit.</p>
                    <span class="notification-time">30 phút trước</span>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </li>
        <li class="header-notification">
          <div class="dropdown-primary dropdown">

            <div class="displayChatbox dropdown-toggle">
              <a href="/chat"><i class="feather icon-message-square"></i><span class="badge bg-c-green">3</span></a>
            </div>

          </div>
        </li>
        <li class="user-profile header-notification">
          <div class="dropdown-primary dropdown">
            <div class="dropdown-toggle" data-toggle="dropdown">
              <img src="{{asset(Auth::user()->anhdaidien)}}" class="img-radius" alt="User-Profile-Image">
              <span>{{Auth::user()->name}}</span>
              <i class="feather icon-chevron-down"></i>
            </div>
            <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn"
              data-dropdown-out="fadeOut">
              <li>
                <a href="#">
                  <i class="feather icon-settings"></i> Cài đặt
                </a>
              </li>
              @php
              switch (Auth::user()->vaitro) {
              case 'student':
              echo '<li>
                <a href="/student/trangcanhan">
                  <i class="feather icon-user"></i> Trang cá nhân
                </a>
              </li>';
              break;
              case 'contact':
              echo '<li>
                <a href="contact/trangcanhan">
                  <i class="feather icon-user"></i> Trang cá nhân
                </a>
              </li>';
              break;
              case 'teacher':
              echo '<li>
                <a href="/teachers/trangcanhan">
                  <i class="feather icon-user"></i> Trang cá nhân
                </a>
              </li>';
              break;
              }
              @endphp

              <li>
                <a href="#">
                  <i class="feather icon-mail"></i> Hộp thư
                </a>
              </li>
              <li>
                <a onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  <i class="feather icon-log-out"></i> Đăng xuất
                </a>
              </li>
            </ul>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>
