<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from colorlib.com/polygon/admindek/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Dec 2019 16:07:52 GMT -->
<!-- Added by HTTrack -->



<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
  <title>Học viện sáng tạo công nghệ TEKY</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">

  <link rel="icon" href="https://colorlib.com/polygon/admindek/files/assets/images/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/waves.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/feather.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/daterangepicker.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/datedropper.min.css')}}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
  {{-- <link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-awesome-n.min.css')}}"> --}}
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-awesome.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/themify-icons.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/icofont.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/chartist.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/widget.css')}}">
  {{-- <link rel="stylesheet" type="text/css" href="{{asset('assets/css/pages.css')}}"> --}}
  <link rel="stylesheet" type="text/css" href="{{asset('css/app.css') }}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/datatables.bootstrap4.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/buttons.datatables.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/responsive.bootstrap4.min.css')}}">

  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/fullcalendar.css')}}">
  {{-- <link rel="stylesheet" type="text/css" href="{{asset('assets/css/fullcalendar.print.css')}}" media='print'> --}}
  @yield('css')

  <style>
    .width-logo {
      width: 160px;
      display: inline-block;
      line-height: 80px;
    }

    .width-logo img {
      max-width: 100%;
      max-height: 80%;
    }

  </style>
</head>

<body>

  <div class="loader-bg">
    <div class="loader-bar"></div>
  </div>

  <div id="pcoded" class="pcoded">
    <div class="pcoded-overlay-box"></div>
    @include('backend.layout.navbar')
    @include('backend.layout.listchat')
    @include('backend.layout.messsagedetail')
    <div class="pcoded-container navbar-wrapper">
      <div class="pcoded-main-container">
        <div class="pcoded-wrapper">
          @include('backend.layout.sidebar')
          <div class="pcoded-content">
            @yield('content')
          </div>
          <div id="styleSelector">
          </div>
        </div>
      </div>
    </div>

    <script type="text/javascript" src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/jquery-ui.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/popper.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/waves.min.js')}}"></script>

    <script type="text/javascript" src="{{asset('assets/js/jquery.slimscroll.js')}}"></script>
    {{-- <script type="text/javascript" src="{{asset('assets/js/jquery.flot.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/jquery.flot.categories.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/jquery.flot.tooltip.min.js')}}"></script> --}}
    <script type="text/javascript" src="{{asset('assets/js/jquery.mcustomscrollbar.concat.min.js')}}"></script>

    <script type="text/javascript" src="{{asset('assets/js/pcoded.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/vertical-layout.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/script.min.js')}}"></script>

    <script type="text/javascript" src="{{asset('assets/js/modernizr.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/css-scrollbars.js')}}">
    </script>
    <script type="text/javascript" src="{{asset('assets/js/classie.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/moment.min-2.js')}}"></script>

    <script type="text/javascript" src="{{asset('assets/js/fullcalendar.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/calendar.js')}}"></script>
    <script src="{{asset('assets/js/rocket-loader.min.js')}}" data-cf-settings="d2d1d6e2f87cbebdf4013b26-|49" defer="">
    </script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/i18n/defaults-*.min.js"></script> --}}
    @yield('script')
</body>

</html>
