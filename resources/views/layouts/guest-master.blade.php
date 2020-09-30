<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Laravel Admindek</title>
  <link rel="shortcut icon" href="{{ asset('favicon.png') }}">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">
  @include('layouts.css-plugins')
</head>
<body>
  <div class="loader-bg">
    <div class="loader-bar"></div>
  </div>
  <div id="pcoded" class="pcoded">
    <div class="pcoded-overlay-box"></div>
    
    {{-- NAVIGATION --}}
    <div class="pcoded-container navbar-wrapper">
      <nav class="navbar header-navbar pcoded-header">
        <div class="navbar-wrapper">
          <div class="navbar-logo">
            <a href="#" style="font-size:17px;">Laravel Admindek</a>
          </div>
          <div class="navbar-container container-fluid">
            <ul class="nav-left">
              <li>
                <a href="#" onclick="javascript:toggleFullScreen()" class="waves-effect waves-light">
                  <i class="full-screen feather icon-maximize"></i>
                </a>
              </li>
            </ul>
            <ul class="nav-right">
              <li class="header-notification">
                <div class="dropdown-primary dropdown">
                  <a href="#">Login</a>
                </div>
              </li>
              <li class="header-notification">
                <div class="dropdown-primary dropdown">
                  <a href="#">Info</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>

    {{-- BODY --}}
    <div class="pcoded-main-container">
      <div class="pcoded-wrapper">
        <div class="pcoded-content">
          <div class="pcoded-inner-content">
            <div class="main-body">
              <div class="page-wrapper">
                <div class="page-body">
                  @yield('content')
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
  @include('layouts.js-plugins')
  <script type="text/javascript" src="{{ asset('template2/assets/js/vertical/menu/menu-hori-fixed.js') }}"></script>
</body>
</html>