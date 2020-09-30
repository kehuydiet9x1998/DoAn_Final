<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Admindek Laravel</title>
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
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
		<div class="pcoded-container navbar-wrapper">

			{{-- TOP NAVIGATION --}}
			<nav class="navbar header-navbar pcoded-header">
				<div class="navbar-wrapper">
					<div class="navbar-logo">
						<a href="#">Laravel Admindek</a>
						<a class="mobile-menu" id="mobile-collapse" href="#!">
							<i class="feather icon-menu icon-toggle-right"></i>
						</a>
						<a class="mobile-options waves-effect waves-light">
							<i class="feather icon-more-horizontal"></i>
						</a>
					</div>
					<div class="navbar-container container-fluid">
						<ul class="nav-left">
							<li>
								<a href="#!" onclick="javascript:toggleFullScreen()" class="waves-effect waves-light">
									<i class="full-screen feather icon-maximize"></i>
								</a>
							</li>
						</ul>
						<ul class="nav-right">
							<li class="user-profile header-notification">
								<div class="dropdown-primary dropdown">
									<div class="dropdown-toggle" data-toggle="dropdown">
										<img src="{{asset('images/avatar.jpeg')}}" class="img-radius" alt="User-Profile-Image">
										<span>John Doe</span>
										<i class="feather icon-chevron-down"></i>
									</div>
									<ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
										<li>
											<a href="#">
												<i class="feather icon-user"></i> Profile
											</a>
										</li>
										<li>
											<a href="auth-sign-in-social.html">
												<i class="feather icon-log-out"></i> Logout
											</a>
										</li>
									</ul>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</nav>


			<div class="pcoded-main-container">
				<div class="pcoded-wrapper">

					{{-- SIDE NAVIGATION --}}
					<nav class="pcoded-navbar">
						<div class="nav-list">
							<div class="pcoded-inner-navbar main-menu">
								<div class="pcoded-navigation-label">Navigation</div>
								<ul class="pcoded-item pcoded-left-item">
									<li class="pcoded-hasmenu">
										<a href="javascript:void(0)" class="waves-effect waves-dark">
											<span class="pcoded-micon"><i class="feather icon-home"></i></span>
											<span class="pcoded-mtext">Dashboard</span>
										</a>
										<ul class="pcoded-submenu">
											<li class="">
												<a href="index-2.html" class="waves-effect waves-dark">
													<span class="pcoded-mtext">Default</span>
												</a>
											</li>
											<li class="">
												<a href="dashboard-crm.html" class="waves-effect waves-dark">
													<span class="pcoded-mtext">CRM</span>
												</a>
											</li>
											<li class="">
												<a href="dashboard-analytics.html" class="waves-effect waves-dark">
													<span class="pcoded-mtext">Analytics</span>
													<span class="pcoded-badge label label-info ">NEW</span>
												</a>
											</li>
										</ul>
									</li>
								</ul>
							</div>
						</div>
					</nav>

					{{-- BODY --}}
					<div class="pcoded-content">
						<div class="page-header card">
							<div class="row align-items-end">
								<div class="col-lg-8">
									<div class="page-header-title">
										<i class="feather icon-watch bg-c-blue"></i>
										<div class="d-inline">
											<h5>Sample page</h5>
											<span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="pcoded-inner-content">
							<div class="main-body">
								<div class="page-wrapper">
									<div class="page-body">
										<div class="row">
											<div class="col-sm-12">
												<div class="card">
													<div class="card-header">
														<h5>Hello card</h5>
														<div class="card-header-right">
															<ul class="list-unstyled card-option">
																<li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i></li>
																<li><i class="feather icon-maximize full-card"></i></li>
																<li><i class="feather icon-minus minimize-card"></i></li>
																<li><i class="feather icon-refresh-cw reload-card"></i></li>
																<li><i class="feather icon-trash close-card"></i></li> <li><i class="feather icon-chevron-left open-card-option"></i></li>
															</ul>
														</div>
													</div>
													<div class="card-block">
														<p>
															"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
															in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
														</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>


				</div>
			</div>
		</div>
	</div>

@include('layouts.js-plugins')
</body>
</html>