<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
  <title>Admindek | Admin Template</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">

  <link rel="icon" href="https://colorlib.com/polygon/admindek/files/assets/images/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">


  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/waves.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/themify-icons.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/icofont.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-awesome.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/pages.css')}}">
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


  <section class="login-block"
    style="height: 100%; background: url('{{asset("/assets/images/blur.jpg")}}') no-repeat; background-size: 100% 100%">

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12">

          <form class="md-float-material form-material">
            <div class="text-center">
              @include('utils.logo')
            </div>
            <div class="auth-box card">
              <div class="card-block">
                <div class="row m-b-20">
                  <div class="col-md-12">
                    <h3 class="text-center txt-primary">ĐĂNG NHẬP</h3>
                  </div>
                </div>

                <p class="text-muted text-center p-b-5">Chào mừng bạn đến với TEKY</p>
                <div class="form-group form-primary">
                  <input type="text" name="user-name" class="form-control" required="">
                  <span class="form-bar"></span>
                  <label class="float-label">Tên đăng nhập</label>
                </div>
                <div class="form-group form-primary">
                  <input type="password" name="password" class="form-control" required="">
                  <span class="form-bar"></span>
                  <label class="float-label">Mật khẩu</label>
                </div>
                <div class="row m-t-25 text-left">
                  <div class="col-12">
                    <div class="checkbox-fade fade-in-primary">
                      <label>
                        <input type="checkbox" value="">
                        <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                        <span class="text-inverse">Lưu đăng nhập</span>
                      </label>
                    </div>
                    <div class="forgot-phone text-right float-right">
                      <a href="auth-reset-password.html" class="text-right f-w-600"> Quên mật khẩu?</a>
                    </div>
                  </div>
                </div>
                <div class="row m-t-30">
                  <div class="col-md-12"><a href="/dashboard">
                      <button type="button"
                        class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">LOGIN</button>
                    </a></div>

                </div>
                <p style="text-align: center">
                  Hotline lãnh đạo: <b>+84 948-666-183</b>
                </p>
              </div>
            </div>
          </form>

        </div>

      </div>

    </div>



  </section>

  <script type="text/javascript" src="{{asset('assets/js/jquery.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/js/jquery-ui.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/js/popper.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/js/waves.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/js/jquery.slimscroll.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/js/jquery.flot.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/js/jquery.flot.categories.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/js/curvedlines.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/js/jquery.flot.tooltip.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/js/chartist.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/js/amcharts.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/js/serial.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/js/light.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/js/pcoded.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/js/vertical-layout.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/js/custom-dashboard.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/js/script.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/js/modernizr.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/js/css-scrollbars.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/js/common-pages.js')}}"></script>
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="text/javascript"></script>
  <script type="text/javascript">
    window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
  </script>
  <script src="{{asset('assets/js/rocket-loader.min.js')}}" data-cf-settings="d2d1d6e2f87cbebdf4013b26-|49" defer="">
  </script>
</body>

</html>
