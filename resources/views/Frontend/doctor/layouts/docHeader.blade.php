<!DOCTYPE html>
<html lang="en">

<!-- doccure/index.html  30 Nov 2019 04:12:03 GMT -->
<head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
		<title>Healthifly</title>



		<!-- Favicons -->
		<link type="image/x-icon" href="{{asset('assets/img/favicon.png')}}" rel="icon">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/fontawesome.min.css')}}">
		<link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/all.min.css')}}">

		<!-- Main CSS -->
		<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/coustom.css')}}">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>


		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->

	</head>
	<body>

		<!-- Main Wrapper -->
		<div class="main-wrapper">
            <!-- Header -->
			<header class="header d-print-none">
				<nav class="navbar navbar-expand-lg header-nav">
					<div class="navbar-header">
						<a id="mobile_btn" href="javascript:void(0);">
							<span class="bar-icon">
								<span></span>
								<span></span>
								<span></span>
							</span>
						</a>
						<a href="/">
                            <img src="{{asset('assets/img/LOGO.png')}}" alt="Logo"  height="65px" class="animate__animated animate__pulse animate__infinite infinite" >
                        </a>
					</div>
					<div class="main-menu-wrapper">
						<div class="menu-header">
							<a href="{{asset('/')}}" class="navbar-brand logo header-logo">
                                <img src="{{asset('assets/img/LOGO.png')}}" alt="Logo" height="70px" class="animate__animated animate__pulse animate__infinite infinite">
							<a id="menu_close" class="menu-close" href="javascript:void(0);">
								<i class="fas fa-times"></i>
							</a>
						</div>

					</div>
					<ul class="nav header-navbar-rht">
						<li class="nav-item contact-item">
							<div class="header-contact-img">
								<i class="far fa-hospital"></i>
							</div>
							<div class="header-contact-detail">
								<p class="contact-header">Contact</p>
								<p class="contact-info-header"> +91-9120 644 599</p>
							</div>
						</li>

						<!-- User Menu -->
						<li class="nav-item dropdown has-arrow logged-item">
							<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
								<span class="user-img">

                                    @if (Auth::user()->profile_photo===null)
                                    <img src="{{asset('/uploads/Images/default.png')}}" alt="User Image" class="avatar-img rounded-circle">

                                    @else
                                    <img src="/uploads/Images/{{ Auth::user()->profile_photo}}" alt="User Image" class="avatar-img rounded-circle">

                                    @endif
									{{-- <img class="rounded-circle" src="/uploads/Images/{{ Auth::user()->profile_photo}}" width="31" alt="Darren Elder"> --}}
								</span>


							</a>
							<div class="dropdown-menu dropdown-menu-right">
								<div class="user-header">
									<div class="avatar avatar-sm">
                                        @if (Auth::user()->profile_photo===null)
                                        <img src="{{asset('/uploads/Images/default.png')}}" alt="User Image" class="avatar-img rounded-circle">

                                        @else
                                        <img src="/uploads/Images/{{ Auth::user()->profile_photo}}" alt="User Image" class="avatar-img rounded-circle">

                                        @endif
                                        {{-- <img src="/uploads/Images/{{ Auth::user()->profile_photo}}" alt="User Image" class="avatar-img rounded-circle"> --}}
									</div>
									<div class="user-text">
										<h6>{{ Auth::user()->name }}</h6>
										<p class="text-muted mb-0">{{ Auth::user()->u_type}}</p>
									</div>
								</div>


								<a class="dropdown-item" href="{{url('logout')}}">Logout</a>
							</div>
						</li>
						<!-- /User Menu -->

					</ul>
				</nav>
			</header>
			<!-- /Header -->

			{{-- <!-- Breadcrumb -->
			<div class="breadcrumb-bar">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-md-12 col-12">
							<nav aria-label="breadcrumb" class="page-breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Dashboard</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">Dashboard</h2>
						</div>
					</div>
				</div>
			</div>
			<!-- /Breadcrumb --> --}}


