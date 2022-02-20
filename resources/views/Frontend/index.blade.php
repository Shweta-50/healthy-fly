

@extends('Frontend.layouts.main')


@section('main-container')

<section>


    <!-- Main navigation -->
    <header>


      <!-- Full Page Intro -->
      <div class="view" >
        <!-- Mask & flexbox options-->
        <div class="mask rgba-gradient align-items-center">
          <!-- Content -->
          <div class="container hero-intro " style="height: 99vh;">
            <!--Grid row-->
            <div class="row " style="padding-top:100px;">
              <!--Grid column-->
              <div class="col-md-6 white-text text-center text-md-left mt-xl-5 mb-5 wow fadeInLeft" data-wow-delay="0.3s">
                <h1 class="h1-responsive blog-h font-weight-bold text-white  title-part line-1 mt-sm-5 animate__animated animate__bounceInLeft">Welcome To Healthi-Fly</h1>
                <hr class="hr-light">
                <h3 class="mb-4 text-white animate__animated animate__backInRight" >“Your Most Trusted Health Partner for Life, so Putting your health in a good and safe hands. Be aware about health and live life peacefully.”</h3>
                <h5 class="text-white animate__animated animate__bounceInLeft">Emergency 24*7 Available For You</h5>
                <a href="tel:+1888 5555 55" class="btn  btn-danger btn-rounded text-white btn-lg animate__animated animate__bounceInLeft"> 1888 5555 55 <i class="fa fa-phone"></i></a>

              </div>
              <!--Grid column-->
              <!--Grid column-->
              <div class="col-md-6 col-xl-5 mt-xl-5 wow fadeInRight" data-wow-delay="0.3s">
                <img src="{{asset('assets/img/d1.png')}}" alt="" class="img-fluid home-img" class="animate__animated animate__heartBeat" id="img-hero" style="max-width: 110%; margin-left:50px; filter:drop-shadow(0px 0px 10px black); filter: none;">
              </div>
              <!--Grid column-->
            </div>
            <!--Grid row-->
          </div>
          <!-- Content -->
        </div>
        <!-- Mask & flexbox options-->
      </div>
      <!-- Full Page Intro -->
    </header>
    <!-- Main navigation -->
    <!--Main Layout-->



</section>


<!-- Return to Top -->
<a href="javascript:" id="return-to-top"><i class="fa fa-chevron-up" aria-hidden="true"></i></a>
			<!-- Clinic and Specialities -->
			<section class="section section-specialities">
				<div class="container-fluid">
					<div class="section-header text-center">
						<h2 > Specialities</h2>
                        <hr class=" animate__animated  animate__zoomIn  animate__infinite "
                        style="width:110px; background-color:red; height: 4px; margin: 4px auto;">

						<p class="sub-title">“God can not come for us all the time that’s why he sent doctors for us, the presence of the doctor is the beginning of the cure.”</p>
					</div>
					<div class="row justify-content-center">
						<div class="col-md-9">
							<!-- Slider -->
							<div class="specialities-slider slider">

								<!-- Slider Item -->
								<div class="speicality-item text-center">
									<div class="speicality-img  animate__animated animate__pulse animate__infinite	infinite" style="box-shadow:0px 7px 10px #2f80c7">
										<img src="assets/img/specialities/specialities-01.png" class="img-fluid " alt="Speciality">
										<span><i class="fa fa-circle" aria-hidden="true"></i></span>
									</div>
									<p>Urology</p>
								</div>
								<!-- /Slider Item -->

								<!-- Slider Item -->
								<div class="speicality-item text-center">
									<div class="speicality-img animate__animated animate__pulse animate__infinite	infinite" style="box-shadow:0px 7px 10px #2f80c7">
										<img src="assets/img/specialities/specialities-02.png" class="img-fluid" alt="Speciality">
										<span><i class="fa fa-circle" aria-hidden="true"></i></span>
									</div>
									<p>Neurology</p>
								</div>
								<!-- /Slider Item -->

								<!-- Slider Item -->
								<div class="speicality-item text-center">
									<div class="speicality-img animate__animated animate__pulse animate__infinite	infinite" style="box-shadow:0px 7px 10px #2f80c7">
										<img src="assets/img/specialities/specialities-03.png" class="img-fluid" alt="Speciality">
										<span><i class="fa fa-circle" aria-hidden="true"></i></span>
									</div>
									<p>Orthopedic</p>
								</div>
								<!-- /Slider Item -->

								<!-- Slider Item -->
								<div class="speicality-item text-center">
									<div class="speicality-img animate__animated animate__pulse animate__infinite	infinite" style="box-shadow:0px 7px 10px #2f80c7">
										<img src="assets/img/specialities/specialities-04.png" class="img-fluid " alt="Speciality">
										<span><i class="fa fa-circle" aria-hidden="true"></i></span>
									</div>
									<p>Cardiologist</p>
								</div>
								<!-- /Slider Item -->

								<!-- Slider Item -->
								<div class="speicality-item text-center">
									<div class="speicality-img  animate__animated animate__pulse animate__infinite	infinite" style="box-shadow:0px 7px 10px #2f80c7">
										<img src="assets/img/specialities/specialities-05.png" class="img-fluid " alt="Speciality">
										<span><i class="fa fa-circle" aria-hidden="true"></i></span>
									</div>
									<p>Dentist</p>
								</div>
								<!-- /Slider Item -->

							</div>
							<!-- /Slider -->

						</div>
					</div>
				</div>
			</section>
			<!-- Clinic and Specialities -->

			<!-- Popular Section -->
			<section class="section section-doctor">
				<div class="container-fluid">
				   <div class="row">

						<div class="col-lg-4">
							<div class="section-header ">
								<h2 class="text-center">Book Our Doctor</h2>
                                <hr class=" animate__animated  animate__zoomIn  animate__infinite "
                                style="width:200px; background-color:red; height: 4px; margin: 4px auto;">
								<p>“If you make more appointments with quality people, you will have less disappointments with non-quality people.” </p>
							</div>
							<div class="about-content">
								<p>Avail highly specialized medical treatment from the expert team in India! With modern state-of-the-art infrastructure, latest technology and equipment, well-trained doctors and staff, Healthifly offers the best treatment for common diseases.

                                    Healthifly strives to deliver excellence in patient care by providing quality health services. Get special care by trained professionals and recover faster! Book an appointment with your nearby best doctors at Healthifly.</p>
								<a href="javascript:;">Read More..</a>
							</div>
						</div>
						<div class="col-lg-8">
							<div class="doctor-slider slider" >





                                <!-- Doctor Widget -->

                                @foreach ($doctors as $doctor)
								<div class="profile-widget" style="height: 100%;width:100%;">
									<div class="doc-img">
										<a >
											<img  class="img-fluid"  alt="User Image"  src="/uploads/Images/{{$doctor->profile_photo}}" style="height: 200px!important; width:250px!important;">
										</a>
										<a href="javascript:void(0)" class="fav-btn">
											<i class="far fa-bookmark"></i>
										</a>
									</div>
									<div class="pro-content">
										<h3 class="title">
											<a >{{$doctor->name}}</a>
											<i class="fas fa-check-circle verified"></i>
										</h3>
										<p class="speciality">{{$doctor->education}}-{{$doctor->specilist}}</p>
										<div class="rating">
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star"></i>

										</div>
										<ul class="available-info">
											<li>
												<i class="fas fa-map-marker-alt"></i> {{$doctor->address}}
											</li>
											<li>
												{{-- <i class="far fa-clock"></i> Available on Fri, 22 Mar --}}
											</li>
											<li>
												<i class="fas fa-rupee-sign"></i>{{$doctor->fees}}

											</li>
										</ul>
										<div class="row row-sm">
											<div class="col-6">
												<a href="{{'/doctor/doctor_view_profile'}}/{{$doctor->id}}" class="btn view-btn">View Profile</a>
											</div>
											<div class="col-6">

                                                @if (Auth::check())
                                                @if (Auth::user()->u_type==='Doctor')
                                                <a href="#" onclick="alert(`Oops! You are a doctor, Can't take appointment`)" class="btn book-btn">Book Now</a>
                                                @elseif (Auth::user()->u_type==='Admin')
                                                <a href="#" onclick="alert(`Oops! You are Admin, Can't take appointment`)" class="btn book-btn">Book Now</a>
                                                @elseif(Auth::user()->u_type==='Patient')
                                                <a href="{{'/patient/appointment'}}/{{$doctor->id}}" class="btn book-btn">Book Now</a>
                                                @else
                                                <a href="{{'/patient/appointment'}}/{{$doctor->id}}" class="btn book-btn">Book Now</a>
                                                @endif
                                                @endif
											</div>
										</div>
									</div>
								</div>
                                @endforeach

							</div>
						</div>
				   </div>
				</div>
			</section>
			<!-- /Popular Section -->


            <!-- ............why use health....... -->

    <div class="container whyt ">
        <section class="text-gray-700 body-font py-3" >
            <h2 class="text-center mt-5">Why use Healthifly ? </h2>
          <hr class=" animate__animated  animate__zoomIn  animate__infinite "
            style="width:200px; background-color:red; height: 4px; margin: 4px auto;"><br>
          <div class="container mt-2">


            <div class="container">
                <div class="row mt-4">
                <div class="col-12 col-sm-6 col-md-3" >
                <div class="flip-div" >
                <div class="flip-main" >
                <div class="front">
                <div class="card shadow"  >
                <div class="card-body text-center pb-2 why-health">
                <p><img class="rounded-circle " src="{{asset('assets/img/social.png')}}"></p>
                <h5 class="card-title"><strong>Connect</strong></h5>
                <p class="card-text">Connection between doctors and patients that leads to care.</p>
                <a href="#" class="btn btn-info btn-sm"><i class="fa fa-arrow-right"></i></a>
                </div>
                </div>
                </div>
                <div class="back rounded">
                <div class="card" style="background-color: #09e5ab; color:white;">
                <div class="card-body text-center">
                <h4 class="card-title"><strong>Connect</strong></h4>
                <p class="card-text">We understand healthcare goes beyond signs, symptoms, diagnosis and treatment. it's about the deep connection between doctors and patients that leads to continuous care and sustained better outcomes.</p>
                <ul class="list-inline">
                <li class="list-inline-item">
                <a class="social-icon text-xs-center text-info" target="_blank" href="#">
                <i class="fa fa-facebook"></i>
                </a>
                </li>
                <li class="list-inline-item">
                <a class="social-icon text-xs-center text-info" target="_blank" href="#">
                <i class="fa fa-twitter"></i>
                </a>
                </li>
                <li class="list-inline-item">
                <a class="social-icon text-xs-center text-info" target="_blank" href="#">
                <i class="fa fa-skype"></i>
                </a>
                </li>
                <li class="list-inline-item">
                <a class="social-icon text-xs-center text-info" target="_blank" href="#">
                <i class="fa fa-google"></i>
                </a>
                </li>
                </ul>
                </div>
                </div>
                </div>
                </div>
                </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="flip-div" >
                <div class="flip-main">
                <div class="front">
                <div class="card shadow">
                <div class="card-body text-center pb-2 why-health" >
                <p><img class="rounded-circle" src="{{asset('assets/img/trophy.png')}}"></p>
                <h5 class="card-title"><strong>Trust</strong></h5>
                <p class="card-text">We will do everyhing, we possible can to uphold this trust.</p>
                <a href="#" class="btn btn-info btn-sm"><i class="fa fa-arrow-right"></i></a>
                </div>
                </div>
                </div>
                <div class="back rounded">
                <div class="card" style="background-color: #09e5ab; color:white;">
                <div class="card-body text-center">
                <h4 class="card-title"><strong>Trust</strong></h4>
                <p class="card-text">We believe in full disclosure We believe in communicating openly and honestly and holding ourselves to the highest ethical standards.</p>
                <ul class="list-inline">
                <li class="list-inline-item">
                <a class="social-icon text-xs-center text-info text-center" target="_blank" href="#">
                <i class="fa fa-facebook"></i>
                </a>
                </li>
                <li class="list-inline-item">
                <a class="social-icon text-xs-center text-info" target="_blank" href="#">
                <i class="fa fa-twitter"></i>
                </a>
                </li>
                <li class="list-inline-item">
                <a class="social-icon text-xs-center text-info" target="_blank" href="#">
                <i class="fa fa-skype"></i>
                </a>
                </li>
                <li class="list-inline-item">
                <a class="social-icon text-xs-center text-info" target="_blank" href="#">
                <i class="fa fa-google"></i>
                </a>
                </li>
                </ul>
                </div>
                </div>
                </div>
                </div>
                </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="flip-div" >
                <div class="flip-main">
                <div class="front">
                <div class="card shadow" >
                <div class="card-body text-center pb-2 why-health">
                <p><img class="rounded-circle" src="{{asset('assets/img/nurse.png')}}"></p>
                <h5 class="card-title"><strong>Personal Attention</strong></h5>
                <p class="card-text">Health improve when physicians individualize care patients.</p>
                <a href="#" class="btn btn-info btn-sm"><i class="fa fa-arrow-right"></i></a>
                </div>
                </div>
                </div>
                <div class="back rounded">
                <div class="card" style="background-color: #09e5ab; color:white;">
                <div class="card-body text-center">
                <h4 class="card-title"><strong>Personal Attention</strong></h4>
                <p class="card-text">Developing self-confidence, love, and trust for others are key aspects that help to define emotional wellness. Having and maintaining a strong, healthy emotional aspect of personal wellness can help cope with emotional challenges in life.</p>
                <ul class="list-inline">
                <li class="list-inline-item">
                <a class="social-icon text-xs-center text-info" target="_blank" href="#">
                <i class="fa fa-facebook"></i>
                </a>
                </li>
                <li class="list-inline-item">
                <a class="social-icon text-xs-center text-info" target="_blank" href="#">
                <i class="fa fa-twitter"></i>
                </a>
                </li>
                <li class="list-inline-item">
                <a class="social-icon text-xs-center text-info" target="_blank" href="#">
                <i class="fa fa-skype"></i>
                </a>
                </li>
                <li class="list-inline-item">
                <a class="social-icon text-xs-center text-info" target="_blank" href="#">
                <i class="fa fa-google"></i>
                </a>
                </li>
                </ul>
                </div>
                </div>
                </div>
                </div>
                </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 ">
                <div class="flip-div" >
                <div class="flip-main">
                <div class="front">
                <div class="card shadow">
                <div class="card-body text-center pb-2 why-health">
                <p><img class="rounded-circle" src="{{asset('assets/img/contact1.png')}}"></p>
                <h5 class="card-title"><strong>Expert Advice</strong></h5>
                <p class="card-text">Consult about your disease and put your health in right hands.</p>
                <a href="#" class="btn btn-info btn-sm"><i class="fa fa-arrow-right"></i></a>
                </div>
                </div>
                </div>
                <div class="back rounded">
                <div class="card" style="background-color: #09e5ab; color:white;">
                <div class="card-body text-center">
                <h4 class="card-title"><strong>Expert Advice</strong></h4>
                <p class="card-text">On our website, you can directly contact the experts and inquire about your disease and also take appointments for the best doctors because your health is our first priority.</p>
                <ul class="list-inline">
                <li class="list-inline-item">
                <a class="social-icon text-xs-center text-info" target="_blank" href="#">
                <i class="fa fa-facebook"></i>
                </a>
                </li>
                <li class="list-inline-item">
                <a class="social-icon text-xs-center text-info" target="_blank" href="#">
                <i class="fa fa-twitter"></i>
                </a>
                </li>
                <li class="list-inline-item">
                <a class="social-icon text-xs-center text-info" target="_blank" href="#">
                <i class="fa fa-skype"></i>
                </a>
                </li>
                <li class="list-inline-item">
                <a class="social-icon text-xs-center text-info" target="_blank" href="#">
                <i class="fa fa-google"></i>
                </a>
                </li>
                </ul>
                </div>
                </div>
                </div>
                </div>
                </div>
                </div>
                </div>





          </div>
        </section>
      </div>

      {{-- why health --}}


			{{-- Testimonial --}}
			{{-- Testimonial --}}
			<section class="section section-features bg-white section-doctor">
				<div class="container-fluid">
                    <div class="section-header text-center">
						<h2> Our Happy Clints Say's..</h2>
                        <hr class=" animate__animated  animate__zoomIn  animate__infinite "
                        style="width:300px; background-color:red; height: 4px; margin: 4px auto;"><br>
						<p class="sub-title">If you’re happy, if you’re feeling good then nothing else matters <br>A healthy body holds a Healthy Soul.</p>
					</div>
				   <div class="row testimonial-section">

					<div class="col-lg-8 mx-auto">
						<div class="doctor-slider slider">

                            @foreach (  $patients as  $patient )



                            <!-- Doctor Widget -->
							<div class="profile-widget test-card" style="height:350px;">
								<div class="doc-img">
									<a >
										<img class="img-fluid " height="200px" width="200px"alt="User Image" src="{{asset('uploads/Images')}}/{{$patient ->p_profile }}" style="border-radius: 50%">
									</a>
                                </div>
                                <p style="margin-left:70px;margin-top:10px;"><b>{{$patient ->p_name }}</b></p>
                                <p class="text-center">{{$patient ->feedback}}</p>
                            </div>
							<!-- /Doctor Widget -->

                            @endforeach
                        </div>
					</div>
				   </div>
				</div>
			</section>
			{{-- End-Testimonial --}}





			{{-- End-Testimonial --}}
            <script>
                window.watsonAssistantChatOptions = {
                    integrationID: "cf113735-dc1c-405e-aa0f-9cc340316ade", // The ID of this integration.
                    region: "eu-gb", // The region your integration is hosted in.
                    serviceInstanceID: "09dec7be-ab7e-4a43-877f-57624c5b7b51", // The ID of your service instance.
                    onLoad: function(instance) { instance.render(); }
                  };
                setTimeout(function(){
                  const t=document.createElement('script');
                  t.src="https://web-chat.global.assistant.watson.appdomain.cloud/loadWatsonAssistantChat.js";
                  document.head.appendChild(t);
                });
              </script>

<script>
    function toggleDarkMode() {
     var element = document.body;
     var img = document.querySelectorAll('img');
     var imgHero = document.querySelector('#img-hero');
     var contactImg = document.querySelector('.invert-revert');

     var logoheader = document.querySelector('#logoheader');
     var headerNav = document.querySelector('.header-nav');
     element.classList.toggle("dark-mode");
     img.forEach(element => {
         element.classList.toggle("dark-mode-img");
         imgHero.classList.toggle("not-invert");
         contactImg.classList.toggle("not-invert");
         logoheader.classList.toggle("not-invert");

    });

     }
 </script>


<script>
    // ===== Scroll to Top ====
$(window).scroll(function() {
    if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
        $('#return-to-top').fadeIn(200);    // Fade in the arrow
    } else {
        $('#return-to-top').fadeOut(200);   // Else fade out the arrow
    }
});
$('#return-to-top').click(function() {      // When arrow is clicked
    $('body,html').animate({
        scrollTop : 0                       // Scroll to top of body
    }, 500);
});
</script>
			@endsection
@include('Frontend.layouts.scripts')

