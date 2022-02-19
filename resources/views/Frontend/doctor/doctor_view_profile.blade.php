@extends('Frontend.layouts.main')
@section('main-container')



    <!-- Page Content -->
    <div class="content">
        @foreach ($doctors as $doctor)
        <!-- Breadcrumb -->
			<div class="breadcrumb-bar mt-5">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-md-12 col-12">
							<nav aria-label="breadcrumb" class="page-breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="">Holistic Health</a></li>
									<li class="breadcrumb-item active" aria-current="page">Doctor Profile</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">{{$doctor->name}}</h2>
						</div>
					</div>
				</div>
			</div>
			<!-- /Breadcrumb -->






        <div class="container py-3">
            <!-- Doctor Widget -->

            <div class="card py-5 shadow doct-list " data-aos="flip-up" style="margin-top: 5rem!important;">
                <div class="card-body">
                    <div class="doctor-widget">
                        <div class="doc-info-left">
                            <div class="doctor-img ml-5">
                                <img src="/uploads/Images/{{$doctor->profile_photo}}" class="img-fluid img-doct_list shadow" alt="User Image" style="height:260px!important; max-width:175%!important;">
                            </div>
                            <div class="doc-info-cont mt-3" style="margin-left: 124px!important;">
                                <h4 class="doc-name text-light">{{$doctor->name}}</h4>
                                <p class="doc-speciality text-light" style="font-size: 15px;">{{$doctor->education}}</p>
                                <p class="doc-department text-light">{{$doctor->specilist}}</p>

                                <p>Doctor fees : <i class="fas fa-rupee-sign"></i> {{$doctor->fees}} </li></p>
                                <div class="clinic-details">
                                <p class="doc-location text-light"><i class="fas fa-map-marker-alt"></i> {{$doctor->address}} </p>

                                <div class="rating">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star"></i>

                                </div>

                                </div>

                            </div>
                        </div>
                        <div class="doc-info-right mr-5">
                            <div class="doctor-action ml-4">

                                <a href="https://wa.link/zpsror" target="_blank" class="btn btn-white msg-btn shadow">
                                    <i class="far fa-comment-alt"></i>
                                </a>
                                <a href="tel:{{$doctor->phone}}" class="btn btn-white call-btn shadow" >
                                    <i class="fas fa-phone"></i>
                                </a>
                                <a href="javascript:void(0)" class="btn btn-white call-btn shadow" data-toggle="modal" data-target="#video_call">
                                    <i class="fas fa-video"></i>
                                </a>
                            </div>

                            <div class="clinic-booking ">
                                <img src="{{asset('assets/img/shilpi.png')}}" alt="bar-code" width="100" height="100" class="mt-2 mb-3 ml-5 shadow">
                             </div>

                            {{-- <div class="clinic-booking" style="height: 50px;!important">
                                <a class="apt-btn" href="">Book Now</a>
                            </div> --}}
                            <div class="clinic-booking shadow">
                                <a class="apt-btn" href="{{'/patient/appointment'}}/{{$doctor->id}}">Book Appointment</a>
                            </div>



                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- /Doctor Widget -->
        </div>
    </div>
    <!-- /Page Content -->

@endsection
@include('Frontend.layouts.scripts')
