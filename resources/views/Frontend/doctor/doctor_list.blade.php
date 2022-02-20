@include('Frontend.layouts.header')
    <div class="container py-5 px-2">
	<!-- Doctor Widget -->
    @foreach ($doctors as $doctor)
    <div class="card py-5 shadow doct-list " data-aos="flip-up" style="margin-top: 5rem!important;">
        <div class="card-body">
            <div class="doctor-widget">
                <div class="doc-info-left">
                    <div class="doctor-img ">
                        <img src="/uploads/Images/{{$doctor->profile_photo}}" class=" img-doct_list shadow " alt="User Image" style="height:223px!important; width:260px!important;">
                    </div>
                    <div class="doc-info-cont doct-list-text mt-3">
                        <h4 class="doc-name text-light">{{$doctor->name}}</h4>
                        <p class="doc-speciality text-light">{{$doctor->education}}</p>
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

                    <div class="clinic-booking mx-auto text-center">
                        <img src="{{asset('assets/img/shilpi.png')}}" alt="bar-code" width="100" height="100" class="mt-2 mb-3 barcode shadow">
                        <div class="clinic-booking ">
                            @if (Auth::check())
                            @if (Auth::user()->u_type==='Doctor')
                            <a href="#" onclick="alert(`Oops! You are a doctor, Can't take appointment`)" class="btn book-btn">Book Now</a>
                            @elseif (Auth::user()->u_type==='Admin')
                            <a href="#" onclick="alert(`Oops! You are Admin, Can't take appointment`)" class="btn book-btn">Book Now</a>
                            @else
                            <a class="apt-btn" href="{{'/patient/appointment'}}/{{$doctor->id}}">Book Appointment</a>
                            @endif
                            @else
                            <a class="apt-btn" href="{{'/patient/appointment'}}/{{$doctor->id}}">Book Appointment</a>
                            @endif
                        </div>
                     </div>






                </div>
            </div>
        </div>
    </div>
    @endforeach
    <!-- /Doctor Widget -->
</div>
    @include('Frontend.layouts.footer')
    @include('Frontend.layouts.scripts')
