<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="icon" href="%PUBLIC_URL%/favicon.ico" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">

  <link rel="stylesheet" href="{{asset('assets/fonts/roboto.css')}}" />
  <link rel="stylesheet" href="{{asset('assets/fonts/material_ui_icon.css')}}" />
  <link rel="stylesheet" href="{{asset('assets/fonts/paytone_one.css')}}">
  <link rel="stylesheet" href="{{asset('assets/fonts/montserrat.css')}}">
  <link rel="stylesheet" href="{{asset('assets/fonts/poppins.css')}}">

  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/frontend.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-awesome-n.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-awesome.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/slick.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">

  <title>TEKY EDU</title>
</head>

<body>
  <div id="fb-root"></div>
  <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v8.0"
    nonce="Mj1BlSFb"></script>
  @yield('content')


  <script type="text/javascript" src="{{asset('assets/js/jquery.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/js/jquery-ui.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/app.js')}}"></script>

</body>

</html>
