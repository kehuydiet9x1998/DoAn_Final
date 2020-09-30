<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Swep | 404</title>

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  @include('layouts.css-plugins')

</head>

<body class="hold-transition">
  <div class="wrapper" style="background-color: #ecf0f5; padding-top:50px ">
    <div class="container">
      <section class="content">
        
        <div class="error-page">
          <h2 class="headline text-red"> 500</h2>
          <div class="error-content">
            <h3><i class="fa fa-warning text-red"></i> Oops! Something went wrong.</h3>
            <p>
              Looks like the server encountered an error,
              please report this problem to the administrator.
              Meanwhile, you may return to Home Page. 
            </p>
            <a class="btn btn-sm btn-danger" href="{{ route('auth.login') }}">Go Back!</a>
          </div>

        </div>

      </section>
    </div>
  </div>
</body>
</html>
