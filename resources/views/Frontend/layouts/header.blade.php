<!DOCTYPE html>
<html lang="en">


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

        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

        <style>

#btn--yp {
  box-sizing: content-box;
  position: fixed;
  z-index: 9;
  bottom: 1em;
  right: 1em;
  border: solid 1em transparent;
  width: 4.625em;
  height: 2.25em;
  background: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/2017/icon-yp.svg) 50%/cover content-box;
  font: 16px/ 1.25 trebuchet ms, sans-serif;
  text-indent: 200vw;
  text-shadow: none;
  filter: grayscale(1) drop-shadow(0 0 1px #e8e0e0);
  transition: .5s;
  white-space: nowrap;
}
#btn--yp:before {
  box-sizing: inherit;
  position: absolute;
  left: 0;
  bottom: 100%;
  margin: 1em -.5em;
  padding: .5em;
  width: 100%;
  border-radius: 5px;
  background: #e8e0e0;
  color: #000;
  text-align: center;
  text-decoration: none;
  text-indent: 0vw;
  white-space: normal;
  animation: float 1s ease-in-out infinite alternate;
  content: attr(data-txt);
}
#btn--yp:hover, #btn--yp:focus {
  outline: none;
  filter: grayscale(0) drop-shadow(0 0 1px crimson);
}

@keyframes float {
  to {
    transform: translateY(0.75em);
  }
}


#time {
  position: absolute;
  right: 100vw;
}
#time + label {
  --i: 0;
  --j: calc(1 - var(--i));
  display: grid;
  grid-gap: 0.5em 0.25em;
  overflow: hidden;
  z-index: 9999;
  height: 2.5em;
  border-radius: 1.75em;
  background-image: linear-gradient(to right, #2f80c7, #09e5ab);
  box-shadow: 0px 0px 10px black!important;
  color: transparent;
  user-select: none;
  transition: 0.3s;
  cursor: pointer;
}
#time + label:before, #time + label:after {
  width: 2.5em;
  height: 2.5em;
  transition: inherit;
  content: "";
}
#time + label:before {
  transform-origin: 20% 20%;
  transform: translate(calc(var(--i) * (100% + 0.25em))) scale(calc(1 - var(--i) * 0.7));
  background: yellow;
  --poly: polygon(44.13371% 12.96169%, 50% 0%, 55.86629% 12.96169%, 59.70571% 13.77778%, 63.4388% 14.99073%, 67.02464% 16.58726%, 79.38926% 9.54915%, 76.5165% 23.4835%, 79.14297% 26.40049%, 81.45015% 29.57604%, 83.41274% 32.97536%, 97.55283% 34.54915%, 87.03831% 44.13371%, 87.44861% 48.0374%, 87.44861% 51.9626%, 87.03831% 55.86629%, 97.55283% 65.45085%, 83.41274% 67.02464%, 81.45015% 70.42396%, 79.14297% 73.59951%, 76.5165% 76.5165%, 79.38926% 90.45085%, 67.02464% 83.41274%, 63.4388% 85.00927%, 59.70571% 86.22222%, 55.86629% 87.03831%, 50% 100%, 44.13371% 87.03831%, 40.29429% 86.22222%, 36.5612% 85.00927%, 32.97536% 83.41274%, 20.61074% 90.45085%, 23.4835% 76.5165%, 20.85703% 73.59951%, 18.54985% 70.42396%, 16.58726% 67.02464%, 2.44717% 65.45085%, 12.96169% 55.86629%, 12.55139% 51.9626%, 12.55139% 48.0374%, 12.96169% 44.13371%, 2.44717% 34.54915%, 16.58726% 32.97536%, 18.54985% 29.57604%, 20.85703% 26.40049%, 23.4835% 23.4835%, 20.61074% 9.54915%, 32.97536% 16.58726%, 36.5612% 14.99073%, 40.29429% 13.77778%);
  -webkit-clip-path: var(--poly);
  clip-path: var(--poly);
}
#time + label:after {
  grid-column: 2;
  border-radius: 50%;
  transform: translatey(calc(var(--i) * (-100% - 0.5em)));
  background: radial-gradient(circle at 19% 19%, rgba(0, 0, 0, 0) 41%, #ffffff 43%);
}
#time:checked + label {
  --i: 1;
}
.toggle-button{
    position: absolute;
    bottom: 20px;
    left:20px;
}
body{
    transition: all linear 0.3s;
}


        </style>





	</head>
	<body style="background-color:white;">

		<!-- Main Wrapper -->

		<div class="main-wrapper d-print-none ">

			<!-- Header -->
			<header class="header d-print-none" style="" >
				<nav class="navbar navbar-expand-lg header-nav fixed-top d-print-none"  style="position:fixed">
					<div class="navbar-header d-print-none" >
						<a id="mobile_btn" href="javascript:void(0);">
							<span class="bar-icon">
								<span></span>
								<span></span>
								<span></span>
							</span>
						</a>
						<a href="{{asset('/')}}" class="navbar-brand logo d-print-inline-block ">
						<img src="{{asset('assets/img/LOGO.png')}}"  href="/" alt="Logo" height="65px" class="animate__animated animate__pulse animate__infinite infinite" >
                        </a>
                        {{-- <p style="font-size:10px!important; margin-top:-10px!important; color:#09e5ab!important;"><b>Put your health in good hands</b></p> --}}
					</div>
					<div class="main-menu-wrapper d-print-none">
						<div class="menu-header">
							<a href="index-2.html">
								<img src="{{asset('assets/img/LOGO.png')}}" alt="Logo" height="70px" >
							</a>

						</div>
						<ul class="main-nav">

							<li class="active">
								<a href="{{asset('/')}}">Home</a>
							</li>
							<li class="has-submenu">
								<a href="{{asset('/doctor_list')}}">Consultants</i></a>
							</li>
                            <li class="has-submenu">
								<a href="{{asset('/doctor/doctor_blog')}}">Doctor's blogs</i></a>
							</li>
                            <li class="has-submenu">
								<a href="{{asset('/contact')}}">Contact us</i></a>
							</li>
                            <li class="has-submenu">
								<a href="{{asset('/other/hospital')}}">Other Informations</i></a>
							</li>

							<li class="login-link">
								<a href="">Login / Signup</a>

							</li>
                            {{-- <button type="button" class="btn btn-sm btn-dark " name="dark_light" onclick="toggleDarkMode()" title="Toggle dark/light mode">🌛</button> --}}
						</ul>
					</div>
					<ul class="nav header-navbar-rht d-print-none">
						<li class="nav-item contact-item">
							<div class="header-contact-img">
								<i class="far fa-hospital"></i>
							</div>
							<div class="header-contact-detail">
								<p class="contact-header">Contact</p>
								<p class="contact-info-header"> +91-9120 644 599</p>
							</div>
						</li>

                        {{-- start --}}

                        {{-- Admin Dashboard --}}
                        @if(Route::has('login'))
                            @auth
                                @if(Auth::user()->u_type==='Admin')
                                <li class="nav-item header-log-btn">


						<li class="nav-item dropdown has-arrow logged-item">
							<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
								<span class="user-img">
									<img class="rounded-circle" src="/uploads/Images/{{ Auth::user()->profile_photo}}" width="31" alt="{{Auth::user()->name}}">
								</span>
							</a>
							<div class="dropdown-menu dropdown-menu-right">
								<div class="user-header">
									<div class="avatar avatar-sm">
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
                                            <a class="dropdown-item" href="{{route('doctor.dashboard')}}">Dashboard</a>
                                            <a class="dropdown-item" href="{{url('logout')}}">Logout</a>
                                        </div>

                                        @if (Auth::user()->profile_photo===null)
                                        <img src="{{asset('/uploads/Images/default.png')}}" alt="User Image" class="avatar-img rounded-circle">

                                        @else
                                        <img src="/uploads/Images/{{ Auth::user()->profile_photo}}" alt="User Image" class="avatar-img rounded-circle">

                                        @endif
									</div>
									<div class="user-text">
										<h6>{{ Auth::user()->name }}</h6>
										<p class="text-muted mb-0">{{ Auth::user()->u_type}}</p>
									</div>
								</div>
								<a class="dropdown-item" href="{{route('admin.dashboard')}}">Dashboard</a>
							    <a class="dropdown-item" href="{{url('logout')}}">Logout</a>
							</div>
						</li>
                    </li>

                        {{-- Doctor Dashboard --}}
                                @elseif(Auth::user()->u_type==='Patient')
                                <li class="nav-item ">


						<li class="nav-item dropdown has-arrow logged-item d-print-none">
							<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
								<span class="user-img">
                                    @if (Auth::user()->profile_photo===null)
                                    <img src="{{asset('/uploads/Images/default.png')}}" alt="User Image" class="avatar-img rounded-circle">

                                    @else
                                    <img src="/uploads/Images/{{ Auth::user()->profile_photo}}" alt="User Image" class="avatar-img rounded-circle">

                                    @endif
								</span>
							</a>
							<div class="dropdown-menu dropdown-menu-right d-print-none">
								<div class="user-header">
									<div class="avatar avatar-sm">
                                        @if (Auth::user()->profile_photo===null)
                                        <img src="{{asset('/uploads/Images/default.png')}}" alt="User Image" class="avatar-img rounded-circle">

                                        @else
                                        <img src="/uploads/Images/{{ Auth::user()->profile_photo}}" alt="User Image" class="avatar-img rounded-circle">

                                        @endif
									</div>
									<div class="user-text">
										<h6>{{ Auth::user()->name }}</h6>
										<p class="text-muted mb-0">{{ Auth::user()->u_type }}</p>
									</div>
								</div>
								<a class="dropdown-item" href="{{route('patient.patient-profile-dashboard')}}">Dashboard</a>
							    <a class="dropdown-item" href="{{url('logout')}}">Logout</a>
							</div>
						</li>



                                </li>
                                {{-- Doctor dashboard --}}
                                @else
                                <li class="nav-item header-log-btn">


						<li class="nav-item dropdown has-arrow logged-item  d-print-none ">
							<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
								<span class="user-img">
                                    @if (Auth::user()->profile_photo===null)
                                    <img src="{{asset('/uploads/Images/default.png')}}" alt="User Image" class="avatar-img rounded-circle">

                                    @else
                                    <img src="/uploads/Images/{{ Auth::user()->profile_photo}}" alt="User Image" class="avatar-img rounded-circle">

                                    @endif

								</span>
							</a>
							<div class="dropdown-menu dropdown-menu-right  d-print-none">
								<div class="user-header">
									<div class="avatar avatar-sm">
                                        @if (Auth::user()->profile_photo===null)
                                        <img src="{{asset('/uploads/Images/default.png')}}" alt="User Image" class="avatar-img rounded-circle">

                                        @else
                                        <img src="/uploads/Images/{{ Auth::user()->profile_photo}}" alt="User Image" class="avatar-img rounded-circle">

                                        @endif
									</div>
									<div class="user-text">
										<h6>{{ Auth::user()->name }}</h6>
										<p class="text-muted mb-0">{{ Auth::user()->u_type}}</p>
									</div>
								</div>
								<a class="dropdown-item" href="{{route('doctor.dashboard')}}">Dashboard</a>
							    <a class="dropdown-item" href="{{url('logout')}}">Logout</a>
							</div>
						</li>
                                </li>
                                @endif
                            @else
                            <li class="nav-item header-log-btn">
                                <a class="nav-link header-login" href="{{url('register')}}">login / Signup </a>
                            </li>
                            @endif
                        @endif
                        {{-- end --}}


					</ul>
				</nav>
			</header>
			<!-- /Header -->


            @include('Frontend.layouts.scripts');


