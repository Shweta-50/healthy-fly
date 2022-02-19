<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Favicons -->
		<link type="image/x-icon" href="{{asset('assets/img/favicon.png')}}" rel="icon">
    <title>Healthifly</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<style>

    .payment{
        float: right;
        margin-top: 0px;
        margin-right: 600px;
        margin-bottom: 100px;
    }
    body{
        font-family: "Open Sans", sans-serif !important;
    }
</style>

</head>
<body>

    @include('Frontend.doctor.layouts.docHeader')


    <!-- Breadcrumb -->
			<div class="breadcrumb-bar">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-md-12 col-12">
							<nav aria-label="breadcrumb" class="page-breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{asset('/')}}">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Checkout</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">Checkout</h2>
						</div>
					</div>
				</div>
			</div>
			<!-- /Breadcrumb -->

			<!-- Page Content -->
			<div class="content">
				<div class="container">

					<div class="row">
						<div class="col-md-7 col-lg-8 ">
							<div class="card shadow">
								<div class="card-body">



									<!-- Checkout Form -->
									<form action="/payment" method="post">
                                        @csrf
										<!-- Personal Information -->
										<div class="info-widget">
											<h4 class="card-title">Confirm Information</h4>
											<div class="row">

												<div class="col-md-6 col-sm-12">
													<div class="form-group card-label">
														<label>Full Name</label>
														<input class="form-control" type="text" name="pname" value="{{Auth::user()->name}}" readonly >
													</div>
												</div>
												<div class="col-md-6 col-sm-12">
													<div class="form-group card-label">
														<label>Email</label>
														<input class="form-control" type="email" name="email" value="{{Auth::user()->email}}" readonly>
													</div>
												</div>
												<div class="col-md-6 col-sm-12">
													<div class="form-group card-label">
														<label>Phone</label>
														<input class="form-control" type="text" name="phone" value="{{Auth::user()->phone}}" readonly>
													</div>
												</div>

                                                <div class="col-md-6 col-sm-12">
													<div class="form-group card-label">
														<label>Amount</label>
                                                        @if (Session::has('doc_fees'))
                                                        <input class="form-control" type="text" name="amount" value="{{Session::get('doc_fees')}}" readonly>
                                                        @endif

													</div>
												</div>
                                                @if (Session::has('doc_id'))
                                                <input class="form-control" type="hidden" name="doc_id" value="{{Session::get('doc_id')}}" >
                                                @endif
                                                @if (Session::has('doc_name'))
                                                <input class="form-control" type="hidden" name="doc_name" value="{{Session::get('doc_name')}}" >
                                                @endif


											</div>

										</div>
										<!-- /Personal Information -->

										<div class="payment-widget">
											<h4 class="card-title">Payment Method</h4>

											<!-- Terms Accept -->
											<div class="terms-accept">
												<div class="custom-checkbox">
												   <input type="checkbox" id="terms_accept">
												   <label for="terms_accept">I have read and accept <a href="#">Terms &amp; Conditions</a></label>
												</div>
											</div>
											<!-- /Terms Accept -->

											<!-- Submit Section -->
											<div class="submit-section mt-4">
												<button type="submit" class="btn btn-primary submit-btn">Pay Now</button>
                                                <a type="submit" href="/patient-profile-dashboard" class="btn btn-dark submit-btn">Pay Later</a>
											</div>


											<!-- /Submit Section -->

										</div>
									</form>
									<!-- /Checkout Form -->

								</div>
							</div>

						</div>

						<div class="col-md-5 col-lg-4 theiaStickySidebar">

							<!-- Booking Summary -->
							<div class="card booking-card shadow">
								<div class="card-header">
									<h4 class="card-title">Booking Summary</h4>
								</div>
								<div class="card-body">

									<!-- Booking Doctor Info -->
									<div class="booking-doc-info">
										<a href="doctor-profile.html" class="booking-doc-img">
                                            @if (Session::has('doc_profile_photo'))
                                            <img src="/uploads/Images/{{Session::get('doc_profile_photo')}}"  alt="User Image">
                                                {{-- {{Session::get('doc_profile_photo')}} --}}
                                            @endif
										</a>
										<div class="booking-info">
											<h4><a href="doctor-profile.html">@if (Session::has('doc_name'))
                                                {{Session::get('doc_name')}}
                                            @endif</a></h4>
											<div ><h6><i class="fas fa-stethoscope"></i>
												@if (Session::has('doc_specilist'))
                                                    {{Session::get('doc_specilist')}}
                                                @endif
                                                </h6>
											</div>
											<div class="clinic-details">
												<p class="doc-location"><i class="fas fa-map-marker-alt"></i>
                                                    @if (Session::has('doc_address'))
                                                    {{Session::get('doc_address')}}
                                                @endif
                                                </p>
											</div>
										</div>
									</div>
									<!-- Booking Doctor Info -->

									<div class="booking-summary">
										<div class="booking-item-wrap">
											{{-- <ul class="booking-date">
												<li>Appointment Date <span>

                                                </span></li>
												<li> Appointment Time <span>
                                            </span></li>
											</ul> --}}
											<ul class="booking-fee">
												<li>Consulting Fee <span>@if (Session::has('doc_fees'))
                                                    {{Session::get('doc_fees')}}
                                                @endif</span></li>

											</ul>
											<div class="booking-total">
												<ul class="booking-total-list">
													<li>
														<span>Total</span>
														<span class="total-cost">@if (Session::has('doc_fees'))
                                                            ₹{{Session::get('doc_fees')}}
                                                        @endif</span>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /Booking Summary -->

						</div>
					</div>

				</div>

			</div>
			<!-- /Page Content -->



    <div class="payment">
    @if(Session::has('amount'))
    <div class="container tex-center mx-auto">
    <form action="/pay" method="POST" >

        <script src="https://checkout.razorpay.com/v1/checkout.js"
        data-key="rzp_test_vgXUbtHRVFIrY6"
        data-amount="{{Session::get('amount')}}"
        data-currency="INR"
        data-order_id="{{Session::get('order_id')}}"
        data-buttontext="For Payment Click here"

        data-name="Heathifly"
        data-description="Rozerpay"
        data-image="{{url('assets/img/LOGO.png')}}"
        data-prefill.name="name"
        data-prefill.email="email"
        data-theme.color="#40E0D0">
</script>

      </form>

    </div>
@endif
    </div>




