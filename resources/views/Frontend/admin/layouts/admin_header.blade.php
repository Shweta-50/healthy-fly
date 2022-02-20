

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:20 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>Admin - Dashboard</title>

        <!-- Favicons -->
        <link type="image/x-icon" href="{{asset('assets/img/favicon.png')}}" rel="icon">

		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{asset('admin/assets/css/bootstrap.min.css')}}">

		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="{{asset('admin/assets/css/font-awesome.min.css')}}">

		<!-- Feathericon CSS -->
        <link rel="stylesheet" href="{{asset('admin/assets/css/feathericon.min.css')}}">

		<link rel="stylesheet" href="{{asset('assets/plugins/morris/morris.css')}}">

		<!-- Main CSS -->
        <link rel="stylesheet" href="{{asset('admin/assets/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('admin/assets/css/coustom.css')}}">


        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>


		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
        <style>
            .logo {
    display: inline-block;
    margin-right: 90px;
    width: 250px;
    font-size: 25px;
    font-weight: bold;

    background: -webkit-linear-gradient(#15558d 50%, #09e0a7 50%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

body::-webkit-scrollbar {
    width: 1em;
    padding: 4px;
}

body::-webkit-scrollbar-track {
    box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
    box-shadow: inset 0 0 5px grey;
    border-radius: 10px;
}

body::-webkit-scrollbar-thumb {
    background-image: linear-gradient(to right, #2f80c7, #09e5ab);
    border-radius: 10px;
}
        </style>
    </head>
    <body>

		<!-- Main Wrapper -->
        <div class="main-wrapper">

			<!-- Header -->
            <div class="header">

				<!-- Logo -->
                <div class="header-left">
                    <a href="/">
                        <img src="{{asset('assets/img/LOGO.png')}}" alt="Logo" href="/" height="55px" class="menu-logo animate__animated animate__pulse animate__infinite	infinite" >
                    </a>
                </div>
				<!-- /Logo -->

				<a href="javascript:void(0);" id="toggle_btn">
					<i class="fe fe-text-align-left ml-3"></i>
				</a>

				<div class="top-nav-search">
					<form>
						<input type="text" class="form-control" placeholder="Search here">
						<button class="btn" type="submit"><i class="fa fa-search"></i></button>
					</form>
				</div>

				<!-- Mobile Menu Toggle -->
				<a class="mobile_btn" id="mobile_btn">
					<i class="fa fa-bars"></i>
				</a>
				<!-- /Mobile Menu Toggle -->

				<!-- Header Right Menu -->
				<ul class="nav user-menu">



					<!-- User Menu -->
					<li class="nav-item dropdown has-arrow">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
							<span class="user-img"><img class="rounded-circle" src="/uploads/Images/{{ Auth::user()->profile_photo}}" alt="Admin" height="40px" width="40px" ></span>
						</a>
						<div class="dropdown-menu">
							<div class="user-header">
								<div class="avatar avatar-sm" >
                                        @if (Auth::user()->profile_photo===null)
                                        <img src="{{asset('/uploads/Images/default.png')}}" alt="User Image" class="avatar-img rounded-circle" style="height: 40px; width:40px;">

                                        @else
                                        <img src="/uploads/Images/{{ Auth::user()->profile_photo}}" alt="User Image" class="avatar-img rounded-circle"  style="height: 40px; width:40px;">

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
				<!-- /Header Right Menu -->

            </div>
			<!-- /Header -->

            @include('Frontend.layouts.scripts');
